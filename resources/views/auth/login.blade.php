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
                                    class="mt-10 text-center text-2xl  leading-9 tracking-tight text-gray-900 font-Pacifico">
                                    Log in
                                </h2>
                            </div>

                            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                                <form class="space-y-6" action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div>
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900">Email
                                            address</label>
                                        <div class="mt-2">
                                            <input id="email" name="email" type="email" autocomplete="email"
                                                required
                                                class=" pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex items-center justify-between">
                                            <label for="password"
                                                class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                        </div>
                                        <div class="mt-2">
                                            <input id="password" name="password" type="password"
                                                autocomplete="current-password" required
                                                class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" name="submit"
                                            class="flex w-full justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            Login
                                        </button>
                                    </div>
                                </form>

                                <p class="mt-10 text-center text-sm text-gray-500">
                                    You do not have an account ?
                                    <a href="{{ route('register') }}"
                                        class="font-semibold leading-6 text-red-600 hover:text-indigo-500">Register</a>
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
</body>

</html>
