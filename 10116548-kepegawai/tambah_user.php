<?php 
	session_start();
	if($_SESSION['login']!='login') header('Location: login.php');
	include 'koneksi.php'; 	// include = menambahkan/mengikutkan file, setting koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
	
	<!-- DATA TABLES -->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Muhammad Hafiz - 10116548</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo "Hello, ".ucwords($_SESSION['user']);?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">User <span class="sr-only">(current)</span></a></li>
            <li><a href="pegawai.php">Pegawai</a></li>
            <li><a href="divisi.php">Divisi</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard Admin</h1>
		  <div class="row">
		  <div class="col-md-6">
		  <div>
			<form class="form-horizontal" action="proses_tambah_user.php" method="POST">
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Masukkan Username untuk User baru" required />
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" name="password" id="inputPassword3" placeholder="Masukkan Password untuk User baru" required />
				</div>
			  </div>
			  <div class="form-group">
				  <label for="level" class="col-sm-2 control-label">Level</label>
				  <div class="col-sm-10">
				  <select name="level" id="disabledSelect" class="form-control">
					<option value="user">User</option>
					<option value="admin">Admin</option>
				  </select>
				  </div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="reset" class="btn btn-danger">Reset</button>
				  <a type="cancel" class="btn btn-warning" href="user.php">Cancel</a>
				  <button type="submit" class="btn btn-primary">Tambah Data Baru</button>
				</div>
			  </div>
			</form>
		  </div>
		  </div>
		  <div class="col-md-6">
		  </div>
		  </div><!-- row -->
         </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<!-- DATA TABES SCRIPT -->
    <script src="js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="js/dataTables.bootstrap.js" type="text/javascript"></script>
	<script src="js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	<!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>
