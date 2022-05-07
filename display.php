<?php
include 'connect.php';
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `crud` WHERE CONCAT(`nom`, `email`, `numtel`, `reclamation`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `crud`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "crud");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>
<!doctype html>
<html lang="en">
<div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
  <link rel="stylesheet" href="../template/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
  <link rel="stylesheet" href="../template/style.css">
    <title>Crud</title>
  </head>
  <body>    
<style>
  
/* =============================== CHATBOT ============================= */
.nodeco {
background: none;
color: inherit;
border: none;
padding: 0;
font: inherit;
cursor: pointer;
outline: inherit;
}

.nodeco:hover {
background: none;
color: inherit;
border: none;
padding: 0;
font: inherit;
cursor: pointer;
outline: inherit;
}

.nodeco:active {
background: none;
color: inherit;
border: none;
padding: 0;
font: inherit;
cursor: pointer;
outline: inherit;
}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 420px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #fdb819;
  color: white;
  padding: 8px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
 
.containe{
width : 400px ;
height : 400px ;
overflow : auto ;
border : 1px solid #E6E4E1 ;
}

.bot {
background-image: linear-gradient(to bottom right, #FFDB5F,#dc4225);
border-radius : 15px ;
padding : 4px ;
width : 300px ;
color : black ;
margin : 2px ;
border-top-left-radius: 0px;
box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

}

.botSender {
background : #F7E3C3 ;
border-radius : 10px ;
padding : 4px 6px 4px 6px ;
border : 1px solid black ;
margin : 2px ;
font-size: 15px;
  font-family : Mark\ Pro,sans-serif;

}

.botSender:hover {
background : #FFCF84 ;
border-radius : 10px ;
padding : 4px 6px 4px 6px ;  
border : 1px solid black ;
margin : 2px ;
font-size: 15px;
  font-family : Mark\ Pro,sans-serif;
}
.botText {
margin : 2px ;
font
color : black ;
font-size: 16px;
  font-family : Mark\ Pro,sans-serif;
}


/* ============== CLIENT ================ */
.client {
background-image: linear-gradient(to bottom right, #FDFCE9,#F5F0AF);
border-radius : 15px ;
padding : 4px ;
width : 300px ;
color : black ;
margin : 8px ;
border-top-right-radius: 0px;
box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
float : right ;

}

.cancelButton {
padding : 0px 8px 0px 8px ;
border : 1px solid black ;
background-color : red;
box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
float : right ;
background-image: linear-gradient(to bottom right, #FF7E75,#E9C5C2);
}

.cancelButton:hover {
padding : 0px 8px 0px 8px ;
border : 1px solid black ;
background-color : red;
box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
float : right ;
background-image: linear-gradient(to bottom right, #FF7E75,#E9C5C2);
}
 

</style>

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
<div action="/action_page.php" class="form-container">
<button class="nodeco cancelButton" onclick="closeForm()">
 -  
</button>


<table style="width :60% ; ">
<tr>
<td valign="center" align="left"><img style="width : 26px ; height : 40px" src="https://www.pngall.com/wp-content/uploads/10/Ethereum-Logo-PNG-HD-Image.png"></td>
<td valign="center">
<h4 >Good Deal </h4>
                   <h4 > Question/Reponse </h4>
</td>

</tr>
</table>


<label for="msg">
<b> </b>
</label>
<!--textarea placeholder="Type message.." name="msg" required></textarea-->

<div class="containe" id="chat">

<div class="bot">
<div class="botText">
Bonjour, cliquer sur la question pour voir la reponse
</div>
<button class="nodeco botSender" onclick="botReply(this.value)" value="1" id="StoreLocator">Comment ajouter une reclamation ? </button>
<button class="nodeco botSender" onclick="botReply(this.value)" value="2" id="Products">Comment modifier une reclamation ? ?</button>
<button class="nodeco botSender" onclick="botReply(this.value)" value="3" id="EventPublish">Comment supprimer une reclamation ? ?</button>

</div>
 
 



</div>

<div style="height : 40px ; ">

</div>
</div>
</div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function openForm() {
document.getElementById("myForm").style.display = "block";
}

function closeForm() {
document.getElementById("myForm").style.display = "none";
}




function botReply(value) {
if (value==1) {

// ========== client ==========
var containe = document.createElement("div");
containe.classList.add('client');

var message = document.createElement("div");
message.classList.add('botText');

var text2 = document.getElementById("StoreLocator").innerHTML ;

var text = document.createTextNode(text2);
message.appendChild(text);

containe.appendChild(message);
var element = document.getElementById("chat");
element.appendChild(containe);

var newElem1 = document.createElement("BR");
var newElem2 = document.createElement("BR");
var newElem3 = document.createElement("BR");
element.appendChild(newElem1) ;
element.appendChild(newElem2) ;
element.appendChild(newElem3) ;

// ======== bot =================

var containe = document.createElement("div");
containe.classList.add('bot');

var message = document.createElement("div");
message.classList.add('botText');

var text = document.createTextNode("Cliquer sur ajouter une reclamation et remplissez le formulaire correctement.");
message.appendChild(text);

var a = document.createElement('a');
var linkText = document.createTextNode("");
a.appendChild(linkText);
//a.title = "my title text";
a.href = "https://microsoftedge.microsoft.com/addons/detail/metamask/ejbalbakoplchlghecdalmeeeajnimhm?hl=en-US";
a.style="color : white ; " ;  
message.appendChild(a);

containe.appendChild(message);

var element = document.getElementById("chat");
element.appendChild(containe);



} else if (value=="2") {
// ========== client ==========
var containe = document.createElement("div");
containe.classList.add('client');

var message = document.createElement("div");
message.classList.add('botText');

var text2 = document.getElementById("Products").innerHTML ;

var text = document.createTextNode(text2);
message.appendChild(text);

containe.appendChild(message);
var element = document.getElementById("chat");
element.appendChild(containe);

var newElem1 = document.createElement("BR");
var newElem2 = document.createElement("BR");
var newElem3 = document.createElement("BR");
element.appendChild(newElem1) ;
element.appendChild(newElem2) ;
element.appendChild(newElem3) ;

// ======== bot =================

var containe = document.createElement("div");
containe.classList.add('bot');

var message = document.createElement("div");
message.classList.add('botText');

var text = document.createTextNode("cliquer sur modifier et changer les données. ");
message.appendChild(text);

var a = document.createElement('a');
var linkText = document.createTextNode("");
a.appendChild(linkText);
//a.title = "my title text";
a.href = "https://microsoftedge.microsoft.com/addons/detail/metamask/ejbalbakoplchlghecdalmeeeajnimhm?hl=en-US";
a.style="color : white ; " ;  
message.appendChild(a);

containe.appendChild(message);

var element = document.getElementById("chat");
element.appendChild(containe);

 
} else if (value=="3") {
// ========== client ==========
var containe = document.createElement("div");
containe.classList.add('client');

var message = document.createElement("div");
message.classList.add('botText');

var text2 = document.getElementById("EventPublish").innerHTML ;

var text = document.createTextNode(text2);
message.appendChild(text);

containe.appendChild(message);
var element = document.getElementById("chat");
element.appendChild(containe);

var newElem1 = document.createElement("BR");
var newElem2 = document.createElement("BR");
var newElem3 = document.createElement("BR");
element.appendChild(newElem1) ;
element.appendChild(newElem2) ;
element.appendChild(newElem3) ;

// ======== bot =================

var containe = document.createElement("div");
containe.classList.add('bot');

var message = document.createElement("div");
message.classList.add('botText');

var text = document.createTextNode("Il suffit de cliquer sur supprimer devant la reclamation a supprimé.");
message.appendChild(text);

var a = document.createElement('a');
var linkText = document.createTextNode("");
a.appendChild(linkText);
//a.title = "my title text";
a.href = "https://microsoftedge.microsoft.com/addons/detail/metamask/ejbalbakoplchlghecdalmeeeajnimhm?hl=en-US";
a.style="color : white ; " ;  
message.appendChild(a);

containe.appendChild(message);

var element = document.getElementById("chat");
element.appendChild(containe);




} else if (value=="4") {
// ========== client ==========
var containe = document.createElement("div");
containe.classList.add('client');

var message = document.createElement("div");
message.classList.add('botText');

var text2 = document.getElementById("TechNews").innerHTML ;

var text = document.createTextNode(text2);
message.appendChild(text);

containe.appendChild(message);
var element = document.getElementById("chat");
element.appendChild(containe);

var newElem1 = document.createElement("BR");
var newElem2 = document.createElement("BR");
var newElem3 = document.createElement("BR");
element.appendChild(newElem1) ;
element.appendChild(newElem2) ;
element.appendChild(newElem3) ;

// ======== bot =================

const settings = {
"async": true,
"crossDomain": true,
"url": "https://tech-news3.p.rapidapi.com/venturebeat",
"method": "GET",
"headers": {
"x-rapidapi-host": "tech-news3.p.rapidapi.com",
"x-rapidapi-key": "0df9a64d4dmshef637b6555ab817p197c06jsn23b1172de7c8"
}
};

$.ajax(settings).done(function (response) {

var containe = document.createElement("div");
containe.classList.add('bot');

var message = document.createElement("div");
message.classList.add('botText');

let x = Math.floor((Math.random() * 20) + 1);

var text = document.createTextNode(response[x]['title']);

message.appendChild(text);


containe.appendChild(message);
var element = document.getElementById("chat");
element.appendChild(containe);

});



}

}
</script>

  <div class="form-group">
            <!-- <input class="form-control" type="text" id="search" value="" placeholder="Rechercher des reclamations"/>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="https://unpkg.com/popper.js@1.16.1-lts/dist/umd/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function(){
          $('#search').keyup(function(){
              var question = $(this).val();
              console.log(question);
          });
      });
      </script> -->
      <form action="display.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
      <button class="btn btn-danger my-5"><a href="../template/index.php"
              class="text-light">Home</a>
      <div class="container">
          <button class="btn btn-warning my-5"><a href="user.php"
              class="text-light">Ajouter une reclamation</a>
</button>

<table class="table table-warning table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">email</th>
      <th scope="col">numtel</th>
      <th scope="col">reclamation</th>  
      <th scope="col">operations</th>
  

    </tr>
  </thead>
    <body>
    <?php $sql="Select * from `crud`";
$result=mysqli_query($con,$sql);  while($row=mysqli_fetch_assoc($result))
{  $id=$row['id'];} while($row = mysqli_fetch_array($search_result)):?>
      
                <tr>
                <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['nom'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['numtel'];?></td>
                    <td><?php echo $row['reclamation'];?></td>
                    <td><?php echo '
        <button class="btn btn-warning"><a href="modifier.php?modifierid='.$id.'" class="text-light">modifier</a></button>
        <button class="btn btn-danger"><a href="supprimer.php?supprimerid='.$id.'" class="text-light">supprimer</a></button>
    ';?></td>
                    
                </tr>
                <?php endwhile;?>
  
     

  </body>
</table>
</body>
</html>
