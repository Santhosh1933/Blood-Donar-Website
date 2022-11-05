<?php
include "conn.php";
$id = $_GET['id'];
$conn->query("insert into user_details select * from user_backup where id=$id");
$result = mysqli_query($conn, "DELETE FROM user_backup WHERE id=$id");
header("location:admin_home_page.php");
?>