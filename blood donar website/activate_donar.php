<?php
include "conn.php";
$id = $_GET['id'];
$conn->query("insert into blood_donar_details select * from donar_backup where id=$id");
$result = mysqli_query($conn, "DELETE FROM donar_backup WHERE id=$id");
header("location:view_donar_list.php");
?>