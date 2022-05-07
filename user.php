<?php
include 'connect.php';
if(isset($_POST['submit'])){
    
    $id_res=$_POST['id_res'];
    $id_user=$_POST['id_user'];
    $prix=$_POST['prix'];
    $des=$_POST['des'];

    $sql="insert into `crud`(id_res,id_user,prix,des)
    values('$id_res','$id_user','$prix','$des')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "data inserted successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>


<?php 
$html = "contenu à imprimer";
?>

<div id="imprimer" style="display:none;">
	<?php echo $html; ?>
</div>



<script type="text/javascript">     
function imprimer() {    
	var imprimer = document.getElementById('imprimer');
	var popupcontenu = window.open('', '_blank');
	popupcontenu.document.open();
	popupcontenu.document.write('<html><body onload="window.print()">' + imprimer.innerHTML + '</html>');
	popupcontenu.document.close();
}
</script>




<!DOCTYPE html>
<html>

<head>
<!-- Include Bootstrap for styling -->
<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

<style>
	.qr-code {
	max-width: 200px;
	margin: 10px;
	}
</style>

<title>QR Code Generator</title>
</head>

<body>
<div class="container-fluid">
	<div class="text-center">

	<!-- Get a Placeholder image initially,
	this will change according to the
	data entered later -->
	<img src=
"https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
		class="qr-code img-thumbnail img-responsive" />
	</div>

	<div class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-2"
		for="content">
		Content:
		</label>
		<div class="col-sm-10">

		<!-- Input box to enter the
			required data -->
		<input size="60"
			maxlength="60" class="form-control"
			id="content" placeholder="Enter content" style="background-color: #FF6600" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">

		<!-- Button to generate QR Code for
		the entered data -->
		<button type="button" class=
			"btn btn-default" id="generate">
			Generate
		</button>
		</div>
	</div>
	</div>
</div>
<script src=
	"https://code.jquery.com/jquery-3.5.1.js">
</script>

<script>
	// Function to HTML encode the text
	// This creates a new hidden element,
	// inserts the given text into it
	// and outputs it out as HTML
	function htmlEncode(value) {
	return $('<div/>').text(value)
		.html();
	}

	$(function () {

	// Specify an onclick function
	// for the generate button
	$('#generate').click(function () {

		// Generate the link that would be
		// used to generate the QR Code
		// with the given data
		let finalURL =
'https://chart.googleapis.com/chart?cht=qr&chl=' +
		htmlEncode($('#content').val()) +
		'&chs=160x160&chld=L|0'

		// Replace the src of the image with
		// the QR code image
		$('.qr-code').attr('src', finalURL);
	});
	});
</script>
</body>

</html>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  
    <title>crud</title>
    <scr
  </head>
  <body onload="window.print()">

  <style>

body {
  
 
}
</style>
  <body>
    <div class="container my-5">
    <form method="post">
  <div style="background-color: #FF6600" class="mb-3">
    <label >id reservation</label>
    <input class="form-control"
    placeholder="enter your id reservation" id="id_res" name="id_res" >
    <span id="cidres"></span>

</div>
<div style="background-color: #FF6600" class="mb-3">
    <label >id user</label>
    <input type="id_user" class="form-control"
    placeholder="entrer your id user"  id="ml" name="id_user" size="10" >
    <span id="ciduser"></span>

</div>
<div style="background-color: #FF6600" class="mb-3">
    <label >price</label>
    <input type="number" class="form-control" 
    placeholder="enter price " id="number"  name="prix" >
    <span id="cnumber"></span>

</div>
<div style="background-color: #FF6600" class="mb-3">
    <label >description</label>
    <input class="form-control"
    placeholder="enter your description" id="description" name="des" >
    <span id="cdescription"></span>


</div>

<input type="button" value="imprimer" onclick="window.print();" />

  <button class="btn btn-warning" type="submit" onclick="verif()" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
  </body>
  <script src="verif.js">

    
    
</script>
</html>