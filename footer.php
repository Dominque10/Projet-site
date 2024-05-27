
<footer class="site-footer">
    <div class="container">
        <div class="footer-about">
            <h3>EDU-BTS</h3>
            <p>Propulsant votre avenir avec des formations de qualité en BTS SIO SLAM et SISR.</p> 
               <p> Rejoignez-nous pour une expérience d'apprentissage inégalée.</p>
               <img src="image/bts.jpeg" alt="bts">
        </div>
        <div class="footer-links">
            <h3>Liens Utiles</h3>
            <ul>
                <li><a href="a_propos.php">À propos</a></li>
                <li><a href="element1">Formations</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h3>Contactez-nous</h3>
            <p><i class="fas fa-envelope"></i> dominique@edu-bts.com</p>
            <p><i class="fas fa-phone"></i> +33 7 82 59 21 45</p>
            <p><a href="https://wa.me/+33782592145" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a></p>
        </div>
        <div class="footer-social-media">
            <h3>Suivez-nous</h3>
            <a href="https://www.facebook.com/edubts"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/edubts"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/edubts"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/edubts"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 EDU-BTS. Tous droits réservés.</p>
    </div>

    <div class="footer">
  <div class="advertisement">

  </div>
  </div>


  <script>
    // Liste des publicités à afficher
var advertisements = [
  { title: "", content: "Meurthe-et-Moselle : un enseignant refuse de corriger des copies à cause de ChatGPT L'enseignant a remarqué que les copies ne comprenaient pas la moindre faute d'orthographe" },
  { title: "", content: "Les infos de 5h - Grand froid : à Paris, le calvaire des étudiants du CROUS Dans cette résidence universitaire du CROUS à Paris, le thermomètre à l'intérieur dépasse rarement les 15°. " },
  { title: "", content: "Parcoursup : favoris, comparateur, lettre de motivation... Les nouvelles fonctionnalités de la plateforme" },
  { title: "", content: "" },
];

// Index de la publicité actuellement affichée
var currentIndex = 0;

// Fonction pour afficher la publicité suivante
function showNextAdvertisement() {
  var advertisement = advertisements[currentIndex];
  document.querySelector('.advertisement').innerHTML = `<h2>${advertisement.title}</h2><p>${advertisement.content}</p>`;
  
  currentIndex++;
  if (currentIndex >= advertisements.length) {
    currentIndex = 0;
  }
}

// Appeler la fonction pour afficher la première publicité
showNextAdvertisement();

// Définir un intervalle pour changer de publicité toutes les 5 secondes (par exemple)
setInterval(showNextAdvertisement, 25000);

  </script>

  





</footer>

