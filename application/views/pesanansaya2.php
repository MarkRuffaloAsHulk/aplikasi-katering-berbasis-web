<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pesanan Saya</title>
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
	   height:1700px;
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
	   margin-left: 20px;
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
	  .table{
		  color: #bfbfbf;
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
		<h3 class="margina">Pesanan Saya</h3>
	</div>
	
   </div>
  
  <div class="col-md-8 margin paket">
  <br><br>
	<div class="col-md-6 margin2 paketm">
			
			<div class="form-group">
				<h3 class="margina">Informasi Pesanan :</h3><br>
			</div>
			<div class="form-group">
				<h4 class="margina">ID Pesanan :</h4>
				<?php
					$i1="";$i2="";$i3="";
					$i4="";$i5="";$i6="";$i7="";$i8="";$i9="";
					foreach ($posts as $post){ 
						$i1=$post->id_pesanan;
						$i2=$post->jumlah;
						$i3=$post->total;
						$i4=$post->status;
						$i5=$post->tanggal;
						$i6=$post->jam;
						$i7=$post->alamat;
						$i8=$post->Paketpaket;
						$i9=$post->ulasan;
					}
				?>
				<h3><?php echo "$i1" ?></h3>
			</div>
			<div class="form-group">
				<h4 class="margina">Paket :</h4>
				<h3><?php echo "$i8" ?></h3>
			</div>
			<div class="form-group">
				<h4 class="margina">Menu :</h4>
				<?php
					foreach ($posts as $post){ 
				?>
				<h4><?php echo "$post->nama" ?></h4>
				<?php } ?>
			</div>
			<div class="form-group">
				<br><br>
				<h4 class="margina">Jumlah :</h4>
				<h3><?php echo "$i2" ?></h3>
			</div>
			<div class="form-group">
				<h4 class="margina">Total harga :</h4>
				<h3><?php echo "Rp "."$i3" ?></h3>
			</div>
			<div class="form-group">
				<h4 class="margina">Status Pembayaran :</h4>
				<h3><?php echo "$i4" ?></h3>
				<br><br>
			</div>
			<div class="form-group">
				<h4 class="margina">Tanggal Kirim :</h4>
				<h3><?php echo "$i5" ?></h3>
			</div>
			<div class="form-group">
				<h4 class="margina">Jam Acara Mulai :</h4>
				<h3><?php echo "$i6" ?></h3>
			</div>
			<div class="form-group">
				<h4 class="margina">Alamat :</h4>
				<h4><?php echo "$i7" ?></h4>
				<br>
			</div>
	</div>
	<div class="col-md-5 margin2 paketm">
			<br>
			<div class="form-group">
				<h4 class="margina">Ulasan anda :</h4>
				<p><?php echo "$i9" ?></p>
				
			</div>
			<div class="form-group col-md-12" align="center">
			<form class="" action="<?php echo base_url(); ?>/ControllerPelanggan/simpanUlasan" method="post">
			  <div class="form-group">
				<p>Tulis Ulasan :</p>
				<textarea class="form-control" rows="4" name="ulasan" required></textarea>
			  </div>
			  <input type="submit" class="btn btn-primary" value="Post Ulasan" name="post">
			  <br>
			</form>
			</div>
	</div>
	
	<div class="col-md-5 margin2 paketm">
		<div class="form-group">
			<h3>Hapus Pesanan</h3>
			<h4>Perhatian!</h4>
			<p>Anda akan menghapus pesanan yang anda pilih...</p>
			
		</div>
		<div class="form-group" align="center">
			<button type="button" class="btn btn-danger" onclick="alert()">Hapus Pesanan</button>
			<br>
		</div>
		
		<script type="text/javascript">
			function alert() {
				var result= confirm("Apakah anda yakin ingin menghapus pesanan ini?");
				if(result==true){
					window.location="<?php echo base_url(); ?>/ControllerPelanggan/deletePesanan"; 
				} else {
					
				}
			}
		</script>
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