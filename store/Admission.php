<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store/store/db.php';
///store


$id = $_GET['id'];
$characteristics = $pdo->query("select * from characteristics join product on characteristics.product_id = product.id where product.id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
$name_pro = $pdo->query("select name from product where id = '$id'")->fetch(PDO::FETCH_ASSOC);
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

    .container{
        margin: 20px 30px;
    }
   .card{
       display: flex;
       flex-direction: column;
       border-bottom: 2px black solid;
       border: 1px black solid;
       padding: 20px;
       border-radius: 15px;
   }
   .cards{
       display: flex;
       gap: 60px;
   }
   .nav a{
       display: flex;
       flex-direction: column;
       justify-content: center;
       align-items: center;
       text-decoration: none;
       color: gray;
       margin-top: 20px;
   }
   .nav a:hover{
       color: black;
   }
   h1{
       text-align: center;
       margin-bottom: 30px;
   }
   .nav{
       margin-bottom: 100px;
   }
    .title{
        font-size: 20pt;
        text-align: center;
        border-bottom: 1px black solid;
        color: #474646;
    }
</style>
<div class="container">
    <h1>Поступление</h1>
    <div class="nav">
        <a href="index.php">Назад</a>
        <a href="Add_admission.php?id_product=<?=$id?>"> Добавить информацию о поступлении товара</a>
    </div>
        <div class="cards">
            <?php foreach ($characteristics as $item):?>
                <div class="card">
                    <p class="title"> <?=$name_pro['name']?></p>
                    <p>Дата поступления - <?=$item['date_time']?></p>
                    <p>количество - <?=$item['amount']?></p>
                    <a href="/handler/delete.php?id=<?=$item['id']?>">Удалить поступление</a>
            </div>

            <?php endforeach;?>

    </div>
</div>


</body>
</html>
