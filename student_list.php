<?php 

require_once "connect.php";
$data = "SELECT * FROM member_list";
$query = mysqli_query($connect,$data);

$result_data = mysqli_fetch_assoc($query);
echo "<pre>";

echo "</pre>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <section class="main">
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">
                    <?php require_once "navbar.php" ?>
                    <table class="table border table-striped">
                        <thead>
                            <tr class="bg-dark">
                                <th class="text-white">Student ID</th>
                                <th class="text-white">Name</th>
                                <th class="text-white">Age</th>
                                <th class="text-white">Gender</th>
                                <th class="text-white">Year</th>
                                <th class="text-white">University</th>
                                <th class="text-white">Created Time</th>
                            </tr>
                        </thead>
                        <?php

                            
                        echo "<tbody>";
                        while ($fetchData = mysqli_fetch_assoc($query)){
                        echo "<tr>
                            <td> {$fetchData['id']} </td>
                            <td>{$fetchData['name']}</td>
                            <td>{$fetchData['age']}</td>
                            <td class='text-uppercase'>{$fetchData['gender']}</td>
                            <td>{$fetchData['current_year']}</td>
                            <td class='text-uppercase'>{$fetchData['university']}</td>
                            <td>{$fetchData['created_at']}</td> 
                            <td>
                                
                                <a href= 'edit.php?id={$fetchData['id']}' class=edit > Edit </a>
                                <a href= 'delete.php?id={$fetchData['id']}' class=delete> Delete </a>
                            
                            </td>";
                        
                        };
                            
                        echo "</tbody>";
                            

                        
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>