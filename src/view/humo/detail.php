<main>
<article class="book__article">

 <a class="position__absolute" href="index.php?page=product "> <img src="assets/humo/arrow__back.svg" alt="arrow__back"></a>

  <div class="book__article__image__wrapper">
  <img src="<?php echo $product['product__image']; ?>" alt="<?php echo $product['product__image']; ?>">

  <div class="previous__next__buttons">

  <?php
  $id = $_GET['id'];
  ?>
  <a class="button__previousAndNext previous" href="index.php?page=detail-page&id=<?php echo $id-1?>"><img class="previous__image" src="assets/humo/arrow.svg" alt="arrow_button"></a>
  <a class="button__previousAndNext next" href="index.php?page=detail-page&id=<?php echo $id+1?>"><img class="next__image" src="assets/humo/arrow.svg" alt="arrow_button"></a>
  </div>
  </div>

  <div class="book__info">
  <p class="book__name info__item"><?php echo $product['name']; ?></p>
  <p class="book__description info__item"><strong>Beschrijving: </strong> <?php echo $product['description']; ?></p>
  <p class="book__pages info__item"><strong>Specificaties:</strong> <?php echo $product['specifications']; ?></p>

  <div class="rating__wrapper info__item">
    <img class="book__rating" src="assets/humo/rating_star.svg" alt="rating star">
    <img class="book__rating" src="assets/humo/rating_star.svg" alt="rating star">
    <img class="book__rating" src="assets/humo/rating_star.svg" alt="rating star">
    <img class="book__rating" src="assets/humo/rating_star.svg" alt="rating star">
  </div>

  <div class="practicall__info info__item">
  <span class="practicall__info__price"><?php echo $product['price']; ?></span>
  <span class="practicall__info__delivery"><?php echo $product['delivery_time']; ?></span>
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
 </main>
