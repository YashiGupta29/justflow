<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Satisfy" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
   body { background: black; font-family:Satisfy; color:white;}
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
	  .pager{padding-right:20px;}
	  </style>
 </div>
 <div class="well well-sm">
  <h3><center>Drugs & Medications</center></h3>
  </div>
  <style type="text/css">
  h3 {color : red;}
  </style>
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
  <table class="table">
    <thead>
      <tr>
        <th>Drug Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
		<?php
		$sql = "SELECT Name FROM medicines where id=1";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Name"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</td>
        <td>
		<?php
		$sql = "SELECT Description FROM medicines where id=1";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Description"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</td>
      </tr>
	<tr>
        <td>
		<?php
		$sql = "SELECT Name FROM medicines where id=2";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Name"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</td>
        <td>
		<?php
		$sql = "SELECT Description FROM medicines where id=2";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Description"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</td>
      </tr>
	  
	    <tr>
        <td>
		<?php
		$sql = "SELECT Name FROM medicines where id=3";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Name"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</td>
        <td>
		<?php
		$sql = "SELECT Description FROM medicines where id=3";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Description"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</td>
      </tr>
	  
	    <tr>
        <td>
		<?php
		$sql = "SELECT Name FROM medicines where id=4";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Name"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</td>
        <td>
		<?php
		$sql = "SELECT Description FROM medicines where id=4";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Description"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</td>
      </tr>
	  
	    <tr>
        <td>
		<?php
		$sql = "SELECT Name FROM medicines where id=5";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Name"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</td>
        <td>
		<?php
		$sql = "SELECT Description FROM medicines where id=5";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Description"]. "<br>";
			}
		} else {
			echo "0 results";
		}
		?>
		</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
