<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="form_latihan7a.css">

	<title>Form Latihan 7B</title>
</head>
<body>
	<div class="tengah" align="center">
		<div class="header" align="center"><h1>Form Latihan 7B<h1></div>
		<div class="navigationbar"></div>
		<div class="konten" align="center">
			<div class="content"></div>
			<div class="maincontent7b">
				<form action="Form_latihan7b.php" method="POST">
				  <?php 
					$uts = $_POST['uts'];
					$uas = $_POST['uas'];
					$tgs = $_POST['tugas'];
					
					$itung_uts = $uts * 35/100;
					$itung_tgs = $tgs * 15/100;
					$itung_uas = $uas * 50/100;
					$total = $itung_uas + $itung_uts + $itung_tgs;

					echo 
					"nilai tugas = $tgs", "<br>",
					"nilai uts = $uts", "<br>",
					"nilai uas = $uas", "<br>",
					"nilai total = $total";
				  ?>
				  	<br>
					<button type="button" class="btn btn-outline-primary"><a href="Form_latihan7b.php">Kembali</a></button>
				</form>
			</div>
			<div class="content2"></div>
		</div>
		<div class="footer">BLK Bekasi</div>
	</div>
</body>
</html>