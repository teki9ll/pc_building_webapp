<?php
    require 'config.php';
    $output='';
    $sql = "SELECT * FROM mobo WHERE parent_id='".$_POST['typeID3']."'";
    $result = mysqli_query($conn,$sql);
    $output .= '<option value="" disabled selected>-Select Motherboard-</option>';
    while($row=mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["mobo_id"].'">'.$row["mobo_name"].'</option>';
    }
    echo $output;
?> 