<main>
<form method="post" action="index.php?page=checkout&pageFlow=personal+info" class="form__filter">
<div class="basket__wrapper">
<section class="section__basket">
  <h2 class="section__title__basket">Winkelmand</h2>
  <div class="basket__items__container">
    <ul class="basket__items">
      <li class="basket__item">
        <img class="basket__image" src="assets/humo/book.svg" alt="book__name">

        <div class="basket__details">
          <p class="basket__title basket__item__info">title</p>
          <p class="basket__item__info"><strong>Descriptie:</strong> Dit is een descriptie van een product
          dat ik nog moet ontwerpen</p>
          <div class="basket__item__info">
              <label class="label__basket" for="">E-book</label>
              <select name="e-book" class="select-form" id="e-book-select-form">
                <option value="neen">neen</option>
                <option value="ja">ja</option>
              </select>
              <label class="label__basket" for="">Hoeveelheid</label>
              <input type="number" class="input input__number">
          </div>

          <input type="button" value="remove" class="remove__button basket__item__info">
        </div>

        <div class="price__basket__overview">
          <span>€20</span>
        </div>
      </li>

      <li class="basket__item">
        <img class="basket__image" src="assets/humo/book.svg" alt="book__name">

        <div class="basket__details">
          <p class="basket__title basket__item__info">title</p>
          <p class="basket__item__info"><strong>Descriptie:</strong> Dit is een descriptie van een product
          dat ik nog moet ontwerpen</p>
          <div class="basket__item__info">
              <label class="label__basket" for="">E-book</label>
              <select name="e-book" class="select-form" id="e-book-select-form">
                <option value="neen">neen</option>
                <option value="ja">ja</option>
              </select>
              <label class="label__basket" for="">Hoeveelheid</label>
              <input type="number" class="input input__number">
          </div>

          <input type="button" value="remove" class="remove__button basket__item__info">
        </div>

        <div class="price__basket__overview">
          <span>€20</span>
        </div>
      </li>


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
