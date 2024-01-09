<!DOCTYPE html>
<html>
<head>
    <title>게시글 작성</title>
</head>
<body>
    <h1>게시글 작성</h1>
    <form action="write.php" method="post">
        <label for="title">제목:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">내용:</label><br>
        <textarea id="content" name="content"></textarea><br>
        <input type="submit" value="작성">
    </form>

    <h2>게시글 목록</h2>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'board');
    $query = "SELECT id, title, created_at FROM posts ORDER BY created_at DESC";
    $result = $mysqli->query($query);

    while ($row = $result->fetch_assoc()) {
        echo "<a href='read.php?id=".$row['id']."'>제목: " . $row['title'] . ", 작성일: " . $row['created_at'] . "</a><br>";
    }
    ?>
</body>
</html>
