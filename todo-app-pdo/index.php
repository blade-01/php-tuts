<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../config/db_connect_pdo.php';

try {
  $stmt = $pdo->query(
    "SELECT * FROM todos ORDER BY created_at DESC"
  );
  $todos = $stmt->fetchAll();
} catch (PDOException $e) {
  die("Fetch error: " . $e->getMessage());
}


if (isset($_POST['delete'])) {
  $id = (int) $_POST['delete']; // cast for safety

  try {
    $stmt = $pdo->prepare(
      "DELETE FROM todos WHERE id = :id"
    );
    $stmt->execute(['id' => $id]);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
  } catch (PDOException $e) {
    die("Delete error: " . $e->getMessage());
  }
}



include 'header.php';
include 'form.php';
?>
<ul id="todo-list" class="list-disc">
  <?php foreach ($todos as $todo): ?>
    <li class="mb-2 flex items-center hover:bg-gray-100 p-2 rounded even:bg-gray-50">
      <input type="checkbox" id="<?php echo htmlspecialchars($todo['id']); ?>" class="mr-2" <?php echo $todo['is_complete'] ? 'checked' : ''; ?>>
      <label for="<?php echo htmlspecialchars($todo['id']); ?>" class="<?php echo $todo['is_complete'] ? 'line-through text-gray-500' : ''; ?> flex-grow"><?php echo htmlspecialchars($todo['title']); ?></label>

      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="flex space-x-1.5">
        <button class="text-blue-500 border bg-blue-100 rounded w-8 h-8 grid place-items-center cursor-pointer hover:text-blue-700 hover:border-blue-700 hover:bg-blue-200">
          <i class="mdi mdi-pencil-outline text-xl"></i>
        </button>
        <button class="text-red-500 border bg-red-100 rounded w-8 h-8 grid place-items-center cursor-pointer hover:text-red-700 hover:border-red-700 hover:bg-red-200" name="delete" value="<?php echo htmlspecialchars($todo['id']); ?>">
          <i class="mdi mdi-delete-outline text-xl"></i>
        </button>
      </form>
    </li>
  <?php endforeach; ?>
</ul>

<?php include 'footer.php'; ?>