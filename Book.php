<?php

class Book{
    private $author;
    private $title;
    private $year;
    private $pages;
    public $image;

    public function __construct($author,$title,$year,$pages)
    {
        $this->author = $author;
        $this->title = $title;
        $this->year = $year;
        $this->pages = $pages;
    }

    public function getInfo()
    {
        echo "Автор: $this->author <br/>";
        echo "Название книги: $this->title <br/>";
        echo "Год издания: $this->year <br/>";
        echo "Количесво страниц: $this->pages <br/>";
    }

    public function getImage()
    {
        echo "<img src='$this->image' width='230' height='200'><br/>";
    }
}