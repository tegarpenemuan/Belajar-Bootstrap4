<!-- badges digunakan untuk memberikan informasi tambahan pada sebuah konten web, contohnya untuk menampilkan keterangan jumlah notifikasi pesan yang masuk, menampilkan status dari transaksi data dan beberapa informasi lainnya.

untuk membuat badges lebih cenderung menggunakan tag <span>, didalam tag <span> tersebut anda dapat menambahkan class .badge dan disertai dengan contextual class contohnya seperti .badge-primary, untuk menyesuaikan tampilan badge yang diinginkan. -->

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
  <h2>Contoh Penggunaan Badge</h2>
  <span class="badge badge-primary">badge-primary</span>
  <span class="badge badge-secondary">badge-secondary</span>
  <span class="badge badge-success">badge-success</span>
  <span class="badge badge-danger">badge-danger</span>
  <span class="badge badge-warning">badge-warning</span>
  <span class="badge badge-info">badge-info</span>
  <span class="badge badge-light">badge-light</span>
  <span class="badge badge-dark">badge-dark</span>
</div>
<!-- Keterangan :

untuk membuat badge tinggal membuat tag <span> dan kita menambahkan class badge didalamnya, setelah itu tambahkan dengan contextual class, seperti badge-primary, badge-secondary dll.
warna badge akan menyesuaikan contextual class yang digunakan -->


<div class="container">
  <h2>Contoh Penggunaan Pill Badge</h2>
  <span class="badge badge-pill badge-primary">badge-primary</span>
  <span class="badge badge-pill badge-secondary">badge-secondary</span>
  <span class="badge badge-pill badge-success">badge-success</span>
  <span class="badge badge-pill badge-danger">badge-danger</span>
  <span class="badge badge-pill badge-warning">badge-warning</span>
  <span class="badge badge-pill badge-info">badge-info</span>
  <span class="badge badge-pill badge-light">badge-light</span>
  <span class="badge badge-pill badge-dark">badge-dark</span>
</div>

<!-- untuk membuat pill badge anda hanya perlu menambahkan class badge-pill di masing masing objek badge -->

<div class="container">
  <h2>Contoh Penggunaan Badge dalam objek lain</h2>
  <button type="button" class="btn btn-info">
  Pesan <span class="badge badge-light">10</span>
  </button>
  <button type="button" class="btn btn-success">
  Order <span class="badge badge-light">90</span>
  </button>
</div>

<!-- Keterangan :

anda bisa menambahkan badge didalam objek lain semisal tombol dengan cara menambahkan tag <span> diantara tag <button> dan </button>, didalam tag <span> tersebut berikan class badge, serta tambahkan contextual class sesuai dengan tampilan badge yang diinginkan. -->
</body>
</html>
