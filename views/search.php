
<?php ob_start();?>


<nav class="navbar navbar-default navbar-inverse">

      <form method='GET' class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="number" name="search"  class="form-control" placeholder="Search">
        </div>
        <button type="submit" value="action" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></button>
     </form>

</nav>
<br><br>
<?php

$contenuSearch =  ob_get_clean();
require_once 'views/all.php'; ?>