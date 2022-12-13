<?php

include '../conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `os` WHERE os_id = $id ";

mysqli_query($con, $q);

header('location:displayOs.php');

?>