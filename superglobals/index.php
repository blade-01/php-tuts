<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Information</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
  <div class="p-6 max-w-4xl mx-auto">
    <h1 class="text-4xl font-medium pb-2">Server Information</h1>
    <?php if($server): ?>
      <ul class="list-none border border-gray-300 rounded-md bg-gray-50 break-all">
        <?php foreach ($server as $key => $value): ?>
          <li class="border-b border-b-gray-300 p-4 last:border-b-0"><strong><?php echo htmlspecialchars($key); ?>:</strong> <?php echo htmlspecialchars($value); ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <h1 class="text-4xl font-medium pb-2 mt-5">Client Information</h1>
    <?php if($client): ?>
      <ul class="list-none border border-gray-300 rounded-md bg-gray-50 break-all">
        <?php foreach ($client as $key => $value): ?>
          <li class="border-b border-b-gray-300 p-4 last:border-b-0"><strong><?php echo htmlspecialchars($key); ?>:</strong> <?php echo htmlspecialchars($value); ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</body>
</html>