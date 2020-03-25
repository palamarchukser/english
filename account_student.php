<?php $inner = true; ?>

<?include( 'tpl/header.php' );?>
	<!-- START CONTENT -->
	<div class="content">
    <div class="breadcrumbs">
      <div class="container">
        <ul>
          <li>
            <a href="#">Главная </a>
          </li>
          <li>
            <p>></p>
          </li>
          <li>
            <a href="#">Личный кабинет</a>
          </li>
          <li>
            <p>></p>
          </li>
          <li>
            <span>Личный кабинет ученика</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="section section-cabinet">
      <div class="container">
        <div class="edit-content">
          <div class="cabinet-wrapper full">
            <p class="cabinet-title">Редактирование личныйх данных</p>
            <form method="post">
              <div class="row">
                <div class="col-xl-6 col-lg-6">
                  <div class="form-group-wrapper">
                    <p>ФИО</p>
                    <div class="form-group">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="form-group-wrapper">
                    <p>Телефон</p>
                    <div class="form-group">
                      <input type="tel" name="phone" class="form-control" value="+7">
                    </div>
                  </div>
                  <div class="form-group-wrapper">
                    <p>Email</p>
                    <div class="form-group">
                      <input type="email" name="mail" class="form-control">
                    </div>
                  </div>
                  <div class="form-group-wrapper">
                    <p>Skype</p>
                    <div class="form-group">
                      <input type="text" name="skype" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <div class="form-group-wrapper">
                    <p>Пароль</p>
                    <div class="form-group">
                      <input type="password" name="pw" class="form-control">
                    </div>
                  </div>
                  <div class="form-group-wrapper">
                    <p>Повторить<br/> Пароль</p>
                    <div class="form-group">
                      <input type="password" name="repeat-pw" class="form-control">
                    </div>
                  </div>
                  <div class="buttons">
                    <button type="reset" class="link cancel">Отменить</button>
                    <button type="submit" class="link">Сохранить</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-lg-4">
            <div class="cabinet-wrapper user-edit">
              <div class="student-header">
                <p class="student-name">Вадим Шундалов</p>
                <a href="#" class="edit">
                  <img src="img/edit-ico.png" alt="">
                </a>
              </div>
              <table>
                <tr>
                  <td>Тел.</td>
                  <td><a href="tel:80293781612">80293781612</a></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><a href="mailto:">mail@mail.ru</a></td>
                </tr>
                <tr>
                  <td>Пароль</td>
                  <td><input type="password" class="user-pw" value="12345678" readonly=""></td>
                </tr>
              </table>
              <a href="#" class="exit link">Выйти</a>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4">
            <div class="cabinet-wrapper">
              <p class="cabinet-title">Мой преподаватель</p>
              <a href="#" class="teacher-name" data-toggle="modal" data-target="#infoModal">Валерия</a>
              <table>
                <tr>
                  <td>Skype</td>
                  <td><a href="skype:Skypename?chat">Skypename</a></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><a href="mailto:">mail@mail.ru</a></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4">
            <div class="cabinet-wrapper">
              <p class="cabinet-title">Мой персональный менеджер</p>
              <p class="manager-name">Ольга</p>
              <table>
                <tr>
                  <td>Skype</td>
                  <td><a href="skype:Skypename?chat">Skypename</a></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><a href="mailto:">mail@mail.ru</a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="cabinet-wrapper full schedule">
          <div class="shedule-inner">
            <p class="cabinet-title">Мое расписание</p>
            <div class="shedule-info">
              <div class="shedule-left">
                Расписание занятий не установлено,<br/>
                Вы можете согласовать его<br/>
                с преподавателем.
                <p><b>Первое занятие:</b> 8 января 08:25</p>
              </div>
              <div class="shedule-right">
                <form>
                  <div class="notification">
                    <label class="check-label">Уведомить по Email о следующем уроке
                      <input type="checkbox">
                      <span class="check-mark"></span>
                    </label>
                    <div class="select-label">
                      за  
                      <select class="styler">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                      </select>
                      мин
                    </div>
                  </div>
                  <div class="notification">
                    <label class="check-label">Уведомить по SMS о следующем уроке
                      <input type="checkbox">
                      <span class="check-mark"></span>
                    </label>
                    <div class="select-label">
                      за  
                      <select class="styler">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                      </select>
                      мин
                    </div>
                  </div>
                  <button type="submit" class="btn btn-orange">
                    Сохранить
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="history">
            <p class="cabinet-title">История занятий</p>
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
                <span class="lesson">26 дек 11:27 - 60 мин</span>
                <span class="lesson">26 дек 11:27 - 60 мин</span>
                <span class="lesson">26 дек 11:27 - 60 мин</span>
                <span class="lesson">26 дек 11:27 - 60 мин</span>
                <span class="lesson">26 дек 11:27 - 60 мин</span>
                <span class="lesson">26 дек 11:27 - 60 мин</span>
                <span class="lesson">26 дек 11:27 - 60 мин</span>
                <span class="lesson">26 дек 11:27 - 60 мин</span>

              </div>
              <a href="javascript:void(0)" class="more-lefssons link">Показать ещё</a>
            </div>
          </div>
        </div>
        <div class="cabinet-wrapper home">
          <p class="cabinet-title">Домашнее задание</p>
        </div>
        <div class="cabinet-wrapper full balance">
          <div class="balance-inner">
            <p class="cabinet-title">Мой баланс</p>
            <div class="price">
              <span>20 занятий</span> - 45 минут
              <p class="sale">Моя скидка - 0% <a href="#" class="link" data-toggle="modal" data-target="#discountModal">как формируется?</a></p>
            </div>
            <a href="#" class="btn btn-orange">
              Пополнить
            </a>
          </div>
          <div class="history">
            <p class="cabinet-title">История занятий</p>
            <div class="lessons">
              <div class="lessons-inner">
                <span class="lesson">26 дек 11:27 - 126 BYN</span>
                <span class="lesson">26 дек 11:27 - 126 BYN</span>
                <span class="lesson">26 дек 11:27 - 126 BYN</span>
                <span class="lesson">26 дек 11:27 - 126 BYN</span>
                <span class="lesson">26 дек 11:27 - 126 BYN</span>
                <span class="lesson">26 дек 11:27 - 126 BYN</span>
              </div>
              <a href="javascript:void(0)" class="more-lefssons link">Показать ещё</a>
            </div>
          </div>
        </div>
        <div class="cabinet-wrapper full certificate">
          <p class="cabinet-title">Мои сертификаты</p>
          <div class="cert-inner">
            <div class="row">
              <div class="col-xl-6 col-lg-6">
                <p>Сертификат выдается слушателям, успешно освоившим уровень<br/>
                  английского языка и обучавшимся в течении 20 и более занятий<br/>
                  в нашей школе. Сертификат высылается в электронном виде<br/>
                  на email учащегося.
                </p>
              </div>
              <div class="col-xl-6 col-lg-6">
                <form method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Имя и Фамилия (eng)">
                  </div>
                  <button type="submit" class="btn btn-orange">Отправить запрос</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="cabinet-wrapper full free-lesson">
          <p class="cabinet-title">Мои бесплатные занятия</p>
          <div class="row">
            <div class="col-xl-7 col-lg-6">
              <div class="step">
                <p class="title">1. Пригласи друга</p>
                <div class="description">
                  Вы можете пригласить своего друга на обучение по нижеуказанной ссылке
                  или воспользоваться функциональными кнопками. После первой оплаты
                  другом 5-ти и более занятий - Вам и Вашему другу будет зачислено по 1-му
                  бесплатному занятию длительностью 45 мин.
                </div>
                <div class="share">
                  <div class="form-group">
                    <input class="form-control" value="https://englishdoma.ru/?inv=MjEQ" readonly="" id="copy-content">
                  </div>
                  <ul>
                    <li>
                      <a href="javascript:void(0)" class="copy-link" onclick="copyToClipboard('#copy-content')">
                        <img src="img/copy-link.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="img/message-link.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="img/insta.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="img/ok.png" alt="">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="img/face.png" alt="">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-6">
              <div class="step">
                <p class="title">2. Напиши отзыв</p>
                <div class="description">
                  Вы можете поделиться впечатлениями о своем опыте
                  изучения английского языка у нас. После размещения
                  отзыва на ваш баланс будет зачислено одно занятие
                  длительностью 45 мин.
                </div>
                <a href="#" class="link" data-toggle="modal" data-target="#commentModal">Оставить отзыв сейчас</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	<!-- END CONTENT -->
  <!-- MODALS -->

  
  <!-- MODALS -->
<? include( 'tpl/footer.php' );?>
<script>
  $(window).on('load',function(){
    $('.rating').modal('show');
  });
</script>