<?php
$page_title = 'Контрактное производство';
$header_style = 'nikita';
$breadcrumbs = [
    "Главная" => "/index.php",
    $page_title => "#"
];
include_once('header-page.php'); ?>
<section class="contract-cards">
    <div class="container">
        <? include_once('./templates/production-cards.php') ?>
    </div>
</section>
<?php include_once('footer.php'); ?>