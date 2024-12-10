<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/store/store/db.php';
$products = $pdo->query("select name,id from product")->fetchAll(PDO::FETCH_ASSOC);
$id = $_GET['id_product']??null;

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
    <h1>Добавление информации о поступлении товара</h1>

    <?php if($id == null):?>
        <form action="/store/store/handler/Add_admission.php" method="post">
            <input type="datetime-local" placeholder="Дата и время поставки" name="date_time">
            <select name="select" id="">
                <option value=""></option>
                <?php foreach ($products as $product):?>
                    <option value="<?=$product['id']?>"><?=$product['name']?></option>
                <?php endforeach;?>
            </select>
            <input type="text" placeholder="Колличество" name="amount">
            <input type="submit">
        </form>
    <?php else:?>
        <form action="/handler/Add_admission.php" method="post">
            <input type="datetime-local" placeholder="Дата и время поставки" name="date_time">
            <input type="hidden" value="<?=$id?>" name="id">
            <input type="text" placeholder="Колличество" name="amount">
            <input type="submit">
        </form>
    <?php endif;?>

</div>
</body>
</html>
