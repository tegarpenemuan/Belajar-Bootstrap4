<!-- 
Dalam bootstrap 4 terdapat class active dan disabled yang digunakan untuk mengatur tampilan dari tombol.

Class .active digunakan untuk memberikan tanda pada tombol, ketika tombol telah di klik.
Class .disabled digunakan untuk mendisabled tombol agar tidak bisa di klik, jika menggunakan tag <button> anda bisa langsung menggunakan attribute disabled bawaan HTML untuk disabled tombol, untuk class .disabled ini khusus digunakan untuk tag <a>
-->

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar Bootstrap</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-3.2.1.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
	body {
		background-color: #eaeaea;
	}	
</style>

<body>
<div class="container">
  <h2>Tombol active dan disable</h2>
  <button type="button" class="btn btn-primary">Tombol 1</button>
  <button type="button" class="btn btn-primary active">Tombol 2</button>
  <button type="button" class="btn btn-primary" disabled>Tombol 3</button>
  <a href="#" class="btn btn-primary disabled">Tombol 4</a>
</div>
</body>
</html>

