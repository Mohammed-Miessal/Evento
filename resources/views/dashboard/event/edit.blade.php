@extends('layouts.dashboard')
@section('content')
    <div class="bg-white dark:bg-gray-800 border border-[#D9D9DE] dark:border-gray-700 rounded-xl  mb-12">
        <!-- Start block -->
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">

            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

                <div class="bg-white border  rounded-lg shadow relative m-10">

                    <div class="flex items-center justify-center  p-5 border-b rounded-t">
                        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white font-lora">
                            Edit <span class="text-gray-500 font-lora"> Event </span>
                        </h1>
                    </div>

                    <div class="p-6 space-y-6">
                        <form action="addwiki/create" method="post" enctype="multipart/form-data" id="myForm">
                            <div class="grid grid-cols-6 gap-6 ">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="title" class="text-sm font-medium text-gray-900 block mb-2">Title</label>
                                    <input type="text" name="title" id="title"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Title Max(50 chars)">
                                    <small id="title-error" class="text-red-500"></small>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="description"
                                        class="text-sm font-medium text-gray-900 block mb-2">Description</label>
                                    <input type="text" name="description" id="description"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Description Max(100 chars)">
                                    <small id="description-error" class="text-red-500"></small>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="categorie"
                                        class="text-sm font-medium text-gray-900 block mb-2">Categorie</label>
                                    <select id="categorie" name="categorie"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected disabled>Choose a Category</option>

                                        <option value=''>$categorie</option>;

                                    </select>
                                    <small id="categorie-error" class="text-red-500"></small>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="image" class="text-sm font-medium text-gray-900 block mb-2">image</label>
                                    <input type="file" name="image" id="image"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                                    <small id="image-error" class="text-red-500"></small>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tags" class="text-sm font-medium text-gray-900 block mb-2">City</label>
                                    <select id="city" name="city"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected disabled>Choose a Category</option>

                                        <option value=''>$city</option>;

                                    </select>
                                    <small id="city-error" class="text-red-500"></small>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="date" class="text-sm font-medium text-gray-900 block mb-2">Date</label>
                                    <input type="datetime-local" name="datetime" id="datetime"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">

                                    <small id="image-error" class="text-red-500"></small>
                                </div>
                                <div class="col-span-full">
                                    <label for="content"
                                        class="text-sm font-medium text-gray-900 block mb-2">Content</label>

                                    {{-- <textarea name="content" id="content">

                                </textarea> --}}



                                    <textarea name="content" id="message" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Write your thoughts here..."></textarea>

                                    <small id="content-error" class="text-red-500"></small>
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
