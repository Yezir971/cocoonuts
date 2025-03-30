"use strict";

document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.burger');
  const menu = document.querySelector('.off');
  //--------------------------------------------js de la partie menu burger--------------------------------------------
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
      // on crée l'image du logo
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
  //--------------------------------------------fin js de la partie menu burger--------------------------------------------
  //--------------------------------------------js de la partie like button--------------------------------------------
  const heartContainers = document.querySelectorAll('.heart-container');   
  // ajouter un événement de clic à chaque conteneur de cœur
  heartContainers.forEach(container => {
    container.addEventListener('click', () => {
      const heartValide = container.querySelector('.heart-valide');
      const heartNonValide = container.querySelector('.heart-non-valide')
      
      if(heartNonValide.style.display === 'none'){
        if(heartValide.classList.contains('activeLikeButton')){
          heartValide.classList.add('desactiveLikeButton');
          setTimeout(() => {
            heartNonValide.classList.add('showHeart');
            heartNonValide.style.display = 'block';
            heartValide.classList.remove('activeLikeButton');
          }, 100);
        }else{
          heartNonValide.style.display = 'block';
          heartValide.style.display = 'none';
        }
      } else {
        heartNonValide.style.display = 'none';
        heartValide.style.display = 'block';
        heartValide.classList.add('activeLikeButton');
        heartValide.classList.remove('desactiveLikeButton');

      }
    })
  });
  //--------------------------------------------fin js de la partie like button--------------------------------------------
});

