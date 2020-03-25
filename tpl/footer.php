  <!-- START FOOTER -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="footer-left">
            <div class="bottom-part">
              <ul>
                <li>
                  <a href="#">Преподаватели</a>
                </li>
                <li>
                  <a href="#">Цены</a>
                </li>
                <li>
                  <a href="#">Отзывы</a>
                </li>
                <li>
                  <a href="#">О нас</a>
                </li>
                <li>
                  <a href="#">Вопросы и ответы</a>
                </li>
                <li>
                  <a href="#">Подарочный сертификат</a>
                </li>
              </ul>
              <p class="site-copy">EnglishDoma © 2012-2020 </p>
            </div>
            <div class="bottom-part">
              <ul>
                <li>
                  <a href="#">Тест на определение уровня языка</a>
                </li>
                <li>
                  <a href="#">Личный кабинет</a>
                </li>
                <li>
                  <a href="#">Сертификат об обучении</a>
                </li>
                <li>
                  <a href="#">Блог</a>
                </li>
                <li>
                  <a href="#">Вакансии</a>
                </li>
              </ul>
              <a href="#">Политика конфиденциальности</a>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="footer-right">
            <div class="inner-right">
              <div class="bottom-part">
                <div class="desktop-socials">
                  <p>Присоединяйтесь к нам:</p>
                  <ul class="socials">
                    <li>
                      <a href="#" target="_blank">
                        <img class="lazyload" src="" data-src="img/face.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <img class="lazyload" src="" data-src="img/s-vk.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <img class="lazyload" src="" data-src="img/insta.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <img class="lazyload" src="" data-src="img/ok.png" alt="">
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="l-register">
                  <p>Запишитесь<br> на бесплатный<br> пробный урок</p>
                  <a href="#" class="btn btn-white" data-toggle="modal" data-target="#freeLesson">
                    Записаться
                  </a>
                </div>
              </div>
              <div class="bottom-part">
                <div class="call">
                  <p>Звоните нам</p>
                  <div class="call-wrapper">
                    <div class="call-wrapper__select">
                      <a href="tel:<?php 
                            if ( $details->geoplugin_countryName == 'Russia' ) {
                              echo '+7(499)404-15-10';
                            } elseif ( $details->geoplugin_countryName == 'Belarus' ) {
                              echo '549-49-04';
                            } else {
                              echo '549-49-04';
                            }
                          ?>" class="main-phone">
                        <span>
                      <?php 
                        if ( $details->geoplugin_countryName == 'Russia' ) {
                          echo '+7 (499) 404-15-10';
                        } elseif ( $details->geoplugin_countryName == 'Belarus' ) {
                          echo '549-49-04 <small>(A1, мтс, лайф)</small>';
                        } else {
                          echo '549-49-04 <small>(A1, мтс, лайф)</small>';
                        }
                      ?>
                    </span>
                  </a>
                  <ul>
                    <li>
                      <?php   
                        if ( $details->geoplugin_countryName == 'Russia' ) {
                          echo '<a href="tel:549-49-04">549-49-04 <small>(A1, мтс, лайф)</small></a>';
                        } elseif ( $details->geoplugin_countryName == 'Belarus' ) {
                          echo '<a href="tel:+7(499)4041510">+7 (499) 404-15-10</a>';
                        } else {
                          echo '<a href="tel:549-49-04">549-49-04 <small>(A1, мтс, лайф)</small></a>';
                        }
                      ?>
                    </li>
                      </ul>
                    </div>
                    <a href="skype:+7(499)4041510?chat" class="skype">
                      <img class="lazyload" src="" data-src="img/skype.png" alt="">
                      EnglishDoma
                    </a>
                    <span class="w-graph">Пн-Пт 9:00-18:00 (мск)</span>
                  </div>
                </div>
                <div class="mobile-socials">
                  <p>Присоединяйтесь к нам:</p>
                  <ul class="socials">
                    <li>
                      <a href="#" target="_blank">
                        <img class="lazyload" src="" data-src="img/face.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <img class="lazyload" src="" data-src="img/s-vk.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <img class="lazyload" src="" data-src="img/insta.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank">
                        <img class="lazyload" src="" data-src="img/ok.png" alt="">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="payment">
              <p>Принимаем к оплате</p>
              <div class="payment-icons">
                <img class="lazyload" src="" data-src="img/mc.png" alt="">
                <img class="lazyload" src="" data-src="img/mcsc.png" alt="">
                <img class="lazyload" src="" data-src="img/visa.png" alt="">
                <img class="lazyload" src="" data-src="img/visa-v.png" alt="">
                <img class="lazyload" src="" data-src="img/ae.png" alt="">
                <img class="lazyload" src="" data-src="img/b.png" alt="">
                <img class="lazyload" src="" data-src="img/bel.png" alt="">
                <img class="lazyload" src="" data-src="img/qiwi.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copy">
        <p class="mobile-copy">EnglishDoma © 2012-2020 </p>
        ООО "Древо знаний", УНП: 491052840 от 01.10.2012 (РБ, г.Гомель, ул. 2-ая Революционная 8, оф.0-2)
      </div>
    </div>
  </footer>
	<!-- END FOOTER -->
  <div class="modal fade freeLesson" id="freeLesson" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="left-side">
              <p class="title">Записывайтесь на бесплатный пробный урок</p>
              <div class="call">
                <p>Укажите свои контактные данные или позвоните нам</p>
                <div class="call-wrapper">
                  <div class="call-wrapper__select">
                    <a href="tel:+7(499)404-15-10" class="main-phone">
                      <span>
                        +7 (499) 404-15-10
                      </span>
                    </a>
                    <ul>
                      <li>
                        <a href="tel:+7(499)404-15-10">+7 (499) 404-15-11</a>
                      </li>
                      <li>
                        <a href="tel:+7(499)404-15-10">+7 (499) 404-15-12</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <form method="post">
                <div class="form-group-wrapper">
                  <div class="form-group">
                    <input type="text" name="name" class="form-input" placeholder="Как к Вам обращаться?">
                  </div>
                  <span>&nbsp;</span>
                </div>
                <div class="form-group-wrapper">
                  <div class="form-group">
                    <input type="tel" name="number" class="form-input" value="+7" placeholder="Введите Ваш номер">
                  </div>
                  <span>Уточним удобное время урока</span>
                </div>
                <div class="form-group-wrapper">
                  <div class="form-group">
                    <input type="email" name="email" class="form-input" placeholder="Email">
                  </div>
                  <span>Для входа в личный кабинет</span>
                </div>
                <div class="form-group-wrapper">
                  <div class="form-group">
                    <input type="text" name="skype" class="form-input" placeholder="Skype">
                  </div>
                  <span>Если вам будет удобнее общаться в скайпе</span>
                </div>
                <a href="javascript:void(0)" class="btn btn-orange">Записаться</a>
              </form>
              <span class="policy">Нажимая кнопку "Записаться", Вы соглашаетесь с <a href="#">Политикой конфиденциальности</a></span>
              <span class="remark">*Заполнение формы ни к чему вас не обязывает</span>
              <span class="remark">* Мы гарантируемя, что Ваши личные данные не будут<br/> перееданы третьим лицам</span>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="right-side">
              <div class="free-elem">
                <div class="free-elem__img">
                  <img class="lazyload" src="" data-src="img/free1.png" alt="">
                </div>
                <p class="free-elem__title">
                  Познакомимся
                </p>
              </div>
              <div class="free-elem">
                <div class="free-elem__img">
                  <img class="lazyload" src="" data-src="img/free2.png" alt="">
                </div>
                <p class="free-elem__title">
                  Определим<br> Ваш уровень
                </p>
              </div>
              <div class="free-elem">
                <div class="free-elem__img">
                  <img class="lazyload" src="" data-src="img/free3.png" alt="">
                </div>
                <p class="free-elem__title">
                  Составим<br> план обучения
                </p>
              </div>
              <div class="free-elem">
                <div class="free-elem__img">
                  <img class="lazyload" src="" data-src="img/free4.png" alt="">
                </div>
                <p class="free-elem__title">
                  Покажем<br> как проходит урок
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade graphModal" id="graphModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
        <p class="title">График занятий и условия обучения</p>
        <form method="post">
          <div class="graph-part">
            <p class="form-title">Как часто вы хотите заниматься?</p>
            <select class="styler">
              <option value="1 раз в неделю">1 раз в неделю</option>
              <option value="2 раз в неделю">2 раз в неделю</option>
              <option value="3 раз в неделю">3 раз в неделю</option>
            </select>
          </div>
          <div class="graph-part">
            <p class="form-title">Как часто вы хотите заниматься?</p>
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                <label class="check-label">Понедельник
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                <label class="check-label">Вторник
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                <label class="check-label">Среда
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                <label class="check-label">Четверг
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                <label class="check-label">Пятница
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                <label class="check-label">Суббота
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                <label class="check-label">Воскресенье
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                <label class="check-label">Понедельник
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="graph-part">
            <p class="form-title">Уровень знаний</p>
            <select class="styler">
              <option value="Начальный">Начальный</option>
              <option value="Начальный">Начальный</option>
              <option value="Начальный">Начальный</option>
            </select>
          </div>
          <div class="graph-part">
            <p class="form-title">Продолжительность занятия</p>
            <select class="styler">
              <option value="1 раз в неделю">60</option>
              <option value="1 раз в неделю">60</option>
              <option value="1 раз в неделю">60</option>
            </select>
          </div>
          <div class="graph-part">
            <p class="form-title">В какое время (по Москве)</p>
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <label class="check-label">08-10
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <label class="check-label">12-14
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <label class="check-label">16-18
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <label class="check-label">20-22
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <label class="check-label">10-12
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <label class="check-label">14-16
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <label class="check-label">18-20
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                <label class="check-label">22-24
                  <input type="checkbox">
                  <span class="check-mark"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="graph-part">
            <p class="form-title">Дата вашего рождения</p>
            <input type="text" class="birth modal-input" placeholder="__ __ ____">
          </div>
          <div class="graph-part">
            <a href="#" class="comm-link">Добавить комментарий</a>
            <div class="form-group group-comment">
              <textarea name="comment" placeholder="Оставьте комментарии"></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-orange">
            Записаться
          </button>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade teamModal freeLesson" id="teamModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="left-side">
              <div class="title">
                Станьте частью команды EnglishDoma
              </div>
              <form method="post">
                <div class="form-group-wrapper">
                  <div class="form-group">
                    <input type="text" name="name" class="form-input" placeholder="Как к Вам обращаться?">
                  </div>
                </div>
                <div class="form-group-wrapper">
                  <div class="form-group">
                    <input type="tel" name="number" class="form-input" value="+7" placeholder="Введите Ваш номер">
                  </div>
                </div>
                <div class="form-group-wrapper">
                  <div class="form-group">
                    <input type="email" name="email" class="form-input" placeholder="Email">
                  </div>
                </div>
                <div class="form-group-wrapper">
                  <div class="form-group">
                    <textarea name="comment" placeholder="Комментарий"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="right-side">
              <form>
                <label class="form-inner upload">
                  <span class="title">Резюме</span>
                  <a href="#" class="choose">
                    <img class="lazyload" src="" data-src="img/clip.png" alt="">
                    Выберите файл
                  </a>
                  Или перетащите файл в эту область.<br/>
                  Файлы типа: pdf, docx. До 10 мб.
                  <span id="fileuploader"></span>
                </label>
                <button type="submit" class="btn btn-orange">
                  Отправить
                </button>
                <span class="policy">
                  Нажимая кнопку "Отправить", Вы соглашаетесь<br/> с <a href="#">Политикой конфиденциальности</a>
                </span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade comment" id="commentModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="title"><span>Ваш отзыв</span></p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Ваше имя">
            </div>
            <div class="form-group">
              <textarea name="comment" placeholder="Введите текст отзыва..."></textarea>
            </div>
            <button class="btn btn-orange">
              Опубликовать
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade t-info" id="infoModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="title"><span>О преподавателе</span></p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="teacher-elem">
            <div class="teacher-img image-container">
              <img src="" data-src="img/teacher-img.jpg" class="lazyload" alt="">
              <audio src="audio.mp3" class="t-audio"></audio>
              <!-- <div class="teacher-video">
                <iframe width="560" height="315" class="videoframe" src="https://www.youtube.com/embed/IUN664s7N-c" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div> -->
              <a href="javascript:void(0)" class="t-play">
                <img src="img/play-ico.png" alt="">
              </a>
            </div>
            <div class="teach-info">
              <p class="name">Дарья</p>
              <ul>
                <li>Образование: <b>Филолог, педагог</b></li>
                <li>Опыт преподавания: <b>Более 10 лет</b></li>
                <li>Сертификаты: <b>Toefl, IECS</b></li>
              </ul>
              <div class="description">
                Желаю, чтобы для вас изучение
                английского стало увлекательным 
                интересным процессом, вашим хобби, 
                частью вашей жизни. Окружите себя 
                полностью этим прекрасным языком 
                вы очень скоро убедитесь, что 
                результат и новые возможности 
                не заставят себя ждать.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade rating" id="ratingModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="title"><span>Оцените преподавателя</span></p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="rateit" data-rateit-mode="font" style="font-size:42px"></div>
            <div class="form-group">
              <textarea name="comment" placeholder="Введите текст отзыва..."></textarea>
            </div>
            <label class="check-label">Больше не показывать окно для оценки
              <input type="checkbox">
              <span class="check-mark"></span>
            </label>
            <button class="btn btn-orange">
              Сохранить
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade discount" id="discountModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="title"><span>Личная скидка</span> зависит от общего числа пройденных<br/> уроков и количества занятий за последние 30 дней.</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="lessons">
            <p>Всего пройдено: занятий</p>
            <p>За последние 30 дней: занятий</p>
          </div>
          <div class="lesson-table">
            <table>
              <thead>
                <tr>
                  <th></th>
                  <th colspan="5">Всего пройдено занятй</th>
                </tr>
                <tr>
                  <th>За последние 30 дней</th>
                  <th>10-29</th>
                  <th>30-99</th>
                  <th>100-149</th>
                  <th>150-199</th>
                  <th>200 и более</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>От 4 занятий</td>
                  <td>0%</td>
                  <td>0%</td>
                  <td>0%</td>
                  <td>0%</td>
                  <td>0%</td>
                </tr>
                <tr>
                  <td>От 7 занятий</td>
                  <td>3%</td>
                  <td class="active">3%</td>
                  <td>3%</td>
                  <td>3%</td>
                  <td>3%</td>
                </tr>
                <tr>
                  <td>От 11 занятий</td>
                  <td>4%</td>
                  <td>4%</td>
                  <td>4%</td>
                  <td>4%</td>
                  <td>4%</td>
                </tr>
                <tr>
                  <td>От 15 занятий</td>
                  <td>5%</td>
                  <td>5%</td>
                  <td>5%</td>
                  <td>5%</td>
                  <td>5%</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="discount-info">
            Данные скидки действуют только при приобретении занятий через личный кабинет
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade graphic" id="modal-graph" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="title"><span>График</span></p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="graphic-table">
              <table>
                <tbody>
                  <tr>
                    <td>
                      Понедельник
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="number" class="form-control timemask" placeholder="Время">
                      </div>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="close">
                        X
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

	<script src="libs/jquery/jquery-2.2.4.min.js?v=11031911"></script>
	<? include( 'tpl/page-nav.php' );?>
  
  <script src="libs/popper/popper.min.js?v=11031911"></script>
  <script src="libs/bootstrap/bootstrap.min.js?v=11031911"></script>
  <script src="libs/slick/slick.min.js?v=11031911"></script>
  <script src="libs/mask/jquery.inputmask.bundle.js?v=11031911"></script>
  <script src="libs/telflag/intlTelInput-jquery.js?v=11031911"></script>
  <script src="libs/upload/jquery-file-upload.min.js?v=11031911"></script>
  <script src="libs/fancybox/jquery.fancybox.min.js?v=11031911"></script>
  <script src="libs/sharing/ayoshare.js?v=11031911"></script>
  <script src="libs/formstyler/jquery.formstyler.min.js?v=11031911"></script>
  <script src="libs/rating/jquery.rateit.min.js?v=11031911"></script>
  <script src="libs/lazysizes.min.js?v=11031911"></script>

  <script src="js/main_english.js?v=11031911"></script>
  <script src="js/main_script.js?v=11031911"></script>

</body>