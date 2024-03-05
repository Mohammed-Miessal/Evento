 <!-- aside -->
 <div class="flex flex-col items-center w-16 pb-4 overflow-auto border-r border-gray-300">
     <a href="dashboard" class="flex items-center justify-center flex-shrink-0 w-full h-16 ">
     </a>

     <a href="wiki" class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded hover:bg-gray-300">
         <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
         </svg>
     </a>

     <a href="wiki" class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded hover:bg-gray-300">
         <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
         </svg>
     </a>

     <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded hover:bg-gray-300" href="#">
         <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
         </svg>
     </a>
     <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded hover:bg-gray-300" href="#">
         <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
         </svg>
     </a>
     <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 rounded hover:bg-gray-300" href="#">
         <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
         </svg>
     </a>
     <a class="flex items-center justify-center flex-shrink-0 w-10 h-10 mt-4 mt-auto rounded hover:bg-gray-300"
         href="#">
         <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
         </svg>
     </a>
 </div>
 <!-- / aside -->



 <div class="flex flex-col w-30 ">
    <button class="relative text-sm focus:outline-none group">
        <div class="flex items-center justify-between w-full h-16 px-4 border-b ">
            <img class="h-10 w-auto" src="{{ asset('assets/images/Logo.png') }}" alt="Logo image" />

        </div>
        <div class="absolute z-10 flex-col items-start hidden w-full pb-1 bg-white shadow-lg group-focus:flex">
        </div>

    </button>
    <div class="flex flex-col flex-grow p-4 overflow-auto ">
        <a class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300 mb-4 font-lora"
            href="dashboard">
            <span class="leading-none"> Dashboard </span>
        </a>

        <a href="wiki"
            class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300 mb-4 font-lora">
            <span class="leading-none"> Wikis </span>
        </a>

        <a href="categorie"
            class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300 mb-4 font-lora">
            <span class="leading-none"> Categories </span>
        </a>
        <a href="tag"
            class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300 mb-4 font-lora">
            <span class="leading-none"> Tags </span>
        </a>
        <a class="flex items-center flex-shrink-0 h-10 px-2 text-sm font-medium rounded hover:bg-gray-300"
            href="#">
            <span class="leading-none">Item 5</span>
        </a>
        <a class="flex items-center flex-shrink-0 h-10 px-3 mt-auto text-sm font-medium bg-gray-200 rounded hover:bg-gray-300"
            href="#">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <span class="ml-2 leading-none">New Item</span>
        </a>
    </div>
</div>