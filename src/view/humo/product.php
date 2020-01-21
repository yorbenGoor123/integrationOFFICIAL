<main>
<section>
  <form method="get" class="formFilter" action="index.php?page=product">
  <input type="hidden" name="page" value="product">
  <label class="filterLabel" for="filterLabel">Filter naar:</label>
    <select name="type" class="filterSelect filter-type" >
      <option class="filter__input" value="all">alle producten</option>
      <?php foreach($types as $type): ?>
      <option class="filter__input" value="<?php echo $type['product_type'] ?>"><?php echo $type['product_type'] ?></option>
      <?php endforeach; ?>
  </select>

  <input class="input input__button input__button__search has-js" type="submit" value="zoek">

  </form>

  <form class="formSortby" action="">
  <label class="sortbyLabel" for="filterLabel">sorteren op:</label>
    <select name="options" class="sortbySelect" >
      <option value="Prijs">Prijs</option>
      <option value="Pagina's">Pagina's</option>
      <option value="Datum">Datum</option>
      <option value="A-Z">A-Z</option>
  </select>

  <input class="input input__button input__button__search button__small has-js" type="submit" value="zoek">
  </form>


  <article class="product__items__section">
    <ul class="product__items">

          <?php foreach ($products as $product): ?>
          <li class="product__item">
          <div class="product__item__container">
          <span class="book__title info"><?php echo $product['name']; ?></span>
          <a href="index.php?page=detail-page&id=<?php echo $product['id'];?>"><img src="<?php echo $product['product__image'] ?>" alt="<?php echo $product['name']; ?>"> </a>
          <a class="buttonHumoRed__link productPage__button" href="">Nu kopen --€<?php echo $product['price'] ?></a>
          <span class="delivery__date"><?php echo $product['delivery_time'] ?></span>
          </div>
          </li>
          <?php endforeach; ?>
    </ul>

  </article>
</section>
</main>
