<?php

include_once 'model/Book.php';

/**
 * la clase Book
 */
class model
{
  public function getBookList()
  {
    return array(
      "libro 1" => new Book("libro1", "autor libro 1", "descripcion libro uno."),
      "libro 2" => new Book("libro 2", "autor libro 2", "descripcion libro dos."),
      "libro 3" => new Book("libro 3", "autor libro 3", "descripcion libro tres")
    );
  }

  public function getBook($title)
  {
    $allBookS = $this->getBookList();
    return $allBookS[$title];
  }
}
?>
