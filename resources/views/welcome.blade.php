<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cafe BDP </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="{{ asset('images/wikrama-logo.png') }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
      
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item" >
          <a class="nav-link active" aria-current="page" href="#" style="color: rgb(173, 150, 122)"> <strong> HOME </strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: rgb(173, 150, 122)"> <strong> SHOP </strong></a>
          </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" style="color: rgb(173, 150, 122)"> <strong> CONTACT </strong></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->

<!--carousel-->
<section style="background-color: #f7efeb; height:500px;">
<div class="container ">
    <div class="row justify-content-center align-items-center" >
        <div class="col-5 mt-5">
         <strong> WELCOME TO </strong>
            <h2 class="text-warning">Cafe Wikrama</h2>
            <h4 class="text-danger">Fresh and Delicious Food Every Day!</h4>
            <a href="/product" class="btn btn-outline-danger" style="border: radius 40%;" >Order now!</a>
        </div>
        <div class="col-5 mt-5">
            <img src="{{ asset('images/makanan.png') }}" class="img-fluid">
        </div>
    </div>
</div>
</section>
<!-- end jumbotron -->

<!-- popular books card -->
<section>
    <div class="container mt-5">
        <div class="row text-center">
            <h2>Our Fav's Menu's</h2>
            <hr class="solid">
        </div>
        <div class="row my-4 ms-5">
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/564x/7a/02/d7/7a02d73cc9b59344cc48e36ad6edbc18.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Pie susu</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-outline-warning w-100
                        ">Order now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/564x/a2/61/26/a261269270b3daa6e5437ad70ee1b882.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Corndog</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-outline-warning w-100">Order now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/564x/a4/a7/22/a4a722b4ae146af3a5e22b263fb5d84f.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Choco ball</h5>
                        <div class="star-rating">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                                <li class="list-inline-item"><i class="bi bi-star-fill-o"></i></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-outline-warning w-100">Order now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end popular books card -->

<!-- contact -->
<section style="background-color: #f3f0eb; height:450px;">
  <div class="container mt-4">
    <div class="row" >
        <div class="col-4" >
        <img src="https://i.pinimg.com/564x/31/16/08/31160834c28e6c10133936f6915b2843.jpg" width="350px" height="450px" style="justify-content center; ">
        </div>
        <div class="col-8" style="margin-top: 150px">
            <h1 class="text-warning"><p><strong>Our Quality Foods</strong></p></h1>
            <p>Makanan disajikan dengan sehat dan berish dan terbuat dari bahan pilihan</p>
            <br>
            <a href="/register" class="btn btn-outline-danger" style="border: radius 40%;" >Contact Us!</a>
        </div>
    </div>
</div>
</section> 

<!-- end contact -->



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</body>
</html>