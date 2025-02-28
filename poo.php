<?php
/* class voiture
/* Caractéristique : marque, modèle, année et état : en panne, réparée
 * On utilise :
 * szq propriétés privées pour l'encapsulation
 * un constructeur pour initialiser les objets
 * des getters pour accéder et des setters pour les modifiers
 * une méthode qui permet d'afficher les détails de la voiture
 */

class Voiture{

    // propriétés privées
    private $marque;
    private $modele;
    private $annee;
    private $etat;

    // Constructeur : initialisation de la voiture

    public function __construct($marque, $modele, $annee, $etat = "en panne") {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->etat = $etat;
    }

    // Getter pour la marque
    public function getMarque() {
        return $this->marque;
    }
    // Getter pour le modèle
    public function getModele() {
        return $this->modele;
    }
    // Getter pour l'année
    public function getAnnee() {
        return $this->annee;
    }
    // Getter pour l'état
    public function getEtat() {
        return $this->etat;
    }

    // Setter pour modifier l'état de la voiture
    public function setEtat($nouvelEtat) {
        $this->etat = $nouvelEtat;
    }

    // Affichage des détails de la voiture
    public function afficherDetails(){
        echo "Voiture : " .$this->marque . " " . $this->modele . "(" . $this->annee . ") - Etat : " .$this->etat . "<br>";
    }
}

/* class Mecanicien
/* Caractéristique : nom
 * On utilise :
 * un constructeur pour initialiser le mécanicien
 * une méthode pour réparer la voiture (changement d'état de la voiture)
 * une méthode pour afficher le nom du mécanicien
 */

class Mecanicien {

    // propriétés privées
    private $nom;

    // Constructeur
    public function __construct($nom){
        $this->nom = $nom;
    }

    // Méthode pour réparer une voiture. C'est le mécanicien qui répare la voiture
    public function reparerVoiture(Voiture $voiture){
        echo "Le mécanicien " .$this->nom . " répare la voiture : ". $voiture->getMarque() . "<br>";
        $voiture->setEtat("réparée");
    }

    // Méthode pour afficher le nom du mécanicien

    public function afficherNom(){
        echo "Mécanicien : ".$this->nom . "<br>";
    }
}

// Exemples

// Création d'une voiture
$maVoiture = new Voiture("Skoda", "Scala", 2020);

// Récupérer la marque de la voiture
$maMarqueVoiture = $maVoiture->getMarque();
// var_dump($maMarqueVoiture);

// Affichage des détails de la voiture
$maVoiture->afficherDetails();

// Création d'un mécanicien
$monMecanicien = new Mecanicien("Jean");

// Afficher le nom du mécanicien
$monMecanicien->afficherNom();

// Le mécanicien répare la voiture
$monMecanicien->reparerVoiture($maVoiture);

// Affichage des détails de la voiture
$maVoiture->afficherDetails();