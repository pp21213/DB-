<?php
$mysqli = new mysqli('localhost', 'root', '', 'board');

$id = $_GET['id']; // 게시글 ID

$query = "SELECT title, content FROM posts WHERE id = $id";
$result = $mysqli->query($query);

$row = $result->fetch_assoc(); // 게시글 정보
?>
<!DOCTYPE html>
<html>
<head>
    <title>게시글 보기</title>
</head>
<body>
    <h1><?php echo $row['title']; ?></h1> <!-- 제목 -->
    <p><?php echo $row['content']; ?></p> <!-- 내용 -->
</body>
</html>
