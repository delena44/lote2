<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$menu->name?></title>
    <link rel="stylesheet" href="/admin/style/styleAdmin.css">
</head>
<body>
<a class="card btn-1" href="/admin/allMenu/index.php"><span class="link-content">Назад</span></a>
<div class="postcard">
    <form action="updateMenu.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div>
                <input type="text" name="dish_id" value="<?= $menu->dish_id ?>">
                <div>
                    <label for="title" class="form-label">Название</label><br>
                    <input type="text" class="form-control" id="title" name="name"
                           value="<?= $menu->name ?>"
                    <label for="title" class="form-label">Состав пиццы</label>
                    <input type="text" class="form-control" id="title" name="description"
                           value="<?= $menu->description ?>"
                    <label for="title" class="form-label">Цена</label>
                    <input type="text" class="form-control" id="title" name="price"
                           value="<?= $menu->price ?>"
                    <label for="title" class="form-label">Вес</label>
                    <input type="text" class="form-control" id="title" name="weight"
                           value="<?= $menu->weight ?>"
                    <div>
                        <label for="title">Выберите файл-фото</label> <br><br>
                        <input name="foto" type="file" id="image" class="input input__file" multiple>
                        <label for="image" class="input__file-button">
                    <span class="input__file-button-text">
                    </span>
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" name="submitUpdate">Изменить</button>
        </div>
        <br>
    </form>
</div>
</body>
</html>
