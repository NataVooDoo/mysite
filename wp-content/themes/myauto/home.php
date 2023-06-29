<?php

/*
Template Name: home
*/

?>

<?php get_header(); ?>

   <main>
      <div class="main_container" id="main">
        <section class="top">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/header_bg2.png" alt="MainPhoto" />
          <div class="block_text">
            <h1 class="title">
              Хранитель самых <br />
              ярких и теплых моментов
            </h1>
            <hr />
            <h3 class="title__2">Профессиональный фотограф Торн Александра</h3>
            <a href="#" class="top__link"> Записаться на съемку </a>
           </div>
        </section>

        <section class="i-am" id="about">
          <div class="container">
            <div class="i-am_info">
              <h2 class="i-am-title_outer">Привет, меня зовут Саша.</h2>
              <img
                class="i-am__photo"
                src="<?php bloginfo('template_url'); ?> /assets/images/My_photo2.png"
                alt="my_photo"
              />
              <div class="i-am__text">
                <h2 class="i-am-title">Привет, меня зовут Саша.</h2>
                <p>
                  Я начала увлекаться фотографией ещё в 2011, но в 2017 решила
                  превратить это увлечение в дело всей своей жизни. Поэтому вот
                  уже пять лет с помощью своего видения я показываю людей
                  настоящими и раскрываю их с новой стороны.
                </p>
                <p>
                  Самое трепетное - это, осознавать, что люди спустя много лет
                  будут смотреть фотографии с важных для них событий и
                  чувствовать радость пережитых моментов их жизни. И пусть,
                  меня, возможно, они уже и не вспомнят, на душе становится
                  тепло, потому что я внесла такой вклад в чьи-то воспоминания.
                </p>
                <p>
                  Моё основное место деятельности - Краснодар. Но я открыта к
                  другим городам и странам, поэтому если вы хотите видеть меня в
                  качестве своего фотографа - напишите мне, и мы обсудим все
                  детали вашей съёмки.
                </p>
              </div>
            </div>
            <div class="i-am__bottom">
              <p class="i-am__love">С любовью,</p>
              <p class="i-am__love__tora">Tora</p>
            </div>
          </div>
        </section>

        <section class="price">
          <!-- <div class="container"> -->
          <ul class="price-list">
            <li class="price-item">
              <h2>WEDDING</h2>
              <img src="<?php bloginfo('template_url'); ?>/assets/images/price/Wedding.jpg" alt="Wedding" />
              <h3><a href="">СМОТРЕТЬ</a></h3>
            </li>
            <li class="price-item">
              <h2>FAMliY/LOVESTORY</h2>
              <img src="<?php bloginfo('template_url'); ?>/assets/images/price/family.jpg" alt="Family" />
              <h3><a href="">СМОТРЕТЬ</a></h3>
            </li>
            <li class="price-item">
              <h2>PORTRAIT</h2>
              <img src="<?php bloginfo('template_url'); ?>/assets/images/price/portrait.jpg" alt="Portrait" />
              <h3><a href="">СМОТРЕТЬ</a></h3>
            </li>
          </ul>
          <!-- </div> -->
        </section>

        <section class="instagram">
          <div class="bot_container">
            <h2 class="instagram__title">
              СЛЕДИТЕ ЗА МОИМИ РАБОТАМИ <br />
              В INSTAGRAM
            </h2>
            <div class="instagram__photo">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/instagram/1.png" alt="PostPhoto" />
              <img src="<?php bloginfo('template_url'); ?>/assets/images/instagram/2.png" alt="PostPhoto" />
              <img src="<?php bloginfo('template_url'); ?>/assets/images/instagram/3.png" alt="PostPhoto" />
              <img src="<?php bloginfo('template_url'); ?>/assets/images/instagram/4.png" alt="PostPhoto" />
            </div>
            <a class="tora__alesandra" href="#">@tora.alesandra</a>
          </div>
        </section>
      </div>
    </main>

     <?php get_footer(); ?>