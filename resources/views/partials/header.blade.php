{{-- <div class="container-fluid">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">Simple header</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>
</div> --}}

<nav class="itbg-whe border-gray-200 px-2 sm:px-4 py-1 shadow-md mb-3">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="/#" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap">CV DIKA LANGGENG TRIJAYA</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
        <li>
            <a href="/#" class="block text-lg pr-4 rounded bg-transparent <?php echo $active == 'home' ? 'text-cyan-500' : 'text-gray-700' ?> p-0" aria-current="page">BERANDA</a>
        </li>
        <li>
            <a href="/products/#" class="block text-lg pr-4 rounded bg-transparent <?php echo $active == 'products' ? 'text-cyan-500' : 'text-gray-700' ?> p-0">PRODUK</a>
        </li>

        <li>
            <a href="/about/#" class="block text-lg pr-4 rounded bg-transparent <?php echo $active == 'about' ? 'text-cyan-500' : 'text-gray-700' ?> p-0">TENTANG</a>
        </li>
        </ul>
    </div>
    </div>
</nav>
