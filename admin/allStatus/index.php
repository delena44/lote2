<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
$status = $dataStatus->getStatus();

include $_SERVER['DOCUMENT_ROOT'] . '/admin/allStatus/posts.view.php';