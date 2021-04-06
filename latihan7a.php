<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="form_latihan7a.css">

	<title>Form Latihan 7A</title>
</head>
<body>
	<div class="tengah" align="center">
		<div class="header" align="center"><h1>Latihan 7A<h1></div>
		<div class="navigationbar"></div>
		<div class="konten" align="center">
			<div class="content"></div>
			<div class="maincontent">
				<?php 
					$buku = $_POST['jml_buku'];
					$harga = 12500;
					$diskon = 5/100;
					$total = ($buku * $harga);
					$itungdiskon = 0;

					if($buku>20){
						$itungdiskon = $total * $diskon;
					} 

					$hasil = $total - $itungdiskon;

					echo "Jumlah buku yang dibeli $buku", "<br>",
					"Total harga sebelum diskon $total", "<br>", 
					"Total diskon yang didapat $itungdiskon", "<br>", 
					"Total uang yang harus dibayarkan oleh irwan setelah didiskon adalah Rp.$hasil,00.-";
				?>
				<br>
				<form action="form_latihan7a.php">
				<button type="button" class="btn btn-outline-primary"><a href="form_latihan7a.php">Kembali</a></button>
				</form>
			</div>
			<div class="content2"></div>
		</div>
		<div class="footer">BLK Bekasi</div>
	</div>
</body>
</html>
hah
heh