<?php require_once('./conn.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理後台</title>
</head>
<body>
    <div class="container">
        <h1>管理後台</h1>
        <a href="./add.php">新增職缺</a>
        <div class="jobs">

        <?php 
            $sql = 'SELECT * from jobs ORDER BY created_at DESC';
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='job'>";
                        echo "<h2 class='job_title'>" . $row['title'] . "</h2>";
                        echo "<p class='job_desc'>" . $row['description'] . "</p>";
                        echo "<p class='job_salary'>" . $row['salary'] . "</p>";
                        echo "<a class='job_link' href='" . $row['link'] ."'>更多資訊" . "</a>";
                    echo "</div>";
                }
            }
        ?>
        </div>
    </div>
</body>
</html>