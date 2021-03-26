<template>
<div class="bg-gray-100 pt-6">
   <!--post comment-->
   <div class="h-screen">
   <!--Modal-->
   <PostModal v-if="postModalVisible" @closeModal="listener"/>
   <!--end--> 
   <div class="flex items-center justify-center">
    <div class="inline-flex space-x-4 items-center justify-center p-6 bg-white shadow rounded-xl h-25">
        <img class="w-14 h-14 rounded-full" src="img/yami.jpg"/>
        <button @click="togglePostModal" class="flex items-center justify-start text-base outline-none leading-none text-gray-500 py-5 pl-6 bg-gray-100 rounded-full h-14 w-448 vs:w-224">
        Post an order request</button>
    </div>
  </div>
  <!--end-->

  <!--user post-->
  <div class="flex items-center justify-center pt-6">
    <div class="space-x-4 h-auto p-6 vs:w-96.7 bg-white shadow rounded-xl">
      <div class="flex flex-col items-start justify-start">

        <!--section 1-->
        <div class="flex flex-grow space-x-4 flex-wrap flex-row w-full justify-between">
          <div class="flex">
            <img class="w-14 h-14 rounded-full" src="img/yami.jpg"/>
            <div class="flex flex-col items-start vs:px-2 px-4">
              <div class="space-x-4 vs:space-x-3 flex flex-row mt-1">
                <p class="vs:text-sm text-base font-bold leading-none text-gray-900">{{user_info.firstname}} {{user_info.lastname}}
                  <span class="text-blue-900 align-middle material-icons md-18">
                  verified
                </span>
                </p>
                <p class="vs:text-sm text-base leading-none text-gray-500 vs:pr-1.4">{{postStatus}} an order request.</p>
                 <div class=" md:hidden lg:hidden xl:hidden 2xl:hidden">
            <button @click="edit1=!edit1" class="focus:outline-none">
              <img class="w-6 h-auto" src="img/3dot.svg"/>
            </button>
            <div class="w-full">
            <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-96 h-min w-30 ring-2 ring-gray-200">
              <button @click="togglePostModal1" class="flex flex-row gap-x-2 ">
                <span class="text-gray-500 material-icons">mode</span>Edit Post</button>
                <!--Modal-->
                <EditShoppingOfferPostVue v-if="postModalVisible1" @closeModal1="listener1"/>
                <!--end-->
              <button class="flex flex-row gap-x-2"> 
                <span class="text-gray-500 material-icons">delete</span>Delete</button>
              </div>
            </div>
          </div>
              </div>
              <div class="">
                <span class="text-sm leading-none text-gray-500">{{datePosted}}</span>
              </div>
            </div>
          </div>
          <div class="vs:hidden">
            <button @click="edit1=!edit1" class="focus:outline-none">
              <img class="w-6 h-auto" src="img/3dot.svg"/>
            </button>
            <div class="w-full">
            <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-96 h-min w-30 ring-2 ring-gray-200">
              <button @click="togglePostModal2" class="flex flex-row gap-x-2 ">
                <span class="text-gray-500 material-icons">mode</span>Edit Post</button>
                <!--Modal-->
                <EditOrderRequest v-if="postModalVisible2" @closeModal2="listener2"/>
                <!--end-->
              <button class="flex flex-row gap-x-2"> 
                <span class="text-gray-500 material-icons">delete</span>Delete</button>
              </div>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 2-->
        <div class="inline-flex mt-4 items-center space-x-2 justify-start  px-2 py-1 bg-gray-100 rounded-full">
          <span class="rounded-full material-icons text-red-600">
              remove_circle_outline
              </span>
          <p class="text-sm font-bold leading-none items-center text-red-600">
              {{delivery_info.status}}</p>
        </div>
        <!--end-->

        <!--section 3-->
        <div class="flex items-center justify-start mt-4 w-full space-x-2">
          <div class="flex-col items-start pr-12">
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              location_on  
              </span>
              <p class="text-sm leading-none text-gray-900 py-1">{{delivery_info.delivery_area}}</p>
            </div>
            <div class=" flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              alarm  
              </span>
              <p class="text-sm leading-none text-gray-900 py-1">{{delivery_info.schedule}}</p>
            </div>
            
          </div>
          <div class="flex-col">
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              shopping_cart  
              </span>
              <p class="text-sm leading-none text-gray-900 py-1">{{delivery_info.shopping_place}}</p>
            </div>
            <div class="flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              payments  
              </span>
              <p class="text-sm leading-none text-gray-900 py-1">{{delivery_info.payment_method}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex flex-col  mt-3 w-full items-start justify-start p-4 vs:p-3 bg-gray-100 rounded-xl">
            <div class="inline-flex flex-row space-x-4">
                <span class="text-base leading-none text-gray-900">Shopping List</span>
                <span class="text-base leading-none text-gray-500">{{shopping_info.countItems}} items</span>
            </div>
            <div class="inline-flex flex-row space-x-4 vs:space-x-0 vs:px-0 py-4 px-5">
                <div class="flex flex-col">
                  <p class="w-60 text-sm leading-normal text-gray-900">• {{shopping_info.item1}}</p>
                  <p class="w-60 text-sm leading-normal text-gray-900">• {{shopping_info.item2}}</p>
                  <p class="w-60 text-sm leading-normal text-gray-900">• {{shopping_info.item3}}</p>
                  <p class="w-60 text-sm leading-normal text-gray-900">• {{shopping_info.item4}}</p>
                </div>
                <div class="flex flex-col">
                    <p class=" text-sm leading-normal text-gray-900">• {{shopping_info.item5}}</p>
                    <p class=" text-sm leading-normal text-gray-900">• {{shopping_info.item6}}</p>
                    <p class=" text-sm leading-normal text-gray-900">• {{shopping_info.item7}}</p>
                    <p class=" text-sm leading-normal text-gray-900">• {{shopping_info.item8}}</p>
                </div>
            </div>
        </div>
        <!--section 4-->

        <div class="inline-flex  items-start justify-start mt-3 rounded-xl h-auto w-528 vs:w-96">
            <p class="text-sm leading-loose w-auto text-gray-900">{{delivery_info.comment}}</p>
        </div>

        <!--section 5-->
        <div class="flex justify-evenly w-full pr-8 mt-4 space-x-6">
          <div class="flex items-center space-x-2">
            <img class="w-6 h-6 rounded-lg" src="img/send.svg"/>
            <p class="text-base font-bold leading-none text-gray-500">Send Request</p>
          </div>
          <div class="flex items-center space-x-2">
            <img class="w-6 h-6 rounded-lg " src="img/chatt.svg"/>
            <p class="text-base font-bold leading-none text-gray-500">Chat</p>
          </div>
          <div class="flex items-center space-x-2">
            <img class="w-6 h-6 rounded-lg" src="img/share.svg"/>
            <p class="text-base font-bold leading-none text-gray-500">Share</p>
          </div>
        </div>
        <!--end-->
      </div>
    </div>
  </div>
  <!--end of user post-->
  </div>
  </div>
</template>

<script>
import PostModal from "./PostModal"
import EditOrderRequest from './EditOrderRequest'

export default {
    data() {
    return {
      postModalVisible: false,
      postModalVisible2: false,
      edit1: false,
      datePosted: '3 hours ago',
      postStatus: 'posted',
      user_info:{
        firstname: 'Yami',
        lastname: 'Sukehiro'
      },
      delivery_info:{
        delivery_area: 'Banquerohan, Legazpi City',
        shopping_place: 'Shopping at SM City Legazpi',
        schedule: 'Friday 5 PM',
        payment_method: 'Payment First',
        comment: 'Hi! If there’s anyone who can help me and sabuy my groceries, I would greatly appreciate it. Send me an offer if you’re willing. Thanks!',
        status: 'Order Taken'
      },
      shopping_info:{
        countItems: '8',
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
  components: {
    PostModal,
    EditOrderRequest
  },
  methods:{
     togglePostModal(){
      this.postModalVisible = !this.postModalVisible
    },

    togglePostModal2(){
      this.postModalVisible2 = !this.postModalVisible2
    },

    listener(){
      this.postModalVisible = false;
    },
    listener2(){
      this.postModalVisible2 = false;
    }
  }
}
</script>