<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giriş Formu</title>
	<link rel="stylesheet" type="text/css" href="css/giris.css">
</head>

<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Giriş Yap</h1>
			</div>
			<form action="git-login.php" method="post">
				<div class="form-group">
					<label for="email"></label>
					<input type="text" name="email" class="form-control" placeholder="Email" required="required">
				</div>
				<div class="form-group">
					<label for="password"></label>
					<input type="password" name="password" class="form-control" placeholder="Şifre" required="required">
				</div>
				<button class="btn btn btn-info" type="submit">Gönder</button>

			</form>
			<a href="index.html"><button class="btn btn-primary btn-large btn-block">Ana Sayfa</button></a>
		</div>
	</div>
</body>

</html>
