<?php
session_start();

use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

if(isset($_POST['submitUpdate'])) {
    unset($_SESSION['errors']);
    $data['name'] = htmlspecialchars($_POST['name']);
    $data['date'] = htmlspecialchars($_POST['date']);
    $data['user_id'] = htmlspecialchars($_POST['user_id']);
    $data['final_price'] = htmlspecialchars($_POST['final_price']);
    $data['status_id'] = htmlspecialchars($_POST['status_id']);
    $data['order_id'] = $_POST['order_id'];

    $order = $dataOrder->getOneOrderID($data['order_id']);


    if (empty($errorLoad)) {
        $dataOrder->updateOrder($data);
        header('Location: /admin/allOrder/index.php');
    }
    else {
        $_SESSION['error']['update'] = $errorLoad;
        header('Location: /admin/allOrder/editOrder.php?id' . $data['order_id']);
    }
}