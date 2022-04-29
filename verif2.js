function verif()
{ let myForm=document.getElementById('myForm')
myForm.addEventListener('submit',function(e){var nom=document.getElementById("nom").value

var cmon=document.getElementById("cmon")
cmon.innerHTML=""
for (let i=0;i<nom.length;i++)
{
    if (!(nom.charAt(i).toUpperCase()>="A" && nom.charAt(i).toUpperCase()<="Z"))
    { e.preventDefault()
    cmon.innerHTML="Nom doit etre chaine!!"
    break
    
    }
}
if(!(nom.charAt(0)>="A" && nom.charAt(0)<="Z"))
{e.preventDefault()
    cmon.innerHTML=("Nom commence par majuscule!!")
}});



var mail=document.getElementById("ml").value

var aux=mail.substr(mail.indexOf('@'),mail.length)
if (aux!="@gmail.tn")
cemail.innerHTML="Mail se termine par @gmail.tn!!"
}