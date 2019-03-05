<html lang="en">
<head>
  <title>Masuk</title>
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
	   height:1050px;
	   color: white;
	   background-size: cover;
	 }
	 .margina{
	   text-shadow: black 0.3em 0.3em 0.3em;
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
			<li><a href="<?php echo base_url(); ?>/ControllerUser/daftar"><span class="glyphicon glyphicon-log-in"></span> Daftar</a></li>
          </ul>
        </div>
      </div>
</nav>
<div class="container-fluid bg">
  <br><br><br><br><br><br>
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    
	<form class="" action="<?php echo base_url(); ?>/ControllerUser/kirimEmailPassword" method="post">
	  <div class="col-md-2">
      </div>
	  <img class="col-md-8" src="<?php echo base_url(); ?>/pics/mocats.png" />
	  <div class="col-md-2">
      </div>
	  <div class="form-group">
		<h4 class="margina">Username anda salah atau belum terdaftar..</h4>
        <p>Username :</p>
        <input type="text" class="form-control" name="username" required>
      </div>
	  
	  <div class="form-group">
        <p>Password :<p>
        <input type="password" class="form-control" name="password" required>
      </div><br><br>
      <input type="submit" class="btn btn-primary" value="LOGIN" name="masuk">
	  
    </form>
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