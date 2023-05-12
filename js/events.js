// Sample events data
const eventsData = [
  { name: "Chess Day", organizer:'Chess Enthusiasts INSAT' ,date: "2023-05-05" ,img_path:"./assets/img/chess_day.jpg",description:"Le Club Chess Enthusiasts INSAT a organisé un tournoi soutenu par Barnas Meubles, mettant en lumière les compétences et les capacités des 32 joueurs participants.<br>L'objectif de cet événement est de créer une expérience mémorable et passionnante pour tous les participants.<br>Au-delà de la compétition, cet événement est avant tout une occasion pour les participants de se rencontrer, d'échanger et de partager leur passion commune dans une ambiance chaleureuse et conviviale."},
  { name: "Forum des Métiers",organizer:'Centre d’Orientation et de Reconversion Professionnelle (CORP)' ,date: "2023-04-27",img_path:"./assets/img/forum_metier.jpg" ,description:"Forum des Métiers  organisé par le Centre d’Orientation et de Reconversion Professionnelle (CORP) en partenariat avec le ministère de l’Emploi et de la Formation Professionnelle, FORMAT et la Chambre Tuniso-Allemande de l’Industrie et du Commerce sur l'IT et l'industrie automobile le jeudi 27 avril 2023 à l’INSAT.<br>Cet événement permettra aux étudiants ingénieurs de rencontrer 40 entreprises allemandes dans le but de discuter des perspectives d'emploi et de stages disponibles dans ces secteurs.<br>Le Forum des métiers sur l'IT et l'industrie automobile constitue une occasion pour nos étudiants d'établir des contacts professionnels, de découvrir les dernières tendances et technologies du marché et de se faire connaître des employeurs potentiels."},
  { name: "Eurobot",organizer:'Aerobotix INSAT' ,date: "2023-04-15",img_path:"./assets/img/eurobots.jpg" ,description:"Le tour de qualification pour la compétition Eurobot s’est déroulé à l’INSAT les 15 et 16 avril 2023, organisé par le Club Aerobotix INSAT.<br><br>Il est impressionnant de voir à quel point les compétitions de robotique en Tunisie attirent de nombreux talents et encouragent la créativité et l'innovation chez les jeunes étudiant.e.s. Félicitations à l'équipe Aerobotix Insat pour leur brillante performance et leur qualification pour la compétition internationale Eurobot. Nous leur souhaitons bonne chance pour leur voyage et espérons qu'ils réussiront également dans cette compétition de haut niveau.<br><br>De plus, la compétition junior a montré qu'il y a beaucoup de jeunes talents en Tunisie dans le domaine de la robotique, comme en témoigne la victoire de l'équipe des Lions de Junior Robotics. Nous espérons voir ces jeunes talents continuer à s'épanouir et à contribuer au développement de la robotique et des technologies de pointe dans le pays."},
  { name: "Soirée Ramadanesque",organizer:'JCI INSAT' ,date: "2023-04-12",img_path:"./assets/img/ramadan.jpg" ,description:"Aucune description"},
  { name: "Journée théâtrale,septième édition",organizer:'Théätro INSAT' ,date: "2023-02-15",img_path:"./assets/img/jti.jpg" ,description:"Ce 15 février 2023, l’auditorium de l’INSAT s'est transformé en une véritable machine à remonter dans le temps embarquant 600 passagers dans un voyage à travers le temps dans l’histoire de la Tunisie.<br><br>'Lost in History', trois pièces théâtrales inoubliables racontant l’odyssée de trois amis qui s’aventurent dans un voyage spatio-temporel inattendu, de la civilisation punique vers l’ethnie arabe et berbère jusqu’à l’empire ottoman. Chaque ère a été parfaitement illustrée par sa propre atmosphère, ses costumes et même ses traditions. Dans un cadre à la fois comique et dramatique qui n’a pas déçu les spectateurs à en juger par les rires qui hasardaient les murs et les visages épanouis des spectateurs. Les différentes pièces théâtrale ont suscité des sujets fondamentaux tel que la place de la femme dans la société, la tolérance entre musulmans ou encore les crises économiques.<br><br>Des prestations hors normes comportant danses, chants et interprétations ont été au rendez-vous chacune à son tour, délivrant un message d’espoir et de prospérité.<br><br>Dans l’ombre de la scène illuminée de milles feux, se cache un équipage dévoué et laborieux venu tout droit du club Théätro INSAT, des jeunes talentueux qui ont su se démarquer en donnant à cette septième édition du JTI une place spéciale dans le cœur de chaque voyageur."},

];

// Add each event as a card to the events container
const eventsContainer = document.getElementById("events-container");
eventsData.forEach((event, index) => {
  const card = document.createElement("div");
  card.classList.add("col-md-6", "col-lg-4");
  card.innerHTML = `
    <div class="card mb-4">
      <div class="card-body">
        <img src=${event.img_path} alt="chess day" width=300" height="200"><br><br>
        <h3 class="card-title">${event.name}</h5>
        <h5 class="card-title">${event.organizer}</h5>
        <p class="card-text">${new Date(event.date).toDateString()}</p>
        <button class="detail-btn" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#event-modal-${index}">
          Plus de details
        </button>
      </div>
    </div>`;
  // Add a modal for each event
  const modal = document.createElement("div");
  modal.classList.add("modal", "fade");
  modal.id = `event-modal-${index}`;
  modal.setAttribute("tabindex", "-1");
  modal.setAttribute("role", "dialog");
  modal.setAttribute("aria-labelledby", `event-modal-${index}-title`);
  modal.setAttribute("aria-hidden", "true");
  modal.innerHTML = `
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="event-modal-${index}-title">${event.name}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Date: ${new Date(event.date).toDateString()}</p>
        <p><span style="font-weight:bold">Description:</span> ${event.description}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
`;
  // Append the card and modal to the events container
  eventsContainer.appendChild(card);
  eventsContainer.appendChild(modal);

  // Set the first event as active
  if (index === 0) {
    card.classList.add("active");
    modal.classList.add("show");
  }

  // Add event listeners for the cards to make them interactive
  card.addEventListener("click", () => {
    // Remove active class from all cards
    const activeCard = document.querySelector(".card.active");
    activeCard.classList.remove("active");
    // Add active class to clicked card
    card.classList.add("active");
    // Hide all modals
    const modals = document.querySelectorAll(".modal.show");
    modals.forEach(modal => {
      modal.classList.remove("show");
    });
    // Show modal for clicked card
    modal.classList.add("show");
  });
});
