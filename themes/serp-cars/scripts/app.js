const responsiveButton = document.querySelector('#responsive-menu');
const navigationMenu = document.querySelector('.header__nav > div');
let isResponsiveMenuActive = true;

responsiveButton.addEventListener('click', () => {
  if (isResponsiveMenuActive) {
    responsiveButton.innerHTML = '<i class="im im-x-mark"></i>';
    navigationMenu.classList.add('show-menu');
  } else {
    responsiveButton.innerHTML = '<i class="im im-menu"></i>';
    navigationMenu.classList.remove('show-menu');
  }

  isResponsiveMenuActive = !isResponsiveMenuActive;
});

document.addEventListener('DOMContentLoaded', function () {
  var splide = new Splide('#splide-gallery', {
    cover: true,
    height: '50vh',
    type: 'loop'
  });

  var images = document.querySelectorAll('.js-thumbnails li');

  var activeImage;
  var activeClass = 'is-active';

  for (let i = 0, len = images.length; i < len; i++) {
    var image = images[i];

    splide.on(
      'click',
      function () {
        if (activeImage !== image) {
          splide.go(i);
        }
      },
      image
    );
  }

  splide.on('mounted move', function (newIndex) {
    // newIndex will be undefined through the "mounted" event.
    var image = images[newIndex !== undefined ? newIndex : splide.index];

    if (image && activeImage !== image) {
      if (activeImage) {
        activeImage.classList.remove(activeClass);
      }

      image.classList.add(activeClass);
      activeImage = image;
    }
  });

  splide.mount();
});

// document.addEventListener('DOMContentLoaded', function () {
//   new Splide('#image-slider', {
//     cover: true,
//     heightRatio: 0.5
//   }).mount();
// });
