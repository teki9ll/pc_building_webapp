<?php

include '../conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `cases` WHERE case_id = $id ";

mysqli_query($con, $q);

header('location:displayCase.php');

?>