<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['submit'])) {
    $data['name'] = htmlspecialchars($_POST['name']);
    $data['description'] = htmlspecialchars($_POST['description']);
    $data['price'] = htmlspecialchars($_POST['price']);
    [$error, $fileName] =
        loadImg($maxFileSize, $validFiletypes, $uploadPath, 'foto');
    $data['weight'] = htmlspecialchars($_POST['weight']);

    if (empty($error)) {
        $_SESSION['msg'] = "Файл успешно загружен";
        $_SESSION['alert'] = 'alert-success';
        $data['foto'] = $fileName;

        $dataMenu->insertMenu($data);
        header('Location: /admin/index.php');
    }
    else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /menu/new.php');
    }
}