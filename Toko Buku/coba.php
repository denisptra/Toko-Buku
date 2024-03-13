<?php 
require "config.php";
$buku = mysqli_query($connect, "SELECT * FROM buku");
?>
<?php
foreach ($buku as $key) {
?>
<li><?= $key['kode'] ?></li>
<?php
} 
?>