@extends('layouts.dashboard')
@section('content')
    <div class="bg-white dark:bg-gray-800 border border-[#D9D9DE] dark:border-gray-700 rounded-xl  mb-12">
        <!-- Start block -->
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">

            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

                <div class="bg-white border  rounded-lg shadow relative m-10">

                    <div class="flex items-center justify-center  p-5 border-b rounded-t">
                        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white font-lora">
                            Event <span class="text-gray-500 font-lora"> Details </span>
                        </h1>
                    </div>

                    <div class="p-6 space-y-6">

                        <h2 class="text-xl font-bold  mb-2 text-gray-900 dark:text-white font-lora"> Description :</h2>
                        {{ $event->description }}

                        <h2 class="text-xl font-bold  mb-6 text-gray-900 dark:text-white font-lora"> Location :</h2>
                        {{ $event->location }}

                        <h2 class="text-xl font-bold  mb-6 text-gray-900 dark:text-white font-lora"> Capacity :</h2>
                        {{ $event->capacity }}

                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection
