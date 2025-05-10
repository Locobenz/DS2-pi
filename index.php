<?php
// index.php
session_start();
$hideNavLinks = true;    // empêche l'affichage des liens S'inscrire / Se connecter
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Accueil - Suivi des Candidatures</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <section class="banner">
    <img
      src="img/banner.png"
      alt="Bannière Suivi des Candidatures"
      class="banner-img"
    >
  </section>

  <main>
    <div class="container">
      <h1>Système de Suivi des Candidatures</h1>
      <p>Bienvenue ! Suivez vos candidatures ou gérez vos offres d'emploi.</p>
      <nav class="action-links">
        <a href="register.php">S'inscrire</a> |
        <a href="login.php">Se connecter</a>
      </nav>
    </div>
  </main>

  <?php include 'footer.php'; ?>
</body>
</html>
