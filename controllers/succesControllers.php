<?php
// controllers/succesController.php  (ou views/succes.php selon votre routeur)
 
// session déjà démarrée dans index.php
 
// Vérifier que le paiement a bien eu lieu
if (!isset($_SESSION['paiement_ok']) || $_SESSION['paiement_ok'] !== true) {
    header('Location: index.php');
    exit();
}
 
$prenom = $_SESSION['etudiant_prenom'] ?? 'Étudiant';
$formation_titre = $_SESSION['formation_titre'] ?? 'votre formation';
$formation_id = $_SESSION['formation_id'] ?? 0;
 
require 'views/succes.php';