<?php
include "conn.php";
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM user_backup WHERE id=$id");
header("location:view_removed_user_list.php");
?>