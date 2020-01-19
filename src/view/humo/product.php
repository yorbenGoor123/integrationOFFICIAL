<main>
<section>
  <form class="formFilter" action="">
  <label class="filterLabel" for="filterLabel">Filter naar:</label>
    <select name="options" class="filterSelect" >
      <option value="Alle producten">Alle producten</option>
      <option value="Boeken">Boeken</option>
      <option value="Lees accesoires">Lees accesoires</option>
      <option value="Abonnementen">Abonnementen</option>
      <option value="Eigen ontwerp">Eigen ontwerp</option>
  </select>

  <input class="input input__button input__button__search" type="submit" value="zoek">

  </form>

  <form class="formSortby" action="">
  <label class="sortbyLabel" for="filterLabel">sorteren op:</label>
    <select name="options" class="sortbySelect" >
      <option value="Prijs">Prijs</option>
      <option value="Pagina's">Pagina's</option>
      <option value="Datum">Datum</option>
      <option value="A-Z">A-Z</option>
  </select>

  <input class="input input__button input__button__search button__small" type="submit" value="zoek">
  </form>


  <article class="product__items__section">
    <ul class="product__items">
      <li class="product__item">
        <div class="product__item__container">
          <?php foreach ($products as $product): ?>
          <span class="book__title info"><?php echo $product['name']; ?></span>
         <a href="index.php?page=detail-page&id=<?php echo $product['id'];?>"><img src="<?php echo $product['product__image'] ?>" alt="<?php echo $product['name']; ?>"> </a>
          <a class="buttonHumoRed__link productPage__button" href="">Nu kopen -- <?php echo $product['price'] ?></a>
          <span class="delivery__date"><?php echo $product['delivery_time'] ?></span>
          <?php endforeach; ?>
        </div>
      </li>
    </ul>

  </article>
</section>
</main>
