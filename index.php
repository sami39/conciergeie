<?php
require_once ("controleur/Controleur.php");

if (isset ($_GET['action'])&&($_GET['action']=='ajouter'))
{

    Add();

}
else if (isset($_GET['action'])&&($_GET['action']=='crud')){   
    all();
}
else if (isset($_GET['action'])&&($_GET['action']=='modifier')){
    modif();

}
else if (isset($_GET['action'])&&($_GET['action']=='supprimer')){

    supr();
}
else if(isset($_GET['search'])&&($_GET['search']=='action')){
    search();
 }


else {

    require 'views/template.php';
}
 