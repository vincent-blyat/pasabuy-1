<template>
<!--Start of Navbar code-->
    <!--profile menu icon-->
    <nav class="bg-white lg:h-16 xl:h-16 sm:h-16">
      <div class="ml-3 relative">
        <button class="absolute inset-y-3.5 right-8 h-10 w-10 border-2 rounded-full border-red-700">
        <img class="h-9.5 w-9.5 rounded-full" src="img/yami.jpg" alt="yamimaho yamimatoy">
        </button>
      </div>
      <!--end-->
     
      <!--search bar-->
      <div class="absolute inset-y-3.5 right-24 ">
        <div class="absolute relative mx-auto">
          <input
            class="hidden lg:flex border-2 border-gray-300 bg-white h-10 px-3 pr-4 rounded-2xl text-sm outline-none"
            type="search"
            name="search"
            placeholder="Search"
          />
          <button type="submit" class="absolute right-0 top-0 mt-2 mr-4 md:">
             <img class="h-6 w-6 rounded-full" src="img/search.svg" alt="yamimaho yamimatoy">
          </button>
        </div>
      </div>
      <!--ends-->
      <!--middle navbar buttons-->
      <div class="flex space-x-10 justify-center items-center hidden md:flex">
        <div class="inline-flex space-x-2  p-5">
          <img class="w-6 h-full rounded-lg" src="img/home.svg"/>
            <a href="#">
          <button class="text-base font-bold tracking-wide leading-none text-gray-500">Home</button>
            </a>
        </div>
        <div class="inline-flex space-x-2  p-5">
          <img class="w-6 h-full rounded-lg pt-0.5" src="img/message.svg"/>
          <a href="#">
          <button class="text-base font-bold tracking-wide leading-none text-gray-500">Messages</button>
          </a>
        </div>
        <div class="inline-flex space-x-2  p-5">
          <img class="w-6 h-full rounded-lg" src="img/notification.svg"/>
          <a href="#">
          <button class="text-base font-bold tracking-wide leading-none text-gray-500">Notifications</button>
          </a>
        </div>
      </div>
      <!--end-->
     
      <!--pasabuy text and icon-->
      <div class="flex items-center justify-center md:items-stretch md:justify-start">
        <a href="#">
        <img class=" w-10 h-auto rounded-lg absolute top-2.5 md:left-8" src="img/shopping_cart.svg"/>
        </a>
        <p class=" absolute top-4 left-20 w-24 text-2xl font-bold tracking-wide leading-none text-red-700 hidden lg:flex">Pasabuy</p>
      </div>  
      <!--end-->

       <!--hamburger menu icon-->
       <div class="flex md:hidden px-5 py-3 ">
        <button id="hamburger">
          <svg class="block h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <svg class="hidden h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <!--ends--> 
      <!--mobile screen menu options-->
      <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
          <div class="flex block px-5 py-2">
            <img class="w-6 h-full rounded-lg" src="img/home.svg"/>
            <button class="text-base font-bold tracking-wide leading-none text-gray-500 px-2">Home</button>
          </div>
          <div class="flex block px-5 py-2">
            <img class="w-6 h-full rounded-lg" src="img/message.svg"/>
            <button class="text-base font-bold tracking-wide leading-none text-gray-500 px-2">Messages</button>
          </div>
          <div class="flex block px-5 py-2">
            <img class="w-6 h-full rounded-lg" src="img/notification.svg"/>
            <button class="text-base font-bold tracking-wide leading-none text-gray-500 px-2">Notifications</button>
          </div>  
        </div>
      </div>
    </nav>
    <!--End of Navbar code-->
</template>


<script>
export default {
    
}
</script>