<?php  
 $connect = mysqli_connect("localhost", "root", "", "find_my");  
 
 if(!empty($_POST))  
 {
    //   $output = '';  
      $message = '';  
      $titre = mysqli_real_escape_string($connect, $_POST["titre"]);  
      $categorie = mysqli_real_escape_string($connect, $_POST["categorie"]);  
      $emplacement = mysqli_real_escape_string($connect, $_POST["emplacement"]);  
      $prix = mysqli_real_escape_string($connect, $_POST["prix"]);  
      $email = mysqli_real_escape_string($connect, $_POST["email"]);  
      $telephone = mysqli_real_escape_string($connect, $_POST["telephone"]);  

    //   if($_POST["employee_id"] != '')  
    //   {  
    //        $query = "  
    //        UPDATE tbl_employee   
    //        SET name='$name',   
    //        address='$address',   
    //        gender='$gender',   
    //        designation = '$designation',   
    //        age = '$age'   
    //        WHERE id='".$_POST["employee_id"]."'";  
    //        $message = 'Data Updated';  
    //   }  
    //   else  
    //   {  
    //        $query = "  
    //        INSERT INTO tbl_employee(name, address, gender, designation, age)  
    //        VALUES('$name', '$address', '$gender', '$designation', '$age');  
    //        ";  
    //        $message = 'Data Inserted';  
    //   }  

    


      $query = "  
      INSERT INTO tbl_annonce(titre, categorie, emplacement, prix, email, telephone)  
      VALUES('$titre', '$categorie', '$emplacement', '$prix', '$email', '$telephone');  
      ";  

      if(mysqli_query($connect, $query))  
      {  


        $message = 'Data Inserted'; 



        //    $output .= '<label class="text-success">' . $message . '</label>';  
        //    $select_query = "SELECT * FROM tbl_employee ORDER BY id DESC";  
        //    $result = mysqli_query($connect, $select_query);  
        //    $output .= '  
        //         <table class="table table-bordered">  
        //              <tr>  
        //                   <th width="70%">Employee Name</th>  
        //                   <th width="15%">Edit</th>  
        //                   <th width="15%">View</th>  
        //              </tr>  
        //    ';  
        //    while($row = mysqli_fetch_array($result))  
        //    {  
        //         $output .= '  
        //              <tr>  
        //                   <td>' . $row["name"] . '</td>  
        //                   <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
        //                   <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
        //              </tr>  
        //         ';  
        //    }  
        //    $output .= '</table>';  
      }  else {
        $message = 'Data Not Inserted, something wrong!!'; 
      }
    //   echo $output; 

    //if (isset($sucess_message)){ echo $sucess_message;}elseif(isset($registred_already_message)) {echo $registred_already_message;}elseif(isset($field_required)) {echo $field_required;} else{echo "<a href='afficher.php' style='color:red;'><h3>sa marche pas!, refresh page</h3></a>";}
    
 }  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FindMy| Déposer une annonce</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <!-- Bootstrap CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='responsive.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php require 'header.php'; ?>

    <div class="container">
            <div class="row">
                <div class="col-md-9 content" style="background: gray;">


                    <!-- DÉPOSER LANNONCE ICI -->
                    <div class="error-global-message-from-php">
                        
                    </div><br>
                    <form methode="post" id="annonce-form">
                            <!-- TITRE DANNONCE -->
                            <div class="form-group">
                                <label for="titre">Titre:</label>
                                <input type="text" class="form-control" id="titre" name="titre">
                                <span id="error-title-message"></span>
                            </div>

                            <div class="form-group">
                                <!-- CATÉGORIES DANNONCE -->
                                <label for="categorie">Catégories:</label>
                                <select class="form-control" id="categorie" name="categorie">
                                    <!-- <option value="0">Toutes les catégories:</option> -->
                                    <option value="services">Service</option>
                                    <option value="automobile">Automobile</option>
                                    <option value="immobilier">Immobilier</option>
                                    <!-- MORE LATER -->
                                </select>
                                <span id="error-categorie-message"></span>
                            </div>

                            <!-- <div class="form-group">  -->
                                <!-- TYPE DANNONCE -->
                                <!-- <label for="type-annonce">Type d'annonce:</label>
                                <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="type-annonce" id="type-annonce" value="Offre">Offre
                                </label>
                                </div>
                                <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="type-annonce" id="type-annonce" value="Recherche">Recherche
                                </label>
                                </div>
                                <span id="error-type-annonce-message"></span>
                            </div> -->

                            <!-- <div class="form-group"> -->
                                <!-- DESCRIPTION DANNONCE -->
                                <!-- <label for="description">Description:</label>
                                <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                                <span id="error-description-message"></span>
                            </div> -->

                            <!-- <div class="form-group"> -->
                                 <!-- PHOTO DANNONCE -->
                                <!-- <label for="photo">Photos:</label>
                                <input type="file" class="form-control-file border" id="photo" name="photo">
                                <span id="error-photo-message"></span>
                            </div> -->

                            <div class="form-group">
                                <!-- EMPLACEMENT DANNONCE -->
                                <label for="emplacement">Emplacement:</label>
                                <select class="form-control" id="emplacement" name="emplacement">
                                    <option value="Montreal">Montreal</option>
                                    <option value="Laval">Laval</option>
                                    <option value="Longeuil">Longeuil</option>
                                    <option value="Québec-city">Québec-city</option>
                                    <option value="Sherbrooke">Sherbrooke</option>
                                    <option value="Granby">Granby</option>
                                </select>
                                <span id="error-emplacement-message"></span>
                            </div>

                            <div class="form-group">
                                <!-- PRIX DANNONCE -->
                                <label for="prix">Prix:</label>
                                <input type="text" class="form-control" id="prix" name="prix">
                                <span id="error-prix-message"></span>
                            </div>

                            <div class="form-group">
                                <!-- EMAIL DANNONCE -->
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email" name="email">
                                <span id="error-email-message"></span>
                            </div>

                            <div class="form-group">
                                <!-- TÉLÉPHONE DANNONCE -->
                                <label for="telephone">Téléphone:</label>
                                <input type="text" class="form-control" id="telephone" name="telephone">
                                <span id="error-telephone-message"></span>
                            </div>

                            <button type="submit" class="btn btn-primary">Afficher</button>
                    </form>
                    <br>
                    <!-- FIN DE LANNONCE -->




                </div>
                <div class="col-md-3 aside" style="background: gray;"><?php require 'aside.php'; ?></div>
            </div>
    </div>
   
    <?php require 'footer.php'; ?>

</body>
</html>