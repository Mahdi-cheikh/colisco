<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déménagement</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 600px;
            width: 100%;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
           
        }

        .back-link {
            color: #0056b3;
            text-decoration: none;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .back-link svg {
            margin-right: 5px;
        }

        h1 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 0.9rem;
            color: #333;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #003d99;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f0f4ff;
            color: #333;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:nth-child(odd) {
            background-color: #fff;
        }

        .info-note {
            font-size: 0.9rem;
            color: #666;
            margin-top: 10px;
            text-align: center;
        }
        .navbar {
            display: flex;
            border-top-left-radius: 0px ;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 30px;
            border-bottom-left-radius: 30px;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background: rgba(14, 14, 14, 0.9);
            backdrop-filter: blur(10px);
            color: white;
            position: fixed;
            z-index: 1000;
            width: 94.5%;
            top: 0;
            left: 0;
            box-shadow: 0px 4px 10px rgba(14, 13, 13, 0.2);
            transition: all 0.3s ease-in-out;
            
        }
        
        .navbar.scrolled {
            background: rgba(10, 10, 10, 0.95);
        }
        .profile {
    display: flex;
    flex-direction: column; /* Stack the image and name vertically */
    align-items: center; /* Center align the image and name */
    gap: px; /* Add spacing between the image and the name */
}

/* Profile Picture Styling */
.profile-pic {
    width: 40px; /* Set the width of the profile picture */
    height: 40px; /* Set the height of the profile picture */
    border-radius: 50%; /* Make the image circular */
    object-fit: cover; /* Ensure the image fits within the circle */
    border:2px solid #efeeb3; /* Add a border around the image */
    transition: transform 0.4s ease-in-out; /* Smooth hover effect */
}

/* Hover Effect */
.profile-pic:hover {
    transform: scale(1.1); /* Slightly enlarge the image on hover */
    border-color: #007bff; /* Change the border color on hover */
}

/* Username Styling */
.user-name {
    font-size: 14px; /* Adjust the font size */
    font-weight: bold; /* Make the text bold */
    color: #ffffff; /* Set the text color *
    text-align: center; /* Center align the text */
}
        
        /* Logo */
        .logo {
            font-size: 22px;
            font-weight: bold;
        }
        
        .logo span {
            font-size: 12px;
            color: #bbb;
        }
        
        /* Navigation Links */
        .nav-links {
            list-style: none;
            display: flex;
        }
        
        .nav-links li {
            margin: 0 20px;
            position: relative;
        }
        
        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 15px;
            transition: color 0.3s ease-in-out;
        }
        
        .nav-links a:hover {
            color: #838DB1;
        }
        
        /* Dropdown Menu */
        .dropdown-menu {
    display: block;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    background: rgba(40, 40, 40, 0.95);
    top: 40px;
    left: 0;
    list-style: none;
    padding: 10px;
    border-radius: 5px;
    min-width: 180px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: opacity 0.2s ease-in-out, visibility 0.2s ease-in-out;
        }
        .dropdown-menu li {
            margin: 5px 0;
        }
        
        .dropdown-menu a {
            color: white;
            padding: 10px;
            display: block;
            transition: background 0.3s;
        }
        
        .dropdown-menu a:hover {
            background: #555;
            border-radius: 3px;
        }
        
   
.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
}
        /* Animation dropdown */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Navigation Buttons */
        .nav-buttons {
            display: flex;
            align-items: center;
        }
        
        .btn {
            text-decoration: none;
            color: white;
            background-color: transparent;
            border: 1px solid white;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 14px;
            margin-left: 12px;
            transition: all 0.3s ease-in-out;
        }
        
        .btn:hover {
            background-color: white;
            color: #222;
        }
        
        .btn.login {
            background-color:#838DB1;
            border: none;
        }
        
        .btn.login:hover {
            background-color: #838DB1;
            color: white;
        }
        
    </style>
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
                    <li><a href="devis démenagement.html">Devis déménagement</a></li>
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
    <div class="container">
        <a href="devis démenagement.php" class="back-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
            </svg>
            retour
        </a>
        <h1>Déménagement</h1>
        <div class="form-group">
            <label for="volume">Renseignez votre volume en mètres cubes.</label>
            <input type="text" id="volume" placeholder="m³">
        </div>
                <button type="button" onclick="window.location.href='devis démenagement 2.php'">Valider</button>
        <h2>Comment estimer mon volume ?</h2>
        <table>
            <thead>
                <tr>
                    <th>Superficie du logement</th>
                    <th>Volume total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>moins de 30m²</td>
                    <td>de 10 à 20m³</td>
                </tr>
                <tr>
                    <td>entre 30 et 50m²</td>
                    <td>de 20 à 30m³</td>
                </tr>
                <tr>
                    <td>entre 50 et 80m²</td>
                    <td>de 30 à 40m³</td>
                </tr>
                <tr>
                    <td>entre 80 et 100m²</td>
                    <td>environ 50m³</td>
                </tr>
                <tr>
                    <td>supérieur à 100m²</td>
                    <td>entre 80 et 100m³</td>
                </tr>
            </tbody>
        </table>
        <p class="info-note">Vous pourrez affiner le volume avec le déménageur.</p>
    </div>
</body>
</html>