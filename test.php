<?php
$nom = "AOUAJ";
$GLOBALS;
$formation=array();
$formation[0]="Développement Web";
$formation[1]="Réseaux";
$formation[2]="Sécurité";
echo"portée 1 , le nom est :".$GLOBALS["nom"]."\n";
echo"les formations sont les suivantes : \n";
for($i=0;$i<count($formation);$i++){
    echo" $formation[$i] \n";
}
$utilisateur = [
"nom" => "Aouaj",
"prenom" => "safa",
"email" => "safa.aouaj@email.com",
"formation" => "Développement Web",
"age" => "20"
];
echo "Nom : " . $utilisateur["nom"] . "\n";
echo "Prénom : " . $utilisateur["prenom"] . "\n";
echo "Email : " . $utilisateur["email"] . "\n";
echo "Formation : " . $utilisateur["formation"]."\n";
echo "Age : " . $utilisateur["age"]."\n";

$formations = [
["nom" => "Développement Web", "duree" => "3 mois"],
["nom" => "Réseaux", "duree" => "2 mois"],
["nom" => "Sécurité", "duree" => "4 mois"]
];
foreach ($formations as $f) {
echo "Formation : " . $f["nom"] .
" - Durée : " . $f["duree"] . "\n";

}
if($utilisateur["age"]<=0){
    echo" veuillez saisir un age positif ";
}
else{
    echo"Votre âge est pris avec succés \n";
    echo"Bienvenue  " .$utilisateur["nom"]."  ".$utilisateur["prenom"];
}

?>