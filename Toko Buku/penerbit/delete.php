
<?php 
require "../config.php";
$id = $_GET['id'];
$delete = mysqli_query($connect, "DELETE FROM penerbit WHERE id = $id");
header('location:index.php');