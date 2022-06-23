<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
</head>
<body>
<a class="card btn-1" href="/admin/allStatus/Status/Status.php"><span class="link-content">Назад</span></a>
<div class="postcard">
        <div class="CountryContainer">
            <?php foreach($status as $post): ?>
                <a href="/admin/allStatus/post.php?id=<?= $post->status_id ?>">
                    <p> <?= $post->name ?></p>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>