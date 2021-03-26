<template>
<Navbar/>
    <!--Profile code-->
    <div class="pt-17 bg-gray-100">
   <div class="flex flex-col vs:justify-start vs:items-start vs:pl-4 vs:w-vs justify-center items-center bg-white w-lg h-auto pt-10 ">
   <div class="flex flex-row vs:space-x-4 space-x-16 pr-48">
    <div class="flex">
        <img class="w-40 h-40 vs:w-16 vs:h-16 border rounded-full border-gray-700 shadow-md" src="img/yami.jpg"/>
      </div>
        <div class="flex flex-col">
         <div class="flex flex-row vs:flex-col  xl:space-x-4">
          <div>
           <p class="text-3xl vs:text-base font-bold  tracking-wide leading-normal text-gray-900">{{personal.firstname}} {{personal.lastname}}
            <span class="pb-1 text-blue-900 align-middle material-icons md-24">
             verified
            </span>
           </p>
          </div>
          <div class="inline-flex mt-2 vs:items-start vs:justify-start items-center justify-end w-34 h-8">
           <div class="flex items-center justify-center h-full pl-5 pr-4 bg-white bg-opacity-50 border-2 rounded-full border-gray-900">
            <button class="flex-1 text-base font-bold focus:outline-none tracking-wider leading-loose text-center text-gray-900">
            <router-link to="/account-settings" > Edit Profile </router-link></button>
           </div>
          </div>
          </div>
         <div class="flex flex-col vs:hidden">
          <div class="flex flex-row vs:space-x-4 space-x-8 py-3">
            <div class="flex space-x-2 vs:justify-start vs:items-start items-center justify-center">
             <p class="text-base font-bold leading-none text-gray-900">{{account_info.countFollowing}}</p>
             <button class="focus:outline-none text-base leading-none text-gray-900">Following</button>
            </div>
            <div class="flex space-x-2 items-start justify-start h-4">
             <p class="w-1/5 text-base font-bold leading-none text-gray-900">{{account_info.countFollowers}}</p>
             <button @click="togglePostModal3" class="focus:outline-none text-base leading-none text-gray-900">Followers</button>
             <!--Modal-->
             <Followers v-if="postModalVisible3" @closeModal3="listener3"/>
             <!--end--> 
            </div>
          </div>
            <div class="flex flex-col py-3 space-y-2">
                <div class="inline-flex space-x-2">
                 <span class=" rounded-full material-icons text-black">
              location_on  
              </span>
                 <p class="text-sm leading-none pt-1 text-gray-900">{{address_info.barangay}}, {{address_info.city}}</p>
                </div>
                <div class="inline-flex space-x-2">
                 <span class="rounded-full material-icons text-black">
              phone_enabled  
              </span>
                 <p class="text-sm leading-none pt-1 text-gray-900">{{personal.phone_number}}</p>
                </div>
                <div class="inline-flex space-x-2">
                 <span class="rounded-full material-icons text-black">
              alternate_email  
              </span>
                 <p class="text-sm leading-none pt-1 text-gray-900">{{account_info.email}}</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="hidden vs:flex flex-col ">
          <div class="flex flex-row vs:hidden space-x-8 py-3">
            <div class="flex space-x-2 vs:justify-start vs:items-start items-center justify-center">
             <p class="text-base font-bold leading-none text-gray-900">{{account_info.countFollowing}}</p>
             <button class="focus:outline-none text-base leading-none text-gray-900">Following</button>
            </div>
            <div class="flex space-x-2 items-start justify-start h-4">
             <p class="w-1/5 text-base font-bold leading-none text-gray-900">{{account_info.countFollowers}}</p>
             <button @click="togglePostModal3" class="focus:outline-none text-base leading-none text-gray-900">Followers</button>
             <!--Modal-->
             <Followers v-if="postModalVisible3" @closeModal3="listener3"/>
             <!--end--> 
            </div>
          </div>
            <div class="flex flex-col py-3 space-y-2">
                <div class="inline-flex space-x-2">
                 <span class=" rounded-full material-icons text-black">
              location_on  
              </span>
                 <p class="text-sm leading-none pt-1 text-gray-900">{{address_info.barangay}}, {{address_info.city}}</p>
                </div>
                <div class="inline-flex space-x-2">
                 <span class="rounded-full material-icons text-black">
              phone_enabled  
              </span>
                 <p class="text-sm leading-none pt-1 text-gray-900">{{personal.phone_number}}</p>
                </div>
                <div class="inline-flex space-x-2">
                 <span class="rounded-full material-icons text-black">
              alternate_email  
              </span>
                 <p class="text-sm leading-none pt-1 text-gray-900">{{account_info.email}}</p>
                </div>
            </div>
            </div>
             <div class="hidden vs:flex flex-row  space-x-8 ">
            <div class="flex space-x-2 vs:justify-start vs:items-start items-center justify-center">
             <p class="text-base font-bold leading-none text-gray-900">{{account_info.countFollowing}}</p>
             <button class="focus:outline-none text-base leading-none text-gray-900">Following</button>
            </div>
            <div class="flex space-x-2 items-start justify-start h-4">
             <p class="w-1/5 text-base font-bold leading-none text-gray-900">{{account_info.countFollowers}}</p>
             <button @click="togglePostModal3" class="focus:outline-none text-base leading-none text-gray-900">Followers</button>
             <!--Modal-->
             <Followers v-if="postModalVisible3" @closeModal3="listener3"/>
             <!--end--> 
            </div>
          </div>
    <div class="flex flex-row vs:space-x-7 space-x-14 mt-6 pb-2">
        <div>
         <button @click="toggle" class="focus:outline-none text-sm font-bold tracking-wide leading-none text-center text-gray-900 uppercase">Shopping offers</button>
        </div>
        <div>
         <button @click ="toggle2" class="focus:outline-none text-sm font-bold tracking-wide leading-none text-center text-gray-900 uppercase">Order requests</button>
        </div>
        <div>
         <button @click="toggle3" class="focus:outline-none text-sm font-bold tracking-wide leading-none text-center text-gray-900 uppercase">reviews</button>
        </div>
        <div>
         <button @click="toggle4" class="focus:outline-none text-sm font-bold tracking-wide leading-none text-center text-gray-900 uppercase">about</button>
        </div>
    </div>
   </div>
   </div>
  <component :is="component" />
