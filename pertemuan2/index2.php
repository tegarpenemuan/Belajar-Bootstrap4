<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar Bootstrap</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<style type="text/css">
	      div{
	        background: green;
	        text-align: center;
	        border: 1px solid white;
	        padding: 10px;
	        color: white;
	      }
	      .sidebar{
	        height: 250px;
	      }
	      .content{
	        height: 250px;
	      }
	</style>
</head>

<body>
	<center><h1>Belajar Grid System Bootstrap</h1></center><br/>
	<!-- md untuk dekstop dan sm android -->
    <div class="row">
    	<div class="col-md-12 col-sm-12">Ini bagian header</div>
    </div>

    <div class="row">
    	<div class="col-md-3 col-sm-12 sidebar">Ini bagian sidebar</div>
    	<div class="col-md-9 col-sm-12 content">Ini bagian konten</div>
    </div>

    <div class="row">
    	<div class="col-md-12 col-sm-12">Ini bagian footer</div>
    </div>
</body>
</html>