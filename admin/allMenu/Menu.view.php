<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
</head>
<body>
<a class="card btn-1" href="/admin/allMenu/index.php"><span class="link-content">Назад</span></a>
<div class="postcard">
    <?php if ($menu): ?>
        <h2><?= $menu->name ?></h2>
        <img src="/../img/<?= $menu->foto ?>" alt=""  style="width: 170px; height: 130px;">
    <form action="deleteMenu.php" method="post"><br><br>
        <input type="hidden" name="dish_id" value="<?= $menu->dish_id?>">
        <a><?= $menu->description ?></a><br><br>
        <button type="submit" name="deleteBtn" id="deleteBtn" onclick="return confirm('Вы действительно хотите удалить?');">
            Удалить пиццу
        </button><br><br>
    </form>
        <button type="submit" onclick="location.href='/admin/allMenu/editMenu.php?id=<?= $menu->dish_id?>';">
            Изменить пиццу
        </button>
    <?php else: ?>
        <div>Запрашиваемый ресурс не найден...</div>
    <?php endif ?>

</div>
</body>
</html>
