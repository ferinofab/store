<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store/db.php';

$id = $_GET['id'];
$characteristics = $pdo->query("select * from characteristics")->fetchAll(PDO::FETCH_ASSOC);
$name_pro = $pdo->query("select * from characteristics")->fetchAll(PDO::FETCH_ASSOC);

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

   .card{
       display: flex;
       flex-direction: column;
       border-bottom: 2px black solid;
   }
   .cards{
       display: flex;
       gap: 40px;
   }
</style>
<div class="container">
    <h1>Поступление</h1>
        <div class="cards">
            <?php foreach ($characteristics->fetchAll(PDO::FETCH_ASSOC) as $product):?>
                <div class="card">
                    <p>Дата поступления - <?=$product['date_time']?></p>
                    <p>Название - <?=$product['name']?></p>
                    <p>количество - <?=$product['amount']?></p>
            </div>

            <?php endforeach;?>

    </div>
</div>
<a href="index.php">Назад</a>

</body>
</html>
