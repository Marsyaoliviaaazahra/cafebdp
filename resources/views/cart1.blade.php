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
            <form action="/order">
                <i ><button class="btn btn-secondary"><i class="bi bi-journal-text"></i> back to menu</button></i> 
            </form>
        </ul>
      </div>
    </div>
  </nav>
  <!--navbar-->
  <div class="table-cart">
    <table class="table">
        <tr class="table-in">
            <th> Product </th>
            <th> Price </th>
            <th> Quantity </th>
            <th> Subtotal </th>
            <th> Action </th>
        </tr>
        <tr class="table-in">
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td class="delete">
                <form action="">
                    <input class="delete-button" type="submit" value="Delete">
                </form>
            </td>
        </tr>
    </table>
    <br><hr class="hr">
    <div>
        <h1 class="total-price">Total Rp.18000</h1>
    </div>
    <hr class="hr">
    <div class="cart-action">
        <form action="">
            <input class="back-action" type="submit" value="Continue Shopping">
        </form>
        <form action="">
            <input class="checkout-action" type="submit" value="Checkout">
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</body>
