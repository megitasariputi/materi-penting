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
		<div class="header" align="center"><h1>Form Latihan 7A<h1></div>
		<div class="navigationbar"></div>
		<div class="konten" align="center">
			<div class="content"></div>
			<div class="maincontent">
				<form action="latihan7a.php" method="POST">
				  <div class="form-group">
				    <label for="exampleInputEmail1"><h6>Jumlah Buku<h6></label>
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jml_buku" required="">
				    <small id="emailHelp" class="form-text text-muted">Pembelian lebih dari 20 akan mendapatkan diskon 5%</small>
				  </div>
				  <button type="submit" class="btn btn-primary">Hitung
				</form>
			</div>
			<div class="content2"></div>
		</div>
		<div class="footer">BLK Bekasi</div>
	</div>
</body>
</html>