<!-- This file is to display GET and POST data -->
 <?php
  if(isset($_GET['fullName'])) {
    $fullName = htmlspecialchars($_GET['fullName']); // htmlspecialchars is used for security purpose
    echo "<h2>GET Input Received: $fullName</h2>";
  }

  if(isset($_POST['fullName'])) {
    $fullName = htmlspecialchars($_POST['fullName']);
    echo "<h2>POST Input Received: $fullName</h2>";
  }

  if(isset($_REQUEST['fullName'])) {
    $fullName = htmlspecialchars($_REQUEST['fullName']);
    echo "<h2>REQUEST Input Received: $fullName</h2>";
  }

  echo $_SERVER['QUERY_STRING']
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Get and Post</title>
 </head>
 <body>
  <div class="grid grid-cols-1 gap-8 p-6 max-w-4xl mx-auto">
  <form method="GET">
    <label for="fullName">Full Name:</label>
    <div class="flex items-center gap-x-2">
      <input type="text" id="fullName" name="fullName" class="h-10 p-2 rounded-md w-full border border-gray-300 basis-[70%]">
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md basis-[20%]">Submit GET</button>
    </div>
  </form>

  <form method="POST">
    <label for="fullName">Full Name:</label>
    <div class="flex items-center gap-x-2">
      <input type="text" id="fullName" name="fullName" class="h-10 p-2 rounded-md w-full border border-gray-300 basis-[70%]">
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md basis-[20%]">Submit POST</button>
    </div>
  </form>
  </div>
 </body>
 </html>