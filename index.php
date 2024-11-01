<?php
$conn = new SQLite3('data.db');

$result = $conn->query("SELECT message FROM global");

$row = $result->fetchArray();
echo "<h1>".$row['message']."</h1>";
?>
