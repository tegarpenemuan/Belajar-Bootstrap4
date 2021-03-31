<!-- 
Bootstrap menyediakan beberapa class yang bisa anda gunakan untuk menampilkan pesan alert, bootstrap 4 menyediakan beberapa jenis tampilan dari alert, sehingga anda dapat memanfaatkan alert tersebut untuk beberapa jenis pesan, seperti pesan error bisa menggunakan tampilan alert berwarna merah, untuk pesan info bisa menggunakan alert berwarna biru, untuk pesan sukses entry data bisa menggunakan alert berwarna hijau, dan masih ada beberapa lagi jenis tampilan alert yang bisa anda gunakan untuk menampilkan pesan pada halaman web anda.. 


Cara membuat alert di bootstrap 4
Untuk membuat alert anda cukup menuliskan class .alert pada tag <div>, setelah itu tambahkan class alert yang digunakan untuk mengatur tampilan dari alert, beberapa class alert yang dapat digunakan untuk mengatur tampilan alert antara lain :

.alert-success    :  (jenis alert ini biasanya digunakan untuk menampilkan pesan sukses dari sebuah action)
.alert-info       :  (jenis alert ini biasanya digunakan untuk menampilkan informasi yang bersifat biasa)
.alert-warning    :  (jenis alert ini biasanya digunakan untuk menampilkan informasi yang membutuhkan perhatian khusus)
.alert-danger     :  (jenis alert ini biasanya digunakan untuk menampilkan informasi peringatan bahaya dari sebuah action)
.alert-primary    :  (jenis alert ini biasanya digunakan untuk menampilkan informasi yang penting)
.alert-secondary  :  (jenis alert ini biasanya digunakan untuk menampilkan informasi yang bersifat tidak begitu penting)
.alert-light      :  (menampilkan alert dengan warna abu abu)
.alert-dark       :  (menampilkan alert dengan warna abu abu terang)

-->

<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Contoh Penggunaan Alert pada Bootstrap</h2>
  <div class="alert alert-success"><strong>Success!</strong> Alert yang menggunakan class alert-success</div>
  <div class="alert alert-info"><strong>Info!</strong> Alert yang menggunakan class alert-info</div>
  <div class="alert alert-warning"><strong>Warning!</strong> Alert yang menggunakan class alert-warning</div>
  <div class="alert alert-danger"><strong>Danger!</strong> Alert yang menggunakan class alert-danger</div>
  <div class="alert alert-primary"><strong>Primary!</strong> Alert yang menggunakan class alert-primary</div>
  <div class="alert alert-secondary"><strong>Secondary!</strong> Alert yang menggunakan class alert-secondary</div>
  <div class="alert alert-dark"><strong>Dark!</strong> Alert yang menggunakan class alert-dark</div>
  <div class="alert alert-light"><strong>Light!</strong> Alert yang menggunakan class alert-light</div>
</div>

<!-- 
Keterangan :

Alert akan ditampilkan dengan warna yang sesuai dengan class alertnya
Jadi untuk membuat alert anda tinggal membuat tag <div> dan tambahkan class alert, untuk pemilihan warna tinggal menyesuaikan class alert yang diinginkan 
-->
<hr>
<div class="container">
 <h2>Contoh Penggunaan Class alert-link pada link</h2>
 <div class="alert alert-success"><strong>Success!</strong> | <a href="#" class="alert-link">Klik Disini</a></div>
 <div class="alert alert-info"><strong>Info!</strong> | <a href="#" class="alert-link">Klik Disini</a></div>
 <h2>Contoh Link yang tidak menggunakan alert-link</h2>
 <div class="alert alert-success"><strong>Success!</strong> | <a href="#">Klik Disini</a></div>
 <div class="alert alert-info"><strong>Info!</strong> | <a href="#">Klik Disini</a></div>
</div>

<!-- 
Keterangan :

perhatikan untuk 2 alert awal, ketika link menggunakan class alert-link text yang ditampilkan untuk link tersebut akan ditampilkan dengan text bold sehingga tampilannya pas dengan box alert.
tetapi untuk 2 alert berikutnya, text ditampilkan dengan tampilan text biasa, karena kita tidak menambahkan class alert-link link tersebut 
-->


<div class="container">
  <h2>Contoh Penggunaan Tombol Close Alert</h2>
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Alert dengan class alert-success</strong>
  </div>
  <div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Alert dengan class alert-info</strong>
  </div>
  <div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Alert dengan class alert-warning</strong>
  </div>
</div>
<!-- 
Keterangan :

untuk membuat tombol close pada bagian alert, kita tambahkan attribute alert-dismissable pada tag <div>
berikutnya tambahkan tombol diantara tag <div> </div>, didalam tombol tersebut kita tambahkan class close, dan attribute data-dismiss dengan value alert
diantara tag <button> dan tag penutup </button> kita tuliskan &times; skrip tersebut akan menjadi tanda x (silang) pada bagian tombol 
-->

<div class="container">
  <h2>Contoh Animasi Tombol Close Alert</h2>
  <div class="alert alert-success alert-dismissable fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Alert dengan class alert-success</strong>
  </div>
  <div class="alert alert-info alert-dismissable fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Alert dengan class alert-info</strong>
  </div>
</div>

<!-- 
Keterangan :

untuk skrip yang ditulis dimasing – masing dari alert dan tombol close sama seperti contoh sebelumnya, tetapi kita menambahkan attribute fade dan show pada bagian tag <div> dari aler 
-->

</body>
</html>
