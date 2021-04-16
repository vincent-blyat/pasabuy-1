<template>
    <div class="flex">
  <!-- mobile menu bar -->
  <div class="  bg-gray-800 text-gray-100 flex justify-between ">
    <!-- logo -->
    <!-- mobile menu button -->
    <nav class=" z-40 h-20 bg-red-700 w-full  fixed flex items-center justify-between font-nunito p-0 
  2xl:bg-white 2xl:shadow-md
  xl:bg-white  xl:shadow-md
  lg:bg-white  lg:shadow-md
   mt-0  ">
      <!--Logo-->
       <div class="flex  items-center ">
       <button class="material-icons 2xl:hidden xl:hidden lg:hidden ml-4 text-white block" @click="toggle_event()"> menu</button>
      <p class="uppercase font-bold 2xl:hidden xl:hidden lg:hidden block text-white h-full">{{currentRoute}}</p>
      <div class="flex items-center">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 hidden 2xl:block xl:block lg:block">
        <h1 class="absolute text-xl font-black tracking-widest top-6 left-16 font-raleway
          2xl:text-red-700 xl:text-red-700 lg:text-red-700
         hidden 2xl:block xl:block lg:block ">pasaBUY</h1>
      </div>
       </div>
       <img v-if="currentRoute=='' " src="/img/pasaBUYwhiteLogo.png" class=" 2xl:hidden xl:hidden lg:hidden block"/>
      <div class=" hidden  
      2xl:flex 2xl:ml-60 
      xl:flex xl:ml-72 xl:mr-16
      lg:flex lg:justify-between lg:gap-x-0 lg:ml-28 lg:px-3   lg:w-6/12
      w-6/12 
      justify-center items-center font-bold gap-x-10 text-gray-500 ">
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
      <div class="flex gap-x-4 py-4 cursor-pointer  items-center" @click="notif()" :class="{active_notif: activeBtn }">
       <span id="notif" class="text-gray-500 material-icons \">
            notifications
          </span>
          <span id="btn_notif" class="text-base font-bold leading-none tracking-wide text-gray-500 outline-none ">Notifications </span> <span class="text-red-500">{{unreadNotif}}</span>
              
      </div>
      </div>
      <div class=" flex  mr-2 gap-x-5 ">
       
        
        <button class="material-icons mr-2 text-white w-full" >search</button>
       
        <div class=" 
         items-center hidden ring-2 ring-gray-400 rounded-2xl bg-white
          2xl:flex
          xl:flex
          lg:flex
         ">
        <input type="search" class="w-auto focus:outline-none vs:w-28 text-black  pl-3 rounded-2xl h-10" placeholder="Search">
        <button class="material-icons mr-2 text-gray-400 w-full" >
          <router-link to="/search"> search</router-link></button>
        </div>
        <div  class="hidden  2xl:block lg:block xl:block">
             <Dropdown/>
        </div>

      </div>
        <div v-if="show" class="fixed hidden xl:block lg:block pb-24 2xl:block overflow-y-auto top-20 h-full right-60 pt-2  bg-white rounded-lg shadow-lg left--1" style="min-width:370px;">
               <h1 class="mt-4 mb-4 ml-4 text-black font-bold border-b align-text-leftCorner cursor-pointer">Notifications</h1>
             
                  <Notification/>
              
             
            </div> 
    </nav>
    
  </div>

  <!-- sidebar -->
  <div class="z-40 sidebar overscroll-y-contain overflow-auto lg:hidden 2xl:hidden border-r-2 h-max ssm:h-auto xl:hidden mt-20 bg-white font-bold text-gray-600 w-64 space-y-4 py-7 px-2 fixed inset-y-0 left-0 transform -translate-x-full  transition duration-200 ease-in-out">

    <!-- logo -->
    <div class="flex mt-0">
        <img src="/img/pasaBUYLogoOnly.png" class="w-12  h-10">
        <p class="text-2xl text-red-700 font-extrabold">pasaBUY</p>
    </div>
    <!-- nav -->
    <nav class=" space-y-8">
       <router-link to="/dashboard" class="rounded-2xl   ">  
     <div class="mobile rounded-2xl items-center flex pl-2 h-10 space-x-2 ">
       <span class="material-icons">
        home  
      </span> 
      <p class="text text-gray-500">Home</p>
      </div>
      </router-link>
      
     <router-link to="/messages"  class="rounded-2xl   "> 
     <div class="mobile rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
      <span class="material-icons cursor-pointer">
        chat
      </span>
      <p class=" text-gray-500">Messages</p>
      </div></router-link>
      <router-link to="/notification"  class="rounded-2xl   "> 
      <div class="mobile rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
       <span class="material-icons ">
            notifications
          </span>
      <p class="text-gray-500">Notifications</p> 
      </div></router-link>
     <router-link to="/edit-profile" class="rounded-2xl">
      <div class="mobile rounded-2xl items-center flex h-10 pl-2 space-x-2 ">
       <span class="material-icons ">
            account_circle
          </span>
      <p class="text-gray-500">Profile</p>   
      </div>
      </router-link>
       <hr>
        <router-link to="/orders"  class="rounded-2xl  ">
       <div class="mobile rounded-2xl items-center flex h-10 mt-4 pl-2 space-2-x-4 ">
       <span class="material-icons ">
          shopping_bag
          </span>
      <p class="text-gray-500">Orders</p>   
      </div></router-link>
      <router-link to="/deliver"  class="rounded-2xl  ">
       <div class="mobile rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
       <span class="material-icons ">
          delivery_dining
          </span>
      <p class="text-gray-500">Deliveries</p>   
      </div></router-link>
      <router-link to="/shopping-list" class="rounded-2xl">
       <div class="mobile rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
       <span class="material-icons ">
          list
          </span>
      <p class="text-gray-500">Shopping Lists</p>   
      </div></router-link>
        <router-link to="/account-settings" class="rounded-2xl  ">
       <div class="mobile rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
       <span class="material-icons ">
         manage_accounts
          </span>
      <p class="text-gray-500">Account Settings</p>   
      </div></router-link>
       <router-link to="/"  class="rounded-2xl ">
       <div class="mobile rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
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
import Notification from './Notification.vue'
import api from "../api"
import store from "../store/index"
export default {
  name:'navBar',
 components:{
    Dropdown,Notification
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
        
            },
            notif(){
              this.activeBtn=!this.activeBtn
              this.show=!this.show
              api.post('/api/readNotif').then(()=>{
                 store.dispatch('getUnreadNotifications')
              }).catch((errors)=>{
                console.log(errors)
              })
            }
        },
    setup() {
    const currentRoute=computed(()=>{
      return useRoute().name
    })
    return{currentRoute}
  },
  mounted(){
    store.dispatch('getUnreadNotifications')
    api.get('api/user').then((res)=>{
    console.log("uesr id", res.data.indexUserAuthentication)
        window.Echo.private('App.Models.User.' + res.data.indexUserAuthentication)
                  .notification((notification) => {
                    console.log("notif", notification)
                    store.dispatch('getUnreadNotifications')
        });
      })
  },
  computed:{
    unreadNotif(){
      return store.getters.getUnreadNotif.length
    },
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
