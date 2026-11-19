<?php
// Use a prepared statement
$pdo = new PDO(
  'mysql:host=localhost;dbname=e_library;charset=utf8mb4',
  'root',
  ''
);

$search = trim($_GET['search'] ?? '');
$stmt = $pdo->prepare('SELECT id, title FROM books WHERE title LIKE :search');
$stmt->execute(['search' => '%' . $search . '%']);

foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $book) {
  echo '<p>' . htmlspecialchars($book['title'], ENT_QUOTES, 'UTF-8') . '</p>';
}
?>