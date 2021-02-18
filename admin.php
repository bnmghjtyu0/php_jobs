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
                        echo "<a class='job_link' href='./update.php?id=" . $row['id'] ."'>編輯職缺</a>";
                        echo " <a class='job_link' href='./delete.php?id=" . $row['id'] ."'>刪除職缺</a>";
                    echo "</div>";
                }
            }
        ?>

            <!-- <div class="job">
                <h2 class="job_title">前端工程師</h2>
                <div class="job_desc">前端工程師的描述前端工程師的描述前端工程師的描述前端工程師的描述前端工程師的描述前端工程師的描述</div>
                <div class="job_salary">薪資範圍: 面議</div>
                <a class="job_link" href="./">編輯職缺</a>
                <a class="job_link" href="./">刪除職缺</a>
            </div>
            <div class="job">
                <h2 class="job_title">前端工程師</h2>
                <div class="job_desc">前端工程師的描述前端工程師的描述前端工程師的描述前端工程師的描述前端工程師的描述前端工程師的描述</div>
                <div class="job_salary">薪資範圍: 面議</div>
                <a class="job_link" href="./">編輯職缺</a>
                <a class="job_link" href="./">刪除職缺</a>
            </div> -->
        </div>
    </div>
</body>
</html>