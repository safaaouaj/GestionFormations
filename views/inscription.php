<?php
$pageTitle = 'Inscription';

require 'views/header.php';

/*
|--------------------------------------------------------------------------
| Sécurisation des variables
|--------------------------------------------------------------------------
*/
$formations = $formations ?? [];
$formation_preselect = $formation_preselect ?? null;
$erreurs = $erreurs ?? [];
?>
<div class="page-banner">
    <h1>Formulaire d'Inscription</h1>
    <p>Remplissez ce formulaire pour vous inscrire à une formation</p>
</div>

<div class="form-section">

    <div class="form-card">

        <h1>Vos informations</h1>

        <p class="subtitle">
            Les champs marqués d'un * sont obligatoires
        </p>

        <!-- Affichage des erreurs -->
        <?php if (!empty($erreurs)) : ?>

            <div class="alert alert-error">

                <strong>❌ Erreurs détectées :</strong>

                <ul>
                    <?php foreach ($erreurs as $e) : ?>
                        <li><?= htmlspecialchars($e) ?></li>
                    <?php endforeach; ?>
                </ul>

            </div>

        <?php endif; ?>

        <!-- Formulaire -->
   <form method="POST" action="index.php?page=inscription">

            <!-- Nom -->
            <div class="form-group">

                <label for="nom">Nom *</label>

                <input
                    type="text"
                    id="nom"
                    name="nom"
                    value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>"
                    placeholder="Votre nom de famille"
                    required
                >

            </div>

            <!-- Prénom -->
            <div class="form-group">

                <label for="prenom">Prénom *</label>

                <input
                    type="text"
                    id="prenom"
                    name="prenom"
                    value="<?= htmlspecialchars($_POST['prenom'] ?? '') ?>"
                    placeholder="Votre prénom"
                    required
                >

            </div>

            <!-- Email -->
            <div class="form-group">

                <label for="email">Adresse email *</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                    placeholder="exemple@email.com"
                    required
                >

            </div>

            <!-- Formation -->
            <div class="form-group">

                <label for="formation_id">
                    Formation choisie *
                </label>

                <select
                    id="formation_id"
                    name="formation_id"
                    required
                >

                    <option value="">
                        -- Choisir une formation --
                    </option>

                    <?php foreach ($formations as $f) : ?>

                        <?php
                        $selected =
                            ($formation_preselect == $f['id']) ||
                            (
                                isset($_POST['formation_id']) &&
                                $_POST['formation_id'] == $f['id']
                            );
                        ?>

                        <option
                            value="<?= htmlspecialchars($f['id']) ?>"
                            <?= $selected ? 'selected' : '' ?>
                        >

                            <?= htmlspecialchars($f['titre']) ?>
                            — <?= number_format($f['prix'], 2) ?> DT

                        </option>

                    <?php endforeach; ?>

                </select>

            </div>

            <!-- Bouton -->
            <div class="mt-2">

                <button
                    type="submit"
                    class="btn btn-primary btn-full btn-lg"
                >
                    Continuer vers le paiement →
                </button>

            </div>

        </form>

    </div>

    <!-- Retour -->
    <p class="text-center text-muted mt-2">

        <a
            href="index.php?page=formations"
            style="color: var(--accent);"
        >
            ← Retour aux formations
        </a>

    </p>

</div>

<?php require 'views/footer.php'; ?>