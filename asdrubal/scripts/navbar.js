
//expand-menu
function openmenu() {
  document.getElementById("mobile-nab").className += " expand-menu";
  document.getElementById("menu-togle").setAttribute("onClick", "closemenu()");
  document.getElementById("page-overlay").style.display = "block";
  setTimeout(() => {document.getElementById("mobile-nab").style.transform = "translateX(0%)";}, 10); // Así hace el efecto dfe entrar, si lo pones sin delay no hace el efecto
}
  
function closemenu() {
  document.getElementById("mobile-nab").style.transform = "translateX(100%)";
  setTimeout(() => { // Este timeout, es para que de tiempo a hacer el efecto de salir y despues elimina las clases
  document.getElementById("mobile-nab").className = document.getElementById("mobile-nab").className.replace(/(?:^|\s)expand-menu(?!\S)/g, '');
  document.getElementById("menu-togle").setAttribute("onClick", "openmenu()");
  document.getElementById("page-overlay").style.display = "none"; 
}, 400); 
  
}

document.addEventListener("DOMContentLoaded", function() {
    const dropdownItems = document.querySelectorAll(".dropdown-item");
  
    dropdownItems.forEach(item => {
      item.addEventListener("click", function(event) {
        // Evita que el enlace se siga cuando se hace clic en el desplegable
        event.preventDefault();
        event.stopPropagation();
  
        // Cambia la visibilidad del desplegable
        const dropdownContent = item.querySelector(".dropdown-content");
        dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
      });
    });
  });
  

  //Funcionamiento de details:
  const detailsElements = document.querySelectorAll('details');

  detailsElements.forEach(details => {
    details.addEventListener('click', () => {
      detailsElements.forEach(otherDetails => {
        if (otherDetails !== details) {
          otherDetails.removeAttribute('open');
        }
      });
    });
  });