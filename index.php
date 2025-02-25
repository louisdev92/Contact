<?php
// Commentaire sur une ligne
/* commentaire sur
plusieurs lignes */

echo "Hello World !";

// Les Variables

// Variable
$maVariable = "Hello";

// Constante
define("PRENOM", "Olivier"); // ancienne méthode
const Age=38;

// Chaine de caractères
$chaine = "Je suis l'une des chaines de caractères";
echo  $chaine . "<br>";

// Interpolation (comme la concaténation sauf qu'on utilise "")
$interpolation = "Chaine précédente : $chaine";

// Booléen
$boolean = false; // or true

// Les tableaux

// Tableau indexé
$array = ["coucou", "je", 543, true];
print_r($array);

echo "Le troisième élément du tableau est : " . $array[2] . "<br>";

// Tableau associatif (similaire objet JS)
$object = [
    "prénom" => "Olivier",
    "age" => 38,
    "ville" => "Issoudun"
];

print_r($object);
echo "Ville : " . $object["ville"] . "<br>";

// Les opérateurs arithmétiques
echo "addition" .(4+8) . "<br>";

// Puissance
echo "Puissance" . (4**5) . "<br>";
echo "Puissance" . pow(4, 5) . "<br>";

// Les opérateurs d'affectation
$total = 0;
echo "Total : $total<br>";

$total = $total +1;
echo "Total : $total<br>";

$total++;
echo "Total : $total<br>";

$total += 4;
echo "Total : $total<br>";

// Les structures de contrôle (conditions)
$x = 3;
$y = 3;

if($x > $y) {
    echo "X est plus grand que Y<br>";
} elseif ($x < $y) {
    echo "Y est plus grand que X<br>";
} else {
    echo "X et Y sont égaux";
}

$bool = false;
if ($bool){
    echo "bool est vrai";
} else {
    echo "bool est faux";
}

if (!$bool) {
    echo "bool est faux mais l'inverse est vrai";
}

// Comparaison
if ($x == $y) {
    echo "X et Y sont égaux en valeurs <br>";
}

$x = 4;
$y = "4";
// Ici on test l'égalité en valeur et en type
if ($x !== $y) {
    echo "X et Y sont différents en type (ou en valeur) <br>";
}

// Les opérateurs logiques ( // et && )
if ($x < $y && $x > 3) {
    echo "Les deux conditions sont remplies<br>";
}

// LES STRUCTURES ITERATIVE (boucles)

// Boucle for
for ($i = 0; $i < 10; $i++) {
    echo "i= $i <br>";
}

// Création d'un tableau avec la boucle for
$tabBoucle =[];
for ($i = 0; $i < 10; $i++){
    $tabBoucle[] = $i * 2;
}
print_r($tabBoucle);

// Lecteur du tableau avec foreach
foreach ($tabBoucle as $Valeur) {
    echo "Valeur du tableau : $Valeur<br>";
}

// LES FONCTIONS

// Déclare une fonction
function mafonction(){
    echo "Ceci est une fonction <br>";
}
mafonction();

// Fonction avec retour de valeur
function returnFunction() {
    $message ="coucou<br>";
    return $message;
}
$retour = returnFunction();
echo $retour;

// fonction anonyme
$returnFunction2 = function (){
    return "fonction anonyme";
};
$retour2 = $returnFunction2();
echo "Retour de la fonction anonyme : $retour2<br>";

// Les fonctions fléchées
$addition = fn($a, $b) => $a + $b;
echo "addition : " . $addition(2,6) . "<br>";