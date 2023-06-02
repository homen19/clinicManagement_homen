<?php


$host = 'localhost';  
    $user = 'root';  
    $password = '';  
    $db_name = "anindita_clinic"; 

    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }   


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $adhar = $_POST['adhar'];
    $problem = $_POST['problem'];
    $vill = $_POST['vill'];
    $district = $_POST['district'];
    $po = $_POST['po'];
    $pin = $_POST['pin'];



    $sql = "INSERT INTO patients_data (firstname, lastname, contact, adhar, problem, vill, district, po, pin) VALUES ('$firstname', '$lastname', '$contact', '$adhar', '$problem',    '$vill', '$district', '$po', '$pin')";

    if ($con->query($sql) === TRUE) {
        ?>
        <script>
          alert('Data Inserted Successfully')
        </script>

        <?php
        header("Location: http://localhost/clinicManagement/pages/Receptionist/Reciptionist.php");
        

      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
      
      $con->close();



?>
