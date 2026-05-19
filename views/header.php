<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle . ' — GestionFormations' : 'GestionFormations' ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
 
<nav class="navbar">
    <a href="index.php" class="navbar-brand">
        📚 <span>Gestion</span>Formations
    </a>
    <div class="navbar-links">
        <a href="index.php" <?= (!isset($_GET['page']) || $_GET['page'] === 'home') ? 'class="active"' : '' ?>>Accueil</a>
        <a href="index.php?page=formations" <?= (isset($_GET['page']) && $_GET['page'] === 'formations') ? 'class="active"' : '' ?>>Formations</a>
        <a href="index.php?page=inscription" class="btn-nav <?= (isset($_GET['page']) && $_GET['page'] === 'inscription') ? 'active' : '' ?>">S'inscrire</a>
    </div>
</nav>
