<?php

 class Connexion
{
    public function connect()
        {
        try
        {
            $bdd = new PDO('mysql:host=localhost;port=3306;dbname=conciergerie;charset=utf8','root','');
            return $bdd;
           
         
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        }
}
?>