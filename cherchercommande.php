
<?php
include 'connect.php';
$sql=("Select * from commande INNER JOIN crud ON commande.crud= crud.id_res");
                



<!doctype html>
<html lang="en">
  

<div class="form-container">
<form actior-"" method = "POST">
<div class="row">
<div class="col-25">
<label>Search:&nbsp; <input type="text" name="T1" size="20"></label></div>
</div>
<div class="col-75">


<?php

?>
</div>
<br>
<div class="row">
 <input type="submit" value="search" name = "search">
 <button class="btn btn-warning" type="submit" class="btn btn-primary" name="submit">cherhcher</button>
 </div>
 </form>
 </div>
 </body>

</html>