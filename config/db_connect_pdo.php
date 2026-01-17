<?php
try {
  $pdo = new PDO(
    "mysql:host=localhost;dbname=php_todo;charset=utf8mb4",
    "Blade",
    "Blade-01",
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
  );
} catch (PDOException $e) {
  die("Connection error: " . $e->getMessage());
}
