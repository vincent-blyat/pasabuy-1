<template>
    <div class="border-black ">
        <button @click="isOpen=!isOpen" class="  h-10 w-10 border-2 rounded-full border-red-700">
        <img class="h-9.7 w-10 rounded-full" src="/img/yami.jpg">
        </button>
      </div>
    <div class="w-full ">  
    <div v-if="isOpen" class="shadow-xl fixed bg-white space-y-2  h-auto w-30 ring-2 ring-gray-200 right-0 rounded-lg py-2 pl-2 pr-4 pt-2 mr-16 mt-2">
    <router-link to="/edit-profile"  class="flex flex-row gap-x-2 "><span class="material-icons text-gray-500">account_circle</span>Profile</router-link>
    <router-link to="/orders" class="flex flex-row gap-x-2"> <span class="material-icons text-gray-500">shopping_bag</span>Orders</router-link>
    <router-link to="/deliver" class="flex flex-row gap-x-2"><span class="material-icons text-gray-500">delivery_dining</span>Deliveries</router-link>
    <router-link to="/shopping-list" class="flex flex-row gap-x-2"><span class="material-icons text-gray-500">list</span>Shopping Lists</router-link>
    <router-link to="/account-settings" class="flex flex-row gap-x-2"><span class="material-icons text-gray-500">manage_accounts</span>Account Setting</router-link>
    <router-link to="/" class="flex flex-row gap-x-2"><span class="material-icons text-gray-500 ">logout</span>Log out</router-link>
    </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            isOpen:false
        }
    },
     components:{
    
  }
}
</script>