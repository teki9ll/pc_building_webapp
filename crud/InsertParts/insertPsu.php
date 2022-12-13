<?php

include '../conn.php';

if (isset($_POST['submit'])) {
    $partid = $_POST['partid'];
    $parentid = $_POST['parentid'];
    $partname = $_POST['partname'];
    $partprice = $_POST['partprice'];

    $sql = " INSERT INTO `psu`(`psu_id`,`parent_id`,`psu_name`,`psu_price`) VALUES ($partid,$parentid,'$partname', $partprice)";

    if (mysqli_query($con, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Could not insert record: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="col-lg-6 m-auto">
        <form method="post">
            <br><br>
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white"> Insert psu </h1>
                </div><br>

                <label> Psu Id: </label>
                <input type="text" name="partid" class="form-control"> <br>

                <label> Psu Brand Id: </label>
                <input type="text" name="parentid" class="form-control"> <br>

                <label> Psu Name: </label>
                <input type="text" name="partname" class="form-control"> <br>

                <label> Psu Price: </label>
                <input type="text" name="partprice" class="form-control"> <br>

                <button class="btn btn-success" name="submit" type="submit"> Insert Psu </button><br>

            </div>

        </form>

    </div>

</body>

</html>