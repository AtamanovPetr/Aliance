<?php
$page_main_header = "Контрактное производство автомобильной химии";
$page_main_img = "/img/auto-chem.png";
$header_image = "/img/avto-him-main.png";
$features_style = "features-black";
$page_title = 'Автомобильная химия';
$header_style = 'auto-him';
$breadcrumbs = [
    "Главная" => "/index.php",
    "Контрактное производство" => "/contracts.php",
    $page_title => "#"
];
 include_once('header-page.php');
 include_once('./templates/img-text.php');
  include_once('./templates/explore.php');
 include_once('footer.php');
 ?>