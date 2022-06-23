<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['deleteBtn'])) {
    $dish_id = $_POST['dish_id'];
    $menu = $dataMenu->getOneMenuID($dish_id);
    $error = deleteImg($_SERVER["DOCUMENT_ROOT"] . '/img/' . $menu ->foto);

    if (empty($error)) {
        $_SESSION['msg'] = "Файл успешно удалён";
        $_SESSION['alert'] = 'alert-success';
        $dataMenu->deleteMenu($dish_id);
        header('Location: /admin/allMenu/index.php');
        die();
    }

    else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /posts/menu.view.php');
        die();
    }
}