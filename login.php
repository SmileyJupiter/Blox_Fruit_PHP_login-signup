
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
<video src="login-background.mp4" style="width: 100%; position: absolute; display: block;" autoplay muted loop=""></video>

    <img src="https://th.bing.com/th/id/R.73e71fd636407bd0e659f0f664dd136a?rik=cPQmFS4W3RY1Xw&riu=http%3a%2f%2fwww.freepngimg.com%2fdownload%2fscroll%2f8-2-scroll-png-clipart.png&ehk=01Pz42X6Io30iotUR5frgqJq2%2fMZOdsiGq40RjBGR0M%3d&risl=&pid=ImgRaw&r=0" width="550px" height="600px">
    
<form action="includes/login.inc.php" method="post"> 
       <br><br><br><br><br><br>
        <h1 class="login-header"> Blox In </h1>
        <div class="username">
            <h3 class="label"> Username </h3>
            <input type="text" name="username" placeholder="Username...">
        </div>
        <div class="password">
            <h3 class="label"> Password </h3>
            <input type="password" name="password" placeholder="Password...">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-danger"> Log In </button>
        <br>
        <p class="signup">Create account? <a href="signup.php">Sign Up</a></p>
        
        
    </form>
    <br><br><br><br>
    <?php 
            if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput") {
                   echo "<p style='color: white; background-color: #D0312D; width: 400px; text-align: center; height: 40px; position: relative; font-size: 25px; border-radius: 10px; opacity: 70%'> Fill in all fields.</p>";
                }
                if ($_GET["error"] == "wronglogin") {
                    echo "<p style='color: white; background-color: #D0312D; width: 400px; text-align: center; height: 40px; position: relative; font-size: 25px; border-radius: 10px; opacity: 70%'>Incorrect login information.</p>";
                }
            }
        ?>
        
</body>
</html>