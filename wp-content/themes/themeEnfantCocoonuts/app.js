"use strict";

document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.burger');
  const menu = document.querySelector('.off');
  
  burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    menu.classList.toggle('hide');
    
    if (menu.classList.contains('hide')) {
      const image = document.createElement('img');
      let container = document.createElement('div');
      container.style.width = '100%';
      container.style.height = '133px';
      container.style.background="#FAFAFA";
      container.style.padding = '22px 22px';

      image.src = `${window.location.origin}/cocoonut/wp-content/uploads/2025/03/logo.svg`;
      image.alt = 'logo cocoonuts';
      image.style.width = '167px';
      image.style.height = '89px';
      container.appendChild(image);
      menu.appendChild(container);
    } else {
      const logoImage = menu.querySelector('img');
      const containerImg = menu.querySelector('div')
      if (logoImage) {
        logoImage.remove();
        containerImg.remove()
      }
    }
  });
});

