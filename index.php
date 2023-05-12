<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/indexstyle.css">
</head>
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
        <div class="leftside">
        <div class="login">
            <form  method="POST">
                <label for="Name">Name:</label>
                <input class="name" type="text" id="name" placeholder="User Name:">
                <br>
                <label for="Password">Password</label>
                <input class="password" type="password" id="password" placeholder="Password:">
                <br>
                <br>
                <input class="slogin" type="submit" id="submit" value="Log in">
            </form>
            <br>
            <a href="signup.php" class="buttonc">Create New Account</a>
        </div>
        </div>
    </div>
    <div class="footer"></div>
    
</body>
</html>