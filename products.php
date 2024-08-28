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
    <div class="row " style="background-image: url('img/1920x500/img7.jpg'); background-repeat: no-repeat; background-position: center; padding: 100px 0px">
        <div class="d-flex py-2 justify-content-center">
            <div class="text-center text-dark">
                <h1>Product </h1>
                <p >The method supports negative indices to count backwards from the end of the array or string.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="row py-5">
                <div class="col-lg-12 text-center">
                    <h3>Featured Products</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="border rounded-2 p-2">
                        <h4>Filters</h4>
                        <hr>
                       <div class="ps-3">
                           <h5>Price</h5>
                           <ul class="list-unstyled">
                               <li class="py-1">
                                   <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                           PKR 12000 to PKR 9000
                                       </label>
                                   </div>
                               </li>
                               <li class="py-1">
                                   <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                           PKR 9000 to PKR 8000
                                       </label>
                                   </div>
                               </li>
                               <li class="py-1">
                                   <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                           PKR 8000 to PKR 7000
                                       </label>
                                   </div>
                               </li>
                               <li class="py-1">
                                   <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                           PKR 7000 >
                                       </label>
                                   </div>
                               </li>
                           </ul>
                       </div>
                       <div class="ps-3">
                            <h5>Category</h5>
                            <ul class="list-unstyled">
                                <li class="py-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Paints
                                        </label>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Shirt
                                        </label>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Men
                                        </label>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                           Women
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row border rounded-2 py-2">
                        <div class="col-lg-3 offset-lg-9">
                            <div class="row gx-3 gy-2 px-3">
                                    <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></div>
                                        <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Search Product">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include ('includes/footer.php')?>
</div>

</body>
</html>