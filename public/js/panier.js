const modalContainer = document.getElementById("modal-container");
heurePanel = document.querySelector(".heurePanel");
selectDatePanier = document.querySelector(".selectDatePanier");
// Fonction pour ouvrir la fenêtre modale
function openModal(i) {
  modalContainer.style.display = "block";
  let heure = i+'H';
  heurePanel.innerHTML=heure;
  let Day = dateshow.getDay(),
    Date = dateshow.getDate(),
    Year = dateshow.getFullYear(),
    Month = dateshow.getMonth();
    selectDatePanier.innerHTML=  `${days[Day]} ${Date} ${months[Month]} ${Year}`
  console.log(i);
}
// Fonction pour fermer la fenêtre modale
function closeModal() {
  modalContainer.style.display = "none";
}
function increment() {
  document.getElementById("quantity").stepUp();
}
function decrement() {
  document.getElementById("quantity").stepDown();
}