<?php

include '../conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `psu` WHERE psu_id = $id ";

mysqli_query($con, $q);

header('location:displayCase.php');

?>