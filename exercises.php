<!DOCTYPE html>
<html lang="en">
<head>
  <title>exercises Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Satisfy" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
   body { background: black; font-family:Satisfy;}
</style>
<div class="container">
  <div class="row">
	<div class="col-xs-4">
	<div class="dropdown">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Goto
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
		<li><a href="#">Periods Info Page</a></li>
		<li><a href="Homepage.php">Homepage</a></li>
		<li><a href="options.php">Options</a></li>
	  </ul>
	</div>
	<style type="text/css">
	.dropdown { padding : 20px;}
	</style>
  </div>
  <div class="col-xs-4"><img class="img-responsive" src="logo.png" alt="JustFlow logo"></div>
  <style type="text/css">
	.img-responsive { padding : 20px;}
	</style>
  <div class="col-xs-4">
	  <ul class="pager">
	  <li class="next"><a href="#">Log Out</a></li>
	  </ul>
  </div>
  <style type="text/css">
	.pager { padding-right : 20px;}
	</style>
 </div>
 <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "moods";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="exercises/frontpage.jpg" alt="Los Angeles" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=0";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=0";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  <style type="text/css">
	  .content{padding : 10px;color : white;}
	  </style>
	  </div>
	  
	  <div class="item">
        <img src="exercises/exercise1.jpg" alt="Chicago" style="width:100%;">
      <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=1";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=1";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
	  
      <div class="item">
        <img src="exercises/exercise2.jpg" alt="Chicago" style="width:100%;">
      <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=2";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=2";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
      <div class="item">
        <img src="exercises/exercise3.jpg" alt="New York" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=3";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=3";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
	  <div class="item">
        <img src="exercises/exercise4.jpg" alt="New York" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=4";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=4";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
	  <div class="item">
        <img src="exercises/exercise5.jpg" alt="New York" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=5";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=5";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
	  <div class="item">
        <img src="exercises/exercise6.jpg" alt="New York" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=6";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=6";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
	  <div class="item">
        <img src="exercises/exercise7.jpg" alt="New York" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=7";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=7";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
	  <div class="item">
        <img src="exercises/exercise8.jpg" alt="New York" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=8";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=8";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
	  <div class="item">
        <img src="exercises/exercise9.jpg" alt="New York" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=9";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=9";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
	  <div class="item">
        <img src="exercises/exercise10.jpg" alt="New York" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=10";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=10";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
	  <div class="item">
        <img src="exercises/exercise11.jpg" alt="New York" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=11";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=11";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
	  
	  <div class="item">
        <img src="exercises/exercise12.jpg" alt="New York" style="width:100%;">
	  <div class="content">
		<h3>
		<?php
		$sql = "SELECT Title FROM exercises where id=12";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Title"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</h3>
          <p>
		  <?php
		$sql = "SELECT Content FROM exercises where id=12";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Content"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		  </p>
	  </div>
	  </div>
    </div>
	<?php
	mysqli_close($conn);
	?>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
