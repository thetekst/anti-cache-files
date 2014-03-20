<?php

# Автоматически подргружаем все классы из каталога classes/
spl_autoload_register(function($class) {
  require_once('classes/'.$class.'.php');
});

# Определяем директорию проекта
if (!defined('SITE_TEMPLATE_PATH'))
  define('SITE_TEMPLATE_PATH', '/anti-cache-files');

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?=Tools::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/css/styles.css', true)?>">
	<script src="<?=Tools::GetAdditionalFileURL(SITE_TEMPLATE_PATH.'/js/scripts.js', true)?>"></script>
</head>
<body>
	
</body>
</html>