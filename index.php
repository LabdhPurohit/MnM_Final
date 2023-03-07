<!doctype html>
<html lang="en">
  <head>
  	<title>Barkha Weds Mridul</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(https://picsum.photos/1920/1080/?blur=5);">
		 <?php
    session_start();

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header("Location: Main Page/Main_Page.php");
                exit;
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate login credentials
            // $username = $_POST['username'];
            $password = $_POST['password-field'];
            
            // Check if the username and password are correct
            if ($password == "dis") {
                // Successful login
                $_SESSION['loggedin'] = true;
                header("Location: lol.html");
                exit;
            } else {
                // Invalid login credentials
                echo "<p class='w-100 text-center'>Invalid login credentials.</p>";
            }
        }
    }

    ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">#MintuसीMona</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Login</h3>
		      	<form method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Your Name" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" name="password-field" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
					<input type="submit"  class="form-control btn btn-primary submit px-3" value="Login">
	            	<!-- <button type="submit" class="form-control btn btn-primary submit px-3">LogIn</button> -->
	            </div>
	          </form>
			 
	          <p class="w-100 text-center">&mdash; Developed By Labdh Purohit &mdash;</p>
			  <p class="w-100 text-center"> For any issue regarding password then please contact bride or groom. </p>
		      </div>
				</div>
			</div>
		</div>
		
	</section>



	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

