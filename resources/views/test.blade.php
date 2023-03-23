@extends('layout.LiteHub')

@section('title','ff')

@section('body')
    <header class=" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 ">
                <span class="mr-6 cursor-pointer" id="menu-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-700 dark:text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/>
                      </svg>
                </span>
        <a href="#" id="Logo" class="flex items-center">
            <svg class="h-8 w-8 fill-red-600 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z"></path>
            </svg>
            <div class="tracking-wide dark:text-white flex-1">MMovie<span class="text-red-600">.</span></div>
        </a>
        <div class="relative items-center content-center flex ml-2">
                    <span class="text-gray-400 absolute left-4 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
            <label>
                <input type="text"
                       class="text-xs ring-1 bg-transparent ring-gray-200 dark:ring-zinc-600 focus:ring-red-300 pl-10 pr-5 text-gray-600 dark:text-white  py-3 rounded-full w-full outline-none focus:ring-1"
                       placeholder="Search ...">
            </label>
        </div>
    </header>


    <section>
        <nav class="flex space-x-6 text-gray-400 font-medium">
            <a href="#" class="hover:text-gray-700 dark:hover:text-white">TV Series</a>
            <a href="#" class="text-gray-700 dark:text-white font-semibold">Movies</a>
            <a href="#" class="hover:text-gray-700 dark:hover:text-white ">Animes</a>
        </nav>

        <div
            class="flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply rounded-3xl h-80 overflow-hidden bg-cover bg-center px-7 pt-4 pb-6 text-white"
            style="background-image: url('images/inception.jpg');">
            <!-- <img class="object-cover w-full h-full" src="images/inception.jpg" alt=""> -->
            <div class="flex -space-x-1 items-center ">
                <img class="rounded-full w-7 h-7 shadow-lg border border-white"
                     src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8csk" alt="" srcset="">
                <img class="rounded-full w-7 h-7 shadow-lg border border-white"
                     src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsrj8cck"
                     alt="" srcset="">
                <img class="rounded-full w-7 h-7 shadow-lg border border-white"
                     src="https://api.lorem.space/image/face?w=32&amp;h=32&amp;hash=zsfj8cck"
                     alt="" srcset="">
                <span class="pl-4 text-xs drop-shadow-lg">+8 friends are watching</span>
            </div>

            <div class="bg-gradient-to-r from-black/30 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2">
                <span class="uppercase text-3xl font-semibold drop-shadow-lg ">Inception</span>
                <div class="text-xs text-gray-200 mt-2">
                    <a href="#" class="">Action</a>,
                    <a href="#" class="">Adventure</a>,
                    <a href="#" class="">Sci-Fi</a>
                </div>
                <div class="mt-4 flex space-x-3 items-center">
                    <a href="#"
                       class="px-5 py-2.5 bg-red-600 hover:bg-red-700 rounded-lg text-xs inline-block">Watch</a>
                    <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg hover:bg-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-9">
        <div class="flex items-center justify-between">
            <span class="font-semibold text-gray-700 text-base dark:text-white">Top Stars</span>
            <div class="flex items-center space-x-2 fill-gray-500">
                <svg
                    class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
                </svg>
                <svg
                    class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
                </svg>
            </div>
        </div>

        <div class="mt-4 grid grid-cols-2  sm:grid-cols-4 md:grid-cols-5 gap-x-5 gap-y-5">
            <div class="relative book cursor-pointer rounded-xl overflow-hidden">
                <img
                    src="https://www.noor-book.com/publice/covers_cache_webp/1/8/2/a/db8d44fd4082a441dc499d34c429bc2e.jpg.webp"
                    class="object-cover h-full w-full -z-10" alt="">
                <div
                    class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 flex flex-col justify-between">

                    <div
                        class="flex items-center opacity-75 z-10 py-3 w-full justify-center  bg-gradient-to-b from-gray-900 to-transparent">
                        <svg aria-hidden="true" class="second-color w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg"><title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="second-color w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg"><title>Second star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="second-color w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg"><title>Third star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="second-color w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="text-gray-400 w-6 h-6 dark:text-gray-500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>


                    <div class="self-center flex p-3 flex-col items-center space-y-2">
                        <span class="capitalize text-white font-medium drop-shadow-md">Leonardo DiCaprio</span>
                        <span class="main-color text-xs">+12 Movies</span>
                    </div>
                </div>
            </div>
            <div class="relative book cursor-pointer rounded-xl overflow-hidden">
                <img
                    src="https://www.noor-book.com/publice/covers_cache_webp/1/8/2/a/db8d44fd4082a441dc499d34c429bc2e.jpg.webp"
                    class="object-cover h-full w-full -z-10" alt="">
                <div
                    class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 flex flex-col justify-between">

                    <div
                        class="flex items-center opacity-75 z-10 py-3 w-full justify-center  bg-gradient-to-b from-gray-900 to-transparent">
                        <svg aria-hidden="true" class="second-color w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg"><title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="second-color w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg"><title>Second star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="second-color w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg"><title>Third star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="second-color w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg aria-hidden="true" class="text-gray-400 w-6 h-6 dark:text-gray-500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>


                    <div class="self-center flex p-3 flex-col items-center space-y-2">
                        <span class="capitalize text-white font-medium drop-shadow-md">Leonardo DiCaprio</span>
                        <span class="main-color text-xs">+12 Movies</span>
                    </div>
                </div>
            </div>
            <div class="relative rounded-xl overflow-hidden ">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/WP_-_random_-5_%2814094372762%29.jpg/319px-WP_-_random_-5_%2814094372762%29.jpg"
                    class="object-cover w-full h-full -z-10" alt="">
                <div
                    class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                    <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>

                    <div class="self-center flex flex-col items-center space-y-2">
                        <span class="capitalize text-white font-medium drop-shadow-md">Joseph Gordon-Levitt</span>
                        <span class="text-gray-300 text-xs">+24 Movies</span>

                    </div>
                </div>
            </div>
            <div class="relative rounded-xl overflow-hidden ">
                <img
                    src="https://img.zeit.de/kultur/film/2020-12/elliot-page-tranmann/wide__450x253__mobile__scale_1"
                    class="object-cover h-full w-full -z-10" alt="">
                <div
                    class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                    <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>

                    <div class="self-center flex flex-col items-center space-y-2">
                        <span class="capitalize text-white font-medium drop-shadow-md">Elliot Page</span>
                        <span class="text-gray-300 text-xs">+10 Movies</span>

                    </div>
                </div>
            </div>
            <div class="relative rounded-xl overflow-hidden ">
                <img src="https://de.web.img3.acsta.net/c_310_420/pictures/16/01/19/11/06/274206.jpg"
                     class="object-cover h-full w-full -z-10" alt="">
                <div
                    class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-between">

                    <a href="#" class="p-2.5 bg-gray-800/80 rounded-lg text-white self-end hover:bg-red-600/80">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>

                    <div class="self-center flex flex-col items-center space-y-2">
                        <span class="capitalize text-white font-medium drop-shadow-md">Tom Hardy</span>
                        <span class="text-gray-300 text-xs">+27 Movies</span>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-9">
        <div class="flex items-center justify-between">
            <span class="font-semibold text-gray-700 text-base dark:text-white">Similar Movies</span>
            <div class="flex items-center space-x-2 fill-gray-500">
                <svg
                    class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M13.293 6.293L7.58 12l5.7 5.7 1.41-1.42 -4.3-4.3 4.29-4.293Z"></path>
                </svg>
                <svg
                    class="h-7 w-7 rounded-full border p-1 hover:border-red-600 hover:fill-red-600 dark:fill-white dark:hover:fill-red-600"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M10.7 17.707l5.7-5.71 -5.71-5.707L9.27 7.7l4.29 4.293 -4.3 4.29Z"></path>
                </svg>
            </div>
        </div>

        <div class="mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 ">
            <div class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                <img src="https://upload.wikimedia.org/wikipedia/en/1/14/Tenet_movie_poster.jpg"
                     class=" h-4/5 object-cover w-full  " alt="">
                <div
                    class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                    <span class="capitalize  font-medium truncate">Tenet</span>
                    <div class="flex space-x-2 items-center text-xs">
                        <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                             viewBox="0 0 64 32" version="1.1">
                            <g fill="#F5C518">
                                <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                            </g>
                            <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                                <polygon points="0 18 5 18 5 0 0 0"></polygon>
                                <path
                                    d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z"></path>
                                <path
                                    d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z"></path>
                                <path
                                    d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z"></path>
                            </g>
                        </svg>
                        <span>7.4</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                <img src="https://upload.wikimedia.org/wikipedia/en/f/fc/Fight_Club_poster.jpg"
                     class=" h-4/5 object-cover w-full  " alt="">
                <div
                    class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                    <span class="capitalize  font-medium truncate">Fight Club</span>
                    <div class="flex space-x-2 items-center text-xs">
                        <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                             viewBox="0 0 64 32" version="1.1">
                            <g fill="#F5C518">
                                <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                            </g>
                            <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                                <polygon points="0 18 5 18 5 0 0 0"></polygon>
                                <path
                                    d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z"></path>
                                <path
                                    d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z"></path>
                                <path
                                    d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z"></path>
                            </g>
                        </svg>
                        <span>8.8</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                <img src="https://upload.wikimedia.org/wikipedia/en/8/8e/Dune_%282021_film%29.jpg"
                     class=" h-4/5 object-cover w-full  " alt="">
                <div
                    class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                    <span class="capitalize  font-medium truncate">Dune</span>
                    <div class="flex space-x-2 items-center text-xs">
                        <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                             viewBox="0 0 64 32" version="1.1">
                            <g fill="#F5C518">
                                <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                            </g>
                            <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                                <polygon points="0 18 5 18 5 0 0 0"></polygon>
                                <path
                                    d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z"></path>
                                <path
                                    d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z"></path>
                                <path
                                    d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z"></path>
                            </g>
                        </svg>
                        <span>8.1</span>
                    </div>
                </div>
            </div>


        </div>
            <div id="pspdfkit" style="width: 100%; height: 100vh;"></div>
    </section>
    <script src="{{asset('assets/pspdfkit.js')}}"></script>
    <script defer>
        PSPDFKit.load({
            container: "#pspdfkit",
            document: "https://res.cloudinary.com/dggvib6ib/image/upload/v1679536032/Algorithmique_aliw5g.pdf",
            xhrHeaders: { 'Access-Control-Allow-Origin': '*' },
            xhrFields: { withCredentials: true },
            requestOptions: { mode: 'no-cors' }
        })
            .then(function (instance) {
                console.log("PSPDFKit loaded", instance);
            })
            .catch(function (error) {
                console.error(error.message);
            });
    </script>

@endsection

