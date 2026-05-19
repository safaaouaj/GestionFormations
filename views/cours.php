<?php
 
$pageTitle = 'Mes Cours';
 
require 'views/header.php';
 
/*
|--------------------------------------------------------------------------
| Sécurisation des variables
|--------------------------------------------------------------------------
*/
$formation = $formation ?? [];
$chapitres = $chapitres ?? [];
 
?>
 
<section class="cours-section">
 
    <!-- Header -->
    <div class="cours-header">
 
        <div>
 
            <h1>
                📖
                <?= htmlspecialchars(
                    $formation['titre'] ?? 'Votre formation'
                ) ?>
            </h1>
 
            <p>
 
                Bonjour
 
                <strong>
                    <?= htmlspecialchars(
                        $_SESSION['etudiant_prenom'] ?? 'Étudiant'
                    ) ?>
                </strong>
 
                — Bon apprentissage !
 
            </p>
 
        </div>
 
        <span class="badge-acces">
            ✅ Accès actif
        </span>
 
    </div>
 
    <!-- Titre -->
    <h2
        style="
            font-family: var(--font-heading);
            margin-bottom: 1.25rem;
        "
    >
        Programme du cours
    </h2>
 
    <!-- Liste des chapitres -->
    <div class="chapitres-list">
 
        <?php if (!empty($chapitres)) : ?>
 
            <?php foreach ($chapitres as $index => $chapitre) : ?>
 
                <div class="chapitre-item">
 
                    <!-- Numéro -->
                    <div class="chapitre-num">
                        <?= $index + 1 ?>
                    </div>
 
                    <!-- Infos -->
                    <div class="chapitre-info">
 
                        <h4>
                            <?= htmlspecialchars(
                                $chapitre['titre'] ?? ''
                            ) ?>
                        </h4>
 
                        <p>
                            <?= htmlspecialchars(
                                $chapitre['description'] ?? ''
                            ) ?>
                        </p>
 
                    </div>
 
                    <!-- Icône -->
                    <span class="chapitre-icon">
                        ▶️
                    </span>
 
                </div>
 
            <?php endforeach; ?>
 
        <?php else : ?>
 
            <div class="alert alert-info">
                📭 Aucun chapitre disponible pour le moment.
            </div>
 
        <?php endif; ?>
 
    </div>
 
    <!-- Retour -->
    <div class="mt-3" style="text-align: center;">
 
        <a href="index.php?page=formations" class="btn btn-outline">
            ← Voir d'autres formations
        </a>
 
    </div>
 
</section>
 
<?php require 'views/footer.php'; ?>