<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sarvello fine foods</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Style sheet -->
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <?php include 'partials/navbar.php'; ?>
    <hr />

    <main>
      <!-- Title -->
      <section class="mt-5 mx-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html" class="text-success">Home</a></li>
              <li class="breadcrumb-item">Catalogue</li>
            </ol>
          </nav>
        <h3>Product Catalogue</h3>
      </section>

      <!-- Sort -->
      <section class="d-flex mx-5">
        <a href="#" class="btn btn-outline-secondary my-2 mx-2"><i class="bi bi-arrow-down-up mx-1 sort"></i>Sort by<i class="bi bi-caret-down-fill mx-1 sort"></i></a>
        <a href="#" class="btn btn-outline-secondary my-2 mx-2">In stock</a>
        <a href="#" class="btn btn-outline-secondary my-2 mx-2">Specials</a>
      </section>

      <!-- Products cards -->
      <section class="cards">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            <div class="col">
              <div class="card my-2 border border-0">
                <a href="Product_card.html">

                <img src="images/Tomato.png" class="card-img-top" alt="products">
                <div class="card-body">
                    <h4>$1.20</h4>
                    <p class="measurement"><small>$1.20 / EA</small></p>
                    <h6 class="card-title my-4">Fresh Tomato Each</h6>
                    <a href="#" class="btn btn-success mb-2" style="width: 100%">Add to cart</a>
                    <a href="#" class="btn my-2 list" style="width: 100%">Save to list</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card my-2 border-0">
                <a href="Product_card.html">
                <img src="images/Apple.png" class="card-img-top" alt="products">
                <div class="card-body">
                    <h4>$0.70</h4>
                    <p class="measurement"><small>$0.70 / EA</small></p>
                    <h6 class="card-title my-4">Green Apples Each</h6>
                    <a href="#" class="btn btn-success mb-2" style="width: 100%">Add to cart</a>
                    <a href="#" class="btn my-2 list" style="width: 100%">Save to list</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card my-2 border-0">
                <a href="Product_card.html">
                <img src="images/mandarin.png" class="card-img-top" alt="products">
                <div class="card-body">
                    <h4>$0.41</h4>
                    <p class="measurement"><small>$0.41 / EA</small></p>
                    <h6 class="card-title my-4">Mandarin Each</h6>
                    <a href="#" class="btn btn-success mb-2" style="width: 100%">Add to cart</a>
                    <a href="#" class="btn my-2 list" style="width: 100%">Save to list</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card my-2 border-0">
                <a href="Product_card.html">
                <img src="images/broccoli.png" class="card-img-top" alt="products">
                <div class="card-body">
                    <h4>$1.62</h4>
                    <p class="measurement"><small>$1.62 / EA</small></p>
                    <h6 class="card-title my-4">Fresh Broccoli Each</h6>
                    <a href="#" class="btn btn-success mb-2" style="width: 100%">Add to cart</a>
                    <a href="#" class="btn my-2 list" style="width: 100%">Save to list</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card my-2 border-0">
                <a href="Product_card.html">
                <img src="images/pumpkin.png" class="card-img-top" alt="products">
                <div class="card-body">
                    <h4>$2.45</h4>
                    <p class="measurement"><small>$2.45 / EA</small></p>
                    <h6 class="card-title my-4">Pumpkin Kent Cut</h6>
                    <a href="#" class="btn btn-success mb-2" style="width: 100%">Add to cart</a>
                    <a href="#" class="btn my-2 list" style="width: 100%">Save to list</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include 'partials/footer.php'; ?>
  </body>
</html>

