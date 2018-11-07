<?php

class Stagiaires {

    private $nom;
    private $prenom;
    private $telephone;
    private $mail;
    private $url_cv;
    private $date_ajout;

    //constructeur
    public function __construct(string $nom,string $prenom,string $telephone,string $mail,string $url_cv,string $date_ajout) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
        $this->mail = $mail;
        $this->url_cv = $url_cv;
        $this->date_ajout = $date_ajout;
    }


    //getters et setters
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getUrlCv() {
        return $this->url_cv;
    }

    public function getDateAjout() {
        return $this->date_ajout;
    }

    //setter
    public function setNom($nom) {
        if(is_string($nom)) {
            $this->nom = $nom;
        }
    }

    // méthode retournant l'ensemble des stagiaires
    public static function getAll() {
        return App::getDb()->query('SELECT * FROM stagiaires');
    }
  


}

?>