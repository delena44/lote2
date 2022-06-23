<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['deleteBtn'])) {
    $id = $_POST['id'];
    $status = $dataStatus->getOneStatusID($id);

    if (empty($error)) {
        $_SESSION['msg'] = "Файл успешно удалён";
        $_SESSION['alert'] = 'alert-success';
        $dataStatus->deleteStatus($id);
        header('Location: /admin/allStatus/index.php');
        die();
    }

    else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /posts/Status.view.php');
        die();
    }
}