
"use strict";

document.addEventListener('DOMContentLoaded', () => {
  const burger = document.querySelector('.burger');
  const menu = document.querySelector('.off')
  
  burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    menu.classList.toggle('hide')
  });

})

