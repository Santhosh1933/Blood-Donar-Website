<?php
        session_start();

?>

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
    
<?php include "login_nav.php";
        include "conn.php";

        if (isset($_POST['submit'])) {
        $name=$_POST["name"];
        $password=$_POST["password"];    
        $sql ="SELECT * from user_details where mail='$name' and password='$password'";
        $res=$conn->query($sql);

        if ($res->num_rows>0) {        
            $row_res=mysqli_fetch_assoc($res);
            $_SESSION["name"] = $row_res["name"];
            header("location:user_home_page.php");
        } else {
        echo "<script>alert('user name or password wrong');</script>";
        }
                }
?>
    <form action="login.php" method="post" class="form">
        <h3>USER LOGIN</h3>
        <table class="form_table">
            <tr>
                <td>MAIL-ID</td>
                <td><input type="mail" name="name" required></td>
            </tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
<td>
            <input type="submit" name="submit" class="btn">
            </td>
            </tr>
        </table>
    </form>
</body>
</html>