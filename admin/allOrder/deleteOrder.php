<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['deleteBtn'])) {
    $id = $_POST['id'];
    $order = $dataOrder->getOneOrderID($id);

    if (empty($error)) {
        $_SESSION['msg'] = "Файл успешно удалён";
        $_SESSION['alert'] = 'alert-success';
        $dataOrder->deleteOrder($id);
        header('Location: /admin/allOrder/index.php');
        die();
    }

    else {
        $_SESSION['msg'] = $error;
        $_SESSION['alert'] = 'alert-danger';
        header('Location: /posts/Order.view.php');
        die();
    }
}