<?php
  function translit($string) {
      $translit = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ы' => 'y', 'ъ' => '', 'ь' => '', 'э' => 'eh', 'ю' => 'yu', 'я'=>'ya');

      return str_replace(' ', '_', strtr(mb_strtolower(trim($string)), $translit));//фуккция транслитерации и перевод в нижний регистр
   }

   function changeImage($h, $w, $src, $newsrc, $type) { //функция уменьшения размера фото
    $newimg = imagecreatetruecolor($h, $w);
    switch ($type) {
      case 'jpeg':
        $img = imagecreatefromjpeg($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
        imagejpeg($newimg, $newsrc);
        break;
      case 'png':
        $img = imagecreatefrompng($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
        imagepng($newimg, $newsrc);
        break;
      case 'gif':
        $img = imagecreatefromgif($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
        imagegif($newimg, $newsrc);
        break;
    }
   }

  if (isset($_POST['send'])) { // проверяет существует ли в массиве Post значение send
    if ($_FILES['userfile']['error']) { // если в глобальном массиве $_FILES есть значение error(не равно 0), 
      $message = 'Ошибка загрузки файла!';//то выводим сообщение с ошибкой
    } elseif ($_FILES['userfile']['size'] > 1000000) {// проверяем размер файла, если он большой,
      $message = 'Файл слишком большой';// то выводим сообщение
    } elseif (
        $_FILES['userfile']['type'] == 'image/jpeg'||//смотрим тип загружаемого файла
        $_FILES['userfile']['type'] == 'image/png' ||
        $_FILES['userfile']['type'] == 'image/gif'//  если тип совпадает с разрешенными, то 
      ) {
          if (copy($_FILES['userfile']['tmp_name'], BIG.translit($_FILES['userfile']['name']))) {//копируем файл из временной папки в папку с большими фотками и транслитилируем
            $path = SMALL.translit($_FILES['userfile']['name']);// создаем переменную с путем к папке с маленькими фото
            $type = explode('/', $_FILES['userfile']['type'])[1];// берем тип файла из image/jpeg
            changeImage(150, 150, $_FILES['userfile']['tmp_name'], $path, $type);// уменьшаем полученную картинку и помещаем ее в папку с малкими фото
          } else {$message = 'Ошибка загрузки файла!';}// если что то пошло не так 
      } else {
        $message = 'Не правильный тип файла!';
    }
  }
  $images = array_slice(scandir(SMALL), 2);// сканируем папку с мелкими фото
?>
