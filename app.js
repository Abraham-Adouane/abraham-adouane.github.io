// // Personnalisation du curseur 
// let cursorCircle = document.querySelector('#cursor-circle');
// windows.addEventListener('mousemove',cursorfollow);
// function cursorfollow{
//   cursorCircle.style.top : e.page.Y + ' px';
//   cursorCircle.style.left : e.page.X + ' px';
// }






let options = {
  strings: ['<span>B</span>onjour,^1000 <br>je suis Abraham ADOUANE, <br>developpeur web', '<span>B</span>onjour, <br>je suis Abraham ADOUANE, <br>développeur front-end'],
  typeSpeed: 50
};

let typed = new Typed('.title', options);




let modalContainer = document.querySelector(".modal-container");
let modalTriggers = document.querySelectorAll(".modal-trigger");

modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal));

function toggleModal(){
  modalContainer.classList.toggle("active")
  console.log('active')
};

// let close_modal = document.querySelector('.close-modal');

// let cards = document.querySelectorAll('.card');
// console.log(cards[0]);

// function openModal() {
//   modal.style.display = "block";
// }