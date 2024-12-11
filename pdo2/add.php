<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>pdo using curds</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>insert data into database using php pdo 
                            <a href="index.php" class="btn btn-danger float-end">back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Fullname</label><br>
                                <input type="text" name="fullname" class="from-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label></label><br>
                                <input type="text" name="email" class="from-control">
                            </div>
                            <div class="mb-3">
                                <label>Phone</label><br>
                                <input type="text" name="phone" class="from-control">
                            </div>
                            <div class="mb-3">
                                <label>Course</label><br>
                                <input type="text" name="course" class="from-control">
                            </div>
                            <div class="m-3">
                                <button class="btn btn-primary" type="submit" name="save-student">Save student</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>