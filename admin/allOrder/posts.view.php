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
<a class="card btn-1" href="/admin/allOrder/Order/Order.php"><span class="link-content">Назад</span></a>
<div class="postcard">
        <div class="CountryContainer">
            <?php foreach($order as $post): ?>
            <a href="/admin/allOrder/post.php?id=<?= $post->order_id ?>">
                <table>
                    <tr>
                        <th>Пользователь</th>
                        <th>Email</th>
                        <th>Статус заказа:</th>
                        <th>Цена</th>
                        <th>Дата</th>
                    </tr>
                <tr>
                    <th><?= $user->name ?></th>
                    <th><?= $user->email ?></th>
                    <th><?= $post->status_id ?></th>
                    <th><?= $post->final_price ?></th>
                        <th><?= $post->date ?></th>
                </tr>
            </table>

            <?php endforeach ?>
        </div>
    </div>
</body>
</html>