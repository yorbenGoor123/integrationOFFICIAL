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
<input class="input input__field" name="name" type="text" placeholder="Bijv: Yorben Goor" required>
</div>

<div class="input__container">
<label class="label" for="email">E-mail:</label>
<input class="input input__field" name="email" type="e-mail" placeholder="Bijv: Example@gmail.com" required>
</div>

<div class="input__container">
<label class="label" for="Adress">Adress:</label>
<input class="input input__field" name="email" type="e-mail" placeholder="Bijv: Example-street 23" required>
</div>


<div class="input__container">
<label class="label" for="Gemeente">Gemeente:</label>
<input class="input input__field" name="gemeente" type="text" placeholder="Bijv: Zottegem" required>
</div>

<div class="input__container">
<label class="label" for="Gemeente">Postcode:</label>
<input class="input input__field input__postcode" name="gemeente" type="number" placeholder="8949" required>
</div>

<div class="input__container">
<label class="label" for="Gemeente">Telefoon Nummer:</label>
<input class="input input__field" name="gemeente" type="number" placeholder="+32" required>
</div>
</div>

<div class="kassa__button">
<input class="buttonHumoRed__link" name="submit" type="submit" value="naar levering">
</div>


</form>
</section>

<?php
     }
    } ?>

<?php if(!empty($_GET["pageFlow"])) {
          if($_GET['pageFlow'] == "levering"){ ?>

<section>
<h1>hello world</h1>
</section>


<?php
     }
    } ?>
</main>
