<?php
    require 'config.php';
    $output='';
    $sql = "SELECT * FROM cpu WHERE parent_id='".$_POST['typeID2']."'";
    $result = mysqli_query($conn,$sql);
    $output .= '<option value="" disabled selected>-Select Cpu-</option>';
    while($row=mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["cpu_id"].'">'.$row["cpu_name"].'</option>';
    }
    echo $output;
?> 