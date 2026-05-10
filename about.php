<?php
$page_title = 'О компании';
$breadcrumbs = [
    "Главная" => "/index.php",
    "О компании" => "/about.php",
    $page_title => "#" // Текущая страница
];
 include_once('header-page.php');?>
<?php 
include_once('./templates/explore.php');
include_once('footer.php');
?>

