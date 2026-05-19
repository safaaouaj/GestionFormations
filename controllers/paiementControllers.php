<?php
 
require_once 'models/connexion.php';
 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
 
$pageTitle = 'Paiement';
 
$id = $_GET['id'] ?? null;
 
if (!$id) {
    die("Erreur ID");
}
 
/*
|--------------------------------------------------------------------------
| Récupération inscription
|--------------------------------------------------------------------------
*/
$pdo = getConnexion();
 
$stmt = $pdo->prepare("
    SELECT i.*, f.titre, f.prix
    FROM inscriptions i
    JOIN formations f ON i.formation_id = f.id
    WHERE i.id = ?
");
$stmt->execute([$id]);
$data = $stmt->fetch(PDO::FETCH_ASSOC);
 
if (!$data) {
    die("Inscription introuvable");
}
 
/*
|--------------------------------------------------------------------------
| SI on clique sur un bouton paiement
|--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $mode = $_POST['mode'] ?? '';
 
    if ($mode === 'ok') {
 
        $_SESSION['paiement_ok']     = true;
        $_SESSION['etudiant_prenom'] = $data['prenom'];
        $_SESSION['formation_titre'] = $data['titre'];
        $_SESSION['formation_id']    = $data['formation_id']; // ← AJOUT
 
        header("Location: index.php?page=succes");
        exit();
    }
 
    if ($mode === 'echec') {
        $erreur_paiement = true;
    }
}
 
/*
|--------------------------------------------------------------------------
| Affichage page paiement
|--------------------------------------------------------------------------
*/
$inscription = [
    'id'              => $data['id'],
    'nom'             => $data['nom'],
    'prenom'          => $data['prenom'],
    'email'           => $data['email'],
    'formation_titre' => $data['titre'],
    'prix'            => $data['prix']
];
 
require 'views/paiement.php';