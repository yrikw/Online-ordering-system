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

<style>
  .product-wrap {
  max-width: 800px;
  margin: 0 auto;
}

.product-box {
  border: 1px solid #ccc;
  border-radius: 5px;
  overflow: hidden;
  box-shadow: 5px 5px 15px #ccc;
    padding: 6px;
}

.product-card {
  display: flex;
  flex-wrap: wrap;
}

.product-image {
  flex: 0 0 40%;
  max-width: 40%;
  padding: 10px;
}

.product-image img {
  width: 100%;
    height: 100%;
    display: block;
    margin: 0 auto;
    object-fit: cover;
}

.product-details {
  flex: 1;
  padding: 10px;
}

.product-title {
  font-size: 24px;
  font-weight: bold;
  margin: 0 0 10px;
}

.product-description {
  font-size: 16px;
  line-height: 1.4;
  margin: 0 0 10px;
}

.product-price {
  font-size: 24px;
  font-weight: bold;
  margin: 0 0 10px;
}

.product-actions {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}

.quantity {
  flex: 0 0 50%;
  max-width: 50%;

}

.btn {
  font-size: var(--btn-size);
  padding: var(--btn-padding);
}

.add-to-cart {
  background-color: green;
  color: white;
}

.save-to-wishlist {
  background-color: White;
  color: Black;
}

</style>

  </head>
  <body>
    <?php include 'partials/navbar.php'; ?>
    <hr />

    <main>
      
      <!--Product card  -->
  
<div class="product-wrap">
  <div class="product-box">
    <div class="product-card">
      <div class="product-image">
        <img src="images/Tomato.png" alt="Product Image">
      </div>
      <div class="product-details">
        <div class="product-title">
          <h2>Fresh Tomato</h2>
        </div>
        <div class="product-description">
          <p>Fresh tomatoes are vibrant, juicy, and bursting with flavor. They're perfect for salads, sandwiches, sauces, and more, and are packed with vitamins and fiber. Add them to your cart today and taste the difference!</p>
        </div>
        <div class="product-price">
          <p>$4.99</p>
        </div>
        <div class="product-actions">
          <div class="quantity">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="1">
          </div>
        </div>
      <br>
          <button class="btn add-to-cart" style="--btn-size: 12px; --btn-padding: 15px 30px;">Add to Cart</button>

          <button class="btn save-to-wishlist" style="--btn-size: 12px; --btn-padding: 15px 30px;">Save to Wishlist</button>

        </div>
      </div>
    </div>
  </div>
</div>






      </main>

      <?php include 'partials/footer.php'; ?>
  </body>
</html>

