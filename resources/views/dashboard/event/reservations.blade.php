@extends('layouts.dashboard')
@section('content')
    <div class="bg-white dark:bg-gray-800 border border-[#D9D9DE] dark:border-gray-700 rounded-xl p-8 mb-12">
        <!-- Start block -->
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
            <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white font-lora">
                <span class="text-gray-500 font-lora">Events</span> Table
            </h1>

            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->

                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden overflow-y-visible ">
                    <div class="flex justify-end items-center w-full md:w-full">
                        <!-- Search -->
                        <div class="w-full">

                        </div>
                        <!-- / Search -->

                        <!-- Div avec le bouton aligné à droite -->
                        <div class="flex justify-end items-center mb-3 mr-2 mt-2">



                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-center">Reservation ID</th>
                                    <th scope="col" class="px-4 py-3 text-center"> User</th>
                                    <th scope="col" class="px-4 py-3 text-center">Event Name</th>
                                    <th scope="col" class="px-4 py-3 text-center">Status</th>


                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($reservations as $reservation)
                                    <tr class="border-b dark:border-gray-700">

                                        <td class="px-4 py-3 text-center"> {{ $reservation->id }} </td>
                                        <td class="px-4 py-3 text-center"> {{ $reservation->user->name }} </td>
                                        <td class="px-4 py-3 text-center"> {{ $reservation->event->title }} </td>
                                        <td class="px-4 py-3 text-center"> 
                                            <form action="{{ route('reservation.approve', $reservation) }}" method="post">
                                                @csrf
                                                <div class="flex items-center justify-center ">
                                                    <select id="status" name="status"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        required>
                                                        <option selected disabled>Change status</option>
                                                        <option value="approved">Approved</option>
                                                     
                                                    </select>
                                                    <input type="submit"
                                                        class="bg-grey-500  px-4 py-2.5 rounded-lg cursor-pointer">
                                                </div>


                                            </form>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

        </section>

    </div>
@endsection
