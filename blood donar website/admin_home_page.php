<?php
    session_start();
    if(!isset($_SESSION["name"])){
        header("location:admin_login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blood donar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="home">

    <?php include"admin_nav.php" ;
    include"conn.php";
    
    $sql ="SELECT * from user_details";
        $res=$conn->query($sql);
        // echo $_SESSION["name"];
?>
    <h1>USER LIST</h1>
    <form class="search" method="post" action="admin_home_page.php">
        <div>
            <input type="text" placeholder='search by Blood Group' name="bg">
            <input type="submit" value="search" name="search_bg" >
        </div>
        <div>
            <input type="text" placeholder='search by city' name="city">
            <input type="submit" value="search" name="search_city" >
        </div>
    </form>
    <table>
        <tr>
            <th>SNO</th>
            <th>NAME</th>
            <th>MAIL</th>
            <th>PASSWORD</th>
            <th>BLOOD GROUP</th>
            <th>CITY</th>
            <th>ADDRESS</th>
            <th>PHONE NUMBER 1</th>
            <th>PHONE NUMBER 2</th>
            <th>REMOVE</th>
        </tr>
        <?php

        if (isset($_POST['search_bg'])) {
            $bg=$_POST["bg"];
            $bg_sql ="SELECT * from user_details where bloodgroup like '%$bg%'";
            $bg_res=$conn->query($bg_sql);
            $i=0;
        if($bg_res->num_rows>0){
                while($row1 = mysqli_fetch_assoc($bg_res)){
                    $i++;
                ?>
        <tr>
            <td>
                <?php echo $i?>
            </td>
            <td>
                <?php echo $row1['name']; ?>
            </td>
            <td>
                <?php echo $row1['bloodgroup']; ?>
            </td>
            <td>
                <?php echo $row1['mail']; ?>
            </td>
            <td>
                <?php echo $row1['password']; ?>
            </td>
            <td>
                <?php echo $row1['city']; ?>
            </td>
            <td>
                <?php echo $row1['address']; ?>
            </td>
            <td>
                <?php echo $row1['phno1']; ?>
            </td>
            <td>
                <?php echo $row1['phno2']; ?>
            </td>
            <td>
            <?php
                echo "<a href='delete.php?id=$row[id]' class='del'>DELETE</a>";
                ?>
            </td>
        <tr>
            <?php
            }}}
            ?>
            <?php
         
         if (isset($_POST['search_city'])) {
            $city=$_POST["city"];
            $city_sql ="SELECT * from user_details where city like '%$city%'";
            $city_res=$conn->query($city_sql);
            $i=0;
        if($city_res->num_rows>0){
                while($row1 = mysqli_fetch_assoc($city_res)){
                    $i++;
                ?>
        <tr>
            <td>
                <?php echo $i?>
            </td>
            <td>
                <?php echo $row1['name']; ?>
            </td>
            <td>
                <?php echo $row1['bloodgroup']; ?>
            </td>
            <td>
                <?php echo $row1['mail']; ?>
            </td>
            <td>
                <?php echo $row1['password']; ?>
            </td>
            <td>
                <?php echo $row1['city']; ?>
            </td>
            <td>
                <?php echo $row1['address']; ?>
            </td>
            <td>
                <?php echo $row1['phno1']; ?>
            </td>
            <td>
                <?php echo $row1['phno2']; ?>
            </td>
            <td>
            <?php
                echo "<a href='delete.php?id=$row[id]'  class='del'>DELETE</a>";
                ?>
            </td>
        <tr>
            <?php
            }}}
            ?>

    </table>
    <table>
        <tr>
            <th>SNO</th>
            <th>NAME</th>
            <th>MAIL</th>
            <th>PASSWORD</th>
            <th>BLOOD GROUP</th>
            <th>CITY</th>
            <th>ADDRESS</th>
            <th>PHONE NUMBER 1</th>
            <th>PHONE NUMBER 2</th>
            <th>REMOVE</th>
        </tr>
        <?php
        $i=0;
                while($row = mysqli_fetch_assoc($res)){
                    $i++;
                ?>
        <tr>
            <td>
                <?php echo $i?>
            </td>
            <td>
                <?php echo $row['name']; ?>
            </td>
            <td>
                <?php echo $row['bloodgroup']; ?>
            </td>
            <td>
                <?php echo $row['mail']; ?>
            </td>
            <td>
                <?php echo $row['password']; ?>
            </td>
            <td>
                <?php echo $row['city']; ?>
            </td>
            <td>
                <?php echo $row['address']; ?>
            </td>
            <td>
                <?php echo $row['phno1']; ?>
            </td>
            <td>
                <?php echo $row['phno2']; ?>
            </td>
            <td>
            <?php
                echo "<a href='delete.php?id=$row[id]'  class='del'>DELETE</a>";
                ?>
            </td>
        <tr>
            <?php
            }
            ?>

    </table>

</body>

</html>