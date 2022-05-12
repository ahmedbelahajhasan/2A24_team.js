<?php
include ("connect.php");
$sql=("SELECT questions.question,reponses.reponse FROM questions INNER JOIN reponses WHERE questions.id=reponses.id ");
$result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>

<html lang="en">
  <!-- *****************************traduction**************************** -->


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="indexC.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
        <title>Q&A</title>
        <body>
            <!--nav bar-->
            <header>
                <a href="/Shtml/index.html"><img class="logo" src="/image/logo.png" alt="logo"></a>
                <nav>
                    <ul class="nav_list">
                        <li><a class="active" href="http://localhost/Ecommerce-master/template/index.php">Home</a></li>
                        <li><a class="" href="#">Q&A</a></li>
                    </ul>
                </nav>
            </header>
            <!--end nav bar-->
                <style type="text/css">
                    .faq_holder{
                        text-align: left;
                        width:550px;
                        margin-left:auto;
                        margin-right:auto;
                        padding:4px;
                    }
                    .faq {
                        margin-bottom:10px;
                    }
                    .questions{ 
                        font-weight:bold;
                        font-size:16px;
                    }
                    .answer{
                        margin-left:20px;
                    }
                </style>  
    </head>
    <body style="background:rgb(60, 60, 60)">

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

<div class="text-description" style="margin-top: 100px; margin-left:10px; color: rgb(246, 108, 11);font-size: 16px; font-weight: 800;">Here you can find all the answer for your question ! </h2>
    <div class="description"></div>
</div>

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
<div action="/action_page.php" class="form-container">
<button class="nodeco cancelButton" onclick="closeForm()">
 -  
</button>


<table2 style="width :60% ; ">
<tr>
<td valign="center" align="left"><img style="width : 100px ; height : 100px" src="logo.png"></td>
<td valign="center">
<h4 >Good Deal </h4>
                   <h4 > ~ How to use ~ </h4>
</td>

</tr>
</table2>


<label for="msg">
<b> </b>
</label>
<!--textarea placeholder="Type message.." name="msg" required></textarea-->

<div class="containe" id="chat">

<div class="bot">
<div class="botText">
Hello , click on the question to see the answer 
</div>
<button class="nodeco botSender" onclick="botReply(this.value)" value="1" id="StoreLocator">How to add a question ? </button>
<button class="nodeco botSender" onclick="botReply(this.value)" value="2" id="Products">How to add an answer ?</button>
<button class="nodeco botSender" onclick="botReply(this.value)" value="3" id="EventPublish">How to edit a question or an answer?</button>

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

var text = document.createTextNode("You just have to click on add a question and choose a unused Id ");
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

var text = document.createTextNode("You just have to click on add an answer and choose a unused Id");
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

var text = document.createTextNode("You just have to click on Edit a question or edit an answer to modify or delete and dont forget to save the changes!");
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
   
  <script>
      $(document).ready(function(){
          $('#search').keyup(function(){
              var question = $(this).val();
              console.log(question);
          });
      });
      </script>
      </body>
  <body>
    <div align="center">
        <div class="faq_holder">
  
                <style type="text/css">
                table    { margin-top: 150px ;border:none; border-radius: 15px; background-color:#f07b0e; color:#FFF; }
                table td { border:solid 1px; border-radius: 15px; }
                </style>
                <table align="center" cellpadding="20">
                    
                        <tr>
                            <th style="color:black;">questions</th>
                            <th   style="color:black;">answers</th>
                        </tr>
                
                        <?php 
                        while($row=mysqli_fetch_assoc($result)){
                            ?>
                        <tr>
                            <td style="color:black;"><?php echo $row['question']; ?></td>
                            <td style="color:black;"><?php echo $row['reponse']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>  
                </table>
        </div>
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                    }
                </script>
        </div>
    </div>
    
</body>
</html>
