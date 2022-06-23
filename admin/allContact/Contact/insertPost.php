<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['submit'])) {
    $data['address'] = htmlspecialchars($_POST['address']);
    $data['number'] = htmlspecialchars($_POST['number']);
    $data['country'] = htmlspecialchars($_POST['country']);


    if (empty($error)) {
        $_SESSION['msg'] = "Файл успешно загружен";
        $_SESSION['alert'] = 'alert-success';
        $data['image'] = $fileName;

        $dataContact->insertContact($data);
        header('Location: /admin/index.php');
    }
    else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /Contact/new.php');
    }
}