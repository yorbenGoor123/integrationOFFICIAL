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
<p class="error"><?php if(!empty($errors['name'])){ echo $errors['name'];} ?></p>
<input class="input input__field" name="name" type="text" placeholder="Bijv: Yorben Goor" required>
</div>
</div>

<div class="input__container">
<label class="label" for="email">E-mail:</label>
<div>
<p class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?></p>
<input class="input input__field" name="email" type="e-mail" placeholder="Bijv: Example@gmail.com" required>
</div>
</div>

<div class="input__container">
<label class="label" for="Adress">Adress:</label>
<div>
<p class="error"><?php if(!empty($errors['adress'])){ echo $errors['adress'];} ?></p>
<input class="input input__field" name="street" type="e-mail" placeholder="Bijv: Example-street 23" required>
</div>
</div>

<div class="input__container">
<label class="label" for="Gemeente">Gemeente:</label>
<div>
<p class="error"><?php if(!empty($errors['city'])){ echo $errors['city'];} ?></p>
<input class="input input__field" name="gemeente" type="text" placeholder="Bijv: Zottegem" required>
</div>
</div>

<div class="input__container">
<label class="label" for="Gemeente">Postcode:</label>
<div>
<p class="error"><?php if(!empty($errors['postal_code'])){ echo $errors['postal_code'];} ?></p>
<input class="input input__field input__postcode" name="postcode" type="number" placeholder="8949" min="0" max="9999" required>
</div>
</div>

<div class="input__container">
<label class="label" for="Gemeente">Telefoon Nummer:</label>
<div>
<p class="error"><?php if(!empty($errors['telephone_number'])){ echo $errors['telephone_number'];} ?></p>
<input class="input input__field" name="number" type="text" placeholder="+32" maxlength="12" required>
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
<?php if(isset($_SESSION['personalisatie'])){ ?>
<button class="buttonHumoRed__link" name="action" type="submit" value="insertOrderCustom">Naar betaalopties</button>
<?php } else if(isset($_SESSION['abonnement'])) { ?>
<button class="buttonHumoRed__link" name="action" type="submit" value="insertAbo">Naar betaalopties</button>
<?php }else { ?>
  <button class="buttonHumoRed__link" name="action" type="submit" value="insertOrder">Naar betaalopties</button>
<?php }?>
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
