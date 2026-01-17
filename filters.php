<!-- This file contains filter functions for the application -->
<?php
      if(filter_has_var(INPUT_POST, 'inputText') && filter_has_var(INPUT_POST, 'filterType')) {
        $inputText = $_POST['inputText'];
        $filterType = $_POST['filterType'];
        $filteredOutput = '';
        // filter_input(INPUT_POST, 'inputText', FILTER_SANITIZE_STRING);
        switch($filterType) {
          // case 'sanitize_string':
          //   $filteredOutput = filter_var($inputText, FILTER_SANITIZE_STRING); // Remove tags and encode special characters (deprecated in PHP 8.1)
          //   break;
          case 'validate_email':
            $filteredOutput = filter_var($inputText, FILTER_VALIDATE_EMAIL) ? 'Valid Email' : 'Invalid Email'; // Validate email format
            break;
          case 'sanitize_email':
            $filteredOutput = filter_var($inputText, FILTER_SANITIZE_EMAIL); // Remove all illegal characters from email
            break;
          case 'validate_url':
            $filteredOutput = filter_var($inputText, FILTER_VALIDATE_URL) ? 'Valid URL' : 'Invalid URL'; // Validate URL format
            break;
          case 'sanitize_url':
            $filteredOutput = filter_var($inputText, FILTER_SANITIZE_URL); // Remove all illegal characters from URL
            break;
          default:
            $filteredOutput = 'No valid filter selected.';
        }

        // echo "<h2>Filtered Output:</h2>";
        // echo "<p>" . htmlspecialchars($filteredOutput) . "</p>";
      }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Form Filter</title>
</head>
<body>
  <!-- Format with tailwind -->
  <div class="max-w-md mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Input Filter Form</h1>
    <?php if($filteredOutput): ?>
      <div class="mb-4 p-4 border rounded bg-gray-100 text-gray-800">
        <h2>Filtered Output: <?php echo htmlspecialchars($filteredOutput); ?></h2> 
      </div>
    <?php endif; ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="inputText" class="block text-sm font-medium text-gray-700">Enter Text:</label>
      <input type="text" id="inputText" name="inputText" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
      <br><br>
      <label for="filterType" class="block text-sm font-medium text-gray-700">Choose a filter:</label>
      <select id="filterType" name="filterType" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
        <!-- <option value="sanitize_string">Sanitize String</option> -->
        <option value="validate_email">Validate Email</option>
        <option value="sanitize_email">Sanitize Email</option>
        <option value="validate_url">Validate URL</option>
        <option value="sanitize_url">Sanitize URL</option>
      </select>
      <br><br>
      <input type="submit" value="Apply Filter" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
  </div>
</body>
</html>