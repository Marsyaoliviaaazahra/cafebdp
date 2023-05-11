<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> menu </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <!--navbar-->
<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container">
    <a class="navbar-brand" href="#">
        <a class="nav-link active" aria-current="page" href="#" style="color: rgb(107, 93, 76)"> <strong> <h2>Cafe Wikrama</h2></strong></a>
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <form action="/cart2">
                <i ><button class="btn btn-secondary"><i class="bi bi-cart2"></i> Cart</button></i> 
            </form>
        </ul>
      </div>
    </div>
  </nav>
  <!--navbar-->

  {{-- menu --}}
  <section id="belanja" class="py-5" style="background-color: #ffffff;">
    <div class="container mt-3">
        <div class="row text-center" style="padding: 0% 40%;">
            <h1 style="color: rgb(107, 93, 76)"> Our Menu </h1>
            <hr>
        </div>
        <div class="row mt-4 ms-5">
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/564x/81/22/bc/8122bc11f8615204920de29ea9acde25.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Cookies</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <p class="card-text text-center">Rp. 3.000,00</p>
                        <a href="/login" class="btn btn-outline-warning w-100">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/564x/de/65/97/de6597ca00caddadd08a99abaabb94e0.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Mie Ayam</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <p class="card-text text-center">Rp. 8.000,00</p>
                        <a href="/login" class="btn btn-outline-warning w-100">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/564x/84/02/fc/8402fcba8b6db869b633f4e0b39d9804.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                    <div class="card-body">
                        <h5 class="card-title text-center"> Jus Strawberry</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <p class="card-text text-center">Rp. 5.000,00</p>
                        <a href="/login" class="btn btn-outline-warning w-100">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/564x/8b/82/05/8b8205e14c984f7947f3716afdceb78e.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Toast</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <p class="card-text text-center">Rp. 6.000,00</p>
                        <a href="/login" class="btn btn-outline-warning w-100">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/564x/7e/f3/cf/7ef3cf5b11c1c5be3e5794ad489058ee.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Dimsum</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <p class="card-text text-center">Rp. 3.000,00/pcs</p>
                        <a href="/login" class="btn btn-outline-warning w-100">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/564x/84/02/fc/8402fcba8b6db869b633f4e0b39d9804.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Nasi Goreng</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <p class="card-text text-center">Rp. 15.000,00</p>
                        <a href="/login" class="btn btn-outline-warning w-100">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/564x/84/02/fc/8402fcba8b6db869b633f4e0b39d9804.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Nasi Goreng</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <p class="card-text text-center">Rp. 15.000,00</p>
                        <a href="/login" class="btn btn-outline-warning w-100">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/564x/84/02/fc/8402fcba8b6db869b633f4e0b39d9804.jpg" class="card-img-top" alt="..." style="max-height: 380px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Nasi Goreng</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <p class="card-text text-center">Rp. 15.000,00</p>
                        <a href="/login" class="btn btn-outline-warning w-100">Order Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.freepik.com/free-vector/flat-design-bakso-bowl_23-2148934777.jpg?w=740&t=st=1678338243~exp=1678338843~hmac=f50a2dede99ac8dc741e7e88a906d536503cc42ebc04bd1c60a219710f4f5b9d" class="card-img-top" alt="..." style="max-height: 380px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Bakso</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <p class="card-text text-center">Rp. 12.000,00</p>
                        <a href="/login" class="btn btn-outline-warning w-100">Order Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end menu --}}

  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</body>
</html>