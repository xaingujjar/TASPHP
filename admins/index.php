<?php
include ('../helper.php');
if(!isset($_SESSION['login_session'])){
    header("location: ../login.php");
}

$info = '';
if(isset($_GET['del_id'])){
    $del_id = $_GET['del_id'];
    $del_query = "DELETE FROM users WHERE id = $del_id";
    $del_query = mysqli_query($conn, $del_query);
    if($del_query){
        $info = '<div class="alert alert-success" role="alert">
                      Successfully Deleted
                    </div>';
    }else{
        $info = '<div class="alert alert-danger" role="alert">
                      Something Went Wrong
                    </div>';
    }

}


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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">XYZ Company</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="logout.php" class="btn btn-outline-success" >Logout</a>
            </div>
        </nav>
        <h1>All Users</h1>
        <?=$info?>
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
                    <td>
                        <a href="" class="btn btn-info btn-sm text-light">Edit</a>
                            <a href="index.php?del_id=<?=$data_fetch['id']?>" class="btn btn-danger btn-sm text-light">Delete</a>
                    </td>
                </tr>

            <?php }while($data_fetch = mysqli_fetch_assoc($select_data)); ?>

            </tbody>
        </table>
    </div>
</div>

</body>
</html>