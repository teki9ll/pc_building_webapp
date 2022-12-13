<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Custom Build</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#casetype').change(function(){
                var typeid = $(this).val();
                $.ajax({
                    url:'action.php',
                    method:'POST',
                    data:{typeID:typeid},
                    success:function(data){
                        $('#case').html(data);
                    }
                });
            });
        });
    </script>
  </head>
  <body class="bg-info">
    <div class="container">
        <div class="form-inline row justify-content-center">
            <div class="col-lg-6 bg-light mt-5 p-4 rounded">
                <h5 class="text-center text-info pb-3"> Custom Build </h5>
                <form action="" method="POST">
                    <div class="form-group col-lg-12">
                        <select name="casetype" id="casetype" class="form-control form-control-lg col-lg-5 mt-4 mr-5">
                            <option value="" disabled selected>-Select Case-</option>
                            <?php
                                require_once 'config.php';
                                $sql="SELECT * FROM casetype ORDER BY type_name";
                                $result=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?= $row["type_id"]; ?>"><?= $row["type_name"];?></option>
                            <?php 
                                }
                            ?>
                        </select>
                            
                        <select name="case" id="case" class="form-control form-control-lg col-lg-5 mt-4 ml-4">
                            <option value="" disabled selected>-Select Case-</option>            
                        </select>
                    </div>
    
                    <div class="form-group col-lg-12">
                        <select name="cpu" class="form-control form-control-lg col-lg-5 mt-4 mr-5" id="cpu">
                            <option value="" disabled selected>-Select Cpu-</option>
                        </select>

                        <select name="cpuName" class="form-control form-control-lg col-lg-5 mt-4 ml-4" id="cpuName">
                            <option value="" disabled selected>-Select Cpu Name-</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <select name="mobo" class="form-control form-control-lg col-lg-5 mt-4 mr-5" id="mobo">
                            <option value="" disabled selected>-Select Motherboard-</option>
                        </select>

                        <select name="moboName" class="form-control form-control-lg col-lg-5 mt-4 ml-4" id="moboName">
                            <option value="" disabled selected>-Select Motherboard Name-</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <select name="gpu" class="form-control form-control-lg col-lg-5 mt-4 mr-5" id="gpu">
                            <option value="" disabled selected>-Select Graphics Card-</option>
                        </select>

                        <select name="gpuName" class="form-control form-control-lg col-lg-5 mt-4 ml-4" id="gpuName">
                            <option value="" disabled selected>-Select Graphics Card Name-</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <select name="psu" class="form-control form-control-lg col-lg-5 mt-4 mr-5" id="psu">
                            <option value="" disabled selected>-Select Power Supply-</option>
                        </select>

                        <select name="psuName" class="form-control form-control-lg col-lg-5 mt-4 ml-4" id="psuName">
                            <option value="" disabled selected>-Select Power Supply Name-</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <select name="str" class="form-control form-control-lg col-lg-5 mt-4 mr-5" id="str">
                            <option value="" disabled selected>-Select Storage Type-</option>
                        </select>

                        <select name="strName" class="form-control form-control-lg col-lg-5 mt-4 ml-4" id="strName">
                            <option value="" disabled selected>-Select Storage Name-</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <select name="ram" class="form-control form-control-lg col-lg-5 mt-4 mr-5" id="ram">
                            <option value="" disabled selected>-Select RAM-</option>
                        </select>

                        <select name="ramName" class="form-control form-control-lg col-lg-5 mt-4 ml-4" id="ramName">
                            <option value="" disabled selected>-Select RAM Name-</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <select name="cooler" class="form-control form-control-lg col-lg-5 mt-4 mr-5" id="cooler">
                            <option value="" disabled selected>-Select Cooler Type-</option>
                        </select>

                        <select name="coolerName" class="form-control form-control-lg col-lg-5 mt-4 ml-4" id="coolerName">
                            <option value="" disabled selected>-Select Cooler Name-</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <select name="os" class="form-control form-control-lg col-lg-5 mt-4" id="os">
                            <option value="" disabled selected>-Select Operating System-</option>
                        </select>
                    </div>


                    <div class="form-group col-lg-12">
                        <input type="submit" name="submit" value="BUY" class="btn btn-danger btn-block btn-lg mt-4">
                    </div>
                </form> 
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
