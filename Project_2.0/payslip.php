<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "dbmsproject";              

    $conn = mysqli_connect($server, $username, $password, $database);

    $hasResult = false;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["emp_id"];

    $sql = "SELECT * FROM `emp_details` INNER JOIN `work_details` ON `emp_details`.`emp_id` = `work_details`.`emp_id` WHERE `work_details`.`emp_id`= '$id';";

    $query = mysqli_query($conn, $sql);

    $result = mysqli_fetch_assoc($query);

    $hasResult = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>PaySlip</title>
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
    <form class="detail" action="payslip.php" method="POST">
        Employee No:<input type="text" id="emp_id" name="emp_id"><br>
        <button>Submit</button>
        <br><br>


        <?php

        if($hasResult){
            echo 'Name: <input type="text" value='.$result["name"].' disabled><br/>';
            echo 'Email Id: <input type="text" value='.$result["email"].' disabled><br/>';
            echo 'Base Pay: <input type="text" value='.$result["base_pay"].' disabled><br/>';
            echo 'DA: <input type="text" value='.$result["da"].' disabled><br/>';
            echo 'HRA: <input type="text" value='.$result["hra"].' disabled><br/>';
            echo 'Tax Amount: <input type="text" value='.$result["tax"].' disabled><br/>';
            echo 'Gross Salary: <input type="text" value='.$result["g_salary"].' disabled><br/>';
        }
        ?>
    </form>
</body>
</html>