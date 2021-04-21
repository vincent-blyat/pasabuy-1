<template>
      <div v-on:click.self="close2" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center sm:px-2 ssm:px-2 vs:px-2 vs:w-full">
       <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 ssm:w-full sm:w-full vs:w-full">
          <div class="flex flex-col  mt-4">
  
              <!--Create Post section-->
              <h1 class="items-center justify-center vs:ml-0 ml-12 sm:ml-8  se:pl-14 se:ml-0 ssm:pl-11 ssm:ml-0 ssm:text-lg pb-4 text-gray-900 leading-normal vs:pl-22 pl-24 text-2xl vs:text-xl font-bold text-center">
                  Edit Order Request
                  <button @click.prevent="close2" class=" vs:ml-6 ml-20 sm:ml-14 se:ml-4 ssm:ml-3 ssm:text-xs focus:outline-none text-sm vs:text-xs  mb-1 leading-none text-indigo-900">
                  Close
                  </button>
                </h1>
              <!--end-->
               <hr>

  <!--User Profile-->
  <div class="inline-flex space-x-2 items-center justify-start p-4 ">
    <img class="w-14 h-full vs:w-12 ssm:w-10 border rounded-full border-gray-200" :src="post.user.profilePicture"/>
    <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">{{post.user.firstName}} {{post.user.lastName}}</p>
  </div>
  <!--end-->

 <!--Delivery information list-->
  <div class="flex flex-col mt-1 vs:mt-1 sm:px-2 ssm:px-2 vs:mt-0 justify-center items-center vs:px-2">

      <div class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 se:space-x-1 space-x-4 w-full justify-center">
         <div class="flex flex-row space-x-2 sm:w-full">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
              delivery_dining
             </span>
             <div class="flex items-center justify-start  sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
              <div class="flex flex-col items-start justify-start w-full h-full py-1.5 rounded-2xl">
                  <p class="text-xs font-semibold leading-none text-gray-500">Delivery Area</p>
                  <span>
                    <input type="text" id="input_name" v-model="delivery_info.delivery_area" class="sm:w-full ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-full h-auto">            
                   </span>
              </div>
          </div>
         </div>
          
         <div class="flex flex-row space-x-2 sm:w-full">
             <div>
              <span class="rounded-lg mt-1.5 material-icons text-red-700">
              shopping_cart
              </span>
             </div>
             <div class="flex items-center justify-start w-52 sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
              <div class="flex flex-col w-full h-full py-1.5 rounded-2xl">
                      <p class="text-xs font-semibold leading-none text-gray-500">Shopping Place</p>
                  <span>
                    <input type="text" id="input_name" v-model="delivery_info.shopping_place" class="sm:w-full ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-full h-auto">            
                   </span>
              </div>
          </div>
         </div>
      </div>

     <div class="flex flex-row pt-3 ssm:pt-2 ssm:flex-col ssm:space-x-0 se:space-x-1 ssm:space-y-2 space-x-4 w-full justify-center">
        <div class="flex flex-row space-x-2 sm:w-full ">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
             alarm
             </span>
            <div class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start vs:w-full h-full py-1.5 rounded-2xl">
                 <p class="text-xs font-semibold leading-none text-gray-500">Schedule</p>
                 <span>
                    <input type="text" id="input_name" v-model="delivery_info.schedule" class="sm:w-full ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-full h-auto">            
                   </span>
             </div>
         </div>
        </div>
         
        <div class="flex flex-row space-x-2 sm:w-full ">
         <span class="rounded-lg mt-1.5 material-icons text-red-700">
         payments
         </span>
         <div class="inline-flex items-center justify-start w-52 sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
          <div class="inline-flex flex-col items-start justify-start vs:w-full h-full py-1.5 rounded-2xl">
              <p class="text-xs font-semibold leading-none text-gray-500">Payment Method</p>
              <span>
                <input type="text" id="input_name" v-model="delivery_info.payment_method" class="sm:w-full ssm:text-xs  block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 vs:w-full h-auto">            
                </span>
          </div>
      </div>
     </div>
     </div>
     </div>
     <!--end-->

    <div class="justify-center flex sm:px-2 ssm:px-2 vs:px-2">
    <div class="flex flex-col se:h-36 ssm:h-36 mt-3 w-31.75 items-start p-4 ssm:p-2 vs:p-2 bg-gray-100 rounded-xl h-auto ssm:w-full vs:w-full">
            <div class="flex w-full flex-row items-end justify-between space-x-4 ssm:space-x-0 vs:space-x-0">
                <p class="text-base ssm:text-sm vs:text-sm lvs:text-base leading-none text-gray-900">Shopping List {{shopping_info.shoppingID}}</p>
                <button class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-blue-700">Change</button>
            </div>
            <div class="flex w-full justify-between se:items-start se:overflow-y-scroll se:flex-col ssm:overflow-y-scroll ssm:flex-col ssm:justify-start ssm:items-start items-center flex-row  space-x-4 se:space-x-0 ssm:space-x-0 vs:space-x-1 py-2 ssm:py-0  se:px-2   px-5 ssm:px-2 vs:px-2">
                <div class="flex flex-col ssm:w-full">
                  <span class="flex " v-for="(item, index) in shopping_info.items" :key="index">
                    <span class="pr-2">•</span> 
                    <input type="text" id="input_name" :value="item" class="ssm:w-full bg-gray-100 focus:outline-none text-sm ssm:text-xs vs:text-xs lvs:text-sm text-gray-900">        
                   </span>
                </div>
            </div>
        </div>
    </div>

     <!--Comment section-->
    <div class="justify-center flex mt-3 sm:px-2 vs:px-2">
     <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm ssm:text-xs se:text-xs text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 ssm:w-fullvs:w-full" placeholder = "Enter your post message here..." v-model="delivery_info.comment"></textarea>
    </div>
    <!--end-->

    <!--Post button-->
    <div class="justify-center flex mt-3 pb-3 sm:px-2 ssm:px-2 vs:px-2">
     <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full h-10 w-31.75 ssm:h-full vs:w-full">
         <p class="text-base ssm:text-xs font-bold leading-normal text-center text-white">Post</p>
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
  props:['post'],
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
        delivery_area: this.post.request_post.deliveryAddress,
        shopping_place:  this.post.request_post.shoppingPlace,
        schedule:  this.post.request_post.deliverySchedule,
        payment_method:  this.post.request_post.paymentMethod,
        comment:  this.post.request_post.caption,
        status:  this.post.request_post.postStatus
      },
       shopping_info:{
        shoppingID: this.post.request_post.shopping_list.indexShoppingList,
        items: this.post.request_post.shopping_list.text.split(", ")      
      },
        }
    },
    methods: {
        close2(){
            this.$emit('closeModal1')
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