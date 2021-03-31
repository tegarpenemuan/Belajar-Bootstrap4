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

<body>
	<img src="img/3.jpg" width="300" class="rounded"/>
	<img src="img/3.jpg" width="300"/>

	<hr>
	<img src="img/3.jpg" width="300" class="rounded-circle"/>
	<img src="img/3.jpg" width="300"/>

	<hr>
	<img src="img/3.jpg" width="300" class="img-thumbnail"/>
	<img src="img/3.jpg" width="300"/>

	<hr>
	<img src="img/3.jpg" width="300" class="img-thumbnail float-left" />
	<img src="img/3.jpg" width="300" class="img-thumbnail float-right"/>

	<hr>
 	<img class="img-fluid img-thumbnail float-left" src="img/3.jpg" width="800"> 


</body>
</html>

