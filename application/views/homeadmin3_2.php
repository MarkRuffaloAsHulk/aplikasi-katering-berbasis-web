<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Admin</title>
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
	   height:1550px;
	   color: white;
	   background-size: cover;
	 }
	 .margina{
	   text-shadow: black 0.3em 0.3em 0.3em;
	 }
	 .margin{
	   margin-left: 60px;
	 }
	 .margi{
	   margin-left: 10px;
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
		  
           <a class="navbar-brand" href="<?php echo base_url(); ?>/ControllerAdmin/requestPesanan">Mountain Food</a>
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
	<h3>ADMIN MODE</h3>
    <br><br><br><br>
	<a href="<?php echo base_url(); ?>/ControllerAdmin/requestPesanan">Lihat Pesanan</a>
	<a href="<?php echo base_url(); ?>/ControllerAdmin/requestPesananPelanggan">Detail Pesanan</a>
	<a href="<?php echo base_url(); ?>/ControllerAdmin/showPaketMenu">Perbarui Menu</a>
  </div>
  
  <div class="col-md-2 margin">
	<br><br><br><br>
	<img class="pic" src="<?php echo base_url(); ?>/pics/mocats.png" height="150px" width="150px" />
	<br><br><br>
  </div>
  
  <div class="col-md-8 margin paket">
	<div class="col-md-9 paket">
		<h3 class="margina">Perbarui Menu</h3>
	</div>
	
   </div>
   
  <div class="col-md-8 margin paket">
	<div class="col-md-9 paket">
		<?php
		$pkt = "";
		$i = 0;
		foreach ($posts as $post){ 
			$pkt = $post->paket;
			$i++;
		}
		?>
		<h3 class="margina">Paket <?php echo $pkt; ?></h3>
	</div>
	<div class="col-md-5 margin paketm" align="center">
		
		<h3 class="margina">Komposisi Paket :</h3>
		<br>
		<?php
		$arr = array("Makanan Pokok","Daging","Sayur","Tambahan");
		$i = 0;
		$total = 0;
		foreach ($posts as $post){ 
			$total += $post->harga; ?>
		<h3 class="margina"><?php echo "$arr[$i]" . " : "?></h3>
		<h4 class=""><?php echo "$post->nama" ?></h4>
		<p class="margina"><?php echo "Harga per item" . " : "?></p>
		<p class=""><?php echo "Rp "."$post->harga" ?></p>
		<?php $i++;} ?>
		<h3 class="margina"><?php echo "Harga Total" . " : "?></h3>
		<h3 class=""><?php $this->session->set_userdata('total',$total); echo "Rp "."$total" ?></h3>
		<br>
	</div>
	<div class="col-md-5 margi paketm" align="center">
		
		<h3 class="margina">Ubah Paket :</h3>
		<br>
		<form class="" action="<?php echo base_url(); ?>/ControllerAdmin/saveUpdateMenu" method="post">
			  <div class="form-group">
				<h3 class="margina">Makanan Pokok :</h3>
				<select class="form-control" name="pokok">
					<option value="">Pilih Makanan Pokok...</option>
					<option value="10001">Nasi Putih</option>
					<option value="10002">Nasi Kuning</option>
					<option value="10003">Nasi Uduk</option>
					<option value="10004">Nasi Bakar</option>
					<option value="10005">Nasi Goreng</option>
				</select>
				<br><br>
			  </div>
			  <div class="form-group">
				<h3 class="margina">Daging :</h3>
				<select class="form-control" name="daging">
					<option value="">Pilih Daging...</option>
					<option value="20001">Ayam Bakar</option>
					<option value="20002">Ayam Goreng</option>
					<option value="20003">Ayam opor</option>
					<option value="20004">Daging rendang</option>
					<option value="20005">Lele goreng</option>
				</select>
				<br><br>
			  </div>
			  <div class="form-group">
				<h3 class="margina">Sayur :</h3>
				<select class="form-control" name="sayur">
					<option value="">Pilih Sayur...</option>
					<option value="30001">Capcai</option>
					<option value="30002">Sayur Asem</option>
					<option value="30003">Sayur sop</option>
					<option value="30004">Sayur lodeh</option>
					<option value="30005">Sayur daun singkong</option>
				</select>
				<br><br>
			  </div>
			  <div class="form-group">
				<h3 class="margina">Tambahan :</h3>
				<select class="form-control" name="tambahan">
					<option value="">Pilih Tambahan...</option>
					<option value="40001">Kerupuk Udang</option>
					<option value="40002">Kerupuk Kulit</option>
					<option value="40003">Kerupuk putih</option>
					<option value="40004">Buah jeruk</option>
					<option value="40005">Buah pisang</option>
				</select>
				<br>
			  </div>
			  <input type="submit" class="btn btn-primary" value="Ubah Paket" name="ubah">
			  <br>
		</form>
		
		
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