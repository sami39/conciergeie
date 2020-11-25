<?php

require_once 'Database.php';
class Rajout extends Connexion {
    public function Ajout(){
        
        
      
            $ajouter = $this->connect()->prepare('INSERT INTO intervention (type_inter,date_inter,heure_inter,heure_fin,etage,logement,chez_nom_client) VALUES (:type_of,:datess,:heure,:heure_f,:etages,:number_of,:name_clie)');
            $ajouter->bindParam(':type_of', $_GET['type'],PDO::PARAM_STR);
            $ajouter->bindParam(':datess', $_GET['date'],PDO::PARAM_STR);
            $ajouter->bindParam(':heure', $_GET['appt'],PDO::PARAM_STR);
            $ajouter->bindParam(':heure_f', $_GET['apptt'],PDO::PARAM_STR);
            $ajouter->bindParam(':etages', $_GET['etage'],PDO::PARAM_INT);
            $ajouter->bindParam(':number_of', $_GET['log'],PDO::PARAM_INT);
            $ajouter->bindParam(':name_clie', $_GET['chez'],PDO::PARAM_STR);
            $estceok=$ajouter->execute();
          // $ajouter->debugDumpParams();
            if ($estceok){

                return "ajouter";
            }
            else{
                return "ereur";
            }
          
    }
    public function Afich(){
    $afficher= $this->connect()->prepare('SELECT * FROM intervention ORDER BY date_inter desc') ;
    $afficher->execute();
    $resolt=$afficher->fetchAll(); 
    return $resolt;
 

    } 
    
    
    public function update(){
        $modifier = $this->connect()->prepare('UPDATE intervention SET type_inter = :types,date_inter=:date, heure_inter=:heure,heure_fin=:heure_f,etage=:etage_c,logement=:num_log,chez_nom_client=:nom_cl WHERE id = :id');
        $ajouter->bindParam(':types', $_GET['typess'],PDO::PARAM_STR);
        $ajouter->bindParam(':date', $_GET['date'],PDO::PARAM_STR);
        $ajouter->bindParam(':heure', $_GET['heure'],PDO::PARAM_STR);
        $ajouter->bindParam(':heure_f', $_GET['heure_fin'],PDO::PARAM_STR);
        $ajouter->bindParam(':etage_c', $_GET['etage'],PDO::PARAM_INT);
        $ajouter->bindParam(':num_log', $_GET['logement'],PDO::PARAM_INT);
        $ajouter->bindParam(':nom_cl', $_GET['nom_client'],PDO::PARAM_STR);
        $modifier->bindParam(':id', $_GET['id'],PDO::PARAM_INT);
        $modifier=$modifier->execute();
        require 'views/all.php'; 
}
     
public function delete(){


    $supprimer = $this->connect()->prepare('DELETE From intervention WHERE id=:id');
    $supprimer->bindParam(':id', $_GET['id']);
    $supprimer->execute();
}

public function search(){
        
    
       $search = $this->connect()->prepare('SELECT * FROM intervention WHERE logement LIKE "%":search"%"');
        $search->bindParam(':search', $_GET['search']);

    
   }
}


 ?>


