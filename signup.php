<?php
    include ('cnx/connection.php');

    $info = '';
    if(isset($_POST['signup'])){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $religion = $_POST['religion'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $status = 2;



        if($password != $re_password){
            $info = '<div class="alert alert-danger" role="alert">
                     Your passwords did not match!
                    </div>';
        }else{
            $fetch_query = "SELECT * FROM `users` where email = '{$email}'";
            $fetch_query = mysqli_query($conn, $fetch_query);
            $fetch_data = mysqli_fetch_all($fetch_query);
            $record = count($fetch_data);
            if($record > 0){
                $info = '<div class="alert alert-danger" role="alert">
                     Sorry this email is already registered!
                    </div>';
            }else{
                $insert_query = "INSERT INTO `users`(`f_name`, `l_name`, `email`, `phone`, `password`, `gender`, `dob`, `city`, `state`,  `religion`, `status`) VALUES
                         ('{$f_name}','{$l_name}','{$email}','{$phone}','{$password}','{$gender}','{$dob}','{$city}','{$state}','{$religion}','$status')";
                $inset_query = mysqli_query($conn,$insert_query);
                if($inset_query){
                    $info = '<div class="alert alert-success" role="alert">
                      Successfully Registered
                    </div>';
                }else{
                    $info = '<div class="alert alert-danger" role="alert">
                      Something Went Wrong
                    </div>';
                }
            }

        }





//        echo '<pre>';
//        print_r($_POST);
//        die();
      }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home-Page</title>
    <?php include ('includes/style.php') ?>
</head>
<body >

<div class="container-fluid p-0">
    <?php include ('includes/navbar.php');?>
    <div class="row " style="background-image: url('img/1920x500/img4.jpg'); background-repeat: no-repeat; background-position: center; padding: 100px 0px">
        <div class="d-flex py-2 justify-content-center">
            <div class="text-center text-light">
                <h1>Contact us</h1>
                <p >The method supports negative indices to count backwards from the end of the array or string.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <div class="row py-5">

                <div class="col-lg-6 offset-lg-3 border p-3 rounded-1 tex">
                    <h3 class="text-center border-bottom pb-3">Sign Up</h3>
                    <p>
                        <?php echo $info;?>
                    </p>
                    <form method="post" class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="f_name" id="inputEmail4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="l_name" id="inputEmail4" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail4" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Re-Password</label>
                            <input type="password" class="form-control" name="re_password" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">DOB</label>
                            <input type="date" class="form-control" name="dob" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Gender</label>
                            <select id="inputState" name="gender" class="form-select">
                                <option selected>Choose...</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Religion</label>
                            <select id="inputState" name="religion" class="form-select">
                                <option selected>Choose...</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Phone</label>
                            <input type="number" class="form-control" name="phone" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" id="inputCity">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" name="state" class="form-select">
                                <option selected>Choose...</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Sindh">Sindh</option>
                                <option value="KPK">KPK</option>
                                <option value="Kashmir">Kashmir</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include ('includes/footer.php')?>
</div>

</body>
</html>