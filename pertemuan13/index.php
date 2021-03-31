<!-- Pagination adalah fitur paging yang biasanya kita temui dalam sebuah tabel yang menampilkan data, dimana datanya akan dibagi menjadi beberapa halaman, nah tugas paging ini untuk membagi data tersebut kedalam beberapa halaman, bootstrap sudah menyiapkan beberapa class yang bisa anda gunakan untuk membuat fitur paging.

Breadcrumb adalah fitur yang terdapat dalam halaman web yang digunakan untuk mempermudah atau membantu pengguna web untuk memahami isi konten web serta sebagai penunjuk hirarki situs web tersebut. -->

<!-- Cara membuat pagination dengan bootstrap
Untuk membuat fitur pagination dengan bootstrap anda perlu menuliskan beberapa class antara lain :

tambahkan class .pagination pada tag <ul>
pada tag <li> yang berada dalam tag <ul> anda tambahkan class .page-item
pada tag <a> yang berada dalam tag <li> anda tambahkan class .page-link
Contoh penggunaan class bootstrap untuk pagination adalah seperti berikut ini : -->

<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Contoh Basic Pagination</h2>
  <hr/>
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>

<div class="container">
  <h2>Contoh Penggunaan Class .active Pagination</h2>
  <hr/>
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>

  <!-- keterangan :
  pada page ke 2, terdapat hightlight berwarna biru, hal tersebut karena kita menambahkan class .active pada tag <li> -->

<div class="container">
  <h2>Contoh Penggunaan Class .disabled Pagination</h2>
  <hr/>
<ul class="pagination">
  <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</div>

<!-- Keterangan :
untuk page item dengan tulisan “Previous” tidak bisa di klik, karena kita menggunakan class .disabled dalam class <li>  -->  
<div class="container">
  <h2>Contoh Penggunaan Class .pagination-lg .pagination-sm</h2>

<ul class="pagination pagination-lg">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>

<ul class="pagination">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>

<ul class="pagination pagination-sm">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</div>
</div>
<!-- Keterangan :
Paging ke – 1 ukurannya lebih besar karena kita menambahkan class pagination-lg
Paging ke – 2 ukurannya normal karena kita hanya menggunakan class pagination
Paging ke -3 ukurannya lebih kecil karena kita menambahkan class pagination-sm  -->

</body>
</html>