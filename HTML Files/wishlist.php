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
      <section class="my-5 w-50" style="margin: 0 auto; text-align: center;">
        <h3>My Wishlist</h3>
        <hr class="my-3"/>
      </section>

      <!-- Wishlist -->
  <section class="cards">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col-lg-9 d-flex align-items-center justify-content-center">
        
        <!-- Product 1 -->
        <div class="col-md-2">
          <img src="images/Apple.png" class="card-img-top" alt="products">
        </div>
        <div class="col-md-3">
          <h6 class="card-title">Green Apple</h6>
          <p class="card-text">Price: $0.99</p>
        </div>
        <div class="col-md-3">
          <div class="input-group">
            <input type="number" class="form-control product-quantity" value="1" min="1" max="50">
          </div>
        </div>
        <div class="col-md-2">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-secondary save-to-wishlist add-to-cart-from-wishlist" data-product="Green Apple" style="margin: 0;">Add to Cart</button>
          </div>
        </div>
        <div class="col-md-2">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-secondary save-to-wishlist delete-from-wishlist" data-product="Juicy Orange">Delete</button>
      </div>    
    </div>
      </div>
    </div>
        
        <br>
        <!-- Product 2 -->
        <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col-lg-9 d-flex align-items-center justify-content-center">
        <div class="col-md-2">
          <img src="images/Beef.png" class="card-img-top" alt="products">
        </div>
        <div class="col-md-3">
          <h6 class="card-title">Beef</h6>
          <p class="card-text">Price: $10.99</p>
        </div>
        <div class="col-md-3">
          <div class="input-group">
            <input type="number" class="form-control product-quantity" value="1" min="1" max="50">
          </div>
        </div>
        <div class="col-md-2">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-secondary save-to-wishlist add-to-cart-from-wishlist" data-product="Juicy Orange">Add to Cart</button>
          </div>
        </div>
        <div class="col-md-2">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-secondary save-to-wishlist delete-from-wishlist" data-product="Juicy Orange">Delete</button>
      </div>    
    </div>
    </div>
  </div>

  <br>
        <!-- Product 3 -->
        <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col-lg-9 d-flex align-items-center justify-content-center">
        <div class="col-md-2">
          <img src="images/Tomato.png" class="card-img-top" alt="products">
        </div>
        <div class="col-md-3">
          <h6 class="card-title">Tomato</h6>
          <p class="card-text">Price: $3.49</p>
        </div>
        <div class="col-md-3">
          <div class="input-group">
            <input type="number" class="form-control product-quantity" value="1" min="1" max="50">
          </div>
        </div>
        <div class="col-md-2">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-secondary save-to-wishlist add-to-cart-from-wishlist" data-product="Juicy Orange">Add to Cart</button>
          </div>
        </div>
        <div class="col-md-2">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-secondary save-to-wishlist delete-from-wishlist" data-product="Juicy Orange">Delete</button>
      </div>    
    </div>
    </div>
  </div>

        <br>
        <!-- Product 4 -->
        <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col-lg-9 d-flex align-items-center justify-content-center">
        <div class="col-md-2">
          <img src="images/Cheese.png" class="card-img-top" alt="products">
        </div>
        <div class="col-md-3">
          <h6 class="card-title">Cheese</h6>
          <p class="card-text">Price: $5.35</p>
        </div>
        <div class="col-md-3">
          <div class="input-group">
            <input type="number" class="form-control product-quantity" value="1" min="1" max="50">
          </div>
        </div>
        <div class="col-md-2">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-secondary save-to-wishlist add-to-cart-from-wishlist" data-product="Juicy Orange">Add to Cart</button>
          </div>
        </div>
        <div class="col-md-2">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-secondary save-to-wishlist delete-from-wishlist" data-product="Juicy Orange">Delete</button>
      </div>    
    </div>
    </div>
  </div>

        <br>
        <!-- Product 5 -->
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col-lg-9 d-flex align-items-center justify-content-center">
              <div class="col-md-2">
                <img src="images/banana.png" class="card-img-top" alt="products">
              </div>
              <div class="col-md-3">
                <h6 class="card-title">Banana</h6>
                <p class="card-text">Price: $1.15</p>
              </div>
              <div class="col-md-3">
                <div class="input-group">
                  <input type="number" class="form-control product-quantity" value="1" min="1" max="50">
                </div>
              </div>
              <div class="col-md-2">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-outline-secondary save-to-wishlist add-to-cart-from-wishlist" data-product="Juicy Orange">Add to Cart</button>
                </div>
              </div>
              <div class="col-md-2">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-secondary save-to-wishlist delete-from-wishlist" data-product="Juicy Orange">Delete</button>
      </div>    
    </div>
          </div>
        </div>

        <br>
        <!-- Product 6 -->
     <div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 col-lg-9 d-flex align-items-center justify-content-center">
    <div class="col-md-2">
      <img src="images/liquor.png" class="card-img-top" alt="products">
    </div>
    <div class="col-md-3">
      <h6 class="card-title">Jim Beam</h6>
      <p class="card-text">Price: $45.50</p>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" class="form-control product-quantity" value="1" min="1" max="50">
      </div>
    </div>
    <div class="col-md-2">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-secondary save-to-wishlist add-to-cart-from-wishlist" data-product="Juicy Orange">Add to Cart</button>
      </div>
    </div>

     <div class="col-md-2">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-outline-secondary save-to-wishlist delete-from-wishlist" data-product="Juicy Orange">Delete</button>
      </div>    
    </div>
  </div>
</div>

  </section>
      </main>

      <?php include 'partials/footer.php'; ?>
  </body>
</html>

