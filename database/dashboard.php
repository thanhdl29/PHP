<?php
session_start();
require './db/connect.php';
$sql = "SELECT * FROM `usser`";
$result = $conn->query($sql);
if(!isset($_SESSION['mySession'])){
    header('location:logout.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('./bootstrap.php');?>

    <title>User List</title>
    <style>
        .action-btn {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">User Management System</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h3 class="mb-4 text-center">User List</h3>
        <?php if ($result->num_rows > 0) { ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo str_repeat("*", strlen($row['password'])); ?></td>
                                <td><?php echo $row['birthday']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['phonenumber']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td class="text-center">
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <p class="text-center">Không có người dùng nào.</p>
        <?php } ?>
    </div>

    
</body>

</html>