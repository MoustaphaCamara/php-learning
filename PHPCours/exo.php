<?php 
// $prenom = "Marc";
// $nom = "Airlines";
// $note1 = 10;
// $note2 = 20;
// $moyenne = ($note1+$note2)/2;
// echo ("Bonjour $prenom $nom, vous avez eu $moyenne de moyenne");

// TABLEAUX

// $notes = [10,20];
// echo $notes[0];
// $eleve = ["Marc","Airlines",[10,20,15]];
// echo $eleve[2][1]

// CLEFS :
// $eleve = [
//     "nom" => "Airlines",
//     "prenom" => "Marc",
//     "notes" => [10,20,15]
// ];
// echo $eleve["notes"][2];

// $eleve ["prenom"] = "Maaaaaaarc";

// echo " ". $eleve["prenom"];

// $eleve["notes"][] = 12 ;/* ajouter un élément à la fin du tableau */
// print_r($eleve["notes"]);

// readline : entre une info
// int --> on précise que c'est un number
// CONDITIONS
// $note = (int)readline("Entrez votre note : ");
// if ($note > 10) {
//     echo "Bravo vous avez la moyenne";
// } elseif ($note === 10) {
//     echo "Vous avez tout juste la moyenne";
// } else {
//     echo "Dommage, vous n'avez pas la moyenne";
// }


// $action = (int)readline("Entrez votre action (1 : attaquer, 2: défendre, 3: passer mon tour) : ");

// -------------------------- VERSION IF
// if ($action === 1) {
//     echo "J'attaque !";
// } elseif ($action === 2) {
//     echo "Je défends.";
// } elseif ($action === 3) {
// echo "Je passe mon tour.";
// } else {
//     echo "Commande inconnue";
// }

// -------------------------- VERSION SWITCH CASE
// switch ($action) {
//     case 1:
//         echo "J'attaque";
//         break;
//     case 2:
//         echo "Je défends";
//         break;
//     case 3:
//         echo "je ne fais rien";
//         break;
//     default:
//         echo "inconnu au bataillon";
//         break;
// }

// $heure = (int)readline("Entrez une heure : ");
// on peut écrire && et || (2 barres du 6)
// vaut mieux && pour vérifier les conditions vrai && vrai, vrai && faux etc.
// ------------- HEURES
// if (($heure >= 9 and $heure <= 12) or ($heure >13 and $heure <=17)) {
//     echo "magasin ouvert";
// } else {
//     echo "là c'est fermé";
// }

// ---------------- BOUCLES WHILE, FOR, FOREACH
$chiffre = null;
// while ($chiffre !== 10) {
//     $chiffre = (int)readline("Entrez une valeur de 10 : ");
//     // si on met un break, on sort même si condition pas remplie
// }
// echo 'Bravo, vous avez gagné'
// BOUCLE FOR COMME EN JS

// FOREACH
// $notes = [10,15,16];
// foreach($notes as $note) {
//     echo "- $note \n";
// }

// $eleves = [
//     "cm2" => ["Jean","Pierre","Jeanne","Marion"],
//     "cm1" => ["Marc","Marciane","Marcelle"]
// ];
// foreach($eleves as $classe => $listEleves) {
//     echo "Voici la classe $classe \n";
//     foreach($listEleves as $eleve) {
//         echo "- $eleve \n";
//     };
//     echo "\n";
// };


// demande à l'user de rentrer des notes ou de taper "fin"
// note sauvegardée dans un tableau appelé $notes
// à la fin on affiche tableau de notes sous forme de liste

$notes = [];
$action = null;

while ($action !== "fin") {
    $action = readline("Entrez une note svp (ou 'fin' pour terminer la saisie) : ");
    if ($action !== "fin") {
        $notes[]= (int)$action;
    };
};
foreach($notes as $note) {
    echo "- $note \n";
};
?>


