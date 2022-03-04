<?php

    $server = "localhost";
        $username = "root";
        $password = "";
        $database = "dbmsproject";              
        
        $conn = mysqli_connect($server, $username, $password, $database);
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST["emp_id"];

        if($_POST["c1"] == 'v1'){
            $nbase = $_POST["nbase"];
            $sql =  "UPDATE `work_details` SET `base_pay` = '$nbase' WHERE `work_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql);
        }

        if($_POST["c1"] == 'v2'){
            $nda = $_POST["nda"];
            $sql =  "UPDATE `work_details` SET `da` = '$nda' WHERE `work_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql); }
        
        if($_POST["c1"] == 'v3'){
            $nhra = $_POST["nhra"];
            $sql =  "UPDATE `work_details` SET `hra` = '$nhra' WHERE `work_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql);}
        
        if($_POST["c1"] == 'v4'){
            $nholiday = $_POST["nholiday"];
            $sql =  "UPDATE `work_details` SET `hld` = '$nholiday' WHERE `work_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql);}

        if($_POST["c1"] == 'v5'){
            $nepf = $_POST["nepf"];
            $sql =  "UPDATE `work_details` SET `epf` = '$nepf' WHERE `work_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql);}

        if($_POST["c1"] == 'v6'){
            $ntax = $_POST["ntax"];
            $sql =  "UPDATE `work_details` SET `tax` = '$ntax' WHERE `work_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql);}

        if($_POST["c1"] == 'v7'){
            $ngpay = $_POST["ngpay"];
            $sql =  "UPDATE `work_details` SET `g_salary` = '$ngpay' WHERE `work_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql);}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Salary</title>
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
    <form class="update" action="updatesalary.php" method="POST">
        Employee No:<input type="text" id="emp_id" name="emp_id"><br>
        <br><br>

        What You Want To Update?<br><h5 style="color:red">*Choose 1 at Once</h5><br>
        <input type="radio" onclick="base()" name="c1" value="v1">Base Pay
        <input type="radio" onclick="da()" name="c1" value="v2">DA
        <input type="radio" onclick="hra()" name="c1" value="v3">HRA
        <input type="radio" onclick="hld()" name="c1" value="v4">Holiday
        <input type="radio" onclick="epf()" name="c1" value="v5">EPF
        <input type="radio" onclick="tax()" name="c1" value="v6">Tax
        <input type="radio" onclick="gpay()" name="c1" value="v7">Gross<br><br>

        Base Pay: <input type="text" id="nbase" name="nbase" disabled><br>
        DA: <input type="text" id="nda" name="nda" disabled><br>
        HRA: <input type="text" id="nhra" name="nhra" disabled><br>
        Holiday: <input type="text" id="nholiday" name="nholiday" disabled><br>
        EPF: <input type="text" id="nepf" name="nepf" disabled><br>
        Tax: <input type="text" id="ntax" name="ntax" disabled><br>
        Gross Salary: <input type="text" id="ngpay" name="ngpay" disabled><br>

    <button>Submit</button>
    </form>

    <script>
    
        function base(){
            document.getElementById("nbase").disabled = false;
            document.getElementById("nda").disabled = true;
            document.getElementById("nhra").disabled = true;
            document.getElementById("nholiday").disabled = true;
            document.getElementById("nepf").disabled = true;
            document.getElementById("ntax").disabled = true;
            document.getElementById("ngpay").disabled = true;
        }
        function da(){
            document.getElementById("nbase").disabled = true;
            document.getElementById("nda").disabled = false;
            document.getElementById("nhra").disabled = true;
            document.getElementById("nholiday").disabled = true;
            document.getElementById("nepf").disabled = true;
            document.getElementById("ntax").disabled = true;
            document.getElementById("ngpay").disabled = true;
        }
        function hra(){
            document.getElementById("nbase").disabled = true;
            document.getElementById("nda").disabled = true;
            document.getElementById("nhra").disabled = false;
            document.getElementById("nholiday").disabled = true;
            document.getElementById("nepf").disabled = true;
            document.getElementById("ntax").disabled = true;
            document.getElementById("ngpay").disabled = true;
        }
        function hld(){
            document.getElementById("nbase").disabled = true;
            document.getElementById("nda").disabled = true;
            document.getElementById("nhra").disabled = true;
            document.getElementById("nholiday").disabled = false;
            document.getElementById("nepf").disabled = true;
            document.getElementById("ntax").disabled = true;
            document.getElementById("ngpay").disabled = true;
        }
        function epf(){
            document.getElementById("nbase").disabled = true;
            document.getElementById("nda").disabled = true;
            document.getElementById("nhra").disabled = true;
            document.getElementById("nholiday").disabled = true;
            document.getElementById("nepf").disabled = false;
            document.getElementById("ntax").disabled = true;
            document.getElementById("ngpay").disabled = true;
        }
        function tax(){
            document.getElementById("nbase").disabled = true;
            document.getElementById("nda").disabled = true;
            document.getElementById("nhra").disabled = true;
            document.getElementById("nholiday").disabled = true;
            document.getElementById("nepf").disabled = true;
            document.getElementById("ntax").disabled = false;
            document.getElementById("ngpay").disabled = true;
        }
        function gpay(){
            document.getElementById("nbase").disabled = true;
            document.getElementById("nda").disabled = true;
            document.getElementById("nhra").disabled = true;
            document.getElementById("nholiday").disabled = true;
            document.getElementById("nepf").disabled = true;
            document.getElementById("ntax").disabled = true;
            document.getElementById("ngpay").disabled = false;
        }
        
    </script>
</body>
</html>