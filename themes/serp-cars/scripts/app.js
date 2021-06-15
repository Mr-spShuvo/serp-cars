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

console.log('d');
