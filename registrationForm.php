<!DOCTYPE html>
	 	<html lang="en">
	 	
	 	<head>
	 	    <meta charset="utf-8">
	 	    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	 	    <title>Register New Student</title>
	 	    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	 	    <link rel="stylesheet" href="assets/css/RegistrationForm.css">
	 	    <link rel="stylesheet" href="assets/css/styles.css">
	 	</head>


		 <?php

          if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          
			$name = $_POST['name'];
			$rollno = $_POST['rollno'];
			$email = $_POST['email'];
			$year = $_POST['year'];
			

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "student";

            $conn = mysqli_connect( $servername, $username, $password, $database);
			
			if(!$conn){
				die("Sorry failed to connect");

			}
			else{

				$sql = "INSERT INTO `std` (`name`, `rollno`, `email`, `year`) VALUES ( '$name', '$rollno', '$email', '$year')";

			  $result = mysqli_query($conn, $sql);

			  if($result){
				  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Done!</strong> Data Submitted Successfully.
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
			  }
			  else{
				  echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
				  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
				  <div>
					Data Not Submitted
				  </div>
				</div>';
			  }

			}
		  }

      ?>


	 	
	 	<body>
	 	    <div class="row register-form">
	 	        <div class="col-md-8 offset-md-2">
	 	            <form  action = "registrationForm.php"  method = "post" class="custom-form">
	 	                <h1>Create Profile For Student</h1>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 col-md-4 label-column"><label class="col-form-label" for="name">Name Of Student</label></div>
	 	                    <div class="col-sm-6 input-column"><input name = "name" id = "name" class="form-control" type="text" required=""></div>
	 	                </div>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 label-column"><label class="col-form-label" for="rollno">Roll Number</label></div>
	 	                    <div class="col-sm-6 input-column"><input name = "rollno" id ="rollno" class="form-control" type="number" required=""></div>
	 	                </div>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email">College Email</label></div>
	 	                    <div class="col-sm-6 input-column"><input name="email" id = "email" class="form-control" type="email" required="" pattern="[a-z0-9.%+_]+@moderncoe.edu.in"  title="Please enter the email with domain moderncoe.edu.in">
						</div>
					
	 	                </div>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 label-column">
	 	                        
	 	
	 	                    <label class="col-form-label text-start" for="year">Select Year:</label>
	 	                </div>
	 	                    <div class="col-sm-4 input-column">
	 	                        <!-- <div class="dropdown show border-warning"><button class="btn btn-light dropdown-toggle" aria-expanded="true" data-bs-toggle="dropdown" type="button"></button> -->
	 	                            <!-- <div class="dropdown-menu dropdown-menu-dark show text-white bg-white"><a class="dropdown-item" style="color: var(--bs-dark);">FE</a><a class="dropdown-item" href="#" style="color: var(--bs-dark);">SE</a></div> -->
	 	                            <!-- <label for="year">Select Year:</label> -->
	 	                            
	 	                                
	 	                             <select class="dropdown show border-warning form-control" name="year" id="year">
	 	                                <option   value="FE">FE</option>
	 	                                <option   value="SE">SE</option>
	 	                                
	 	                              </select>
	 	                        <!-- </div> -->
	 	                    </div>
	 	                    
	 	                <!-- </div><a class="btn btn-light submit-button" role="button">Submit</a> -->
						 </div>
						 <button type="submit" class="btn btn-light submit-button" >Submit</button>
						 
	 	            </form>
	 	        </div>
	 	    </div>
	 	    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	 	</body>
	 	
	 	</html>

