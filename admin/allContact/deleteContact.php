<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['deleteBtn'])) {
    $id = $_POST['id'];
    $contact = $dataContact->getOneContactID($id);

    if (empty($error)) {
        $_SESSION['msg'] = "Файл успешно удалён";
        $_SESSION['alert'] = 'alert-success';
        $dataContact->deleteContact($id);
        header('Location: /admin/allContact/index.php');
        die();
    }

    else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /posts/Contact.view.php');
        die();
    }
}