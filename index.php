<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anindita clinic</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php include('./Navbar/Nav.html'); ?>
    <div class="main-body">
        <img src="./image/bgIcon.jpg" />
    </div>
    <div class="login">
        <h1>Sign in</h1>
        <form name="form1" method="POST" action="authentication.php" onsubmit="return validatioin()">
            <label for="username">username</label>
            <input name="username" id="username" type="text"><br>

            <label for="password">password</label>
            <input name="password" id="username" type="password">
            <br>
            <label for="role">your role</label>
            <select name="role" id="role">
                <option value="Admin">Admin</option>
                <option value="Doctors">Doctors</option>
                <option value="Reciptionist">Reciptionist</option>
            </select>
            <br>
            <div>
                <button type="submit">Sign in</button>
            </div>
        </form>

    </div>
    <script>
        function validatioin() {
            username = document.form1.username.value;
            password = document.form1.password.value;
            role = document.form1.role.value;

            if(username.length =="" && password.length == "" ){
                alert("Please complete the required fields");
                return false;
            }
            
        }
    </script>


</body>

</html>