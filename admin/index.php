<?php
include('header.php'); 
include('navbar.php'); 
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/editform.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">總共註冊人數</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Total : 
                    <?php
                        $conn = mysqli_connect("localhost","root","","ksiproject");
                        $sql = "SELECT count(*) as total from users";
                        $result = mysqli_query($conn,$sql);
                        $data = mysqli_fetch_assoc($result);
                        echo $data['total'];

                    ?>      
               </h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Content Row -->

  <?php
include('scripts.php');
?>