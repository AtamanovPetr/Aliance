<?php $features_style = "features-white";
$blog_header = 'Блог экспертов в области производства' ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Aliance Production</title>
  </head>
  <body class="front-page">

    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="./auto-chem.php">Автомобильная химия</a>
            </li>

            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>

            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>

            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>

            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>

            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>

        <li class="mobile-menu-nav-item">
          <a href="./trademarks.php" class="mobile-menu-link">Собственные марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="./auto-him.php">Автохимия AG-Tech</a>
            </li>

            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./blog.php" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="mark-icon" width="24" height="24">
          <use href="img/sprite.svg#mark"></use>
        </svg>
        <address class="mobile-info-address">
          г. Москва, Холодильный пер. 4к1с8
        </address>
      </div>
      <div class="mobile-info">
        <svg class="email-icon" width="24" height="24">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email"
          >a.dragunov@tdaliance.ru</a
        >
      </div>
      <div class="mobile-info-icons">
        <a href="#">
          <svg class="vk-icon" width="24" height="24">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#">
          <svg class="inst-icon" width="24" height="24">
            <use href="img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
    </div>

    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light" width="140" height="44">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark" width="140" height="44">
          <use href="img/sprite.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="./contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="./blog.php" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="16" height="16">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14</a
        >
      </div>
      <button class="navbar-button button" data-toggle="modal">
        <svg class="button-icon" width="16" height="16">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text"> Получить консультацию </span>
      </button>
    </nav>

    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">
            <?php echo 'Главная страница';?>
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <div data-toggle="modal" class="header-content-button button">Подробнее о компании</div>
        </div>

        <?php include_once('./templates/features-slider.php') ?>
        
      </div>
    </header>

    <?php include_once('./templates/working-process.php');?>

    <section class="section production">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title production-title">Контрактное производство</h2>
        <? include_once('./templates/production-cards.php'); ?>
      </div>
    </section>

    <?php $block_title = "Собственные торговые марки"; include_once('./templates/trademarks-block.php') ?>

    <section class="section founder">
      <div class="founder-image">
        <img src="img/founder.jpg" alt="" class="founder-photo" />
      </div>
      <div class="container">
        <div class="founder-content-wrapper">
          <div class="founder-content">
            <div class="seporator"></div>
            <h2 class="section-title founder-title">
              отношение к делу и к клиентам
            </h2>
            <p class="founder-text">
              Кстати, интерактивные прототипы описаны максимально подробно.
              Повседневная практика показывает, что укрепление и развитие
              внутренней структуры говорит о возможностях соответствующих
              условий активизации. Внезапно, независимые государства, которые
              представляют собой яркий пример континентально-европейского типа
              политической культуры, будут подвергнуты целой серии независимых
              исследований. С учётом сложившейся международной обстановки,
              синтетическое тестирование выявляет срочную потребность системы
              массового участия.
            </p>
            <p class="founder-text">
              А ещё действия представителей оппозиции, превозмогая сложившуюся
              непростую экономическую ситуацию, в равной степени предоставлены
              сами себе. Не следует, однако, забывать, что выбранный нами
              инновационный путь в значительной степени обусловливает важность
              дальнейших направлений развития.
            </p>
            <a href="#" class="button-link founder-link">О нашей миссии</a>
          </div>
        </div>
      </div>
    </section>

<?php
 include_once('./templates/clients.php');
  include_once('./templates/blog-templ.php');
 ?>




    <?php include_once('footer.php');?>