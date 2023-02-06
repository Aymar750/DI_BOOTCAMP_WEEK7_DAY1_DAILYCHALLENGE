<?php
  // Définition de la classe Utilisateur
  class Utilisateur {
    public $firstName;
    // Méthode pour dire bonjour à l'utilisateur
    public function hello() {
      return "hello, " . $this->firstName;
    }
    

  }

  function test() {
    $user1 = new Utilisateur();
    $user1->firstName = "Jonnie";
  
    echo $user1->hello();
  }
  
  test();