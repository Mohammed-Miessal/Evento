@extends('layouts.dashboard')
@section('content')
    <div class="bg-white dark:bg-gray-800 border border-[#D9D9DE] dark:border-gray-700 rounded-xl  mb-12">
        <!-- Start block -->
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">

            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

                <div class="bg-white border  rounded-lg shadow relative m-10">

                    <div class="flex items-center justify-center  p-5 border-b rounded-t">
                        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white font-lora">
                            Add <span class="text-gray-500 font-lora"> Event </span>
                        </h1>
                    </div>

                    <div class="p-6 space-y-6">
                        <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data" id="myForm">

                            @csrf
                            <div class="grid grid-cols-6 gap-6">

                                {{-- Title --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="title" class="text-sm font-medium text-gray-900 block mb-2">Title</label>
                                    <input type="text" name="title" id="title"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Title Max(50 chars)">
                                    <small id="title-error" class="text-red-500"></small>
                                </div>

                                {{-- Image --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="image" class="text-sm font-medium text-gray-900 block mb-2">image</label>
                                    <input type="file" name="image" id="image"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                                    <small id="image-error" class="text-red-500"></small>

                                </div>

                                {{-- Date --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="date" class="text-sm font-medium text-gray-900 block mb-2">Date</label>
                                    <input type="datetime-local" name="date" id="datetime"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">

                                    <small id="image-error" class="text-red-500"></small>
                                </div>


                                {{-- Location --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="location"
                                        class="text-sm font-medium text-gray-900 block mb-2">Location</label>
                                    <input type="text" name="location" id="location"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Location">
                                    <small id="location-error" class="text-red-500"></small>
                                </div>


                                {{-- Location --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Price</label>
                                    <input type="number" name="price" id="price"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="price">
                                    <small id="price-error" class="text-red-500"></small>
                                </div>


                                {{-- Categorie --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="categorie"
                                        class="text-sm font-medium text-gray-900 block mb-2">Categorie</label>
                                    <select id="categorie" name="categorie_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected disabled>Choose a Category</option>

                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                        @endforeach

                                    </select>
                                    <small id="categorie-error" class="text-red-500"></small>
                                </div>

                                {{-- Capacity --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="capacity"
                                        class="text-sm font-medium text-gray-900 block mb-2">Capacity</label>
                                    <input type="number" name="capacity" id="capacity"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="capacity">
                                    <small id="capacity-error" class="text-red-500"></small>
                                </div>


                                {{-- available_places --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="available_places"
                                        class="text-sm font-medium text-gray-900 block mb-2">Available Places</label>
                                    <input type="number" name="available_places" id="available_places"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="available_places">
                                    <small id="available_places-error" class="text-red-500"></small>
                                </div>

                                {{-- type_reservation --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="available_places" class="text-sm font-medium text-gray-900 block mb-2">Type
                                        de reservation</label>
                                    {{-- Auto --}}
                                    <div class="flex items-center me-4">
                                        <input id="red-radio" type="radio" name="type_reservation" value="auto"
                                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300  dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="red-radio"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Auto</label>
                                    </div>

                                    {{-- Manuel --}}
                                    <div class="flex items-center me-4">
                                        <input id="red-radio" type="radio" name="type_reservation" value="manuel"
                                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300  dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="red-radio"
                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Manuel</label>
                                    </div>
                                </div>


                                {{-- Description --}}
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="description"
                                        class="text-sm font-medium text-gray-900 block mb-2">Description</label>

                                    <textarea name="description" id="description" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Write your description  here..."></textarea>
                                    <small id="description-error" class="text-red-500"></small>
                                </div>


                            </div>
                            <div class="p-6 border-t border-gray-200 rounded-b">
                                <button
                                    class="text-dark bg-gray-100 hover:bg-cyan-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-700 dark:text-gray-400 dark:focus:ring-gray-700"
                                    type="submit">Save</button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection
