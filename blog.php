<?php
$page_title = 'Блог';
$breadcrumbs = [
    "Главная" => "/index.php",
    $page_title => "#" // Текущая страница
];
 include_once('header-page.php');?>
 <section class="news">
  <div class="container">
        <div class="news-wrapper">
          <?php 
          include('./templates/news-card_1.php');
          include('./templates/news-card_2.php');
          include('./templates/news-card_2.php');
          include('./templates/news-card_1.php');
          include('./templates/news-card_1.php');
          include('./templates/news-card_2.php');
          include('./templates/news-card_2.php');
          include('./templates/news-card_1.php');
          include('./templates/news-card_1.php');
          include('./templates/news-card_2.php');
          ?>
        </div>
  </div>
 </section>
<?php 
include_once('footer.php');
?>
