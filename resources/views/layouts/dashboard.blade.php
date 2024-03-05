<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wikipedia</title>
    <meta name="keywords" content="HTML, CSS, Youcode, tailwindCSS, Wikipedia">
    <meta name="description" content="Wikipedia ">
    @vite('resources/css/app.css')


    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

</head>

<body class="font-poppins text-gray-600 dark:bg-gray-900">
    <div class="flex w-screen h-screen text-gray-700">

        <!-- Aside -->

        @include('components.aside')

        <!-- / Aside -->


        <div class="flex flex-col flex-grow">

            <!-- Navbar -->

            @include('components.navbar')

            <!-- Navbar -->


            <!-- Main -->

            <div class="flex-grow p-6 overflow-auto bg-gray-200 dark:bg-gray-600">
                <div class="grid grid-cols-3 gap-6">
                    <div class="h-full col-span-3 bg-white border border-gray-300">
                        <!-- Stats -->

                        <main class="mt-5 p-12 ml-0 smXl:ml-64 dark:border-gray-700">

                            @yield('content')

                        </main>

                        <!-- / Stats -->
                    </div>
                </div>
            </div>

            <!-- / Main -->

        </div>
        <!-- Component End  -->

    </div>

    <!-- / For dark mode -->
    <script src="{{ asset('assets/js/darkmode.js') }}"></script>
    <!-- / For navbar mobile -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
