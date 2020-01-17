<main>
  <?php if(!empty($_GET["pageFlow"])) {
          if($_GET['pageFlow'] == "personal info"){ ?>


<section>

<h2>Informatie</h2>
<p>alle velden zijn verplicht*</p>

<form method="post" action="index.php?page=checkout&pageFlow=levering" class="form__filter">
<input type="hidden" name="page" value="checkout">
<input type="hidden" name="pageFlow" value="levering">

<div>
<label for="name">Naam:</label>
<input name="name" type="text" required>
</div>

<div>
<label for="email">E-mail:</label>
<input name="email" type="e-mail" required>
</div>

<div>
<label for="Adress">Adress:</label>
<input name="email" type="e-mail" required>
</div>


<div>
<label for="Gemeente">Gemeente:</label>
<input name="gemeente" type="text" required>
</div>

<div>
<label for="Gemeente">Postcode:</label>
<input name="gemeente" type="text" required>
</div>

<div>
<label for="Gemeente">Telefoon Nummer::</label>
<input name="gemeente" type="text" required>
</div>
<input name="submit" type="submit" value="naar levering">


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
