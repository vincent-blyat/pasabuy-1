<template>
   <div v-if = "isVisible">
      <div v-on:click.self="close2" class="bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center">
       <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 vs:w-96.7">
          <div class="flex flex-col  mt-4">
  
              <!--Create Post section-->
              <h1 class="items-center justify-center vs:ml-0 ml-12 pb-4 text-gray-900 leading-normal pl-24 text-2xl font-bold text-center">
                  Edit Order Request
                  <button @click.prevent="close2" class=" vs:ml-10 ml-20 focus:outline-none text-sm mb-1 leading-none text-indigo-900">
                  Close
                  </button>
                </h1>
              <!--end-->
               <hr>

  <!--User Profile-->
  <div class="inline-flex space-x-2 items-center justify-start p-4">
    <img class="w-14 h-full border rounded-full border-gray-200" src="img/yami.jpg"/>
    <p class="text-base font-bold leading-none text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
  </div>
  <!--end-->

  <!--Accepting Request Button
  <div class="inline-flex flex-col items-start justify-start pl-5">
     <div class="inline-flex space-x-2 items-center justify-start px-2 py-1 border rounded-full border-gray-500">
         <img class="w-6 h-full rounded-full" src="img/checkcircle.svg"/>
         <p class="text-sm font-bold leading-none text-indigo-900">Accepting Offers</p>
         <button @click="isOpen=!isOpen" >
             <img class="w-6 h-full rounded-full" src="img/arrowdown (1).svg"/>
         </button>
         
         <div class="w-full">
               <div v-if="isOpen" class="shadow-xl fixed bg-white rounded-lg py-2 pl-2 pr-4 pt-2 ">
                 <router-link to="#"  class="flex flex-row gap-x-2 "><span class="material-icons text-gray-500">mode</span>Accepting Request</router-link>
                 <router-link to="#" class="flex flex-row gap-x-2"> <span class="material-icons text-gray-500">delete</span>Accepting Offers</router-link>
             </div>
             </div>
             
     </div>
 </div>-->
 <!--end-->

 <!--Delivery information list-->
  <div class="flex flex-col mt-4 justify-center items-center">
      <div class="flex flex-row space-x-4 w-full justify-center">
         <div class="flex flex-row space-x-2">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
              delivery_dining
             </span>
             <div class="flex items-center justify-start vs:w-44 w-52 h-11 vs:h-12 pl-4 bg-gray-100 rounded-xl">
              <div class="flex flex-col items-start justify-start h-full py-1.5 rounded-2xl">
                  <p class="text-xs font-semibold leading-none text-gray-500">Delivery Area</p>
                  <span>
                    <input type="text" id="input_name" v-model="delivery_info.delivery_area" class="block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-28.5 h-auto">            
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
             <div class="flex items-center justify-start xl:w-52 vs:w-44 h-11 vs:h-12 pl-4 bg-gray-100 rounded-xl">
              <div class="flex flex-col w-full h-full py-1.5 rounded-2xl">
                      <p class="text-xs font-semibold leading-none text-gray-500">Shopping Place</p>
                  <span>
                    <input type="text" id="input_name" v-model="delivery_info.shopping_place" class="block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-28.5 h-auto">            
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
            <div class="flex items-center justify-start vs:w-44 w-52 h-11 vs:h-12 pl-4 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start h-full py-1.5 rounded-2xl">
                 <p class="text-xs font-semibold leading-none text-gray-500">Schedule</p>
                 <span>
                    <input type="text" id="input_name" v-model="delivery_info.schedule" class="block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-28.5 h-auto">            
                   </span>
             </div>
         </div>
        </div>
         
        <div class="flex flex-row space-x-2">
         <span class="rounded-lg mt-1.5 material-icons text-red-700">
         payments
         </span>
         <div class="inline-flex items-center justify-start xl:w-52 vs:w-44 h-11 vs:h-12 pl-4  bg-gray-100 rounded-xl">
          <div class="inline-flex flex-col items-start justify-start h-full py-1.5 rounded-2xl">
              <p class="text-xs font-semibold leading-none text-gray-500">Payment Method</p>
              <span>
                <input type="text" id="input_name" v-model="delivery_info.payment_method" class="block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-28.5 h-auto">            
                </span>
          </div>
      </div>
     </div>
     </div>
     </div>
     <!--end-->

    <div class="justify-center flex ">
