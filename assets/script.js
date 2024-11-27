document.addEventListener("DOMContentLoaded", function() {
    const myModal = new bootstrap.Modal(document.getElementById('Modal'));
    myModal.show();
  });

  window.addEventListener('load', function() {
    // Vérifie si l'écran est plus petit que 768px (taille des smartphones)
    if (window.innerWidth <= 768) {
      // Récupère l'élément h2
      const subtitle = document.getElementById('subtitle');
      
      // Modifie le texte pour ajouter des sauts de ligne
      subtitle.innerHTML = 'RESTAURANT <br>&<br> AFTERWORK';
    }
  });
  
  window.addEventListener('resize', function() {
    // Recalcule à chaque redimensionnement d'écran
    if (window.innerWidth <= 768) {
      const subtitle = document.getElementById('subtitle');
      subtitle.innerHTML = 'RESTAURANT <br>&<br> AFTERWORK';
    } else {
      const subtitle = document.getElementById('subtitle');
      subtitle.innerHTML = 'RESTAURANT & AFTERWORK';
    }
  });

  // Données du menu //

  document.querySelectorAll('[data-target]').forEach(element => {
    element.addEventListener('click', () => {
      const targetId = element.getAttribute('data-target');
      const targetElement = document.getElementById(targetId);
      targetElement.classList.toggle('show'); // Alterne entre affiché et masqué
    });
  });
  