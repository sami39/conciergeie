<?php
require_once 'Database.php';
class Rajout extends Connexion {
    public function Ajout(){
        
        
      
            $ajouter = $this->connect()->prepare('INSERT INTO intervention (type_inter,date_inter,etage,logement) VALUES (:type_of,:datess,:etages,:number_of)');
            $ajouter->bindParam(':type_of', $_GET['type'],PDO::PARAM_STR);
            $ajouter->bindParam(':datess', $_GET['date'],PDO::PARAM_STR);
            $ajouter->bindParam(':etages', $_GET['etage'],PDO::PARAM_INT);
            $ajouter->bindParam(':number_of', $_GET['log'],PDO::PARAM_INT);

            $estceok=$ajouter->execute();
          // $ajouter->debugDumpParams();
            if ($estceok){

                return "ajouter";
            }
            else{
                return "ereur";
            }
          
    }
   
}

 ?>


