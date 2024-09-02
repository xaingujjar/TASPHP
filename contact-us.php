<?php

    $output = '';
    if(isset($_POST['get_comment'])){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $output = "Your name is <b>". $f_name . " " . $l_name . "</b>, email <b>" . $email . "</b>, city <b>" . $city . "</b>, state <b>" . $state . "</b> and comment <b>" . $comment . "</b><br>";
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

                <div class="col-lg-6">
                    <img src="img/709x457/img1.png" width="100%">
                </div>
                <div class="col-lg-6 border p-3 rounded-1">
                    <h3>Contact Us</h3>
                    <p style="text-align: justify">
                        Discover how LedgerMaster can transform your accounting process. Join the growing number of businesses that trust LedgerMaster to handle their double entry bookkeeping with precision and ease. Experience the difference today, and let us help you master your ledgers.
                    </p>
                    <p>
                        <?php echo $output;?>
                    </p>
                    <form method="post" class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="f_name" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="l_name" id="inputEmail4">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" name="city" id="inputCity">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" name="state" class="form-select">
                                <option selected>Choose...</option>
                                <option>Punjab</option>
                                <option>Sindh</option>
                                <option>KPK</option>
                                <option>Kashmir</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="inputState" class="form-label">Comments</label>
                            <textarea name="comment" class="form-control"></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" name="get_comment" class="btn btn-primary">Save</button>
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