

<!DOCTYPE html>
<html lang="en">
<?php 
include ("Database.php");
?>
<head>
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/webApp.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 
    <style>
		body {
			background-color: #F5F5F5;
			font-family: Arial, sans-serif;
		}
		h2 {
			text-align: center;
			color: #333;
		}
		form {
			background-color: #FFF;
			border: 1px solid #CCC;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px #CCC;
			max-width: 400px;
			margin: 0 auto;
            
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #333;
		}
		input[type=text], input[type=password] {
			padding: 10px;
			border: 1px solid #CCC;
			border-radius: 5px;
			margin-bottom: 20px;
			width: 100%;
		}
		input[type=submit] {
			background-color: #333;
			color: #FFF;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		input[type=submit]:hover {
			background-color: #666;
		}

	</style>

</head>

<body>
    
    <div class="container-fluid px-0 d-none d-lg-block ">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-primary border-inner py-3 align-items-center">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>Log in</h1>
                    </a>
                </div>
            </div>
        </div>
        </div>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="login.php" class="nav-item nav-link">Home</a>
                <a href="StudentDisplay.php" class="nav-item nav-link">Student View</a>
            </div>
        </div>
    </nav>
    
   

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Admin Log in</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">About</a>
            </div>
        </div>
    </div>
    <?php
		// Check if the form has been submitted
		if(isset($_POST['submit'])){
             
			// Check if the password is correct
			if($_POST['password'] == '1234'){
                header('location:indexAdmin.php');
			} else {
				// Display the error message in the console
				echo '<script>console.log("Invalid password. Please try again.");</script>';
			}
		}
	?>

<div class="submit">
	<form method="POST">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" required>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required>

		<input type="submit" name="submit" value="Submit">
	</form>
</div>

    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark bg-img text-secondary" style="margin-top: 135px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>MY SCHOOL</h1>
                        </a>
                        <p class="mt-3">So here's to school, our second home,
Where our minds and hearts will always roam,
And may we cherish each day we spend,
Learning, growing, until the very end..</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Student ID'S</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>2110229 John Mataa</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>2110227 Violet Chilufya</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>""</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>""</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>""</a>
                                <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>""</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Newsletter</h4>
                            <p>Study Today tommorow never comes</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Group 8</a>. All Rights Reserved. </p>
        </div>
    </div>
     
</body>

</html>
