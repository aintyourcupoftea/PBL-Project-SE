<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Perfect-navigation-bar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="assets/css/Section-Title.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/se1.css">
    

    <title>Document</title>

<?php


// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "";
}

$sql = "SELECT * FROM `std` WHERE `year` LIKE 'SE'";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
?>

<body>
<div class="caption v-middle text-center">
					<h1 class="cd-headline clip">
                    <a class="heading1" href="home.php">
			            <span class="blc">Student | </span>
			            <span class="cd-words-wrapper">
			              <b class="is-visible">DBMS.</b>
			            </span>
                    </a>
	          		</h1>
				</div>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-search">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="registrationForm.php">Register New Student</a></li>
                    <li class="nav-item"><a class="nav-link" href="updateDetails.html">Update Details</a></li>
                </ul>
                <form class="me-auto search-form" target="_self">
                    <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                </form><a class="btn btn-light action-button" role="button" href="logout.php">Log Out </a>
            </div>
        </div>
    </nav>
    
<div class="container">
  <h2>SE STUDENTS <small><?php
echo "      (Number of Students in SE :";
echo $num." )";

  ?></small></h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Roll Number</div>
      <div class="col col-2">Name</div>
      <div class="col col-3">Email</div>
      <div class="col col-4">Year</div>
    </li>

</body>



<?php
echo "<br>";

if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
?> 

<!-- <div class="container"> -->
  
  <ul class="responsive-table">
   
    <li class="table-row">

      <div class="col col-1" data-label="Job Id">  <?php echo $row['rollno'];?></div>
       
        
      <div class="col col-2" data-label="Customer Name"><?php  echo $row['name']; ?></div>


        
      <div class="col col-3" data-label="Amount"><?php echo $row['email']; ?></div> 

      <div class="col col-4" data-label="Payment Status"><?php  echo $row['year']; ?></div>
      

      </li>
      </ul>
<!-- </div> -->
    
  
<?php    
}


}
?>


</head>
<body>
    
</body>
</html>