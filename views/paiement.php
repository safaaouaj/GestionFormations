<?php

$pageTitle = 'Paiement';

require 'views/header.php';

/*
|--------------------------------------------------------------------------
| Sécurisation des variables
|--------------------------------------------------------------------------
*/
$erreur_paiement = $erreur_paiement ?? false;
$inscription = $inscription ?? [];

?>
<div class="page-banner">

    <h1>💳 Paiement</h1>

    <p>
        Récapitulatif de votre inscription
    </p>

</div>

<div class="paiement-section">

    <div class="form-card">

        <!-- Message d'erreur -->
        <?php if ($erreur_paiement) : ?>

            <div class="alert alert-error">

                ❌ <strong>Paiement refusé.</strong>

                Veuillez réessayer ou choisir un autre mode.

            </div>

        <?php endif; ?>

        <!-- Récapitulatif -->
        <h2
            style="
                font-family: var(--font-heading);
                margin-bottom: 1rem;
            "
        >
            Récapitulatif
        </h2>

        <div class="recap-box">

            <h3>📋 Détails de l'inscription</h3>

            <!-- Nom -->
            <div class="recap-row">

                <span>Nom complet</span>

                <strong>
                    <?= htmlspecialchars(
                        ($inscription['prenom'] ?? '') . ' ' .
                        ($inscription['nom'] ?? '')
                    ) ?>
                </strong>

            </div>

            <!-- Email -->
            <div class="recap-row">

                <span>Email</span>

                <strong>
                    <?= htmlspecialchars($inscription['email'] ?? '') ?>
                </strong>

            </div>

            <!-- Formation -->
            <div class="recap-row">

                <span>Formation</span>

                <strong>
                    <?= htmlspecialchars(
                        $inscription['formation_titre'] ?? ''
                    ) ?>
                </strong>

            </div>

            <!-- Prix -->
            <div class="recap-total">

                <span>Total à payer</span>

                <span>
                    <?= number_format(
                        $inscription['prix'] ?? 0,
                        2
                    ) ?> DT
                </span>

            </div>

        </div>

        <!-- Info simulation -->
        <p
            style="
                color: var(--gray);
                font-size: 0.88rem;
                margin-bottom: 1.25rem;
                text-align: center;
            "
        >
            🔒 Ceci est une simulation de paiement
            
        </p>

        <!-- Formulaire paiement -->
        <form
            method="POST"
            action="index.php?page=paiement&id=<?= htmlspecialchars($inscription['id'] ?? '') ?>"
        >

            <div class="paiement-buttons">

                <!-- Paiement OK -->
                <button
                    type="submit"
                    name="mode"
                    value="ok"
                    class="btn btn-success btn-lg"
                >
                    ✅ Paiement réussi
                </button>

                <!-- Paiement refusé -->
                <button
                    type="submit"
                    name="mode"
                    value="echec"
                    class="btn btn-danger btn-lg"
                >
                    ❌ Paiement refusé
                </button>

            </div>

        </form>

        <!-- Retour -->
        <p class="text-center text-muted mt-2">

            <a
                href="index.php?page=inscription"
                style="color: var(--accent);"
            >
                ← Modifier l'inscription
            </a>

        </p>

    </div>

</div>

<?php require 'views/footer.php'; ?>