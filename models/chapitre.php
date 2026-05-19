<?php
 
class Chapitre {
 
    /**
     * Retourne des chapitres statiques selon la formation.
     * À remplacer par une vraie requête BDD quand la table sera prête.
     */
    public static function getByFormation($formation_id) {
 
        $chapitres = [
 
            1 => [
                ['titre' => 'Introduction au cours',         'description' => 'Présentation générale et objectifs.'],
                ['titre' => 'Environnement de travail',      'description' => 'Installation et configuration des outils.'],
                ['titre' => 'Concepts fondamentaux',         'description' => 'Les bases théoriques essentielles.'],
                ['titre' => 'Premiers exercices pratiques',  'description' => 'Mise en pratique des concepts vus.'],
                ['titre' => 'Projet final',                  'description' => 'Réalisation d\'un projet complet.'],
            ],
 
            2 => [
                ['titre' => 'Introduction',                  'description' => 'Présentation de la formation.'],
                ['titre' => 'Théorie avancée',               'description' => 'Approfondissement des concepts.'],
                ['titre' => 'Cas pratiques',                 'description' => 'Études de cas réels.'],
                ['titre' => 'Évaluation finale',             'description' => 'Test de validation des acquis.'],
            ],
 
        ];
 
        // Retourne les chapitres de la formation demandée,
        // ou une liste générique si la formation n'est pas définie
        return $chapitres[$formation_id] ?? [
            ['titre' => 'Introduction',          'description' => 'Présentation générale du cours.'],
            ['titre' => 'Contenu principal',     'description' => 'Les chapitres seront disponibles prochainement.'],
            ['titre' => 'Travaux pratiques',     'description' => 'Exercices et mises en situation.'],
            ['titre' => 'Évaluation',            'description' => 'Validation des compétences acquises.'],
        ];
    }
}