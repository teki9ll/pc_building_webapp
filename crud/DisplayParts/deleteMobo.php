<?php

include '../conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `mobo` WHERE mobo_id = $id ";

mysqli_query($con, $q);

header('location:displayMobo.php');

?>