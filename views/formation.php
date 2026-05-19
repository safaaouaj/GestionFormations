<?php
$pageTitle = 'Formations';
require 'views/header.php';
 
// Icônes selon le titre (simple correspondance)
function getIcon($titre) {
    if (stripos($titre, 'Intelligence') !== false) return '🤖';
    if (stripos($titre, 'Data') !== false) return '📊';
    if (stripos($titre, 'Web') !== false) return '🌐';
    if (stripos($titre, 'Cyber') !== false) return '🔐';
    if (stripos($titre, 'Réseau') !== false) return '🔗';
    return '📚';
}
?>
<div class="page-banner">
    <h1>Nos Formations</h1>
    <p>Choisissez la formation qui correspond à vos objectifs</p>
</div>
 
<section class="section">
    <div class="container">
        <?php if (empty($formations)): ?>
            <div class="alert alert-warning" style="max-width:600px; margin:0 auto; text-align:center;">
                Aucune formation disponible pour le moment.
            </div>
        <?php else: ?>
        <div class="formations-grid">
            <?php foreach ($formations as $f): ?>
            <div class="card">
                <div class="card-header">
                    <div class="card-icon"><?= getIcon($f['titre']) ?></div>
                    <h3><?= htmlspecialchars($f['titre']) ?></h3>
                    <span class="card-badge"><?= htmlspecialchars($f['niveau']) ?></span>
                </div>
                <div class="card-body">
                    <p><?= htmlspecialchars($f['description']) ?></p>
                    <div class="card-meta">
                        <span>⏱ <?= htmlspecialchars($f['duree']) ?></span>
                        <span>🎓 <?= htmlspecialchars($f['niveau']) ?></span>
                    </div>
                    <div class="card-price">
                        <?= number_format($f['prix'], 2) ?> <small>DT</small>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="index.php?page=inscription&formation_id=<?= $f['id'] ?>" class="btn btn-primary btn-full">
                        S'inscrire à cette formation →
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
 
<?php require 'views/footer.php'; ?>