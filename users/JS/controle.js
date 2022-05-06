 const emailSignIn=document.getElementById('email-signin')
 const emailSignUp=document.getElementById('email-signup');

 const passwd=document.getElementById('passwd-signin');
 const passwdsignup=document.getElementById('passwd-signup');
 const ConfirmPasswd=document.getElementById('confirmpasswd-signin');

const userName=document.getElementById('user-name');


 const inputs=document.getElementsByTagName('input');
 
//  let chiffre;
//  let symb;

 const element = document.getElementById('signin'); //form-container
 element.addEventListener("submit", function(event) {
    let i;
    let erreur;
    event.preventDefault();
    if(!emailSignIn.value){
        erreur="remplit ton email";
    }
    if(!passwd.value){
      erreur="remplit ton password!";
    }
    if(erreur){
        event.preventDefault();
        alert(erreur);
        return false;
    }
    else{
      let rocket= new XMLHttpRequest();

      rocket.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
        }else if(this.readyState == 4){
          alert("erreur est survenu ...!");
        }
      };
      rocket.open("POST", "http://localhost:7070/users/php/signin_traitA.php", true);
      rocket.send();
      return false;
    }
    // window.history.back();
  });

//Autheur : Med Yassine Ben Aoun ~ github pseudo : Yasscoder :) 