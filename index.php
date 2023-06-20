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
      height: 20px;
    }

    .flex-container a {
      margin-left: 10px;
      color: #000;
      text-decoration: none;
    }

    .flex-container .icons {
      display: flex;
    }

    .flex-container .icons img:last-child {
      width: 3rem;
      height: 3rem;
      border-radius: 50%;
      object-fit: cover;
      margin-left: 2rem;
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
      border-radius: 8px;
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
      border-radius: 8px;
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
      <h3>Sneakers Company</h3>
      <h1>Fall Limited Edition </h1>
      <h1>Sneakers</h1>
      <p>These low-profile sneakers are your perfect casual wear companion. Featuring a durable rubber outer sole,
        they'll withstand everything the weather can offer.</p>
      <div style="display:flex" ;>
        <p>
          $125.00
        <div style="margin:5px; color:orange" ;>
          50%
        </div>
      </div>
      <span class="discount">$250.00</span>
      <div style="display: flex; height: auto; align-items: center;">
        <div style="display: flex; height: 100%; margin-right: 2rem">
          <p
            style="width: 3rem; height: 100%; padding: 0.5rem; background-color: orange; display: flex; justify-content: center; align-items: center; font-weight: 8000; font-size: 1.5rem;">
            -</p>
          <p
            style="width: 3rem; height: 100%; padding: 0.5rem; display: flex; justify-content: center; align-items: center; font-weight: 8000; font-size: 1.5rem;">
            0</p>
          <p
            style="width: 3rem; height: 100%; padding: 0.5rem; background-color: orange; display: flex; justify-content: center; align-items: center; font-weight: 8000; font-size: 1.5rem;">
            +</p>
        </div>
        <button class="add-to-cart" style="width: auto; height: 100%; padding: 0.9rem 0">
        <img src="images/icon-cart.svg" alt="" style="margin-right: 1rem;">
          Add to cart
        </button>
      </div>


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
