<?php

include '../conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `cpu` WHERE cpu_id = $id ";

mysqli_query($con, $q);

header('location:displayCpu.php');

?>