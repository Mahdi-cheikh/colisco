<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="script.js"></script>
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <a href="index2.php">
              <img src="logo2.png" width="200px" height="50px" alt="Logo">
            </a>
        </div>
        
        <ul class="nav-links">
            <li class="dropdown">
                <a href="#">Solution Business ▾</a>
                <ul class="dropdown-menu">
                    <li><a href="#">E-commerce</a></li>
                    <li><a href="#">Marketplace</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Transporteur ▾</a>
                <ul class="dropdown-menu">
                    <li><a href="Proposer un trajet.php">Proposer un trajet</a></li>
                    <li><a href="recherche trajet.php">Voir annonce</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Particulier ▾</a>
                <ul class="dropdown-menu">
                    <li><a href="Expédier ou recevoir un colis.php">Expédier ou recevoir un colis</a></li>
                    <li><a href="devis démenagement.php">Devis déménagement</a></li>
                </ul>
            </li>
            <li><a href="#">Nos Engagements</a></li>
        </ul>

              <div class="nav-buttons">
            <?php if (isset($_SESSION['user_name'])): ?>
                <!-- Display profile picture and user name -->
                <div class="profile">
                    <a href="profil.php">
                        <img src="profile.png" alt="Profile Picture" class="profile-pic">
                    </a>
                    <span class="user-name"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                </div>
                <!-- Message Icon -->
                <a href="messages.php" class="btn message-icon">
                    <img src="test.png" alt="Messages" style="width: 24px; height: 24px;">
                </a>
                <a href="logout.php" class="btn login">Se Déconnecter</a>
            <?php else: ?>
                <a href="recherche trajet.php" class="btn">Voir les annonces</a>
                <a href="login.html" class="btn login">Se Connecter</a>
            <?php endif; ?>
        </div>
    </nav>


<script>document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");
    const navbar = document.querySelector(".navbar");

    // Menu Burger Animation
    menuToggle.addEventListener("click", function () {
        navLinks.classList.toggle("active");
        menuToggle.classList.toggle("active");
    });

    // Changement de couleur en scroll
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});</script>
<main class="hero">
    <div class="hero-content">
        <h1>Simple et moins cher.<br>La livraison qu'il vous faut.</h1>
        <p>
            Envoyez (presque) tout, partout en Tunisie grâce à des trajets déjà prévus. 
            C’est pratique et bon pour la planète. Bienvenue sur Colisco !
        </p>
        <div class="hero-buttons">
            <button class="btn primary" type="button" onclick="window.location.href='Expédier ou recevoir un colis.php'">Expédier ou recevoir un colis </button>
            <button class="btn secondary" type="button" onclick="window.location.href='recherche trajet.php'">Voir les colis sur ma route</button>
        </div>
    </div>
    <div class="hero-image">
        <img src="new 1 3D 1.png" height="600px" width="100px" alt="Application mobile Colisco">
    </div>
