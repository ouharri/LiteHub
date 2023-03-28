@extends('layout.pdf')

@section('title',$book->title)

@section('head')
    <style>
        .rating {
            display: flex;
            position: relative;
            height: 50px;
            line-height: 50px;
            font-size: 50px;
        }

        .rating label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            cursor: pointer;
        }

        .rating label:last-child {
            position: static;
        }

        .rating label:nth-child(1) {
            z-index: 5;
        }

        .rating label:nth-child(2) {
            z-index: 4;
        }

        .rating label:nth-child(3) {
            z-index: 3;
        }

        .rating label:nth-child(4) {
            z-index: 2;
        }

        .rating label:nth-child(5) {
            z-index: 1;
        }

        .rating label input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .rating label .icon {
            float: left;
            width: 8px;
            height: 8px;
            margin-right: 30px;
            color: transparent;
        }

        .rating label:last-child .icon {
            color: #FFDB58;
        }

        .rating:not(:hover) label input:checked ~ .icon {
            color: #68D391;
        }

        .rating:hover label:hover input ~ .icon {
            color: #68D391;
        }

        .rating label input:focus:not(:checked) ~ .icon:last-child {
            color: #FFDB58;
            text-shadow: 0 0 5px #68D391;
        }

        .text-desc, [class*="reaction-"], .field-reactions, .field-reactions:checked:focus ~ .text-desc {
            clip: rect(1px, 1px, 1px, 1px);
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 0;
        }

        .field-reactions:focus ~ .text-desc, .box:hover [class*="reaction-"], .field-reactions:checked ~ [class*="reaction-"] {
            clip: auto;
            overflow: visible;
            opacity: 1;
        }

        .main-title {
            background: #3a5795;
            padding: 10px;
            color: #fff;
            text-align: center;
            font-size: 16px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .text-desc {
            font-weight: normal;
            text-align: center;
            transform: translateY(-50px);
            white-space: nowrap;
            font-size: 13px;
            width: 100%;
        }

        [class*="reaction-"] {
            border: none;
            background-image: url(http://deividmarques.github.io/facebook-reactions-css/assets/images/facebook-reactions.png);
            background-color: transparent;
            display: block;
            cursor: pointer;
            height: 48px;
            position: absolute;
            width: 48px;
            z-index: 11;
            top: -28;
            transform-origin: 50% 100%;
            transform: scale(0.1);
            transition: all .3s;
            outline: none;
            will-change: transform;
            opacity: 0;
        }

        .box {
            width: 300px;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9;
            visibility: hidden;
        }

        .field-reactions:focus ~ .label-reactions {
            border-color: rgba(88, 144, 255, 0.3);
        }

        .field-reactions:checked:focus ~ .label-reactions {
            border-color: transparent;
        }

        .label-reactions {
            /*background: url(https://cdn4.iconfinder.com/data/icons/facebook-likes/100/1.png) no-repeat 0 0;*/
            border: 2px dotted transparent;
            display: block;
            height: 100px;
            margin: 0 auto;
            width: 100px;
            color: transparent;
            cursor: pointer;
        }

        .toolbox {
            background: #fff;
            height: 52px;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.08), 0 2px 2px rgba(0, 0, 0, 0.15);
            width: 300px;
            border-radius: 40px;
            top: -30px;
            left: 0;
            position: absolute;
            visibility: hidden;
            opacity: 0;
            transition: opacity .15s;
        }

        .legend-reaction {
            background: rgba(0, 0, 0, 0.75);
            border-radius: 10px;
            box-sizing: border-box;
            color: #fff;
            display: inline-block;
            font-size: 11px;
            text-overflow: ellipsis;
            font-weight: bold;
            line-height: 20px;
            max-width: 100%;
            opacity: 0;
            overflow: hidden;
            padding: 0 6px;
            transition: opacity 50ms ease;
            left: 50%;
            position: absolute;
            text-align: center;
            top: -28px;
            transform: translateX(-50%);
        }

        .box:hover [class*="reaction-"] {
            transform: scale(0.8) translateY(-40px);
        }

        .box:hover [class*="reaction-"]:hover, .box:hover [class*="reaction-"]:focus {
            transition: all .2s ease-in;
            transform: scale(1) translateY(-35px);
        }

        .box:hover [class*="reaction-"]:hover .legend-reaction, .box:hover [class*="reaction-"]:focus .legend-reaction {
            opacity: 1;
        }

        .box:hover .toolbox {
            opacity: 1;
        }

        .box:hover .toolbox {
            visibility: visible;
        }

        .box:hover .reaction-love {
            transition-delay: .06s;
        }

        .box:hover .reaction-haha {
            transition-delay: .09s;
        }

        .box:hover .reaction-wow {
            transition-delay: .12s;
        }

        .box:hover .reaction-sad {
            transition-delay: .15s;
        }

        .box:hover .reaction-angry {
            transition-delay: .18s;
        }

        .field-reactions:checked ~ [class*="reaction-"] {
            transform: scale(0.8) translateY(-40px);
        }

        .field-reactions:checked ~ [class*="reaction-"]:hover, .field-reactions:checked ~ [class*="reaction-"]:focus {
            transition: all .2s ease-in;
            transform: scale(1) translateY(-35px);
        }

        .field-reactions:checked ~ [class*="reaction-"]:hover .legend-reaction, .field-reactions:checked ~ [class*="reaction-"]:focus .legend-reaction {
            opacity: 1;
        }

        .field-reactions:checked ~ .toolbox {
            opacity: 1;
        }

        .field-reactions:checked ~ .toolbox,
        .field-reactions:checked ~ .overlay {
            visibility: visible;
        }

        .field-reactions:checked ~ .reaction-love {
            transition-delay: .03s;
        }

        .field-reactions:checked ~ .reaction-haha {
            transition-delay: .09s;
        }

        .field-reactions:checked ~ .reaction-wow {
            transition-delay: .12s;
        }

        .field-reactions:checked ~ .reaction-sad {
            transition-delay: .15s;
        }

        .field-reactions:checked ~ .reaction-angry {
            transition-delay: .18s;
        }

        .reaction-like {
            left: 0;
            background-position: 0 -144px;
        }

        .reaction-love {
            background-position: -48px 0;
            left: 50px;
        }

        .reaction-haha {
            background-position: -96px 0;
            left: 100px;
        }

        .reaction-wow {
            background-position: -144px 0;
            left: 150px;
        }

        .reaction-sad {
            background-position: -192px 0;
            left: 200px;
        }

        .reaction-angry {
            background-position: -240px 0;
            left: 250px;
        }

    </style>
    <script defer>

        $(':radio').change(function () {
            console.log('New star rating: ' + this.value);
        });

        function react(reaction) {
            switch (reaction) {
                case 'like':
                    return '👍🏼';
                case 'love':
                    return '❤️';
                case 'haha':
                    return '😂';
                case 'wow':
                    return '😮';
                case 'sad':
                    return '😢';
                case 'angry':
                    return '😡';
            }
        }

        function reactBook(reaction) {

            $('#reaction')[0].innerHTML = react(reaction);

        }

    </script>
@endsection

@section('script')
    <script>
        document.getElementsByClassName('commentForm')[0].addEventListener('submit', function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            let url = this.getAttribute('action');
            let method = this.getAttribute('method');
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            let config = {
                method: method,
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(Object.fromEntries(formData))
            };
            fetch(url, config)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    if (data.status === 200) {
                        document.getElementById('commentForm').reset();
                        document.getElementById('comment').value = '';
                        document.getElementById('comment').focus();
                        document.getElementById('comment').blur();
                    }
                });
        })
    </script>
