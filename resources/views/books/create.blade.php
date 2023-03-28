@extends('layout.book')

@section('title','ff')

@section('body')
    <section class="mt-9 overflow-hidden">
        <div class="flex items-center justify-between overflow-hidden">
            <span class="font-semibold text-gray-700 text-base dark:text-white ">Books :</span>
            <div class="flex items-center space-x-2 fill-gray-500">
                <x-primary-button x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
                    {{ __('Add new Book') }}
                </x-primary-button>
            </div>
        </div>

        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable
                 style="z-index: 1000">
            <form method="post" action="{{ route('books.store') }}" class="p-6" style="z-index: 1000"
                  enctype="multipart/form-data">
                @csrf
                @method('post')

                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Are you sure you want to delete your account?') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>

                {{-- title --}}
                <div class="mt-6">
                    <x-input-label for="title" value="{{ __('title') }}" class="sr-only"/>

                    <x-text-input
                        id="title"
                        name="title"
                        type="text"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('title') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('title')" class="mt-2"/>
                </div>

                {{-- cover --}}
                <div class="mt-6">
                    <x-input-label for="cover" value="{{ __('cover') }}" class="sr-only"/>

                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="cover"
                        name="cover"
                        type="file"
                        placeholder="{{ __('cover') }}"
                    >


                    <x-input-error :messages="$errors->userDeletion->get('cover')" class="mt-2"/>
                </div>

                {{-- pages --}}
                <div class="mt-6">
                    <x-input-label for="pages" value="{{ __('pages') }}" class="sr-only"/>

                    <x-text-input
                        id="pages"
                        name="pages"
                        type="number"
                        min="1"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('pages') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('pages')" class="mt-2"/>
                </div>

                {{-- edition --}}
                <div class="mt-6">
                    <x-input-label for="edition" value="{{ __('edition') }}" class="sr-only"/>

                    <x-text-input
                        id="edition"
                        name="edition"
                        type="text"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('edition') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('edition')" class="mt-2"/>
                </div>

                {{--language --}}
                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('language') }}" class="sr-only"/>

                    <x-text-input
                        id="language"
                        name="language"
                        type="text"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('language') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('language')" class="mt-2"/>
                </div>

                {{-- description --}}
                <div class="mt-6">
                    <x-input-label for="description" value="{{ __('description') }}" class="sr-only"/>

                    <x-text-input
                        id="description"
                        name="description"
                        type="text"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('description') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('description')" class="mt-2"/>
                </div>

                {{-- publisher_date --}}
                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('publisher date') }}" class="sr-only"/>

                    <x-text-input
                        id="publisher_date"
                        name="publisher_date"
                        type="date"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('publisher date') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('publisher_date')" class="mt-2"/>
                </div>

                {{-- isbn --}}
                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('isbn') }}" class="sr-only"/>

                    <x-text-input
                        id="isbn"
                        name="isbn"
                        type="text"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('isbn') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('isbn')" class="mt-2"/>
                </div>

                {{-- author_id --}}
                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('author') }}" class="sr-only"/>

                    <x-text-input
                        id="author_id"
                        name="author_id"
                        type="text"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('author') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('author_id')" class="mt-2"/>
                </div>

                {{-- publisher_id--}}
                <div class="mt-6">
                    <x-input-label for="publisher_id" value="{{ __('publisher') }}" class="sr-only"/>

                    <x-text-input
                        id="publisher_id"
                        name="publisher_id"
                        type="text"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('publisher') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('publisher')" class="mt-2"/>
                </div>

                {{-- category_id --}}
                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('category') }}" class="sr-only"/>

                    <x-text-input
                        id="category_id"
                        name="category_id"
                        type="text"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('category') }}"
                    />

                    <x-input-error :messages="$errors->userDeletion->get('category_id')" class="mt-2"/>
                </div>

                {{-- pdf --}}
                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('pdf') }}" class="sr-only"/>

                    <div class="flex items-center justify-center w-full">
                        <label for="pdf"
                               class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span>
                                    or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">pdf, text, jdhd or GIhF (MAX.
                                    800x400px)</p>
                            </div>
                            <input type="file" id="pdf" accept="pdf"
                                   name="pdf" class="hidden"/>
                        </label>
                    </div>

                    <x-input-error :messages="$errors->userDeletion->get('pdf')" class="mt-2"/>
                </div>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-primary-button class="ml-3">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>
            </form>
        </x-modal>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4 overflow-auto" style="width: 80vw !important;">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        cover
                    </th>
                    <th scope="col" class="px-6 py-3">
                        title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        pages
                    </th>
                    <th scope="col" class="px-6 py-3">
                        edition
                    </th>
                    <th scope="col" class="px-6 py-3">
                        language
                    </th>
                    <th scope="col" class="px-6 py-3">
                        description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        publisher date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        isbn
                    </th>
                    <th scope="col" class="px-6 py-3">
                        author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        publisher
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
                </thead>
                <tbody>

                @foreach($books as $book)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{$book->cover}}" class="h-7 w-7">
                        </th>
                        <td class="px-6 py-4">
                            {{ $book->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->categorie->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->pages}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->edition}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->language}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->description}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->publisher_date}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->isbn}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->author->first_name .' ' . $book->author->last_name}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->publisher->name}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ $book->pdf}}"
                               class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">pdf</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href=""
                               class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">archive</a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="" target="_blank"
                               class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </section>

    <script src="{{asset('assets/pspdfkit.js')}}"></script>
    <script defer>
        PSPDFKit.load({
            container: "#pspdfkit",
            document: "https://res.cloudinary.com/dggvib6ib/image/upload/v1679536032/Algorithmique_aliw5g.pdf",
            xhrHeaders: {'Access-Control-Allow-Origin': '*'},
            xhrFields: {withCredentials: true},
            requestOptions: {mode: 'no-cors'}
        })
            .then(function (instance) {
                console.log("PSPDFKit loaded", instance);
            })
            .catch(function (error) {
                console.error(error.message);
            });
    </script>

@endsection
