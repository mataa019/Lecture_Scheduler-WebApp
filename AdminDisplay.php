<!DOCTYPE html>
<?php 
 include ("Database.php");

?>

<html lang="en">

<head>
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/webApp.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 
   

</head>

<body>
    
    <div class="container-fluid px-0 d-none d-lg-block ">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-primary border-inner py-3 align-items-center">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>Time Table Schedule</h1>
                    </a>
                </div>
            </div>
        </div>
        </div>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="login.php" class="nav-item nav-link">Home</a>
                <a href="indexAdmin.php" class="nav-item nav-link active">Add</a>
                <a href="StudentDisplay.php" class="nav-item nav-link">Student View</a>
            </div>
        </div>
    </nav>
    
   

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">ADMIN VIEW</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">About</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
    <div class="container-display">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header bg-primary text-white">
                <h2>TEACHERS ADMIN VIEW</h2>
              </div>
              <div class="card-body">
                <table class="main-table table table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th>Subject</th>
                      <th>Day</th>
                      <th>Time</th>
                      <th>Class</th>
                      <th>Operations</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $servername = "localhost";
                      $username = "root";
                      $database = "mydatabase";
                      $password = '';
       
                      $conn = mysqli_connect($servername, $username, $password, $database);
                      $sql = "SELECT * FROM records";
                      $result = mysqli_query($conn, $sql);
                      if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          $subject = $row['Subject'];
                          $day = $row['Day'];
                          $time = $row['Time'];
                          $class = $row['Class'];
                          echo '<tr>
                                  <td>'.$subject.'</td>
                                  <td>'.$day.'</td>
                                  <td>'.$time.'</td>
                                  <td>'.$class.'</td>
                                  <td>
                                    <button class="update btn btn-info">
                                      <a href="updateAdmin.php?updateid='.$subject.'" class="text-light">Update</a>
                                    </button>
                                    <button class="delete btn btn-danger">
                                      <a href="delete.php?deleteid='.$subject.'" class="text-light">Delete</a>
                                    </button>
                                  </td>
                                </tr>';
                        }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark bg-img text-secondary" style="margin-top: 135px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>My school</h1>
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
                            <p>Study today Tommorow never Comes</p>
                            <form action="">
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Group 8</a>. All Rights Reserved.</p>
        </div>
    </div>
     
</body>

</html>
