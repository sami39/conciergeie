<?php

require_once 'models/Models.php';
function Add(){
    $recipes=new Rajout;
    $recipes->Ajout();
   // var_dump ($recipes);
    echo"intervention enregistrer ";
    require 'views/template.php';
}
    
function all(){
$alls=new Rajout;
$alls=$alls->Afich();
//var_dump($alls);

require 'views/all.php';
}
function modif(){
$modifier=new Rajout;

$modifier=$modifier->update();


require 'views/all.php';

}
function supr(){
    $modifier=new Rajout;
    
    $modifier=$modifier->delete();
    
    
    require 'views/all.php';
    
    }
    function search(){
        $search = new Rajout(); 
        $searching = $search->search(); 
        require_once 'views/all.php';
    }