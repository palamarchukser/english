<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>EnglishDoma</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/fonts.css">

  <link rel="stylesheet" href="libs/bootstrap/bootstrap.css?v=11031911">
  <link rel="stylesheet" href="libs/slick/slick.css?v=11031911">
  <link rel="stylesheet" href="libs/formstyler/jquery.formstyler.css?v=11031911">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
  <link href="libs/timepicker/bootstrap-datetimepicker.css?v=11031911" rel="stylesheet">

  <link rel="stylesheet" href="libs/rating/rateit.css?v=11031911">

  <link rel="stylesheet" href="css/app.css?v=11031911">
</head>
<body>
  <header class="teacher">
    <div class="container">
      <a href="#" class="logo">
        <img src="img/logo.png" class="desktop-logo" alt="">
        <img src="img/mobile-logo.png" class="mob-logo" alt="">
      </a>
      <div class="teacher-nav">
        <div class="rating">
          <div class="rateit" data-rateit-mode="font"  data-rateit-value="4.2" data-rateit-ispreset="true" data-rateit-readonly="true" style="font-size:32px"></div>
        </div>
        <ul>                                           
          <li class="active">
            <a href="#">Мои ученики </a>
          </li>
          <li>
            <a href="#">График работы </a>
          </li>
          <li>
            <a href="#">Библиотека</a>
          </li>
          <li>
            <a href="#">Правила работы</a>
          </li>
          <li>
            <a href="#">Аудио/видео презентация</a>
          </li>
          <li class="w-dropdown">
            <a href="#">
              Начислено: 100 р 
            </a>
            <div class="dropdown-menu">
              <ul>
                <li>
                  <p><b>1263223221313213121321 BYN</b> <a href="#">Денис Сергеев</a></p>
                </li>
                <li>
                  <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
                </li>
                <li>
                  <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
                </li>
                <li>
                  <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
                </li>
                <li>
                  <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
                </li>
                <li>
                  <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
                </li>
                <li>
                  <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
                </li>
                <li>
                  <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
                </li>
              </ul>
            </div>
          </li>
          <li class="w-dropdown">
            <a href="#">
              Валерия К
            </a>
            <div class="dropdown-menu teacher-sub">
              <ul>
                <li>
                  <a href="#">Пожелания и предложения</a>
                </li>
                <li>
                  <a href="#">Загрузить сертификаты</a>
                </li>
              </ul>
              <a href="#" class="btn btn-orange">
                Выйти
              </a>
            </div>
          </li>
        </ul>
      </div>
      <div class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
    </div>
    <div class="mob-nav">
      <ul>                                           
        <li class="active">
          <a href="#">Мои ученики </a>
        </li>
        <li>
          <a href="#">График работы </a>
        </li>
        <li>
          <a href="#">Библиотека</a>
        </li>
        <li>
          <a href="#">Правила работы</a>
        </li>
        <li>
          <a href="#">Аудио/видео презентация</a>
        </li>
        <li class="w-dropdown">
          <a href="#">
            Начислено: 100 р 
          </a>
          <div class="dropdown-menu">
            <ul>
              <li>
                <p><b>1263223221313213121321 BYN</b> <a href="#">Денис Сергеев</a></p>
              </li>
              <li>
                <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
              </li>
              <li>
                <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
              </li>
              <li>
                <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
              </li>
              <li>
                <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
              </li>
              <li>
                <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
              </li>
              <li>
                <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
              </li>
              <li>
                <p><b>126 BYN</b><a href="#">Денис Сергеев</a></p>
              </li>
            </ul>
          </div>
        </li>
        <li class="w-dropdown">
          <a href="#">
            Валерия К
          </a>
          <div class="dropdown-menu teacher-sub">
            <ul>
              <li>
                <a href="#">Пожелания и предложения</a>
              </li>
              <li>
                <a href="#">Загрузить сертификаты</a>
              </li>
            </ul>
            <a href="#" class="btn btn-orange">
              Выйти
            </a>
          </div>
        </li>
      </ul>
    </div>
  </header>
	<!-- START CONTENT -->
	<div class="content">
    <div class="section section-cabinet cabinet-teacher">
      <div class="container">
        <div class="cabinet-title">Мои ученики</div>
        <select name="students" class="styler student-select">
          <option value="Все ученики">Все ученики</option> 
          <option value="Все ученики">Все ученики</option> 
          <option value="Все ученики">Все ученики</option>
        </select>
        <ul class="cabinet-nav">   
          <li>
            <a href="#" class="active">Без сортировки</a>
          </li>
          <li>
            <a href="#">Сегодня </a>
          </li>
          <li>
            <a href="#">Завтра</a>
          </li>
          <li>
            <a href="#" class="js-trigger-calendar">Далее</a>
            <div style=" opacity: 0; width: 0; height: 0; overflow: hidden; ">
              <input type="text" class="js-date-teacher">
            </div>
          </li>
        </ul>
        <div class="cabinet-wrapper teacher-acc full">
          <div class="teacher-wrap">
            <div class="teacher-head">
              <a href="#">Денис Сергеев </a>
              <span>ID-0007</span>
            </div>
            <ul class="teacher-contacts">
              <li>
                <a href="tel:+375293771613">
                  <img src="img/teacher-phone.png" alt="">
                  +375 29 377 16 13
                </a>
              </li>
              <li>
                <a href="mailto:Email@mail.com">
                  <img src="img/teacher-mail.png" alt="">
                  Email@mail.com
                </a>
              </li>
              <li>
                <a href="skype:+7(499)4041510?chat">
                  <img src="img/teacher-skype.png" alt="">
                  Skypename
                </a>
              </li>
            </ul>
            <div class="level">
              <p class="cabinet-title">Уровень</p>
              <form method="post">
                <select name="level" class="styler">
                  <option value="beginner">beginner</option>
                  <option value="beginner">beginner</option>
                </select>
                <button type="submit" class="btn btn-orange">
                  Сохранить
                </button>
              </form>
              <a href="#" class="link">Добавить заметку</a>
            </div>
          </div>
          <div class="graph-wrap">
            <div class="graph-inner">
              <p class="cabinet-title">
                График занятий
              </p>
              <a href="#" class="link" data-toggle="modal" data-target="#modal-graph">Установить график</a>
            </div>
            <div class="next-lesson active">
              <p class="cabinet-title">Следующее занятие</p>
              <form method="post">
                <div class="form-group-wrapper">
                  <div class="form-group date">
                    <input class="datepicker form-control datemask" value="03.13.2020">
                  </div>
                  <div class="form-group time">
                    <input type="text" class="form-control" id='datetimepicker4' value="10:00">
                  </div>
                </div>
                <a href="javascript:void(0)" class="btn btn-orange">
                  Назначить урок
                </a>
                <a href="#" class="link">Добавить домашнее задание</a>
              </form>
            </div>
          </div>
          <div class="control-wrap">
            <p class="cabinet-title">Контроль занятий</p>
            <div class="lesson-left">
              <div class="left-head">
                <p>Осталось <b>20</b> занятий по <b>45 минут</b></p>
                <span>Оплата - 8 BYN</span>
              </div>
              <a href="#" class="label label-orange">
                Урок 45 мин. проведен
              </a>
            </div>
            <div class="lesson-left">
              <div class="left-head">
                <p>Осталось <b>20</b> занятий по <b>45 минут</b></p>
                <span>Оплата - 8 BYN</span>
              </div>
              <a href="#" class="label label-orange">
                Урок 45 мин. проведен
              </a>
            </div>
            <div class="lesson-left">
              <div class="left-head">
                <p>Осталось <b>20</b> занятий по <b>45 минут</b></p>
                <span>Оплата - 8 BYN</span>
              </div>
              <a href="#" class="label label-orange">
                Урок 45 мин. проведен
              </a>
            </div>
            <div class="history">
              <div class="history-head">
                <p class="cabinet-title">История занятий</p>
                <a href="#" class="link" data-toggle="modal" data-target="#discountModal">Как рассчитывается бонус?</a>
              </div>
              <div class="lessons">
                <div class="lessons-inner">
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                </div>
                <a href="javascript:void(0)" class="more-lefssons link">Eщё</a>
              </div>
            </div>
          </div>
        </div>
        <div class="cabinet-wrapper teacher-acc full">
          <div class="teacher-wrap">
            <div class="teacher-head">
              <a href="#">Денис Сергеев </a>
              <span>ID-0007</span>
            </div>
            <ul class="teacher-contacts">
              <li>
                <a href="tel:+375293771613">
                  <img src="img/teacher-phone.png" alt="">
                  +375 29 377 16 13
                </a>
              </li>
              <li>
                <a href="mailto:Email@mail.com">
                  <img src="img/teacher-mail.png" alt="">
                  Email@mail.com
                </a>
              </li>
              <li>
                <a href="skype:+7(499)4041510?chat">
                  <img src="img/teacher-skype.png" alt="">
                  Skypename
                </a>
              </li>
            </ul>
            <div class="level">
              <p class="cabinet-title">Уровень</p>
              <form method="post">
                <select name="level" class="styler">
                  <option value="beginner">beginner</option>
                  <option value="beginner">beginner</option>
                </select>
                <button type="submit" class="btn btn-orange">
                  Сохранить
                </button>
              </form>
              <a href="#" class="link">Добавить заметку</a>
            </div>
          </div>
          <div class="graph-wrap">
            <div class="graph-inner">
              <p class="cabinet-title">
                График занятий
              </p>
              <a href="#" class="link" data-toggle="modal" data-target="#modal-graph">Установить график</a>
            </div>
            <div class="next-lesson active empty">
              <p class="cabinet-title">Следующее занятие</p>
              <form method="post">
                <div class="lesson-ready">
                  <p>Урок назначен на</p>
                  <a href="#" class="lesson-date">
                    8 авг. 08:30
                  </a>
                </div>
                <a href="#" class="link">Добавить домашнее задание</a>
              </form>
            </div>
          </div>
          <div class="control-wrap">
            <p class="cabinet-title">Контроль занятий</p>
            <div class="lesson-left">
              <div class="left-head">
                <p>Осталось <b>20</b> занятий по <b>45 минут</b></p>
                <span>Оплата - 8 BYN</span>
              </div>
              <a href="#" class="label label-orange">
                Урок 45 мин. проведен
              </a>
            </div>
            <div class="history">
              <div class="history-head">
                <p class="cabinet-title">История занятий</p>
                <a href="#" class="link" data-toggle="modal" data-target="#discountModal">Как рассчитывается бонус?</a>
              </div>
              <div class="lessons">
                <div class="lessons-inner">
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                  <span class="lesson">26 дек 11:27 - 60 мин</span>
                </div>
                <a href="javascript:void(0)" class="more-lefssons link">Eщё</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	<!-- END CONTENT -->
  <!-- MODALS -->
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
                  <th colspan="4">Всего пройдено занятй</th>
                </tr>
                <tr>
                  <th>За последние 30 дней</th>
                  <th>1-25 </th>
                  <th>26-50</th>
                  <th>51-100 </th>
                  <th>101 и более</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>От 1 занятий</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>От 5 занятий</td>
                  <td>0.20</td>
                  <td class="active">0.20</td>
                  <td>0.20</td>
                  <td>0.20</td>
                </tr>
                <tr>
                  <td>От 9 занятий</td>
                  <td>0.40</td>
                  <td>0.40</td>
                  <td>0.40</td>
                  <td>0.40</td>
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
  
  <div class="modal fade accrual" id="accrualModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="title"><span>История начислений</span></p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="accrual-elem">
            <ul>
              <li>
                <p><b>126 BYN</b>   <small>-</small>   26 дек   <small>-</small>   45 мин   <small>-</small>   <a href="#">Денис Сергеев</a> • ID-0007</p>
              </li>
              <li>
                <p><b>126 BYN</b>   <small>-</small>   26 дек   <small>-</small>   45 мин   <small>-</small>   <a href="#">Денис Сергеев</a> • ID-0007</p>
              </li>
              <li>
                <p><b>126 BYN</b>   <small>-</small>   26 дек   <small>-</small>   45 мин   <small>-</small>   <a href="#">Денис Сергеев</a> • ID-0007</p>
              </li>
              <li>
                <p><b>126 BYN</b>   <small>-</small>   26 дек   <small>-</small>   45 мин   <small>-</small>   <a href="#">Денис Сергеев</a> • ID-0007</p>
              </li>
              <li>
                <p><b>126 BYN</b>   <small>-</small>   26 дек   <small>-</small>   45 мин   <small>-</small>   <a href="#">Денис Сергеев</a> • ID-0007</p>
              </li>
              <li>
                <p><b>126 BYN</b>   <small>-</small>   26 дек   <small>-</small>   45 мин   <small>-</small>   <a href="#">Денис Сергеев</a> • ID-0007</p>
              </li>
              <li>
                <p><b>126 BYN</b>   <small>-</small>   26 дек   <small>-</small>   45 мин   <small>-</small>   <a href="#">Денис Сергеев</a> • ID-0007</p>
              </li>
              <li>
                <p><b>126 BYN</b>   <small>-</small>   26 дек   <small>-</small>   45 мин   <small>-</small>   <a href="#">Денис Сергеев</a> • ID-0007</p>
              </li>
            </ul>
            <p class="total">
              Итого: <b>10 260 BYN</b>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

   <div class="modal fade teacher" id="teacherModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
          <ul>
            <li>
              <a href="#">Пожелания и предложения</a>
            </li>
            <li>
              <a href="#">Загрузить сертификаты</a>
            </li>
          </ul>
          <a href="#" class="btn btn-orange">
            Выйти
          </a>
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
                        <input type="numer" class="form-control timemask" placeholder="Время">
                      </div>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="clear-time">
                        X
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Вторник
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="numer" class="form-control timemask" placeholder="Время">
                      </div>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="clear-time">
                        X
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Среда
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="numer" class="form-control timemask" placeholder="Время">
                      </div>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="clear-time">
                        X
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Четверг
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="numer" class="form-control timemask" placeholder="Время">
                      </div>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="clear-time">
                        X
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Пятница
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="numer" class="form-control timemask" placeholder="Время">
                      </div>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="clear-time">
                        X
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Суббота
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="numer" class="form-control timemask" placeholder="Время">
                      </div>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="clear-time">
                        X
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Воскресенье
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="numer" class="form-control timemask" placeholder="Время">
                      </div>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="clear-time">
                        X
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button type="submit" class="btn btn-orange">Сохранить</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- MODALS -->
  <script src="libs/jquery/jquery-2.2.4.min.js?v=11031911"></script>
  <? include( 'tpl/page-nav.php' );?>
  <script src="libs/popper/popper.min.js?v=11031911"></script>
  <script src="libs/bootstrap/bootstrap.min.js?v=11031911"></script>
  <script src="libs/slick/slick.min.js?v=11031911"></script>
  <script src="libs/formstyler/jquery.formstyler.min.js?v=11031911"></script>
  <script src="libs/rating/jquery.rateit.min.js?v=11031911"></script>
  <script src="libs/mask/jquery.inputmask.bundle.js?v=11031911"></script>
  <script src="libs/timepicker/moment-with-locales.js?v=11031911"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js?v=11031911?v=11031911"></script>
  <script src="libs/timepicker/bootstrap-datetimepicker.js?v=11031911"></script>
  <script src="js/main_script.js?v=11031911"></script>
  <script>
    //styler
    $('.styler').styler();
    $('.modal').on('shown.bs.modal', function () {
      $('.rateit').rateit('value', null); 
    })
    $('.datepicker').datepicker({
      format: 'mm/dd/yyyy',
      //startDate: '-3d'
    });

    $(function () {
      $('#datetimepicker4').datetimepicker({
        format: 'HH:mm'
      });
    });


    var active_dates = ["21/3/2020","25/3/2020"];

    $(".js-date-teacher").datepicker({
       format: 'mm.dd.yyyy',
       autoclose: true,
       todayHighlight: true,
       beforeShowDay: function(date){
           var d = date;
           var curr_date = d.getDate();
           var curr_month = d.getMonth() + 1; //Months are zero based
           var curr_year = d.getFullYear();
           var formattedDate = curr_date + "/" + curr_month + "/" + curr_year

             if ($.inArray(formattedDate, active_dates) != -1){
                 return {
                    classes: 'activeClassDate'
                 };
             }
            return;
        }
    });


    $(document).on('click', '.activeClassDate', function(){
      date = $('.js-date-teacher').val();
      window.history.pushState("", "", addParameterToURL('date='+date+''));
      window.location.reload();
    });

    $(document).on('click', '.js-trigger-calendar', function(){
      $('.js-date-teacher').focus();
    })

  </script>
</body>
