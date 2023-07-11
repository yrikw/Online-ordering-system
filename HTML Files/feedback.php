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
            <h3>Feedback</h3>
            <hr class="my-3"/>
        </section>

        <!-- login form -->
        <div class="container">
            <div class="row">
                <section class="col-8 col-md-8 col-lg-6" style="margin: 0 auto;">
                    <form class="mb-3">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Title</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label m-1">Comment</label>
                            <textarea rows="5" cols="80" type="text" class="form-control"></textarea>
                         </div>
                        <div class="mb-3 text-center">
                          <button class="btn btn-success"><a href="customer_details.html" style="color: white;">Send</a></button>
                        </div>
                      </form>
                </section>
            </div>
        </div>
    </main>

    <?php include 'partials/footer.php'; ?>
  </body>
</html>

