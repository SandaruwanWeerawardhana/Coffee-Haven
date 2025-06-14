<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>

    <header class="bg-black text-white p-4 shadow-md ">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">☕ Coffee Haven</h1>
            <nav class="space-x-6 hidden md:flex">
                <a href="/" class="hover:text-yellow-400">Home</a>
                <a href="/order" class="hover:text-yellow-400">Order</a>
                <a href="/item" class="hover:text-yellow-400">Item</a>
                <a href="/services" class="hover:text-yellow-400">Services</a>
                <a href="/contact" class="hover:text-yellow-400">Contact</a>
            </nav>
        </div>
    </header>

    {{$slot}}

</body>

</html>