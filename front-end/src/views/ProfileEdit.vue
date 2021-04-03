<template>
<Navbar/>
    <!--Profile code-->
    <div class="pt-122 bg-gray-100 font-nunito">
   <div class="flex flex-col justify-center items-center bg-white h-auto pt-10 ">
   <div class="flex flex-row vs:space-x-4 md:space-x-10 sm:space-x-6 space-x-16 vs:pr-12 lvs:pr-24 sm:pr-0 md:pr-12 pr-48">
    <div class="flex">
        <img class="w-40 h-40 vs:w-20 vs:h-20 sm:w-20 sm:h-20 border rounded-full border-gray-700 shadow-md" src="img/yami.jpg"/>
      </div>
        <div class="flex flex-col">
         <div class="flex flex-row vs:flex-col vs:space-x-0  sm:space-x-2 space-x-4">
          <div>
           <p class="text-3xl vs:text-xl sm:text-xl font-bold  sm:mt-1 tracking-wide leading-normal text-gray-900">{{personal.firstname}} {{personal.lastname}}
            <span class="pb-1 text-blue-900 align-middle material-icons md-24">
             verified
            </span>
           </p>
          </div>
          <div class="inline-flex vs:mt-1 vs:items-start vs:justify-start sm:mt-0 items-center justify-end">
           <div class="flex items-center justify-center vs:pl-6 vs:pr-6 pl-5 pr-4 bg-white bg-opacity-50 border-2 rounded-full border-gray-900">
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
                 <p class="text-sm vs:text-xs leading-none pt-1 text-gray-700">{{address_info.barangay}}, {{address_info.city}}</p>
                </div>
                <div class="inline-flex space-x-2">
                 <span class="rounded-full material-icons text-black">
              phone_enabled  
              </span>
                 <p class="text-sm vs:text-xs leading-none pt-1 text-gray-700">{{personal.phone_number}}</p>
                </div>
                <div class="inline-flex space-x-2">
                 <span class="rounded-full material-icons text-black">
              alternate_email  
              </span>
                 <p class="text-sm leading-none vs:text-xs pt-1 text-gray-700">{{account_info.email}}</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="hidden vs:flex flex-col pr-60 py-2 sm:pr-10 vs:pr-20 lvs:pr-36">
            <div class="flex flex-col py-3 space-y-2">
                <div class="inline-flex space-x-2">
                 <span class=" rounded-full material-icons text-black">
              location_on  
              </span>
                 <p class="text-sm leading-none pt-1 text-gray-700">{{address_info.barangay}}, {{address_info.city}}</p>
                </div>
                <div class="inline-flex space-x-2">
                 <span class="rounded-full material-icons text-black">
              phone_enabled  
              </span>
                 <p class="text-sm leading-none pt-1 text-gray-700">{{personal.phone_number}}</p>
                </div>
                <div class="inline-flex space-x-2">
                 <span class="rounded-full material-icons text-black">
              alternate_email  
              </span>
                 <p class="text-sm leading-none pt-1 text-gray-700">{{account_info.email}}</p>
                </div>
            </div>
            </div>
             <div class="hidden vs:flex flex-row  space-x-8 pr-56 sm:pr-4 vs:pr-16 lvs:pr-32">
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
    <div class="flex flex-row vs:space-x-2 lvs:space-x-4 sm:space-x-8 space-x-14 mt-6 vs:min-w-0 sm:min-w-0 vs:mt-3 pb-2 ">
        <div @click=" isActive_function('btn1')" :class="{active: activeBtn === 0 }" >
         <button @click="toggle" class="focus:outline-none text-sm vs:text-xs font-bold font-nunito tracking-wide vs:tracking-normal leading-none text-center text-black uppercase">Shopping offers</button>
        </div>
        <div @click=" isActive_function('btn2')" :class="{active: activeBtn === 'btn2' }">
         <button @click ="toggle2" class="focus:outline-none text-sm vs:text-xs font-bold font-nunito tracking-wide vs:tracking-normal leading-none text-center text-black uppercase">Order requests</button>
        </div>
        <div @click=" isActive_function('btn3')" :class="{active: activeBtn === 'btn3' }">
         <button @click="toggle3" class="focus:outline-none text-sm vs:text-xs font-bold font-nunito tracking-wide vs:tracking-normal leading-none text-center text-gray-900 uppercase">reviews</button>
        </div>
        <div @click=" isActive_function('btn4')" :class="{active: activeBtn === 'btn4' }" >
         <button @click="toggle4" class="focus:outline-none text-sm vs:text-xs vs:pr-1 font-bold font-nunito tracking-wide vs:tracking-normal leading-none text-center text-gray-900 uppercase">about</button>
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
            activeBtn:0,
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
    isActive_function(el){
     if(el=='btn1'){
      this.activeBtn= 0;
    }
    else {
        this.activeBtn= el;
        }
    },
}
}
</script>
<style scoped>
.active {
  color:red;  
  border-bottom: solid red 5px;
}
.active button{
  color:red;
}
</style>