<template>
<!--Start of Navbar code-->
    <!--profile menu icon-->
    <nav class="w-full fixed font-nunito bg-white lg:h-16 xl:h-16 sm:h-16">
      <div class="ml-3 relative">
        <button @click="isOpen=!isOpen" class="absolute inset-y-3.5 right-8 h-10 w-10 border-2 rounded-full border-red-700">
        <img class="h-9.7 w-10 rounded-full" src="/img/yami.jpg">
        </button>
      </div>
    <div class="w-full ">  
    <div v-if="isOpen" class="shadow-xl fixed bg-white h-min w-30 ring-2 ring-gray-200 right-0 rounded-lg py-2 pl-2 pr-4 pt-2 mr-16 mt-16">
    <router-link to="/edit-profile"  class="flex flex-row gap-x-2 "><span class="material-icons text-gray-500">account_circle</span>Profile</router-link>
    <router-link to="/orders" class="flex flex-row gap-x-2"> <span class="material-icons text-gray-500">shopping_bag</span>Orders</router-link>
    <router-link to="/deliver" class="flex flex-row gap-x-2"><span class="material-icons text-gray-500">delivery_dining</span>Deliveries</router-link>
    <router-link to="/account-settings" class="flex flex-row gap-x-2"><span class="material-icons text-gray-500">manage_accounts</span>Account Setting</router-link>
    <router-link to="/" class="flex flex-row gap-x-2"><span class="material-icons text-gray-500 ">logout</span>Log out</router-link>
    </div>
    </div>
      <!--end-->
      <!--search bar-->
      <div class="absolute  right-24 ">
        <div class="relative">
          <button class="flex float-right h-10 px-3 mt-4 mr-10 bg-white border-2 border-gray-500 w-36 rounded-2xl 
          focus:outline-none focus:border-red-danger">
            <router-link to="/search" class="mt-1 text-align-left text-gray-500" >Search</router-link>
            <span class="right-0 pl-10 mt-2 material-icons ">search</span>
            </button>
        </div>
      </div>
      <!--ends-->
      <!--middle navbar buttons-->
      <div class="flex space-x-10 justify-center items-center hidden md:flex">
        <div class="inline-flex space-x-2  p-5">
          <span class="material-icons text-red-600">
            home  
            </span>
          <button class="text-base font-bold tracking-wide leading-none text-gray-500">
             <router-link :to="{name: 'dashboard'}" >Home</router-link></button>
        </div>
        <div class="inline-flex space-x-2  p-5">
          <span class="material-icons text-red-600 cursor-pointer">
              chat_bubble
                </span>
          <button class="text-base font-bold tracking-wide leading-none text-gray-500">
             <router-link :to="{name: 'messages'}" >Messages</router-link></button>
        </div>
        <div class="inline-flex space-x-2  p-5">
          <span class="material-icons text-red-600">
            notifications
          </span>
          <button @click="show=!show" class="text-base font-bold tracking-wide leading-none text-gray-500">Notifications</button>
         
             <div v-if="show" class="shadow-lg z-10 overflow-hidden fixed left--1 rounded-lg pt-2 mr-10 mt-8 bg-white h-auto" style="min-width:370px;">
               <h1 class="align-text-leftCorner font-bold ml-4 mt-4 mb-4 border-b ">Notifications</h1>
               <!--notification 1-->
                <div class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100">
                <img class="object-cover w-10 h-10 mx-1 rounded-full" src="https://ptetutorials.com/images/user-profile.png" alt="avatar">
                <p class="pl-1 mx-2 text-sm text-gray-800">
                <span class="font-bold" href="#">Mark Aral </span> 
                <span class ="font-semibold"> successfully delivered your order. </span><br> 
                <span class ="font-semibold"> Would you like to write a review? </span><br>
                <router-link to="#" class="text-blue-500 font-bold">Review</router-link>
                <span class="text-xs text-gray-500"> 2 hours ago</span>
                </p>
                </div>
              <!--notification 2-->
              <div class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100">
                <img class="object-cover w-10 h-10 mx-1 rounded-full" src="https://ptetutorials.com/images/user-profile.png" alt="avatar">
                <p class="pl-1 mx-2 text-sm text-gray-800">
                <span class="font-bold" href="#">Mark Aral </span> 
                <span class ="font-semibold"> is on their way to deliver your order </span><br>
                <router-link to="/orders" class="text-blue-500 font-bold">View Order</router-link>
                <span class="text-xs text-gray-500"> 2 hours ago</span>
                </p>
                </div>
                <!--notification 3-->
              <div class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100">
                <img class="object-cover w-10 h-10 mx-1 rounded-full" src="https://ptetutorials.com/images/user-profile.png" alt="avatar">
                <p class="pl-1 mx-2 text-sm text-gray-800">
                <span class="font-bold" href="#">Mark Aral </span> 
                <span class ="font-semibold"> is on their way to deliver your order </span><br>
                <router-link to="/orders" class="text-blue-500 font-bold">View Order</router-link>
                <span class="text-xs text-gray-500"> 2 hours ago</span>
                </p>
                </div>
             </div>
          
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
            <button class="text-base font-bold tracking-wide leading-none text-gray-500 px-2">
              <router-link :to="{name: 'messages'}" >Messages</router-link></button>
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

    data(){
        return{
            isOpen:false,
            show:false
        }
    },

     components:{
    
  }
}
</script>