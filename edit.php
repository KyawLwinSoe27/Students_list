<?php 

require_once "connect.php";

$id = $_GET['id'];
$sql = "SELECT * FROM member_list WHERE id='$id'";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query);
if(isset($_GET['editData'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $year = $_GET['year'];
    $university = $_GET['university'];
    $id = $_GET['id'];
    $sqlEdit = "
    UPDATE `member_list` 
    SET `name`='$name',`age`='$age',`gender`='$gender',`current_year`='$year',`university`='$university' 
    WHERE `id`= '$id'";
    if(mysqli_query($connect,$sqlEdit)){
        header("location:student_list.php");
    } else{
        echo "Failed";
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
                            <div class="mb-3 d-none">
                                <label for="" class="form-label">ID</label>
                                <input type="number" name="id" class="form-control" value="<?php echo $id ?>">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Age</label>
                                <input type="number" name="age" class="form-control" value="<?php echo $row['age'] ?>">
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
                                <input type="text" name="year" class="form-control" value="<?php echo $row['current_year'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">University</label>
                                <input type="text" name="university" class="form-control" value="<?php echo $row['university'] ?>">
                            </div>

                            <button class="btn btn-primary" name="editData">Edit</button>
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