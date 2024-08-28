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
        <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="img/1920x800/img1.jpg" class="d-block w-10000" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="row py-5">
                    <div class="col-lg-12 text-center">
                        <h3>Featured Products</h3>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="text-end py-2 px-0">
                        <a href="products.php" class="btn btn-sm btn-light">View More</a>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/300x230/img3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <ul class="d-flex list-unstyled text-warning">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between">
                                    <b>PKR 2599/-</b>
                                    <button class="btn btn-sm btn-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/300x230/img2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <ul class="d-flex list-unstyled text-warning">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between">
                                    <b>PKR 2599/-</b>
                                    <button class="btn btn-sm btn-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/300x230/img4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <ul class="d-flex list-unstyled text-warning">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between">
                                    <b>PKR 2599/-</b>
                                    <button class="btn btn-sm btn-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/300x230/img5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <ul class="d-flex list-unstyled text-warning">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between">
                                    <b>PKR 2599/-</b>
                                    <button class="btn btn-sm btn-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="row py-5">
                    <div class="col-lg-12 text-center">
                        <h3>Top Products</h3>
                    </div>
                </div>
                <div class="row py-2">

                    <div class="text-end py-2 px-0">
                        <a href="products.php" class="btn btn-sm btn-light">View More</a>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/300x230/img3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <ul class="d-flex list-unstyled text-warning">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between">
                                    <b>PKR 2599/-</b>
                                    <button class="btn btn-sm btn-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/300x230/img2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <ul class="d-flex list-unstyled text-warning">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between">
                                    <b>PKR 2599/-</b>
                                    <button class="btn btn-sm btn-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/300x230/img4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <ul class="d-flex list-unstyled text-warning">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between">
                                    <b>PKR 2599/-</b>
                                    <button class="btn btn-sm btn-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/300x230/img5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <ul class="d-flex list-unstyled text-warning">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                </ul>
                                <div class="d-flex justify-content-between">
                                    <b>PKR 2599/-</b>
                                    <button class="btn btn-sm btn-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include ('includes/footer.php')?>
    </div>

</body>
</html>