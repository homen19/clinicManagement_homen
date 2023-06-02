<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reciptioinist.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/7deb9bcff2.js" crossorigin="anonymous"></script>
    <script src="./Reciptionist.js"></script>
    <script src="./Validation.js"></script>

</head>

<body>
    <div class="reciptionist-nav">
        <h1>Anindita Clinic</h1>
        <a href="../Doctors/Logout.php"><button title="Logout"><i
                    class="fa-solid fa-right-from-bracket"></i></button></a>
    </div>
    <div class="main-container">
        <div class="first-box-line">
            <div id="register-patients" class="box"><i class="fa-solid fa-3x fa-plus"></i><br />Register Patients</div>
            <div id="view-patients-records" class="box"><i class="fa-solid fa-3x fa-hospital-user"></i><br /> Patients
            </div>
            <div class="box"><i class="fa-solid fa-3x   fa-clipboard-user"></i><br />Attendance</div>

        </div>
        <div class="first-box-line">
            <div class="box"><i class="fa-solid fa-3x fa-prescription-bottle-medical"></i><br />Prescription</div>
            <div class="box"><i class="fa-solid fa-3x fa-user"></i><br />View Profile</div>
            <div class="box"><i class="fa-solid fa-3x fa-eye"></i><br />Other</div>

        </div>

    </div>



    <!-- ----------------Register patients------------------ -->
    <div id="register-patients-form" class="register-patients">
        <button id="cut-form-button" class="cut-form"><i class="fa-solid fa-xmark"></i></button>
        <h2>Register Patients</h2>
        <p>Please fill the following patient details</p>
        <form id="form" name="form" action="RegisterPatient.php" method="post" onsubmit="return validation()">
            <div class="name-part">
                <label for="firstname">Firstname</label>
                <input name="firstname" id="firstname" type="text">
            </div>
            <div class="name-part">
                <label for="lastname">Lastname</label>
                <input id="lastname" name="lastname" type="text">
            </div>

            <div class="name-part">
                <label for="contact">Contact</label>
                <input id="contact" name="contact" type="text">
            </div>
            <div class="name-part">
                <label for="adhar">Adhar No</label>
                <input id="adhar" name="adhar" type="text">
            </div>
            <div class="name-part">
                <label for="problem">Problem</label>
                <input id="problem" name="problem" type="text">
            </div>
            <div class="name-part">
                <label for="address">Vill/Town</label>
                <input id="vill" name="vill" type="text">
            </div>
            <div class="name-part">
                <label for="Dist">District</label>
                <input id="district" name="district" type="text">
            </div>

            <div class="name-part">
                <label for="Dist">PO</label>
                <input id="po" name="po" type="text">
            </div>
            <div class="name-part">
                <label for="Dist">PIN</label>
                <input id="pin" name="pin" type="text">
            </div>
            <div class="submit-btn">
                <button type="submit">Submit</button>
            </div>


        </form>
    </div>



    <!-- ----------------view patients--------------  -->

    <div class="view-patients">
        <h2>Patient Records</h2>
        <button class="cut-form"><i class="fa-solid fa-2x fa-xmark"></i></button>
        <div class="patients">


            <table id="reciptionist">
                <tr>
                    <th> id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Adhar</th>
                    <th>problem</th>
                    <th>vill</th>
                    <th>district</th>
                    <th>po</th>
                    <th>pin</th>
                    <th>operation</th>
                    
                </tr>
                <?php
                            $host = 'localhost';  
                            $user = 'root';  
                            $password = '';  
                            $db_name = "anindita_clinic"; 
                        
                            $con = mysqli_connect($host, $user, $password, $db_name);  
                            if(mysqli_connect_errno()) {  
                                die("Failed to connect with MySQL: ". mysqli_connect_error());  
                            }   

                            $sql = "SELECT * FROM patients_data";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                
                                while($row = $result->fetch_assoc()) {

                                echo "
                                
                                  <tr>
                                    <td>".$row["id"] ."</td>
                                    <td>".$row["firstname"]." ". $row["lastname"]  ."</td>
                                    <td>".$row["contact"]."</td>
                                    <td>".$row["adhar"]."</td>
                                    <td>".$row["problem"]."</td>
                                    <td>".$row["vill"]."</td>
                                    <td>".$row["district"]."</td>
                                    <td>".$row["po"]."</td>
                                    <td>".$row["pin"]."</td>
                                    
                                   
                                    <td>
                                    <a href='deleteDoctor.php?rn=$row[id]'>Delete</a>   
                                    
                                    </td>
                                 </tr>
                                 ";
                               

                                }
                              } else {
                                echo "0 results";
                              }
                              $con->close();
                              ?>
               




            </table>



        </div>
    </div>


</body>

</html>