<?php

include '../conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `cooler` WHERE cooler_id = $id ";

mysqli_query($con, $q);

header('location:displayCooler.php');

?>