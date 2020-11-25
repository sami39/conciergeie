<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personelle</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>

<?php require_once 'views/search.php'; ?>
<script type="text/javascript">
	                $(document).ready(function(){
	                               $("#monModal").modal('show');
	                });
	</script>
<body>

<?php echo $contenuSearch ; ?>

    <div class="container-fluid">
        <div class="row justify-content-center">


            <table class="table">
                <!-- entete du tableau -->
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">intervention</th>
                        <th scope="col">date </th>
                        <th scope="col"> heure debut Intervention</th>
                        <th scope="col"> heure fin Intervention</th>
                        <th scope="col"> Numero etage</th>
                        <th scope="col"> numero logement</th>
                        <th scope="col"> chez M/Mm</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <!-- corps du tableau -->
                <tbody>
                    <!-- On crée la requête qui nous permet de récupérer toutes les interventions -->
                    <?php

        foreach($alls as $ligne){
            echo "<tr scope='row'>";
                echo "<td><b>".$ligne['id']."</b></td>";
                echo "<td>".$ligne['type_inter']."</td>";
                echo "<td>".$ligne['date_inter']."</td>";
                echo "<td>".$ligne['heure_inter']."</td>";
                echo "<td>".$ligne['heure_fin']."</td>";
                echo "<td>".$ligne['etage']."</td>";
                echo "<td>".$ligne['logement']."</td>";
                echo "<td>".$ligne['chez_nom_client']."</td>";
                echo "<td><a href='?action=modifier &id=".$ligne['id']."&typess=".$ligne['type_inter']."&date=".$ligne['date_inter']."&heure =".$ligne['heure_inter']."&heure_fin =".$ligne['heure_fin']."&etage=".$ligne['etage']."&logement=".$ligne['logement']."&nom_client=".$ligne['chez_nom_client']."'class='btn btn-warning'>modifier</a> - <a href='?action=supprimer&id=".$ligne['id']."' class='btn btn-danger'>Supprimer</a></td>";
            echo "</tr>";

            

        }
  
        ?>


                </tbody>
            </table>


        </div>
    </div>
    <div class="modal fade" id="modifTask<?= $ligne['id'] ?>" tabindex="-1"
        aria-labelledby="modifTask<?=$ligne["id"] ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modification de la tache <?= $ligne['type_inter'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="ajoutcinter" method="GET" value="action" action="?action=modifier">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $ligne['id'] ?>" />
                            <input type="text" placeholder="type intervention" value="<?=$ligne["type_inter"] ?>"
                                name="typess" class="form-control"></input><br />
                            <input type="date" placeholder="date  intervention" value="<?=$ligne["date_inter"]?>"
                                name="date" class="form-control"></input><br />
                            <input type="time" placeholder="heure debut intervention" value="<?=$ligne["heure_inter"]?>"
                                name="heure" class="form-control"></input><br />
                            <input type="time" placeholder="heure fin intervention" value="<?=$ligne["heure_fin"]?>"
                                name="heure_fin" class="form-control"></input><br />
                            <input type="number" placeholder="etage N" value="<?=$ligne["etage"]?>" name="etage"
                                class="form-control"></input><br />
                            <input type="number" placeholder="logement N" value="<?=$ligne["logement"]?>"
                                name="logement" class="form-control"></input><br />
                            <input type="text my-5" placeholder="nom client" value="<?=$ligne["chez_nom_client"] ?>"
                                name="nom_client" class="form-control"></input><br />


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>