<?php

require_once ("Model.php"); 

class ModelContact extends Model{

  private $id_contact;
  private $nom_prenom;
  private $email;
  private $message;
  protected static $table = 'contact';
  protected static $primary = 'id_contact ';
   
  /* Constructeur 
  public function __construct($id_contact = NULL, $nom_prenom = NULL, $email = NULL, $message = NULL) {
    if (!is_null($id_contact) && !is_null($nom_prenom) && !is_null($email)) && !is_null($message)) {
      $this->id_contact = $id_contact;
      $this->nom_prenom = $nom_prenom;
      $this->email = $email;
      $this->message = $message;
     }
  } 
  */
 public function getId_contact() {
       return $this->id_contact;  
  }
 public function getNom_prenom() {
       return $this->nom_prenom;  
  }
  public function getEmail() {
    return $this->email;  
}
  public function getMessage() {
       return $this->message;  
  }
}
?>