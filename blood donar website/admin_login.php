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
        $sql ="SELECT * from admin where name='$name' and password='$password'";
        $res=$conn->query($sql);
        if ($res->num_rows>0) {        
            $row_res=mysqli_fetch_assoc($res);
            $_SESSION["name"] = $row_res["name"];
            header("location:admin_home_page.php");
        } else {
        echo "user name or password wrong";
        }
        }
?>
    <form action="admin_login.php" method="post" class="form">
        <h3>LOGIN</h3>
        <table class="form_table">
            <tr>
                <td>USER NAME</td>
                <td><input type="text" name="name" required></td>
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