<?php if (!empty($_GET['page'])){
  if ($_GET['page'] == 'longread'){
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ready player one</title>
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


    <div id="menuToggle" class= "menuToggle">
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


    <footer class="footer">
        <img class="presented__humo__footer" src="assets/images/presented.svg" alt="">

        <div class="socialMedia__footer">
            <div class="socialMedia__wrapper__footer">
                <a class="socialMedia__link__footer" href=""><img class="socialMedia__image" src="assets/images/facebook.svg" alt="facebook"></a>
                <a class="socialMedia__link__footer" href=""><img class="socialMedia__image" src="assets/images/insta.svg" alt="instagram"></a>
                <a class="socialMedia__link__footer" href=""><img class="socialMedia__image" src="/assets/images/twitter.svg" alt="twitter"></a>
            </div>
    </footer>

    <?php echo $js; ?>
  </body>
</html>
<?php }
}?>

<?php if (!empty($_GET['page'])){
  if ($_GET['page'] == 'home'){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Humo</title>
  <link rel="stylesheet" href="https://use.typekit.net/ape8ojm.css">
  <?php echo $csshumo;?>

</head>
<body>
<header class="header">

<div class="navigation__wrapper">
<nav role="navigation">
  <div id="menuToggle">

    <input type="checkbox" />

    <span></span>
    <span></span>
    <span></span>

    <ul id="menu">
      <a class="menu__item__link__hamburger menu__item__link__hamburger--active" href="#"><li class="menu__item font-size-big-active">Home</li></a>
      <a class="menu__item__link__hamburger" href="#"><li class="menu__item">Actua</li></a>
      <a class="menu__item__link__hamburger" href="#"><li class="menu__item">Humor</li></a>
      <a class="menu__item__link__hamburger" href="#"><li class="menu__item">Tv/film</li></a>
      <a class="menu__item__link__hamburger" href="#"><li class="menu__item">Muziek</li></a>
      <a class="menu__item__link__hamburger" href="#"><li class="menu__item">Boeken</li></a>

      <div class="menu__button__basket__wrapper">
      <li class="menu__item__button menu__item__choice">
        <a class=menu__item__button__link href="">Producten</a>
      </li>

      <li class="menu__item__basket menu__item__choice">
      <a href=""><img src="assets/humo/basket.svg" alt=""></a>
      </li>
      </div>
    </ul>
  </div>
</nav>

<ul class="menu__items__desktop__part">
  <li class="menu__item__link__hamburger menu__item__desktop"> <a class="menu__item__desktop__link menu__item__desktop__link--active" href="">Home</a></li>
  <li class="menu__item__link__hamburger"> <a class="menu__item__desktop__link" href="">Actua</a></li>
  <li class="menu__item__link__hamburger"> <a class="menu__item__desktop__link" href="">Actua</a></li>
</ul>

<h1 class="header__title__logo"> <a class="header__title__logo__link" href="">HUMO</a></h1>

<ul class="menu__items__desktop__part">
  <li class="menu__item__link__hamburger"> <a class="menu__item__desktop__link" href="">Tv/Film</a></li>
  <li class="menu__item__link__hamburger"> <a class="menu__item__desktop__link" href="">Muziek</a></li>
  <li class="menu__item__link__hamburger"> <a class="menu__item__desktop__link" href="">Boeken</a></li>
</ul>

<a class="search_button" href=""><img src="assets/humo/search__button.svg" alt="search button"></a>
</div>
</header>

<ul>
<div class="menu__button__basket__wrapper menu__button__basket__wrapper__desktop">
      <li class="menu__item__button menu__item__choice">
        <a class=menu__item__button__link href="">Producten</a>
      </li>

      <li class="menu__item__basket menu__item__choice">
      <a href=""><img src="assets/humo/basket.svg" alt=""></a>
      </li>
      </div>
    </ul>
 <?php echo $content;?>

<footer class="footer">
    <p class="footer__logo">Humo</p>
</footer>

 <?php echo $humojs; ?>
</body>
</html>

  <?php }
  } ?>
