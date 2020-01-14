require('./style.css');
require('./js/lib/particles.min.js');
require('./js/app.js');
require('./js/lib/stats');
import Parallax from 'parallax-js';

const scene = document.getElementById('scene');
const parallax = new Parallax(scene);

const scene2 = document.getElementById('scene2');
const paralaxScene2 = new Parallax(scene2);

const scene3 = document.getElementById('scene3');
const paralaxScene3 = new Parallax(scene3);

const scene4 = document.getElementById('scene4');
const paralaxScene4 = new Parallax(scene4);

//geforceerd iets toevoegen
{
  const $filterForm = document.querySelector(`.filter__form`);
  const $players = document.querySelector(`.players__list`);

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
  };

  const handleLoadPlayers = data => {
    $players.innerHTML = data
      .map(player => createPlayer(player))
      .join(``);
  };

  const createPlayer = playerObj => {
    const player = new Player(playerObj);
    return player.createHTML();
  };

  const handleSubmitFilterForm = e => {
    console.log();
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadPlayers(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };


  init();
}
