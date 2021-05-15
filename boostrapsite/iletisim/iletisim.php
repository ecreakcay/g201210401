<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/323215b143.js" crossorigin="anonymous"></script>






	<title>İletişim Formu</title>

	<style>
		
		
		.container-fluid {
			background-color: #6D214F;
			color: white;
			height: 100vh;
			padding: 60px;
			

		}
		
		.btn:hover{
			background-color: black;
		}

	</style>


</head>

<body>





	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2 class="text-center">İletişim Formu</h2>

				<form method="post" role="form">

					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Adınız Soyadınız"><br>
					</div>

					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="E-Posta Adresiniz"><br>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="subject" placeholder="Konu Başlığı"><br>
					</div>

					<div class="form-group">
						<textarea name="message" class="form-control" rows="5" placeholder="Mesajınız"></textarea><br>
					</div>
					<div align="center">
						<input type="submit" name="submit" value="Gönder" class="btn btn-dark">
					</div><br>

				</form>
				<div align="center">
					<a href="http://localhost/brackets/g201210401/boostrapsite/index.html"><button class="btn btn-dark">Ana Sayfa</button></a>
				</div>
			</div>
		</div>
	</div>





	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
