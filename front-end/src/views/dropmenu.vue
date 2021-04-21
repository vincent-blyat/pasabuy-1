<template>
    <div class="border-black ">
        <button @click="isOpen=!isOpen" class="  h-10 w-10 border-2 rounded-full border-red-700">
        <img class="h-9.7 w-10 rounded-full" :src="userPersonal.profilePicture" style="object-fit:cover; vertical-align:middle">
        </button>
      </div>
    <div class="w-full ">  
    <div v-if="isOpen" class="shadow-xl fixed bg-white space-y-2  h-auto w-30 ring-2 ring-gray-200 right-0 rounded-lg py-2 pl-2 pr-4 pt-2 mr-16 mt-2">
    <button @click="setDispatches(userPersonal.email)"><router-link :to="'/edit-profile/?ID='+toEncrypt(userPersonal.email)"  class="flex flex-row gap-x-2 text-black"><span class="material-icons text-gray-500">account_circle</span>Profile</router-link></button>
    <router-link to="/orders" class="flex flex-row gap-x-2 text-black"> <span class="material-icons text-gray-500">shopping_bag</span>Orders</router-link>
    <router-link to="/deliver" class="flex flex-row gap-x-2 text-black"><span class="material-icons text-gray-500">delivery_dining</span>Deliveries</router-link>
    <router-link to="/shopping-list" class="flex flex-row gap-x-2 text-black"><span class="material-icons text-gray-500">list</span>Shopping Lists</router-link>
    <router-link to="/account-settings" class="flex flex-row gap-x-2 text-black"><span class="material-icons text-gray-500">manage_accounts</span>Account Setting</router-link>
    <button @click="logout" class="flex flex-row gap-x-2 text-black"><span class="material-icons text-gray-500 ">logout</span>Log out</button>
     <p class="text-gray-500 text-sm">
        Privacy Policy-Cookies Policy-Terms and Conditions<br>
        Return and Refund Policy-PasaBuy   2021
    </p>
    </div>
   
    </div>
</template>

<script>
import api from '../api'
import store from '../store/index'
export default {
  data() {
    return {
      isOpen: false,
    };
  },
  components: {}, 
  methods:{
    logout(){
        console.log('logout');
         window.Echo.leave('App.Models.User.'+this.user.indexUserAuthentication)
        api.post('api/logout').then(()=>{
          sessionStorage.removeItem('vuex');
          sessionStorage.removeItem('isLoggedIn');
          this.$router.push({name:"Home"});
        })
    },
    toEncrypt(val){
      return btoa(val)
    },
       async setDispatches(email){
      console.log('dispatch this', email)
      await store.dispatch('getUserInfo',email)
      await store.dispatch('getNotAuthUserAddress',email)
      return
    }
  },
    computed:{
    user(){
      return store.getters.getUser
    },
    userPersonal(){
      return store.getters.getPersonal
    },
  },
}
</script>
