<?php 
// 1.	Créer et initialiser deux nombres, calculer leur addition et afficher « l’addition du nombre 1 et du nombre 2 est égale à _____.
$num1 = 5;
$num2 = 13;
echo "1. l'addition du nombre $num1 et du nombre $num2 est égale à : " . $num1 + $num2 . "\n";
// 2.	Quels sont les différents types de données en PHP et l’illustrer en définissant une variable de chaque type

$string = "2. Liste des types.. \n";
echo $string;
$boolean = true;
$int = 2;
$float = 2.5;

$newArray = [];
// $object = new classExistante;
// $function = readline("Ceci est une fonction : ");

$autre = null;

/*3.	Créer deux variables :
        a.     isActive, de type booléan initialisée à ‘false’
        b.	genre, de type chaine de caractère initialisée à ‘Troll’
        c.	Faire un test qui affiche « Le compte du personnage troll est actif. », si l’état du compte est actif et si c’est un troll; « Le compte du personnage troll est inactif. » si c’est inactif et si c’est un troll;
*/
echo "3. ";

$isActive = false;
$genre = "Troll";
if ($genre == "Troll" && $isActive == false) {
    echo "Le compte du personnage troll est inactif.";
} elseif ($genre == "Troll" && $isActive == true) {
    echo "Le compte du personnage troll est actif.";
} else {
    echo "Le compte n'est pas un troll";
};
// 4.	Déterminer si un nombre est pair ou impair. Et refaire la même chose mais avec une condition ternaire.
echo "\n4. ";

$num3 = 5;
if ($num3&1) {
    echo "le chiffre $num3 est impair";
}   else {
    echo "le chiffre $num3 est pair";
};
echo "\n";
$num4 = 4;
echo ($num4&1 ? "le chiffre $num4 est impair" : "le chiffre $num4 est pair");

// 5.	Vérifier si un nombre est un multiple de 3 et de 5.

echo "\n5. ";

$num6 = 45;
echo (
    $num6 %3 == 0 && $num6 %5 == 0 ? "$num6 un multiple de 3 ET de 5"
    : "$num6 n'est pas un multiple de 3 et de 5 à la fois"
);

// 6.	Calculer la valeur absolue d’un nombre ex (-5 = 5 ; 1 = 1)
echo "\n6. ";

$num7 = -12;
echo "valeur absolue de $num7 est " . abs($num7);

/*7.	Afficher le jour de la semaine en lettres en fonction du nombre ex :
        a.	1=> lundi
        b.	2 => mardi
        c.	… 7=> samedi
*/
echo "\n7. ";

$afficher = (int)readline("Entrez un nombre pour trouver le jour de la semaine : ");
switch ($afficher) {
    case '1':
        echo "lundi";
        break;
    case '2':
        echo "mardi";
        break;
    case '3':
        echo "mercredi";
        break;
    case '4':
        echo "jeudi";
        break;
    case '5':
        echo "vendredi";
        break;
    case '6':
        echo "samedi";
        break;
    case '7':
        echo "dimanche";
        break;
    default:
        echo "Vous devez rentrer un chiffre entre 1 et 7";
        break;
};

// 8.	Créer une fonction qui reçoit 2 nombres en paramètres et affiche tous les nombres entre les deux nombres donnés en paramètres.
echo "\n8. ";

function combien($num8,$num9) {
    echo "les nombres entre $num8 et $num9 : \n";
    for ($i = $num8+1; $i <$num9; $i++ ) {
        echo "\n -" . $i;
    };
};
combien(2,5);

// 9.	Créer une fonction qui prend 4 paramètres. Afficher un message qui vérifie si la somme des 2 premiers paramètres est supérieure, inférieure ou égale à la multiplication des deux derniers paramètres.
echo "\n9. ";

function compare ($a,$b,$c,$d) {
    $res1 = $a + $b;
    $res2 = $c*$d;
    
    echo ($res1 < $res2 ? "inférieur" : "supérieur");
    echo ($res1 == $res2 ? "égaux" :"");
};
compare(1,2,1,2);

// 10.	Créer une fonction qui prend en paramètre un tableau de nombres et affiche deux tableaux, l’un de nombres pairs et l’autre de nombres impairs.
echo "\n10. ";

$array = [1,2,3,4,5,6,7,8];

function pairImpair ($array) {
    $arrayPair = [];
    $arrayImpair = [];
    for ($i = 0; $i < count($array); $i++ ) {
        $array[$i]&1 ? array_push($arrayImpair, $array[$i]) : array_push($arrayPair, $array[$i]);
        print_r($arrayImpair);
        print_r($arrayPair);

    }
};
pairImpair($array);

// 11.	Ecrire une fonction qui prend en paramètre un tableau de nombres et retourne un tableau contenant que des nombres divisibles par 3.
echo "\n11. ";

$numArray = [1,3,15,2,4,9,45];
function byThree ($numArray) {
    $threeArray = [];
    for ($i = 0; $i < count($numArray); $i++) {
        $numArray[$i] %3 == 0 ? array_push($threeArray, $numArray[$i]) : "";
};
print_r($threeArray);
};
byThree($numArray);

// 12.	Ecrire une fonction qui calcule la somme des nombres dans le tableau passé en paramètre et retourne le résultat.
echo "\n12. ";

$array2 = [1,2,5];
function sum($array2) {
    print_r(array_sum($array2));
};
sum($array2);

// 13.	Ecrire une fonction qui calcule la moyenne des nombres dans le tableau passé en paramètre et retourne le résultat.
echo "\n13. ";

$array3 = [1,2,3];
function average($array3) {
    print_r(array_sum($array3) / count($array3));
};
average($array3);
?>