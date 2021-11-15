
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
      .card-header{
        color: white;
        padding-left: 150px;
        padding-bottom: 30px;
      }
      p{
        color: white;
        padding-left: 120px;
      }
      .card {
      height: 550px;
      margin-top: 30px;
      margin-left: 300px;
      width: 750px;
      background-color: rgba(0, 0, 0, 0.5) !important;
      }
      .card-header h3 {
      color: white;
      padding-top: 20px;
      padding-left: 90px;
      }
      .user, .pass{
        color: white;
        padding-left: 120px;
        width: 600px;
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
      .tombol{
        padding-left: 300px;
      }
    </style>
</head>
<body background= "foto/1.jpg">
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
    <form action="proses_tambah_barang.php" method="post">
      <div class="d-flex justify-content-center h-100">
		    <div class="card">
		      <div class="card-header">
          <h3>Tambah Data Barang</h3>
          </div>
          <form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
            <p>NAMA BARANG :</p>
            <div class="user">
            <input type="text" name="nama" value="" class="form-control">
            </div>
          </div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <p>TANGGAL MASUK BARANG :</p>
            <div class="user">
            <input type="date" name="tanggal_masuk" value="" class="form-control">
            </div>
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <p>HARGA BARANG :</p>
            <div class="user">
            <input type="text" name="harga_barang" value="" class="form-control">
            </div>
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <p>USERNAME :</p>
            <div class="user">
            <input type="text" name="username" value="" class="form-control">
            </div>
					</div>
          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
            <p>PASSWORD :</p>
            <div class="user">
            <input type="password" name="password" class="form-control">
            </div>
					</div><br>
            <div class="tombol">
            <input type="submit" name="simpan" value="Tambah barang" class="btn btn-primary">
            </div>
            </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>