</main>   
    <section class="reviews">
        <div class="container">
            <!-- Avantages -->
            <div class="advantages">
                <div class="advantage">
                    <img src="economie.png" alt="Économie"  >
                    <h3>Livraison économique</h3>
                    <p>Jusqu’à 80% moins cher pour les gros colis, meubles et objets.</p>
                </div>
                <div class="advantage">
                    <img src="assurance.png" alt="Assurance">
                    <h3>Assurance sérénité</h3>
                    <p>Une assurance pour tous vos envois ! Jusqu’à 1000TND en option.</p>
                </div>
                <div class="advantage">
                    <img src="satisfaction.png" alt="Satisfaction">
                    <h3>Excellente satisfaction</h3>
                    <p>Avis vérifiés : nos clients nous notent en moyenne 4,7 sur 5.</p>
                </div>
            </div>
    
            <!-- Titre Section -->
            <h2 class="reviews-title">Ce que nos clients disent de nous</h2>
            <p class="reviews-rating">⭐ 4,7/5 étoiles sur plus de <b>400 000 avis clients</b></p>
    
            <!-- Liste des avis -->
            <div class="reviews-container">

                <div class="reviews-wrapper">
                    <div class="review-card">
                        <h3>Au top ! ⭐⭐⭐⭐⭐</h3>
                        <p>Première expérience sur ce site. Besoin d’un transport d’un gros meuble situé à 800km de chez moi. La vendeuse m’a proposé ce site pour le transport et je ne regrette pas. Vite contacté, transporteur au top, transaction sécurisée… Je recommande ce site sans problème.</p>
                        <p class="name" ><strong>SALMA ESSAYES</strong></p>
                    </div>
                    <div class="review-card">
                        <h3>Bonne expérience ⭐⭐⭐⭐⭐</h3>
                        <p>Première et bonne expérience avec colisco. Je recommande déjà à tout mon entourage d’y penser pour des besoins de livraison ! J’ai réussi a trouver un chauffeur alors que ce n’était vraiment pas gagné, je pense donc que tout le monde peut l’utiliser </p>
                        <p class="name"><strong>MEHDI CHEIKH</strong></p>
                    </div>
                    <div class="review-card">
                        <h3>Appli très bien faite ⭐⭐⭐⭐⭐</h3>
                        <p>Ravi de cette première expérience avec Cocolis. Appli très bien faite. Efficace. Facile pour les validations de livraison. Simple aussi de trouver de nouveaux colis à livrer sur le trajet. Je recommande !</p>
                        <p class="name"><strong>ABIR GUEZMIL</strong></p>
                    </div>
                    <div class="review-card">
                        <h3>Rapide et efficace ⭐⭐⭐⭐</h3>
                        <p>Je ne pensais pas pouvoir trouver un jour un transporteur depuis ma campagne jusqu’à l’étranger pour un petit meuble. Eh bien si ! Avec colisco j’ai eu une réponse rapide et j’ai pu organiser le déplacement d’une petite commode sans problème. Le chauffeur était ponctuel et très aimable. Parfait.                        </p>
                        <p class="name"><strong>RANIA SAID</strong></p>
                    </div>
                    <div class="review-card">
                        <h3>Super service ⭐⭐⭐⭐⭐</h3>
                        <p>Je ne connaissais pas ce site il y a encore 1 mois. Et depuis, je l’ai utilisé 2 fois. Sans soucis. Tout s’est très bien passé. Sûr et efficace. Très bon rapport service/prix. Je recommande.</p>
                        <p class="name"><strong>KARIM B.</strong></p>
                    </div>
                    <div class="review-card">
                        <h3>Très pratique ⭐⭐⭐⭐⭐</h3>
                        <p>J’ai pu envoyer un colis sans problème. Simple et efficace Les avis laissés aux conducteurs permettent d’avoir une totale confiance, et à raison. Je n’aurais sans doute jamais fait venir mon très très grand tableau si j’avais dû faire appel à un transporteur. Je recommande Cocolis à fond !</p>
                        <p class="name"><strong>AMEL T.</strong></p>
                    </div>
                    <div class="review-card">
                        <h3>Excellente expérience ⭐⭐⭐⭐⭐</h3>
                        <p>Je repasserai commande sans hésiter, un super service ! Avec colisco j’ai eu une réponse rapide et j’ai pu organiser le déplacement d’une petite commode sans problème. Le chauffeur était ponctuel et très aimable. Parfait.</p>
                        <p class="name"><strong>FARID M.</strong></p>
                    </div>
                </div>
            
                
            </div>

    </section>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const reviewsList = document.querySelector(".reviews-list");
        const loadMoreBtn = document.getElementById("loadMore");
    
        // Avis supplémentaires
        const extraReviews = [
            {
                title: "Service impeccable ⭐⭐⭐⭐⭐",
                content: "Transport rapide et sécurisé, je recommande vivement !",
                author: "AHMED BEN ALI"
            },
            {
                title: "Très satisfait ⭐⭐⭐⭐⭐",
                content: "Le site est super pratique, tout s'est déroulé sans problème.",
                author: "NOUR CHERIF"
            }
        ];
    
        loadMoreBtn.addEventListener("click", function () {
            extraReviews.forEach(review => {
                const div = document.createElement("div");
                div.classList.add("review");
                div.innerHTML = `<h3>${review.title}</h3>
                                 <p>${review.content}</p>
                                 <span class="author">- ${review.author}</span>`;
                reviewsList.appendChild(div);
            });
    
            // Cacher le bouton après l'ajout
            loadMoreBtn.style.display = "none";
        });
    });
    
    </script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const scrollContainer = document.querySelector(".reviews-wrapper");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");

    function updateButtons() {
        prevBtn.classList.toggle("disabled", scrollContainer.scrollLeft <= 0);
        nextBtn.classList.toggle(
            "disabled",
            scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth
        );
    }

    nextBtn.addEventListener("click", () => {
        scrollContainer.scrollBy({ left: 320, behavior: "smooth" });
    });

    prevBtn.addEventListener("click", () => {
        scrollContainer.scrollBy({ left: -320, behavior: "smooth" });
    });

    scrollContainer.addEventListener("scroll", updateButtons);
    window.addEventListener("resize", updateButtons);

    updateButtons(); // Initialisation
});

