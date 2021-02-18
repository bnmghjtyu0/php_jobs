<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增職缺</title>
</head>
<body>
<h2>新增職缺</h2>
    <a href="./admin.php">回到管理頁</a>
    <form method="POST" action="handle_add.php">
        <div>職缺名稱: <input name="title"/></div>
        <div>職缺描述: <input name="description"/></div>
        <div>薪水範圍: <input name="salary"/></div>
        <div>職缺連結: <input name="link"/></div>
        <input type="submit" value="送出"/>

    </form>
</body>
</html>