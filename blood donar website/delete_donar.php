<?php
include "conn.php";
$id = $_GET['id'];
$conn->query("insert into donar_backup select * from blood_donar_details where id=$id");
$result = mysqli_query($conn, "DELETE FROM blood_donar_details WHERE id=$id");
header("location:view_donar_list.php");
?>