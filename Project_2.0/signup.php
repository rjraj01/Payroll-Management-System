<?php
$insert = false;

        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "dbmsproject";

        $con = mysqli_connect($server, $username, $password, $database);
        if($_SERVER["REQUEST_METHOD"] == "POST"){

        $user = $_POST["username"];
        $pass = $_POST["password"];
        $cpass = $_POST["cpassword"];

        if($pass == $cpass){
            $insert = false;
            $sql = "INSERT INTO login (`username`, `password`) values ('$user', '$cpass');";

            $result = mysqli_query($con, $sql);
       
            $con->close();
        }
        else{
            $insert =  true;
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a  class="logo" href="#"> <span>LOGO</span> </a>
        <ul>
            <li><a href="#"><h3>About</h3></a></li>
            <li><a href="login.php"><h3>LogIn</h3></a></li>
        </ul>
    </header>
    <div class="container3">
        <form action="signup.php" method="POST">           
            <h2>Register Here</h2>
            <?php
            if($insert){
                echo "<center><h3 style='color:red'>Enter Same Password</h3></center>";
            }
            ?>
            <br><label class="user">Username: </label><input type="text" id="username" name="username" placeholder="abc123"><br><br>
            <label class="pass">Password: </label><input type="password" id="password" name="password"><br><br>
            <label class="pass">Confirm Password: </label><input type="password" id="cpassword" name="cpassword"><br><br>
            <button class="btn" onclick="bt()">Register</button>
            
        </form>
    </div>
    <!-- <script>
        function bt(){
            var p1 = document.getElementById("password").value;
            var p2 = document.getElementById("cpassword").value;
            if(p1 != p2){
                document.getElementById("er").innerHTML="Enter Same Password";
            }
        }
    </script> -->
</body>
</html>