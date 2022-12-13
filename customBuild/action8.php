<?php
    require 'config.php';
    $output='';
    $sql = "SELECT * FROM cooler WHERE parent_id='".$_POST['typeID8']."'";
    $result = mysqli_query($conn,$sql);
    $output .= '<option value="" disabled selected>-Select Cooler-</option>';
    while($row=mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["cooler_id"].'">'.$row["cooler_name"].'</option>';
    }
    echo $output;
?> 