<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Contact</title>
</head>

<body class="bg-gray-50 text-gray-800">

  <x-navbar>

    <section class="py-12">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-12">Get In Touch</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
          <div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.096628112206!2d-122.41941548468125!3d37.77492927976011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c9be8d0ed%3A0xf135cf06a15be6dd!2sSan+Francisco%2C+CA!5e0!3m2!1sen!2sus!4v1612835902124!5m2!1sen!2sus"
              width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="mt-6">
              <p><strong>Phone:</strong> 034-456-7890</p>
              <p><strong>Email:</strong> info@coffehaven.com</p>
              <p><strong>Address:</strong> Kaluthra, Sri Lanka</p>
              <p><strong>Hours:</strong> Mon-Fri 7am–8pm | Sat-Sun 8am–6pm</p>
            </div>
          </div>
          <form action="/php/send_email.php" method="POST" class="bg-gray-100 p-6 rounded shadow">
            <div class="mb-4">
              <label class="block text-gray-700 mb-2" for="name">Name</label>
              <input type="text" id="name" name="name" required
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 mb-2" for="email">Email</label>
              <input type="email" id="email" name="email" required
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 mb-2" for="message">Message</label>
              <textarea id="message" name="message" rows="5" required
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
            </div>
            <button type="submit"
              class="bg-black text-white px-6 py-2 rounded hover:bg-yellow-500 transition duration-300">Send
              Message</button>
          </form>
        </div>
      </div>
    </section>
  </x-navbar>


</body>

</html>