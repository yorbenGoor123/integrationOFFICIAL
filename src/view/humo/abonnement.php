<main>
<form method="post" action="index.php?page=checkout&pageFlow=personal+info">
<input type="hidden" name="page" value="checkout">
<input type="hidden" name="pageFlow" value="personal info">

<h2 class="pers__title">Kies verstandig!</h2>
<p class="error__message">Wil je een digitale versie? of verkies je liever de papieren versie? Of je kan allebei kiezen! Whatever floats your boat!</p>
<article class="overview__humo__abbo">
      <div class="abbo__item">
      <p class="humo__overview__termijn">1 jaar</p>
      <img src="assets/humo/abbo__humo.svg" alt="Humo abbonement tarief 1">
      <a class="buttonHumoRed__link button__abbo" href="">€15,95 euro/maand</a>
      <div class="radio__button__container__abo">
      <label class="label__abo" for="digitaal">digitaal</label>
      <input class="abo__radio" type="radio" name="choice" value="digitaal__1jaar" required>
      </div>

      <div class="radio__button__container__abo">
      <label class="label__abo" for="digitaal">papier</label>
      <input class="abo__radio" type="radio" name="choice" value="papier__1jaar" required>
      </div>

      <div class="radio__button__container__abo">
      <label class="label__abo" for="digitaal">digitaal+papier</label>
      <input class="abo__radio" type="radio" name="choice" value="allebei__1jaar" required>
      </div>
      </div>
      <div class="abbo__item">
      <p class="humo__overview__termijn">2 jaar</p>
      <img src="assets/humo/abbo__humo.svg" alt="Humo abbonement tarief 2">
      <a class="buttonHumoRed__link button__abbo" href="">€14,36 euro/maand</a>
      <div class="radio__button__container__abo">
      <label class="label__abo" for="digitaal">digitaal</label>
      <input class="abo__radio" type="radio" name="choice" value="digitaal__2jaar" required>
      </div>

      <div class="radio__button__container__abo">
      <label class="label__abo" for="digitaal">papier</label>
      <input class="abo__radio" type="radio" name="choice" value="papier__2jaar" required>
      </div>

      <div class="radio__button__container__abo">
      <label class="label__abo" for="digitaal">digitaal+papier</label>
      <input class="abo__radio" type="radio" name="choice" value="allebei__2jaar" required>
      </div>
      </div>
      <div class="abbo__item">
      <p class="humo__overview__termijn">3 jaar</p>
      <img src="assets/humo/abbo__humo.svg" alt="Humo abbonement tarief 3">
      <a class="buttonHumoRed__link button__abbo" href="">€12,76 euro/maand</a>
      <div class="radio__button__container__abo">
      <label class="label__abo" for="digitaal">digitaal</label>
      <input class="abo__radio" type="radio" name="choice" value="digitaal__3jaar" required>
      </div>

      <div class="radio__button__container__abo">
      <label class="label__abo" for="digitaal">papier</label>
      <input class="abo__radio" type="radio" name="choice" value="papier__3jaar" required>
      </div>

      <div class="radio__button__container__abo">
      <label class="label__abo" for="digitaal">digitaal+papier</label>
      <input class="abo__radio" type="radio" name="choice" value="allebei__3jaar" required>
      </div>

      </div>
</article>

<div class="kassa__button">
  <input name="abonnement" class="buttonHumoRed__link" type="submit" value="naar de kassa">
</div>

</form>
</main>
