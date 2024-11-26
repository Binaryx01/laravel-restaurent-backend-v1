<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starter Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .header-bg {
      background-image: url('https://via.placeholder.com/1200x400'); /* Replace with your image */
      background-size: cover;
      background-position: center;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <div class="container my-4">
    <!-- Back button and title with background image -->
    <div class="header-bg mb-4">
      <button class="btn btn-secondary position-absolute top-0 start-0 m-3" onclick="window.history.back()">Back</button>
      <h1 class="text-white">Starter</h1> <!-- Centered title on the background -->
    </div>

    <!-- Grid layout for menu items -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <!-- Menu item 1 -->
      <div class="col">
        <div class="card">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Food 1">
          <div class="card-body">
            <h5 class="card-title">Dish 1</h5>
            <p class="card-text">A delicious starter with fresh ingredients.</p>
            <p class="card-text"><strong>$5.99</strong></p>
          </div>
        </div>
      </div>
      
      <!-- Menu item 2 -->
      <div class="col">
        <div class="card">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Food 2">
          <div class="card-body">
            <h5 class="card-title">Dish 2</h5>
            <p class="card-text">A spicy and crispy dish to start your meal.</p>
            <p class="card-text"><strong>$6.99</strong></p>
          </div>
        </div>
      </div>

      <!-- Menu item 3 -->
      <div class="col">
        <div class="card">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Food 3">
          <div class="card-body">
            <h5 class="card-title">Dish 3</h5>
            <p class="card-text">A traditional starter with a unique flavor.</p>
            <p class="card-text"><strong>$7.99</strong></p>
          </div>
        </div>
      </div>

      <!-- Add more menu items as needed -->
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
