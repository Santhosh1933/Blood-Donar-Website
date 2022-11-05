<?php
    session_start();
    if(!isset($_SESSION["name"])){
        header("location:login.php");
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

    <?php include"user_nav.php" ;
    include"conn.php";
    
    $sql ="SELECT * from blood_donar_details";
        $res=$conn->query($sql);
        $name=$_SESSION['name'];
echo "<h1>Hello $name</h1>";
?>

    <form class="search" method="post" action="user_home_page.php">
        <div>
            <input type="text" placeholder='search by Blood Group' name="bg">
            <input type="submit" value="search" name="search_bg" class="btn">
        </div>
        <div>
            <input type="text" placeholder='search by city' name="city" >
            <input type="submit" value="search" name="search_city" class="btn" >
        </div>
</form>
<table>
        <tr>
            <th>NAME</th>
            <th>BLOOD GROUP</th>
            <th>CITY</th>
            <th>ADDRESS</th>
            <th>PHONE NUMBER 1</th>
            <th>PHONE NUMBER 2</th>
        </tr>
        <?php
        if (isset($_POST['search_bg'])) {
            $bg=$_POST["bg"];
            $bg_sql ="SELECT * from blood_donar_details where bloodgroup like '%$bg%'";
            $bg_res=$conn->query($bg_sql);
        if($bg_res->num_rows>0){
                while($row1 = mysqli_fetch_assoc($bg_res)){
                ?>
        <tr>
            <td>
                <?php echo $row1['name']; ?>
            </td>
            <td>
                <?php echo $row1['bloodgroup']; ?>
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
        <tr>
            <?php
            }}}
            ?>
        <?php
         
         if (isset($_POST['search_city'])) {
            $city=$_POST["city"];
            $city_sql ="SELECT * from blood_donar_details where city like '%$city%'";
            $city_res=$conn->query($city_sql);
        if($city_res->num_rows>0){
                while($row1 = mysqli_fetch_assoc($city_res)){
                ?>
        <tr>
            <td>
                <?php echo $row1['name']; ?>
            </td>
            <td>
                <?php echo $row1['bloodgroup']; ?>
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
        <tr>
            <?php
            }}}
            ?>

    </table>
    <table>
        <tr>
            <th>NAME</th>
            <th>BLOOD GROUP</th>
            <th>CITY</th>
            <th>ADDRESS</th>
            <th>PHONE NUMBER 1</th>
            <th>PHONE NUMBER 2</th>
        </tr>
        <?php
                while($row = mysqli_fetch_assoc($res)){
                ?>
        <tr>
            <td>
                <?php echo $row['name']; ?>
            </td>
            <td>
                <?php echo $row['bloodgroup']; ?>
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
        <tr>
            <?php
            }
            ?>

    </table>

</body>

</html>