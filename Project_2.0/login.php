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

    $sql = "SELECT * FROM login WHERE username = '".$user."' and password = '".$pass."' limit 1";
    $result = mysqli_query($con, $sql);
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count ==1){
        // die("Login successful");
        header('Location: index.php');
    }
    else{
        $insert = true;
        // echo "Login failed. Invalid Username or Password";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>LogIn</title>
</head>
<body>
    <header>
        <a  class="logo" href="#"> <span>LOGO</span> </a>
        <ul>
            <li><a href="#"><h3>About</h3></a></li>
            <li><a href="signup.php"><h3>Sign Up</h3></a></li>
        </ul>
    </header>
    <div class="container">
        <form action="login.php" method="POST">           
            <h2>Log In</h2>
            <?php
            if($insert){
                echo "<center><h3 style='color:red'>Invalid Username or Password</h3></center>";
            }
            ?>
            <br><label class="user">Username: </label><input type="text" id="username" name="username" placeholder="abc123"><br><br>
            <label class="pass">Password: </label><input type="password" id="password" name="password"><br><br>
            <button class="btn">Log In</button><br>
            <!-- <label class="forget"><a href="#" style="color:blue">Forget Password?</a></label> -->
            
        </form>
    </div>
</body>
</html>