</template>

<script>
import Navbar from './Navbar'
import ShoppingOffers from './ShoppingOffers'
import ShoppingOrders from './ShoppingOrders'
import ShoppingReviews from './ShoppingReviews'
import ShoppingAbout from './ShoppingAbout'
import Followers from './followersModal'
export default {
  data(){
        return{
            component: "ShoppingOffers",
            component2: "ShoppingOrders",
            component3: "ShoppingReviews",
            component4: "ShoppingAbout",
            postModalVisible3: false,
            hide: false,
            available: false,
            personal:  {
              firstname:'Yami',
              lastname:'Sukehiro',
              phone_number:'+63 912 345 6789',
          },
          address_info:{
            city:'Legaspi City',
            barangay:'Banquerohan'
          },
          account_info:{
           email:'sarah_panadero@gmail.com',
           countFollowing: '37',
           countFollowers: '29'
          },
        }
  },
  
  components: {
   Navbar,
   ShoppingOffers,
   ShoppingOrders,
   ShoppingReviews,
   ShoppingAbout,
   Followers,
  },

  methods: {
    toggle(){
      if(this.component != ShoppingOffers)
        this.component = ShoppingOffers;
    },
     toggle2(){
      if(this.component != ShoppingOrders)
        this.component = this.component2;
    },
    toggle3(){
       if(this.component != ShoppingOrders)
        this.component = this.component3;
    },
    toggle4(){
      if(this.component != ShoppingOrders)
        this.component = this.component4;
    },
     togglePostModal3(){
      this.postModalVisible3 = !this.postModalVisible3
    },
    listener3(){
      this.postModalVisible3 = false;
  },
}
}
</script>

<style scoped>
</style>