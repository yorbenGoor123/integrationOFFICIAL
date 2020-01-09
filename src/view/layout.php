<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SoccerSearch - <?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
  <body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
<header class="header">
<h1 class="header__titleLogo"> <span class="logo__span ready">Ready</span> <span class="logo__span player">player one</span class="logo__span"> </h1>
<nav role="navigation">
    <ul class="menu__items__toggleOff">
      <li class="menu__item"> <a class="menu__item__link" href="">Read my story</a></li>
      <li class="menu__item"> <a class="menu__item__link" href="">Buy book</a></li>
    </ul>


    <div id="menuToggle">
      <input type="checkbox" />
      <div class="hamburger__menu__wrapper">
      <span class="span__item"></span>
      <span class="span__item green"></span>
      <span class="span__item"></span>
      </div>

      <ul id="menu">
        <div class="menu__items">
        <li class="menu__item"> <a class="menu__item__link" href="">Read my story</a></li>
        <li class="menu__item"> <a class="menu__item__link" href="">Buy book</a></li>
        </div>

        <div class="header__language">
            <a class="language language__nl" href="">Nl</a>
            <a class="language language__en" href="">En</a>
        </div>

        <div class="socialMedia">
            <div class="socialMedia__wrapper">
                <a class="socialMedia__link" href=""><img class="socialMedia__image" src="assets/images/facebook.svg" alt="facebook"></a>
                <a class="socialMedia__link" href=""><img class="socialMedia__image" src="assets/images/insta.svg" alt="instagram"></a>
                <a class="socialMedia__link" href=""><img class="socialMedia__image" src="/assets/images/twitter.svg" alt="twitter"></a>
            </div>

            <a class="socialMedia__presented__link" href=""><img class="socialMedia__presented__image" src="assets/images/presented.svg" alt="presented by humo"></a>
        </div>
      </ul>
    </div>
  </nav>

  <div class="header__language">
    <a class="language language__nl" href="">Nl</a>
    <a class="language language__en" href="">En</a>
  </div>
    </header>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>






    <?php echo $content;?>

    <?php echo $js; ?>

    <script src="./js/lib/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="js/lib/stats.js"></script>
  </body>
</html>
