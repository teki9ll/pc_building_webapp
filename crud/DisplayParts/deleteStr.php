<?php

include '../conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `strg` WHERE str_id = $id ";

mysqli_query($con, $q);

header('location:displayStr.php');

?>