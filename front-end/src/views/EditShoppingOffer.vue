<template>
   <div v-if = "isVisible">
      <div v-on:click.self="close1" class="bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center">
       <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto" style="width: 550px;">
          <div class="flex flex-col  mt-4">
  
              <!--Create Post section-->
              <h1 class="items-center justify-center ml-12 pb-4 text-gray-900 leading-normal pl-24 text-2xl font-bold text-center">
                  Edit Shopping Offer
                  <button @click.prevent="close1" class=" ml-20 focus:outline-none text-sm mb-1 leading-none text-indigo-900">
                  Close
                  </button>
                </h1>
              <!--end-->
               <hr>

  <!--User Profile-->
  <div class="inline-flex space-x-2 items-center justify-start p-4 mt-2">
    <img class="w-14 h-full border rounded-full border-gray-200" src="img/yami.jpg"/>
    <p class="text-base font-bold leading-none text-gray-900">Yami Sukehiro</p>
  </div>
  <!--end-->

  <!--Accepting Request Button-->
  <div class="inline-flex flex-col items-start justify-start pl-5 mt-2">
     <div class="inline-flex space-x-2 items-center justify-start px-2 py-1 border rounded-full border-gray-500">
         <img class="w-6 h-full rounded-full" src="img/checkcircle.svg"/>
         <p class="text-sm font-bold leading-none text-indigo-900">Accepting Requests</p>
         <button @click="isOpen=!isOpen" >
             <img class="w-6 h-full rounded-full" src="img/arrowdown (1).svg"/>
         </button>
         <!---
         <div class="w-full">
               <div v-if="isOpen" class="shadow-xl fixed bg-white rounded-lg py-2 pl-2 pr-4 pt-2 ">
                 <router-link to="#"  class="flex flex-row gap-x-2 "><span class="material-icons text-gray-500">mode</span>Accepting Request</router-link>
                 <router-link to="#" class="flex flex-row gap-x-2"> <span class="material-icons text-gray-500">delete</span>Accepting Offers</router-link>
             </div>
             </div>
             --->
     </div>
 </div>
 <!--end-->

 <!--Delivery information list-->
  <div class="flex flex-col mt-4 justify-center items-center">
      <div class="flex flex-row space-x-4 w-full justify-center">
         <div class="flex flex-row space-x-2">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
              delivery_dining
             </span>
             <div class="flex items-center justify-start w-52 h-11 pl-4 bg-gray-100 rounded-xl">
              <div class="flex flex-col items-start justify-start w-52 h-full py-1.5 rounded-2xl">
                  <p class="text-xs font-semibold leading-none text-gray-500">Delivery Area</p>
                  <span>
                    <input type="text" id="input_name" v-model="delivery_info.delivery_area" class="block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 h-auto">            
                   </span>
              </div>
          </div>
         </div>
          
         <div class="flex flex-row space-x-2">
             <div>
              <span class="rounded-lg mt-1.5 material-icons text-red-700">
              shopping_cart
              </span>
             </div>
             <div class="flex items-center justify-start w-52 h-11 pl-4 bg-gray-100 rounded-xl">
              <div class="flex flex-col w-full h-full py-1.5 rounded-2xl">
                      <p class="text-xs font-semibold leading-none text-gray-500">Shopping Place</p>
                   <span>
                    <input type="text" id="input_name" v-model="delivery_info.shopping_place" class="block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 h-auto">            
                   </span>
              </div>
          </div>
         </div>
      </div>

      <div class="flex flex-row pt-3 space-x-4 w-full justify-center">
        <div class="flex flex-row space-x-2">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
             alarm
             </span>
            <div class="flex items-center justify-start w-52 h-11 pl-4 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start h-full py-1.5 rounded-2xl">
                 <p class="text-xs font-semibold leading-none text-gray-500">Schedule</p>
                  <span>
                    <input type="text" id="input_name" v-model="delivery_info.schedule" class="block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 h-auto">            
                   </span>
             </div>
         </div>
        </div>
         
        <div class="flex flex-row space-x-2">
         <span class="rounded-lg mt-1.5 material-icons text-red-700">
         directions_car
         </span>
         <div class="inline-flex items-center justify-start w-52 h-11 pl-4  bg-gray-100 rounded-xl">
          <div class="inline-flex flex-col items-start justify-start h-full py-1.5 rounded-2xl">
              <p class="text-xs font-semibold leading-none text-gray-500">Public Transit</p>
               <span>
                <input type="text" id="input_name" v-model="delivery_info.public_transit" class="block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 h-auto">            
                </span>
          </div>
      </div>
     </div>
     </div>

     <div class="flex flex-row pt-3 space-x-4 w-full justify-center">
        <div class="flex flex-row space-x-2">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
             shopping_bag
             </span>
            <div class="flex items-center justify-start w-52 h-11 pl-4 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start h-full py-1.5 rounded-2xl">
                 <p class="text-xs font-semibold leading-none text-gray-500">Capacity</p>
                 <span>
                 <input type="text" id="input_name" v-model="delivery_info.capacity" class="block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 h-auto">            
                 </span>
             </div>
         </div>
        </div>
         
        <div class="flex flex-row space-x-2">
         <span class="rounded-lg mt-1.5 material-icons text-red-700">
         payments
         </span>
         <div class="inline-flex items-center justify-start w-52 h-11 pl-4  bg-gray-100 rounded-xl">
          <div class="inline-flex flex-col items-start justify-start h-full py-1.5 rounded-2xl">
              <p class="text-xs font-semibold leading-none text-gray-500">Payment Method</p>
               <span>
                <input type="text" id="input_name" v-model="delivery_info.payment_method" class="block bg-gray-100 focus:outline-none text-sm leading-7 text-gray-900 w-44 h-auto">            
                </span>
          </div>
      </div>
     </div>
     </div>
     </div>
     <!--end-->

     <!--Comment section-->
    <div class="justify-center flex mt-6">
     <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm sm:text-sm rounded-2xl rounded-md outline-none h-auto" placeholder = "Enter your post message here..." v-model="delivery_info.comment" style="width: 508px;"></textarea>
    </div>
    <!--end-->

    <!--Post button-->
    <div class="justify-center flex mt-6 pb-6">
     <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full" style="width: 508px; height: 40px;">
         <p class="text-base font-bold leading-normal text-center text-white">Post</p>
     </button>
    </div>
    <!--end-->

  </div>
  </div>
  </div>
  </div>
    <!--end-->
</template>

<script>
export default {
    data(){
        return {
        isVisible: true,
        hidden: false,
        delivery_info:{
        delivery_area: 'Banquerohan',
        shopping_place: 'SM City Legazpi',
        schedule: 'Tomorrow at 2 PM',
        public_transit: 'Public Transit',
        capacity: '2 medium bags',
        payment_method: 'Payment First',
        comment: 'Hi! I’ll be going to SM City Legazpi tomorrow. If there’s anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request!',
        status: 'No Longer Accepting Requests'
      },
        }
    },
    methods: {
        close1(){
            this.$emit('closeModal1')
        },
    },
}
</script>