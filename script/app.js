
//Disparition de la Navbar au scroll 
let nav = document.querySelector(".nav");
let lastScrollValue = 0;

document.addEventListener('scroll',() => {
    lastScrollValue < document.documentElement.scrollTop? 
    nav.classList.add("hidden"):
    nav.classList.remove("hidden");
    lastScrollValue = document.documentElement.scrollTop;
  });
  // ----------------------------------

// afficher et cacher le menu en mode mobile
document.querySelector('.toggleMenu').addEventListener('click', function() {
  document.querySelector('.nav__list').classList.toggle('nav__list--active');
});













  let options = {
    strings: ['Bonjour', '<span class="bounce">B</span><span class="bounce">o</span><span class="bounce">n</span><span class="bounce">j</span><span class="bounce">o</span><span class="bounce">u</span><span class="bounce">r</span><span class="bounce">,</span>^1000 <br><span class="bounce">j</span><span class="bounce">e</span> <span class="bounce">s</span><span class="bounce">u</span><span class="bounce">i</span><span class="bounce">s</span> <span class="bounce">A</span><span class="bounce">b</span><span class="bounce">r</span><span class="bounce">a</span><span class="bounce">h</span><span class="bounce">a</span><span class="bounce">m</span> <span class="bounce">A</span><span class="bounce">d</span><span class="bounce">o</span><span class="bounce">u</span><span class="bounce">a</span><span class="bounce">n</span><span class="bounce">e</span><span class="bounce">,</span><br><span class="bounce">D</span><span class="bounce">e</span><span class="bounce">v</span><span class="bounce">e</span><span class="bounce">l</span><span class="bounce">l</span><span class="bounce">o</span><span class="bounce">p</span><span class="bounce">p</span><span class="bounce">e</span><span class="bounce">u</span><span class="bounce">r</span> <span class="bounce">W</span><span class="bounce">e</span><span class="bounce">b</span>'
    ],
    typeSpeed: 20
  };

  let typed = new Typed('.title_home', options);

  
  
  
  // animation des titres (letter-Bounce) 
  let bounce= document.querySelectorAll('.bounce')
  document.addEventListener('mouseover', (event) => {
    if (event.target.classList.contains('bounce')) {
      event.target.classList.add('animate');
      setTimeout(() => {
        event.target.classList.remove('animate');
      }, 500);
    }
  });
  // -----------------------------------
  
  
  
  
  // Comportement des modals pour la section projet 
  let modalContainer = document.querySelector(".modal-container");
  let modalTriggers = document.querySelectorAll(".modal-trigger");
  let modalTitle = document.querySelector('.modalTitle');
  let modalBody = document.querySelector('.modal-body')
  
  
  modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal));
  
  
  
  
  
  
  // --------------------------------------
  
  function openModal(cardTitle) {  
    // Mettre à jour le contenu de la modal avec les données du projet
    modalTitle.textContent = cardTitle;
    fetch('/script/projets.json')
    .then(response => response.json())
    .then(projects => {
      let project = projects.find(project => project.nom === cardTitle);   
      if (project) {
        modalTitle.textContent = project.nom;
        modalTitle.style.color=project.titleColor;
        modalTitle.style.fontFamily=project.titleFont;
        
        let modalDescription = document.createElement('p')
        modalDescription.style.margin = "10px 0 20px"
        modalDescription.textContent = project.description;
        modalBody.appendChild(modalDescription);

        let pictureProject = document.createElement('img');
        pictureProject.style.width = '100%';
        pictureProject.src = project.pictures;
        modalBody.appendChild(pictureProject);

//  Creation du lien vers le projet en ligne
        let modalBtn = document.createElement("a");
        modalBtn.classList.add('btn');
        modalBtn.href = project.link;
        modalBtn.target="_blank"
        modalBtn.textContent="Visiter ce projet"
        modalBody.appendChild(modalBtn);
        
        //  Mettre à jour la liste des technologies
        //  let technoList = document.createElement('ul'); // Créer un élément de liste non ordonnée (ul)
//  project.techno.forEach(techno => {
//    let listItem = document.createElement('li'); // Créer un élément de liste (li)
//    listItem.textContent = techno; // Ajouter le texte de la technologie dans l'élément de liste
//    technoList.appendChild(listItem); // Ajouter l'élément de liste dans la liste non ordonnée
//  });
//  modalContainer.appendChild(technoList); // Ajouter la liste des technologies dans la modal

        // Autres mises à jour de la modal avec les données du projet
      } else {
        console.error('Projet non trouvé dans le fichier JSON');
      }
      modalContainer.classList.add("active");
    })
    .catch(error => console.error(error))
}




function closeModal() {
  // Réinitialiser le contenu de la modal
  modalTitle.textContent = "";
  modalBody.textContent = "";
  modalContainer.classList.remove("active");
}


function toggleModal() {
  if (modalContainer.classList.contains("active")) {
    closeModal();
  } else {
    let cardTitle = this.getAttribute('data-title');
    openModal(cardTitle);
  }
}


