<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "dbmsproject";              

    $conn = mysqli_connect($server, $username, $password, $database);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $emp_id = $_POST["emp_id"];
    $base = $_POST["basepay"];
    $da = $_POST["da"];
    $hra = $_POST["hra"];
    $hld = $_POST["hld"];
    $epf = $_POST["epf"];
    $tax = $_POST["tax"];


    $sql = "INSERT INTO `work_details` (`emp_id`, `base_pay`, `da`, `hra`, `hld`, `epf`, `tax`, `g_salary`) VALUES ('$emp_id', '$base', '$da', '$hra', '$hld', '$epf', '$tax', NULL);";

    $result = mysqli_query($conn, $sql);

    $sql2 = "UPDATE `work_details` SET `g_salary`= '$base'+'$da'+'$hra'+'$hld'-'$epf'-'$tax' WHERE `emp_id`= '$emp_id';";

    $result2 = mysqli_query($conn, $sql2);

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Set PayScale</title>
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
    <form class="setpay" action="setpayscale.php" method="POST">
        <label>Employee No: </label><input type="text" id="emp_id" name="emp_id"><br>
        <label>Base Pay: </label><input type="text" id="basepay" name="basepay"><br>
        <label>DA: </label><input type="text" id="da" name="da"><br>
        <label>HRA: </label><input type="text" id="hra" name="hra"><br>
        <label>Holiday: </label><input type="text" id="hld" name="hld"><br>
        <label>Employee Fund: </label><input type="text" id="epf" name="epf"><br>
        <label>Tax: </label><input type="text" id="tax" name="tax"><br>
        <button>Submit</button>
    </form>
</body>
</html>