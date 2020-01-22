<main>

<form method="post" action="index.php?page=checkout&pageFlow=personal+info">
<input type="hidden" name="page" value="checkout">
<input type="hidden" name="pageFlow" value="personal info">

<div class="accordion__container">
<button class="accordion">Product</button>
<div class="panel">
  <div class="input__container__pers">
  <label for="color">Bladwijzer</label>
  <input type="radio" name="product" value="Bladwijzer">
  </div>

  <div class="input__container__pers">
  <label for="color">Agenda</label>
  <input type="radio" name="product" value="Agenda">
  </div>

  <div class="input__container__pers">
  <label for="color">Boekensteun</label>
  <input type="radio" name="product" value="Boekensteun">
  </div>

  <div class="input__container__pers">
  <label for="color">Boekenbox</label>
  <input type="radio" name="product" value="BoekenBox">
  </div>
</div>
</div>

<div class="accordion__container">
<button class="accordion">Color</button>
<div class="panel">
  <div class="input__container__pers">
  <label for="color">Red</label>
  <input type="radio" name="color" value="blue">
  </div>

  <div class="input__container__pers">
  <label for="color">blue</label>
  <input type="radio" name="color" value="blue">
  </div>

  <div class="input__container__pers">
  <label for="color">green</label>
  <input type="radio" name="color" value="green">
  </div>

  <div class="input__container__pers">
  <label for="color">Yellow</label>
  <input type="radio" name="color" value="yellow">
  </div>
</div>
</div>

<div class="accordion__container">
<button class="accordion">Patern</button>
<div class="panel">
<div class="input__container__pers">
  <label for="color">Streepjes</label>
  <input type="radio" name="patern" value="streepjes">
  </div>

  <div class="input__container__pers">
  <label for="color">Vierkantjes</label>
  <input type="radio" name="patern" value="vierkantjes">
  </div>

  <div class="input__container__pers">
  <label for="color">Dotted</label>
  <input type="radio" name="patern" value="dotted">
  </div>

  <div class="input__container__pers">
  <label for="color">Golven</label>
  <input type="radio" name="patern" value="golven">
  </div>
</div>
</div>

<div class="accordion__container">
<button class="accordion">Tekst</button>
<div class="panel text__area__panel">
<textarea class="text__area__custom" name="custom_text" id="custom_text" cols="30" rows="4" max="30"></textarea>
</div>
</div>





<div class="kassa__button">
  <input name="personalisatie" class="buttonHumoRed__link" type="submit" value="naar de kassa">
</div>

</form>
</main>
