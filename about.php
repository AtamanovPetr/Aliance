<?php
$page_title = 'О компании';
$features_style = "features-black";
$breadcrumbs = [
  "Главная" => "/index.php",
  $page_title => "#" // Текущая страница
];
include_once('header-page.php'); ?>
<section class="auto-him-main about-main">
  <div class="container">
    <div class="auto-him-main-wrap">
      <picture class="auto-him-wrap-img">
        <source type="image/webp" srcset="/img/about-image.webp">
        <source type="image/jpeg" srcset="/img/about-image.png">
        <img src="/img/about-image.png" alt="founder">
      </picture>
      <div class="auto-him-main-wrap-item">
        <div class="seporator"></div>
        <h1 class="header-title auto-him-main-wrap-item-title about-title">мы - эксперты в области производства химии
        </h1>
        <p class="header-text">
          Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость
          поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть
          объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример
          континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих
          проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового
          участия.
        </p>
      </div>
    </div>
    <?php include_once('./templates/features-slider.php'); ?>
  </div>
</section>

<section class="create">
  <img src="/img/about-create.png" alt="" class="create-img">
  <div class="container">
    <div class="create-wrapper">
      <div class="distribute-content">
        <div class="seporator"></div>
        <h2 class="section-title distribute-content-title">
          Изготовление автохимии
        </h2>
        <p class="distribute-content-text">
          Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть
          над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев
          населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество
          жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные
          вещи - безусловно открывает новые горизонты для поставленных обществом задач.
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
          <!--  -->
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

      </div>
    </div>
  </div>

</section>
<?php
include_once('./templates/founder.php');
include_once('./templates/explore.php');
include_once('./templates/clients.php');
include_once('footer.php');
?>