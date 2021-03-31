<!--  
Pengaturan Standart text pada bootstrap 4
Bootstrap 4 memiliki beberapa standart style pada text ketika digunakan di halaman web, antara lain :

Default ukuran font yang digunakan adalah 16 pixel dan line-height 1.5
Default font-family yang digunakan adalah “Helvetica Neue”, Helvetica, Arial, sans-serif.
seluruh objek yang menggunakan tag <p> memiliki margin-top: 0 dan margin-bottom: 1rem (16 pixel secara default).
-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Display Heading HTML</h2>
  <h1>h1 Bootstrap heading <small>text dalam tag small</small> </h1>
  <h2>h2 Bootstrap heading <small>text dalam tag small</small> </h2>
  <h3>h3 Bootstrap heading <small>text dalam tag small</small> </h3>
  <h4>h4 Bootstrap heading <small>text dalam tag small</small> </h4>
  <h5>h5 Bootstrap heading <small>text dalam tag small</small> </h5>
  <h6>h6 Bootstrap heading <small>text dalam tag small</small> </h6>      
</div>

<!--  
Keterangan :

Heading ditampilkan sesuai dengan ukuran yang telah ditetapkan pada bootstrap 4
h1 Bootstrap heading memiliki ukuran (2.5rem = 40px)
h2 Bootstrap heading memiliki ukuran (2rem = 32px)
h3 Bootstrap heading memiliki ukuran (1.75rem = 28px)
h4 Bootstrap heading memiliki ukuran (1.5rem = 24px)
h5 Bootstrap heading memiliki ukuran (1.25rem = 20px)
h6 Bootstrap heading memiliki ukuran (1rem = 16px)
anda juga akan menemukan hasil text yang ditampilkan lebih kecil ketika menggunakan tag bawaan html yaitu tag <small>
-->	

<br>
<hr>
<div class="container">
  <h2>Display Heading Bootstrap 4</h2>
  <h1 class="display-1">Contoh.display-1</h1> 
  <h1 class="display-2">Contoh .display-2</h1> 
  <h1 class="display-3">Contoh .display-3</h1> 
  <h1 class="display-4">Contoh .display-4</h1>      
</div>

<!-- Keterangan :

Terlihat perbedaan dimasing – masing class display-1 hingga display-4, font ditampilan dengan ukuran yang lebih besar dan lebih tipis -->

<br><hr>
<body>
<div class="container">
  <h2>Tampilan Tag mark</h2>
  <p>Contoh <mark>Text yang terkena tag mark</mark></p>
  <hr/>
  <h2>Tampilan Tag abbr</h2>
  <p>Contoh <abbr>Text yang terkena tag abbr</abbr></p>
  <hr/>
  <h2>Tampilan Tag blockquote</h2>
  <blockquote class="blockquote">
    <p>Twitter Bootstrap adalah sebuah alat bantu untuk membuat sebuah tampilan halaman website yang dapat mempercepat pekerjaan seorang pengembang website ataupun pendesain halaman website. Sesuai namanya, website yang dibuat dengan alat bantu ini memiliki tampilan halaman yang sama / mirip dengan tampilan halaman Twitter atau desainer juga dapat mengubah tampilan halaman website sesuai dengan kebutuhan.</p>
    <footer class="blockquote-footer">From Wikipedia Indonesia</footer>
  </blockquote>
 
  <hr/>
  <h2>Tampilan List dengan tag dl</h2>
  <dl>
    <dt>Pemrogaman Web</dt>
    <dd>- PHP</dd>
    <dt>Desktop</dt>
    <dd>- VB</dd>
    <dd>- C</dd>
    <dd>- C#</dd>
  </dl> 
 
  <hr/>
  <h2>Tampilan text dengan tag code</h2>
  <p>Contoh penggunaan tag code dalam penulisan text di bootstrap: <code>contoh 1</code>, <code>contoh 2</code>, <code>contoh 3</code></p>
 
  <hr/>
  <h2>Tampilan text dengan tag kbd</h2>
  <p>Untuk memilih seluruh text silahkan tekan <kbd>ctrl + a</kbd></p>
 
  <hr/>
  <h2>Tampilan text dengan menggunakan tag <pre></h2>
  <p><pre>Text yang ditampilkan dalam tag pre akan memperbolehkan adanya bagian spasi pada text</pre></p>
</div>

<!-- Keterangan :

Tampilan text akan menyesuaikan dari tampilan bootstrap, sehingga text akan ditampilkan lebih menarik ketika kita menggunakan bootstrap 4 sebagai framework css.
Jika teman – teman belum mengetahui fungsi dari beberapa tag html diatas, bisa membuka tutorial HTML Sebelumnya Mengenal Tag cite, abbr, dfn, dan small di HTML   dan Mengenal Tag samp, kbd, dan var di HTML  -->

</body>
</html>

