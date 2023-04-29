<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?=$data['page_title'];?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- css -->
  <link rel="stylesheet" href="<?=ROOT_ASSETS_THEME?>css/reset.css" />
  <link rel="stylesheet" href="<?=ROOT_ASSETS_THEME?>css/style.css" />
  <link rel="stylesheet" href="<?=ROOT_ASSETS_THEME?>css/register.css" />

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
  <!-- START HEADER -->
  <header class="header container-fluid">
    <div class="container">
      <div class="header__all">
        <div class="header__navigations">
          <div class="header__navigation">
            <a href="#">Front-End</a>
          </div>
          <div class="header__navigation">
            <a href="#">Back-End</a>
          </div>
          <div class="header__navigation">
            <a href="#">Full_Stack</a>
          </div>
          <div class="header__navigation">
            <a href="#">AWS</a>
          </div>
        </div>

        <div class="header__icons-block">
          <div class="header__icon-text">
            Follow us :
          </div>
          <div class="header__icons">
            <div class="header__icon">
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="header__icon">
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div class="header__icon">
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="header__icon">
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END HEADER -->
  <!-- START HERO TEXT -->
  <div class="hero-text">
    <div class="container">
      <div class="hero-text__all">
        <div class="hero-text__icons">
          <div class="hero-text__icon">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          </div>
          <div class="hero-text__icon">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
          </div>
          <div class="hero-text__icon">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
          <div class="hero-text__icon">
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
        <div class="hero-text__logo">
          <h1>kamba</h1>
          <p>PHP Back-end Developer</p>
        </div>
        <div class="hero-text__btn">
          <button class="btn"><a href="#">Subscribe</a></button>
        </div>
      </div>
      <hr>
    </div>
  </div>
  <!-- END HERO TEXT -->
  <!-- START NAVIGATION -->
  <div class="navigation">
    <div class="container">
      <div class="navigation__all">
        <div class="navigation__hamburger-icon">
          <i class="fa-solid fa-bars-staggered"></i>
        </div>
        <nav class="navigation__nav">
          <ul class="navigation__ul">
            <li><a href="<?=ROOT?>">home</a></li>
            <li><a href="<?=ROOT?>categories">categories</a></li>
            <li><a href="<?=ROOT?>about">about</a></li>
            <li><a href="<?=ROOT?>contact">contact</a></li>
            <li><a href="<?=ROOT?>login">login</a></li>
          </ul>
        </nav>
        <div class="navigation__search-icon">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- END NAVIGATION -->