
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пицца</title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
</head>
<body>
<a class="card btn-1" href="/admin/allContact/Contact/Contact.php"><span class="link-content">Назад</span></a>
<div class="postcard">
    <form action="insertPost.php" method="post" enctype="multipart/form-data">
        <h2 class="name" >Добавить адрес</h2><br>
        <div>
            <label class="name" for="title">Город</label><br><br>
            <input type="text" name="country">
        </div><br>
        <div>
            <label class="name"  for="title">Адрес</label><br><br>
            <textarea type="text" name="address" rows="10" cols="45"></textarea>
        </div><br>
        <div>
            <label class="name"  for="title">Телефон</label><br><br>
            <input type="text" name="number">
        </div><br>
        <br>
        <button class="btn-2" type="submit" name="submit">Добавить</button><br><br>
    </form>
</div>
</body>
</html>
