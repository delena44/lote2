<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статус</title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
</head>
<body>
<a class="card btn-1" href='/admin/allStatus/Status/Status.php'><span class="link-content">Назад</span></a>
<form action="insertPost.php" method="post" class="postcard">
    <h2>Добавить статус</h2><br>
    <p class="alert<?= $_SESSION['alert'] ?>"><?= $_SESSION['msg'] ?? ''?></p>
            <label for="title">Cтатус:</label><br><br>
            <input type="text" name="name"><br><br>
        <button class="submit" type="submit" name="submit">Добавить</button><br><br>

    </form>
</form>
</body>
</html>

