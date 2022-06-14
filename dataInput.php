<?php 
require_once "connect.php";
if(isset($_GET['addData'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $year = $_GET['year'];
    $university = $_GET['university'];
    $query = "INSERT INTO member_list(name,age,gender,current_year,university) VALUES('$name','$age','$gender','$year','$university')";
if(mysqli_query($connect, $query)){
    header("location:dataInput.php");
    echo "Success";
} else{
    echo "error";
}
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Reginstration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<body>
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php require_once "navbar.php" ?>
                    <form action="" method="get">
                        <fieldset>
                            <legend>Registration Form</legend>
                            
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Age</label>
                                <input type="number" name="age" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Gender</label>
                                <select name="gender" id="" class="form-select">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Year</label>
                                <input type="text" name="year" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">University</label>
                                <input type="text" name="university" class="form-control">
                            </div>

                            <button class="btn btn-primary" name="addData">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
</body>
</html>