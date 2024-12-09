<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/db.php';

$id = $_GET['id'];
$pdo->query("delete from characteristics where id='$id'");
header("Location: /index.php");

