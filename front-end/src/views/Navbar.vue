<template>
    <div class="flex">
  <!-- mobile menu bar -->
  <div class="flex justify-between text-gray-100 bg-gray-800 ">
    <!-- logo -->
    <!-- mobile menu button -->
    <nav class="fixed flex items-center justify-between w-full h-20 p-0 mt-0 bg-red-700 font-nunito 2xl:bg-white 2xl:shadow-md xl:bg-white xl:shadow-md lg:bg-white lg:shadow-md">
      <!--Logo-->
       <div class="flex items-center ">
       <button class="block ml-4 text-white material-icons 2xl:hidden xl:hidden lg:hidden" @click="toggle_event()"> menu</button>
      <p class="block h-full font-bold text-white uppercase 2xl:hidden xl:hidden lg:hidden">{{currentRoute}}</p>
      <div class="flex items-center">
        <img src="/img/pasaBUYLogoOnly.png" class="hidden w-20 h-16 2xl:block xl:block lg:block">
        <h1 class="absolute hidden text-xl font-black tracking-widest top-6 left-16 font-raleway 2xl:text-red-700 xl:text-red-700 lg:text-red-700 2xl:block xl:block lg:block ">pasaBUY</h1>
      </div>
       </div>
       <img v-if="currentRoute=='' " src="/img/pasaBUYLogoOnly.png" class="block w-20 h-16 2xl:hidden xl:hidden lg:hidden"/>
      <div class="items-center justify-center hidden w-5/12 font-bold text-gray-500 2xl:flex 2xl:ml-60 xl:flex xl:ml-72 xl:mr-10 lg:flex lg:justify-between lg:gap-x-0 lg:ml-28 lg:px-3 lg:w-6/12 gap-x-16">
     <router-link to="/dashboard"> 
     <div class="flex py-4 gap-x-4">
       <span class="material-icons">
        home  
      </span> 
      <p class="text-gray-500 text">Home</p>
      </div>
      </router-link>
     <router-link to="/messages"> <div class="flex py-4 gap-x-4">
      <span class="cursor-pointer material-icons">
        chat
      </span>
      <p class="text-gray-500 ">Messages</p>
      </div></router-link>
      <div class="flex items-center py-4 cursor-pointer gap-x-4" @click="activeBtn=!activeBtn,show=!show" :class="{active_notif: activeBtn }">
       <span id="notif" class="text-gray-500 material-icons \">
            notifications
          </span>
          <span id="btn_notif" class="text-base font-bold leading-none tracking-wide text-gray-500 outline-none ">Notifications</span>
             <div v-if="show" class="fixed z-50 float-left h-auto pt-2 overflow-hidden bg-white rounded-lg shadow-lg mt-80 left--1" style="min-width:370px;">
               <h1 class="mt-4 mb-4 ml-4 font-bold border-b cursor-pointer align-text-leftCorner">Notifications</h1>
               <!--notification 1-->
                <div class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100">
                <img class="object-cover w-10 h-10 mx-1 rounded-full" src="https://ptetutorials.com/images/user-profile.png" alt="avatar">
                <p class="pl-1 mx-2 text-sm text-gray-800">
                <span class="font-bold" href="#">Mark Aral </span> 
                <span class ="font-semibold"> successfully delivered your order. </span><br> 
                <span class ="font-semibold"> Would you like to write a review? </span><br>
                <router-link to="#" class="font-bold text-blue-500">Review</router-link>
                <span class="text-xs text-gray-500"> 2 hours ago</span>
                </p>
                </div>
              <!--notification 2-->
              <div class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100">
                <img class="object-cover w-10 h-10 mx-1 rounded-full" src="https://ptetutorials.com/images/user-profile.png" alt="avatar">
                <p class="pl-1 mx-2 text-sm text-gray-800">
                <span class="font-bold" href="#">Mark Aral </span> 
                <span class ="font-semibold"> is on their way to deliver your order </span><br>
                <router-link to="/orders" class="font-bold text-blue-500">View Order</router-link>
                <span class="text-xs text-gray-500"> 2 hours ago</span>
                </p>
                </div>
                <!--notification 3-->
              <div class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100">
                <img class="object-cover w-10 h-10 mx-1 rounded-full" src="https://ptetutorials.com/images/user-profile.png" alt="avatar">
                <p class="pl-1 mx-2 text-sm text-gray-800">
                <span class="font-bold" href="#">Mark Aral </span> 
                <span class ="font-semibold"> is on their way to deliver your order </span><br>
                <router-link to="/orders" class="font-bold text-blue-500">View Order</router-link>
                <span class="text-xs text-gray-500"> 2 hours ago</span>
                </p>
              </div>  
            </div>   
      </div>
      </div>
      <div class="flex mr-2 gap-x-5">
        <div  class="flex items-center bg-white ring-2 ring-gray-400 rounded-2xl">
        <input type="search" class="w-auto h-10 pl-3 text-black vs:w-40 rounded-2xl" placeholder="Search">
        <button class="w-full mr-2 text-gray-400 material-icons" >search</button>
        </div>
        <div  class="hidden 2xl:block lg:block xl:block">
             <Dropdown/>
        </div>

      </div>
      
    </nav>
  </div>

  <!-- sidebar -->
  <div class="fixed inset-y-0 left-0 z-50 w-64 px-2 mt-20 space-y-4 overflow-auto font-bold text-gray-600 transition duration-200 ease-in-out transform -translate-x-full bg-white border-r-2 sidebar overscroll-y-contain lg:hidden 2xl:hidden h-max ssm:h-auto xl:hidden py-7">

    <!-- logo -->
    <div class="flex mt-0">
        <img src="/img/pasaBUYLogoOnly.png" class="w-12 h-10">
        <p class="text-2xl font-extrabold text-red-700">pasaBUY</p>
    </div>
    <!-- nav -->
    <nav class="space-y-8 ">
       <router-link to="/dashboard" class="rounded-2xl ">  
     <div class="flex items-center h-10 pl-2 space-x-2 mobile rounded-2xl ">
       <span class="material-icons">
        home  
      </span> 
      <p class="text-gray-500 text">Home</p>
      </div>
      </router-link>
      
     <router-link to="/messages"  class="rounded-2xl "> 
     <div class="flex items-center h-10 pl-2 space-x-2 mobile rounded-2xl ">
      <span class="cursor-pointer material-icons">
        chat
      </span>
      <p class="text-gray-500 ">Messages</p>
      </div></router-link>
      <router-link to="/ss"  class="rounded-2xl "> 
      <div class="flex items-center h-10 pl-2 space-x-2 mobile rounded-2xl ">
       <span class="material-icons ">
            notifications
          </span>
      <p class="text-gray-500">Notifications</p>   
      </div></router-link>
     <router-link to="/edit-profile" class="rounded-2xl">
      <div class="flex items-center h-10 pl-2 space-x-2 mobile rounded-2xl ">
       <span class="material-icons ">
            account_circle
          </span>
      <p class="text-gray-500">Profile</p>   
      </div>
      </router-link>
       <hr>
        <router-link to="/orders"  class="rounded-2xl ">
       <div class="flex items-center h-10 pl-2 mt-4 mobile rounded-2xl space-2-x-4 ">
       <span class="material-icons ">
          shopping_bag
          </span>
      <p class="text-gray-500">Orders</p>   
      </div></router-link>
      <router-link to="/deliver"  class="rounded-2xl ">
       <div class="flex items-center h-10 pl-2 space-x-2 mobile rounded-2xl ">
       <span class="material-icons ">
          delivery_dining
          </span>
      <p class="text-gray-500">Deliveries</p>   
      </div></router-link>
      <router-link to="/shopping-list" class="rounded-2xl">
       <div class="flex items-center h-10 pl-2 space-x-2 mobile rounded-2xl ">
       <span class="material-icons ">
          list
          </span>
      <p class="text-gray-500">Shopping Lists</p>   
      </div></router-link>
        <router-link to="/account-settings" class="rounded-2xl ">
       <div class="flex items-center h-10 pl-2 space-x-2 mobile rounded-2xl ">
       <span class="material-icons ">
         manage_accounts
          </span>
      <p class="text-gray-500">Account Settings</p>   
      </div></router-link>
       <router-link to="/"  class="rounded-2xl ">
       <div class="flex items-center h-10 pl-2 space-x-2 mobile rounded-2xl ">
       <span class="material-icons ">
         logout
          </span>
      <p class="text-gray-500">Log Out</p>   
      </div></router-link>
    </nav>
  </div>


</div>
</template>
<script>
import { computed } from 'vue';
import {useRoute} from 'vue-router';
import Dropdown from './dropmenu.vue';
export default {
  name:'navBar',
 components:{
    Dropdown
  },
  beforeCreate:function () {
      document.body.className='account';
  },
    data(){
        return{
            isOpen:false,
            show:false,
            activeBtn:false,
        }
    },
      methods:{
            toggle_event(){
                const sidebar = document.querySelector(".sidebar");
// add our event listener for the click
             sidebar.classList.toggle("-translate-x-full");
        
            }
        },
    setup() {
    const currentRoute=computed(()=>{
      return useRoute().name
    })
    return{currentRoute}
    
  },
    
}
</script>
<style scoped>
.router-link-active .mobile{
 background-color: rgba(236, 233, 233, 0.705);
}
.router-link-active .mobile p{
  color:red;
}
.router-link-active{
  color:red;
}
.router-link-active{
  color:red;
  border-bottom: 5px solid red;
}
.router-link-active p{
  color:red;
}
.active_notif #notif{
 color:red;
}
.active_notif #btn_notif{
 color:red;
}
</style>
