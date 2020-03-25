<?php $inner = true; ?>
<link rel="stylesheet" href="libs/formstyler/jquery.formstyler.css">
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
            <a href="#">Вопросы-ответы</a>
          </li>
          <li>
            <p>></p>
          </li>
          <li>
            <span>Ответы на часто задаваемые вопросы</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="section section-faq faq-single">
      <div class="container">
        <div class="section-title">
          Модальные окна
        </div>
        <div class="row">
        	<div class="col-xl-4 col-lg-4">
        		<a href="#" class="btn btn-orange" data-toggle="modal" data-target="#freeLesson">
        			Бесплатный урок
        		</a>
        	</div>
        	<div class="col-xl-4 col-lg-4">
        		<a href="#" class="btn btn-orange" data-toggle="modal" data-target="#graphModal">
        			График занятий
        		</a>
        	</div>
        	<div class="col-xl-4 col-lg-4">
        		<a href="#" class="btn btn-orange" data-toggle="modal" data-target="#teamModal">
        			Стать частью команды
        		</a>
        	</div>
        </div>
      </div>
    </div>
  </div>
	<!-- END CONTENT -->
	<div class="modal fade freeLesson" id="freeLesson" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="row">
        	<div class="col-xl-6 col-lg-6">
        		<div class="left-side">
	        		<p class="title">Записывайтесь на бесплатный пробный урок</p>
	        		<div class="call">
	              <p>Укажите свои контактные данные или позвоните нам</p>
	              <div class="call-wrapper">
	                <div class="call-wrapper__select">
	                  <a href="#" class="main-phone">
	                    <span>
	                      +7 (499) 404-15-10
	                    </span>
	                  </a>
	                  <ul>
	                    <li>
	                      <a href="tel:+7 (499) 404-15-10">+7 (499) 404-15-11</a>
	                    </li>
	                    <li>
	                      <a href="tel:+7 (499) 404-15-10">+7 (499) 404-15-12</a>
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
		                <input type="phone" name="number" class="form-input maskphone" placeholder="Введите Ваш номер">
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
	              <button type="submit" class="btn btn-orange">Записаться</button>
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
	                <img src="img/free1.png" alt="">
	              </div>
	              <p class="free-elem__title">
	                Познакомимся
	              </p>
	            </div>
	            <div class="free-elem">
	              <div class="free-elem__img">
	                <img src="img/free2.png" alt="">
	              </div>
	              <p class="free-elem__title">
	                Определим<br> Ваш уровень
	              </p>
	            </div>
	            <div class="free-elem">
	              <div class="free-elem__img">
	                <img src="img/free3.png" alt="">
	              </div>
	              <p class="free-elem__title">
	                Составим<br> план обучения
	              </p>
	            </div>
	            <div class="free-elem">
	              <div class="free-elem__img">
	                <img src="img/free4.png" alt="">
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
		                <input type="phone" name="number" class="form-input maskphone" placeholder="Введите Ваш номер телефона">
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
	        				<p class="title">Резюме</p>
	        				<a href="#" class="choose">
	        					<img src="img/clip.png" alt="">
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
<? include( 'tpl/footer.php' );?>
<script src="libs/formstyler/jquery.formstyler.min.js"></script>
<script>
  //styler
  $('.styler').styler();
</script>