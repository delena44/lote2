<?php
session_start();

use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['submitUpdate'])) {
    unset($_SESSION['errors']);
    $data['name'] = htmlspecialchars($_POST['name']);
    $data['status_id'] = $_POST['status_id'];

    $status = $dataStatus->getOneStatusID($data['status_id']);


    if (empty($errorLoad)) {
        $dataStatus->updateStatus($data);
        header('Location: /admin/allStatus/index.php');
    }
    else {
        $_SESSION['error']['update'] = $errorLoad;
        header('Location: /admin/allStatus/editStatus.php?id' . $data['status_id']);
    }
}