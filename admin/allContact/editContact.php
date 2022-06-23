<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
$id = $_GET['id'] ?? 1;
$contact = $dataContact -> getOneContactID($id);
include $_SERVER['DOCUMENT_ROOT'] . '/admin/allContact/editContact.view.php';