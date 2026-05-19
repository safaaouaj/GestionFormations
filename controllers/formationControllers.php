<?php
// controllers/FormationController.php

require_once 'models/Formation.php';

// Récupérer les formations depuis le modèle
$formations = Formation::getAll();

// Charger la vue
require 'views/formation.php';
?>