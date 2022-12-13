<?php
    require 'config.php';
    $output='';
    $sql = "SELECT * FROM psu WHERE parent_id='".$_POST['typeID5']."'";
    $result = mysqli_query($conn,$sql);
    $output .= '<option value="" disabled selected>-Select Powersupply-</option>';
    while($row=mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["psu_id"].'">'.$row["psu_name"].'</option>';
    }
    echo $output;
?> 