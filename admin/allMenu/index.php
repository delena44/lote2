<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$menu = $dataMenu ->getAllMenu();

include $_SERVER['DOCUMENT_ROOT'] . '/admin/allMenu/posts.view.php';