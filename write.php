<?php
$mysqli = new mysqli('localhost', 'root', '', 'board');

$title = $_POST['title']; // 작성한 제목
$content = $_POST['content']; // 작성한 내용

$query = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
$mysqli->query($query);

// 새로운 게시글의 ID를 가져옵니다.
$new_id = $mysqli->insert_id;

header("Location: read.php?id=$new_id"); // 새로 작성한 게시글로 이동합니다.
?>
