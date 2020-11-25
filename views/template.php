<html lang="en">
<?php require_once 'add.php'; ?>

<head>
    <title>Conciergerie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container-fluid">
        <div class="row text-center">
            <h2>Service Conciergerie <i><img src="img/image.jpg" style="width:100px"></i></h2>

            <div class="media">
                <div class="media-center">
                    <img src="img/img_avatar1.png" class="" style="width:220px">

                </div>
                <div class="media-body">
                    <h4 class="media-heading">M. Menard<small><br><i>2 route de Montaigü à Lons le Saunier</i></small>
                    </h4>


                </div>
                <div> <a  href="index.php?action=crud" > info intervention</a></div>
            </div>
        </div>
    </div>
    <div class="container">
  <h2>Administration</h2>
  <?php echo $contenuAafficher; ?>
  
