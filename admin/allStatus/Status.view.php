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
<a class="card btn-1" href="/admin/allStatus/index.php"><span class="link-content">Назад</span></a>
<div class="postcard">
    <?php if ($status): ?>
        <h2><?= $status->name ?></h2>
    <form action="deleteStatus.php" method="post">
        <input type="hidden" name="id" value="<?= $status->status_id ?>">
        <button type="submit" name="deleteBtn" id="deleteBtn" onclick="return confirm('Вы действительно хотите удалить?');">
            Удалить статус
        </button><br><br>
    </form>
        <button type="submit" onclick="location.href='/admin/allStatus/editStatus.php?id=<?= $status->status_id?>';">
            Изменить
        </button>
    <?php else: ?>
        <div>Запрашиваемый ресурс не найден...</div>
    <?php endif ?>

</div>
</body>
</html>
