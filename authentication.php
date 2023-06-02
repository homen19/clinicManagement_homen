<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    $role = $_POST['role'];   
      
        $sql = "select * from login where username = '$username' and password = '$password' and role = '$role'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
            if($role == "Admin"){
                header("Location: http://localhost/clinicManagement/pages/Admin/Admin.php");
                exit;
            }
            if($role == "Reciptionist"){
                header("Location: http://localhost/clinicManagement/pages/Receptionist/Reciptionist.php");
                exit;
            }
            if($role == "Doctors") {
                header("Location: http://localhost/clinicManagement/pages/Doctors/Doctors.php");
                exit;
            }
           
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  

