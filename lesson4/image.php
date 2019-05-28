<?php
  //ini_get("MAX_POST_SIZE"); 	

  include_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Работа с файлами</title>
</head>
<body>
  <a class="back" href="index.php"> Вернуться в галерею </a>
  <div>
    <img src="<?=BIG.$_GET['photo'] ?>">
  </div>
</body>
</html>