</script>
  
</section>
<div class="livraison-box">
    <img src="new 2  3D.png" height="400px" alt="Expéditeurs" weight="300px" align="right" >
    

    <h1>La livraison des uns fait le bonheur des autres.</h1>
    <p>Les uns remboursent leurs frais de route, les autres paient leur livraison au prix juste. 
       Un service gagnant-gagnant qui augmente votre pouvoir d’achat !</p>
    
        <button class="cta-button" onclick="window.location.href='Expédier ou recevoir un colis.html'">Expédier ou recevoir un colis</button>

    <div class="info-boxes">
        <img src="new 6 3D.png" height="600px" alt="Expéditeurs" weight="300px" align="left" >
        <div class="info-box">
        
            <div>
                <h2>Expéditeurs</h2>
                <h5>Avec ColisCO, vous expédiez tous types de colis, même les plus volumineux, 
                   jusqu'à 60% moins cher ! C’est simple, économique et ça contribue à protéger notre planète.</h5>
            </div>
        </div>

        <div class="info-box">
           
            <div>
                <h2>Transporteurs</h2>
                <h5>Avec ColisCo, vous économisez en moyenne 250DT par trajet ! Que ce soit pour aller au bureau ou partir 
                   en vacances, toutes les occasions sont bonnes pour rentabiliser vos trajets.</h5>
            </div>
        </div>
    </div>
</div>
<script>document.addEventListener("DOMContentLoaded", function () {
    const container = document.querySelector(".info-boxes");
    let scrollAmount = 0;

    function autoScroll() {
        if (scrollAmount >= container.scrollWidth - container.clientWidth) {
            scrollAmount = 0; // Revenir au début
        } else {
            scrollAmount += 4; // Défilement fluide
        }
        container.scrollTo({
            left: scrollAmount,
            behavior: "smooth"
        });
    }

    setInterval(autoScroll, 50); // Défilement fluide toutes les 50ms
});
</script>

