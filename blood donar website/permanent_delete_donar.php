<?php
include "conn.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM donar_backup WHERE id=$id");
header("location:view_removed_donar_list.php");
?>