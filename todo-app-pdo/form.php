<!-- This is a placeholder for the main content of the todo application -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../config/db_connect_pdo.php';

$errorMessage = '';
$error = false;

if (isset($_POST['submit'])) {
  $title = trim($_POST['title']);

  if (empty($title)) {
    $error = true;
    $errorMessage = 'Title is required';
  } else {
    try {
      $stmt = $pdo->prepare(
        "INSERT INTO todos (title, is_complete) VALUES (:title, :is_complete)"
      );

      $stmt->execute([
        'title' => $title,
        'is_complete' => 0
      ]);

      header("Location: " . $_SERVER['PHP_SELF']);
      exit;
    } catch (PDOException $e) {
      die("Insert error: " . $e->getMessage());
    }
  }
}

?>



<h1 class="text-2xl font-bold mb-4">TODO App</h1>
<form id="todo-form" class="mb-4" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
  <input type="text" name="title" id="todo-input" class="w-full p-2 border border-gray-300 rounded mb-1 <?php echo $error ? 'border-red-500' : ''; ?>" placeholder="Add a new todo item">
  <?php if ($error): ?>
    <p class="text-red-500 text-xs "><?php echo htmlspecialchars($errorMessage); ?></p>
  <?php endif; ?>
  <button type="submit" name="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 mt-2">Add Todo</button>
</form>