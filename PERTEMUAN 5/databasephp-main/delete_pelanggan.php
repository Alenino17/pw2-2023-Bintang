<?php
require_once 'dbkoneksi.php';
$_iddel=$_GET['iddel'];
$sql="DLETE FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);

header('location:list_pelanggan.php');
?>