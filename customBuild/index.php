<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="styleSideBar.css" />
  <link rel="stylesheet" href="styleCard.css" />
  <script src="https://use.fontawesome.com/3903c9d7fd.js"></script>
  <script type="text/javascript">
    function Validate() {
        var caseType = document.getElementById("casetype").value;
        var cases = document.getElementById("case").value;
        var cpuType = document.getElementById("cputype").value;
        var cpu = document.getElementById("cpu").value;
        var mobo = document.getElementById("mobo").value;
        var gpuType = document.getElementById("gputype").value;
        var gpu = document.getElementById("gpu").value;
        var psuType = document.getElementById("psutype").value;
        var psu = document.getElementById("psu").value;
        var strType = document.getElementById("strtype").value;
        var str = document.getElementById("str").value;
        var ramType = document.getElementById("ramtype").value;
        var ram= document.getElementById("ram").value;
        var coolerType = document.getElementById("coolertype").value;
        var cooler = document.getElementById("cooler").value;
        var ostype = document.getElementById("ostype").value;

        if (cases == "") {
            alert("Please select Case!");
            return false;
        }
        if (cpuType == "") {
            alert("Please select Cpu Type!");
            return false;
        }
        if (cpu == "") {
            alert("Please select Cpu!");
            return false;
        }
        if (mobo == "") {
            alert("Please select Motherboard!");
            return false;
        }
        if (gpu == "") {
            alert("Please select Gpu!");
            return false;
        }
        if (psu == "") {
            alert("Please select Powersupply!");
            return false;
        }
        if (str == "") {
            alert("Please select Storage!");
            return false;
        }
        if (ram == "") {
            alert("Please select Ram!");
            return false;
        }
        if (cooler == "") {
            alert("Please select Cooler!");
            return false;
        }
        if (ostype == "") {
            alert("Please select Operating System!");
            return false;
        }
        return true;
    }
