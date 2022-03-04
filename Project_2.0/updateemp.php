<?php

    $server = "localhost";
        $username = "root";
        $password = "";
        $database = "dbmsproject";              
        
        $conn = mysqli_connect($server, $username, $password, $database);
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST["emp_id"];

        if($_POST["c1"] == 'v1'){
            $nname = $_POST["nname"];
            $sql =  "UPDATE `emp_details` SET `name` = '$nname' WHERE `emp_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql);
        }

        if($_POST["c1"] == 'v2'){
            $ndoj = $_POST["ndoj"];
            $sql2 =  "UPDATE `emp_details` SET `doj` = '$ndoj' WHERE `emp_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql2); }
        
        if($_POST["c1"] == 'v3'){
            $naddress = $_POST["naddress"];
            $sql3 =  "UPDATE `emp_details` SET `address` = '$naddress' WHERE `emp_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql3);}
        
        if($_POST["c1"] == 'v4'){
            $nphone = $_POST["nphone"];
            $sql4 =  "UPDATE `emp_details` SET `phone` = '$nphone' WHERE `emp_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql4);}

        if($_POST["c1"] == 'v5'){
            $nemail = $_POST["nemail"];
            $sql5 =  "UPDATE `emp_details` SET `email` = '$nemail' WHERE `emp_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql5);}

        if($_POST["c1"] == 'v6'){
            $ngender = $_POST["ngender"];
            $sql6 =  "UPDATE `emp_details` SET `gender` = '$ngender' WHERE `emp_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql6);}

        if($_POST["c1"] == 'v7'){
            $nqualification = $_POST["nqualification"];
            $sql7 =  "UPDATE `emp_details` SET `qualification` = '$qualification' WHERE `emp_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql7);}

        if($_POST["c1"] == 'v8'){
            $ndob = $_POST["ndob"];
            $sql8 =  "UPDATE `emp_details` SET `dob` = '$ndob' WHERE `emp_details`.`emp_id` = '$id';";
            $query = mysqli_query($conn, $sql8);}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Employee</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <a class="logo" href="#"> <span>LOGO</span> </a>
        <ul>
            <li><a href="#">
                    <h3>About</h3>
                </a></li>
            <li><a href="login.php">
                    <h3>LogIn</h3>
                </a></li>
        </ul>
    </header>
    <form class="update" action="updateemp.php" method="POST">
        Employee No:<input type="text" id="emp_id" name="emp_id"><br>
        <br><br>

        What You Want To Update?<br>
        <h5 style="color:red">*Choose 1 at Once</h5><br>
        <input type="radio" onclick="nam()" name="c1" value="v1">Name
        <input type="radio" onclick="doj()" name="c1" value="v2">Date of Joining
        <input type="radio" onclick="address()" name="c1" value="v3">Address
        <input type="radio" onclick="phone()" name="c1" value="v4">Phone
        <input type="radio" onclick="email()" name="c1" value="v5">Email
        <input type="radio" onclick="gender()" name="c1" value="v6">Gender
        <input type="radio" onclick="qualification()" name="c1" value="v7">Qualification
        <input type="radio" onclick="dob()" name="c1" value="v8">Date of Birth<br><br>

        Name: <input type="text" id="nname" name="nname" disabled><br>
        Date of Joining: <input type="date" id="ndoj" name="ndoj"disabled><br>
        Address: <input type="text" id="naddress" name="naddress"disabled><br>
        Phone: <input type="tel" id="nphone" name="nphone"disabled><br>
        Email: <input type="email" id="nemail" name="nemail"disabled><br>
        Gender: <input type="text" id="ngender" name="ngender" disabled><br>
        Qualification: <input type="text" id="nqualification" name="nqualification" disabled><br>
        Date of Birth: <input type="date" id="ndob" name="ndob" disabled>


        <button>Submit</button>
    </form>

    <script>
        function nam() {
            document.getElementById("nname").disabled = false;
            document.getElementById("ndoj").disabled = true;
            document.getElementById("naddress").disabled = true;
            document.getElementById("nphone").disabled = true;
            document.getElementById("nemail").disabled = true;
            document.getElementById("ngender").disabled = true;
            document.getElementById("nqualification").disabled = true;
            document.getElementById("ndob").disabled = true;
        }
        function doj() {
            document.getElementById("nname").disabled = true;
            document.getElementById("ndoj").disabled = false;
            document.getElementById("naddress").disabled = true;
            document.getElementById("nphone").disabled = true;
            document.getElementById("nemail").disabled = true;
            document.getElementById("ngender").disabled = true;
            document.getElementById("nqualification").disabled = true;
            document.getElementById("ndob").disabled = true;;
        }
        function address() {
            document.getElementById("nname").disabled = true;
            document.getElementById("ndoj").disabled = true;
            document.getElementById("naddress").disabled = false;
            document.getElementById("nphone").disabled = true;
            document.getElementById("nemail").disabled = true;
            document.getElementById("ngender").disabled = true;
            document.getElementById("nqualification").disabled = true;
            document.getElementById("ndob").disabled = true;
        }
        function phone() {
            document.getElementById("nname").disabled = true;
            document.getElementById("ndoj").disabled = true;
            document.getElementById("naddress").disabled = true;
            document.getElementById("nphone").disabled = false;
            document.getElementById("nemail").disabled = true;
            document.getElementById("ngender").disabled = true;
            document.getElementById("nqualification").disabled = true;
            document.getElementById("ndob").disabled = true;
        }
        function email() {
            document.getElementById("nname").disabled = true;
            document.getElementById("ndoj").disabled = true;
            document.getElementById("naddress").disabled = true;
            document.getElementById("nphone").disabled = true;
            document.getElementById("nemail").disabled = false;
            document.getElementById("ngender").disabled = true;
            document.getElementById("nqualification").disabled = true;
            document.getElementById("ndob").disabled = true;
        }
        function gender() {
            document.getElementById("nname").disabled = true;
            document.getElementById("ndoj").disabled = true;
            document.getElementById("naddress").disabled = true;
            document.getElementById("nphone").disabled = true;
            document.getElementById("nemail").disabled = true;
            document.getElementById("ngender").disabled = false;
            document.getElementById("nqualification").disabled = true;
            document.getElementById("ndob").disabled = true;
        }
        function qualification() {
            document.getElementById("nname").disabled = true;
            document.getElementById("ndoj").disabled = true;
            document.getElementById("naddress").disabled = true;
            document.getElementById("nphone").disabled = true;
            document.getElementById("nemail").disabled = true;
            document.getElementById("ngender").disabled = true;
            document.getElementById("nqualification").disabled = false;
            document.getElementById("ndob").disabled = true;
        }
        function dob() {
            document.getElementById("nname").disabled = true;
            document.getElementById("ndoj").disabled = true;
            document.getElementById("naddress").disabled = true;
            document.getElementById("nphone").disabled = true;
            document.getElementById("nemail").disabled = true;
            document.getElementById("ngender").disabled = true;
            document.getElementById("nqualification").disabled = true;
            document.getElementById("ndob").disabled = false;
        }
    </script>
</body>

</html>