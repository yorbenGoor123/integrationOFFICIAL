require ('./humo.css');
require('babel-polyfill');


const handleChangeFilter = e => {
  const type = e.currentTarget.value;
  const path = window.location.href.split(`?`)[0];
  const qs = `?page=product&type=${type}`;
  console.log(`${path}${qs}`);
  getProducts(`${path}${qs}`);
};

const getProducts = async url => {
  const response = await fetch(url, {
    headers: new Headers({
      Accept: 'application/json'
    })
  });
  const products = await response.json();
  window.history.pushState({}, ``, url);
  showproducts(products);
  console.log(products);
};

const showproducts = products => {
  const $parent = document.querySelector(`.product__items`);
  $parent.innerHTML = ``;
  products.forEach(product => {
    $parent.innerHTML += `<li class="product__item">
    <div class="product__item__container">
    <span class="book__title info">${product.name}</span>
    <a href="index.php?page=detail-page&id=${product.id}"><img src="${product.product__image}" alt="${product.name}"> </a>
    <a class="buttonHumoRed__link productPage__button" href="">Nu kopen --€${product.price}</a>
    <span class="delivery__date">${product.delivery_time}</span>
    </div>
    </li>`;
  });
};

const changeFilter = () => {
  const $season = document.querySelector(`.filterSelect`);
  if ($season) {
    $season.addEventListener(`change`, handleChangeFilter);
  }
};

const init = () => {
  const $inputSearch = document.querySelector(`.input__button__search`);
  $inputSearch.classList.add('has-js');
  changeFilter();
};

init();
