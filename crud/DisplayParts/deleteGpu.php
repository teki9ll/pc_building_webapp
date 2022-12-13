<?php

include '../conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `gpu` WHERE gpu_id = $id ";

mysqli_query($con, $q);

header('location:displayGpu.php');

?>