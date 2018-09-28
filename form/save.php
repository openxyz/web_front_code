<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>提交到服务器的结果</title>
  </head>

  <body>
    <h1> 提交到服务器的结果</h1>
    <?php
      foreach ($_POST as $key => $value) {
        echo "<li>{$key} : {$value} </li>";
      }
    ?>

  </body>
  </html>


