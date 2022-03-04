<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Of Employees</title>
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
    <table border="1">
        <tr>
            <th>Si.No</th>
            <th>Name</th>
        </tr>
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "dbmsproject";              
        
        $conn = mysqli_connect($server, $username, $password, $database);
        $sql = "SELECT * FROM emp_details";
        $query = mysqli_query($conn, $sql);
        while($result = mysqli_fetch_assoc($query)){
        ?>
            <tr>
                <td> <?php echo $result["emp_id"] ?></td>
                <td> <?php echo $result["name"] ?></td>
            </tr>
        <?php
        }
        ?> 
    </table>
</body>
</html>