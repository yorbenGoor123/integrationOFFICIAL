<main>

<form method="post" action="index.php?page=checkout&pageFlow=personal+info">
<input type="hidden" name="page" value="checkout">
<input type="hidden" name="pageFlow" value="personal info">
<h2 class="pers__title">Personaliseer je product!</h2>
<p class="error__message">Preview coming soon!</p>
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
<button class="accordion">Kleur</button>
<div class="panel">
  <div class="input__container__pers">
  <label for="color">Rood</label>
  <input type="radio" name="color" value="blue" required>
  </div>

  <div class="input__container__pers">
  <label for="color">blauw</label>
  <input type="radio" name="color" value="blue" required>
  </div>

  <div class="input__container__pers">
  <label for="color">groen</label>
  <input type="radio" name="color" value="green" required>
  </div>

  <div class="input__container__pers">
  <label for="color">Geel</label>
  <input type="radio" name="color" value="yellow" required>
  </div>
</div>
</div>

<div class="accordion__container">
<button class="accordion">Patroon</button>
<div class="panel">
<div class="input__container__pers">
  <label for="color">Streepjes</label>
  <input type="radio" name="patern" value="streepjes" required>
  </div>

  <div class="input__container__pers">
  <label for="color">Vierkantjes</label>
  <input type="radio" name="patern" value="vierkantjes" required>
  </div>

  <div class="input__container__pers">
  <label for="color">Stippen</label>
  <input type="radio" name="patern" value="dotted" required>
  </div>

  <div class="input__container__pers">
  <label for="color">Golven</label>
  <input type="radio" name="patern" value="golven" required>
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
