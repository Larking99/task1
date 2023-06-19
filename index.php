<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sneakers</title>
  <style>
    body {
      width: 75%;
      margin: 0 auto;
      font-family: Arial, sans-serif;
    }

    .flex-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px;
    }

    .flex-container a {
      margin-left: 10px;
      color: #000;
      text-decoration: none;
    }

    .product {
      display: flex;
      margin-top: 20px;
      padding: 10px;
    }

    .product .image {
      flex: 0 0 40%;
      max-width: 40%;
      padding-right: 20px;
    }

    .product .image img {
      width: 100%;
      height: auto;
      object-fit: contain;
    }

    .product .details {
      flex: 0 0 60%;
      max-width: 60%;
    }

    .product .details h1 {
      margin-top: 0;
    }

    .product .details p {
      margin-bottom: 10px;
    }

    .product .details .price {
      font-weight: bold;
      margin-top: 10px;
    }

    .product .details .discount {
      color: #999;
      text-decoration: line-through;
    }

    .product .details .add-to-cart {
      margin-top: 10px;
      background-color: orange; 
      color: #fff;
      padding: 5px 10px;
      border: none;
      cursor: pointer;
    }

    .additional-images {
      display: flex;
      flex-wrap: wrap;
      margin-top: 10px;
    }

    .additional-images img {
      width: 9.6%;
      height: auto;
      object-fit: cover;
      margin-right: 5px;
      margin-bottom: 5px;
    }

    @media screen and (max-width: 768px) {
      body {
        width: 100%;
        padding: 10px;
      }

      .flex-container {
        flex-wrap: wrap;
      }

      .flex-container a {
        margin: 5px;
      }

      .product {
        flex-direction: column;
      }

      .product .image,
      .product .details {
        max-width: 100%;
      }

      .product .image {
        padding-right: 0;
        margin-bottom: 10px;
      }

      .additional-images img {
        width: 15%;
        margin-right: 10px;
        margin-bottom: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="flex-container">
    <h2>Sneakers</h2>
    <div>
      <a href="#">Collections</a>
      <a href="#">Men</a>
      <a href="#">Women</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </div>
    <div class="icons">
      <img src="./images/icon-cart.svg" alt="cart">
      <img src="./images/image-avatar.png" alt="">

    </div>
  </div>
  <hr>

  <div class="product">
    <div class="image">
      <img src="./images/image-product-1.jpg" alt="product">
    </div>
    <div class="details">
      <h1>Fall Limited Edition </h1>
      <h1>Sneakers</h1>
      <p>These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole, they'll withstand everything the weather can offer.</p>
      <p class="price">
      $125.00
        50%
        <br>
        <span class="discount">$250.00</span>
      </p>
      <p>0</p>
      
      <button class="add-to-cart">Add to cart</button>
    </div>
  </div>

  <div class="additional-images">
    <img src="./images/image-product-2.jpg" alt="product">
    <img src="./images/image-product-3.jpg" alt="product">
    <img src="./images/image-product-4.jpg" alt="product">
    <img src="./images/image-product-1.jpg" alt="product">
  </div>
</body>
</html>
