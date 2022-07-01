<?php
abstract class Publication
{
  public $id;
  public $title;
  public $date;
  public $short_content;
  public $content;
  public $preview;
  public $author_name;
  public $type;

  abstract public function printItem();

  function __construct($arr)
  {
    foreach ($arr as $key => $value) {
      $this->$key = $value;
    }
  }
}

class NewsPublication extends Publication
{
  public function printItem()
  {
    echo '<br>Новость: ' . $this->title;
    echo '<br>Дата: ' . $this->date;
    echo '<hr>';
  }
}

class ArticlePublication extends Publication
{
  public function printItem()
  {
    echo '<br>Статья: ' . $this->title;
    echo '<br>Автор: ' . $this->content;
    echo '<hr>';
  }
}

class PhotoReportPublication extends Publication
{
  public function printItem()
  {
    echo '<br>Фотоотчёт: ' . $this->title;
    echo '<br><img src="http://localhost:8888/test' . $this->author_name . '">';
    echo '<hr>';
  }
}
