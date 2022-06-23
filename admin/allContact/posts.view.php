<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Адреса</title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<a class="card btn-1" href="/admin/allContact/Contact/Contact.php"><span class="link-content">Назад</span></a>
<div class="postcard">
        <div class="container-contact">
            <?php foreach($contact as $post): ?>
                <a href="/admin/allContact/post.php?id=<?= $post->id ?>">
                    <p> <?= $post->country ?></p>
                    <p> <?= $post->number?></p>
                    <p> <?= $post->address ?></p><br>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>