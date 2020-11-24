<?php ob_start();?>
<form method='GET' action ="index.php">
    <div class="form-group">
        <label for="usr">type intervention:</label>
        <input type="text" name="type"  class="form-control" id="usr">
    </div>
    <div class="form-group">
        <label>Date:</label>
        <input type="date" name="date" >
    </div>
    <label for="appt"></label>
    <br>

    <div class="form-group">
        <label>Etage:</label>
        <input type="number" name="etage" placeholder=" Numero etage" class="form-control">
    </div>
    <div class="form-group">
        <label for="usr">logement:</label>
        <input type="number" name="log" placeholder="numero logement" class="form-control" id="usr">
    </div>
    <button  type="submit" value="ajouter" nom="action" class=" btn-secondary btn-lg">ajouter intervention</button>
</form>

<?php
$contenuAafficher =  ob_get_clean();
require_once 'views/template.php'; ?>