<?php
session_start();

use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['submitUpdate'])) {
    unset($_SESSION['errors']);
    $data['address'] = htmlspecialchars($_POST['address']);
    $data['number'] = htmlspecialchars($_POST['number']);
    $data['country'] = htmlspecialchars($_POST['country']);
    $data['id'] = $_POST['id'];

    $contact = $dataContact->getOneContactID($data['id']);


    if (empty($errorLoad)) {
        $dataContact->updateContact($data);
        header('Location: /admin/allContact/index.php');
    }
    else {
        $_SESSION['error']['update'] = $errorLoad;
        header('Location: /admin/allContact/editContact.php?id' . $data['id']);
    }
}