<!-- Left Sidebar Sidebar -->
<aside
    class=" w-1/6 py-10 dash pl-10 min-w-min border-r border-gray-300 dark:border-zinc-700  hidden md:block transition duration-1000 ease-linear "
    id="left-sidebar">

    <!-- Menu -->
    <div class="flex flex-col gap-y-4 text-gray-500 fill-gray-500 text-sm" style="margin-top: 20px">
        <div class="text-gray-400/70  font-medium uppercase md:hidden block">Menu</div>
        <a class="flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white md:hidden menuDash"
           href="#">
            <box-icon name='home' class="h-5 w-5 svgMain"></box-icon>
            <span>Home</span>
        </a>
        <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white md:hidden menuDash"
           href="#">
            <box-icon name='book-alt' class="h-5 w-5 svgMain"></box-icon>
            <span>Books</span>
        </a>
        <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white md:hidden menuDash"
           href="#">
            <box-icon name='group' class="h-5 w-5"></box-icon>
            <span>Groups</span>
        </a>
        <div class="mt-8 text-gray-400/70  font-medium uppercase">Social</div>
        <a class="{{ ( request()->is('profile')? 'menuDashActive' : 'menuDashMain') . ' cursor-pointer  flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white menuDash' }}"
           href="{{route('profile.edit')}}">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M12 2v0C9.23 2 7 4.23 7 7c0 2.76 2.23 5 5 5 2.76 0 5-2.24 5-5v0c0-2.77-2.24-5-5-5Zm0 8v0c-1.66 0-3-1.35-3-3 0-1.66 1.34-3 3-3 1.65 0 3 1.34 3 3v0c0 1.65-1.35 3-3 3Zm9 11v-1 0c0-3.87-3.14-7-7-7h-4v0c-3.87 0-7 3.13-7 7v1h2v-1 0c0-2.77 2.23-5 5-5h4v0c2.76 0 5 2.23 5 5v1Z"></path>
            </svg>
            <span>Profile</span>
        </a>
        <a class="{{ (Route::has('Management')?'menuDashActive' : 'menuDashMain' ) . ' cursor-pointer  flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white menuDash' }}"
           href="">
            <svg class="h-5 w-5 svgMain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g>
                    <path
                        d="M16.6 11.04v-.001c.6-1.04.87-2.25.75-3.44 -.18-1.79-1.18-3.37-2.81-4.44l-1.11 1.66c1.11.742 1.8 1.79 1.91 2.974l-.001 0c.11 1.1-.29 2.2-1.08 2.98l-1.2 1.19 1.61.47c4.23 1.24 4.28 5.49 4.28 5.53h2c0-1.79-.96-5.285-4.4-6.952Z"></path>
                    <path
                        d="M9.5 12c2.2 0 4-1.8 4-4 0-2.21-1.8-4-4-4 -2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4Zm0-6c1.1 0 2 .89 2 2 0 1.1-.9 2-2 2 -1.11 0-2-.9-2-2 0-1.11.89-2 2-2Zm1.5 7H8c-3.31 0-6 2.69-6 6v1h2v-1c0-2.21 1.79-4 4-4h3c2.2 0 4 1.79 4 4v1h2v-1c0-3.31-2.7-6-6-6Z"></path>
                </g>
            </svg>
            <span>Friends</span>
        </a>
        <a class="{{ (Route::has('Management')?'menuDashActive' : 'menuDashMain' ) . ' cursor-pointer  flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white menuDash' }}"
           href=" #">
            <svg class="h-5 w-5 group-svgMain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g>
                    <path
                        d="M12 2v0C6.47 2 2 6.47 2 12c0 5.52 4.47 10 10 10 5.52 0 10-4.48 10-10v-.001c0-5.53-4.48-10-10-10Zm0 18v0c-4.42 0-8-3.59-8-8 0-4.42 3.58-8 8-8 4.41 0 8 3.58 8 8v0c0 4.41-3.59 8-8 8Z"></path>
                    <path
                        d="M12 8v0c-2.21 0-4 1.79-4 4 0 2.2 1.79 4 4 4 2.2 0 4-1.8 4-4v0c0-2.21-1.8-4-4-4Zm0 6v0c-1.11 0-2-.9-2-2 0-1.11.89-2 2-2 1.1 0 2 .89 2 2v0c0 1.1-.9 2-2 2Z"></path>
                </g>
            </svg>
            <span>Media</span>
        </a>

        @if( Auth::user()->roles->contains('role', 'ADMIN') )
            <div class="mt-8 text-gray-400/70  font-medium uppercase">Management</div>
            <a class="{{ (Route::has('Management')?'menuDashActive' : 'menuDashMain' ) . ' cursor-pointer  flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white menuDash' }}"
            "
            href="#">
            <box-icon name='objects-vertical-center' class="h-5 w-5"></box-icon>
            <span>publishers</span>
            </a>
            <a class="{{ (Route::has('Management')?'menuDashActive' : 'menuDashMain' ) . ' cursor-pointer  flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white menuDash' }}"
               href=" #">
                <box-icon name='category' class="h-5 w-5"></box-icon>
                <span>categories</span>
            </a>

            <a class="{{ (Route::has('Management')?'menuDashActive' : 'menuDashMain' ) . ' cursor-pointer  flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white menuDash' }}"
               href="{{Route('books.create')}}">
                <box-icon name='book-alt' class="h-5 w-5"></box-icon>
                <span>Books</span>
            </a>
            <a class="{{ (Route::has('Management')?'menuDashActive' : 'menuDashMain' ) . ' cursor-pointer  flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white menuDash' }}"
               href=" #">
                <box-icon name='group' class="h-5 w-5"></box-icon>
                <span>Groupes</span>
            </a>
            <a class="{{ (Route::has('Management')?'menuDashActive' : 'menuDashMain' ) . ' cursor-pointer  flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white menuDash' }}"
               href=" #">
                <box-icon name='user-check' class="h-5 w-5"></box-icon>
                <span>Users</span>
            </a>
        @endif

        <div class="mt-8 text-gray-400/70  font-medium uppercase">General</div>
        <a class="{{ (Route::has('Management')?'menuDashActive' : 'menuDashMain' ) . ' cursor-pointer  flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white menuDash' }}"
           href="#">
            <box-icon name='cog' class="h-5 w-5"></box-icon>
            <span>Settings</span>
        </a>
        <a class="{{ (Route::has('Management')?'menuDashActive' : 'menuDashMain' ) . ' cursor-pointer  flex items-center space-x-2 py-1  group hover:border-r-4 hover:font-semibold dark:hover:text-white menuDash' }}"
           href="#">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g>
                    <path d="M16 13v-2H7V8l-5 4 5 4v-3Z"></path>
                    <path
                        d="M20 3h-9c-1.11 0-2 .89-2 2v4h2V5h9v14h-9v-4H9v4c0 1.1.89 2 2 2h9c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2Z"></path>
                </g>
            </svg>
            <span>Logout</span>
        </a>

        <a class="flex items-center space-x-2 py-1 mt-4">
            <label class="relative inline-flex items-center mb-4 cursor-pointer">
                <input type="checkbox"
                       class="sr-only peer"
                       @click="
                       isDark = !isDark;
                       localStorage.setItem('mode', JSON.stringify(isDark ? 'dark' : 'light'))"
                       :value="isDark"
                       :checked="isDark">
                <div
                    class="w-11 h-6 mr-2 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-transparent dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#68D391]"></div>
                <span>Dark Theme</span>
            </label>
        </a>


    </div>
    <!-- /Menu -->

</aside>
<!-- /Left Sidebar -->
