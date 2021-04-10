<?php

$id = $_GET['id'];
// echo "<pre>";
// echo print_r();
// echo "</pre>";
require 'connect.php';


$sql = "SELECT * FROM `student` WHERE id = $id";
$result = $conn->query($sql);
$students=$result->fetch_assoc();

// echo "<pre>";
// echo print_r($students);
// echo "</pre>";

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Crud</title>
</head>

<body>
    <div class="container">
        <div class="row offset-4 mt-4 mb-4">
            <div class="col-10">
          
                <h2>View</h2>
                <table>
                    <tr>
                        <th>Name </th>
                        <td><?php echo $students['name'];?></td>
                    </tr>
                    <tr>
                        <td>Roll</td>
                        <td><?php echo $students['roll'];?></td>
                    </tr>
                    <tr>
                        <td>GPA </td>
                        <td><?php echo $students['gpa'];?></td>
                    </tr>
                    <tr>
                        <td>Age </td>
                        <td><?php echo $students['age'];?></td>
                    </tr>
                    
                </table>
                <a href="index.php" class="btn  btn-danger mt-3">Home</a>

            </div>


        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>