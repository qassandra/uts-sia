<?php 
include '../config/configuration.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../index.php?pesan=belum_login");
}
?>
<html>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../assets/css/styles-menu-admin.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/script.js"></script>
   <title>Admin Dashboard</title>
</head>
<body>

   <div class="col-md-2 colmenu" style="padding:0; min-height:694px">
      <div class="col-md-12" style="padding:10px;"><center><img src="../assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center><?php echo $_SESSION['username']; ?></center></div>
<div id='cssmenu'>
<ul>
   <li><a href='?content=home'><i class="fa fa-home fa-fw"></i>&nbsp; Home</a></li>
   <li><a href='?content=user'><i class="fa fa-users fa-fw"></i>&nbsp; Users</a></li>
   <li><a href='?content=product'><i class="fa fa-star fa-fw"></i>&nbsp; Transaksi</a></li>
   <li><a href='?content=coa'><i class="fa fa-star fa-fw"></i>&nbsp; Code Of Account</a></li>
   <li><a href='?content=labarugi'><i class="fa fa-star fa-fw"></i>&nbsp; Laporan</a></li>
   <li class='last'><a href='../config/logout.php'><i class="fa fa-sign-out fa-fw"></i>&nbsp; Logout</a></li>
</ul>
</div>
   </div>
   <div id="page-wrapper">
				
                <?php
                    include_once "konten.php";
                ?>
            </div>

  
   <div class="col-md-12" style="background:#1682ba;padding:8px;color:#fff;"><center>Akuntansi 2020</center></div>
</body>
<html>
