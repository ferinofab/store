<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store/store/db.php';
///store

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
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container{
        margin: 20px 30px;
    }
    h1{
        text-align: center;
    }
    .nav{
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: center;
        margin: 40px;
    }
    .nav a{
        text-decoration: none;
        color: gray;
    }
    .nav a:hover{
        color: black;
    }
    .cards{
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
    }
    .card{
        padding: 20px;
        border-radius: 15px;
        border: 1px gray solid;
        display: flex;
        gap: 10px;
        flex-direction: column;
    }
    .card a {
        text-align: center;
    }

.title{
    font-size: 20pt;
    text-align: center;
    border-bottom: 1px black solid;
    color: #474646;
}
.about p {
    font-size: 12pt;
    color: #1e1d1d;

}

</style>
<div class="container">
    <h1>Каталог товаров</h1>
    <div class="nav">
        <a href="Add_product.php">Добавить товар</a>
        <a href="Add_admission.php"> Добавить информацию о поступлении товара</a>
    </div>
    <div class="content">
        <div class="cards">
            <?php foreach ($products->fetchAll(PDO::FETCH_ASSOC) as $product):?>
            <div class="card">
                    <p class="title"><?=$product['name']?></p>
                   <div class="about">
                       <p>Цена - <?=$product['price']?></p>
                       <p>Артикул - <?=$product['article']?></p>
                   </div>
                    <a href="Admission.php?id=<?=$product['id']?>">Поступление</a>
            </div>
            <?php endforeach;?>
        </div>


    </div>
</div>
</body>
</html>
