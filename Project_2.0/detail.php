<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "dbmsproject";              

    $conn = mysqli_connect($server, $username, $password, $database);

    $hasResult = false;

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = $_POST["emp_id"];

    $sql = "SELECT * FROM emp_details WHERE emp_id = '$id';";

    $query = mysqli_query($conn, $sql);

    $result = mysqli_fetch_assoc($query);

    $hasResult = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Details</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a  class="logo" href="index.php"> <span>LOGO</span> </a>
        <ul>
            <li><a href="#"><h3>About</h3></a></li>
            <li><a href="login.php"><h3>LogIn</h3></a></li>
        </ul>
    </header>
    <form class="detail" action="detail.php" method="POST">
        Employee No:<input type="text" id="emp_id" name="emp_id"><br>
        <button>Submit</button>
        <br><br>

        <?php

if($hasResult){
        echo 'Name: <input type="text" value='.$result["name"].' disabled><br/>';
        echo 'Date of Joining: <input type="text" value='.$result["doj"].' disabled><br/>';
        echo 'Address: <input type="text" value='.$result["address"].' disabled><br/>';
        echo 'Phone No: <input type="text" value='.$result["phone"].' disabled><br/>';
        echo 'Email Id: <input type="text" value='.$result["email"].' disabled><br/>';
        echo 'Gender: <input type="text" value='.$result["gender"].' disabled><br/>';
        echo 'Qualification: <input type="text" value='.$result["qualification"].' disabled><br/>';
        echo 'Date of Birth: <input type="text" value='.$result["dob"].' disabled><br/>';
        }
        ?>
    </form>
</body>
</html>