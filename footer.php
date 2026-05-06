    <section class="cta">
      <div class="bg-grey section-cta">
        <img src="img/cta.png" alt="" class="cta-image" />
        <div class="cta-form-wrapper container">
          <form action="handler.php" class="cta-form js-form" method='POST'>
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
              ответит на все интересующие вопросы и поможем даже в самых сложных
              случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input
                  id="username"
                  type="text"
                  class="input"
                  name="username"
                  placeholder=" "
                  maxlength='100'
                  required
                />
                <label class="input-group-label" for="username">Имя</label>
              </div>
              <div class="input-group">
                <input
                  id="userphone"
                  type="tel"
                  class="input"
                  name="userphone"
                  placeholder=" "
                  maxlength='30'
                  required
                />
                <label class="input-group-label" for="userphone"
                  >Номер телефона</label
                >
              </div>
            </div>
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">
                Отправить заявку
              </button>
              <div class="notify">
                <svg class="notify-icon" width="14" height="14">
                  <use href="img/sprite.svg#shield"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную
                  работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
            <input type="hidden" name="form_subject" value="Заявка из подвала сайта">
          </form>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="footer-logo" width="140" height="44">
            <use href="img/sprite.svg#logo"></use>
          </svg>
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
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email"
              >a.dragunov@tdaliance.ru</a
            >
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
        <!-- /.footer-top -->
      </div>
      <hr color="#ebebf0" class="footer-seporator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link"
                  >Дезинфицирующие средства</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>

          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>

          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list footer-menu-list-last">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >О компании</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Новости</a
                >
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold"
                  >Контакты</a
                >
              </li>
            </ul>
          </div>
        </div>
        <!-- /.footer-bottom -->
      </div>
      <hr color="#ebebf0" class="footer-seporator" />
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="copyright">
              &copy; <? echo date('d.m.Y')?> «Aliance Production». Все права защищены.
            </p>
            <a href="#" class="footer-policy"> Политики конфиденциальности </a>
          </div>
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg class="footer-social-icon" width="52" height="11">
              <use href="img/sprite.svg#ruso"></use>
            </svg>
          </div>
        </div>
      </div>
    </footer>

    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal">
          <svg class="close-icon" width="24" height="24">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется c Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <form action="handler.php" class="modal-form js-form" method="POST">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input
                id="modal-username"
                type="text"
                class="input modal-input"
                placeholder=" "
                name="username"
              />
              <label
                class="input-group-label modal-input-label"
                for="modal-username"
                >Имя</label
              >
            </div>
            <div class="input-group modal-input-group">
              <input
                id="modal-userphone"
                type="tel"
                class="input modal-input"
                placeholder=" "
                name="userphone"
              />
              <label
                class="input-group-label modal-input-label"
                for="modal-userphone"
                >Номер телефона</label
              >
            </div>
          </div>
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">
              Отправить заявку
            </button>
            <div class="notify">
              <svg class="notify-icon" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу,
                но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
          <input type="hidden" name="form_subject" value="Заявка из модального окна">
        </form>
      </div>
    </div>

        <script src="js/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
