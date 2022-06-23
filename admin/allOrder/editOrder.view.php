<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$order->name?></title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
</head>
<body>
<a class="card btn-1" href="/admin/allOrder/index.php"><span class="link-content">Назад</span></a>
<div class="postcard">
    <form action="updateOrder.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div>
                <div>
                    <label for="title">Статус:</label>
                    <select name="status_id ">
                        <?php foreach($status as $s): ?>
                            <option value="<?= $s->status_id ?>"><?= $s->name ?></option>
                        <?php endforeach ?>
                    </select><br>
                </div><br>
                <button type="submit" name="submitUpdate">Изменить</button>
            </div>
            <br>
    </form>
</div>
</body>
</html>
