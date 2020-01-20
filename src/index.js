require('./index.css');
require('./js/lib/particles.min.js');
require('./js/app.js');
require('./js/lib/stats');
import Parallax from 'parallax-js';
import ScrollMagic from 'scrollmagic';
{

  const parallax = () => {
    const scene = document.getElementById('scene');
    const parallax = new Parallax(scene);

    const scene2 = document.getElementById('scene2');
    const paralaxScene2 = new Parallax(scene2);

    const scene3 = document.getElementById('scene3');
    const paralaxScene3 = new Parallax(scene3);

    const scene4 = document.getElementById('scene4');
    const paralaxScene4 = new Parallax(scene4);
  };


  const scrollMagicProjects = () => {

    const controller = new ScrollMagic.Controller();
    const revealElements = document.getElementsByClassName('digit');
    console.log(revealElements);
    for (let i = 0;i < revealElements.length;i ++) { // create a scene for each element
      new ScrollMagic.Scene({
        triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
        offset: 150,												 // start a little later
        triggerHook: 0.9,
      })
        .setClassToggle(revealElements[i], 'visible') // add class toggle

        .addTo(controller);
    }
  };

  const scrollMagicProjectsRight = () => {

    const controller = new ScrollMagic.Controller();
    const revealElements = document.getElementsByClassName('digit__right');
    console.log(revealElements);
    for (let i = 0;i < revealElements.length;i ++) { // create a scene for each element
      new ScrollMagic.Scene({
        triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
        offset: 150,												 // start a little later
        triggerHook: 0.9,
      })
        .setClassToggle(revealElements[i], 'visible__right') // add class toggle

        .addTo(controller);
    }
  };

  const handleClickKeys = () => {
    const $interactionKeys = document.querySelectorAll(`.InteractionKeys`);
    const $keysContainer = document.querySelector('.keys__container');
    const $textPulsating = document.querySelector(`.keys__pulsating__text`);
    setTimeout(() => {
      $textPulsating.innerHTML = 'Je hebt men sleutels gevonden! nu bezit jij de oasis. Wees verstandig met wat je doet';
      $textPulsating.classList.add('imageFadeIn');
      $textPulsating.style.fontWeight = '400';
      $textPulsating.style.fontSize = '2rem';
      $textPulsating.style.textAlign = 'center';
      $textPulsating.style.marginTop = '2rem';

    }, 2000);

    $keysContainer.classList.add('imageFadeOut');
    $interactionKeys.forEach($interactionKey => {
      $interactionKey.classList.add('imageFadeOut');

    });
  };

  const fadeOut = () => {
    const $keys = document.querySelector(`.keys__button`);
    $keys.addEventListener('click', handleClickKeys);
  };

  const handleLoadEvent = () => {

    setTimeout(() => {
      const $loadWrapper = document.querySelector(`.loader__wrapper`);
      const $loader = document.querySelector(`.loader`);
      $loadWrapper.classList.add('imageFadeIn');
      $loader.classList.add('imageFadeOut');
    }, 1000);
  };

  const loader = () => {
    window.addEventListener('load', handleLoadEvent);
  };

  const init = () => {
    parallax();
    scrollMagicProjects();
    scrollMagicProjectsRight();
    fadeOut();
    loader();
  };

  init();
}
