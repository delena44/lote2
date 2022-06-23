<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['submit'])) {
    $data['name'] = htmlspecialchars($_POST['name']);

    if (empty($error)) {
        $msg = "Файл успешно загружен";
        $_SESSION['alert'] = 'alert-success';
        $data['image'] = $fileName;

        $dataOrder->insertOrder($data);
        header('Location: /admin/index.php');
    }
    else {
        $msg = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /Order/new.php');
    }
}