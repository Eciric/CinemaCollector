<header id="primary-header"
    class="primary-header minimize | relative bg-slate-950 min-h-full p-4 flex justify-start items-center flex-col shadow-lg">
    <div onclick="minimize()" class="absolute top-2 right-4 cursor-pointer"><i id="minimize-icon"
            class="fa-solid fa-angles-left text-white"></i>
    </div>
    <a href="#"><img class="w-16 rounded-full" src="{{asset('images/logo.png')}}" alt="Logo" /></a>
    <h1 class="py-2">CinemaCollector</h1>
    <nav #primaryNavigation class="primary-navigation grow flex flex-col">
        <ul id="primary-navigation" role="list" class="grow py-2 flex flex-col justify-between"
            aria-label="primary navigation">
            <div>
                <li class="py-1 cursor-pointer">Home</li>
                <li class="cursor-pointer">About</li>
            </div>
            <li class="cursor-pointer">Login</li>
        </ul>
    </nav>
</header>