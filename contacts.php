<?php
$page_title = 'Контакты';
$breadcrumbs = [
  "Главная" => "/index.php",
  $page_title => "#"
];
include_once('header-page.php'); ?>
<section class="contacts">
  <div class="container">
    <div class="footer-top">
      <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
      <div class="footer-info">
        <svg class="mark-icon" width="24" height="24">
          <use href="img/sprite.svg#mark"></use>
        </svg>
        <address class="footer-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <div class="footer-info">
        <svg class="email-icon" width="24" height="24">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
      </div>
      <div class="footer-social">
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="24" height="24">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#" class="footer-social-link">
          <svg class="footer-social-icon" width="24" height="24">
            <use href="img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
    </div>
    <div class="contacts-map">
      <div style="position:relative;overflow:hidden;"><a
          href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
          style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a
          href="https://yandex.ru/maps/213/moscow/?ll=37.617700%2C55.755863&utm_medium=mapframe&utm_source=maps&z=10"
          style="color:#eee;font-size:12px;position:absolute;top:14px;">Москва — Яндекс Карты</a><iframe
          src="https://yandex.ru/map-widget/v1/?ll=37.617700%2C55.755863&z=10" width="100%" height="600"
          allowfullscreen="true" style="position:relative;"></iframe></div>
    </div>
  </div>
</section>
<?php
include_once('footer.php');
?>