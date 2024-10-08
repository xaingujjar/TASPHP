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
if(isset($_POST['edit_user'])){
    $user_id = $_POST['user_id'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $city = $_POST['city'];

    $update_query = "UPDATE users SET 
                            `f_name` = '{$f_name}',
                            `l_name` = '{$l_name}',
                            `email`='{$email}',
                            `password`='{$password}',
                            `gender`='{$gender}',
                            `dob`='{$dob}',
                            `city`='{$city}',
                            `religion`='{$religion}' WHERE `id` = {$user_id}";
    $update_query = mysqli_query($conn, $update_query);

    if($update_query){
        $info = '<div class="alert alert-success" role="alert">
                      Successfully Updated
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
                        <button class="btn btn-info btn-sm text-light edit_user"
                                data-id="<?=$data_fetch['id']?>"
                                data-f_name="<?=$data_fetch['f_name']?>"
                                data-l_name="<?=$data_fetch['l_name']?>"
                                data-email="<?=$data_fetch['email']?>"
                                data-password="<?=$data_fetch['password']?>"
                                data-dob="<?=$data_fetch['dob']?>"
                                data-gender="<?=$data_fetch['gender']?>"
                                data-religion="<?=$data_fetch['religion']?>"
                                data-city="<?=$data_fetch['city']?>"

                                data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                            <a href="index.php?del_id=<?=$data_fetch['id']?>" class="btn btn-danger btn-sm text-light">Delete</a>
                    </td>
                </tr>

            <?php }while($data_fetch = mysqli_fetch_assoc($select_data)); ?>

            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="f_name" id="f_name" required>
                        <input type="hidden" class="form-control" name="user_id" id="user_id" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="l_name" id="l_name" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" id="password">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">DOB</label>
                        <input type="date" class="form-control" name="dob" id="dob">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Gender</label>
                        <select id="gender" name="gender" class="form-select">
                            <option selected>Choose...</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Others</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Religion</label>
                        <select id="religion" name="religion" class="form-select">
                            <option selected>Choose...</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" id="city">
                    </div>
                    <div class="col-12">
                        <button type="submit" name="edit_user" class="btn btn-primary">Edit User</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

<script>
    $(document).ready(function (){

        $('.edit_user').click(function (){
            var id = $(this).data('id');
            var f_name = $(this).data('f_name');
            var l_name = $(this).data('l_name');
            var email = $(this).data('email');
            var password = $(this).data('password');
            var gender = $(this).data('gender');
            var dob = $(this).data('dob');
            var religion = $(this).data('religion');
            var city = $(this).data('city');

            $('#user_id').val(id)
            $('#f_name').val(f_name)
            $('#l_name').val(l_name)
            $('#email').val(email)
            $('#password').val(password)
            $('#gender').val(gender)
            $('#dob').val(dob)
            $('#religion').val(religion)
            $('#city').val(city)


        })


    })
</script>


</body>
</html>