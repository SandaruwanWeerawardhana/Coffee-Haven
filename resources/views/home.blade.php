<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Home</title>
</head>

<body class="bg-gray-50 text-gray-800">

  <x-navbar>
  
  <section class="bg-cover bg-center h-96" style="background-image: url('https://collegians.com.au/wp-content/uploads/2018/02/Much-Ado-Coffee-Hero.jpg')">
    <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
      <div class="text-center text-white px-4">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Coffee Haven</h2>
        <p class="text-lg md:text-xl max-w-xl mx-auto">Your daily dose of caffeine & comfort in every cup.</p>
      </div>
    </div>
  </section>

  <!-- Welcome Intro -->
  <section class="py-12 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
      <h3 class="text-3xl font-semibold mb-4">Our Story</h3>
      <p class="max-w-2xl mx-auto text-gray-700">
        At Coffee Haven, we believe in brewing moments that matter. Whether it’s your morning ritual or an evening catch-up, we’ve got you covered with handcrafted brews and cozy vibes.
      </p>
    </div>
  </section>

  <!-- Featured Items -->
  <section class="py-12">
    <div class="container mx-auto px-6">
      <h3 class="text-3xl font-semibold text-center mb-8">Featured Coffees</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <div class="bg-white shadow rounded overflow-hidden">
          <img src="assets/images/espresso.jpg" alt="Espresso" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="font-bold text-lg">Espresso</h4>
            <p class="text-sm text-gray-600">A strong and bold shot of pure coffee essence.</p>
          </div>
        </div>
        <div class="bg-white shadow rounded overflow-hidden">
          <img src="assets/images/cappuccino.jpg" alt="Cappuccino" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="font-bold text-lg">Cappuccino</h4>
            <p class="text-sm text-gray-600">Smooth blend of espresso, steamed milk, and foam.</p>
          </div>
        </div>
        <div class="bg-white shadow rounded overflow-hidden">
          <img src="assets/images/latte.jpg" alt="Latte" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="font-bold text-lg">Latte</h4>
            <p class="text-sm text-gray-600">Creamy and rich with a touch of artful foam.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-12 bg-gray-100">
    <div class="container mx-auto px-6">
      <h3 class="text-3xl font-semibold text-center mb-8">What Our Customers Say</h3>
      <div class="flex flex-col md:flex-row gap-6 justify-center">
        <div class="bg-white p-6 rounded shadow max-w-md">
          <p class="italic">“Best coffee in town! The latte art is always perfect.”</p>
          <p class="mt-2 font-semibold">– Sarah L.</p>
        </div>
        <div class="bg-white p-6 rounded shadow max-w-md">
          <p class="italic">“Cozy spot with great Wi-Fi. Perfect for remote work!”</p>
          <p class="mt-2 font-semibold">– James T.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black text-white py-8">
    <div class="container mx-auto px-6 text-center">
      <p>&copy; 2025 Coffee Haven. All rights reserved.</p>
      <p class="mt-2">Follow us on:
        <a href="#" class="mx-2 hover:text-yellow-400">Instagram</a> |
        <a href="#" class="mx-2 hover:text-yellow-400">Facebook</a>
      </p>
      <p class="mt-2">📍 123 Brew Street, Coffee City</p>
    </div>
  </footer>


  </x-navbar>

</body>

</html>