<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "dbmsproject";              

    $conn = mysqli_connect($server, $username, $password, $database);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $doj = $_POST["doj"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $qualification = $_POST["qualification"];
    $dob = $_POST["dob"];

    $sql = "INSERT INTO emp_details (`name`,`doj`,`address`,`phone`,`email`,`gender`,`qualification`,`dob`) VALUES ('$name','$doj','$address','$phone','$email','$gender','$qualification','$dob');";

    $result = mysqli_query($conn, $sql);

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Employee</title>
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
    <form class="addemp" action="addnewemp.php" method="POST">
        <label>Name: </label><input type="text" id="name" name="name"><br>
        <label>Date of Joining: </label><input type="date" id="doj" name="doj"><br>
        <label>Address: </label><input type="text" id="address" name="address"><br>
        <label>Phone: </label><input type="tel" id="phone" name="phone"><br>
        <label>E-mail: </label><input type="email" id="email" name="email"><br>
        <label>Gender: </label><input type="text" id="gender" name="gender"><br>
        <label>Quallification: </label><input type="text" id="qualification" name="qualification"><br>
        <label>Date of Birth: </label><input type="date" id="dob" name="dob"><br>
        <button>Submit</button>
    </form>
</body>
</html>