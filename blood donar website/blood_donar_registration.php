<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include "user_nav.php";
        include "conn.php";

        if (isset($_POST['submit'])) {
        $name=$_POST["name"];
        $mail=$_POST["mail"];
        $password=$_POST["password"];
        $city=$_POST["city"];
        $phno1=$_POST["phno1"];
        $phno2=$_POST["phno2"];
        $add=$_POST["add"];
        $bg=$_POST["bloodgroup"];

        $sql = "INSERT INTO blood_donar_details (name,mail, password, city, phno1, phno2, address, bloodgroup)
        VALUES ('$name','$mail','$password','$city','$phno1','$phno2','$add','$bg')";
                
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
                }
?>
    <form action="#" method="post" class="form">
        <h3>Register as a New Donar</h3>
        <table class="form_table">
            <tr>
                <td>NAME</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>E-MAIL</td>
                <td><input type="mail" name="mail" required></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>CITY</td>
                <td><input type="text" name="city" required></td>
            </tr>
            <tr>
                <td>PHONE NUMBER</td>
                <td><input type="number" name="phno1" required></td>
            </tr>
            <tr>
                <td>SECONDARY PHONE NUMBER</td>
                <td><input type="number" name="phno2" required></td>
            </tr>
            <tr>
                <td>ADDRESS</td>
                <td><input type="text" name="add" required></td>
            </tr>
            <tr>
                <td>BLOOD GROUP</td>
                <td><input type="text" name="bloodgroup" required></td>
            </tr>
            <tr>
            <td >
        <input type="submit" name="submit" class="btn">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>