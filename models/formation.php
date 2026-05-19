<?php
// models/Formation.php
 
require_once __DIR__ . '/../models/connexion.php';
 
class Formation {
 
    // Récupérer toutes les formations
    public static function getAll() {
 
        $pdo = getConnexion();
 
        $sql = "SELECT * FROM formations ORDER BY id ASC";
 
        $stmt = $pdo->query($sql);
 
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
 
    // Récupérer une formation par son ID
    public static function getById($id) {
 
        $pdo = getConnexion();
 
        $stmt = $pdo->prepare("SELECT * FROM formations WHERE id = :id");
 
        $stmt->execute([':id' => (int)$id]);
 
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}