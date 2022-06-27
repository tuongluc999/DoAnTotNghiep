<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>M-TP CLOUD</title>
  <meta name="description" content="">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Cousine:400,700|Montserrat:300,400,800|Anton' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{asset("/styles/vendor/bootstrap.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/vendor/font-awesome.min.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/vendor/superslides.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/vendor/owl.carousel.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/vendor/owl.transitions.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/vendor/flickity.min.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/vendor/swipebox.min.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/vendor/TimeCircles.css")}}">

  <link rel="stylesheet" href="{{asset("/styles/main.css")}}">

  <link rel="stylesheet" href="{{asset("/styles/colors/color-yellow.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/colors/color-lightblue.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/colors/color-purple.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/colors/color-green.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/colors/color-militar.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/colors/color-caqui.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/colors/color-red.css")}}">

  <!-- Intro Slider -->
  <link rel="stylesheet" href="{{asset("/styles/intro-slider.css")}}">
  <link rel="stylesheet" href="{{asset("/styles/vendor/animate.min.css")}}">

  <script src="scripts/vendor/modernizr.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar-muziq" data-offset="80" class="dark-version">

  <!-- LOADER -->
  <div id="mask">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
  <!-- HEADER -->
  <header id="jHeader">
    <nav class="navbar navbar-default " role="navigation">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Desplegar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="images/logo-white.png" alt="logo"></a>
      </div>

      <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-muziq">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="home-dark.html">Home</a></li>
          <li><a href="discography-dark.html">DISCOGRAPHY</a></li>
          <li><a href="about-dark.html">ABOUT</a></li>
          <li><a href="tour-dates-dark.html">TOUR DATES</a></li>
          <li><a href="gallery-dark.html">GALLERY</a></li>
          <li><a href="news-dark.html">NEWS</a></li>
          <li><a href="contact-dark.html">CONTACT</a></li>
        </ul>
      </div>

    </nav>
  </header>

  <section class="intro full-width jIntro" id="anchor00">
    <div id="intro-carousel" class="carousel slide carousel-fade" data-pause="false">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#intro-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#intro-carousel" data-slide-to="1"></li>
        <li data-target="#intro-carousel" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="item active intro-fullscreen">
          <!-- Modify Image BG -->
          <div class="fill" style="background-image:url('images/demo/slider/intro-slide1.jpg');"></div>
          <div class="carousel-caption intro-center">
            <h1 data-animation="animated fadeIn" class="primary-title">M-TP CLOUD</h1>
            <h2 data-animation="animated fadeIn" class="subtitle-text">M-TP Entertaiment</h2>
            <div class="voffset50"></div>
          </div>
        </div><!-- /.item -->

        <!-- Second slide -->
        <div class="item">
          <!-- Modify Image BG -->
          <div class="fill" style="background-image:url('images/demo/slider/intro-slide2.jpg');"></div>
          <div class="carousel-caption p-intro-animate">
            <p data-animation="animated fadeIn">We are a <span>electronic band,</span> focused on<br>electro and techno & clubbing.</p>
            <a class="intro-link" href="#0" data-animation="animated fadeIn">Let’s Connect <i class="fa  fa-angle-right"></i></a>
          </div>
        </div><!-- /.item -->

        <!-- Third slide -->
        <div class="item title-alt">
          <!-- Modify Image BG -->
          <div class="fill" style="background-image:url('images/demo/slider/intro-slide3.jpg');"></div>
          <div class="carousel-caption">
            <p data-animation="animated fadeInUp">New Album<br>Release</p>
            <div data-animation="animated fadeInUp" class="animate-btn-alt">
              <input class="btn square stay-in-touch-submit" type="submit" name="button" value="Listen Album">
            </div>
          </div>
        </div><!-- /.item -->

      </div><!-- /.carousel-inner -->
    </div><!-- /.carousel -->
  </section>


  <!-- PLAYER -->
  <div class="player horizontal">
    <div class="container">
      <div class="info-album-player">
        <div class="album-cover" style="background: url('images/demo/cover-player.jpg') no-repeat center" id="bg-image3"></div>
        <p class="album-title">Spectrum</p>
        <p class="artist-name">Album by Blummsday</p>
      </div>
      <div class="player-content">
        <audio preload></audio>
        <ol class="playlist">
          <li><a href="#" data-src="mp3/01.mp3">Destiny</a></li>
          <li><a href="#" data-src="mp3/02.mp3">Sunless</a></li>
          <li><a href="#" data-src="mp3/03.mp3">Deep inspire</a></li>
        </ol>
        <div class="nextprev">
          <span class="prev">prev</span>
          <span class="next">next</span>
        </div>
        <span class="btnloop">loop</span>
      </div>
    </div>
  </div>

  <section class="section discography" id="anchor03">
    <div id="discography"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="voffset70"></div>
          <div class="title-wrapper">
            <h2 class="title">Discography</h2>
          </div>
          <div class="voffset80"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="carousel-discography js-flickity" data-flickity-options="{
            &quot;cellAlign&quot;: &quot;center&quot;, &quot;wrapAround&quot;: false,
            &quot;contain&quot;: false, &quot;prevNextButtons&quot;: false,&quot;imagesLoaded&quot;: true
          }">
          <!-- col-xlg-3 -->
          <li class="gallery-cell col-xs-12">

            <div class="row">

              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-01.html">
                    <img src="images/demo/albums/cover1.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">Perfect symmetry</p>
                  <p class="artist">Keane</p>
                </div>
              </div>

              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-02.html">
                    <img src="images/demo/albums/cover2.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">BLACK RAINBOW</p>
                  <p class="artist">Keane</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-03.html">
                    <img src="images/demo/albums/cover3.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">DYNAMIC ENERGY</p>
                  <p class="artist">Keane</p>
                </div>
              </div>
              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-04.html">
                    <img src="images/demo/albums/cover4.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">Under the iron sea</p>
                  <p class="artist">Keane</p>
                </div>
              </div>
            </div>

          </li>
          <li class="gallery-cell col-xs-12">

            <div class="row">

              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-01.html">
                    <img src="images/demo/albums/cover1.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">Perfect symmetry</p>
                  <p class="artist">Keane</p>
                </div>
              </div>

              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-02.html">
                    <img src="images/demo/albums/cover2.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">BLACK RAINBOW</p>
                  <p class="artist">Keane</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-03.html">
                    <img src="images/demo/albums/cover3.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">DYNAMIC ENERGY</p>
                  <p class="artist">Keane</p>
                </div>
              </div>
              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-04.html">
                    <img src="images/demo/albums/cover4.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">Under the iron sea</p>
                  <p class="artist">Keane</p>
                </div>
              </div>
            </div>

          </li>
          <li class="gallery-cell col-xs-12">

            <div class="row">

              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-01.html">
                    <img src="images/demo/albums/cover1.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">Perfect symmetry</p>
                  <p class="artist">Keane</p>
                </div>
              </div>

              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-02.html">
                    <img src="images/demo/albums/cover2.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">BLACK RAINBOW</p>
                  <p class="artist">Keane</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-03.html">
                    <img src="images/demo/albums/cover3.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">DYNAMIC ENERGY</p>
                  <p class="artist">Keane</p>
                </div>
              </div>
              <div class="col-xs-12 col-md-6 item-disc">
                <div class="info-album">
                  <div class="cover open-disc" data-url="discs/disc-04.html">
                    <img src="images/demo/albums/cover4.jpg" alt="">
                    <div class="rollover">
                      <i class="plus"></i>
                      <p>view album</p>
                    </div>
                  </div>
                  <p class="album dark">Under the iron sea</p>
                  <p class="artist">Keane</p>
                </div>
              </div>
            </div>

          </li>


        </ul>
        <div class="voffset100"></div>
      </div>
    </div>
  </div>
  <!-- DETAILS DISCO -->
  <div id="project-show"></div>
  <div class="section player-album project-window">
    <div class="project-content"></div><!-- AJAX Dinamic Content -->
  </div>
