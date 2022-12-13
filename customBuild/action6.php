<?php
    require 'config.php';
    $output='';
    $sql = "SELECT * FROM strg WHERE parent_id='".$_POST['typeID6']."'";
    $result = mysqli_query($conn,$sql);
    $output .= '<option value="" disabled selected>-Select Storage-</option>';
    while($row=mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["str_id"].'">'.$row["str_name"].'</option>';
    }
    echo $output;
?> 