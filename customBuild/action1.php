<?php
    require 'config.php';
    $output='';
    $sql = "SELECT * FROM cases WHERE parent_id='".$_POST['typeID1']."'";
    $result = mysqli_query($conn,$sql);
    $output .= '<option value="" disabled selected>-Select Case-</option>';
    while($row=mysqli_fetch_array($result)){
        $output .= '<option value="'.$row["case_id"].'">'.$row["case_name"].'</option>';
    }
    echo $output;
?> 