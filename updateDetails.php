<!DOCTYPE html>
	 	<html lang="en">
	 	
	 	<head>
	 	    <meta charset="utf-8">
	 	    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	 	    <title>Register New Student</title>
	 	    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	 	    <link rel="stylesheet" href="assets/css/RegistrationForm.css">
	 	    <link rel="stylesheet" href="assets/css/styles.css">
        <script src="myscripts.js"></script>
	 	</head>


		 <?php

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          

			$roll_no = $_POST['rollno'];
			$marks = $_POST['marks'];
			
			

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "student";

      $conn = mysqli_connect( $servername, $username, $password, $database);
			
			if(!$conn){
				die("Sorry failed to connect");

			}
			else{

      $sql = "SELECT * FROM `std` WHERE `rollno` LIKE '$roll_no'";
      $result = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);
      if($num> 0){
       if($row = mysqli_fetch_assoc($result)){

       if($marks> 0){

        if($row['year']=='FE'){
          $sql1 = "UPDATE `std` SET `year` = 'SE' WHERE `std`.`rollno` = $roll_no";
          $result1 = mysqli_query($conn,$sql1);

          ?> <div  class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Done!</strong> <?php echo $row['name']; echo " promoted to the Second year"; 
             ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>;
           <?php
        }

        if($row['year']=='SE'){
         $sql2 =   "UPDATE `std` SET `year` = 'TE' WHERE `std`.`rollno` = $roll_no";
         $result = mysqli_query($conn, $sql2);

         ?> <div  class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Done!</strong> <?php echo $row['name']; echo " promoted to the Third year"; 
           ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>;
         <?php

        }

        if($row['year']=='TE'){
          $sql2 =   "UPDATE `std` SET `year` = 'BE' WHERE `std`.`rollno` = $roll_no";
          $result = mysqli_query($conn, $sql2);
 
          ?> <div  class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Done!</strong> <?php echo $row['name']; echo " promoted to the Fourth year"; 
            ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>;
          <?php
 
         }

      }
      else{ 
        ?>
        <div  class="alert alert-danger d-flex align-items-center" role="alert">
				  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
				 <div>
				 	<?php echo $row['name']; echo " should clear Exam to promote in next year"; ?>
			   </div>
				 </div>'
     <?php
      }
       
			  

			  // if($result){
				//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				//   <strong>Done!</strong> Data Submitted Successfully.
				//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				// </div>';
			  // }


        
			  // else{
				//   echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
				//   <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
				//   <div>
				// 	Data Not Submitted
				//   </div>
				// </div>';
			
        // }\
        }  
      }
			}
		  }

      ?>


	 	
	 	<body>
	 	    <div class="row register-form">
	 	        <div class="col-md-8 offset-md-2">
	 	            <form  action = "updateDetails.php"  method = "post" class="custom-form">
	 	                <h1>Update Profile of Student</h1>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 col-md-4 label-column"></div>
	 	                    <div class="col-sm-6 input-column"></div>
	 	                </div>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 label-column"><label class="col-form-label" for="rollno">Roll Number</label></div>
	 	                    <div class="col-sm-6 input-column"><input name = "rollno" id ="rollno" class="form-control" type="number" required=""></div>
	 	                </div>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 label-column"><label class="col-form-label" for="marks">Sgpa</label></div>
	 	                    <div class="col-sm-6 input-column"><input name="marks" id = "marks" class="form-control" type="number"step="any" required="" pattern="[a-z0-9.%+_]+@moderncoe.edu.in"  title="Please enter the email with domain moderncoe.edu.in">
						</div>
					
	 	                </div>
	 	                <div class="row form-group">
	 	                    <div class="col-sm-4 label-column">
	 	                        
	 	
	 	                    
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

