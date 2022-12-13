<?php
session_start();
?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsiive Admin Dashboard | CodingLab </title>
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .box {
      justify-content: center;
    }

    .box:hover {
      transform: scale(1.05);
      z-index: 2;
    }

    .dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

  </style>

</head>

<body>
<?php
if($_SESSION["name"]) {
?>

<div class="sidebar">
    <div class="logo-details">
      <i class="bi bi-cpu"></i>
      <a class="logo_name" href="../../index.html">TUV</a>
      
    </div>
    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-box'></i>
          <span class="links_name">Product</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Order list</span>
        </a>
      </li>
      <li class="log_out">
        <a href="../logout.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>

      <div class="profile-details">
        <span class="admin_name">* ADMIN PANEL TUV *</span>
      </div>
    </nav>
    <br><br><br><br>
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="dropdown">
            <button class="dropbtn"><b>DISPLAY BRANDS</b><i class='bx bx-chevron-down' ></i></button>
            <div class="dropdown-content">
              <a href="../DisplayBrand/displayCaseBrand.php">Case</a>
              <a href="../DisplayBrand/displayCpuBrand.php">Cpu</a>
              <a href="../DisplayBrand/displayGpuBrand.php">Gpu</a>
              <a href="../DisplayBrand/displayPsuBrand.php">Psu</a>
              <a href="../DisplayBrand/displayRamBrand.php">Ram</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="dropdown">
            <button class="dropbtn"><b>INSERT BRANDS</b><i class='bx bx-plus'></i></button>
            <div class="dropdown-content">
              <a href="../InsertBrand/insertCaseBrand.php">Case</a>
              <a href="../InsertBrand/insertCpuBrand.php">Cpu</a>
              <a href="../InsertBrand/insertGpuBrand.php">Gpu</a>
              <a href="../InsertBrand/insertPsuBrand.php">Psu</a>
              <a href="../InsertBrand/insertRamBrand.php">Ram</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="dropdown">
            <button class="dropbtn"><b>DISPLAY PARTS</b><i class='bx bx-chevron-down' ></i></button>
            <div class="dropdown-content">
              <a href="../DisplayParts/displayCase.php">Case</a>
              <a href="../DisplayParts/displayCpu.php">Cpu</a>
              <a href="../DisplayParts/displayGpu.php">Motherboard</a>
              <a href="../DisplayParts/displayGpu.php">Gpu</a>
              <a href="../DisplayParts/displayPsu.php">Psu</a>
              <a href="../DisplayParts/displayRam.php">Ram</a>
              <a href="../DisplayParts/displayRam.php">Storage</a>
              <a href="../DisplayParts/displayRam.php">Cooler</a>
              <a href="../DisplayParts/displayPsu.php">Operating System</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="dropdown">
            <button class="dropbtn"><b>INSERT PARTS</b><i class='bx bx-plus'></i></button>
            <div class="dropdown-content">
              <a href="../InsertParts/insertCase.php">Case</a>
              <a href="../InsertParts/insertCpu.php">Cpu</a>
              <a href="../InsertParts/insertGpu.php">Motherboard</a>
              <a href="../InsertParts/insertGpu.php">Gpu</a>
              <a href="../InsertParts/insertPsu.php">Psu</a>
              <a href="../InsertParts/insertRam.php">Ram</a>
              <a href="../InsertParts/insertRam.php">Storage</a>
              <a href="../InsertParts/insertRam.php">Cooler</a>
              <a href="../InsertParts/insertPsu.php">Operating System</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>



<?php
}else echo "<h1>Please login first .</h1>";
?>
  

</body>

</html>