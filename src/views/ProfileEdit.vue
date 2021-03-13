<template>
<Navbar/>
    <!--Profile code-->
    <div class="flex items-start w-full justify-center px-64 pt-8 pb-60 mt-1 bg-white shadow h-16">
      <div class="flex space-x-8 items-center justify-center pr-48" >
        <!--profile picture-->
        <div class="flex ">
          <img class="w-40 h-40 border rounded-full border-gray-500" src="img/yami.jpg"/>
        </div>
      <!--end-->

       <!--Profile Name-->
       <div class="flex-col space-x-4 items-center justify-center">
        <div class="flex space-x-4 items-start relative px-4 left-3 justify-start">
            <p class="text-3xl font-bold  tracking-wide leading-normal text-gray-900">Yami Sukehiro</p>
            <div class="flex items-center justify-center w-6 h-full">
                <div class="flex-1 h-full bg-white rounded-full"></div>
            </div>
            <div class="inline-flex mt-2 items-center justify-end w-34 h-8">
              <div class="flex items-center justify-center h-full pl-5 pr-4 bg-white bg-opacity-50 border-2 rounded-lg border-gray-900">
                  <button class="flex-1 text-base font-bold tracking-wider leading-loose text-center text-gray-900">Edit Profile</button>
              </div>
          </div>
        </div>

        <!--following/followers code-->
        <div class="flex space-x-8 p-3 items-start justify-start">
          <div class="flex space-x-2 items-center justify-center">
              <p class="text-base font-bold leading-none text-gray-900">37</p>
              <p class="text-base leading-none text-gray-900">Following</p>
          </div>
          <div class="flex space-x-2 items-start justify-start h-4">
              <p class="w-1/5 text-base font-bold leading-none text-gray-900">29</p>
              <p class="text-base leading-none text-gray-900">Followers</p>
          </div>
      </div>
      <!--end-->

      <!--contact info code-->
      <div class="inline-flex flex-col space-y-2 p-3 items-start justify-start">
        <div class="inline-flex space-x-2 items-center justify-center">
            <img class="w-4 h-full rounded-full" src="img/location.svg"/>
            <p class="text-sm leading-none text-gray-900">Banquerohan, Legazpi City</p>
        </div>
        <div class="inline-flex space-x-2 items-center justify-center">
            <img class="w-4 h-full rounded-full" src="img/phone.svg"/>
            <p class="text-sm leading-none text-gray-900">+63 912 345 6789</p>
        </div>
        <div class="inline-flex space-x-2 items-center justify-center">
            <img class="w-4 h-full rounded-full" src="img/email.svg"/>
            <p class="text-sm leading-none text-gray-900">sarah_panadero@gmail.com</p>
        </div>
      </div>
      <!--end-->
       </div>
       <!--end of profile name code-->
        </div>
        <!--end of profile code-->

         <!--profile menu-->
    <div class="flex space-x-12 absolute mt-6 mt-40 pt-10">
      <div class="items-start justify-start p-2">
          <button @click="toggle" class="text-sm font-bold tracking-wide leading-none text-center text-red-700 uppercase">Shopping offers</button>
      </div>
      <div class="items-start justify-start p-2">
          <button @click ="toggle2" class="text-sm font-bold tracking-wide leading-none text-center text-gray-900 uppercase">Order requests</button>
      </div>
      <div class="items-start justify-start p-2">
          <button @click="toggle3" class="text-sm font-bold tracking-wide leading-none text-center text-gray-900 uppercase">reviews</button>
      </div>
      <div class="items-start justify-start p-2">
          <button @click="toggle4" class="text-sm font-bold tracking-wide leading-none text-center text-gray-900 uppercase">about</button>
      </div>
      </div>
      <!--profile menu end-->
    </div>
  <!--profile code end-->
  <component v-bind:is="component" />
</template>

<script>
import Navbar from './Navbar'
import ShoppingOffers from './ShoppingOffers'
import ShoppingOrders from './ShoppingOrders'
import ShoppingReviews from './ShoppingReviews'
import ShoppingAbout from './ShoppingAbout'
export default {
  data(){
        return{
            component: "ShoppingOffers",
            component2: "ShoppingOrders",
            component3: "ShoppingReviews",
            component4: "ShoppingAbout"
        }
  },
  
  components: {
   Navbar,
   ShoppingOffers,
   ShoppingOrders,
   ShoppingReviews,
   ShoppingAbout
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
    }
  }
}
</script>