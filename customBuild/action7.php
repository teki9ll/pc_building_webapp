<?php
    require 'config.php';
    $output='';
    $sql = "SELECT * FROM ram WHERE parent_id='".$_POST['typeID7']."'";
    $result = mysqli_query($conn,$sql);
    $output .= '<option value="" disabled selected>-Select Ram-</option>';
    while($row=mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["ram_id"].'">'.$row["ram_name"].'</option>';
    }
    echo $output;
?> 