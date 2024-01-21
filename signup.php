<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="signup_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<video src="signup-background.mp4" style="width: 100%; position: absolute; display: block; margin-top: 45px" autoplay muted loop=""></video>
        <img src="https://th.bing.com/th/id/R.73e71fd636407bd0e659f0f664dd136a?rik=cPQmFS4W3RY1Xw&riu=http%3a%2f%2fwww.freepngimg.com%2fdownload%2fscroll%2f8-2-scroll-png-clipart.png&ehk=01Pz42X6Io30iotUR5frgqJq2%2fMZOdsiGq40RjBGR0M%3d&risl=&pid=ImgRaw&r=0" width="550px" height="760px">
        <br>
            <form action="includes/signup.inc.php" method="post"> 
                <br><br><br><br><br><br>
                <h1 class="signup-header"> Blox Up </h1>
                <div>
                    <h3 class="label"> Age </h3>
                    <input type="number" name="age" placeholder="Age...">
                </div>
                <div class="username">
                    <h3 class="label"> Username </h3>
                    <input type="text" name="username" placeholder="Username...">
                </div>
                <div class="password">
                    <h3 class="label"> Password </h3>
                    <input type="password" name="password" placeholder="Password...">
                </div>
                <div>
                    <h3 class="label"> Repeat Password </h3>
                    <input type="password" name="repeatpassword" placeholder="Repeat Password...">
                </div>
               <br>
                <button type="sumbit" name="submit" class="btn btn-danger"> Sign Up </button>
                <p class="login"><strong>Already have an account? <a href="login.php">Blox In</a></strong></p>
                <br><br><br>
            </form>
            <br><br><br>
            <?php 
                if (isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p style='color: white; background-color: #D0312D; width: 400px; text-align: center; height: 40px; position: sticky; font-size: 25px; border-radius: 10px; opacity: 70%; pading-top: 100px;'> Fill in all fields.</p>";
                    }
                    if ($_GET["error"] == "invalidusername") {
                        echo "<p style='color: white; background-color: #D0312D; width: 400px; text-align: center; height: 40px; position: relative; font-size: 25px; border-radius: 10px; opacity: 70%'>Enter a proper username.</p>";
                    }
                    if ($_GET["error"] == "passworddontmatch") {
                        echo "<p style='color: white; background-color: #D0312D; width: 400px; text-align: center; height: 40px; position: relative; font-size: 25px; border-radius: 10px; opacity: 70%'>Passwords doesn't match.</p>";
                    }
                    if ($_GET["error"] =="password-needs-8-character-or-more") {
                        echo "<p style='color: white; background-color: #D0312D; width: 400px; text-align: center; height: 40px; position: relative; font-size: 25px; border-radius: 10px; opacity: 70%'>Password need 8 characters long.</p>";
                    }
                    if ($_GET["error"] == "stmtfailed") {
                        echo "<p style='color: white; background-color: #D0312D; width: 400px; text-align: center; height: 40px; position: relative; font-size: 25px; border-radius: 10px; opacity: 70%'>Something went wrong.</p>";
                    }
                    if ($_GET["error"] == "usernametaken") {
                        echo "<p style='color: white; background-color: #D0312D; width: 400px; text-align: center; height: 40px; position: relative; font-size: 25px; border-radius: 10px; opacity: 70%'>Username is already taken.</p>";
                    }
                }
            ?>
</body>
</html>