<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap</title>
<!--    --><?php //include ('includes/style.php') ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body style="height: 5000px;">

<div class="container-fluid text-center">
    <div  id="navbar" class="row fixed-top bg-transparent border-bottom">
        <div class="col-lg-8 offset-lg-2">
            <div class="row">
                <div class="col-lg-3">
                    <img src="img/logo.png" class="light w-75">
                    <img src="img/white-bg-logo.png" class="dark w-75 d-none">
                </div>
                <div class="col-lg-6 m-auto">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <img src="img/logo.png" class="light w-75">
                    <img src="img/white-bg-logo.png" class="dark w-75 d-none">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner/img4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner/img5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="row">
                
                <div class="col-lg-3">
                    <div class="card mb-3" style="max-width: 18rem;">
                        <img src="img/235x240/img1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-start">
                            <h6 class="card-title">Classic round neck t-shirt</h6>
                            <ul class="list-inline">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                            </ul>
                            <div class=" bg-transparent d-flex justify-content-between align-items-center pt-0">
                                <p class="fw-bold text-success mb-0">$103.00</p>
                                <a href="#" class="btn btn-dark mb-0 z-index-2"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card mb-3" style="max-width: 18rem;">
                        <img src="img/235x240/img2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-start">
                            <h6 class="card-title">Classic round neck t-shirt</h6>
                            <ul class="list-inline">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                            </ul>
                            <div class=" bg-transparent d-flex justify-content-between align-items-center pt-0">
                                <p class="fw-bold text-success mb-0">$103.00</p>
                                <a href="#" class="btn btn-dark mb-0 z-index-2"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card mb-3" style="max-width: 18rem;">
                        <img src="img/235x240/img3.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-start">
                            <h6 class="card-title">Classic round neck t-shirt</h6>
                            <ul class="list-inline">
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                            </ul>
                            <div class=" bg-transparent d-flex justify-content-between align-items-center pt-0">
                                <p class="fw-bold text-success mb-0">$103.00</p>
                                <a href="#" class="btn btn-dark mb-0 z-index-2"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(window).scroll(function() {
        var navbar = $('#navbar');
        var logoLight = $('.light');
        var logoDark = $('.dark');

        if ($(window).scrollTop() > 50) { // Adjust this value based on when you want the color to change
            // logoDark.removeClass('d-none').addClass('d-block');
            // logoLight.removeClass('d-block').addClass('d-none');
            navbar.removeClass('bg-transparent').addClass('bg-light'); // Use any Bootstrap background class, e.g., bg-light, bg-dark, etc.
        } else {
            // logoDark.removeClass('d-block').addClass('d-none');
            // logoLight.removeClass('d-none').addClass('d-block');
            navbar.removeClass('bg-light').addClass('bg-transparent');
        }
    });
</script>
</body>
</html>