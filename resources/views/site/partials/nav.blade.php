<nav class="absolute z-20 w-full @if(Route::current()->uri != '/') bg-black @endif">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="logo px-2 text-lg text-white font-bold">
                   <a href="/">
                    TASVEER
                    </a>
                </div>
                
                <ul class="px-2 flex items-center">
                    <li class="px-6 py-4"><a href="" class="text-md text-white">Explore</a></li>
                    <li class="px-6 py-4"><a href="" class="text-md text-white">License</a></li>
                    <li class="px-6 py-4"><a href="/cart/summary" class="text-md text-white">Cart ({{ optional($cart)->total() ?? 0}})</a></li>
                    <li class="px-6 py-4"><a href="" class="text-md text-white inline-block px-6 py-2 border-2 border-white-600 rounded-sm hover:bg-white transition-all">Create an account</a></li>
                </ul>
            </div>
        </div>
    </nav>
