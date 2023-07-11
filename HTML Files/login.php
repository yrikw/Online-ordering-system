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
            <h3>Login</h3>
            <hr class="my-3"/>
        </section>

        <!-- login form -->
        <div class="container">
            <div class="row">
                <section class="col-8 col-md-8 col-lg-6" style="margin: 0 auto;">
                    <form class="mb-3">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                          <div id="passwordHelpBlock" class="form-text">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                          </div>
                        </div>
                        <a href="#" class="text-success">Forgot your password?</a>
                        <div class="my-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      <p>New to Sarvello Fine Foods?<a href="customer_registration1.html" class="text-success ms-3">Register Here</a></p>
                      <a href="index.html" class="text-success">Continue as a Guest</a>
                </section>
            </div>
        </div>
    </main>

    <?php include 'partials/footer.php'; ?>
  </body>
</html>

