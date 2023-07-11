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
      <!-- Carousel -->
      <div id="carouselExampleDark" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/top1.jpg" class="d-block w-100" alt="..." style="max-height: 350px; object-fit:cover;">
          </div>
          <div class="carousel-item">
            <img src="images/top2.jpg" class="d-block w-100" alt="..." style="max-height: 350px; object-fit:cover;">
          </div>
          <div class="carousel-item">
            <img src="images/top3.jpg" class="d-block w-100" alt="..." style="max-height: 350px; object-fit:cover;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Title -->
      <section class="my-5 w-50" style="margin: 0 auto; text-align: center;">
        <h3>Welcome to Sarvello fine foods</h3>
        <hr class="my-3"/>
        <h5>Feature products</h5>
      </section>

      <!-- Products cards -->
      <section class="cards">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
            <div class="col">
              <div class="card my-2 border border-0">
                <img src="images/Tomato.png" class="card-img-top" alt="products">
                <div class="card-body">
                  <h6 class="card-title">Tomato</h6>
                  <a href="#" class="btn btn-success my-2" style="width: 100%">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card my-2 border-0">
                <img src="images/Apple.png" class="card-img-top" alt="products">
                <div class="card-body">
                  <h6 class="card-title">Green Apple</h6>
                  <a href="#" class="btn btn-success my-2" style="width: 100%">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card my-2 border-0">
                <img src="images/Cheese.png" class="card-img-top" alt="products">
                <div class="card-body">
                  <h6 class="card-title">Cheddar Cheese</h6>
                  <a href="#" class="btn btn-success my-2" style="width: 100%">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card my-2 border-0">
                <img src="images/Beef.png" class="card-img-top" alt="products">
                <div class="card-body">
                  <h6 class="card-title">Beef</h6>
                  <a href="#" class="btn btn-success my-2" style="width: 100%">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card my-2 border-0">
                <img src="images/Brownie.png" class="card-img-top" alt="products">
                <div class="card-body">
                  <h6 class="card-title">Brownies</h6>
                  <a href="#" class="btn btn-success my-2" style="width: 100%">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Subscrption -->
      <section class="subscribe mt-5">
        <img src="images/bg-1.png" alt="background" style="width: 100%; height: 200px;">
        <div class="center">
        <p style="color: white;">GET INSTANT DEALS AND EXCLUSIVE OFFER!</p>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="E-mail">
          <button class="btn btn-success" type="submit" style="padding: 0px 16px;">Subscribe</button>
        </form>
        </div>
      </section>
    </main>

    <?php include 'partials/footer.php'; ?>
  </body>
</html>

