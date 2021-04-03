<template>
      <div v-on:click.self="close1" class="bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center sm:px-2 vs:px-2">
       <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 vs:w-full sm:w-full">
          <div class="flex flex-col  mt-4">
  
              <!--Create Post section-->
              <h1 class="items-center justify-center vs:ml-0 ml-12 pb-4 text-gray-900 leading-normal vs:pl-22 pl-24 text-2xl vs:text-xl font-bold text-center">
                  Edit Shopping Offer
                  <button @click.prevent="close1" class=" vs:ml-6 ml-20 focus:outline-none text-sm vs:text-xs mb-1 leading-none text-indigo-900">
                  Close
                  </button>
                </h1>
              <!--end-->
               <hr>

  <!--User Profile-->
  <div class="inline-flex space-x-2 items-center justify-start p-4 mt-2 vs:mt-1">
    <img class="w-14 h-full vs:w-12 border rounded-full border-gray-200" src="img/yami.jpg"/>
    <p class="text-base vs:text-sm lvs:text-base font-bold leading-none text-gray-900">Yami Sukehiro</p>
  </div>
  <!--end-->

 <!--Delivery information list-->
  <div class="flex flex-col mt-4 vs:mt-1 vs:px-2 justify-center items-center">
      <div class="flex flex-row space-x-4 justify-center">
         <div class="flex flex-row space-x-2">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
              delivery_dining
             </span>
             <div class="flex items-center justify-start vs:w-full w-52 h-11 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
              <div class="flex flex-col items-start justify-start w-52 vs:w-full h-full py-1.5 rounded-2xl">
                  <p class="text-xs font-semibold leading-none text-gray-500">Delivery Area</p>
                  <span>
                    <input type="text" id="input_name" v-model="delivery_info.delivery_area" class="block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 vs:w-full h-auto">            
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
             <div class="flex items-center justify-start w-52 vs:w-full h-11 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
              <div class="flex flex-col w-52 vs:w-full h-full py-1.5 rounded-2xl">
                      <p class="text-xs font-semibold leading-none text-gray-500">Shopping Place</p>
                   <span>
                    <input type="text" id="input_name" v-model="delivery_info.shopping_place" class="block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 vs:w-full h-auto">            
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
            <div class="flex items-center justify-start vs:w-full w-52 h-11 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start h-full py-1.5 vs:w-full rounded-2xl">
                 <p class="text-xs font-semibold leading-none text-gray-500">Schedule</p>
                  <span>
                    <input type="text" id="input_name" v-model="delivery_info.schedule" class="block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 vs:w-full h-auto">            
                   </span>
             </div>
         </div>
        </div>
         
        <div class="flex flex-row space-x-2">
         <span class="rounded-lg mt-1.5 material-icons text-red-700">
         directions_car
         </span>
         <div class="inline-flex items-center justify-start xl:w-52 vs:w-full h-11 vs:h-12 px-4 vs:px-2  bg-gray-100 rounded-xl">
          <div class="inline-flex flex-col items-start justify-start w-full h-full py-1.5 rounded-2xl">
              <p class="text-xs font-semibold leading-none text-gray-500">Public Transit</p>
               <span>
                <input type="text" id="input_name" v-model="delivery_info.public_transit" class="block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 vs:w-full h-auto">            
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
            <div class="flex items-center justify-start vs:w-full w-52 h-11 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start w-full h-full py-1.5 rounded-2xl">
                 <p class="text-xs font-semibold leading-none text-gray-500">Capacity</p>
                 <span>
                 <input type="text" id="input_name" v-model="delivery_info.capacity" class="block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-full h-auto">            
                 </span>
             </div>
         </div>
        </div>
         
        <div class="flex flex-row space-x-2">
         <span class="rounded-lg mt-1.5 material-icons text-red-700">
         payments
         </span>
         <div class="inline-flex items-center justify-start w-52 vs:w-full h-11 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
          <div class="inline-flex flex-col items-start justify-start vs:w-full h-full py-1.5 rounded-2xl">
              <p class="text-xs font-semibold leading-none text-gray-500">Payment Method</p>
               <span>
                <input type="text" id="input_name" v-model="delivery_info.payment_method" class="block bg-gray-100 focus:outline-none text-sm leading-7 text-gray-900 w-44 vs:w-full h-auto">            
                </span>
          </div>
      </div>
     </div>
     </div>
     </div>
     <!--end-->

     <!--Comment section-->
    <div class="justify-center flex mt-6 vs:px-2">
     <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm text-sm vs:text-xs lvs:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 vs:w-full" placeholder = "Enter your post message here..." v-model="delivery_info.comment"></textarea>
    </div>
    <!--end-->

    <!--Post button-->
    <div class="justify-center flex mt-6 pb-6 px-2 ">
     <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 vs:w-full h-10">
         <p class="text-base vs:text-sm font-bold leading-normal text-center text-white">Post</p>
     </button>
    </div>
    <!--end-->

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