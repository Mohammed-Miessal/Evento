    <!-- navbar -->
    <header class="absolute inset-x-0 top-0 z-50 py-6">
        <div class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5">
            <nav class="w-full flex justify-between gap-6 relative">
                <!-- logo -->
                <div class="min-w-max inline-flex relative">
                    <a href="/" class="relative flex items-center gap-3">
                        <img class="h-10 w-auto" src="{{ asset('assets/images/Logo.png') }}" alt="Logo image" />
                    </a>
                </div>

                <div data-nav-overlay aria-hidden="true"
                    class="fixed hidden inset-0 lg:!hidden bg-gray-800/60 bg-opacity-50 backdrop-filter backdrop-blur-xl">
                </div>
                <div data-navbar
                    class="flex invisible opacity-0  translate-y-10 overflow-hidden lg:visible lg:opacity-100  lg:-translate-y-0 lg:scale-y-100 duration-300 ease-linear flex-col gap-y-6 gap-x-4 lg:flex-row w-full lg:justify-between lg:items-center absolute lg:relative top-full lg:top-0 bg-white lg:!bg-transparent border-x border-x-gray-100 lg:border-x-0">
                    <ul
                        class="border-t border-gray-100  lg:border-t-0 px-6 lg:px-0 pt-6 lg:pt-0 flex flex-col lg:flex-row gap-y-4 gap-x-3 text-lg text-gray-700 w-full lg:justify-center lg:items-center">
                        <li>
                            <a href="#" class="duration-300 font-medium ease-linear hover:text-blue-600 py-3">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#" class="duration-300 font-medium ease-linear hover:text-blue-600 py-3">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="#" class="duration-300 font-medium ease-linear hover:text-blue-600 py-3">
                                About us
                            </a>
                        </li>
                        <li>
                            <a href="#" class="duration-300 font-medium ease-linear hover:text-blue-600 py-3">
                                Features
                            </a>
                        </li>
                    </ul>

                    <div
                        class="lg:min-w-max flex items-center sm:w-max w-full pb-6 lg:pb-0 border-b border-gray-100   lg:border-0 px-6 lg:px-0">

                        <button
                            class=" bg-gradient-to-br from-indigo-600 from-20% via-blue-600 via-30% to-pink-600 flex text-white justify-center items-center w-max min-w-max sm:w-max px-6 h-12 rounded-full outline-none relative overflow-hidden border duration-300 ease-linear
                                after:absolute after:inset-x-0 after:aspect-square after:scale-0 after:opacity-70 after:origin-center after:duration-300 after:ease-linear after:rounded-full after:top-0 after:left-0 after:bg-[#172554] hover:after:opacity-100 hover:after:scale-[2.5] bg-blue-600 border-transparent hover:border-[#172554]">
                            @if (!Auth::check())
                                <a href="{{ route('loginForm') }}">
                                    <span class="hidden sm:flex relative z-[5]">
                                        Login
                                    </span>
                                    <span class="flex sm:hidden relative z-[5]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                        </svg>
                                    </span>
                                </a>
                            @else
                                <a href="{{ route('dashboard.index') }}">
                                    <span class="hidden sm:flex relative z-[5]">
                                        Dashboard
                                    </span>
                                    <span class="flex sm:hidden relative z-[5]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                        </svg>
                                    </span>
                                </a>
                            @endif


                        </button>

                    </div>
                </div>


                <div class="min-w-max flex items-center gap-x-3">

                    <button data-toggle-navbar data-is-open="false"
                        class="lg:hidden lg:invisible outline-none w-7 h-auto flex flex-col relative">
                        <span id="line-1"
                            class="w-6 h-0.5 rounded-full bg-gray-700 transition-all duration-300 ease-linear"></span>
                        <span id="line-2"
                            class="w-6 origin-center  mt-1 h-0.5 rounded-ful bg-gray-700 transition-all duration-300 ease-linear"></span>
                        <span id="line-3"
                            class="w-6 mt-1 h-0.5 rounded-ful bg-gray-700 transition-all duration-300 ease-linear"></span>
                        <span class="sr-only">togglenav</span>
                    </button>
                </div>
            </nav>
        </div>
    </header>
