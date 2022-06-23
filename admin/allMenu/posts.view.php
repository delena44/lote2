<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пиццы</title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<a class="card btn-1" href="/admin/allMenu/menu/Menu.php"><span class="link-content">Назад</span></a>
<div class="postcard">
        <div class="container">
            <?php foreach($menu as $post): ?>
                <a href="/admin/allMenu/post.php?id=<?= $post->dish_id ?>">
                    <p> <?= $post->name ?></p>
                    <img src="/../img/<?= $post->foto ?>" alt=""  style="width: 170px; height: 130px;">
                </a>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>