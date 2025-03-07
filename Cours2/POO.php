<?php
/* Class Voiture
 * Caractéristiques : marque, modèle, année et état : en panne, réparée
 * On utilise :
 * des propriétés privées pour l'encapsulation
 * un constructeur pour initialiser les objets
 * des getters pour accéder aux données et des setters pour les modifier
 * une méthode qui permet d'afficher les détails de la voiture
*/

class Voiture {
    // Propriétés privées (Encapsulation)
    private $marque;
    private $modele;
    private $annee;
    private $etat;

    // Constructeur : initialisation de la voiture avec un état en panne à l'initialisation
    public function __construct($marque, $modele, $annee, $etat = "En panne") {
        $this -> marque = $marque;
        $this -> modele = $modele;
        $this -> annee = $annee;
        $this -> etat = $etat;
    }

    // Affichage des détails de la voiture
    public function afficherDetails() : void {
        echo "Voiture : " . $this -> marque . " " . $this -> modele . " (" . $this -> annee . ") - Etat : " . $this -> etat . "<br>";
    }

    // Getters
    public function getMarque() {
        return $this -> marque;
    }
    public function getModele() {
        return $this -> modele;
    }
    public function getAnnee() {
        return $this -> annee;
    }
    public function getEtat() {
        return $this -> etat;
    }

    // Setters
    public function setMarque($marque) : void {
        $this -> marque = $marque;
    }
    public function setModele($modele) : void {
        $this -> modele = $modele;
    }
    public function setAnnee($annee) : void {
        $this -> annee = $annee;
    }
    public function setEtat($etat) : void {
        $this -> etat = $etat;
    }

}

/* Class Mecanicien
 * Caractéristiques : nom
 * On utilise :
 * un constructeur pour initialiser le mécanicien
 * une méthode qui permet de réparer la voiture (changement d'état de la voiture)
 * une méthode qui permet d'afficher le nom du mécanicien
*/

class Mecanicien {
    // Propriétés privées
    private $nom;

    // Constructeur
    public function __construct($nom) {
        $this -> nom = $nom;
    }

    // Méthode pour réparer une voiture. C'est le mécanicien qui répare la voiture
    public function repare(Voiture $voiture) : void {
        $voiture -> setEtat("Réparée");
        echo " - - - En cours de réparation par : " . $this -> nom . " - - - <br>";
        $voiture -> afficherDetails();
    }

    public function afficheNom() : void {
        echo "Le mécanicien s'appelle " . $this -> nom . "<br>";
    }
}

// Exemples d'utilisation

// Création d'une voiture
$maVoiture = new Voiture("Skoda", "Scala", 2020);
$monMecano = new Mecanicien("Mathieu");

$maMarque = $maVoiture -> getMarque();
$monMecano -> afficheNom();

$maVoiture -> afficherDetails();

$monMecano -> repare($maVoiture);
