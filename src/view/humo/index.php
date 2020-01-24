<main class="main__landingpage">
  <section class="firstSection">
  <article class="section__future">
    <h2 class="section__future__title">Een kijk op onze dystopische toekomst</h2>
    <p class="section__future__paragraph">Voor deze editie gaan we boeken ten aanbieding stellen die een dystopische kijk hebben op onze toekomst. De best gereviewde boeken met een dystopische kijk op de toekomst kun je hiernaast terug vinden. Koop ook anderhande accesoires/gadgets voor je leesplezier te verbeteren.</p>

    <div class="center">
      <a href="index.php#products"><div class="down"></div></a>
      <p class="down__alle">alle producten</p>
    </div>
  </article>

  <article class="discount">
  <p class="discount__paragraph__strong">KRIJG 60% KORTING OP AL ONZE BOEKEN</p>
  <p class="discount__paragraph">Vind de kortingscode op de flap van humo betreffende deze week</p>
  <form method="post" action="index.php">
  <input class="input coupon__input" type="text" name="coupon" required>
  <p class="error"></p>
  <input class="submit__coupon" type="submit" name="actionCoupon" value="apply">
  </form>
  </article>

  <h2 class="section__title">Boeken</h2>

  <article class="book__article">

  <div class="book__article__image__wrapper">
  <div class="div__images">
  <?php foreach($books as $book): ?>
  <a href="index.php?page=detail-page&id=<?php echo $book['id'];?>"><img class="header__image__book" src="<?php echo $book['product__image'] ?>" alt="<?php echo $book['product__image'] ?>"></a>
  <?php endforeach; ?>
  </div>
  </div>

  </article>
  <div class="previous__next__buttons">
  <a class="button__previousAndNext next" href=""><img class="next__image" src="assets/humo/arrow.svg" alt="arrow_button"></a>
  <p class="scroll__hor">Horizontaal scrollen</p>
  </div>

  </section>


  <section class="secondSection" id="products">
    <h2 class="section__title section__title__products">producten</h2>


    <div class="flexbox__wrapper">
    <article class="product__images__overview">
      <div class="product__image__overview__container">
      <p class="product__name__overview">Lees accesoires</p>
      <img class="product__image__overview" src="assets/humo/leesacce.svg" alt="lees accesoires">
      <a class="buttonHumoTrans" href="index.php?page=product&type=accessories">Koop mij</a>
      </div>
      <div class="product__image__overview__container">
      <p class="product__name__overview">Boeken</p>
      <img class="product__image__overview" src="assets/humo/boeken.svg" alt="boeken">
      <a class="buttonHumoTrans" href="index.php?page=product&type=book">Koop mij</a>
      </div>
      <div class="product__image__overview__container">
      <p class="product__name__overview">Eigen ontwerp</p>
      <img class="product__image__overview" src="assets/humo/eigen ontwerp.svg" alt="eigen ontwerp">
      <a class="buttonHumoTrans" href="index.php?page=product&type=customizable">Koop mij</a>
      </div>
      <div class="product__image__overview__container">
      <p class="product__name__overview">Humo abbonement</p>
      <img class="product__image__overview" src="assets/humo/humo_abbo.svg" alt="humo abbonement">
      <a class="buttonHumoTrans" href="index.php?page=#abo">Koop mij</a>
      </div>
    </article>

    <article class="product__information__overview">
      <h3 class="product__information__overview__title section__future__title">Blader tussen onze producten</h3>
      <p class="product__information__overview__paragraph section__future__paragraph alleproducten_p">Kies uit ons uitgebreid asssortiment aan leesgerief. Personaliseer je eigen bladwijzer, boekenbox(10 boeken), boekenstand en een agenda (2020). Je kunt ook voor de e-book alternatieven kiezen en lees-accesoires dat je helpen lezen! </p>
    <a class="buttonHumoRed__link" href="index.php?page=product&type=all">Alle producten</a>
      </article>
      </div>
  </section>

  <section id="abo" class="thirdSection">
    <h2 class="section__title section__title__abbo">Abbonement</h2>

    <aside class="abbonement__paragraph__container">
      <p class= "abbonement__paragraph">LEES DE HUMO OVERAL! Keuze uit digitaal, papier of allebei </p>
    </aside>

    <article class="overview__humo__abbo">
      <div class="abbo__item">
      <p class="humo__overview__termijn">1 jaar</p>
      <img src="assets/humo/abbo__humo.svg" alt="Humo abbonement tarief 1">
      <a class="buttonHumoRed__link button__abbo" href="index.php?page=abonnement">€15,95 euro/maand</a>
      </div class="abbo__item">
      <div class="abbo__item">
      <p class="humo__overview__termijn">2 jaar</p>
      <img src="assets/humo/abbo__humo.svg" alt="Humo abbonement tarief 2">
      <a class="buttonHumoRed__link button__abbo" href="index.php?page=abonnement">€14,36 euro/maand</a>
      </div>
      <div class="abbo__item">
      <p class="humo__overview__termijn">3 jaar</p>
      <img src="assets/humo/abbo__humo.svg" alt="Humo abbonement tarief 3">
      <a class="buttonHumoRed__link button__abbo" href="index.php?page=abonnement">€12,76 euro/maand</a>
      </div>

    </article>
    <div class="abbo__button__container">
    <a class="buttonHumoRed__link button__abbo button__abbo__border" href="index.php?page=abonnement">Abonnement kiezen</a>
    </div>
  </section>


</main>
