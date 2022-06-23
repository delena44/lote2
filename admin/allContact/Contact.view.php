<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Адрес</title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
</head>
<body>
<a class="btnback" href="/admin/allContact/index.php"><span class="link-content">Назад</span></a>
<div class="postcard">
    <?php if ($contact): ?>
        <h2><?= $contact->country ?></h2>
    <form action="deleteContact.php" method="post">
        <input type="hidden" name="id" value="<?= $contact->id?>">
        <a class="contact"><?= $contact->address ?></a><br><br>
        <a class="contact"><?= $contact->number?></a><br><br>
        <button type="submit" name="deleteBtn" id="deleteBtn" onclick="return confirm('Вы действительно хотите удалить?');">
            Удалить адрес
        </button><br><br>
    </form>
        <button type="submit" onclick="location.href='/admin/allContact/editContact.php?id=<?= $contact->id?>';">
            Изменить адрес
        </button>
    <?php else: ?>
        <div>Запрашиваемый ресурс не найден...</div>
    <?php endif ?>

</div>
</body>
</html>
