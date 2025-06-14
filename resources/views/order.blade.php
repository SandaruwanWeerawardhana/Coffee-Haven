<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Order</title>
</head>

<body class="bg-gray-50 text-gray-800">

  <x-navbar>

    <!-- Same header/footer -->
    <section class="py-12">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-12">Place Your Order</h2>
        <form action="/php/process_order.php" method="POST" class="max-w-3xl mx-auto bg-gray-100 p-6 rounded shadow">
          <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="customer_name">Your Name</label>
            <input type="text" id="customer_name" name="customer_name" required
              class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-400">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 mb-2">Select Coffee</label>
            <select name="coffee_type" required
              class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-400">
              <option value="">-- Choose a coffee --</option>
              <option value="espresso">Espresso</option>
              <option value="cappuccino">Cappuccino</option>
              <option value="latte">Latte</option>
              <option value="americano">Americano</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="quantity">Quantity</label>
            <input type="number" min="1" value="1" id="quantity" name="quantity" required
              class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-400">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 mb-2">Pickup or Delivery?</label>
            <div class="flex space-x-4">
              <label><input type="radio" name="pickup_delivery" value="pickup" checked> Pickup</label>
              <label><input type="radio" name="pickup_delivery" value="delivery"> Delivery</label>
            </div>
          </div>
          <div class="mb-4 delivery-address hidden">
            <label class="block text-gray-700 mb-2" for="address">Delivery Address</label>
            <input type="text" id="address" name="address"
              class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-400">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="notes">Special Instructions</label>
            <textarea id="notes" name="notes" rows="3"
              class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
          </div>
          <button type="submit"
            class="bg-black text-white px-6 py-2 rounded hover:bg-yellow-500 transition duration-300">Submit
            Order</button>
        </form>
      </div>
    </section>

    <!-- <script>
      document.querySelectorAll("input[name='pickup_delivery']").forEach(radio => {
        radio.addEventListener("change", function () {
          const addressField = document.querySelector(".delivery-address");
          if (this.value === "delivery") {
            addressField.classList.remove("hidden");
          } else {
            addressField.classList.add("hidden");
          }
        });
      });
    </script> -->

  </x-navbar>

</body>

</html>