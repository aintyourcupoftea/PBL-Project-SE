<php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body  class="text-end" style="border-radius: 52px;background: url(&quot;assets/img/HQSjesL.jpg&quot;);background-size: contain;"><input class="d-lg-flex align-items-lg-center" type="search" placeholder="search student" style="width: 223px;height: 40px;margin: 38px;"><button class="btn btn-primary" type="button">Update Existing Student</button><button class="btn btn-primary" type="button">Register New Student</button><button class="btn btn-primary" type="button"><a href="logout.php">Logout</a>
    <?php echo $_SESSION['name']; ?>
</body>
<a href="RegistrationForm.php">register new</a>

</html>
<php 

}else{

     header("Location: index.php");

     exit();

}

 ?>