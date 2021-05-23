<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">



</head>

<body>


	<main>

		<div class="container">

			<?php 

				include("kullanicilar.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
					header("Refresh: 1; index.html");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "!!!TEKRAR DENEYİN!!!";
			            header("Refresh: 1; login.php");
			    }
			
			?>

		</div>

	</main>



	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>




</body>

</html>
