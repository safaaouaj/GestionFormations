<?php
$pageTitle = 'Paiement confirmé';
require 'views/header.php';
?>
<div class="succes-section">
    <div class="succes-card">
        <div class="succes-icon">✅</div>
 
        <h1>Paiement confirmé !</h1>
        <p>
            Félicitations <strong><?= htmlspecialchars($_SESSION['etudiant_prenom'] ?? '') ?></strong> !<br>
            Votre inscription à la formation
            <strong style="color: var(--accent);"><?= htmlspecialchars($_SESSION['formation_titre'] ?? '') ?></strong>
            a bien été enregistrée.
        </p>
 
        <div class="alert alert-success" style="text-align:left;">
            🎉 Votre paiement a été traité avec succès. Vous pouvez maintenant accéder à vos cours.
        </div>
 
        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:1.5rem;">
           <a href="index.php?page=cours&formation_id=<?= $_SESSION['formation_id'] ?? 0 ?>" class="btn btn-primary btn-lg">
                📖 Accéder aux cours
            </a>
            <a href="index.php?page=formations" class="btn btn-outline">
                Voir d'autres formations
            </a>
        </div>
    </div>
</div>
 
<?php require 'views/footer.php'; ?>