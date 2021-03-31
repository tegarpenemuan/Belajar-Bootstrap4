<!-- 
Grid System adalah pengaturan ukuran elemen web yang ditampilkan pada monitor atau device lainnya.

Grid system pada bootstrap memiliki 5 class yang memiliki fungsi masing – masing, antara lain :

.col –     : (digunakan untuk device yang sangat kecil dengan ukuran lebar layar kurang dari 576 pixel)
.col-sm-   : (digunakan untuk device kecil dengan lebar layar 576 pixel atau lebih)
.col-md-   : (digunakan untuk ukuran device menengah dengan ukuran lebar 768 pixel atau lebih)
.col-lg-   : (digunakan untuk device ukuran besar, dengan ukuran lebar 992 pixel atau lebih)
.col-xl-   : (digunakan untuk device dengan ukuran yang sangat lebar, dengan ukuran 1200 pixel atau lebih) 
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
	<style type="text/css">
      div
      {
              background: green;
              text-align: center;
              border: 1px solid black;
              padding: 10px;
              color: white;
      }
    </style>
</head>	

<body>
	
	<div class="row">
	  <div class="col-sm-4">SM - 1</div>
	  <div class="col-sm-4">SM - 2</div>
	  <div class="col-sm-4">SM - 3</div>
	</div>

	<div class="row">
	  <div class="col-md-4">MD - 1</div>
	  <div class="col-md-4">MD - 2</div>
	  <div class="col-md-4">MD - 3</div>
	</div>

	<!-- otomatis menyesuikan kontennya, jika lebih dari ukuran layar maka akan turun jika layarnya tidak cukup-->
	<div class="row">
	  <div class="col">COL - 1</div>
	  <div class="col">COL - 2</div>
	  <div class="col">COL - 3</div>
	</div>
</body>
</html>

