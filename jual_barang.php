<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
    <style>
      body{
        background-size: 100%;
      }
      p{
        color: white;
        padding-left: 100px;
      }
      .card {
      height: 370px;
      margin-top: 100px;
      margin-left: 200px;
      width: 700px;
      background-color: rgba(0, 0, 0, 0.5) !important;
      }
      .card-header h3 {
      color: white;
      padding-top: 20px;
      padding-left: 230px;
      }
      .user{
        color: white;
        padding-left: 100px;
        width: 600px;
      }
      .login{
        padding-left: 300px;
      }
      .login_btn {
      color: black;
      background-color: #FFC312;
      width: 100px;
      }
      .login_btn:hover {
      color: black;
      background-color: white;
      }
    </style>
</head>
<body background="foto/1.jpg">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="tambah_data_barang.php">Tambah Barang</a></li>
      <li><a href="jual_barang.php">Penjualan</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">
    <form>
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Data Penjualan Barang</h3>
			</div>
			<div class="card-body">
				<form  action="proses_jual.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
            <p>NAMA BARANG :</p>
            <div class="user">
						<input type="text" name="nama_barang" value="" class="form-control">
						</div>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <p>TANGGAL PENJUALAN :</p>
            <div class="user">            
						<input type="date" name="tanggal_penjualan" value="" class="form-control">
            </div>
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <p>TANGGAL EXPIRED :</p>
            <div class="user">            
						<input type="date" name="tanggal_expired" value="" class="form-control">
            </div>
					</div>
					<div class="login">
						<input type="submit" value="simpan" value="Tambah Barang" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
    </form>
</div>
</body>
</html>