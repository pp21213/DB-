<?php
$mysqli = new mysqli('localhost', 'root', '', 'board');

$query = "SELECT id, title, created_at FROM posts ORDER BY created_at DESC";
$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {
    echo "제목: " . $row['title'] . ", 작성일: " . $row['created_at'] . "<br>";
}
?>
