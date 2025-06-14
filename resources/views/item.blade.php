<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Items</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">
  <x-navbar>
    <main class="container mx-auto px-6 py-8 space-y-10">

      <section class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Add New Coffee Item</h2>
        <form class="space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Item Name</label>
              <input type="text" placeholder="e.g. Latte" required
                class="w-full px-4 py-2 border rounded focus:ring focus:ring-yellow-300 focus:outline-none">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Price ($)</label>
              <input type="number" step="0.01" min="0" required
                class="w-full px-4 py-2 border rounded focus:ring focus:ring-yellow-300 focus:outline-none">
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
            <input type="file" step="0.01" min="0" required
                class="w-full px-4 py-2 border rounded focus:ring focus:ring-yellow-300 focus:outline-none">
          </div>
          <button type="submit"
            class="bg-black text-white px-5 py-2 rounded hover:bg-yellow-500 transition duration-300">
            Add Coffee Item
          </button>
        </form>
      </section>

      <!-- View All Items -->
      <section class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Current Coffee Items</h2>
        <div class="overflow-x-auto">
          <table class="min-w-full table-auto text-left">
            <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
              <tr>
                <th class="py-3 px-4">Name</th>
                <th class="py-3 px-4">Price</th>
                <th class="py-3 px-4">Image</th>
                <th class="py-3 px-4">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <tr>
                <td class="py-3 px-4 font-medium">Espresso</td>
                <td class="py-3 px-4">$2.50</td>
                <td class="py-3 px-4">A strong and bold shot of pure coffee essence.</td>
                <td class="py-3 px-4 space-x-2">
                  <button class="text-blue-600 hover:text-blue-800">Edit</button>
                  <button class="text-red-600 hover:text-red-800">Delete</button>
                </td>
              </tr>
              <tr>
                <td class="py-3 px-4 font-medium">Cappuccino</td>
                <td class="py-3 px-4">$3.50</td>
                <td class="py-3 px-4">Smooth blend of espresso, steamed milk, and foam.</td>
                <td class="py-3 px-4 space-x-2">
                  <button class="text-blue-600 hover:text-blue-800">Edit</button>
                  <button class="text-red-600 hover:text-red-800">Delete</button>
                </td>
              </tr>
              <tr>
                <td class="py-3 px-4 font-medium">Latte</td>
                <td class="py-3 px-4">$4.00</td>
                <td class="py-3 px-4">Creamy and rich with a touch of artful foam.</td>
                <td class="py-3 px-4 space-x-2">
                  <button class="text-blue-600 hover:text-blue-800">Edit</button>
                  <button class="text-red-600 hover:text-red-800">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-inner py-4 text-center text-sm text-gray-600">
      &copy; 2025 Coffee Haven Admin Panel
    </footer>
  </x-navbar>
</body>

</html>