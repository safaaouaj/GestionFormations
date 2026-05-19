<?php

require_once __DIR__ . '/../models/connexion.php';

class Inscription {

    public static function ajouter($nom, $prenom, $email, $formation_id) {

        $pdo = getConnexion();

        $sql = "INSERT INTO inscriptions (nom, prenom, email, formation_id)
                VALUES (:nom, :prenom, :email, :formation_id)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':formation_id' => $formation_id
        ]);

        return $pdo->lastInsertId();
    }
}