@endsection


@section('bookDetails')
    <div class="w-full px-3 mt-6 shrink-0 md:mt-0 mt-[70px]" style="margin-top: 90px">
        <div
            class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-gray-600 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <img class="w-full rounded-t-2xl"
                 src="{{ $book->cover }}"
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
                                    class="leading-normal dark:text-white text-sm opacity-80">react</span>
                            </div>
                            <div class="grid mx-6 text-center">
                                <span class="font-bold dark:text-white text-lg">10</span>
                                <span
                                    class="leading-normal dark:text-white text-sm opacity-80">comment</span>
                            </div>
                            <div class="grid text-center">
                                <span class="font-bold dark:text-white text-lg">89</span>
                                <span
                                    class="leading-normal dark:text-white text-sm opacity-80">read</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <h5 class="dark:text-white ">
                        {{implode(" ",[$book->Author->first_name,$book->Author->middle_name,$book->Author->last_name])}}
                        <span class="font-light">, {{ $book->pages }} P</span>
                    </h5>
                    <div
                        class="mb-2 font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                        <i class="mr-2 dark:text-white ni ni-pin-3"></i>
                        {{ $book->title }}
                    </div>
                    <div
                        class="mt-3 mb-2 flex font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                        <box-icon name='registered' class="main-color"></box-icon>
                        Edition: {{ $book->edition }}
                    </div>
                    <div class="dark:text-white/80">
                        Publisher: {{ $book->publisher->name }}
                    </div>
                    <div>
                        Publisher Date: {{ $book->publisher_date }}
                    </div>
                    <div
                        class="mt-3 mb-2 flex font-semibold leading-relaxed text-base dark:text-white/80 text-slate-700">
                        <box-icon name='blanket' class="main-color"></box-icon>
                        Language: {{ $book->language }}
                    </div>
                </div>
                <form class="rating flex flex-wrap mt-6 text-center">
                    <label>
                        <input type="radio" name="stars" value="1"/>
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="stars" value="2"/>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="stars" value="3"/>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="stars" value="4"/>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                    <label>
                        <input type="radio" name="stars" value="5"/>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                        <span class="icon">★</span>
                    </label>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('body')
    <section class="overflow-hidden relative" style="height: 95vh">
        <div id="pspdfkit" style="height: 100%"></div>
        <div class="absolute bottom-[-100px] left-3">
            <div>
                <div class="box">
                    <div id="reaction">
                        <box-icon name='like'></box-icon>
                    </div>
                    <input type="checkbox" id="like" class="field-reactions">
                    <h3 class="text-desc">Press space and after tab key to navigation</h3>
                    <label for="like" class="label-reactions">Like</label>
                    <div class="toolbox"></div>
                    <label class="overlay" for="like"></label>
                    <button class="reaction-like" onclick="reactBook('like')"><span class="legend-reaction">Like</span>
                    </button>
                    <button class="reaction-love" onclick="reactBook('love')"><span class="legend-reaction">Love</span>
                    </button>
                    <button class="reaction-haha" onclick="reactBook('haha')"><span class="legend-reaction">Haha</span>
                    </button>
                    <button class="reaction-wow" onclick="reactBook('wow')"><span class="legend-reaction">Wow</span>
                    </button>
                    <button class="reaction-sad" onclick="reactBook('sad')"><span class="legend-reaction">Sad</span>
                    </button>
                    <button class="reaction-angry" onclick="reactBook('Angry')"><span
                            class="legend-reaction">Angry</span></button>
                </div>
            </div>
            <div>

            </div>
        </div>
    </section>

    <section class="py-8 lg:py-16">
        <div class="max-w-2xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion
                    ({{ $comments->count() }})</h2>
            </div>
            <form class="mb-6 commentForm" method="post" action="{{route('comments.store')}}">
                @csrf
                @method('POST')
                <input type="hidden" name="post_id" value="{{$book->id}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div
                    class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <label for="comment" class="sr-only">Your comment</label>
                    <textarea id="comment" rows="4" name="comment"
                              class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                              placeholder="Write a comment..." required></textarea>
                </div>
                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Post comment
                </button>
            </form>

            @foreach($comments as $comment)
                <article class="p-6 mb-6 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-gray-900">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                    class="mr-2 w-6 h-6 rounded-full"
                                    src="{{ $comment->user->avatar }}"
                                    alt="Jese Leos">{{implode(" ",[$comment->user->first_name,$comment->user->middle_name,$comment->user->last_name])}}
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                <time pubdate datetime="{{ $comment->created_at->format('Y-m-d') }}"
                                      title="February 12th, 2022">Feb. 12, 2022
                                </time>
                            </p>
                        </div>
                        @if(Auth::user()->id === $comment->user->id)
                            <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                                <span class="sr-only">Comment settings</span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownComment2"
                                 class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#"
                                           class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </footer>
                    <p class="text-gray-500 dark:text-gray-400">{{$comment->comment}}</p>
                    <div class="flex items-center mt-4 space-x-4">
                        <button type="button"
                                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            Reply
                        </button>
                    </div>
                </article>
            @endforeach

        </div>
    </section>

    <script src="{{asset('assets/pspdfkit.js')}}"></script>
    <script defer>
        PSPDFKit.load({
            container: "#pspdfkit",
            document: "{{ $book->pdf }}",
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

