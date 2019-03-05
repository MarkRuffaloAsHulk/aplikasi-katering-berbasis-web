<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pembayaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" href="<?php echo base_url(); ?>/pics/mocatsic.png">
  <style>
	 body {
      font: 16px Montserrat, sans-serif;
	  background-color:black;
	  color:white;
     }
	 .navbar{margin-bottom: 0px;}
	 .bg{
	   background-color: #033d00;
	   height:1350px;
	   color: white;
	   background-size: cover;
	 }
	 .margina{
	   text-shadow: black 0.3em 0.3em 0.3em;
	 }
	 .margin{
	   margin-left: 70px;
	 }
	 .margin2{
	   margin-left: 30px;
	 }
	 .margin3{
	   margin-left: 10px;
	 }
	 .margins{
	   margin-left: 240px;
	 }
	 .sidenav {
		height: 100%;
		width: 270px;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #022300;
		padding-top: 80px;
		margin-left: -15px;
	  }
	  .sidenav a{
		padding: 6px 8px 6px 16px;
		text-decoration: none;
		font-size: 20px;
		color: #f1f1f1;
		display: block;
		border: none;
		background: none;
		width: 100%;
		text-align: left;
		cursor: pointer;
		outline: none;
	  }
	  .sidenav a:hover, .dropdown-btn:hover {
		color: #818181;
	  }
	  .paket{
		  background-color: #022300;
		  margin-bottom : 30px;
	  }
	  .paketm{
		  background-color: #226622;
		  margin-bottom : 30px;
	  }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  
          <a class="navbar-brand" href="<?php echo base_url(); ?>/ControllerUser/requestMenu">Mountain Food</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo base_url(); ?>/ControllerUser/keluarAkun"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>
          </ul>
        </div>
      </div>
</nav>
<div class="container-fluid bg">
  <div class="container-fluid col-md-4 sidenav">
    <br><br><br>
	<a href="<?php echo base_url(); ?>/ControllerUser/requestMenu">Semua Paket Menu</a>
	<a href="<?php echo base_url(); ?>/ControllerPelanggan/requestDataPelanggan">Pesanan Saya</a>
	<a href="<?php echo base_url(); ?>/ControllerPelanggan/requestDataPembayaran">Pembayaran</a>
	<a href="<?php echo base_url(); ?>/ControllerPelanggan/requestDataAkun">Akun Saya</a>
  </div>
  
  <div class="col-md-2 margin">
	<br><br><br><br>
	<img class="pic" src="<?php echo base_url(); ?>/pics/mocats.png" height="150px" width="150px" />
  </div>
  <div class="col-md-6">
	<br><br><br><br><br>
	<h2 class="margina">MOUNTAIN FOOD CATERING SERVICE</h2>
	<h4 class="margina">Memesan katering secara online, cepat, dan praktis...</h4><br><br>
    <br><br><br><br>
  </div>
  
    
    
  
  <div class="col-md-8 margin paket">
  <br><br>
	<div class="col-md-11 margin2 paketm">
			
			<div class="form-group">
				<h3 class="margina">Deskripsi Pembayaran :</h3>
				<br>
			</div>
			<div class="form-group">
				<h4 class="margina">ID Pembayaran :</h4>
				<?php
					$i1="";$i2="";$i3="";$i4="";
					foreach ($posts as $post){ 
						$i1=$post->id_pembayaran;
						$i2=$post->bukti_bayar;
						$i3=$post->total;
						$i4=$post->status;
					}
				?>
				<h3><?php echo "$i1" ?></h3>
			</div>
			<div class="form-group">
				<h4 class="margina">Bukti Bayar :</h4>
				<h3><?php echo "$i2" ?></h3>
			</div>
			<div class="form-group">
				<h4 class="margina">Total Harga :</h4>
				<h3><?php echo "Rp "."$i3" ?></h3>
			</div>
			<div class="form-group">
				<h4 class="margina">Status Pembayaran :</h4>
				<h3><?php echo "$i4" ?></h3>
				<br>
			</div>
	</div>
	<div class="col-md-6 margin2 paketm">
		<div class="form-group">
				<h3 class="margina">Cara Pembayaran :</h3>
				<br>
				<p>Pembayaran dapat dilakukan melalui Transfer ATM melalui No. Rekening di bawah ini.</p>
				<p class="margina">No. Rekening : 11111 00000 11111 00000</p>
				<br>
				<p>Setelah melakukan transfer melalui ATM, Upload foto bukti transfer dan unggah di bawah ini.</p>
				
		</div>
		<form class="" action="<?php echo base_url(); ?>/ControllerPelanggan/bayarTotalPesanan" method="post" enctype="multipart/form-data">
			  <div class="form-group">
				<h4 class="margina">Upload Bukti Pembayaran :</h4>
				<input type="file" name="fileToUpload" id="fileToUpload">
			</div>
			<div class="form-group col-md-12" align="center">
				<input type="submit" class="btn btn-primary" value="Upload bukti bayar" name="upload">
				<br>
			</div>
		</form>
		
	</div>
	<div class="col-md-5 margin3 paketm">
		<div class="form-group">
				<h3 class="margina">Foto Upload Anda :</h3>
				<br>
				<img src="<?php echo base_url(); ?>/pics/bayar/<?php $w=$this->session->userdata('add'); echo $w; ?>" height="310px" width="310px">
				
		</div>
		
	</div>
  </div>
  
  
  
</div>
<footer class="page-footer font-small pt-4 mt-4">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
			<div class="col-md-4">
            </div>
            <div class="col-md-4">
                <br><h3 class="">MOCATS</h3>
                <p>Mountain Food Catering Service</p>
            </div>
        </div>
    </div>
    <div class="text-center"> <br><br>
        © 2018 Copyright: MOCATS
        <br><br>
    </div>
</footer>
</body>
</html>