<?php
    require 'config.php';
    $output='';
    $sql = "SELECT * FROM gpu WHERE parent_id='".$_POST['typeID4']."'";
    $result = mysqli_query($conn,$sql);
    $output .= '<option value="" disabled selected>-Select Graphics Card-</option>';
    while($row=mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["gpu_id"].'">'.$row["gpu_name"].'</option>';
    }
    echo $output;
?> 