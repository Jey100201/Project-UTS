<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title></title>
	<style>
		.card-header{
			padding-left: 30px;
			padding-bottom: 20px;
		}
		p{
			color: white;
			padding-left: 100px;
		}
	</style>
</head>
<body background= "foto/1.jpg">
<div class="container">
    <form action="proses_login.php" method="post">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Log In</h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<p>Username :</p>
                        <div class="user">
						<input type="text" name="username" class="form-control" placeholder="username">
						</div>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<p>Password :</p>
                        <div class="pass">
						<input type="password" name="password" class="form-control" placeholder="password">
                        </div>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="login">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
    </form>
</div>
</body>         
</html>