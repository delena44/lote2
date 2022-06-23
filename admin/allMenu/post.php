<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
$id = $_GET['id'] ?? 1;
$menu = $dataMenu->getOneMenuID($id);
include $_SERVER['DOCUMENT_ROOT'] . "/admin/allMenu/Menu.view.php";