<?php
require 'config.php';

if (!empty($_POST['submit'])) {
    
    $query= "SELECT case_name FROM cases WHERE case_id='".$_POST['case']."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $case = $row["case_name"];

    $query= "SELECT cpu_name FROM cpu WHERE cpu_id='".$_POST['cpu']."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $cpu = $row["cpu_name"];

    $query= "SELECT mobo_name FROM mobo WHERE mobo_id='".$_POST['mobo']."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $mobo = $row["mobo_name"];

    $query= "SELECT gpu_name FROM gpu WHERE gpu_id='".$_POST['gpu']."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $gpu = $row["gpu_name"];

    $query= "SELECT psu_name FROM psu WHERE psu_id='".$_POST['psu']."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $psu = $row["psu_name"];

    $query= "SELECT str_name FROM strg WHERE str_id='".$_POST['str']."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $str = $row["str_name"];

    $query= "SELECT ram_name FROM ram WHERE ram_id='".$_POST['ram']."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $ram = $row["ram_name"];

    $query= "SELECT cooler_name FROM cooler WHERE cooler_id='".$_POST['cooler']."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $cooler = $row["cooler_name"];

    $query= "SELECT os_name FROM os WHERE os_id='".$_POST['ostype']."'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $ostype = $row["os_name"];


    require("fpdf/fpdf.php");

    class PDF extends FPDF
    {
        // Page header
        function Header()
        {
            // Logo
            $this->Image('logo.png', 10, 6, 30);
            $this->Cell(80);
            $this->Ln(10);
            $this->SetFont('Arial', 'B', 18);
            $this->Cell(0, 5, 'BUILD SPECIFICATION', 0, 1, 'C');
            $this->SetFont('Arial', '', 8);
            $this->Ln(10);
            $this->Cell(0, 5, 'Deogiri Institute of Engineering and Management Studies', 0, 1, 'C');
            $this->Ln(10);
            $this->Cell(0, 10, '', 1, 1, '', true);
            $this->Ln(10);
        }
    }


    


    $pdf = new PDF();
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(60,10,"Components",1,0,'C');
    $pdf->Cell(0,10,"Models",1,1,'C');

    $pdf->SetFont('Arial', '', 10);
    
    $pdf->Cell(60,10,"Case",1,0,'C');
    $pdf->Cell(0,10,$case,1,1,'C');

    $pdf->Cell(60,10,"Processor",1,0,'C');
    $pdf->Cell(0,10,$cpu,1,1,'C');

    $pdf->Cell(60,10,"Motherboard",1,0,'C');
    $pdf->Cell(0,10,$mobo,1,1,'C');

    $pdf->Cell(60,10,"Graphics Card",1,0,'C');
    $pdf->Cell(0,10,$gpu,1,1,'C');

    $pdf->Cell(60,10,"Power Supply",1,0,'C');
    $pdf->Cell(0,10,$psu,1,1,'C');

    $pdf->Cell(60,10,"Storage",1,0,'C');
    $pdf->Cell(0,10,$str,1,1,'C');

    $pdf->Cell(60,10,"RAM",1,0,'C');
    $pdf->Cell(0,10,$ram,1,1,'C');

    $pdf->Cell(60,10,"Cooler",1,0,'C');
    $pdf->Cell(0,10,$cooler,1,1,'C');

    $pdf->Cell(60,10,"Operating System",1,0,'C');
    $pdf->Cell(0,10,$ostype,1,1,'C');


    $file = time().'.pdf';
    $pdf->output($file,'D');
}
