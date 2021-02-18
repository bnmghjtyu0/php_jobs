<?php
    require_once('./conn.php');
    $id = $_GET['id'];

    $sql = 'SELECT * FROM jobs WHERE id = ' . $id;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc()
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯職缺</title>
</head>
<body>
<h2>編輯職缺</h2>
    <a href="./admin.php">回到管理頁</a>
    <form method="POST" action="handle_update.php">
        <div>職缺名稱: <input name="title" value="<?php echo $row["title"] ?>"/></div>
        <div>職缺描述: <input name="description" value="<?php echo $row["description"] ?>"/></div>
        <div>薪水範圍: <input name="salary" value="<?php echo $row["salary"] ?>"/></div>
        <div>職缺連結: <input name="link" value="<?php echo $row["link"] ?>"/></div>
        <input type="hidden" name="id"  value="<?php echo $row["id"] ?>"/>
        <input type="submit" value="送出"/>

    </form>
</body>
</html>