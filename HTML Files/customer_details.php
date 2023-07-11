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
            </ol>
          </nav>
        <h3>Hello Yuri Ikawa, </h3>
        <hr />
      </section>

      <section class="container">
        <div class="row d-flex justify-content-center ">
          <div class="mb-3 col-10 col-sm-12 col-md-12 col-lg-12">
            <table>
              <tbody>
                <tr>
                  <th>E-mail:</th>
                  <td>kent@institute.com</td>
                </tr>
                <tr>
                  <th>Phone:</th>
                  <td>0411530923</td>
                </tr>
                <tr>
                  <th>Address:</th>
                  <td>178 kent street, VIC, 3000</td>
                </tr>
                <tr>
                  <th>Date of birth:</th>
                  <td>10/4/1979</td>
                </tr>
                <tr>
                  <th>Job type:</th>
                  <td>Other</td>
                </tr>
              </tbody>
            </table>
            <button type="submit" class="btn btn-success my-3" style="margin: 0 auto;"><a href="edit_customer.html" style="color: white;">Edit Your Profile</a></button>
          </div>
       </div>
      </section>

      <!-- Order History -->
      <section class="container">
        <div class="row d-flex justify-content-center ">
        <div class="mb-3 col-10 col-sm-12 col-md-12 col-lg-12" style="overflow-x:auto;">
        <h5 class="my-3 mt-3">Order History</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Order ID</th>
              <th scope="col">Order date</th>
              <th scope="col">Total</th>
              <th scope="col">Qty</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>23/4/2023</td>
              <td>$35.50</td>
              <td>5</td>
              <td>24/4/2023</td>
              <td>12:00</td>
              <td><a class="btn btn-outline-success" href="Edit_order.html">Edit</a></td>
              <td><a class="btn link btn-outline-secondary" href="#">Cancel</a></td>
              <td><a class="btn btn-outline-success" href="#">Feedback</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>15/4/2023</td>
              <td>$40.50</td>
              <td>10</td>
              <td>22/4/2023</td>
              <td>12:00</td>
              <td><a class="btn btn-outline-success" href="Edit_order.html">Edit</a></td>
              <td><a class="btn link btn-outline-secondary" href="#">Cancel</a></td>
              <td><a class="btn btn-outline-success" href="#">Feedback</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>10/4/2023</td>
              <td>$100.00</td>
              <td>15</td>
              <td>17/4/2023</td>
              <td>12:00</td>
              <td><a class="btn btn-outline-success" href="Edit_order.html">Edit</a></td>
              <td><a class="btn link btn-outline-secondary" href="#">Cancel</a></td>
              <td><a class="btn btn-outline-success" href="#">Feedback</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
      </section>
    </main>

    <?php include 'partials/footer.php'; ?>
  </body>
</html>

