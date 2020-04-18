    <?php
    $data = mysqli_query($conn, "SELECT * from tb_user");
	?>
	<div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
          <li class="active">Home</li>
      </ol>
   </div>
   <div class="col-md-10" style="min-height:600px">
       <marquee style="font-size: 19px; color:blue;"><b><?php echo date('d-F-y h:i:sa');?></b></marquee>
	<center> <h3><b>Selamat Datang Di Admin Page</b></h3> </center>

   </div>
   </div>