<template>
    <div class=" hidden w-3/5 space-y-4 shadow-md mt-16 fixed vs:flex flex-col ring-1 ring-gray-200 bg-white  text-gray-600 font-bold  px-2 py-2">
    <div class="flex   ">
        <img src="/img/pasaBUYLogoOnly.png" class="w-12 h-10">
        <p class="text-2xl text-red-700 font-extrabold">pasaBUY</p>
    </div>
     <router-link to="/dashboard" class="rounded-2xl   ">  
     <div class="rounded-2xl items-center flex pl-2 h-10 space-x-2 ">
       <span class="material-icons">
        home  
      </span> 
      <span class="text text-gray-500">Home</span>
      </div>
      </router-link>
     <router-link to="/messages"  class="rounded-2xl   "> 
     <div class="rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
      <span class="material-icons cursor-pointer">
        chat
      </span>
      <p class=" text-gray-500">Messages</p>
      </div></router-link>
      <router-link to="/ss"  class="rounded-2xl   "> 
      <div class="rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
       <span class="material-icons ">
            notifications
          </span>
      <p class="text-gray-500">Notifications</p>   
      </div></router-link>
      <router-link to="/edit-profile" class="rounded-2xl">
      <div class="rounded-2xl items-center flex h-10 pl-2 space-x-2 ">
       <span class="material-icons ">
            account_circle
          </span>
      <p class="text-gray-500">Profile</p>   
      </div>
      </router-link>
      <hr>
      <router-link to="/orders"  class="rounded-2xl  ">
       <div class="rounded-2xl items-center flex h-10 pl-2 space-2-x-4 ">
       <span class="material-icons ">
          shopping_bag
          </span>
      <p class="text-gray-500">Orders</p>   
      </div></router-link>
      <router-link to="/orders"  class="rounded-2xl  ">
       <div class="rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
       <span class="material-icons ">
          delivery_dining
          </span>
      <p class="text-gray-500">Deliveries</p>   
      </div></router-link>
        <router-link to="/deliver" class="rounded-2xl">
       <div class="rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
       <span class="material-icons ">
          list
          </span>
      <p class="text-gray-500">Shopping Lists</p>   
      </div></router-link>
        <router-link to="/shopping-list" class="rounded-2xl  ">
       <div class="rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
       <span class="material-icons ">
         manage_accounts
          </span>
      <p class="text-gray-500">Account Settings</p>   
      </div></router-link>
       <router-link to="/account-settings"  class="rounded-2xl ">
       <div class="rounded-2xl items-center flex h-10 space-x-2 pl-2 ">
       <span class="material-icons ">
         logout
          </span>
      <p class="text-gray-500">Log Out</p>   
      </div></router-link>
      
    </div>
</template>
<style scoped>
.router-link-active{
  color:red;
 background-color: rgba(236, 233, 233, 0.705);
}

</style>