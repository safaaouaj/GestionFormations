<?php
$pageTitle = 'Accueil';

require 'views/header.php';
?>
<header>
    <link rel="stylesheet" href="assets/style.css">
</header>
<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <h1>Développez vos <span>compétences</span> avec nos formations</h1>
        <p>Des formations de qualité en informatique, cybersécurité, data science et bien plus encore. Inscrivez-vous dès aujourd'hui !</p>
        <div class="hero-buttons">
            <a href="index.php?page=formations" class="btn btn-primary btn-lg">Voir les formations</a>
            <a href="index.php?page=inscription" class="btn btn-secondary btn-lg">S'inscrire</a>
        </div>
    </div>
</section>
 
<!-- STATS -->
<div class="stats">
    <div class="stat-item">
        <div class="stat-number">5+</div>
        <div class="stat-label">Formations</div>
    </div>
    <div class="stat-item">
        <div class="stat-number">100%</div>
        <div class="stat-label">En ligne</div>
    </div>
    <div class="stat-item">
        <div class="stat-number">3</div>
        <div class="stat-label">Niveaux</div>
    </div>
    <div class="stat-item">
        <div class="stat-number">40h+</div>
        <div class="stat-label">De contenu</div>
    </div>
</div>
 
<!-- ATOUTS -->
<section class="section" style="background: var(--white);">
    <div class="container">
        <h2 class="section-title">Pourquoi nous choisir ?</h2>
        <div class="section-line"></div>
        <p class="section-subtitle">Une plateforme pensée pour votre réussite</p>
        <div class="features">
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Formations ciblées</h3>
                <p>Des programmes conçus par des experts pour répondre aux besoins du marché.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Accès sécurisé</h3>
                <p>Vos cours sont accessibles après paiement, protégés par session PHP.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💳</div>
                <h3>Paiement simple</h3>
                <p>Inscription et paiement rapides en quelques clics seulement.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📈</div>
                <h3>Tous niveaux</h3>
                <p>Débutant, intermédiaire ou avancé — trouvez la formation qui vous correspond.</p>
            </div>
        </div>
    </div>
</section>
 
<!-- CTA -->
<section class="section" style="background: linear-gradient(135deg, var(--accent2), var(--primary)); color: white; text-align: center;">
    <h2 class="section-title" style="color: white;">Prêt à commencer ?</h2>
    <div class="section-line"></div>
    <p class="section-subtitle" style="color: rgba(255,255,255,0.75);">Rejoignez nos formations dès aujourd'hui</p>
    <a href="index.php?page=formations" class="btn btn-primary btn-lg">Découvrir les formations →</a>
</section>
 
<?php require 'views/footer.php'; ?>