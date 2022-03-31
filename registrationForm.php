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

<body>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form">
                <h1>Create Profile For Student</h1>
                <div class="row form-group">
                    <div class="col-sm-4 col-md-4 label-column"><label class="col-form-label" for="name">Name Of Student</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" required=""></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="rollno">Roll Number</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" required=""></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email">College Email</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" required="" pattern="@moderncoe.edu.in"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label text-start" for="year">Class</label></div>
                    <div class="col-sm-4 input-column">
                        <div class="dropdown show border-warning"><button class="btn btn-light dropdown-toggle" aria-expanded="true" data-bs-toggle="dropdown" type="button">Select Year</button>
                            <div class="dropdown-menu dropdown-menu-dark show text-white bg-white"><a class="dropdown-item" style="color: var(--bs-dark);">FE</a><a class="dropdown-item" href="#" style="color: var(--bs-dark);">SE</a></div>
                        </div>
                    </div>
                </div><a class="btn btn-light submit-button" role="button">Submit</a>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>