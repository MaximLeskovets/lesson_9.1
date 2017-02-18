<?php
    require_once "list.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $tolstoy->getImage();
    $tolstoy->getInfo();
?>
<br/>
<?php
    $esenin->getImage();
    $esenin->getInfo();
?>
<br/>
<?php
    $goncharov->getImage();
    $goncharov->getInfo();
?>
<br/>
<?php
    $turgenev->getImage();
    $turgenev->getInfo();
?>
<br/>
<?php
    $dostoevskiy->getImage();
    $dostoevskiy->getInfo();
?>
</body>
</html>