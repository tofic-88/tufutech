
$(document).ready(function(){ 

    $('#annonce-form').on("submit", function(event){   
        event.preventDefault();  
        if($('#titre').val().trim() == "")  
        {  
             document.getElementById("error-title-message").innerHTML = "Pas de champ vide, <a href='afficher.php'>Veuillez réessayer</a>"; 
             document.getElementById("titre").style.border = "solid 4px red";
        }  
        else if($('#categorie').val().trim() == '')  
        {  
             document.getElementById("error-categorie-message").innerHTML = "Pas de champ vide, <a href='afficher.php'>Veuillez réessayer</a>"; 
             document.getElementById("categorie").style.border = "solid 4px red";  
        }
        else if($('#emplacement').val().trim() == '')  
        {  
             document.getElementById("error-emplacement-message").innerHTML = "Pas de champ vide, <a href='afficher.php'>Veuillez réessayer</a>"; 
             document.getElementById("emplacement").style.border = "solid 4px red"; 
        }
        else if($('#prix').val().trim() == '')  
        {  
             document.getElementById("error-prix-message").innerHTML = "Pas de champ vide, <a href='afficher.php'>Veuillez réessayer</a>"; 
             document.getElementById("prix").style.border = "solid 4px red";
        }
        else if($('#email').val().trim() == '')  
        {   
             document.getElementById("error-email-message").innerHTML = "Pas de champ vide, <a href='afficher.php'>Veuillez réessayer</a>"; 
             document.getElementById("email").style.border = "solid 4px red";
        }
        else if($('#telephone').val().trim() == '')  
        {   
             document.getElementById("error-telephone-message").innerHTML = "Pas de champ vide, <a href='afficher.php'>Veuillez réessayer</a>"; 
             document.getElementById("telephone").style.border = "solid 4px red";
        }     
        else  
        {  
             $.ajax({  
                  url:"afficher.php",  
                  method:"POST",  
                  data:$('#annonce-form').serialize(),  
                  beforeSend:function(){  
                       $('#insert').val("Inserting");  
                  },  
                  success:function(data){  
                        $('#annonce-form')[0].reset();  
                        // $('#add_data_Modal').modal('hide');  
                        // $('#message').html(data);  
                        $('#error-global-message-from-php').val('<h4>Data Inserted</h4>'); 
                  }  
             });  
        }  
   });

   function validate(){
    var titreAnnonce = document.getElementById("titre").value;
    var categorieAnnonce = document.getElementById("categorie").value;
    // var typeAnnonce = document.getElementById("type-annonce").value;
    // var descriptionAnnonce = document.getElementById("description").value;
    // var photoAnnonce = document.getElementById("photo").value;
    var emplacementAnnonce = document.getElementById("emplacement").value;
    var prixAnnonce = document.getElementById("prix").value;
    var emailAnnonce = document.getElementById("email").value;
    var telephoneAnnonce = document.getElementById("telephone").value;
    var errorMessage = document.createElement('h5');



    if (titreAnnonce.trim() == "") {
        document.getElementById("titre").style.border = "solid 4px red";
        errorMessage.innerHTML = 'Pas de champ vide, <a href="afficher.php">Veuillez réessayer</a>';
        document.getElementById("error-title-message").appendChild(errorMessage);
        return false;
    }else if (categorieAnnonce.trim() == "") {
        document.getElementById("categorie").style.border = "solid 4px red";
        errorMessage.innerHTML = 'Pas de champ vide, <a href="afficher.php">Veuillez réessayer</a>';
        document.getElementById("error-categorie-message").appendChild(errorMessage);
        return false;
    }else if (emplacementAnnonce.trim() == "") {
        document.getElementById("emplacement").style.border = "solid 4px red";
        errorMessage.innerHTML = 'Pas de champ vide, <a href="afficher.php">Veuillez réessayer</a>';
        document.getElementById("error-emplacement-message").appendChild(errorMessage);
        return false;
    }else if (prixAnnonce.trim() == "") {
        document.getElementById("prix").style.border = "solid 4px red";
        errorMessage.innerHTML = 'Pas de champ vide, <a href="afficher.php">Veuillez réessayer</a>';
        document.getElementById("error-prix-message").appendChild(errorMessage);
        return false;
    }else if (emailAnnonce.trim() == "") {
        document.getElementById("email").style.border = "solid 4px red";
        errorMessage.innerHTML = 'Pas de champ vide, <a href="afficher.php">Veuillez réessayer</a>';
        document.getElementById("error-email-message").appendChild(errorMessage);
        return false;
    }else if (telephoneAnnonce.trim() == "") {
        document.getElementById("telephone").style.border = "solid 4px red";
        errorMessage.innerHTML = 'Pas de champ vide, <a href="afficher.php">Veuillez réessayer</a>';
        document.getElementById("error-telephone-message").appendChild(errorMessage);
        return false;
    }else{
        return true;
    }



    // else if (descriptionAnnonce.trim() == "") {
    //     document.getElementById("description").style.border = "solid 4px red";
    //     errorMessage.innerHTML = 'Pas de champ vide, <a href="afficher.php">Veuillez réessayer</a>';
    //     document.getElementById("error-description-message").appendChild(errorMessage);
    //     return false;
    // }


    // else if (photoAnnonce.trim() == "") {
    //     document.getElementById("photo").style.border = "solid 4px red";
    //     errorMessage.innerHTML = 'Pas de champ vide, <a href="afficher.php">Veuillez réessayer</a>';
    //     document.getElementById("error-photo-message").appendChild(errorMessage);
    //     return false;
    // }

    // else if (typeAnnonce.trim() == "") {
    //     document.getElementById("type-annonce").style.border = "solid 4px red";
    //     errorMessage.innerHTML = 'Pas de champ vide, <a href="afficher.php">Veuillez réessayer</a>';
    //     document.getElementById("error-type-annonce-message").appendChild(errorMessage);
    //     return false;
    // }



}






















 });