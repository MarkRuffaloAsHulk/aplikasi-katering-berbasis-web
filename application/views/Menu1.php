<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu</title>
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
	   height:1850px;
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
		<?php
		$pkt = "";
		$i = 0;
		foreach ($posts as $post){ 
			$pkt = $post->paket;
			$i++;
		}
		?>
		<h2 class="margina">Paket <?php echo $pkt; ?></h2>
	</div>
	<div class="col-md-10 margin paketm" align="center">
		
		<h2 class="margina">Deskripsi Paket :</h2>
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
	
  </div>
  
  <br>
  <div class="col-md-8 margin paket">
  <br><br>
	<div class="col-md-10 margin paketm">
		<form class="" action="<?php echo base_url(); ?>/ControllerPelanggan/simpanPesanan" method="post">
			<h2 class="margina">Pesan Paket</h2>
			<br>
			<div class="form-group col-md-3">
				<p>Jumlah :</p>
				<input type="text" class="form-control" name="jumlah" required>
			</div>
			<div class="form-group col-md-3">
				<p>Tanggal kirim :</p>
				<select class="form-control" name="tgl">
					<option value="">Pilih Tanggal...</option>
					<option value="01">1</option>
					<option value="02">2</option>
					<option value="03">3</option>
					<option value="04">4</option>
					<option value="05">5</option>
					<option value="06">6</option>
					<option value="07">7</option>
					<option value="08">8</option>
					<option value="09">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
			</div>
			<div class="form-group col-md-3">
				<p>Bulan :</p>
				<select class="form-control" name="bln">
				<option value="">Pilih Bulan...</option>
				<option value="01">Januari</option>
				<option value="02">Februari</option>
				<option value="03">Maret</option>
				<option value="04">April</option>
				<option value="05">Mei</option>
				<option value="06">Juni</option>
				<option value="07">Juli</option>
				<option value="08">Agustus</option>
				<option value="09">September</option>
				<option value="10">Oktober</option>
				<option value="11">November</option>
				<option value="12">Desember</option>
				</select>
			</div>
			<div class="form-group col-md-3">
				<p>Tahun : </p>
				<select class="form-control" name="thn">
				<option value="">Pilih Tahun...</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
			</select>
			</div>
			<div class="form-group col-md-4">
				<p>Jam Acara Mulai (24-hour):</p>
				<input type="text" class="form-control" name="mulai" required>
			</div>
			<div class="form-group col-md-8">
				<p>Alamat :</p>
				<textarea class="form-control" rows="4" name="alamat" required><?php
					$al = $this->session->userdata('alamat');
					echo "$al";
				?></textarea>
				
			</div>
			
			<div class="form-group col-md-12" align="center">
				
				<input type="submit" class="btn btn-primary" value="PESAN" name="pesan">
				<br><br>
			</div>
			
	  
		</form>
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