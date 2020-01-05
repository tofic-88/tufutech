<?php
    //connect to DataBase
    $host = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $db = "find_my";
    
    // Create connection
    $conn = new mysqli($host, $dbUserName, $dbPassword, $db);


    // $titre = filter_input(INPUT_POST, 'titre');
    // $categorie = filter_input(INPUT_POST, 'categorie');
    // // $typeannonce = filter_input(INPUT_POST, 'type-annonce');
    // // $description = filter_input(INPUT_POST, 'description');
    // // $photo = filter_input(INPUT_POST, 'photo');
    // $emplacement = filter_input(INPUT_POST, 'emplacement');
    // $prix = filter_input(INPUT_POST, 'prix');
    // $email = filter_input(INPUT_POST, 'email');
    // $telephone = filter_input(INPUT_POST, 'telephone');
    // // $date = date("Y-m-d");

    if (!empty($_POST['titre'])) {

        if (mysqli_connect_error()) {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }else {
            // $SELECT = "SELECT email FROM tbl_annonce WHERE email = ? Limit 1";
            
            $INSERT = "INSERT INTO  tbl_annonce (titre, categorie, emplacement, prix, email, telephone) 
            values ('$titre', '$categorie', '$emplacement', '$prix', '$email', '$telephone')";

            
            
            // solution simple sans test de lexistance de lemail deja ou non
            // if ($conn->query($INSERT)) {
            //     echo "New registration inserted sucessfully, <a href='index.php'>Add one more</a>";
            // }else{
            //     echo "Error: ".$INSERT."<br>".$conn->error;
            //     echo "<br>Something wrong, <a href='index.php'>Try again!</a>";
            // }

            // prepare statement

            $stmt = $conn->prepare($INSERT);
            // $stmt->bind_param("sss", $name, $email, $password);//sa marche sans avec
            $stmt->execute();
            $sucess_message = "<h3>the new record inserted sucessfuly, <a href='challenge-5.php'>Add one more</a></h3>";
            header("location:afficher.php");
            // $stmt = $conn->prepare($SELECT);
            // $stmt-> bind_param("s", $email); //recherche why 's'
            // $stmt-> execute();
            // $stmt->bind_result($email);
            // $stmt->store_result();
            // $rnum = $stmt->num_rows;

            // if ($rnum ==0) {
            //     $stmt->close();
            //     $stmt = $conn->prepare($INSERT);
            //     // $stmt->bind_param("sss", $name, $email, $password);//sa marche sans avec
            //     $stmt->execute();
            //     $sucess_message = "<h3>the new record inserted sucessfuly, <a href='challenge-5.php'>Add one more</a></h3>";
            // }else{
            //     $registred_already_message = "<h3>Someone registred this email already!, <a href='challenge-5.php'>Try again!</a></h3>";
            // }


            $stmt->close();

        }

    }else { $field_required = "all field are required"; die(); }
?>