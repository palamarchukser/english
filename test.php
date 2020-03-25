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
            <a href="#">Онлайн-тест</a>
          </li>
          <li>
            <p>></p>
          </li>
          <li>
            <span>Тест на определение уровня знания английского языка</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="section section-test test-inner">
      <div class="container">
        <div class="section-title">
          Тест на определение уровня знания английского языка
          <p class="subtitle">Ответьте на вопросы и узнайте свой уровень</p>
        </div>
        <div id="timer">
          <div class="test-timer">
            <span>29</span>:45
          </div>
        </div>
        <div id="area" style="display: block;">
          <div class="ask" id="question">What does your husband do?</div>
          <div class="answer">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6">
                <span onclick="check(0)" id="option1">He is feeding the dog.</span>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <span onclick="check(1)" id="option2">He is a doctor.</span>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <span onclick="check(2)" id="option3">Yes, he does.</span>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <span onclick="check(3)" id="option4">Yes, he is.</span>
              </div>
            </div>
          </div>
          <div class="ask-count">
            Вопрос <p><span id="ask-count-curent">1</span>/<span id="ask-count-total">40</span></p>
          </div>
          <div class="add-info">
            <p>Наш бесплатный онлайн-тест состоит из <b>40 вопросов</b>,<br/>
            на которые отведено время <b>30 мин</b>.</p>
            <p>После ответов - на экране отобразится Ваш результат<br/>
            (без ввода каких-то дополнительных данных).</p>
             <p>Более подробнее об уровнях Вы можете почитать на нашей страничке <a href="#" class="link">здесь</a>.</p>
          </div>
        </div>
        <div id="result-block" style="text-align:center;">
          <span id="result-title"></span>
          <p><span>Ваш уровень:</span> <b><span id="result"></span></b></p>
          <p><span>Отвечено правильно на </span> <span id="result-countQuest"></span> вопросов</p>
          <button id="start" class="start-button" onClick="check(4)">Приступить к тесту</button>
          <a id='end' onClick="window.location.reload();" style='display: none;' class='restart-test btn btn-red mb15' href='#' >Начать сначала</a>
          *Внимание! Данный тест не является объективным определением вашего уровня. Точно определить ваш уровень на организационном занятии.
          <a href="#" class="btn btn-orange mt15">Записаться на бесплатный урок</a>
        </div>
      </div>
    </div>
  </div>
	<!-- END CONTENT -->
<? include( 'tpl/footer.php' );?>