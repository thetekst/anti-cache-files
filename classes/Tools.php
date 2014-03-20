<?php

class Tools
{
  /**
   * Вернуть путь для браузера с учетом времени изменения файла
   * для предотвращения кэширования файлов
   * @param $file - путь к файлу относительно DOCUMENT_ROOT-сервера
   * @param $bSkipCheck - проверить существование файла, если проверить (true) и файла нет -
   * то возвращается просто значение $file без изменений
   * @return string
   */
  public static function GetAdditionalFileURL($file, $bSkipCheck = false) {
    $filePath = $_SERVER['DOCUMENT_ROOT'].$file;
    if($bSkipCheck || file_exists($filePath))
      return $file.'?'.filemtime($filePath).filesize($filePath);
    else
      return $file;
  }

}