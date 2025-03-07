<?php
// Commentaire sur une ligne
/* Commentaire sur
plusieurs lignes */

echo "Hello world !<br>";

// Les variables
$maVariable = "Hello"; // Déclaration d'une variable avec $

var_dump($maVariable);

// Constante
define("PRENOM", "Sacha"); // Ancienne méthode maintenant dépréciée
const AGE = 38; // Méthode actuelle

// Chaine de caractères
$chaine = "<br>Je suis l'une des chaines de caractères"; // Ou : 'Je suis l\'une des chaines de caractères'
echo $chaine . "<br>";

// Interpolation (comme la concaténation sauf qu'on utilise "")
$interpolation = "Chaine précédente : $chaine";

// Booléen
$boolean = false; // or true

//Les tableaux

//Les tableaux indexés
$array = ["Coucou", "je", 543, true];
print_r($array);

echo "Le troisième élément du tableau est : " . $array[2] . "<br>";

// Les tableaux associatifs (array en JS ou dictionnaires en python)
$object = [
    "prenom" => "Sacha",
    "age" => 18,
    "ville" => "Blois"
];

print_r($object);
echo "Ville : " . $object["ville"] . "<br>";


// Les opérateurs arithmétiques
echo "Addition : " . (4+8) . "<br>";
echo "Puissance (**) : " . (4**5) . "<br>";
echo "Puissance (pow) : " . pow(4, 5) . "<br>";


// Les opérateurs d'affectation
$total = 0;
echo "Total : $total<br>";

$total = $total + 1;
echo "Total : $total<br>";

$total++;
echo "Total (++) : $total<br>";

$total += 1;
echo "Total (+=) : $total<br>";


// Les structures de contrôle (conditions)
$x = 5;
$y = 3;

if ($x > $y){
    echo "X est plus grand que Y<br>";
} elseif ($x < $y){
    echo "Y est plus grand que X<br>";
} else {
    echo "X et Y sont égaux<br>";
}

$bool = false;
if ($bool){
    echo "bool est vrai<br>";
} else {
    echo "bool est faux<br>";
}

if (!$bool){
    echo "bool est faux mais l'inverse est vrai<br>";
} else {
    echo "bool est vrai mais l'inverse est vrai<br>";
}

// Avec condition ternaire
echo $bool ? "bool est vrai<br>" : "bool est faux<br>";

// Comparaison
if ($x == $y){
    echo "X et Y sont égaux en valeur<br>";
}

$x = 4;
$y = "4";
//Ici, on teste l'égalité en valeur et en type
if ($x !== $y){
    echo "X et Y sont différents en type (ou en valeur)<br>";
}

// Les opérateurs logiques (// et &&)
if ($x < $y && $x > 3){
    echo "Les deux conditions sont remplies<br>";
}


// Les structures itératives (boucles)
// Boucle for
for($i = 0; $i < 10; $i++) {
    echo "i = $i<br>";
}

// Création d'un tableau avec la boucle for
$tabBoucle = [];
for($i = 0; $i < 10; $i++) {
    $tabBoucle[] = $i * 2;
}
print_r($tabBoucle);

// Lecture du tableau avec foreach
foreach ($tabBoucle as $valeur) {
    echo "Valeur du tabeau : $valeur<br>";
}


// Les fonctions
// Déclarer une fonction
function maFonction() {
    echo "Ceci est une fonction<br>";
}

maFonction();

function maFonctionParams($id) {
    echo "Ceci est une fonction avec un paramètre : $id<br>";
}

maFonctionParams(4);

function returnFunction() {
    $message = "Coucou<br>";
    return $message;
}

$retour = returnFunction();
echo $retour;

// Fonction anonyme
$returnFunction2 = function () {
    return "Fonction anonyme";
};
$retour2 = $returnFunction2();
echo "Retour de la fonction anonyme : $retour2<br>";

// Les fonctions fléchées
$addition = fn($a, $b) => $a + $b;
echo "Addition : " . $addition(2, 6) . "<br>";