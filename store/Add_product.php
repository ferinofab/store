<?php

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
        <h1>Добавление</h1>
        <form action="/handler/add_product.php" method="post">
            <input type="text" placeholder="Название" name="name">
            <input type="text" placeholder="Цена" name="price">
            <input type="text" placeholder="Артикул" name="article">
            <input type="submit">
        </form>
    </div>
</body>
</html>
