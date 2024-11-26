
<!-- 
 <section id="menu" class="menu">
  <h2>Our Menu</h2>


  <div class="menu-item">
    <h3><a href="{{ route('starter') }}" target="_blank" class="menu-link">Starter</a></h3>
  </div>

  
  <div class="menu-item">
    <h3><a href="{{ route('main-course') }}" target="_blank" class="menu-link">Main Course</a></h3>
  </div>

  
  <div class="menu-item">
    <h3><a href="{{ route('drinks') }}" target="_blank" class="menu-link">Drinks</a></h3>
  </div>
</section> -->



<section id="menu" class="menu">
  <h2 class="text-dark">Our Menu</h2>
</section>

  <div class="menu-items-container">
    <!-- Starter -->
            <div class="menu-item">
        <img src="https://via.placeholder.com/300x200" alt="Starter Dish">
        <h3><a href="{{ route('starter') }}" class="menu-link text-white">Starter</a></h3>
        <p>Fresh and flavorful starters to kick off your meal.</p>
        </div>


        <!-- Main Course -->
        <div class="menu-item">
        <img src="https://via.placeholder.com/300x200" alt="Main Course Dish">
        <h3><a href="{{ route('main-course') }}" class="menu-link text-white">Main Course</a></h3>
        <p>Hearty and delicious main courses for your satisfaction.</p>
        </div>


    <!-- Drinks -->
            <div class="menu-item">
        <img src="https://via.placeholder.com/300x200" alt="Drinks Dish">
        <h3><a href="{{ route('drinks') }}" class="menu-link text-white">Drinks</a></h3>
        <p>Refreshing drinks to complement your meal.</p>
        </div>






