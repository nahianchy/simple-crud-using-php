<?php

require('connect.php');

$sql = "SELECT * FROM `student`";

$result = $conn->query($sql);
session_start();

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
        <div class="row">

            <div class="col-md-10">
                <?php

                if (isset($_SESSION['msg'])) {

                ?>

                    <div class="alert alert-success mt-3 mb-4" role="alert">
                        <p class="text-center"><?php echo $_SESSION['msg'] ;?></p>
                    </div>
                <?php
                    session_destroy();
                }
                ?>


                <h2 class="offset-5">Student List</h2>
                <a class="offset-5 " href="insert.php">Add Student</a>
                <table class="table mt-4">
                    <thead>
                        <tr mt-4>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">ROLL</th>
                            <th scope="col">GPA</th>
                            <th scope="col">AGE</th>
                            <th scope="col">DATE OF BIRTH</th>
                            <th scope="col">CLASS ID</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['roll']; ?></td>
                                <td><?php echo $row['gpa']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['db']; ?></td>
                                <td><?php echo $row['class_id']; ?></td>
                                <td>
                                    <a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-x">View</a>
                                    <a href="edit.php?id=<?php echo $row['id'] ; ?>" class="btn btn-primary btn-x">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('are you want to delete')" class="btn btn-danger btn-x">Delete</a>
                                </td>

                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
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