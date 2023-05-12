<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <link rel="stylesheet" href="CSS/signup.css">
</head>
<?php
    session_start ();

    include("connect.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fname = $_POST['fname'];
        $password = $_POST['Pword'];
        $id = $_POST['id'];
        $gender = $_POST['gender'];
  

        if (!empty($fname) && !empty($password)){

            $query = "INSERT INTO svccinfo(`name`,`password`,`ID#`,`gender`) values ('$fname','$password','$id','$gender')";
            
            mysqli_query($conn, $query);

            echo "<script type = 'text/javascript'> alert ('Successfully Register')</script>";
            
        }
        else {
            echo "<script type = 'text/javascript'> alert ('Please Fill up all registration form')</script>";
        }
    }
?>
<body>
    <div class="header">
        <div class="Logo">
            <img src="images/svclogo.png" alt="SvccLogo">
        </div>
        <div class="text">
            <h1>Saint Vincent College of Cabuyao</h1>
        </div>
    </div>
    <div class="article">
        <div class="center">
            <div class="createacc">
                <form method="POST">
                <label for="name">Name</label>
                <input type="text" class="input" placeholder="Name:" name="fname" required>
                <br>
                <br>
                <label for="password">Password</label>
                <input type="password" class="input" placeholder="Password:" name="Pword" required>
                <br>
                <br>
                <label for="id">ID#</label>
                <input type="text" class="input" placeholder="ID#:" name="id" required >
                <br>
                <br>
                <div class="genders">
                    <h3>Gender</h3>
                    <label for="myRadioid" class="radio">
                        <input type="radio" id="myradioid" class="radio_input" value="Female" name="gender" required >
                        <div class="radio_radio">
                            Female
                        </div>
                        
                    </label>
                    <label for="myRadioid" class="radio">
                        <input type="radio"  id="myradioid" class="radio_input" value="Male" name="gender" required>
                        <div class="radio_radio">
                            Male
                        </div>
                        
                    </label>
                </div>
                <br>    
                <input class="signup" id="submit" type="submit" value="Create">
                <br>
                <p><a href="index.php" class="logins">Log in</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>