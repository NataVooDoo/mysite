<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tora</title>

    <?php wp_head(); ?>

   
  </head>

  <body>
    
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <a class="logo" href="#main">
            <img class="logo__img" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="logo" />
          </a>
          <nav class="menu">
            <ul class="menu__list">
              <li class="menu__list-item">
                <a href="#about" class="menu__list-link">Обо мне</a>
              </li>
              <li class="menu__list-item">
                <a href="#" class="menu__list-link">Портфолио</a>
              </li>
              <li class="menu__list-item">
                <a href="#" class="menu__list-link">Тарифы</a>
              </li>
              <li class="menu__list-item">
                <a href="#" class="menu__list-link">Контакты</a>
              </li>
              <!-- <li class="menu__list-item"><a href="" class="menu__list-link__sity">Краснодар</a></li> -->
            </ul>
          </nav>
          <div class="menu__list-item">
            <a class="phone" href="tel:+77777777777">+7 (777) 777 77 77</a>
          </div>
          <div class="burger_menu">
            <div class="menu_btn">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <nav class="menu_burger">
              <ul class="menu_list">
                <li class="menu-item">
                  <a href="" class="menu__list-link burger_link">Обо мне</a>
                </li>
                <li class="menu-item">
                  <a href="" class="menu__list-link burger_link">Портфолио</a>
                </li>
                <li class="menu-item">
                  <a href="" class="menu__list-link burger_link">Тарифы</a>
                </li>
                <li class="menu-item">
                  <a href="" class="menu__list-link burger_link">Контакты</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>