<main>
<article class="book__article">

 <a class="position__absolute" href="index.php?page=product "> <img src="assets/humo/arrow__back.svg" alt="arrow__back"></a>

  <div class="book__wrapper__detail">
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
    <?php  for($i=1; $i <= $product['rating']; $i++){ ?>
      <img class="book__rating" src="assets/humo/rating_star.svg" alt="rating star">
    <?php } ?>
  </div>
  <div class="practicall__info info__item">
  <span class="practicall__info__price"><?php

  echo $product['price'];?>

  </span>
  <span class="practicall__info__delivery"><?php echo $product['delivery_time']; ?></span>
  </div>

<form method="post" class="landingpage__form info__item" action="">
<input  type="hidden" name="id" value="<?php echo $product['id'];?>">
  <div class="quantity__wrapper">

  <?php if($product['product_type'] == 'customizable'){ ?>
  <?php echo ' ' ?>
  <?php }else { ?>
  <label class="label__quantity" for="aantal">Aantal:</label>
  <input class="input input__number" name="quantity" type="number" required min="1" max="10">
  <?php } ?>
  </div>

  <div class="button__wrapper">
  <?php if($product['product_type'] == 'customizable'){ ?>
  <a href="index.php?page=personalisatie" name="action" class="input buttonHumoRed__link" type="submit" value="add"> Personaliseer nu </a>
  <?php } else if($product['product_type'] == 'accessories'){ ?>
  <button name="action" class="input input__button input__BuyNow" type="submit" value="add"> koop nu </button>
  <?php } else if($product['delivery_time'] == 'uitverkocht'){ ?>
    <button name="action" class="input input__button input__BuyNow" type="submit" value="add"> Reserveer </button>
    <a href="index.php?page=longread" class="input input__button input__Ebook" type="submit" value="Lees longreader">Lees Verhaal</a>
  <?php } else{ ?>
  <button name="action" class="input input__button input__BuyNow" type="submit" value="add"> koop nu </button>
  <a href="index.php?page=longread" class="input input__button input__Ebook" type="submit">Lees verhaal</a>
  <?php } ?>
  </div>
</form>
</div>
  </article>
 </main>
