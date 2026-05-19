<?php
// controllers/coursControllers.php
 
require_once 'models/Formation.php';
require_once 'models/chapitre.php';
 
// CORRECTION : session déjà démarrée dans index.php, ne pas rappeler session_start()
 
// Récupérer l'id de la formation depuis l'URL
$formation_id = isset($_GET['formation_id'])
    ? (int)$_GET['formation_id']
    : 0;
 
// Vérifier qu'un id valide est fourni
if ($formation_id <= 0) {
    header('Location: index.php?page=formations');
    exit();
}
 
// Charger la formation depuis la BDD
$formation = Formation::getById($formation_id);
 
// Si la formation n'existe pas → retour à la liste
if (!$formation) {
    header('Location: index.php?page=formations');
    exit();
}
 
// Charger les chapitres
$chapitres = Chapitre::getByFormation($formation_id);
 
// Afficher la vue
require 'views/cours.php';