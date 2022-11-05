<?php
include "conn.php";
$id = $_GET['id'];
$conn->query("insert into user_backup select * from user_details where id=$id");
$result = mysqli_query($conn, "DELETE FROM user_details WHERE id=$id");
header("location:admin_home_page.php");
?>