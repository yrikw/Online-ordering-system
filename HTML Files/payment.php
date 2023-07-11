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
              <li class="breadcrumb-item">Cart</li>
              <li class="breadcrumb-item">Payment</li>
            </ol>
          </nav>
        <h3>Payment</h3>
        <hr />
      </section>

      <div class="container">
        <div class="row">
            <section class="col-12 col-md-12 col-lg-6">
                <form class="mb-3 container">
                  <h5 class="mb-3">Card details</h5>
                  <div class="row">
                     <div class="col-sm-12 col-md-12 col-lg-6">
                       <label class="form-label m-1">First Name</label>
                       <input type="text" class="form-control">
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-6">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control">
                    </div>
                    
                    <div class="my-2">
                      <label class="form-label">Card Number</label>
                      <input type="text" class="form-control">
                    </div>

                    <div class="row">
                      <div class="mb-3 col-sm-12 col-md-6 col-lg-6">
                        <label class="form-label">Expiry Date</label>
                        <input type="date" class="form-control">
                      </div>
                      <div class="mb-3 col-sm-12 col-md-6 col-lg-6">
                        <label class="form-label">CCV</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
            
                <h5 class="mb-3 mt-3">Pick up & Delivery details</h5>
                  <div class="row">
                      <div class="mb-3 col-sm-12 col-md-4 col-lg-4">
                        <label class="form-label">Method</label>
                        <select name="pickupmethod" class="form-control">
                            <option value="pickup">Pick Up</option>
                            <option value="delivery">Delivery</option>
                        </select>
                      </div>
                      <div class="mb-3 col-sm-12 col-md-4 col-lg-4">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control">       
                      </div>
                      <div class="mb-3 col-sm-12 col-md-4 col-lg-4">
                        <label class="form-label">Time</label>
                        <input type="time" class="form-control">      
                      </div>
                      <div class="mb-3 col-sm-12 col-md-12 col-lg-12">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control">              
                      </div>
                    </div>
                    <div class="mb-3 d-flex flex-column justify-content-center">
                       <button type="submit" class="btn btn-success mb-3 w-50" style="margin: 0 auto;">Submit</button>
                       <a href="#" class="btn mb-3 list w-50" style="margin: 0 auto;">Continue Shopping</a>
                    </div>
                </form>
          </section>

          <section class="col-8 col-md-8 col-lg-6">
            <h5 class="mb-3">Summary</h5>
            <div class="d-flex justify-content-between">
              <div class="p-2 "><h6>Subtotal</h6></div>
              <div class="p-2 "><h6>$13.60</h6></div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="p-2 "><h6>Qty</h6></div>
              <div class="p-2 "><h6>3</h6></div>
            </div>

            <hr />
            <div class="d-flex justify-content-between">
              <div class="p-2 "><h6>Total</h6></div>
              <div class="p-2 "><h6>$13.60</h6></div>
            </div>
        </section>
        </div>
       </div>
    </main>

    <?php include 'partials/footer.php'; ?>
  </body>
</html>

