<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store/db.php';

$products = $pdo->query("SELECT * FROM product");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Каталог товаров</h1>

    <div class="content">
        <div class="cards">
            <div class="card">
                <?php foreach ($products->fetchAll(PDO::FETCH_ASSOC) as $product):?>
                    <p>Название - <?=$product['name']?></p>
                    <p>Цена - <?=$product['price']?></p>
                    <p>Артикул - <?=$product['article']?></p>
                    <a href="Admission.php?id=<?=$product['id']?>">Поступление</a>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
