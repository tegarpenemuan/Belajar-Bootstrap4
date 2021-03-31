<!-- 
Tampilan Gambar:
> rounded 
  class ini digunakan untuk membuat sudut gambar yang ditampilkan menjadi rounded (melengkung).
> rounded-circle
  class ini digunakan untuk menampilkan gambar dengan bentuk circle (lingkaran)
> img-thumbnail
  class ini digunakan untuk manampilkan gambar dengan bentuk thumbnail
> float-right dan float-left
  class ini digunakan untuk mengatur posisi dari gambar ketika ditampilkan
> img-fluid
  class ini digunakan untuk membuat gambar menjadi responsive, sehingga ukuran dari gambar akan menyesuaikan ukuran dari parent dari gambarnya
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
  <h2>Ukuran Tombol</h2>
  <button type="button" class="btn btn-primary btn-lg">Tombol Ukuran Besar</button>
  <button type="button" class="btn btn-primary btn-md">Tombol Ukuran Default</button>    
  <button type="button" class="btn btn-primary btn-sm">Tombol Ukuran Kecil</button>
</div>
</body>
</html>

