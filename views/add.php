<?php ob_start();?>
<form method='GET' action ="index.php">
    <div class="form-group">
        <label for="usr">type intervention:</label>
        <input type="text" name="type"  class="form-control" id="usr">
    </div>
    <div class="form-group">
        <label>Date:</label>
        <br>
        <input type="date" name="date" >
    </div>
    <label for="appt">heure debut intervention:</label>
    <br>
   
<input type="time" id="appt" name="appt"
       min="09:00" max="18:00" required>

<br>
    <label for="appt"></label>
    <br>
    <label for="appt">heure fin intervention:</label>
    <br>

<input type="time"  name="apptt"
       min="09:00" max="18:00" required>

<br> <br>
    <div class="form-group">
        <label>Etage:</label>
        <input type="number" name="etage" placeholder=" Numero etage" class="form-control">
    </div>
    <div class="form-group">
        <label for="usr">logement:</label>
        <input type="number" name="log" placeholder="numero logement" value="" class="form-control" id="usr">
    </div>
    <div class="form-group">
        <label for="usr">chez M/Mme:</label>
        <input type="text" name="chez" placeholder="nom client" value="" class="form-control">
    </div>
    <button  type="submit" value="ajouter" name="action" class=" btn-secondary btn-lg">ajouter intervention</button>
</form>

<?php
$contenuAafficher =  ob_get_clean();
require_once 'views/template.php'; ?>