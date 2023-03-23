<nav
    class="bg-white md:navbar dark:bg-gray-700 border-gray-200 px-2 sm:px-4 py-2.5 transition duration-1000 ease-linear">
    <div class="container flex flex-wrap items-center justify-between mx-auto transition duration-1000 ease-linear">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('images/LiteHub.png') }}" class="h-7 mr-1 sm:h-9" alt="LiteHub image Logo"/>
            <span class="self-center flex text-xl font-semibold">
                <span class="second-color">Lite</span>
                <span class="main-color">Hub</span>
            </span>
        </a>
        <div class="flex md:order-2 transition duration-1000 ease-linear">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false"
                    class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>

            <button type="button" id="menu-toggle"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-green-400"
                    aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>

            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                    class=" md:flex flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white"
                    type="button">
                <span class="sr-only">Open user menu</span>
                <span class="hideAvatar">Bonnie Green</span>
                <div class="relative ml-2 flex space-x-2">
                    <img class="w-8 h-8 mr-2 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                         alt="user photo">
                    <svg class="w-4 h-4 mx-1.5 absolute right-0 bottom-0 " aria-hidden="true" fill="currentColor"
                         viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg" style="right: 6px;bottom: -4.5px;"
                    >
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
            </button>
            <div id="dropdownAvatarName"
                 class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div class="font-medium ">Pro User</div>
                    <div class="truncate">name@flowbite.com</div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                        <a href="#"
                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="#"
                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                        out</a>
                </div>
            </div>
        </div>
        <div
            class="items-center transition duration-1000 ease-linear justify-between hidden w-full md:flex md:w-auto md:order-1"
            id="navbar-search">
            <div class="relative mt-3 md:hidden transition duration-1000 ease-linear">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="search-navbar"
                       class="block w-full p-2 pl-10 text-sm text-green-900 border bg-transparent border-green-500 rounded-3xl focus:ring-green-500 focus:border-green-500 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                       placeholder="Search...">
            </div>
            <ul class="flex flex-col transition duration-1000 ease-linear items-center mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                <li>
                    <div class="relative hidden md:block">
                        <div class="absolute left-0 top-[21px] flex items-center pl-3 pointer-events-none"
                             style="top: 8px">
                            <svg class="w-5 h-5" aria-hidden="true" fill="rgba(255,219,88,0.49)"
                                 viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <label for="search-navbar">
                            <input type="text" id="search-navbar"
                                   class="block searchInput p-2 pl-10 text-sm text-green-900 border bg-transparent border-green-500 rounded-3xl focus:ring-green-500 focus:border-green-500 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                   placeholder="Search in LiteHub ...">
                        </label>
                    </div>
                </li>
                <li>
                    {{--                     href="{{route('home')}}"--}}
                    <a
                        class="block flex cursor-pointer items-stretch hidden md:block space-x-1 py-2 pl-3 pr-4 text-white main-color md:bg-transparent md:text-blue-700 md:p-0 hover:second-color dark:text-white"
                        aria-current="page">
                        <box-icon type='solid' name='home' size='xs'></box-icon>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    {{--                    href="{{route('books')}}"--}}
                    <a
                        class="block flex cursor-pointer hidden md:block items-stretch space-x-1 py-2 pl-3 pr-4 text-white main-color md:bg-transparent md:text-blue-700 md:p-0 hover:second-color dark:text-white"
                        aria-current="page">
                        <box-icon type='solid' name='book-alt' size='xs'></box-icon>
                        <span>Books</span>
                    </a>
                </li>
                <li>
                    {{--                    href="{{route('groups')}}"--}}
                    <a
                        class="block flex cursor-pointer hidden md:block items-stretch space-x-1 py-2 pl-3 pr-4 text-white main-color md:bg-transparent md:text-blue-700 md:p-0 hover:second-color dark:text-white"
                        aria-current="page">
                        <box-icon type='solid' name='group' size='xs'></box-icon>
                        <span>Groups</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
