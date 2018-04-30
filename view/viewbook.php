<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vista de todos los libros</title>
  </head>
  <body>
    <<?php
      echo 'Title' . $book->title.'<br/>';
      echo 'Author'. $book->author. '<br/>';
      echo 'Description'. $book->description. '<br/>';
     ?>
  </body>
</html>
