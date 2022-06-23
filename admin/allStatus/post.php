<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
$id = $_GET['id'] ?? 1;
$order = $dataOrder->getOneOrderID($id);
$status = $dataStatus->getOneStatusID($id);
include $_SERVER['DOCUMENT_ROOT'] . "/admin/allStatus/Status.view.php";