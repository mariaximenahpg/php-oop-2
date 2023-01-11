<?php
require_once __DIR__ . "/classi/Product.php";
require_once __DIR__ . "/classi/Category.php";
require_once __DIR__ . "/classi/Food.php";
require_once __DIR__ . "/classi/Toy.php";
require_once __DIR__ . "/db/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <title>php-oop-2</title>
</head>
<body>
   <div class="container text-center">
      <h1 class="m-3">ANIMALplanet <i class="fa-sharp fa-solid fa-paw"></i></h1>
      <div class="row">
        
        <?php foreach($products as $product) { ?>
          <div class="card m-3" style="width: 18rem;">

            <h3 class="card-title m-3"><?php echo $product->name ?></h3>
            <img src="<?php echo $product->image ?>" alt="">

            <div class="card-body">
              <h5>Per: <?php echo $product->category ?></h5>
              <h5>tipologia: <?php echo $product->type ?></h5>
              <h5>prezzo: <?php echo $product->price ?>€</h5>
            </div>

          </div>
        <?php } ?>
      </div>
    </div>
</body>
</html>