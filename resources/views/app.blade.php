<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=(isset($title) ? $title.' - ' : '') . config('apptitle')?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	
  </head>
  <body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand" href="">Laravel</a>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item">
			<a class="nav-link" href="<?=url('/')?>">Welcome</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="<?=url('/login')?>">Login</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="<?=url('/tests')?>">Tests</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?=url('/mytests')?>">My Tests</a>
		  </li>
		</ul>
		<!-- <form class="form-inline my-2 my-lg-0">
		  <input class="form-control mr-sm-2" type="text" placeholder="Search">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form> -->
	  </div>
	</nav>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"></div>
				<div class="panel-body">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
</div>

		


    <!-- <footer class="footer bg-light">
      <div class="container">
		<span class="text-muted">Laravel</span>
		<span class="text-muted float-right">NTn</span>
      </div>
    </footer> -->
	
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
	
  </body>
</html>