<section class="faq-section">
    <h2>Vous souhaitez en savoir plus sur le fonctionnement de Colisco ?</h2>
    <p>Consultez les questions les plus fréquentes :</p>
    <div class="faq-container">
        <div class="faq-item">
            <button class="faq-question">
                <span> Comment publier une alerte trajet ?</span>
                <span class="faq-toggle">+</span>
            </button>
            <div class="faq-answer">
                                <p>
                    Qu'ils soient ponctuels ou réguliers, nous vous recommandons fortement d'enregistrer une alerte sur vos futurs trajets ; cela nous permettra de vous envoyer une notification via notre application mobile ou par e-mail dès qu'une demande d'envoi de colis se présentera sur votre trajet. 
                
                    Ainsi, vous n'aurez plus à chercher le colis qui financera une partie de vos frais de transport avant chacun de vos trajets.
                
                    Pour enregistrer une alerte trajet, rendez-vous sur la page 
                    <a href="Proposer un trajet.html" style="color: #007bff; text-decoration: none;">Proposer un trajet</a>.
                </p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span> Comment se déroule le paiement lorsque j'ai transporté un colis ?</span>
                <span class="faq-toggle">+</span>
            </button>
            <div class="faq-answer">
                <p>Le paiement se déroule en plusieurs étapes :

                    Vous vous mettez d’accord avec l’expéditeur sur le prix et la date de la livraison. 
                    
                    L’expéditeur paie sur Colisco. L’argent est conservé jusqu’à la livraison. 
                    
                    Le jour de la livraison, le destinataire vous communique un code. Vous validez la livraison en saisissant ce code sur la page de discussion ou bien l'annonceur confirme la livraison directement depuis son compte Colisco. 
                    
                    L'argent est immédiatement disponible dans votre portefeuille Colisco. Le paiement se trouve dans la rubrique “Mes paiements” de votre compte. Vous pouvez demander un virement à tout moment. 
                    
                    
                    💡 Avant de déclencher votre virement :
                    
                    Vérifiez que la livraison a bien été confirmée par l'annonceur ou par vous-même grâce au code de confirmation (vous devez alors voir le montant de la livraison disponible dans votre espace Mes paiements)
                    
                    Vérifiez que votre identité a bien été vérifiée sur Colisco.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">
                <span> Quel est le revenu moyen pour les transporteurs pro sur Colisco ?</span>
                <span class="faq-toggle">+</span>
            </button>
            <div class="faq-answer">
                <p>Vos revenus dépendent de votre activité. 

                    Pour trouver des livraisons, soit vous recherchez des annonces sur Colisco, soit vous enregistrez vos trajets. Si vous enregistrez vos trajets, vous serez contacté(e) par les entreprises ou les particuliers qui cherchent des transporteurs. 
                    
                    
                    En moyenne, un transporteur gagne 500TND par mois, les plus actifs gagnent jusqu’à 800TND. 
                    
                    Les rémunérations augmentent au fil des mois car les demandes de transport augmentent fortement sur Colisco. Notamment les déménagements ou les demandes des entreprises..</p>
            </div>
        </div>
        
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const faqItems = document.querySelectorAll(".faq-item");

        faqItems.forEach((item) => {
            const question = item.querySelector(".faq-question");

            question.addEventListener("click", () => {
                item.classList.toggle("active");
            });
        });
    });
</script>

<section class="how-it-works">
    <div class="containerrr">
         <img src="new 3 3D.png" height="300px"  weight="300px" alt="Expéditeurs" align="right" >
      <div class="steps">
       

        <div class="step">
          <h2>Créez une demande de transport</h2>
          <p>Renseignez les caractéristiques du colis à envoyer (description, dimensions et poids). Ajoutez une photo et validez le prix.</p>
        </div>
        <div class="step">
          <h2>Validez votre réservation</h2>
          <p>Payez en ligne et bénéficiez de l’assurance Colisco. Cocolis est tiers de confiance : le paiement est versé au transporteur une fois le colis livré.</p>
        </div>
        <div class="step">
          <h2>Recevez des propositions</h2>
          <p>Nous transmettons votre demande d'envoi à notre communauté : des voyageurs et des transporteurs dont le trajet coïncide avec votre livraison.</p>
        </div>
      </div>
      <button class="ctaa-button">Comment ça marche</button>
    </div>
  </section>
<section class="ecological">
    <div class="containerr">
        <h2 class="section-title">Ayez le réflexe écologique pour vos livraisons</h2>
        <img src="new 4 V2.png"  alt="Expéditeurs"   >
        <div class="co2-counter">
            <div class="counter-number">
                <span id="counter">3256</span>
            </div>
            <div class="counter-value">
                <div class="counter-kg">
                    <span>kg</span>
                </div>
                <p class="counter-description">de CO2 évité !</p>
            </div>
        </div>

        <p class="ecological-description">
            Avec 25kg de CO2eq économisés en moyenne par livraison, notre modèle logistique est une vraie bouffée d'oxygène pour la planète. Nous réinventons l'envoi de colis à la sauce Colisco !
        </p>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const counter = document.getElementById('counter');
        let count = 4000; // Starting value
        const target = 5070; // Target value
        const speed = 0; // Speed of animation in milliseconds (0.1 second)

        const increment = () => {
            if (count < target) {
                count += 1; // Increment by 1
                counter.innerText = count.toLocaleString('fr-FR').replace(/,/g, ' ');
            } else if (count === target) {
                clearInterval(interval); // Stop the initial interval
                setInterval(() => {
                    count += 1; // Increment by 1 every second after reaching the target
                    counter.innerText = count.toLocaleString('fr-FR').replace(/,/g, ' ');
                }, 2000); // 1 second interval
            }
        };

        // Start animation when the section is visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    interval = setInterval(increment, speed); // Start incrementing
                    observer.unobserve(entry.target); // Stop observing after animation starts
                }
            });
        });

        let interval; // Declare interval variable
        observer.observe(document.querySelector('.ecological'));
    });
