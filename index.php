<?php include("includes/db.php"); ?>

<!DOCTYPE html>
<html>
<head>

<title>E-Learning Platform</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@300;400;500&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="#">E-Learning</a>

<div>

<a class="btn btn-outline-light me-2" href="login.php">Login</a>

<a class="btn btn-warning" href="register.php">Register</a>

</div>

</div>

</nav>


<!-- HERO SECTION -->

<section class="hero">

<div class="container text-center">

<h1>Learn Skills Online</h1>

<p>Join thousands of students learning new technologies</p>

<a href="login.php" class="btn btn-primary btn-lg">
Start Learning
</a>

</div>

</section>


<!-- COURSES -->

<section class="container mt-5">

<h2 class="text-center mb-4">Popular Courses</h2>

<div class="row">

<?php

$query="SELECT * FROM courses";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){

?>

<div class="col-md-4">

<div class="card shadow mb-4">

<img src="images/<?php echo $row['image']; ?>" class="card-img-top">

<div class="card-body">

<h5 class="card-title"><?php echo $row['title']; ?></h5>

<p class="card-text"><?php echo $row['description']; ?></p>

<a href="login.php" class="btn btn-primary">
View Course
</a>

</div>

</div>

</div>

<?php } ?>

</div>

</section>


<!-- FEATURES -->

<section class="features text-center">

<div class="container">

<h2 class="mb-5">Why Choose Us</h2>

<div class="row">

<div class="col-md-4">

<h4>Expert Teachers</h4>

<p>Learn from professional instructors</p>

</div>

<div class="col-md-4">

<h4>Video Lessons</h4>

<p>High quality video learning experience</p>

</div>

<div class="col-md-4">

<h4>Certificates</h4>

<p>Get certificate after course completion</p>

</div>

</div>

</div>

</section>


<!-- CALL TO ACTION -->

<section class="cta text-center">

<div class="container">

<h2>Start Learning Today</h2>

<p>Create your account and explore courses</p>

<a href="register.php" class="btn btn-warning btn-lg">
Join Now
</a>

</div>

</section>


<!-- FOOTER -->

<footer class="bg-dark text-white text-center p-3">



</footer>


</body>
</html>