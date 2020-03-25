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
  <link rel="stylesheet" href="css/fonts.css?v=11031911">

  <link rel="stylesheet" href="libs/bootstrap/bootstrap.css?v=11031911">
  <link rel="stylesheet" href="libs/slick/slick.css?v=11031911">
  <link rel="stylesheet" href="libs/telflag/intlTelInput.css?v=11031911">
  <link rel="stylesheet" href="libs/upload/jquery-file-upload.min.css?v=11031911">
  <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css?v=11031911">
  <link rel="stylesheet" href="libs/sharing/ayoshare.css?v=11031911">
  <link rel="stylesheet" href="libs/font-awesome/css/all.min.css?v=11031911">
  <link rel="stylesheet" href="libs/formstyler/jquery.formstyler.css?v=11031911">
  <link rel="stylesheet" href="libs/rating/rateit.css?v=11031911">
  <link rel="stylesheet" href="css/app.css?v=11031911">

  <?php 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={$ip}"));
    //var_dump($details->geoplugin_countryName); 
  ?>
</head>
<body>
  <?php if ( $home ) { ?>
    <header class="home">
      <div class="container">
        <div class="top-nav">
          <a href="#" class="logo">
            <img src="" data-src="img/logo.png" class="desktop-logo lazyload" alt="">
            <img src="" data-src="img/mobile-logo.png" class="mob-logo lazyload" alt="">
          </a>
          <div class="l-register">
            <p>Запишитесь<br/> на бесплатный пробный урок</p>
            <a href="#" class="btn btn-white" data-toggle="modal" data-target="#freeLesson">
              Записаться
            </a>
          </div>
          <div class="call">
            <p>Звоните нам</p>
            <div class="call-wrapper">
              <div class="call-wrapper__select">
                <a href="tel:<?php 
                      if ( $details->geoplugin_countryName == 'Russia' ) {
                        echo '+7(499)4041510';
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
                        echo '<a href="tel:549-49-04">549-49-04<small>(A1, мтс, лайф)</small></a>';
                      }
                    ?>
                  </li>
                  <li>
                    <a href="skype:+7(499)4041510?chat" class="skype">
                      <img class=" ls-is-cached lazyload" src="" data-src="img/skype.png" alt="">
                      EnglishDoma
                    </a>
                  </li>
                </ul>
              </div>
              <span class="w-graph">Пн-Пт 9:00-18:00 (мск)</span>
            </div>
          </div>
          <div class="mobile-nav">
            <a href="javscript:void(0)" class="mobile-tel-ico">
              <img src="img/mobile-phone.png" alt="">
            </a>
            <div class="hamburger">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
          </div>
          <a href="#" class="btn btn-orange" data-toggle="modal" data-target="#freeLesson">
            Получить бесплатную консультацию
          </a>
        </div>
        <div class="bottom-nav">
          <ul>                      
            <li class="active">
              <a href="#">Главная</a>
            </li>
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
              <a href="#">Сертификат</a>
            </li>
            <li>
              <a href="#">Онлайн-тест</a>
            </li>
            <li>
              <a href="#">О нас</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="mob-nav">
        <ul>
          <li class="active">
            <a href="#">Главная</a>
          </li>
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
            <a href="#">Сертификат</a>
          </li>
          <li>
            <a href="#">Онлайн-тест</a>
          </li>
          <li>
            <a href="#">О нас</a>
          </li>
        </ul>
        <ul class="submenu">
          <li>
            <a href="#">Вопросы и ответы</a>
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
                        echo '<a href="tel:549-49-04">549-49-04<small>(A1, мтс, лайф)</small></a>';
                      }
                    ?>
                  </li>
                  <li>
                    <a href="skype:+7(499)4041510?chat" class="skype">
                      <img class=" ls-is-cached lazyload" src="" data-src="img/skype.png" alt="">
                      EnglishDoma
                    </a>
                  </li>
                </ul>
            </div>
            <span class="w-graph">Пн-Пт 9:00-18:00 (мск)</span>
          </div>
        </div>
        <div class="l-register">
          <p>Запишитесь<br/> на бесплатный пробный урок</p>
          <a href="#" class="btn btn-white" data-toggle="modal" data-target="#freeLesson">
            Записаться
          </a>
        </div>
      </div>
      <div class="phones">
        <div class="call">
          <p>Звоните нам</p>
          <div class="call-wrapper">
            <ul>
              <li>
                <a href="tel:+7(499)4041510">+7 (499) 404-15-10</a>
              </li>
              <li>
                <a href="tel:549-49-04">549-49-04 <small>(A1, мтс, лайф)</small></a>
              </li>
            </ul>
            <span class="w-graph">Пн-Пт 9:00-18:00 (мск)</span>
          </div>
          <a href="skype:+7(499)4041510?chat" class="skype">
            <img class="lazyload" src="" data-src="img/skype.png" alt="">
            EnglishDoma
          </a>
        </div>
      </div>
    </header>
  <?php } else if ( $inner ) { ?>
    <header class="inner">
      <div class="container">
        <div class="top-nav">
          <a href="#" class="logo">
            <img src="img/logo.png" alt="">
          </a>
          <div class="l-register">
            <p>Запишитесь<br/> на бесплатный пробный урок</p>
            <a href="#" class="btn btn-white" data-toggle="modal" data-target="#freeLesson">
              Записаться
            </a>
          </div>
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
                        echo '<a href="tel:549-49-04">549-49-04<small>(A1, мтс, лайф)</small></a>';
                      }
                    ?>
                  </li>
                  <li>
                    <a href="skype:+7(499)4041510?chat" class="skype">
                      <img class=" ls-is-cached lazyload" src="" data-src="img/skype.png" alt="">
                      EnglishDoma
                    </a>
                  </li>
                </ul>
              </div>
              <span class="w-graph">Пн-Пт 9:00-18:00 (мск)</span>
            </div>
          </div>
          <div class="mobile-nav">
            <a href="javscript:void(0)" class="mobile-tel-ico">
              <img src="img/mobile-phone.png" alt="">
            </a>
            <div class="hamburger">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </div>
          </div>
        </div>
        <div class="bottom-nav">
          <ul>                      
            <li class="active">
              <a href="#">Главная</a>
            </li>
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
              <a href="#">Сертификат</a>
            </li>
            <li>
              <a href="#">Онлайн-тест</a>
            </li>
            <li>
              <a href="#">О нас</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="mob-nav">
        <ul>
          <li class="active">
            <a href="#">Главная</a>
          </li>
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
            <a href="#">Сертификат</a>
          </li>
          <li>
            <a href="#">Онлайн-тест</a>
          </li>
          <li>
            <a href="#">О нас</a>
          </li>
        </ul>
        <ul class="submenu">
          <li>
            <a href="#">Вопросы и ответы</a>
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
                        echo '<a href="tel:549-49-04">549-49-04<small>(A1, мтс, лайф)</small></a>';
                      }
                    ?>
                  </li>
                  <li>
                    <a href="skype:+7(499)4041510?chat" class="skype">
                      <img class=" ls-is-cached lazyload" src="" data-src="img/skype.png" alt="">
                      EnglishDoma
                    </a>
                  </li>
                </ul>
            </div>
            <span class="w-graph">Пн-Пт 9:00-18:00 (мск)</span>
          </div>
        </div>
        <div class="l-register">
          <p>Запишитесь<br/> на бесплатный пробный урок</p>
          <a href="#" class="btn btn-white" data-toggle="modal" data-target="#freeLesson">
            Записаться
          </a>
        </div>
      </div>
      <div class="phones">
        <div class="call">
          <p>Звоните нам</p>
          <div class="call-wrapper">
            <ul>
              <li>
                <a href="tel:+7(499)4041510">+7 (499) 404-15-10</a>
              </li>
              <li>
                <a href="tel:549-49-04">549-49-04 <small>(A1, мтс, лайф)</small></a>
              </li>
            </ul>
            <span class="w-graph">Пн-Пт 9:00-18:00 (мск)</span>
          </div>
        </div>
        <a href="skype:+7(499)4041510?chat" class="skype">
          <img class=" ls-is-cached lazyload" src="" data-src="img/skype.png" alt="">
          EnglishDoma
        </a>
      </div>
    </header>
  <?php } ?>