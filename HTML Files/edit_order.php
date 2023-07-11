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
              <li class="breadcrumb-item">Customer details</li>
              <li class="breadcrumb-item">Edit Orders</li>
            </ol>
          </nav>
        <h3>Edit Order </h3>
        <hr />
      </section>

      

      <!-- Order History -->
<section class="container">
  <div class="row d-flex justify-content-center ">
    <div class="mb-3 col-10 col-sm-12 col-md-12 col-lg-12" style="overflow-x:auto; max-width: 400px; padding: 20px; border-radius: 10px; box-sizing: content-box; box-shadow: 5px 5px 15px #ccc;">
  
      <form>
        <div class="form-group">
          <label for="orderID">Order ID</label>
          <input type="text" class="form-control" id="orderID" name="orderID" value="1" readonly>
        </div>
        <div class="form-group">
          <label for="orderDate">Order date</label>
          <input type="date" class="form-control" id="orderDate" name="orderDate" value="2023-04-23" readonly>
        </div>
         <div class="form-group">
          <label for="deliveryTime">Order Time</label>
          <input type="time" class="form-control" id="deliveryTime" name="deliveryTime" value="12:00" readonly>
        </div>
        <div class="form-group">
          <label for="total">Total</label>
          <input type="text" class="form-control" id="total" name="total" value="$35.50" readonly>
        </div>
        <div class="form-group">
          <label for="qty">Qty</label>
          <input type="text" class="form-control" id="qty" name="qty" value="5" readonly>
        </div>
       
         <div class="form-group">
          <label for="deliveryDate">Delivery/Pickup Date</label>
          <input type="date" class="form-control" id="deliveryDate" name="deliveryDate" value="2023-04-24">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" value="">
        </div>
        <div class="form-group">
          <label for="deliveryPickupTime">Delivery/Pickup Time</label>
          <input type="time" class="form-control" id="deliveryPickupTime" name="deliveryPickupTime" value="">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-success">Submit</button>
        <a class="btn link btn-outline-secondary" href="#">Cancel</a>
     
      </form>
    </div>
  </div>
</section>



    </main>

    <?php include 'partials/footer.php'; ?>
  </body>
</html>

