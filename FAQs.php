<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQs</title>
 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Satisfy" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script>
		$('.carousel').carousel({
			interval: 3000
		})
	</script>
  </head>
  <body>
	<style type="text/css">
	body{
	background-color : black;
	font-family : Satisfy;
	
}
</style>
    <div class="container">
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
	.pager { padding-right : 20px;}
	</style>
 </div>
  <div class="page-header">
    <h1>FAQ
	<style type="text/css">
	h1 { color : white;}
	</style>
      <small>Frequently Asked Questions</small>
    </h1>
  </div>
  <div class="row">
    <div id="faq" class="col-md-9">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                href="#collapse-1">
				<?php
				$sql = "SELECT Title FROM faq where id=1";
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
              </a>
            </h4>
          </div>
          <div id="collapse-1" class="panel-collapse collapse">
            <div class="panel-body">
              <p>
			  <?php
				$sql = "SELECT Content FROM faq where id=1";
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
            <div class="panel-footer">
              <div class="btn-group btn-group-xs"><span class="btn">Was this question useful?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Yes</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div>
              <div class="btn-group btn-group-xs pull-right"><a class="btn btn-primary" href="#">Report this question</a></div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                href="#collapse-2">
              <?php
				$sql = "SELECT Title FROM faq where id=2";
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
              </a>
            </h4>
          </div>
          <div id="collapse-2" class="panel-collapse collapse">
            <div class="panel-body">
              <?php
				$sql = "SELECT Content FROM faq where id=2";
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
            </div>
            <div class="panel-footer">
              <div class="btn-group btn-group-xs"><span class="btn">Was this question useful?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Yes</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div>
              <div class="btn-group btn-group-xs pull-right"><a class="btn btn-primary" href="#">Report this question</a></div>
            </div>
          </div>
        </div>
	<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                href="#collapse-3">
              <?php
				$sql = "SELECT Title FROM faq where id=3";
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
              </a>
            </h4>
          </div>
          <div id="collapse-3" class="panel-collapse collapse">
            <div class="panel-body">
              <?php
				$sql = "SELECT Content FROM faq where id=3";
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
            </div>
            <div class="panel-footer">
              <div class="btn-group btn-group-xs"><span class="btn">Was this question useful?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Yes</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div>
              <div class="btn-group btn-group-xs pull-right"><a class="btn btn-primary" href="#">Report this question</a></div>
            </div>
          </div>
        </div>
		
		<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                href="#collapse-4">
             <?php
				$sql = "SELECT Title FROM faq where id=4";
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
              </a>
            </h4>
          </div>
          <div id="collapse-4" class="panel-collapse collapse">
            <div class="panel-body">
             <?php
				$sql = "SELECT Content FROM faq where id=4";
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
            </div>
            <div class="panel-footer">
              <div class="btn-group btn-group-xs"><span class="btn">Was this question useful?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Yes</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div>
              <div class="btn-group btn-group-xs pull-right"><a class="btn btn-primary" href="#">Report this question</a></div>
            </div>
          </div>
        </div>
		
		<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                href="#collapse-5">
              <?php
				$sql = "SELECT Title FROM faq where id=5";
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
              </a>
            </h4>
          </div>
          <div id="collapse-5" class="panel-collapse collapse">
            <div class="panel-body">
             <?php
				$sql = "SELECT Content FROM faq where id=5";
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
            </div>
            <div class="panel-footer">
              <div class="btn-group btn-group-xs"><span class="btn">Was this question useful?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Yes</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div>
              <div class="btn-group btn-group-xs pull-right"><a class="btn btn-primary" href="#">Report this question</a></div>
            </div>
          </div>
        </div>
		
		<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                href="#collapse-6">
              <?php
				$sql = "SELECT Title FROM faq where id=6";
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
              </a>
            </h4>
          </div>
          <div id="collapse-6" class="panel-collapse collapse">
            <div class="panel-body">
              <?php
				$sql = "SELECT Content FROM faq where id=6";
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
            </div>
            <div class="panel-footer">
              <div class="btn-group btn-group-xs"><span class="btn">Was this question useful?</span><a class="btn btn-success" href="#"><i class="fa fa-thumbs-up"></i> Yes</a> <a class="btn btn-danger" href="#"><i class="fa fa-thumbs-down"></i> No</a></div>
              <div class="btn-group btn-group-xs pull-right"><a class="btn btn-primary" href="#">Report this question</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
	  <style type="text/css">
	  .form-group{color : white;}
	  </style>
	  <label for="comment">Have more questions? Ask us here:</label><br>
	  <textarea class="form-control" rows="5" id="comment"></textarea>
	  <br><center>
	  <button type="button" class="btn btn-primary">Submit</button>
      </div>
	  </form>
    </div>
  </div>
</div>
	

<?php
mysqli_close($conn);
?>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>