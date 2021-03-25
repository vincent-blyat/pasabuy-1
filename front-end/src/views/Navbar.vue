<template>
<!--Start of Navbar code-->
    <!--profile menu icon-->
  <nav class="shadow-md vs:h-20 vs:bg-red-700 vs:w-full w-full fixed flex items-center justify-between font-nunito p-0 bg-white mt-0  h-min">
      <!--Logo-->
       <div class="flex  items-center ">
       <button class="material-icons hidden ml-4 text-white vs:block" @click="isOpen=!isOpen"> menu</button>
      <p class="uppercase font-bold hidden vs:block text-white h-full">{{currentRoute}}</p>
      <div class="flex items-center left-0">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 vs:hidden">
        <h1 class="absolute text-xl font-black tracking-widest top-4 left-16 font-raleway vs:text-white vs:hidden text-red-700 md:hidden">pasaBUY</h1>
      </div>
       </div>
       <img v-if="currentRoute=='' " src="/img/mobile_logo.png" class="w-16 h-16 hidden vs:block"/>
      <div class=" vs:hidden flex  items-center font-bold gap-x-24 text-gray-500 ">
     <router-link to="/dashboard"> 
     <div class="flex gap-x-4 py-4">
       <span class="material-icons">
        home  
      </span> 
      <p class="text text-gray-500">Home</p>
      </div>
      </router-link>
     <router-link to="/messages"> <div class="flex gap-x-4 py-4">
      <span class="material-icons cursor-pointer">
        chat
      </span>
      <p class=" text-gray-500">Messages</p>
      </div></router-link>
      <div class="flex gap-x-4 py-4">
       <span class="text-gray-500 material-icons \">
            notifications
          </span>
          <button @click="show=!show" class="text-base font-bold leading-none tracking-wide text-gray-500 outline-none ">Notifications</button>
             <div v-if="show" class="fixed float-left h-auto pt-2 mt-8 overflow-hidden bg-white rounded-lg shadow-lg left--1" style="min-width:370px;">
               <h1 class="mt-4 mb-4 ml-4 font-bold border-b align-text-leftCorner cursor-pointer">Notifications</h1>
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
      <div class=" flex  mr-8 gap-x-4 ">
        <div class="flex ">
        <button type="button" name="search" class=" text-left vs:hidden ring-1 ring-gray-400 rounded-2xl w-60 pl-4 pr-12">
          <router-link to="/search">Search</router-link>
        </button>
        <span class="material-icons fixed ml-52 self-center vs:relative vs:text-white vs:m-0">search</span>
        </div>
        <div  class="vs:hidden">
             <Dropdown/>
        </div>

      </div>
      
    </nav>
    <!--mobile menu-->
     <Mobilemenu v-if="isOpen" class=""/>
    <!--End of Navbar code-->
</template>

<script>
import { computed } from 'vue';
import {useRoute} from 'vue-router';
import Dropdown from './dropmenu.vue';
import Mobilemenu from './mobile_menu.vue';
export default {
  name:'navBar',
 components:{
    Dropdown,Mobilemenu
  },
  beforeCreate:function () {
      document.body.className='account';
  },
    data(){
        return{
            isOpen:false,
            show:false
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
.router-link-active{
  color:red;
  border-bottom: 5px solid red;
}
.router-link-active p{
  color:red;
}
</style>
