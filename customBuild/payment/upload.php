<?php
include '../config.php';
if (isset($_POST['submit'])) {
    $pdfd = addslashes(file_get_contents($_FILES["pdf"]['tmp_name']));
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $sql = "INSERT INTO `orders` (`c_name`,`c_address`,`c_email`,`pdf`) VALUES ('$name','$address','$email','$pdfd')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "New record created successfully";
        header('location:success.html');
    } else {
        echo "Error";
    }
}
?>