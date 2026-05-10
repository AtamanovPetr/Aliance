<?php
$blog_header = 'Также вас может заинтересовать:';
$header_style = "blog-more-bg";
$page_title = 'Современная методология разработки одухотворила всех причастных';
$breadcrumbs = [
    "Главная" => "/index.php",
    "Новости" => "/blog.php",
    $page_title => "#" // Текущая страница
];
 include_once('header-page.php');?>
<?php
  include_once('./templates/blog-templ.php');
include_once('footer.php');
?>