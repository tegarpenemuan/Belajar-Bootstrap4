<!-- 
Progress bar bisa anda gunakan untuk menginformasikan progress pekerjaan ke dalam suatu user interface yang biasanya kita kenal dengan nama progress bar, sehingga dapat mempermudah melakukan pemantauan progress  dari sebuah pekerjaan. 

## Cara membuat progress bar dengan bootstrap
Untuk membuat progress bar menggunakan bootstrap secara sederhana skripnya adalah seperti berikut ini :

<div class="progress">
  <div class="progress-bar" style="width:80%"></div>
</div>

Keterangan :
untuk membuat progress bar, anda hanya perlu menuliskan tag <div> lalu tambahkan class “progress” didalam tag <div> tersebut.
berikutnya anda perlu membuat tag <div> lagi diantara tag <div></div> sebelumnya, didalam tag <div> tersebut anda perlu menuliskan class “progress-bar” lalu menuliskan style dengan property width dan value yang disesuaikan dengan value untuk progress bar, untuk satuan value adalah 

## Mengatur ukuran tinggi dari progress bar
Untuk mengatur tinggi dari progress bar, anda perlu menambahkan property height dan mengisikan value, pada bagian attribute style, untuk contoh skripnya adalah sebagai berikut :

<div class="progress" style="height:50px">
  <div class="progress-bar" style="width:40%;height:50px"></div>
</div>
Keterangan :

perhatikan didalam tag <div> pertama kita menambahkan height:50px; pada bagian attribute style
tidak hanya itu didalam tag <div> kedua kita juga menuliskan hal yang sama height:50px pada attribute style
kedua hal tersebut digunakan untuk mengatur ukuran tinggi dari progress bar

## Menambahkan label pada bagian progress bar
Untuk mengatur label dari progress bar anda hanya perlu menambahkan tulisan diantara tag <div> </div>, untuk contohnya perhatikan skrip dibawah ini :

<div class="progress">
  <div class="progress-bar" style="width:60%">60%</div>
</div>
-->

<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Contoh Progress Bar</h2>
  <div class="progress">
    <div class="progress-bar" style="width:50%">50%</div>
  </div>
  <br/>
  <div class="progress" style="height: 100px;">
    <div class="progress-bar" style="width:80%;height: 100px;">80%</div>
  </div>
</div>

<!-- Keterangan :
pada progress bar pertama menampilkan progress 50% karena kita menuliskan width:50%;
pada progress bar kedua menampilkan progress 80% karena kita menuliskan width:80%; dan untuk tingginya adalah 100 pixel karena kita menuliskan height:100px -->

<div class="container">
<h2>Contoh Progress Bar</h2>
  <div class="progress">
    <div class="progress-bar" style="width:10%"></div>
  </div><br>
 
  <div class="progress">
    <div class="progress-bar bg-success" style="width:20%">class bg-success</div>
  </div><br>
 
  <div class="progress">
    <div class="progress-bar bg-info" style="width:30%">class bg-info</div>
  </div><br>
 
  <div class="progress">
     <div class="progress-bar bg-warning" style="width:40%">class bg-warning</div>
  </div><br>
 
  <div class="progress">
    <div class="progress-bar bg-danger" style="width:50%">class bg-danger</div>
  </div><br>
 
  <div class="progress border">
    <div class="progress-bar bg-white" style="width:60%"><span style='color:black;'>class bg-white</span></div>
  </div><br>
 
  <div class="progress">
    <div class="progress-bar bg-secondary" style="width:70%">class bg-secondary</div>
  </div><br>
 
  <div class="progress border">
    <div class="progress-bar bg-light" style="width:80%"><span style='color:black;'>class bg-light</span></div>
  </div><br>
 
  <div class="progress">
    <div class="progress-bar bg-dark" style="width:90%">class bg-dark</div>
  </div>
</div>

<!-- Keterangan :
warna yang ditampilkan progress bar akan berbeda – beda tergantung class yang dipasang pada progress bar tersebut
jika anda tidak menggunakan class untuk mengganti warna progress bar, maka warna yang ditampilkan adalah warna biru seperti pada progress bar pertama -->

<!-- Striped Progress Bar
Anda tidak hanya bisa mengganti warna pada bagian progress bar, tapi anda juga bisa memberikan pola striped pada progress bar yang anda buat, caranya anda hanya perlu menuliskan menambahkan class .progress-bar-striped pada progress bar yang anda buat, untuk contohnya adalah seperti skrip berikut ini : -->

<div class="container">
<h2>Contoh Striped Progress Bar</h2>
  <div class="progress">
    <div class="progress-bar progress-bar-striped" style="width:10%"></div>
  </div><br>

  <div class="progress">
    <div class="progress-bar bg-success progress-bar-striped" style="width:20%">class bg-success</div>
  </div><br>

  <div class="progress">
    <div class="progress-bar bg-info progress-bar-striped" style="width:30%">class bg-info</div>
  </div><br>

  <div class="progress">
     <div class="progress-bar bg-warning progress-bar-striped" style="width:40%">class bg-warning</div>
  </div><br>

  <div class="progress">
    <div class="progress-bar bg-danger progress-bar-striped" style="width:50%">class bg-danger</div>
  </div><br>
</div>

<!-- Keterangan :
progress bar ditampilkan dengan pola striped, karena kita menambahkan class .progress-bar-striped -->

<!-- Membuat animasi progress bar
setelah di bagian sebelumnya kita telah membuat progress bar yang memiliki pola striped, berikutnya anda juga bisa membuat animasi pada pola striped tersebut, untuk membuat animasi pada progress bar anda cukup menambahkan class .progress-bar-animated, baik untuk contoh skripnya ada sebagai berikut : -->

<div class="container">
<h2>Contoh Animasi Progress Bar</h2>
  <div class="progress">
    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:20%">class bg-success</div>
  </div><br>
 
  <div class="progress">
    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width:30%">class bg-info</div>
  </div><br>
 
  <div class="progress">
     <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width:40%">class bg-warning</div>
  </div><br>
 
  <div class="progress">
    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width:50%">class bg-danger</div>
  </div><br>
</div>

<!-- Keterangan :
terdapat animasi dalam progress bar, karena kita menambahkan class progress_bar_animated -->

<!-- Multiple progress bar
dalam bagian kita akan belajar untuk membuat multiple  progress bar, untuk memasukkan beberapa value sekaligus kedalam 1 progress bar, baik langsung saja kita perhatikan contoh skripnya : -->

<div class="container">
<h2>Contoh Multiple Progress Bar</h2>
  <div class="progress">
  <div class="progress-bar bg-success" style="width:30%">
    Bagian 1
  </div>
  <div class="progress-bar bg-warning" style="width:10%">
    Bagian 2
  </div>
  <div class="progress-bar bg-danger" style="width:20%">
    Bagian 3
  </div>
</div>
</div>

<!-- Keterangan :
> Progress bar akan dibagi beberapa bagian, dalam contoh ini ada 3 bagian
> untuk membuat multiple progress bar, anda hanya tinggal menuliskan beberapa tag <div> dengan class progress-bar, dan memberikan ukuran width pada attribute style
> bagian 1 ditampilkan dengan ukuran 30%
> bagian 2 ditampilkan dengan ukuran 10%
> bagian 3 ditampilkan dengan ukuran 20% -->

</body>
</html>