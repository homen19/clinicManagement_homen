<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="./Admin.js"></script>
    <script src="./validation.js"></script>
    <script src="https://kit.fontawesome.com/7deb9bcff2.js" crossorigin="anonymous"></script>



</head>

<body>
    <nav>
        <div class="left">
            <h1>Anindita Clinic</h1>
        </div>
        <div class="right">
            <p title="Logout"><i class="fa-solid fa-right-from-bracket"></i></p>
        </div>
    </nav>
    <div class="container">
        <div class="controller">
            <ul>
                <li>
                    <div id="home" class="item">
                        Home
                    </div>
                </li>

                <li>
                    <div id="doctor" class="item">
                        Doctors
                    </div>
                </li>

                <li>
                    <div id="reciptionist" class="item">
                        Reciptionist
                    </div>
                </li>

                <li>
                    <div id="user" class="item">
                        Create Users
                    </div>
                </li>

                <li>
                    <div id="viewUser" class="item">
                        User details
                    </div>
                </li>


            </ul>
        </div>
        <div class="view">
            <div id="main-view" class="home">
                <div class="status">
                    <div class="number-user">

                        <h2>Total uesrs</h2>
                        <h1>15</h1>
                    </div>
                    <div class="number-doctor">
                        <h2>Total Doctors</h2>
                        <h1>6</h1>
                    </div>
                    <div class="number-rec">
                        <h2>Total Reciptionist</h2>
                        <h1>6</h1>
                    </div>
                    <div class="number-cases">
                        <h2>Total Patients</h2>
                        <h1>6</h1>
                    </div>

                </div>

            </div>


            <!-- -----register doctors--------- -->
            <div class="register-doctors">
                <div class="head">
                    <h1>Doctor Details</h1>

                </div>
                <div class="functions">
                    <div id="view-doctor-table" class="view-doctors">
                        <i class="fa-solid fa-5x fa-user-doctor"></i>
                        <h2>View Doctors</h2>
                    </div>
                    <div class="register">
                        <i class="fa-solid fa-6x fa-plus"></i>
                        <h2>Register</h2>
                    </div>

                </div>


                <!-- -------doctor registration form------- -->
                <div class="doctor-registration-form">
                    <h1>Doctor Registration</h1>
                    <button id="form-cut" class="btn"><i class="fa-solid fa-xmark"></i></button>

                    <form id="form" name="form" method="POST" class="form" action="RegisterDoctor.php"
                        onsubmit="return validation()">
                        <div class="left">
                            <input type="text" id="firstname" name="firstname" placeholder="enter your firstname">
                            <input type="text" id="email" name="email" placeholder="enter email address"><br>
                            <input id="gender" value="m" name="gender" type="radio">Male

                            <input id="gender" value="f" name="gender" type="radio">Female
                            <input id="doj" name="doj" type="text" placeholder="date of joining">

                            <textarea name="address" id="address" cols="35" rows="4" placeholder="address"></textarea>
                        </div>
                        <div class="right">
                            <input id="lastname" name="lastname" type="text" placeholder="enter your lastname">
                            <input id="contact" name="contact" type="text" placeholder="enter contact number">
                            <input id="dob" name="dob" type="text" placeholder="enter date of birth">
                            <input id="specialization" name="specialization" type="text"
                                placeholder="enter specialization">
                            <input type="submit">
                        </div>
                    </form>


                </div>

                <div class="view-doctor-details">
                    <h1>Doctor Details</h1>
                    <button class="btn-doctor-details"><i class="fa-solid fa-xmark"></i></button>
                    <table id="doctors">
                        <tr>
                            <th>Rg No</th>
                            <th>Name</th>
                            <th>Expertise</th>
                            <th>Email id</th>
                            <th>Contact</th>
                            <th>Operation</th>
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

                            $sql = "SELECT * FROM doctors";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                
                                while($row = $result->fetch_assoc()) {

                                echo "
                                
                                  <tr>
                                    <td>".$row["id"] ."</td>
                                    <td>".$row["firstname"]." ". $row["lastname"]  ."</td>
                                    <td>".$row["specialization"]."</td>
                                    <td>".$row["email"]."</td>
                                    <td>".$row["contact"]."</td>
                                    
                                   
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

            <!-- -------reigister Reciptionist----- -->
            <div id="reciptionist" class="register-reciptionist">
                <div class="head">
                    <h1>Receptionist Details</h1>
                    <div class="functions">
                        <div id="view-reciptionist" class="view-doctors">
                            <i class="fa-sharp fa-5x fa-regular fa-user"></i>
                            <h2>View Reciptionist</h2>
                        </div>
                        <div id="rec-register" class="register">
                            <i class="fa-solid fa-5x fa-plus"></i>
                            <h2>Register</h2>
                        </div>

                    </div>

                </div>
            </div>

            <!-- -------------------register-reciptionist-form--------------- -->
            <div class="register-reciptionist-form">
                <h1>Receptionist Registration</h1>
                <button id="form-cut" class="btn-reciptionist"><i class="fa-solid fa-xmark"></i></button>

                <form id="form" class="form" action="">
                    <div class="left">
                        <input type="text" placeholder="enter your firstname">
                        <input type="text" placeholder="enter email address"><br>
                        <input type="radio">Male

                        <input type="radio">Female
                        <input type="text" placeholder="date of joining">
                        <input type="file" title="photgraph">
                        <textarea name="address" id="" cols="35" rows="4" placeholder="address"></textarea>
                    </div>
                    <div class="right">
                        <input type="text" placeholder="enter your lastname">
                        <input type="text" placeholder="enter contact number">
                        <input type="text" placeholder="enter date of birth">
                        <input type="text" placeholder="enter specialization">
                        <input type="submit">
                    </div>
                </form>


            </div>

            <!-- ----------view doctors------------- -->
            <div class="view-reciptionist-details">
                <h1>Doctor Details</h1>
                <button class="btn-reciptionist-details"><i class="fa-solid fa-xmark"></i></button>
                <table id="reciptionist">
                    <tr>
                        <th>Doctors id</th>
                        <th>Name</th>
                        <th>Expertise</th>
                        <th>Email id</th>
                        <th>Operation</th>
                    </tr>
                    <tr>
                        <td>DC01U7698</td>
                        <td>Homen Nath</td>
                        <td>Bones</td>
                        <td>hoo345@gmail.com</td>
                        <td>
                            <button class="edit"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete"><i class="fa-solid fa-trash"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>DC01U7698</td>
                        <td>Homen Nath</td>
                        <td>Bones</td>
                        <td>hoo345@gmail.com</td>
                        <td>
                            <button class="edit"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete"><i class="fa-solid fa-trash"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>DC01U7698</td>
                        <td>Homen Nath</td>
                        <td>Bones</td>
                        <td>hoo345@gmail.com</td>
                        <td>
                            <button class="edit"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete"><i class="fa-solid fa-trash"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>DC01U7698</td>
                        <td>Homen Nath</td>
                        <td>Bones</td>
                        <td>hoo345@gmail.com</td>
                        <td>
                            <button class="edit"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete"><i class="fa-solid fa-trash"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>DC01U7698</td>
                        <td>Homen Nath</td>
                        <td>Bones</td>
                        <td>hoo345@gmail.com</td>
                        <td>
                            <button class="edit"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete"><i class="fa-solid fa-trash"></i> </button>
                        </td>
                    </tr>




                </table>

            </div>

            <!-- -------create user-------- -->
            <div id="create-user" class="create-users">
                <h1>Create-users</h1>
            </div>

            <!-- ----view users---------- -->

            <div class="view-user">
                <h1>View user</h1>
            </div>


        </div>
    </div>




    <!-- -------validation---------------- -->







</body>

</html>