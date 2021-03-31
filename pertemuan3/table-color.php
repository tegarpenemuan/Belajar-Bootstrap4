<!-- 
Beberapa Class Bootstrap 4 yang bisa digunakan untuk manipulasi tampilan antara lain :

.table                   : class standart yang digunakan untuk membuat desain tabel dengan bootstrap
.table-striped           : class tambahan yang bisa anda tambahkan pada class .table, class ini digunakan untuk membuat 
                           tabel dengan warna yang selang seling (strip)
.table-bordered          : class tambahan yang bisa anda tambahkan pada class .table, class ini digunakan untuk 
                           menambahkan border pada bagian tabel
.table-hover             : class tambahan yang bisa anda tambahkan pada class .table, class ini digunakan untuk membuat 
                           effect hover pada tabel yang dibuat
.table-dark              : class tambahan yang bisa anda tambahkan pada class .table, class ini digunakan untuk membuat 
                           tabel dengan warna gelap (dark)
.table-sm                : class tambahan yang bisa anda tambahkan pada class .table, class ini digunakan untuk membuat 
                           tabel dengan ukuran yang lebih kecil
.table-responsive        : class ini digunakan pada tag div sebelum dituliskan tabel, class ini digunakan untuk 
                           memberikan effect responsive pada tabel yang dibuat
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
<div class="table-responsive">
<table class="table table-sm table-bordered">
	<tr>
		<th>No</th>
		<th>Class</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Default</td>
	</tr>
	<tr class="table-primary">
		<td>2</td>
		<td>table-primary</td>
	</tr>
	<tr class="table-success">
		<td>3</td>
		<td>table-success</td>
	</tr>
	<tr class="table-danger">
        <td>4</td>
		<td>Danger</td>
      </tr>
      <tr class="table-info">
        <td>5</td>
		<td>Info</td>
      </tr>
      <tr class="table-warning">
		<td>6</td>
        <td>Warning</td>
      </tr>
      <tr class="table-active">
	    <td>7</td>
        <td>Active</td>
      </tr>
      <tr class="table-secondary">
	    <td>8</td>
        <td>Secondary</td>
      </tr>
      <tr class="table-light">
	    <td>9</td>
        <td>Light</td>
      </tr>
      <tr class="table-dark text-dark">
		<td>10</td>
        <td>Dark</td>
      </tr>
</table>
</div>
</body>
</html>

