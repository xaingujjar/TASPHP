<?php
include ('helper.php');

$info ='';
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $select = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);

        if($count == 1){
                $_SESSION['login_session'] = $row;
                header("location: admins/index.php");
        }else{
            $info = '<div class="alert alert-danger" role="alert">
                     Invalid Email or Password
                    </div>';
        }

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
                    <h3 class="text-center border-bottom pb-3">Login</h3>
                    <p>
                        <?php echo $info;?>
                    </p>
                    <form method="post" class="row g-3">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail4" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="inputEmail4">
                        </div>


                        <div class="col-12">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
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