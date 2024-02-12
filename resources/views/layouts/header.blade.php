<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">

        <span class="ml-3 text-3xl font-extrabold">Exclusive</span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center gap-5">
        <a href="{{ route('user.home') }}" class="mr-5 text-xl hover:text-red-900 cursor-pointer {{ Request::is('user/home') ? 'underline' : '' }}">Home</a>
        <a class="mr-5 text-xl hover:text-gray-900">Contact</a>
        <a href="{{ route('user.about') }}" class="mr-5 text-xl hover:text-red-900 cursor-pointer {{ Request::is('user/about') ? 'underline' : '' }}">About</a>

        <a class="mr-5 text-xl hover:text-gray-900">Sign up</a>
    </nav>


    <div class="flex items-center justify-between p-6 gap-4">
        <div class="flex items-center ">
            <input class="w-full py-2 px-4 text-gray-700 bg-gray-100 leading-tight border border-gray-100"
                id="search" type="text" placeholder="What are you looking for?">
            <button class="p-1">
                <svg class="h-7 w-7 text-black" fill="none" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </div>

        <div class="flex gap-4">
            <svg fill="#000000" height="30px" width="30px" version="1.1" id="Capa_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 471.701 471.701" xml:space="preserve">
                <g>
                    <path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
  c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
  l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
  C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
  s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
  c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
  C444.801,187.101,434.001,213.101,414.401,232.701z" />
                </g>
            </svg>

            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g>
            
            </svg>
            @auth
            <ul>                                
                <li class="flex gap-2">
           
                    {{ Auth::user()->name}} 
                    <form id="logout-form" method="post"  action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-600 font-extrabold bg-red-300 p-1 rounded-lg"href="{{ route('logout') }}" onclick="event.preventdefault(); document.getElementById('logout-form').submit();">Logout</button>
                    </form>
                 </li>
            </ul>
            @else
            <ul>                                
                <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Log In </a>  / <a href="{{ route('register') }}">Sign Up</a></li>
            </ul>
            @endif

        </div>

    </div>

</div>
