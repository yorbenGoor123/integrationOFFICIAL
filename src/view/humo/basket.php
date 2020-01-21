<main>
<form method="post" action="index.php?page=basket" class="form__filter">
<div class="basket__wrapper">
<section class="section__basket">
  <h2 class="section__title__basket">Winkelmand</h2>
  <div class="basket__items__container">
    <ul class="basket__items">
    <?php if(empty($_SESSION['cart'])){
      echo '<p class="cart--empty">Your shopping cart is empty</p>';
      } ?>

      <?php foreach($_SESSION['cart'] as $item): ?>
      <li class="basket__item">
        <img class="basket__image" src="<?php echo $item['product']['product__image'] ?>" alt="<?php echo $item['product']['name'] ?>">
        <div class="basket__details">
          <p class="basket__title basket__item__info"><?php echo $item['product']['name'] ?></p>
          <p class="basket__item__info"><strong>Descriptie:</strong> <?php echo $item['product']['description']  ?></p>
          <div class="basket__item__info">
              <label class="label__basket" for="">E-book</label>
              <select name="e-book" class="select-form" id="e-book-select-form">
                <option value="neen">neen</option>
                <option value="ja">ja</option>
              </select>
              <label class="label__basket" for="">Hoeveelheid</label>
              <input type="number" name="quantity[<?php echo $item['product']['id']; ?>]" class="input input__number" required min="1" max="10" value="<?php echo $item['quantity'] ?>">
          </div>

          <button type="submit" value="<?php echo $item['product']['id'];?>" name="remove" class="remove__button basket__item__info"> Remove </button>
          <button class="remove__button basket__item__info" type="submit" name="action" value="update">Update Cart</button>
        </div>

        <div class="price__basket__overview">
          <span><?php echo $item['product']['price']  ?></span>
        </div>
      </li>

      <?php endforeach; ?>
    </ul>
  </div>
</section>

<section class="summary">
  <h2 class="title__summary">Summary</h2>
  <div class="basket__costs__container">
    <p class="total__text">Sub totaal</p>
    <span class="cost">€20</span>
  </div>

  <div class="basket__costs__container">
    <p class="total__text">Leverings Kosten</p>
    <span class="cost">€2</span>
  </div>

  <div class="basket__costs__container">
    <p class="total__text total">Totaal</p>
    <span class="cost total">€22</span>
  </div>
</section>
</div>

<div class="kassa__button">

<input type="hidden" name="page" value="checkout">


<input class="buttonHumoRed__link" type="submit" value="naar de kassa">


</div>
</form>
</main>
