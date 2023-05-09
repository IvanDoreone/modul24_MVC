<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta charset="utf-8"> 
<link rel="stylesheet" href="http://localhost:8888/modul24/MVC_test_site/styles/style.css">

<?php 
//динамический вывод правильного title
$new_arr_title = explode("_", $content_view);
$title = current($new_arr_title);
?>
<title>Сайт/<?php echo $title; ?> </title> 
</head> 

<body>
<header>

<h2>Это шапка сайта</h2>
<p>здесь только ссылки на основные станицы:</p>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=Main">Main</a>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=Contacts">Contacts</a>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=Servises">Servises</a>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=Portfolio">Portfolio</a>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=PHPinfo">PHPinfo</a>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=PHPgd">PHP_GD</a>
</header>

<h4>#динамический контент:</h4>
<?php 
//вызов станцы с динмическим контентом: по имени вызванного контроллера
include_once $content_view; 
?>

<footer>
<h2>А это футер</h2>
<p>так как сайт тестовый то здесь тоже только ссылки на основные станицы</p>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=Main">Main</a>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=Contacts">Contacts</a>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=Servises">Servises</a>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=Portfolio">Portfolio</a>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=PHPinfo">PHPinfo</a>
<a href="http://localhost:8888/modul24/MVC_test_site/applications/index.php/?url=PHPgd">PHP_GD</a>
</footer>

</body> 
</html>
