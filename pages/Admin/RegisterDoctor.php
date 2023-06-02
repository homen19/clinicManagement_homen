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
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $doj = $_POST['doj'];
    $specialization = $_POST['specialization'];
    $address = $_POST['address'];



    $sql = "INSERT INTO doctors (firstname, lastname, email, contact, gender, dob, doj, specialization, address) VALUES ('$firstname', '$lastname', '$email', '$contact', '$gender', '$dob', '$doj', '$specialization', '$address')";

    if ($con->query($sql) === TRUE) {
        ?>
        <script>
          alert('Data Inserted Successfully')
        </script>

        <?php
        header("Location: http://localhost/clinicManagement/pages/Admin/Admin.php");
        

      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
      
      $con->close();

?>