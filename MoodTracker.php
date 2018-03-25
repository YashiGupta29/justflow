<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mood Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Satisfy" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
	body{background-color : black;
	font-family : Satisfy;
	font-size : 20px;}
</style>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<div class="container">
 <div class="row">
  <div class="col-xs-4">
	<div class="dropdown">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Goto
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
		<li><a href="#">Periods Info Page</a></li>
		<li><a href="Homepage.php">Homepage</a></li>
	  </ul>
	</div>
  </div>
  <div class="col-xs-4"><img class="img-responsive" src="logo.png" alt="JustFlow logo"></div>
  <div class="col-xs-4">
	  <ul class="pager">
	  <li class="next"><a href="#">Log Out</a></li>
	  </ul>
  </div>
  <style type="text/css">
	  .pager{font-size:15px;}
	  </style>
 </div>
 <div class="page-header">
    <center><h3>How are you feeling today?</h3><center>
	<style type="text/css">
	.page-header{color : white; font-family:Satisfy}
	</style>
  </div>
<div class="row">
  <div class="col-xs-4">
  <a href="Options.php"><img class="img-responsive" src="smilie/angry.png" alt="Angry Emoji"></a>
  <a href="Options.php">&nbsp &nbsp &nbsp<span class="label label-default">Angry</span></a>
  </div>
  <div class="col-xs-4">
  <a href="Options.php"><img class="img-responsive" src="smilie/confused.png" alt="Confused Emoji"></a>
  <a href="Options.php">&nbsp &nbsp<span class="label label-default">Confused</span></a>
  </div>
  <div class="col-xs-4">
  <a href="Options.php"><img class="img-responsive" src="smilie/crying.png" alt="Crying Emoji"></a>
  <a href="Options.php">&nbsp &nbsp<span class="label label-default">Crying</span></a>
  <style type="text/css">
  span{
  text-align : center;
  }
  </style>
  </div>
</div>

<div class="row">
  <div class="col-xs-4">
  <a href="Options.php"><img class="img-responsive" src="smilie/sad.png" alt="Sad Emoji"></a>
  <a href="Options.php">&nbsp &nbsp &nbsp<span class="label label-default">Sad</span></a>
  </div>
  <div class="col-xs-4">
  <a href="Options.php"><img class="img-responsive" src="smilie/happy.png" alt="Happy Emoji"></a>
  <a href="Options.php">&nbsp &nbsp<span class="label label-default">Happy</span></a>
  </div>
  <div class="col-xs-4">
  <a href="Options.php"><img class="img-responsive" src="smilie/grumpy.jpg" alt="Grumpy Emoji"></a>
  <a href="Options.php">&nbsp &nbsp<span class="label label-default">Grumpy</span></a>
  </div>
</div>
</div>

</body>
</html>