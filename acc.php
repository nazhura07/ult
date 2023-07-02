<?php

include 'conn.php';
$id = $_GET["id_laporan"];

$sql = "UPDATE `form_pengisian` SET `status` = 'sudah acc' WHERE `form_pengisian`.`id_laporan` = $id";
mysqli_query($koneksi,$sql);

header("Location: dataadmin.php");
?>