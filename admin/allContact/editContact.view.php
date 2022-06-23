<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$contact->country?></title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
</head>
<body>
<a class="card btn-1" href="/admin/allContact/index.php"><span class="link-content">Назад</span></a>
<div class="postcard">
    <form action="updateContact.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div>
                <input type="text" name="id" value="<?= $contact->id ?>">
                <div>
                    <label for="title" class="form-label">Город:</label>
                    <input type="text" class="form-control" id="title" name="country"
                           value="<?= $contact->country ?>"
                    <label for="title" class="form-label">Адрес:</label>
                    <input type="text" class="form-control" id="title" name="address"
                           value="<?= $contact->address ?>"
                    <label for="title" class="form-label">Телефон:</label>
                    <input type="text" class="form-control" id="title" name="number"
                           value="<?= $contact->number ?>"
                </div>
            </div>
            <button type="submit" name="submitUpdate">Изменить</button>
        </div>

        <br>
    </form>
</div>
</body>
</html>
