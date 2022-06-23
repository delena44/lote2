<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
$id = $_GET['id'] ?? 1;
$order = $dataOrder -> getOneOrderID($order_id);
$status = $dataStatus->getStatus();
include $_SERVER['DOCUMENT_ROOT'] . '/admin/allOrder/editOrder.view.php';