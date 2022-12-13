<?php

include '../conn.php';

if (isset($_POST['submit'])) {
    $partid = $_POST['partid'];
    $parentid = $_POST['parentid'];
    $partname = $_POST['partname'];
    $partprice = $_POST['partprice'];

    $sql = " INSERT INTO `strg`(`str_id`,`parent_id`,`str_name`,`str_price`) VALUES ($partid,$parentid,'$partname', $partprice)";

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
                    <h1 class="text-white"> Insert str </h1>
                </div><br>

                <label> Storage Id: </label>
                <input type="text" name="partid" class="form-control"> <br>

                <label> Storage Brand Id: </label>
                <input type="text" name="parentid" class="form-control"> <br>

                <label> Storage Name: </label>
                <input type="text" name="partname" class="form-control"> <br>

                <label> Storage Price: </label>
                <input type="text" name="partprice" class="form-control"> <br>

                <button class="btn btn-success" name="submit" type="submit"> Insert Storage </button><br>

            </div>

        </form>

    </div>

</body>

</html>