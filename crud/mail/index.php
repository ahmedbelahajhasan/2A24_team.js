<!DOCTYPE html>
<html>
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;900&family=Jost:wght@300&family=Lato&family=Rubik+Microbe&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;900&family=Jost:wght@300&family=Lato:wght@400;700&family=Rubik+Microbe&display=swap" rel="stylesheet">
    <link href="../CSSFiles/button.css" rel="stylesheet">
    <link href="../CSSFiles/color.css" rel="stylesheet">
    <link href="../CSSFiles/place.css" rel="stylesheet">
    <link href="../CSSFiles/size.css" rel="stylesheet">
    <link href="../CSSFiles/text.css" rel="stylesheet">
    <link href="../CSSFiles/background.css" rel="stylesheet">
    <style>

body
{
-webkit-font-smoothing : antialised;
-moz-osx-font-smoothing: grayscale;
margin: 0px;
font-family: 'Lato', sans-serif;

background-image: url('../images/carr.png');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;


}
</style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Envoyer un Email</title>
 
</head>
<br> <br> <br>


<div class="flex items-center " >
        
        <button class="bg-brand-lightBrown text-white border-none rounded-full uppercase px-25 py-12 font-bold text-sm"
            style ="    margin-left: 1292px;"><a class ="text-white no-underline" 
             href="../jon/index.html" </a> Retour  </button>
             
    </div>
<body >

	<center>
		<h4 class="sent-notification"></h4>

		<form id="myForm">
			<h2 class="px-76 py-26 font-lato text-white" style="margin-left: -20px;">Envoyer un Email</h2>
            <br> 

            <label style="font-size: 20px; margin-block: 18px; " class=" text-white  ">Nom:</label>
            <input  id="name" class="form-control  " placeholder="Entrer votre nom " style="max-width: 452px;" >
			
			<br><br>

			<label style="font-size: 20px; margin-block: 18px; " class=" text-white  ">Email:</label>
			<input id="email" type="text" class="form-control  " placeholder="Enter Email" style="max-width: 452px;">
			<br><br>

			<label style="font-size: 20px; margin-block: 18px; " class=" text-white  ">Sujet:</label>
			<input id="subject" type="text" placeholder=" Enter Subject"  class="form-control  " style="max-width: 452px;"> 
			<br><br>

			
            <p style="font-size: 20px; margin-block: 18px; " class=" text-white  ">Message:</p>
			<textarea id="body" rows="5" placeholder="Type Message"  class="form-control  " style="max-width: 452px;"></textarea>
			<br><br>

		
            <button type="button" class=" container-end bg-brand-lightBrown text-white border-none rounded-full my-5 px-25 py-12 font-lato " 
                    style=" margin-left: 491px; "  onclick="sendEmail()" value="Send An Email" >Submit </button>
		</form>
	</center>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>