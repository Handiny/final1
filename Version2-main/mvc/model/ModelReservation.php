<?php

require_once ("Model.php"); 

class ModelReservation extends Model{

  private $id_locateur;
  private $id_voiture;
  private $message;
  private $date_deb;
  private $date_fin;
  private $id_reservation;
  protected static $table = 'reservation';
  protected static $primary = 'id_reservation';
   
  /*public function __construct($id_locateur = NULL, $id_voiture = NULL, $message = NULL, $date_deb=NULL, $date_fin=NULL) {
      $this->id_locateur = $id_locateur;
      $this->id_voiture= $id_voiture;
      $this->message = $message;
      $this->date_deb=$date_deb;
      $this->date_fin=$date_fin;
     } */
 public function getId_locateur() {
       return $this->id_locateur;  
  }
 public function getId_voiture() {
       return $this->id_voiture;  
  }
  public function getMessage() {
       return $this->message;  
  }
  public function getDate_deb() {
    return $this->date_deb;  
}
public function getDate_fin() {
    return $this->date_fin;  
}
public function getId_reservation() {
    return $this->id_rservation;  
}
}
?>
