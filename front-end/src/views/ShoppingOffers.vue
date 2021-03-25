<template> 
    <!--post comment-->
    <div class="bg-gray-100 pt-6">
   <div class="h-screen">
   <!--Modal-->
   <PostModal v-if="postModalVisible" @closeModal="listener"/>
   <!--end--> 
   <div class="flex items-center justify-center">
    <div class="inline-flex space-x-4 items-center justify-center p-6 bg-white shadow rounded-xl h-25" style="width: 608px;">
        <img class="w-14 h-14 rounded-full" src="img/yami.jpg"/>
        <button @click="togglePostModal" class="flex items-center focus:outline-none justify-start text-base outline-none leading-none text-gray-500 py-5 pl-6 bg-gray-100 rounded-full h-14" style="width: 488px;">
        Post a shopping offer</button>
    </div>
  </div>
  <!--end-->

  <!--user post-->
  <div class="flex items-center justify-center pt-6">
    <div class="space-x-4 h-auto p-6 bg-white shadow rounded-xl">
      <div class="flex flex-col items-start justify-start">

        <!--section 1-->
        <div class="flex flex-grow space-x-4 flex-wrap flex-row w-full justify-between">
          <div class="flex">
            <img class="w-14 h-14 rounded-full" src="img/yami.jpg"/>
            <div class="flex flex-col items-start px-4">
              <div class="space-x-4 flex flex-row mt-1">
                <p class="text-base font-bold leading-none text-gray-900">{{user_info.firstname}} {{user_info.lastname}}
                  <span class="text-blue-900 align-middle material-icons md-18">
                  verified
                </span>
                </p>
                <p class="text-base leading-none text-gray-500">{{postStatus}} a shopping offer.</p>
              </div>
              <div class=" py-1">
                <span class="text-sm leading-none text-gray-500">{{datePosted}}</span>
              </div>
            </div>
          </div>
          <div>
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
        <div class="flex items-center justify-start mt-4 w-full space-x-4">
          <div class="flex-col items-start">
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              delivery_dining  
              </span>
              <p class="text-sm leading-none text-gray-900 py-1">{{delivery_info.delivery_area}}</p>
            </div>
            <div class=" flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              alarm  
              </span>
              <p class="text-sm leading-none text-gray-900 py-1">{{delivery_info.schedule}}</p>
            </div>
            <div class=" flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              shopping_bag  
              </span>
              <p class="text-sm leading-none text-gray-900 py-1">{{delivery_info.capacity}}</p>
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
              directions_car  
              </span>
              <p class="text-sm leading-none text-gray-900 py-1">{{delivery_info.public_transit}}</p>
            </div>
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              payments  
              </span>
              <p class="text-sm leading-none text-gray-900 py-1">{{delivery_info.payment_method}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex flex-grow-0 mt-4 items-start justify-start p-4 bg-gray-100 rounded-xl">
          <p class="text-sm leading-loose text-gray-900 h-auto " style="width: 528px;">{{delivery_info.comment}}</p>
        </div>
        <!--section 4-->

        <!--section 5-->
        <div class="flex justify-evenly w-full pr-8 mt-4 space-x-6">
          <div class="flex items-center space-x-2">
            <span class="pr-2 material-icons md-24 ">
            send
            </span>
            <p class="text-base font-bold leading-none text-gray-600">Send Request</p>
          </div>
          <div class="flex items-center space-x-2">
           <span class="pr-2 material-icons md-24 ">
           forum
           </span>
            <p class="text-base font-bold leading-none text-gray-600">Chat</p>
          </div>
          <div class="flex items-center space-x-2">
           <span class="pr-2 material-icons md-24 ">
           share
           </span>
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
import EditShoppingOfferPostVue from './EditShoppingOffer.vue'
import PostModal from "./PostModal"


export default {
  data() {
    return {
      postModalVisible: false,
      postModalVisible1: false,
      edit1: false,
      datePosted: '3 hours ago',
      postStatus: 'posted',
      user_info:{
        firstname: 'Yami',
        lastname: 'Sukehiro'
      },
      delivery_info:{
        delivery_area: 'Delivering to Banquerohan area only',
        shopping_place: 'Shopping at SM City Legazpi',
        schedule: 'Tomorrow at 2 PM',
        public_transit: 'Public Transit',
        capacity: 'Up to 3 medium bags or 2 large bags',
        payment_method: 'Payment First',
        comment: 'Hi! I’ll be going to SM City Legazpi tomorrow. If there’s anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request!',
        status: 'No Longer Accepting Requests'
      },
    }
  },
  components: {
    PostModal,
    EditShoppingOfferPostVue
  },
  methods:{
    togglePostModal(){
      this.postModalVisible = !this.postModalVisible
    },

    togglePostModal1(){
      this.postModalVisible1 = !this.postModalVisible1
      
    },

    listener(){
      this.postModalVisible = false;
    },
    listener1(){
      this.postModalVisible1 = false;
    }
  }
  
}
</script>