</script>

<section class="delivery-smile">
  <div class="delivery-container">
    <div class="delivery-left">
      <img src="new 5 3D.png" alt="Smiling Box" height="400px" width="400px">
     
    </div>
    <div class="delivery-right">
      <div class="delivery-feature">
        <h2>Des clients heureux</h2>
        <p>Testé et approuvé par des milliers d’utilisateurs qui font des économies grâce à Cocolis. Elle est pas belle la vie ?</p>
      </div>
      <div class="delivery-feature">
        <h2>Des colis chouchoutés</h2>
        <p>99,99% : c’est la probabilité que votre colis soit livré sans pépin. Parce que vos colis aussi méritent qu’on les chouchoute.</p>
      </div>
      <div class="delivery-feature">
        <h2>Une approche humaine</h2>
        <p>Nous recréons du lien social en développant l'entraide entre des individus qui ne se connaissent pas. C'est vertueux !</p>
      </div>
      <div class="delivery-feature">
        <h2>Un service client présent</h2>
        <p>Parce que chaque utilisateur compte pour nous. Vous obtenez une réponse en moins d’1h30. Et pas d’un robot !</p>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
    <div class="footer-container">
      <!-- Section À propos -->
      <div class="footer-section about">
        <img src="logo.png" alt="Logo" class="footer-logo" height="400px" width="400px">
        <p class="para">La livraison collaborative qui connecte expéditeurs et transporteurs en toute simplicité.<br>Économisez sur vos envois tout en réduisant l’empreinte carbone.</p>
      </div>
  
      <!-- Section Expéditeurs -->
      <div class="footer-section links">
        <h3>Expéditeurs</h3>
        <ul>
          <li><a href="#">Comment ça marche</a></li>
          <li><a href="#">Créer une annonce</a></li>
          <li><a href="#">Tarifs</a></li>
          <li><a href="#">Avis clients</a></li>
          <li><a href="#">Assurance et garanties</a></li>
        </ul>
      </div>
  
      <!-- Section Transporteurs -->
      <div class="footer-section links">
        <h3>Transporteurs</h3>
        <ul>
          <li><a href="#">Devenir transporteur</a></li>
          <li><a href="#">Sécurisation des paiements</a></li>
          <li><a href="#">Support & Aide</a></li>
          <li><a href="#">Nos engagements</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>
  
      <!-- Section Contact -->
      <div class="footer-section contact">
        <h3>Contact</h3>
        <p>Email : <a href="mailto:contact@cocolis.com">contact@colisco.com</a></p>
        <p>Téléphone : +216 22 222 222</p>
        <p>Adresse : 123 KAIROUAN \ TUNSIE</p>
        <div class="social-icons">
          <a href="#"><img src="facebook (1).png" alt="Facebook"></a>
          <a href="#"><img src="twitter.png" alt="Twitter"></a>
          <a href="#"><img src="instagram (1).png" alt="Instagram"></a>
          <a href="#"><img src="linkedin.png" alt="LinkedIn"></a>
        </div>
      </div>
    </div>
  
    <!-- Section de mentions légales -->
    <div class="footer-legal">
      <p><a href="#">Mentions légales</a> | <a href="#">Politique de confidentialité</a> | <a href="conditions générales d'utilisation.html">Conditions générales</a></p>
    </div>
  
    <div class="footer-bottom">
      <p>&copy; 2025 ColisCo. Tous droits réservés.</p>
    </div>
  </footer>
 
    

  
</body>
</html>
