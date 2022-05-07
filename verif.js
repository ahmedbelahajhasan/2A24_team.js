function verif()
{



 let myForm=document.getElementById('myForm')
myForm.addEventListener('submit',function(e){var description=document.getElementById("description").value

var cdescription=document.getElementById("cdescription")
cdescription.innerHTML="" 

for (let i=0;i<description.length;i++)
{
    if (!(description.charAt(i).toUpperCase()>="A" && description.charAt(i).toUpperCase()<="Z"))
    {
        cdescription.innerHTML="description doit etre chaine!!"
    break
    }

}});



var id_res=document.getElementById("id_res").value
var id_user=document.getElementById("ml").value
var prix=document.getElementById("prix").value
var description=document.getElementById("description").value

 if (id_user<=000001 || id_user >=99999){
    id_user.innerHTML="id_user compris entre 000001 et 99999!!"}




if (prix<=200000 || prix >=800000){
innerHTML="prix compris entre 20m et 80m!!"}

}