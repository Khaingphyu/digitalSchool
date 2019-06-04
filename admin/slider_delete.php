<?php
 include("database.php");
 $id = $_GET['id'];
 $sql = "DELETE FROM images WHERE id = $id";
 mysqli_query($conn, $sql);
 header("location: slider_list.php");
?>