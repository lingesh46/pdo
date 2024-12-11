<?php
session_start();
include('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>pdo using curd</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php if (isset($_SESSION['message'])): ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php
                    unset($_SESSION['message']);
                endif; ?>

                <div class="card">
                    <div class="card-header">
                        <h3>PHP PDO CURD <a href="add.php" class="btn btn-primary float-end">ADD STUDENT</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>FULL NAME</th>
                                    <th>EMAIL</th>
                                    <th>PHONE</th>
                                    <th>COURSE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM students";
                                $statement = $conn->prepare($query);
                                $statement->execute();
                                $statement->setFetchMode(PDO::FETCH_OBJ);
                                $result = $statement->fetchAll();
                                ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>FULL NAME</th>
                                            <th>EMAIL</th>
                                            <th>PHONE</th>
                                            <th>COURSE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($result): ?>
                                            <?php foreach ($result as $row): ?>
                                                <tr>
                                                    <td><?= htmlspecialchars($row->id); ?></td>
                                                    <td><?= htmlspecialchars($row->fullname); ?></td>
                                                    <td><?= htmlspecialchars($row->email); ?></td>
                                                    <td><?= htmlspecialchars($row->phone); ?></td>
                                                    <td><?= htmlspecialchars($row->course); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="5">No record found</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>