</section>

  <!-- LATEST ALBUM -->
  <section class="section latest-album dark" id="anchor01">
    <div class="container">
      <div class="voffset70"></div>
      <div class="title-wrapper">
        <h2 class="title">LATEST ALBUM</h2>
      </div>
      <div class="voffset80"></div>

      <div class="row">
        <div class="col-md-6">
          <div class="info-album">
            <div class="cover">
              <img src="images/demo/albums/cover.jpg" alt="">
            </div>
            <p class="album album-list">Perfect Symmetry</p>
            <p class="artist">Keane</p>
            <div class="voffset20"></div>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae omnis, debitis.</p>
            <p class="buyalbum">
              <a href="#" class="btn square inverse">buy album</a>
            </p>
            <ul class="links">
              <li><a href="#">itunes</a></li>
              <li><a href="#">spotify</a></li>
              <li><a href="#">beatport</a></li>
            </ul>
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="disc-tracklist">
            <audio preload id="playlist_newalbum"></audio>
            <ol class="playlist1">
              <li>
                <a href="#" data-src="mp3/01.mp3">
                  <div class="track-info">
                    <p class="track-title">We Exist</p>
                    <p class="track-album">Perfect Symmetry</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-src="mp3/02.mp3">
                  <div class="track-info">
                    <p class="track-title">It´s Never Over</p>
                    <p class="track-album">Perfect Symmetry</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-src="mp3/03.mp3">
                  <div class="track-info">
                    <p class="track-title">Exploration</p>
                    <p class="track-album">Perfect Symmetry</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-src="mp3/01.mp3">
                  <div class="track-info">
                    <p class="track-title">Plymouth Fury</p>
                    <p class="track-album">Perfect Symmetry</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-src="mp3/02.mp3">
                  <div class="track-info">
                    <p class="track-title">They Return</p>
                    <p class="track-album">Perfect Symmetry</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-src="mp3/03.mp3">
                  <div class="track-info">
                    <p class="track-title">Ultraviolet</p>
                    <p class="track-album">Perfect Symmetry</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-src="mp3/01.mp3">
                  <div class="track-info">
                    <p class="track-title">Post Operative</p>
                    <p class="track-album">Perfect Symmetry</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#" data-src="mp3/02.mp3">
                  <div class="track-info">
                    <p class="track-title">Escape</p>
                    <p class="track-album">Perfect Symmetry</p>
                  </div>
                </a>
              </li>
            </ol>

          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- LATEST ALBUM -->
    <section class="section latest-album dark" id="anchor01">
        <div class="container">
          <div class="voffset70"></div>
          <div class="title-wrapper">
            <h2 class="title">LATEST ALBUM</h2>
          </div>
          <div class="voffset80"></div>
    
          <div class="row">
            <div class="col-md-6">
              <div class="info-album">
                <div class="cover">
                  <img src="images/demo/albums/cover.jpg" alt="">
                </div>
                <p class="album album-list">Perfect Symmetry</p>
                <p class="artist">Keane</p>
                <div class="voffset20"></div>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae omnis, debitis.</p>
                <p class="buyalbum">
                  <a href="#" class="btn square inverse">buy album</a>
                </p>
                <ul class="links">
                  <li><a href="#">itunes</a></li>
                  <li><a href="#">spotify</a></li>
                  <li><a href="#">beatport</a></li>
                </ul>
                <div class="voffset80"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="disc-tracklist">
                <audio preload id="playlist_newalbum"></audio>
                <ol class="playlist1">
                  <li>
                    <a href="#" data-src="mp3/01.mp3">
                      <div class="track-info">
                        <p class="track-title">We Exist</p>
                        <p class="track-album">Perfect Symmetry</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-src="mp3/02.mp3">
                      <div class="track-info">
                        <p class="track-title">It´s Never Over</p>
                        <p class="track-album">Perfect Symmetry</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-src="mp3/03.mp3">
                      <div class="track-info">
                        <p class="track-title">Exploration</p>
                        <p class="track-album">Perfect Symmetry</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-src="mp3/01.mp3">
                      <div class="track-info">
                        <p class="track-title">Plymouth Fury</p>
                        <p class="track-album">Perfect Symmetry</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-src="mp3/02.mp3">
                      <div class="track-info">
                        <p class="track-title">They Return</p>
                        <p class="track-album">Perfect Symmetry</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-src="mp3/03.mp3">
                      <div class="track-info">
                        <p class="track-title">Ultraviolet</p>
                        <p class="track-album">Perfect Symmetry</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-src="mp3/01.mp3">
                      <div class="track-info">
                        <p class="track-title">Post Operative</p>
                        <p class="track-album">Perfect Symmetry</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-src="mp3/02.mp3">
                      <div class="track-info">
                        <p class="track-title">Escape</p>
                        <p class="track-album">Perfect Symmetry</p>
                      </div>
                    </a>
                  </li>
                </ol>
    
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- STAY IN TOUCH -->
  <section class="section stay-in-touch inverse-color parallax-section" data-parallax-image="images/demo/stay-in-touch/bg-stay-in-touch.jpg" id="anchor02">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="voffset190"></div>
          <p class="titulo">Stay in<br> Touch</p>
          <div class="voffset20"></div>
          <p class="cousine subtitulo">Subscribe for free downloads and news updates.</p>
          <div class="voffset30"></div>
          <label for="stay-in-touch-email">YOUR EMAIL</label>
          <form class="" action="http://jellydemos.com/html/soundlab/index.html" method="post">
            <div class="row">
              <div class="col-xs-12 col-sm-8">
                <input  id="stay-in-touch-email" type="text" name="stay-in-touch-email" value="">
              </div>
              <div class="col-xs-12 col-sm-4">
                <input class="btn square stay-in-touch-submit" type="submit" name="button" value="GET STARTED">
              </div>
            </div>
          </form>
          <div class="voffset190"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACTS -->
  <section class="section inverse-color contact" id="anchor08">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="voffset70"></div>
          <div class="title-wrapper">
            <h2 class="title inverse">follow & contact</h2>
          </div>
          <div class="voffset100"></div>
        </div>
      </div>
      <div class="row no-gutter">
        <div class="col-xs-12 col-md-3 text-center">
          <h2 class="title-follow">MGMT</h2>
          <div class="voffset40"></div>
          <hr class="hidden-xs">
          <div class="voffset40"></div>
          <p class="name">Jhon Smith</p>
          <p class="phone"><a href="tel:+1-456-768-9864">T+1-456-768-9864</a></p>
          <p class="email"><a href="mailto:mgtm@music.com">mgtm@music.com</a></p>
          <div class="voffset40"></div>

          <hr class="hidden-xs">
        </div>
        <div class="col-xs-12 col-md-3 text-center">
          <h2 class="title-follow">BOOKING</h2>
          <div class="voffset40"></div>
          <hr class="hidden-xs">
          <div class="voffset40"></div>
          <p class="name">Natalia Portman</p>
          <p class="phone"><a href="tel:+1-456-768-9864">T+1-456-768-9864</a></p>
          <p class="email"><a href="mailto:booking@music.com">booking@music.com</a></p>
          <div class="voffset40"></div>
          <hr class="hidden-xs">
        </div>
        <div class="col-xs-12 col-md-3 text-center">
          <h2 class="title-follow">press</h2>
          <div class="voffset40"></div>
          <hr class="hidden-xs">
          <div class="voffset40"></div>
          <p class="name">Matt More</p>
          <p class="phone"><a href="tel:+1-456-768-9864">T+1-456-768-9864</a></p>
          <p class="email"><a href="mailto:press@music.com">press@music.com</a></p>
          <div class="voffset40"></div>
          <hr class="hidden-xs">
        </div>
        <div class="col-xs-12 col-md-3 text-center">
          <h2 class="title-follow">info</h2>
          <div class="voffset40"></div>
          <hr class="hidden-xs">
          <div class="voffset40"></div>
          <p class="name">Jackson Five</p>
          <p class="phone"><a href="tel:+1-456-768-9864">T+1-456-768-9864</a></p>
          <p class="email"><a href="mailto:info@music.com">info@music.com</a></p>
          <div class="voffset40"></div>
          <hr class="hidden-xs">
        </div>
      </div>

      <div class="row social">
        <a href="#"><img src="images/demo/social/logo01.png" alt="logo01"></a>
        <a href="#"><img src="images/demo/social/logo02.png" alt="logo02"></a>
        <a href="#"><img src="images/demo/social/logo03.png" alt="logo03"></a>
        <a href="#"><img src="images/demo/social/logo04.png" alt="logo04"></a>
        <a href="#"><img src="images/demo/social/logo05.png" alt="logo05"></a>
      </div>

      <div class="voffset80"></div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <p class="copy">© 2017. All Rights Reserved. Designed by JellyThemes</p>
      <ul class="menu-footer">
        <li><a href="#">disclaimer</a></li>
        <li><a href="#">terms & conditions</a></li>
        <li><a href="#">privacy policy</a></li>
      </ul>
    </div>
  </footer>

  <!--[if lt IE 7]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='../../../www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <script src="scripts/vendor/jquery.js"></script>
    <script src="scripts/vendor/jquery.superslides.min.js"></script>
    <script src="scripts/vendor/flickity.pkgd.js"></script>
    <script src="scripts/vendor/audio.min.js"></script>
    <script src="scripts/vendor/twitterFetcher_min.js"></script>
    <script src="scripts/vendor/isotope.pkgd.min.js"></script>
    <script src="scripts/vendor/jquery.swipebox.min.js"></script>
    <script src="scripts/vendor/TimeCircles.js"></script>
    <script src="scripts/vendor/owl.carousel.min.js"></script>
    <script src="scripts/vendor/jquery.parallax.min.js"></script>

    <script src="scripts/discography.js"></script>
    <script src="scripts/news.js"></script>
    <script src="scripts/main.js"></script>

    <script src="scripts/vendor/bootstrap.js"></script>
    <!-- Intro Slider -->
    <script src="scripts/intro-slider.js"></script>
    <!-- Countdown Next Show -->
    <script src="scripts/vendor/countdown.js"></script>
  </body>
  </html>
