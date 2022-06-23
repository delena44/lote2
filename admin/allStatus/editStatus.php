<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
$id = $_GET['id'] ?? 1;
$status = $dataStatus -> getOneStatusID($id);
include $_SERVER['DOCUMENT_ROOT'] . '/admin/allStatus/editStatus.view.php';