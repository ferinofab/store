<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store/store/db.php';
///store

$name = $_POST['name'];
$price = $_POST['price'];
$article = $_POST['article'];
$pdo->query("insert into product (name, price, article) values ('$name', '$price', '$article')");
header("Location: /index.php");

