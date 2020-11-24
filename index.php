<?php
require_once ("controleur/Controleur.php");

if (isset ($_GET['action'])&&($_GET['action']=='ajouter'))
{

    Add();

}

 
else {

    require 'views/template.php';
}
