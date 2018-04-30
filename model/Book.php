<?php
  /**
   *
   */
  class book
  {
    public $title;
    public $author;
    public $description;

    function __construct($title, $author, $description)
    {
      $this-> title = $title;
      $this-> author = $author;
      $this-> description = $description;
    }
  }

 ?>
