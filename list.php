<?php
    require_once "Book.php";

    $tolstoy = new Book('Толстой Л. Н.', "Война и мир, Первый том",1863,308);
    $esenin = new Book('Есенин С. А.',' Радуница', 1916, 62);
    $goncharov = new Book("Гончаров И. А.", "Обломов", 1859, 390);
    $turgenev= new Book("Тургенев С. И.", "Отцы и дети", "Февраль 1862", 191);
    $dostoevskiy = new Book("Достоевский Ф.М.","Преступление и наказание", 1866, 331);

    $tolstoy->image = 'asset/tolstoy.gif';
    $esenin->image = "asset/esenin.jpg";
    $goncharov->image = 'asset/goncharov.jpg';
    $turgenev->image = 'asset/turgenev.jpg';
    $dostoevskiy->image = 'asset/dostoevskiy.jpg';