<div class="flex flex-col  mt-3 w-31.75 items-start p-4 bg-gray-100 rounded-xl vs:w-26.5">
            <div class="flex w-full flex-row items-end justify-between space-x-4">
                <p class="text-base leading-none text-gray-900">Shopping List {{shopping_info.shoppingID}}</p>
                <button class="text-sm leading-none text-blue-700">Change</button>
            </div>
            <div class="flex w-full justify-between items-center flex-row space-x-4 py-1 px-5">
                <div class="flex flex-col ">
                  <span>
                    • <input type="text" id="input_name" v-model="shopping_info.item1" class="bg-gray-100 focus:outline-none text-sm leading-normal text-gray-900">        
                   </span>
                  <span>
                    • <input type="text" id="input_name" v-model="shopping_info.item2" class="bg-gray-100 focus:outline-none text-sm leading-normal text-gray-900">            
                   </span>
                  <span>
                    • <input type="text" id="input_name" v-model="shopping_info.item3" class="bg-gray-100 focus:outline-none text-sm leading-normal text-gray-900">            
                   </span>
                  <span>
                    • <input type="text" id="input_name" v-model="shopping_info.item4" class="bg-gray-100 focus:outline-none text-sm leading-normal text-gray-900">            
                   </span>
                </div>
                <div class="flex flex-col">
                    <span>
                    • <input type="text" id="input_name" v-model="shopping_info.item5" class="bg-gray-100 focus:outline-none text-sm leading-normal text-gray-900">            
                   </span>
                    <span>
                    • <input type="text" id="input_name" v-model="shopping_info.item6" class="bg-gray-100 focus:outline-none text-sm leading-normal text-gray-900">            
                   </span>
                    <span>
                    • <input type="text" id="input_name" v-model="shopping_info.item7" class="bg-gray-100 focus:outline-none text-sm leading-normal text-gray-900">            
                   </span>
                    <span>
                    • <input type="text" id="input_name" v-model="shopping_info.item8" class="bg-gray-100 focus:outline-none text-sm leading-normal text-gray-900">            
                   </span>
                </div>
            </div>
        </div>
    </div>

     <!--Comment section-->
    <div class="justify-center flex mt-3">
     <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 vs:w-26.5 " placeholder = "Enter your post message here..." v-model="delivery_info.comment"></textarea>
    </div>
    <!--end-->

    <!--Post button-->
    <div class="justify-center flex mt-3 pb-6">
     <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full h-10 w-31.75 vs:w-26.5">
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
    show:true,
        user_info:{
        firstname: 'Yami',
        lastname: 'Sukehiro'
      },
        delivery_info:{
        delivery_area: 'Banquerohan',
        shopping_place: 'SM City Legazpi',
        schedule: 'Tomorrow at 2 PM',
        payment_method: 'Payment First',
        comment: 'Hi! If there’s anyone who can help me and sabuy my groceries, I would greatly appreciate it. Send me an offer if you’re willing. Thanks!',
        status: 'No Longer Accepting Requests'
      },
       shopping_info:{
        shoppingID: '1',
        item1: 'flour (1 kg)',
        item2: 'vanilla extract (50 mL)',
        item3: 'brown sugar',
        item4: 'cocoa powder',
        item5: 'baking soda',
        item6: 'chocolate syrup',
        item7: 'powdered sugar',
        item8: 'cocoa powder',       
      },
        }
    },
    methods: {
        close2(){
            this.$emit('closeModal2')
        },
        Edit(pars) {
      let x=document.getElementById(pars).innerHTML;
      if(x=='Change'){
          document.getElementById(pars).innerHTML="Save";
          
      }
      else{
         document.getElementById(pars).innerHTML="Change";
      }
    },
    },
}
</script>