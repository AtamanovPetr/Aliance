<?php
$page_title = 'О компании';
$breadcrumbs = [
    "Главная" => "/index.php",
    $page_title => "#" // Текущая страница
];
 include_once('header-page.php');?>
<?php 
include_once('./templates/founder.php');
include_once('./templates/explore.php');
include_once('./templates/clients.php');
include_once('footer.php');
?>

