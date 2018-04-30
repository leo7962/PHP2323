<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>vista de un libro</title>
  </head>
  <body>
    <table>
      <tr><td>Title</td><td>Author</td><td>Description</td></tr>
      <?php
        foreach ($books as $title => $book) {
          echo '<tr><td><a href="index.php?book="'.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';
        }
       ?>
     </table>
  </body>
</html>
