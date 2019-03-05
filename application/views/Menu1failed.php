<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pesanan Gagal</title>
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
	   height:850px;
	   color: white;
	   background-size: cover;
	 }
	 .margina{
	   text-shadow: black 0.3em 0.3em 0.3em;
	 }
	 .margin{
	   margin-left: 70px;
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
	<div class="col-md-9 paket">
		<h2 class="margina">Gagal</h2>
		<h3 class="margina">Pemesanan Anda Gagal</h3>
		<br>
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