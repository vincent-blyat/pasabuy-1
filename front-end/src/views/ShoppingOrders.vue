<template>
<div class="bg-gray-100 pt-6 font-nunito">
   <!--post comment-->
   <div class="h-screen ssm:h-auto ssm:pb-6 vs:h-auto vs:pb-6 sm:pb-6 w-full min-w-0 px-2">
   <!--Modal-->
   <PostModal v-if="postModalVisible" @closeModal="listener"/>
   <!--end--> 
   <div class="flex items-center justify-center">
    <div class="inline-flex space-x-4 ssm:space-x-2  items-center vs:w-full ssm:w-full ssm:p-2 sm:w-full justify-center vs:p-4 p-6 bg-white shadow rounded-xl h-25">
        <img class="w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10 rounded-full" src="img/yami.jpg"/>
        <button @click="togglePostModal" class="flex items-center justify-start text-base ssm:text-xs lvs:text-sm vs:text-xs outline-none leading-none text-gray-500 py-5 pl-6 bg-gray-100 rounded-full ssm:h-10 vs:h-12 h-14 w-448 ssm:w-full vs:w-full">
        Post an order request</button>
    </div>
  </div>
  <!--end-->

  <!--user post-->
  <div class="flex items-center justify-center pt-6">
    <div class="space-x-4 h-auto ssm:p-2 ssm:w-full p-6 vs:p-4 vs:w-full sm:w-full w-608 bg-white shadow rounded-xl">
      <div class="flex flex-col items-start justify-start">

        <!--section 1-->
        <div class="flex flex-grow flex-wrap flex-row w-full justify-between">
          <div class="inline-flex">
            <img class="w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10 rounded-full" src="img/yami.jpg"/>
            <div class="flex flex-col items-start w-full vs:px-1 se:px-2 ssm:px-2 px-4">
              <div class="space-x-4 ssm:space-x-0 ssm:flex-col se:flex-col se:space-x-0 vs:space-x-1 sm:space-x-2 flex flex-row mt-1">
                <p class="ssm:text-xs vs:text-xs lvs:text-sm text-base font-bold leading-none text-gray-900">{{user_info.firstname}} {{user_info.lastname}}
                  <span class="text-blue-900 align-middle material-icons md-18 vs:md-14">
                  verified
                </span>
                </p>
                <p class="ssm:text-xs vs:text-xs lvs:text-sm text-base leading-none text-gray-500">{{postStatus}} an order request</p>
              </div>
              <div class="vs:flex vs:w-full ssm:w-full ssm:flex vs:pb-2">
                <span class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-500">{{datePosted}}</span>
              </div>
            </div>
          </div>
          <div class="vs:mt-1">
            <button @click="edit1=!edit1" class="focus:outline-none">
              <img class="w-6 vs:w-4 lvs:w-5 ssm:w-4 h-auto" src="img/3dot.svg"/>
            </button>
          <div class="flex w-full">
            <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl ssm:right-5 vs:right-5 sm:right-5 lg:right-56 md:right-24 xl:right-91 h-min w-30">
             <EditOrderRequest v-if="postModalVisible2" @closeModal2="listener2"/>
                <button  @click="togglePostModal2" class="flex flex-row gap-x-2 text-base focus:outline-none">
                 <span class="font-medium text-gray-500 material-icons ">
                  mode
                  </span>
                  Edit Post
                </button>
              <UpdateOrderStatus v-if="postModalVisible3" @closeModal3="listener3"/>
                <button  @click="togglePostModal3" class="flex flex-row text-base font-normal focus:outline-none gap-x-2">
                  <span class="font-normal text-gray-500 material-icons">
                   autorenew
                  </span>
                   Update Status
                </button>
              <button class="flex flex-row gap-x-2 text-base"> 
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
          <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm font-bold leading-none items-center text-red-600">
              {{delivery_info.status}}</p>
        </div>
        <!--end-->

        <!--section 3-->
        <div class="flex ssm:flex-col ssm:items-start ssm:space-x-0 vs:flex-col vs:items-start items-center justify-start mt-4 w-full vs:space-x-0 space-x-2">
          <div class="flex-col items-start pr-12">
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              location_on  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{delivery_info.delivery_area}}</p>
            </div>
            <div class=" flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              alarm  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{delivery_info.schedule}}</p>
            </div>
            
          </div>
          <div class="flex-col vs:py-1">
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              shopping_cart  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{delivery_info.shopping_place}}</p>
            </div>
            <div class="flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              payments  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{delivery_info.payment_method}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex flex-col  ssm:mt-2 vs:mt-2 mt-3 w-full items-start justify-start h-auto vs:pr-0 vs:min-w-0 vs:px-2 ssm:pr-0 ssm:min-w-0 ssm:px-2 p-4 bg-gray-100 rounded-xl">
            <div class="inline-flex flex-row space-x-4">
                <span class="text-base ssm:text-sm leading-none text-gray-900">Shopping List</span>
                <span class="text-base ssm:text-sm leading-none text-gray-500">{{shopping_info.countItems}} items</span>
            </div>
            <div class="inline-flex flex-row ssm:space-x-0 ssm:px-0 space-x-4 w-full vs:space-x-0 vs:px-0 py-4 px-5">
                <div class="flex flex-col w-full ssm:space-y-2 vs:space-y-2">
                  <p class=" text-sm ssm:text-xs vs:text-xs  leading-normal vs:leading-none text-gray-900">• {{shopping_info.item1}}</p>
                  <p class=" text-sm ssm:text-xs leading-normal vs:leading-none text-gray-900">• {{shopping_info.item2}}</p>
                  <p class=" text-sm ssm:text-xs leading-normal vs:leading-none text-gray-900">• {{shopping_info.item3}}</p>
                  <p class=" text-sm ssm:text-xs leading-normal vs:leading-none text-gray-900">• {{shopping_info.item4}}</p>
                </div>
                <div class="flex flex-col w-full ssm:space-y-2 vs:space-y-2">
                    <p class=" text-sm ssm:text-xs leading-normal vs:text-xs vs:leading-none text-gray-900">• {{shopping_info.item5}}</p>
                    <p class=" text-sm ssm:text-xs leading-normal vs:text-xs vs:leading-none text-gray-900">• {{shopping_info.item6}}</p>
                    <p class=" text-sm ssm:text-xs leading-normal vs:text-xs vs:leading-none text-gray-900">• {{shopping_info.item7}}</p>
                    <p class=" text-sm ssm:text-xs leading-normal vs:text-xs vs:leading-none text-gray-900">• {{shopping_info.item8}}</p>
                </div>
            </div>
        </div>
        <!--section 4-->

        <div class="inline-flex  items-start ssm:px-2 justify-start mt-3 rounded-xl h-auto bg-white w-full">
            <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-loose w-auto text-gray-900">{{delivery_info.comment}}</p>
        </div>

        <!--section 5-->
        <div class="flex justify-evenly w-full ssm:space-x-1 ssm:px-0 ssm:pr-0 vs:space-x-3 vs:min-w-0 vs:px-2 pr-8 vs:pr-0 mt-4 space-x-6">
          <div class="flex items-center space-x-2 ssm:space-x-1">
            <span class="pr-2 ssm:pr-0 material-icons md-24 ">
            send
            </span>
            <p class="text-base ssm:text-xs vs:text-xs lvs:text-sm font-bold leading-none text-gray-600">Send Request</p>
          </div>
          <div class="flex items-center space-x-2 ssm:space-x-1">
           <span class="pr-2 ssm:pr-0 material-icons md-24 ">
           forum
           </span>
            <p class="text-base ssm:text-xs vs:text-xs lvs:text-sm font-bold leading-none text-gray-600">Chat</p>
          </div>
          <div class="flex items-center space-x-2 ssm:space-x-1">
           <span class="pr-2 ssm:pr-0 material-icons md-24 ">
           share
           </span>
            <p class="text-base ssm:text-xs vs:text-xs lvs:text-sm font-bold leading-none text-gray-500">Share</p>
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
import UpdateOrderStatus from './updateOrderStatus'
export default {
    data() {
    return {
      postModalVisible: false,
      postModalVisible2: false,
      postModalVisible3: false,
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
    EditOrderRequest,
    UpdateOrderStatus,
  },
  methods:{
     togglePostModal(){
      this.postModalVisible = !this.postModalVisible
    },

    togglePostModal2(){
      this.postModalVisible2 = !this.postModalVisible2
    },

    togglePostModal3(){
      this.postModalVisible3 = !this.postModalVisible3
    },

    listener(){
      this.postModalVisible = false;
    },
    listener2(){
      this.postModalVisible2 = false;
    },
    listener3(){
      this.postModalVisible3 = false;
    }
  }
}
</script>