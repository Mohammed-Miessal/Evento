<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    @vite('resources/css/app.css')
</head>

<body>

    @include('components.navhome')

    <!-- hero section -->
    <section class="relative py-15 lg:py-20  bg-white">
        <div
            class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-10 lg:gap-12">
            <div class="absolute w-full lg:w-1/2 inset-y-0 lg:right-0  ">
                <span
                    class="absolute -left-6 md:left-4 top-24 lg:top-28 w-24 h-24 rotate-90 skew-x-12 rounded-3xl bg-gradient-to-tr from-indigo-600 from-20% via-blue-600 via-30% to-pink-600 blur-xl opacity-60 lg:opacity-95 block "></span>
                <span class="absolute right-4 bottom-12 w-24 h-24 rounded-3xl bg-blue-600 blur-xl opacity-80"></span>
            </div>
            <span
                class="w-4/12 lg:w-2/12 aspect-square bg-gradient-to-tr from-indigo-600 from-20% via-blue-600 via-30% to-pink-600 absolute -top-5 lg:left-0 rounded-full skew-y-12 blur-2xl opacity-40 skew-x-12 rotate-90"></span>


        </div>
    </section>

    <div class="flex flex-wrap justify-center mt-10">
        <h1 class="text-2xl leading-tight sm:text-4xl md:text-5xl xl:text-6xl  font-bold text-gray-900">
            All Events
        </h1>
    </div>

    <!-- component -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">

                @foreach ($events as $event)
                    <div class="p-4 md:w-1/3">
                        <div
                            class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100"
                                src="{{ asset('storage/' . $event->image_path) }}" alt="blog">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                    {{ $event->categorie->name }}
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-600 mb-3">{{ $event->title }}</h1>
                                <p class="leading-relaxed mb-3">{{ $event->description }}</p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="{{ route('eventDetails', $event->id) }}">

                                        <button
                                            class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Learn
                                            more</button>
                                    </a>


                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>



    @include('components.footer')
    <script src="{{ asset('assets/js/home.js') }}"></script>
</body>

</html>
