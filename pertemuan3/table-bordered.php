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
<table class="table table-striped table-bordered">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Tempat Lahir</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Aris Samsudin</td>
		<td>3mm3</td>
		<td>Sidoarjo</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Taufik Hidayat</td>
		<td>3mm3</td>
		<td>Sidoarjo</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Indra Hermawan</td>
		<td>3mm1</td>
		<td>Yogya</td>
	</tr>
	<tr>
		<td>4</td>
		<td>Zen Wawazer</td>
		<td>3mm1</td>
		<td>Surabaya</td>
	</tr>
</table>
</body>
</html>

