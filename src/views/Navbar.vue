<template>
<!--Start of Navbar code-->
    <!--profile menu icon-->
  <nav class="shadow-md vs:h-20 vs:bg-red-700 vs:w-full w-full fixed flex items-center justify-between font-nunito p-0 bg-white mt-0  h-min">
      <!--Logo-->
       <div class="flex  items-center ">
       <button class="material-icons hidden ml-4 text-white vs:block" @click="isOpen=!isOpen"> menu</button>
      <p class="uppercase font-bold hidden vs:block text-white h-full">{{currentRoute}}</p>
      <div class="flex items-center left-0">
        <img src="/img/pasaBUYLogo.png" class="w-16 h-16 vs:hidden"/>
        <h1 class="text-3xl font-bold  vs:text-white vs:hidden text-red-700 md:hidden">pasaBUY</h1>
      </div>
       </div>
       <img v-if="currentRoute=='' " src="/img/mobile_logo.png" class="w-16 h-16 hidden vs:block"/>
      <div class=" vs:hidden flex  items-center font-bold gap-x-24 text-gray-500 ">
     <router-link to="/dashboard"> 
     <div class="flex gap-x-4 py-4">
       <span class="material-icons">
        home  
      </span> 
      <span class="text text-gray-500">Home</span>
      </div>
      </router-link>
     <router-link to="/messages"> <div class="flex gap-x-4 py-4">
      <span class="material-icons cursor-pointer">
        chat
      </span>
      <p class=" text-gray-500">Messages</p>
      </div></router-link>
      <div class="flex gap-x-4 py-4">
       <span class="material-icons ">
            notifications
          </span>
      <p class="text-gray-500">Notifications</p>   
      </div>
      </div>
      <div class=" flex  mr-8 gap-x-4 ">
        <div class="flex ">
        <button type="button" name="search" class=" text-left vs:hidden ring-1 ring-gray-400 rounded-2xl w-60   pl-4 pr-12"> search</button>
        <button class="material-icons fixed ml-52 self-center vs:relative vs:text-white vs:m-0">search</button>
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
            isOpen:false
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
.router-link-active{
  color:red;
  border-bottom: 5px solid red;
}

</style>
