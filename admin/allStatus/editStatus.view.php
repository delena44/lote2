<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$status->name?></title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
</head>
<body>
<a class="card btn-1" href="/admin/allStatus/index.php"><span class="link-content">Назад</span></a>
<div class="postcard">
    <form action="updateStatus.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div>
                <input type="text" name="status_id" value="<?= $status->status_id ?>">
                <div>
                    <label for="title" class="form-label">Статус:</label>
                    <input type="text" class="form-control" id="title" name="name"
                           value="<?= $status->name ?>"
                </div>
                </div>
                <button type="submit" name="submitUpdate">Изменить</button>
            </div>

            <br>
    </form>
</div>
</body>
</html>
