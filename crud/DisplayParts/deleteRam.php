<?php

include '../conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `ram` WHERE ram_id = $id ";

mysqli_query($con, $q);

header('location:displayRam.php');

?>