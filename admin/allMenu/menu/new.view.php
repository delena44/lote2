
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
<a class="card btn-1" href="/admin/allMenu/menu/Menu.php"><span class="link-content">Назад</span></a>
<div class="postcard">
    <form action="insertPost.php" method="post" enctype="multipart/form-data">
        <h2 class="name" >Добавить пиццу</h2><br>
        <div>
            <label class="name" for="title">Название</label><br><br>
            <input type="text" name="name">
        </div><br>
        <div>
            <label class="name"  for="title">Состав пиццы</label><br><br>
            <textarea type="text" name="description" rows="10" cols="45"></textarea>
        </div><br>
        <div>
            <label class="name"  for="title">Цена</label><br><br>
            <input type="number" name="price">
        </div><br>
        <div>
            <label class="name"  for="title">Вес</label><br><br>
            <input type="number" name="weight">
        </div><br>
        <div>
            <label class="name"  for="title">Выберите файл-фото</label> <br><br>
            <input name="foto" type="file" name="file" id="image" class="input input__file" multiple>
            <label for="image" class="input__file-button">
                    <span class="input__file-button-text">
                    </span>
            </label>
        </div>
        <br>
        <button class="btn-2" type="submit" name="submit">Добавить</button><br><br>
        <div class="load"><br><br>
            <img src="" alt="" id="loadImage">
        </div>
    </form>
</div>
</body>
</html>
<script>
    let loadImage = document.querySelector("#loadImage"),
        image = document.querySelector("#image")

    image.addEventListener("change", function(e){
        loadImage.src = URL.createObjectURL(e.target.files[0]);
        loadImage.style.display = "block";
        loadImage.style.width = "170px";
        loadImage.style.height = "130px";
        loadImage.onload = function(){
            URL.revokeObjectURL(e.target.src)
        };
    })
</script>