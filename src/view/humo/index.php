<main class="main__landingpage" id="main__landing">
  <section class="firstSection">
  <article class="section__future">
    <h2 class="section__future__title">Een kijk op onze dystopische toekomst</h2>
    <p class="section__future__paragraph">Lorem Ipsum is slechts een proeftekst uit het
    drukkerij- en zetterijwezen. Lorem Ipsum is de
    standaard proeftekst in deze bedrijfstak sinds
    de 16e eeuw</p>

    <div class="center">
      <a href=""><div class="down"></div></a>
      <p class="down__alle">alle producten</p>
    </div>
  </article>

  <article class="discount">
  <p class="discount__paragraph__strong">KRIJG 60% KORTING BIJ DEZE AANKOOP</p>
  <p class="discount__paragraph">Vind de kortingscode op de flap van humo betreffende deze week</p>
  </article>

  <h2 class="section__title">Boeken</h2>

  <article class="book__article">

  <div class="book__article__image__wrapper">
  <img src="<?php echo $producthome['product__image'] ?>" alt="book article name">


  <?php $id = $_GET['idhome']; ?>

  <div class="previous__next__buttons">
  <a class="button__previousAndNext previous" href="index.php?&idhome=<?php echo $id-1?>"><img class="previous__image" src="assets/humo/arrow.svg" alt="arrow_button"></a>
  <a class="button__previousAndNext next" href="index.php?&idhome=<?php echo $id+1?>"><img class="next__image" src="assets/humo/arrow.svg" alt="arrow_button"></a>
  </div>
  </div>

  <div class="book__info">

  <p class="book__title info__item"><strong>Title:</strong> <?php echo $producthome['name']; ?></p>
  <p class="book__description info__item"><strong>Beschrijving:</strong><?php echo $producthome['description'] ?></p>
  <p class="book__pages info__item"><strong>specificaties:</strong> <?php echo $producthome['specifications'] ?></p>

  <div class="rating__wrapper info__item">
    <img class="book__rating" src="assets/humo/rating_star.svg" alt="rating star">
    <img class="book__rating" src="assets/humo/rating_star.svg" alt="rating star">
    <img class="book__rating" src="assets/humo/rating_star.svg" alt="rating star">
    <img class="book__rating" src="assets/humo/rating_star.svg" alt="rating star">
  </div>

  <div class="practicall__info info__item">
  <span class="practicall__info__price">€<?php echo $producthome['price'] ?></span>
  <span class="practicall__info__delivery"><?php echo $producthome['delivery_time'] ?></span>
  </div>

<form class="landingpage__form info__item" action="">
  <div class="quantity__wrapper">
  <label class="label__quantity" for="aantal">Aantal:</label>
  <input class="input input__number" type="number">
  </div>

  <div class="button__wrapper">
  <input class="input input__button input__BuyNow" type="submit" value="nu kopen">
  <input class="input input__button input__Ebook" type="submit" value="Lees longreader">
  </div>
</form>
</div>
  </article>

  </section>


  <section class="secondSection">
    <h2 class="section__title section__title__products">producten</h2>


    <div class="flexbox__wrapper">
    <article class="product__images__overview">
      <div class="product__image__overview__container">
      <p class="product__name__overview">Lees accesoires</p>
      <img class="product__image__overview" src="assets/humo/leesacce.svg" alt="lees accesoires">
      <a class="buttonHumoTrans" href="">Koop mij</a>
      </div>
      <div class="product__image__overview__container">
      <p class="product__name__overview">Boeken</p>
      <img class="product__image__overview" src="assets/humo/boeken.svg" alt="boeken">
      <a class="buttonHumoTrans" href="">Koop mij</a>
      </div>
      <div class="product__image__overview__container">
      <p class="product__name__overview">Eigen ontwerp</p>
      <img class="product__image__overview" src="assets/humo/eigen ontwerp.svg" alt="eigen ontwerp">
      <a class="buttonHumoTrans" href="">Koop mij</a>
      </div>
      <div class="product__image__overview__container">
      <p class="product__name__overview">Humo abbonement</p>
      <img class="product__image__overview" src="assets/humo/humo_abbo.svg" alt="humo abbonement">
      <a class="buttonHumoTrans" href="">Koop mij</a>
      </div>
    </article>

    <article class="product__information__overview">
      <h3 class="product__information__overview__title section__future__title">Blader tussen onze producten</h3>
      <p class="product__information__overview__paragraph section__future__paragraph">Lorem Ipsum is slechts een
          proeftekst uit het drukkerij- en
          zetterijwezen. Lorem Ipsum is de
          standaard proeftekst in deze bedrijfstak
          sinds de 16e eeuw</p>
    <a class="buttonHumoRed__link" href="">Alle producten</a>
      </article>
      </div>
  </section>

  <section class="thirdSection">
    <h2 class="section__title section__title__abbo">Abbonement</h2>

    <aside class="abbonement__paragraph__container">
      <p class= "abbonement__paragraph">Lorem Ipsum is slechts een proeftekst
      uit het drukkerij- en zetterijwezen. </p>
    </aside>

    <article class="overview__humo__abbo">
      <div class="abbo__item">
      <p class="humo__overview__termijn">1 jaar</p>
      <img src="assets/humo/abbo__humo.svg" alt="Humo abbonement tarief 1">
      <a class="buttonHumoRed__link button__abbo" href="">Nu kopen €17</a>
      </div class="abbo__item">
      <div class="abbo__item">
      <p class="humo__overview__termijn">2 jaar</p>
      <img src="assets/humo/abbo__humo.svg" alt="Humo abbonement tarief 2">
      <a class="buttonHumoRed__link button__abbo" href="">Nu kopen €17</a>
      </div>
      <div class="abbo__item">
      <p class="humo__overview__termijn">3 jaar</p>
      <img src="assets/humo/abbo__humo.svg" alt="Humo abbonement tarief 3">
      <a class="buttonHumoRed__link button__abbo" href="">Nu kopen €17</a>
      </div>
    </article>
  </section>


</main>
