<?php
include ('../helper.php');
if(!isset($_SESSION['login_session'])){
    header("location: ../login.php");
}

//    $select_data = "SELECT id, f_name, l_name FROM `users`";
//    $select_data = "SELECT * FROM `users` where gender = '1' ";
//    $select_data = "SELECT id, f_name, l_name FROM `users` where gender = '1' ";
$select_data = "SELECT * FROM `users`  ";
$select_data = mysqli_query($conn, $select_data);
$data_fetch = mysqli_fetch_assoc($select_data);

//    echo '<pre>';
//    print_r($data_fetch);
//    die();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"  />
</head>
<body>

<div class="container">
    <div class="row">
        <h1>All Users</h1>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Religion</th>
                <th>City</th>
                <th>State</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php  do{  ?>

                <tr>
                    <td><?=$data_fetch['id']?></td>
                    <td><?=$data_fetch['f_name']?> <?=$data_fetch['l_name']?></td>
                    <td><?=$data_fetch['email']?></td>
                    <td><?=$data_fetch['password']?></td>
                    <td><?=$data_fetch['dob']?></td>
                    <td><?=$data_fetch['gender']?></td>
                    <td><?=$data_fetch['religion']?></td>
                    <td><?=$data_fetch['city']?></td>
                    <td><?=$data_fetch['status']?></td>
                    <td></td>
                </tr>

            <?php }while($data_fetch = mysqli_fetch_assoc($select_data)); ?>

            </tbody>
        </table>
    </div>
</div>

</body>
</html>