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
              <li class="breadcrumb-item">Pick up & Delivery</li>
            </ol>
          </nav>
        <h3>How it works</h3>
        <hr />
      </section>

      <section class="container">
        <div class="row justify-content-center">
          <div class="col my-6 col-6 col-sm-4 col-md-2 col-lg-2">
            <div>
                <img src="images/pickup.png" style="width: 100%;">
            </div>
          </div>
          <div class="col my-6 col-6 col-sm-8 col-md-10 col-lg-10">
                <h6 class="mt-3">Pick Up</h6>
                <p class="mt-3">Deliver to your house. <br>
                  Order online. <br>
                  Start shopping our products and specials
                  Choose when you want to collect.
                 Bring your ID to the service desk and we'll bring your groceries to you.<br>
                </p>
            </div>
        </div>
        <div class="row justify-content-center my-3">
          <div class="col my-6 col-6 col-sm-4 col-md-2 col-lg-2">
            <div>
                <img src="images/delivery.png" style="width: 100%;">
            </div>
          </div>
          <div class="col my-6 col-6 col-sm-8 col-md-10 col-lg-10">
                <h6 class="mt-3">Delivery</h6>
                <p class="mt-3">Deliver to your house. <br>
                   Order online and choose when you want to deliver. <br>
                   We will deliver to your house without any service surcharge.
                 </p>
            </div>
        </div>
          </div>
       </div>
      </section>
    </main>

    <?php include 'partials/footer.php'; ?>
  </body>
</html>

