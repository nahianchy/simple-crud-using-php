

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
        <div class="row mt-4 offset-4">
            <div class="col-5">
            <h2 class="mt-4">Add student information</h2>
                <form action="store.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlIname " class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlIroll " class="form-label">roll</label>
                        <input type="text" name="roll" class="form-control" id="roll">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlIgpa " class="form-label">gpa</label>
                        <input type="text" name="gpa" class="form-control" id="gpa">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlIage " class="form-label">Age</label>
                        <input type="text" name="age" class="form-control" id="age">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlIdob " class="form-label">date of birth</label>
                        <input type="date" name="dob" class="form-control" id="dob">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormConclass_id " class="form-label">class_id </label>
                        <input type="text" id="class_id" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success form-control">submit</button>
                </form>
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