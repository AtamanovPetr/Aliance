<?php
$page_main_header = "Собственное производство автохимия AG-Tech";
$page_main_img = "/img/auto-him-main-wrap.webp";
$page_main_img_2 = "/img/auto-him-main-wrap.png";
$header_image = "/img/avto-him-main.webp";
$header_image_2 = "/img/avto-him-main.png";
$features_style = "features-black";
$page_title = 'Автохимия AG-Tech';
$header_style = 'auto-him';
$breadcrumbs = [
  "Главная" => "/index.php",
  "Собственные торговые марки" => "/trademarks.php",
  $page_title => "#"
];
include_once('header-page.php');
include_once('./templates/img-text.php');
?>
<section class="distribute">
  <div class="container">
    <div class="distribute-content">
      <div class="seporator"></div>
      <h2 class="section-title distribute-content-title">
        Генеральный дистрибьютор премиальной автохимии
      </h2>
      <p class="distribute-content-text">
        Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими общечеловеческие нормы
        этики и морали.
      </p>
      <ul class="clients-list">
        <li class="clients-list-item">
          <svg width="30" height="30" class="client-list-icon">
            <use href="img/sprite.svg#chem"></use>
          </svg>
          Полное описание товаров
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="client-list-icon">
            <use href="img/sprite.svg#car"></use>
          </svg>
          Актуальные цены
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="client-list-icon">
            <use href="img/sprite.svg#color"></use>
          </svg>
          Лаки и краски
        </li>
        <li class="clients-list-item">
          <svg width="30" height="30" class="client-list-icon">
            <use href="img/sprite.svg#chem"></use>
          </svg>
          Химические производства
        </li>
      </ul>
      <button type="submit" class="button distribute-button">
        <img src="/img/download.png" alt="">
        Скачать каталог
      </button>
    </div>
  </div>
</section>
<?php
include_once('./templates/explore.php');
include_once('./templates/working-process.php');
include_once('./templates/clients.php');
include_once('footer.php');
?>