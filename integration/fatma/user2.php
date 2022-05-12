<?php
include 'connect2.php';
if(isset($_POST['submit'])){
   
    $nom=$_POST['nom'];
    $mail=$_POST['mail'];
    $num_c=$_POST['num_c'];
    $date=$_POST['date'];




    $sql="insert into `commande`(nom,mail,num_c,date)
    values('$nom','$mail','$num_c','$date')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "data inserted successfully";
        header('location:display2.php');
    }
    else{
        die(mysqli_error($con));
    }
}


?>


<?php 
?>

<div id="imprimer" style="display:none;">
	<?php echo $html; ?>
</div>


<script type="text/javascript">     

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
    
    <title>commande</title>
    <scr
  </head>
  <body >

  <style>
body {

}
</style>
  <body>
    <div class="container my-5" style="background-color: #FF6600; border: 2px solid; border-radius 10px;">
    <form method="post" id=myForm>
  <div  style="width=250px;"  class="mb-3">
    <label >name</label>
    <input class="form-control"  style="width:200px"
    placeholder="enter your name" id="nom" name="nom" >
    <span id="cmon"></span>
</div>
<div  style="width=250px;" class="mb-3">
    <label >mail</label>
    <input type="mail" class="form-control "  style="width:200px"
    placeholder="enter your mail"   id="ml" name="mail"  >
    <span id="cemail" style="color:#FF0000"> </span>

</div>
<div style="  width=230px;" class="mb-3">
    <label >order number</label>
    <input type="number" class="form-control" style="width:200px"
    placeholder="enter the order number " name="num_c" >
</div>
<div style="  width=230px; " class="mb-3">
    <label >date</label>
    <input type="date" class="form-control"  style="width:200px" value="2022-05-08"
       min="2022-05-08" max="2022-12-25"
    placeholder="enter date" name="date" >
</div>

<button type="button" class="btn btn-sm btn-outline-secondary" onclick=" window.print();">Export</button>

  <button class="btn btn-warning" type="submit" onclick="verif2()" class="btn btn-primary" style="color=#000000"  name="submit">Submit</button>
</form>
</div>

  </body>

  <script src="verif2.js">

    
    
</script>
</html>