<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="dark:bg-gray-900 text-gray-600">

    <div class="min-h-screen  text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <div class="mt-12 flex flex-col items-center">
                    <div class="w-full flex-1 mt-8">
                        <div class="flex flex-col items-center"></div>

                        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                                <div class="flex items-center justify-center">
                                    <img class="h-10 w-auto" src="{{ asset('assets/images/Logo.png') }}"
                                        alt="Wiki image" />
                                    <span class="ml-2">

                                    </span>
                                </div>
                                <h2
                                    class="font-Pacifico mt-10 text-center text-2xl  leading-9 tracking-tight text-gray-900">
                                    Sign up
                                </h2>
                            </div>

                            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

                                <form class="space-y-6" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div>
                                        <label for="name"
                                            class="block text-sm font-medium leading-6 text-gray-900">Full name</label>
                                        <div class="mt-2">
                                            <input id="name" name="name" type="text" autocomplete="name"
                                                class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                            <small class="text-red-600"></small>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900">Email
                                            address</label>
                                        <div class="mt-2">
                                            <input id="email" name="email" type="email" autocomplete="email"
                                                class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                            <small class="text-red-600"></small>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex items-center justify-between">
                                            <label for="password"
                                                class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                        </div>
                                        <div class="mt-2">
                                            <input id="password" name="password" type="password"
                                                autocomplete="current-password"
                                                class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                            <small class="text-red-600"></small>
                                        </div>
                                    </div>


                                    <div class="flex flex-wrap">
                                        @foreach ($roles as $role)
                                            @if ($role->id != 2)
                                                <div class="flex items-center me-4">
                                                    <input id="red-radio" type="radio" name="role_id"
                                                        value="{{ $role->id }}"
                                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300  dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="red-radio"
                                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $role->name }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                        <small id="role_id_error" class="text-red-600"></small>
                                    </div>


                                    <div>
                                        <button type="submit"
                                            class=" flex w-full justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            Sign up
                                        </button>
                                    </div>
                                </form>

                                <!-- / form -->
                                <p class="mt-10 text-center text-sm text-gray-500">
                                    Do you have an account?
                                    <a href="login"
                                        class="font-semibold leading-6 text-red-600 hover:text-indigo-500">Log in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1  text-center hidden lg:flex">
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                    style="background-image: url('{{ asset('assets/images/alexandre-debieve-DOu3JJ3eLQc-unsplash.jpg') }}');">
                </div>
            </div>

        </div>
    </div>


    <!-- Form Validation  -->
    <script src="{{ asset('assets/js/formvalidation.js') }}"></script>
    <!-- / Form Validation  -->

</body>

</html>
