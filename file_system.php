<!-- File system functions -->

<?php
$fileName = 'data.txt';

// All file related functions
if (file_exists($fileName)) {
    // Get file size
    $fileSize = filesize($fileName);
    echo "File Size: " . $fileSize . " bytes<br>";

    // Get file contents
    $fileContents = file_get_contents($fileName);
    echo "File Contents:<br>" . nl2br(htmlspecialchars($fileContents)) . "<br>";

    // Write to file
    $newContent = "\nNew line added at " . date('Y-m-d H:i:s');
    file_put_contents($fileName, $newContent, FILE_APPEND);
    echo "New content added to the file.<br>";

    // Read file line by line
    $lines = file($fileName);
    echo "File Lines:<br>";
    foreach ($lines as $lineNumber => $lineContent) {
        echo "Line " . ($lineNumber + 1) . ": " . htmlspecialchars($lineContent) . "<br>";
    }
} else {
    echo "The file does not exist.";
}
?>