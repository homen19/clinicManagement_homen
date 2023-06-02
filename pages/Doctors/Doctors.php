<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="doctors.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/7deb9bcff2.js" crossorigin="anonymous"></script>
    <script src="./doctors.js"></script>
</head>

<body>
    <nav>
        <h1 title="Logo">Anindita Clinic</h1>
        <a id="log" href="logout.php"><div class="log-out" title="logout"><i class="fa-solid fa-right-from-bracket"></i></div></a>

    </nav>
    <div class="main-doctor-page">
        <p><i class="fa-solid fa-3x fa-user-doctor"></i></p>
        <h2>Doctors Page</h2>
        <div class="container-card">
            <div class="card"><i class="fa-solid fa-2x fa-flag"></i><br />Notice</div>
            <div id="patient-view" class="card"><i class="fa-solid fa-2x fa-person"></i><br />Patients</div>
            <div class="card"><i class="fa-solid fa-2x fa-user"></i><br />Profile</div>
            <div class="card"><i class="fa-solid fa-2x fa-eye"></i><br />Others</div>

        </div>

    </div>

    <!-- ------------view patients-------- -->

    <div id="view-patients" class="view-patients">
        <i class="fa-solid fa-xmark cut-icon" id="cut-icon"></i>
        <h1>Patients</h1>
        <div class="table">
            <div class="patients">


                <table id="reciptionist">
                    <tr>
                        <th>Patient id</th>
                        <th>Name</th>
                        <th>Problem Info</th>
                        <th>Prescription</th>
                    </tr>
                    <tr>
                        <td>DC01U7698</td>
                        <td>Homen Nath</td>
                        <td>Bones</td>
                       
                        <td>
                            <button id="presciption-form" class="edit"><i class="fa-solid fa-plus"></i></button>
                            <button class="edit">View</button>
                               

                        </td>
                    </tr>
                    





                </table>



            </div>
        </div>


        <!-- --------Add prescription--------- -->


        <div id="prescription" class="prescription">
            <i class="fa-solid fa-xmark cut-icon" id="cut-icon2"></i>
            <p>Patient id: </p>
            <p>Name of The patient : </p>
            <label for="doctorsname">Doctors Name </label>
            <input type="text"><br>
            <label for="data">Prescription</label><br>
            <textarea cols="70" rows="80"></textarea>
            <div class="btn">
                <button id="submit-prescription">Submit</button>
            </div>
        </div>

    </div>
</body>

</html>