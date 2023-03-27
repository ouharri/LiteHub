@extends('layout.book')

@section('title','ff')

@section('body')

    <div class="relative h-full transition-all duration-200 ease-in-out xl:ml-68">
        <div class="relative w-full mx-auto">
            <div
                class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 overflow-hidden break-words bg-white border-0 dark:bg-gray-600 dark:shadow-dark-xl shadow-3xl rounded-2xl bg-clip-border shadow-md">
                <div class="flex flex-wrap -mx-3 ">
                    <div class="flex-none w-auto max-w-full px-3">
                        <div
                            class="relative inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out text-base rounded-xl">
                            <img src="{{Auth::user()->avatar}}"
                                 alt="profile_image"
                                 class="h-20 w-20 shadow-2xl rounded-md"/>
                        </div>
                    </div>
                    <div class="flex-none w-auto max-w-full px-3 my-auto">
                        <div class="h-full">
                            <h5 class="mb-1 dark:text-white">{{implode(" ",[Auth::user()->first_name,Auth::user()->middle_name,Auth::user()->last_name])}}</h5>
                            <p class="mb-0 font-semibold leading-normal dark:text-white dark:opacity-60 text-sm">
                                {{ implode(", ", Auth::user()->roles->map(function ($value, $key) {
                                        return $value->role;
                                    })->toArray())
                                }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full p-6 mx-auto">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-gray-600 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                            <div class="flex items-center">
                                <box-icon name='edit-alt' class="h-5 w-5 main-color mr-2"></box-icon>
                                <p class="mb-0 dark:text-white/80">Edit Profile</p>
                            </div>
                        </div>
                        <form class="flex-auto p-6" method="post" action="{{ route('profile.modify') }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm pb-2">
                                User Information
                            </p>

                            <div class="flex flex-wrap -mx-3">

                                {{--user id--}}
                                <input type="hidden" name="id" value="{{Auth::user()->id}}"/>

                                {{--first name--}}

                                {{--user name--}}
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="username"
                                               class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">
                                            Username
                                        </label>
                                        <input type="text" required name="username" value="{{Auth::user()->username}}"
                                               class="focus:shadow-primary-outline dark:bg-gray-600 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                    </div>
                                </div>

                                {{--email--}}
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="email"
                                               class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">
                                            Email address
                                        </label>
                                        <input type="email" name="email" value="{{Auth::user()->email}}"
                                               class="focus:shadow-primary-outline dark:bg-gray-600 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                    </div>
                                </div>

                                {{--first name--}}
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="first name"
                                               class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">
                                            First name
                                        </label>
                                        <input type="text" name="first_name" value="{{Auth::user()->first_name}}"
                                               class="focus:shadow-primary-outline dark:bg-gray-600 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                    </div>
                                </div>

                                {{--last name--}}
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="last name"
                                               class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">
                                            Last name</label>
                                        <input type="text" name="last_name" value="{{Auth::user()->last_name}}"
                                               class="focus:shadow-primary-outline dark:bg-gray-600 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                    </div>
                                </div>

                                {{--middle name--}}
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="last name"
                                               class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">
                                            middle_name</label>
                                        <input type="text" name="middel_name" value="{{Auth::user()->middel_name}}"
                                               class="focus:shadow-primary-outline dark:bg-gray-600 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                    </div>
                                </div>

                                {{--avatar--}}
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="last name"
                                               class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">
                                            Profile image
                                        </label>
                                        <label
                                            class="flex items-center justify-center main-color h-full px-4 pt-1 rounded-lg tracking-wide uppercase border cursor-pointer">
                                            <svg class="w-8 h-8 mr-1 opacity-25" fill="currentColor"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path
                                                    d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z"/>
                                            </svg>
                                            <span class="=leading-normal ml-1 opacity-25">upload</span>
                                            <input type='file' name="avatar" class="hidden"/>
                                        </label>
                                    </div>
                                </div>

                                {{--  Gender--}}
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="last name"
                                               class="inline-block mb-2 font-bold text-xs text-slate-700 dark:text-white/80">
                                            Gender
                                        </label>
                                        <select name="gender"
                                                class="focus:shadow-primary-outline dark:bg-gray-600 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                        >
                                            @if(Auth::user()->gender === 'male')
                                                <option value="male" selected>Male</option>
                                                <option value="female">Female</option>
                                            @elseif(Auth::user()->gender === 'female')
                                                <option value="male">Male</option>
                                                <option value="female" selected>Female</option>
                                            @else
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                {{-- Date of Birth--}}
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="first name"
                                               class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">
                                            Date of Birth
                                        </label>
                                        <input type="date" name="date_of_birth" value="{{Auth::user()->first_name}}"
                                               class="focus:shadow-primary-outline dark:bg-gray-600 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                    </div>
                                </div>

                            </div>

                            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent "/>


                            <p class="leading-normal uppercase dark:text-white dark:opacity-60 mb-3 text-sm">
                                About me
                            </p>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                    <div class="mb-4">
                                        <label for="about me"
                                               class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">About
                                            me</label>
                                        <input type="text" name="about me"
                                               value="{{Auth::user()->about_me}}"
                                               class="focus:shadow-primary-outline dark:bg-gray-600 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"/>
                                    </div>
                                </div>
                            </div>


                            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent "/>

                            <div class="flex items-end gap-4">
                                <x-primary-button class="bg-primary">{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'password-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>

                        </form>


                        <div class="flex-auto p-6">

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                    @include('profile.partials.update-password-form')
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3 my-4">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                    @include('profile.partials.delete-user-form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-full px-3 mt-6 shrink-0 md:w-4/12 md:flex-0 md:mt-0">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-gray-600 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <img class="w-full rounded-t-2xl"
                             src="{{Auth::user()->avatar}}"
                             alt="profile cover image">
                        <div class="flex flex-wrap justify-center -mx-3">
                            <div class="w-4/12 max-w-full px-3 flex-0 ">
                                <div class="mb-6 -mt-6 lg:mb-0 lg:-mt-16">

                                </div>
                            </div>
                        </div>

                        <div class="flex-auto p-6 pt-3">
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-1-0">
                                    <div class="flex justify-center flex-wrap">
                                        <div class="grid text-center">
                                            <span class="font-bold dark:text-white text-lg">22</span>
                                            <span
                                                class="leading-normal dark:text-white text-sm opacity-80">Friends</span>
                                        </div>
                                        <div class="grid mx-6 text-center">
                                            <span class="font-bold dark:text-white text-lg">10</span>
                                            <span
                                                class="leading-normal dark:text-white text-sm opacity-80">Books</span>
                                        </div>
                                        <div class="grid text-center">
                                            <span class="font-bold dark:text-white text-lg">89</span>
                                            <span
                                                class="leading-normal dark:text-white text-sm opacity-80">Comments</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 text-center">
                                <h5 class="dark:text-white ">
                                    {{implode(" ",[Auth::user()->first_name,Auth::user()->middle_name,Auth::user()->last_name])}}
                                    <span class="font-light">, 35</span>
                                </h5>
                                <div
                                    class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                                    <i class="mr-2 dark:text-white ni ni-pin-3"></i>
                                    Bucharest, Romania
                                </div>
                                <div
                                    class="mt-6 mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                                    <i class="mr-2 dark:text-white ni ni-briefcase-24"></i>
                                    Solution Manager - Youcode Safi - Co-Founder
                                </div>
                                <div class="dark:text-white/80">
                                    <i class="mr-2 dark:text-white ni ni-hat-3"></i>
                                    University of Computer Science
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

