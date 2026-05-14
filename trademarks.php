<?php
$page_title = 'Собственные торговые марки';
$header_style = 'nikita';
$breadcrumbs = [
    "Главная" => "/index.php",
    $page_title => "#"
];
include_once('header-page.php');
include_once('./templates/trademarks-block.php');
include_once('footer.php'); ?>