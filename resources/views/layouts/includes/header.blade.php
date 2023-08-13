<header class="text-gray-400 bg-dark body-font">
    <div class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <div class="w-28 text-white p-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.webp') }}" />
                </a>
            </div>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center justify-center text-white list-none gap-10">
            <li><a href="">Order</a></li>
            <li><a href="">Transact</a></li>
            <li><a href="">Analyze</a></li>
            <li><a href="{{ route('manage.index') }}">Manage</a></li>
            @auth
                <li>
                    <a href="{{ route('logout') }}" class="inline-flex items-center bg-gray-500 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Logout<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"></path></svg></a>
                </li>
            @endauth
        </nav>
    </div>
</header>