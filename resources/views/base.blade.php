<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV DIKA LANGGENG TRIJAYA</title>
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>
<body class="relative">
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-1 shadow-md mb-3">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="https://flowbite.com/" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap">CV DIKA LANGGENG TRIJAYA</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
            <li>
                <a href="/#" class="block text-lg pr-4 rounded bg-transparent <?php echo $active == 'home' ? 'text-cyan-500' : 'text-gray-700' ?> p-0" aria-current="page">HOME</a>
            </li>
            <li>
                <a href="/products/#" class="block text-lg pr-4 rounded bg-transparent <?php echo $active == 'products' ? 'text-cyan-500' : 'text-gray-700' ?> p-0">PRODUCT</a>
            </li>
            <li>
                <a href="/about/#" class="block text-lg pr-4 rounded bg-transparent <?php echo $active == 'about' ? 'text-cyan-500' : 'text-gray-700' ?> p-0">ABOUT</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-blue-600 w-full mt-3">
        <div class="w-full container mx-auto px-4 py-2">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                    <span class="self-center text-xl text-white font-semibold whitespace-nowrap">CV DIKA LANGGENG TRIJAYA</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm text-white sm:mb-0">
                    <li>
                        <a href="/#" class="mr-4 hover:underline md:mr-6 ">Home</a>
                    </li>
                    <li>
                        <a href="/products/#" class="mr-4 hover:underline md:mr-6">Product</a>
                    </li>
                    <li>
                        <a href="/about/#" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                </ul>
            </div>
            <hr class="my-3 border-gray-200" />
            <span class="block text-sm text-white sm:text-center">© 2023 <a href="#" class="hover:underline">CV DIKA LANGGENG TRIJAYA</a>. All Rights Reserved.</span>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>
