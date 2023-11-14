<header id="primary-header"
    class="primary-header minimize | relative bg-indigo-950 min-h-full p-4 flex justify-start items-center flex-col shadow-lg">
    <div onclick="minimize()" class="absolute top-2 right-4 cursor-pointer"><i id="minimize-icon"
            class="fa-solid fa-angles-left text-white"></i>
    </div>
    <a href="#"><img class="w-14" src="{{asset('images/logo.png')}}" alt="Logo" /></a>
    <h1 class="py-2 font-bold text-lg">CinemaCollector</h1>
    <hr class="h-px w-1/2 my-4 bg-gray-200 border-0">
    <nav #primaryNavigation class="primary-navigation grow flex flex-col">
        <ul id="primary-navigation" role="list" class="grow py-2 flex flex-col justify-between items-center"
            aria-label="primary navigation">
            <div>
                <li class="py-1 cursor-pointer">Home</li>
                <li class="cursor-pointer">About</li>
            </div>
            <div class="flex space-x-4">
                <li class="cursor-pointer">Login</li>
                <li class="cursor-pointer">Register</li>
            </div>
        </ul>
    </nav>
</header>