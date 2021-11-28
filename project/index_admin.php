<?php

session_start();
$id = $_SESSION['nisn'];
include "config.php";

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    

  <title>DASHBOARD</title>

  <link href="style/css/bootstrap.css" rel="stylesheet">

  <link href="style/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="style/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">



</head>

<body>

<div id="wrapper">

  <!-- Sidebar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="index_admin.php?page=list">Home Admin</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">

            <li><a href="index_admin.php?page=list">
            <i class="fa fa-dashboard"></i> Dashboard </a></li>
            
            <li><a href="index_admin.php?page=data">
            <i class="fa fa-table"></i> Data Siswa </a></li>

            <li><a href="index_admin.php?page=ket">
            <i class="fa fa-table"></i> Data Kelulusan </a></li>

            <li><a href="index_admin.php?page=bayar">
            <i class="fa fa-table"></i> Data Pembayaran </a></li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
              <?php 
              
              $q="SELECT * FROM daftar WHERE nisn='$id'";
              $get=mysqli_query($con,$q);

              while($row=mysqli_fetch_array($get)){
                 echo $row['nama'];
              }

              ?>
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li><a href="admin_pdf.php" target="new"><i class="fa fa-print"></i>Print Data</a>
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <br>
    <div class="badan">

    <?php 
      if(isset($_GET['page'])){
        $page = $_GET['page'];
    
        switch ($page) {
        
          case 'data':
            include "data_admin.php";
            break;
          case 'list':
            include "list_pendaftar.php";
            break;			
          case 'ket':
            include "data_kelulusan.php";  
            break;
          case 'bayar':
            include "data_pembayaran.php";  
            break;
          case 'cari':
            include "form_cari.php";  
            break;              
          default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;}
        }?>
    </center>
    </div><!-- Badan -->
</div><!-- /#wrapper -->

  <!-- JavaScript -->
  <script src="style/js/jquery-1.10.2.js"></script>
  <script src="style/js/bootstrap.js"></script>

  <!-- Page Specific Plugins -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
  <script src="style/js/morris/chart-data-morris.js"></script>
  <script src="style/js/tablesorter/jquery.tablesorter.js"></script>
  <script src="style/js/tablesorter/tables.js"></script>
</body>
</html>