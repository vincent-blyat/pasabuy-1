<template>
    <header class="bg-white flex justify-between items-center fixed w-full pt-5 pb-5 pr-4">
    <h3>PASABUY</h3>
   <div class="flex justify-center self-center"> 
    <button  @click="isOpen=!isOpen" class="  focus:outline h-8 w-8 block rounded-full overflow-hidden">
        <img src=# class="rounded-full h-full object-cover w-full border-red-500 border-2">
    </button>   
    </div>
    </header>
    <div class="w-full ">  
    <div v-if="isOpen" class="shadow-xl fixed  right-0 bg-white h-min w-30 float-right rounded-lg py-2 pl-2 pr-4 pt-2 mr-10 mt-12">
    <a href="#" class="flex gap-2 gap-y-10"><span class="material-icons text-gray-500">account_circle</span>Profile</a>
    <router-link to="/orders"> <a href="#" class="flex gap-2"><span class="material-icons text-gray-500">shopping_bag</span>Orders</a></router-link>
    <router-link to="/delivery"><a href="#" class="flex gap-2" ><span class="material-icons text-gray-500">delivery_dining</span>Deliveries</a></router-link>
    <router-link to="/account-settings"><a href="#" class="flex gap-2"><span class="material-icons text-gray-500">manage_accounts</span>Account Setting</a></router-link>
    <router-link to="/" > <a href="#" class="flex gap-2"><span class="material-icons text-gray-500 ">logout</span>Log out</a></router-link>
     </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            isOpen:false
        }
    }
}
</script>
