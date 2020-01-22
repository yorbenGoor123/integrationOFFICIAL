<main>
  <?php if(!empty($_GET["pageFlow"])) {
          if($_GET['pageFlow'] == "personal info"){ ?>


<section class="section__personalInfo">
<div class="personalInfo__wrapper">
<h2 class="checkout__title">Informatie</h2>
<p class="checkout__required">alle velden zijn verplicht*</p>

<form class="form__personalInfo" method="post" action="index.php?page=checkout&pageFlow=levering">
<input type="hidden" name="page" value="checkout">
<input type="hidden" name="pageFlow" value="levering">


<div class="input__container">
<label class="label" for="name">Naam:</label>
<div>
<p class="error"></p>
<input class="input input__field" name="name" type="text" placeholder="Bijv: Yorben Goor" required>
</div>
</div>

<div class="input__container">
<label class="label" for="email">E-mail:</label>
<div>
<p class="error"></p>
<input class="input input__field" name="email" type="e-mail" placeholder="Bijv: Example@gmail.com" required>
</div>
</div>

<div class="input__container">
<label class="label" for="Adress">Adress:</label>
<div>
<p class="error"></p>
<input class="input input__field" name="street" type="e-mail" placeholder="Bijv: Example-street 23" required>
</div>
</div>

<div class="input__container">
<label class="label" for="Gemeente">Gemeente:</label>
<div>
<p class="error"></p>
<input class="input input__field" name="gemeente" type="text" placeholder="Bijv: Zottegem" required>
</div>
</div>

<div class="input__container">
<label class="label" for="Gemeente">Postcode:</label>
<div>
<p class="error"></p>
<input class="input input__field input__postcode" name="postcode" type="number" placeholder="8949" required>
</div>
</div>

<div class="input__container">
<label class="label" for="Gemeente">Telefoon Nummer:</label>
<div>
<p class="error"></p>
<input class="input input__field" name="number" type="number" placeholder="+32" required>
</div>
</div>
</div>

<div class="kassa__button">
<button class="buttonHumoRed__link" name="delivery" type="submit" value="naar levering">Naar levering</button>
</div>


</form>
</section>

<?php
     }
    } ?>

<?php if(!empty($_GET["pageFlow"])) {
          if($_GET['pageFlow'] == "levering"){ ?>

<section class="section__personalInfo">
<h2 class="checkout__title">Levering opties</h2>

<form method="post" action="index.php?page=checkout&pageFlow=betaalopties">
<input type="hidden" name="page" value="checkout">
<input type="hidden" name="pageFlow" value="betaalopties">


<div class="container">

  <ul class="unordered__list__radio">

  <li class="list__item__radio">
    <p class="error"></p>
    <input class="input input__radio" type="radio" id="f-option"name="leveroptie" value="leveroptie1" required>
    <label class="label__radio" for="f-option">Post nl --bezorging aan thuis</label>

    <div class="check"></div>
  </li>

  <li class="list__item__radio">
    <input class="input input__radio" type="radio" id="s-option" name="leveroptie" value="leveroptie2" required>
    <label class="label__radio" for="s-option">afhalen bij dichtsbijzijnde b-post</label>

    <div class="check"><div class="inside"></div></div>
  </li>

  <li class="list__item__radio">
    <input class="input input__radio" type="radio" id="t-option" name="leveroptie" value="leveroptie3" required>
    <label class="label__radio" for="t-option">Levering op zondag</label>

    <div class="check"><div class="inside"></div></div>
  </li>
</ul>
</div>

<div class="kassa__button">
<button class="buttonHumoRed__link" name="action" type="submit" value="insertOrder">Naar betaalopties</button>
</div>
</form>
</section>

<?php
     }
    } ?>

<?php if(!empty($_GET["pageFlow"])) {
          if($_GET['pageFlow'] == "betaalopties"){ ?>

<section>
  <h2>hello world!</h2>
</section>

<?php
  }
}
?>
</main>
