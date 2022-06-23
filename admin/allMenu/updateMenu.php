<?php
session_start();

use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['submitUpdate'])) {
    unset($_SESSION['errors']);
    $data['name'] = htmlspecialchars($_POST['name']);
    $data['description'] = htmlspecialchars($_POST['description']);
    $data['price'] = htmlspecialchars($_POST['price']);
    $data['weight'] = htmlspecialchars($_POST['weight']);

    [$error, $fileName] =
        loadImg($maxFileSize, $validFiletypes, $uploadPath, 'foto');

    $menu = $dataMenu->getOneMenuID($data['dish_id']);


    if (empty($errorLoad)) {
        $dataMenu->updateMenu($data);
        header('Location: /admin/allMenu/index.php');
    }
    else {
        $_SESSION['error']['update'] = $errorLoad;
        header('Location: /admin/allMenu/editMenu.php?id' . $data['dish_id']);
    }
}