<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="style/styleAdmin.css">
</head>
<body>
<a class="card btn-1" href="/index.php"><span class="link-content">На сайт</span></a>
<form action="insertPost.php" method="post" class="postcard">
    <h3>Панель администратора</h3><br><br>
    <br>
    <div class="card btn-1" onclick="location.href='/admin/allStatus/Status/Status.php';" id="pointer">Статус</div><br><br>
    <div class="card btn-1"  onclick="location.href='/admin/allMenu/menu/Menu.php';" id="pointer">Пицца</div><br><br>
    <div class="card btn-1"  onclick="location.href='/admin/allContact/Contact/Contact.php';" id="pointer">Адреса</div><br><br>
    <div class="card btn-1"  onclick="location.href='/admin/allOrder/Order/Order.php';" id="pointer">Заказы</div><br><br>
</form>
</body>
</html>

