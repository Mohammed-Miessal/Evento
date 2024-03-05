@extends('layouts.dashboard')
@section('content')
    <div class="bg-white dark:bg-gray-800 border border-[#D9D9DE] dark:border-gray-700 rounded-xl  mb-12">
        <!-- Start block -->
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">

            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

                <div class="bg-white border  rounded-lg shadow relative m-10">

                    <div class="flex items-center justify-center  p-5 border-b rounded-t">
                        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white font-lora">
                            Update <span class="text-gray-500 font-lora"> Categorie </span>
                        </h1>
                    </div>

                    <div class="p-6 space-y-6">
                        <form action="{{ route('categorie.update' , $categorie->id ) }}" method="post" enctype="multipart/form-data" id="myForm">
                            @csrf
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Name</label>
                                    <input type="text" name="name" id="name"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="Name of the Categorie" value="{{ $categorie->name }}">
                                    <small id="name-error" class="text-red-500"></small>
                                </div>


                                <div class="col-span-6 sm:col-span-3">
                                    <label for="image" class="text-sm font-medium text-gray-900 block mb-2">image</label>
                                    <input type="file" name="image" id="image" value="{{ $categorie->image_path}}"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                                    <small id="image-error" class="text-red-500"></small>
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
