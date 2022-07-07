{{-- 
<nav class="flex items-center justify-between w-full p-6 mx-auto mt-3 ">
    
        <div class="flex flex-row space-x-3">
            <a href="#" class="font-light ">
                Group trips 
            </a>
            <a href="#" class="font-light">
                Private trips
            </a>
            <a href="#" class="font-light">
                Past trips & reviews
            </a>
        </div>
        <div>
            <a href="#" class="text-2xl">
               Luxe Tribes
            </a>
        </div>
        <div class="flex flex-row space-x-3">
            <a href="#" class="font-light">
                About us
            </a>
            <a href="#" class="font-light">
                FAQs
            </a>
            <a href="#" class="font-light">
                Blog
            </a>
            <a href="#" class="font-light">
                Contact us
            </a>
            <a href="#" class="flex items-center justify-center w-8 h-8 p-2 border border-black rounded-lg">
                <img src="{{ asset('assets/imgs/magnifying-glass-solid.svg') }}" class="w-7 h-7 " alt="">
            </a>
            <a href="#" class="flex items-center justify-center w-20 h-8 p-2 border border-black rounded-lg">
                <img src="{{ asset('assets/imgs/user-regular.svg') }}" class="w-4 h-4 " alt="">
                <span class="ml-1 text-sm">Log in</span>
            </a>
          
        </div>


</nav> --}}


<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800 playfair">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="#" class="flex items-center md:hidden">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"> Luxe Tribes</span>
    </a>
    <ul class="flex-col hidden mt-4 sm:flex md:flex-row md:space-x-2 md:mt-0 md:text-sm md:font-medium">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 " >Group trips</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 ">Past trips</a>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700">Past trips & review</a>
        </li>
    </ul>
    <div class="flex md:order-2">
      {{-- <button type="button" data-collapse-toggle="mobile-menu-3" aria-controls="mobile-menu-3" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
      </button> --}}
      <div class="relative hidden md:block">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-2 md:mt-0 md:text-sm md:font-medium ">
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 " >About us</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 ">FAQs</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700">Blog</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-700">Contact us</a>
              </li>
              <li>
                  <a href="#" class="flex items-center justify-center w-8 h-8 p-2 border border-black rounded-lg">
                      <img src="{{ asset('assets/imgs/magnifying-glass-solid.svg') }}" class="w-7 h-7 " alt="">
                  </a>
              </li>
              <li>
                  <a href="#" class="flex items-center justify-center w-20 h-8 p-2 border border-black rounded-lg">
                      <img src="{{ asset('assets/imgs/user-regular.svg') }}" class="w-4 h-4 " alt="">
                      <span class="ml-1 font-sans text-sm">Log in</span>
                  </a>
              </li>
          </ul>
        </div>
      <button data-collapse-toggle="mobile-menu-3" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-3" aria-expanded="false">
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-3">
        {{-- <div class="relative mt-3 md:hidden">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
          </div>
          <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
        </div> --}}
        <a href="#" class="text-4xl">
            Luxe Tribes
         </a>
      </div>
    </div>
  </nav>