</script>


  <script src="script.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#casetype').change(function() {
        var typeid1 = $(this).val();
        $.ajax({
          url: 'action1.php',
          method: 'POST',
          data: {
            typeID1: typeid1
          },
          success: function(data) {
            $('#case').html(data);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#cputype').change(function() {
        var typeid2 = $(this).val();
        $.ajax({
          url: 'action2.php',
          method: 'POST',
          data: {
            typeID2: typeid2
          },
          success: function(data) {
            $('#cpu').html(data);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#cputype').change(function() {
        var typeid3 = $(this).val();
        $.ajax({
          url: 'action3.php',
          method: 'POST',
          data: {
            typeID3: typeid3
          },
          success: function(data) {
            $('#mobo').html(data);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#gputype').change(function() {
        var typeid4 = $(this).val();
        $.ajax({
          url: 'action4.php',
          method: 'POST',
          data: {
            typeID4: typeid4
          },
          success: function(data) {
            $('#gpu').html(data);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#psutype').change(function() {
        var typeid5 = $(this).val();
        $.ajax({
          url: 'action5.php',
          method: 'POST',
          data: {
            typeID5: typeid5
          },
          success: function(data) {
            $('#psu').html(data);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#strtype').change(function() {
        var typeid6 = $(this).val();
        $.ajax({
          url: 'action6.php',
          method: 'POST',
          data: {
            typeID6: typeid6
          },
          success: function(data) {
            $('#str').html(data);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#ramtype').change(function() {
        var typeid7 = $(this).val();
        $.ajax({
          url: 'action7.php',
          method: 'POST',
          data: {
            typeID7: typeid7
          },
          success: function(data) {
            $('#ram').html(data);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#coolertype').change(function() {
        var typeid8 = $(this).val();
        $.ajax({
          url: 'action8.php',
          method: 'POST',
          data: {
            typeID8: typeid8
          },
          success: function(data) {
            $('#cooler').html(data);
          }
        });
      });
    });
  </script>

  <title>TUV Custom Build</title>
</head>

<body>

  <nav class="main-menu">
    <ul>
      <li>
        <a href="../index.html">
          <i class="fa fa-home fa-2x"></i>
          <span class="nav-text">
            Home
          </span>
        </a>

      </li>
      <li class="has-subnav">
        <a href="../index.html">
          <i class="fa fa-laptop fa-2x"></i>
          <span class="nav-text">
            Components
          </span>
        </a>

      </li>

      <li>
        <a href="https://www.lifewire.com/computer-hardware-2625895" target="_blank" rel="noopener noreferrer">
          <i class="fa fa-info fa-2x"></i>
          <span class="nav-text">
            Documentation
          </span>
        </a>
      </li>
    </ul>

    <ul class="logout">
      <li>
        <a href="index.php">
          <i class="fa fa-power-off fa-2x"></i>
          <span class="nav-text">
            Reset
          </span>
        </a>
      </li>
    </ul>
  </nav>

  <div class="caseImg">
  <img src="case.png" alt="cabinet" style="width:400px;height:400px;">
  </div>

  <form action="pdf.php" class="form" method="POST">
    <h1 class="text-center" style="color: white;">Custom Build</h1>
    <!-- Progress bar -->
    <div class="progressbar">
      <div class="progress" id="progress"></div>

      <div class="progress-step progress-step-active" data-title="Case"></div>
      <div class="progress-step" data-title="Cpu"></div>
      <div class="progress-step" data-title="Mobo"></div>
      <div class="progress-step" data-title="Gpu"></div>
      <div class="progress-step" data-title="Psu"></div>
      <div class="progress-step" data-title="Storage"></div>
      <div class="progress-step" data-title="RAM"></div>
      <div class="progress-step" data-title="Cooler"></div>
      <div class="progress-step" data-title="OS"></div>
    </div>

    <!-- Case -->
    <div class="form-step form-step-active">
      <div class="form-group">
        <label for="caseType">Case Type</label>
        <select name="casetype" class="form-control form-control-lg" id="casetype">
          <option value="" disabled selected>-Select Case-</option>
          <?php
          require_once 'config.php';
          $sql = "SELECT * FROM casetype ORDER BY type_name";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <option value="<?= $row["type_id"]; ?>"><?= $row["type_name"]; ?></option>
          <?php
          }
          ?>
        </select>
      </div>

      <br>

      <div class="form-group">
        <label for="case">Case</label>

        <select name="case" class="form-control form-control-lg" id="case">
          <option value="" disabled selected>-Select Case-</option>
        </select>

      </div>

      <br>


      <div class="">
        <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
      </div>
    </div>

    <!-- Cpu -->
    <div class="form-step">
      <div class="form-group">
        <label for="cputype">Cpu Type</label>
        <select name="cputype" class="form-control form-control-lg" id="cputype">
          <option value="" disabled selected>-Select Cpu Type-</option>
          <?php
          require_once 'config.php';
          $sql = "SELECT * FROM cputype ORDER BY type_name";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <option value="<?= $row["type_id"]; ?>"><?= $row["type_name"]; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group">
        <label for="cpu">Cpu</label>
        <select name="cpu" class="form-control form-control-lg" id="cpu">
          <option value="" disabled selected>-Select Cpu-</option>
        </select>
      </div>
      <div class="btns-group">
        <a href="#" class="btn btn-prev">Previous</a>
        <a href="#" class="btn btn-next">Next</a>
      </div>
    </div>

    <!-- Mobo -->
    <div class="form-step">
      <div class="form-group">
        <label for="mobo">Motherboard</label>
        <select name="mobo" class="form-control form-control-lg" id="mobo">
          <option value="" disabled selected>-Please Select CPU first-</option>
        </select>
      </div>
      <br>
      <div class="btns-group">
        <a href="#" class="btn btn-prev">Previous</a>
        <a href="#" class="btn btn-next">Next</a>
      </div>
    </div>

    <!-- Gpu -->
    <div class="form-step">
      <div class="form-group">
        <label for="gputype">Graphics Card Type</label>
        <select name="gputype" class="form-control form-control-lg" id="gputype">
          <option value="" disabled selected>-Graphics Card Type-</option>
          <?php
          require_once 'config.php';
          $sql = "SELECT * FROM gputype ORDER BY type_name";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <option value="<?= $row["type_id"]; ?>"><?= $row["type_name"]; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group">
        <label for="gpu">Graphics Card</label>
        <select name="gpu" class="form-control form-control-lg" id="gpu">
          <option value="" disabled selected>-Select Graphics Card-</option>
        </select>
      </div>
      <div class="btns-group">
        <a href="#" class="btn btn-prev">Previous</a>
        <a href="#" class="btn btn-next">Next</a>
      </div>
    </div>

    <!-- Psu -->
    <div class="form-step">
      <div class="form-group">
        <label for="psutype">Powersupply Type</label>
        <select name="psutype" class="form-control form-control-lg" id="psutype">
          <option value="" disabled selected>-Select Powersupply Type-</option>
          <?php
          require_once 'config.php';
          $sql = "SELECT * FROM psutype ORDER BY type_name";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <option value="<?= $row["type_id"]; ?>"><?= $row["type_name"]; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group">
        <label for="psu">Powersupply</label>
        <select name="psu" class="form-control form-control-lg" id="psu">
          <option value="" disabled selected>-Select Powersupply-</option>
        </select>
      </div>
      <div class="btns-group">
        <a href="#" class="btn btn-prev">Previous</a>
        <a href="#" class="btn btn-next">Next</a>
      </div>
    </div>

    <!-- Storage -->
    <div class="form-step">
      <div class="form-group">
        <label for="strtype">Storage Type</label>
        <select name="strtype" class="form-control form-control-lg" id="strtype">
          <option value="" disabled selected>-Select Storage Type-</option>
          <?php
          require_once 'config.php';
          $sql = "SELECT * FROM strtype ORDER BY type_name";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <option value="<?= $row["type_id"]; ?>"><?= $row["type_name"]; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group">
        <label for="str">Storage</label>
        <select name="str" class="form-control form-control-lg" id="str">
          <option value="" disabled selected>-Select Storage-</option>
        </select>
      </div>
      <div class="btns-group">
        <a href="#" class="btn btn-prev">Previous</a>
        <a href="#" class="btn btn-next">Next</a>
      </div>
    </div>

    <!-- RAM -->
    <div class="form-step">
      <div class="form-group">
        <label for="ramtype">Ram Type</label>
        <select name="ramtype" class="form-control form-control-lg" id="ramtype">
          <option value="" disabled selected>-Select Ram Type-</option>
          <?php
          require_once 'config.php';
          $sql = "SELECT * FROM ramtype ORDER BY type_name";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <option value="<?= $row["type_id"]; ?>"><?= $row["type_name"]; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group">
        <label for="ram">Ram</label>
        <select name="ram" class="form-control form-control-lg" id="ram">
          <option value="" disabled selected>-Select Ram-</option>
        </select>
      </div>
      <div class="btns-group">
        <a href="#" class="btn btn-prev">Previous</a>
        <a href="#" class="btn btn-next">Next</a>
      </div>
    </div>

    <!-- Cooler -->
    <div class="form-step">
      <div class="form-group">
        <label for="coolertype">Cooler Type</label>
        <select name="coolertype" class="form-control form-control-lg" id="coolertype">
          <option value="" disabled selected>-Select Cooler Type-</option>
          <?php
          require_once 'config.php';
          $sql = "SELECT * FROM coolertype ORDER BY type_name";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <option value="<?= $row["type_id"]; ?>"><?= $row["type_name"]; ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="input-group">
        <label for="cooler">Cooler</label>
        <select name="cooler" class="form-control form-control-lg" id="cooler">
          <option value="" disabled selected>-Select Cooler-</option>
        </select>
      </div>
      <div class="btns-group">
        <a href="#" class="btn btn-prev">Previous</a>
        <a href="#" class="btn btn-next">Next</a>
      </div>
    </div>

    <!-- Operating System -->
    <div class="form-step">
      <div class="input-group">
        <label for="ostype">Operating System</label>
        <select name="ostype" class="form-control form-control-lg" id="ostype">
          <option value="" disabled selected>-Select Operating System-</option>
          <?php
          require_once 'config.php';
          $sql = "SELECT * FROM os ORDER BY os_name";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <option value="<?= $row["os_id"]; ?>"><?= $row["os_name"]; ?></option>
          <?php
          }
          ?>
        </select>
      </div>

      <br>

      <div class="btns-group">

        <a href="#" class="btn btn-prev">Previous</a>
        <a href="payment/Transaction.html" class="btn btn-prev" target="_blank">Payment</a>
        <input type="submit" value="Download PDF" class="btn" name="submit" onclick="return Validate()"/>
        

      </div>
    </div>
  </form>
  



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>

<!--https://codepen.io/JFarrow/pen/nJgRga-->