
<template> 
    <!--post comment-->
    <div class="bg-gray-100 pt-6 font-nunito">
   <div class=" h-screen vs:h-auto vs:pb-6 sm:pb-6 w-full min-w-0 px-2">
   <!--Modal-->
   <PostModal v-if="postModalVisible" @closeModal="listener"/>
   <!--end--> 
   <div class="flex items-center justify-center">
    <div class="inline-flex space-x-4 items-center vs:w-full sm:w-full justify-center vs:p-4 p-6 bg-white shadow rounded-xl">
        <img class="w-14 h-14 vs:w-10 vs:h-10 rounded-full" src="img/yami.jpg"/>
        <button @click="togglePostModal" class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs  text-base outline-none leading-none text-gray-500 py-5 pl-6 bg-gray-100 rounded-full vs:h-12 h-14 w-448 vs:w-full">
        Post a shopping offer</button>
    </div>
  </div>
  <!--end-->

  <!--user post-->
  <div class="flex items-center justify-center pt-6">
    <div class="space-x-4 h-auto p-6 vs:p-4 vs:w-full sm:w-full w-608 bg-white shadow rounded-xl">
      <div class="flex flex-col items-start justify-start">

        <!--section 1-->
        <div class="flex flex-grow flex-wrap flex-row w-full justify-between">
          <div class="inline-flex">
            <img class="w-14 h-14 vs:w-10 vs:h-10 rounded-full" src="img/yami.jpg"/>
            <div class="flex flex-col items-start w-full vs:px-1 px-4">
              <div class="space-x-4 vs:space-x-1 sm:space-x-2 flex flex-row mt-1">
                <p class="vs:text-xs lvs:text-sm text-base font-bold leading-none text-gray-900">{{user_info.firstname}} {{user_info.lastname}}
                  <span class="text-blue-900 align-middle material-icons md-18 vs:md-14">
                  verified
                </span>
                </p>
                <p class="vs:text-xs lvs:text-sm text-base leading-none text-gray-500">posted a shopping offer</p>
              </div>
              <div class="vs:flex vs:w-full vs:pb-2">
                <span class="text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">{{datePosted}}</span>
              </div>
            </div>
          </div>
          <div class="vs:mt-1">
            <button @click="edit1=!edit1" class="focus:outline-none">
              <img class="w-6 vs:w-4 lvs:w-5 h-auto" src="img/3dot.svg"/>
            </button>
            <div class="flex w-full">
            <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl vs:right-5 sm:right-5 lg:right-56 md:right-24 xl:right-91 h-min w-30">
             <EditShoppingOfferPostVue v-if="postModalVisible1" @closeModal1="listener1"/>
                        <button  @click="togglePostModal1" class="flex flex-row gap-x-2 focus:outline-none">
                          <span class="font-medium text-gray-500 material-icons">
                            mode
                          </span>
                          Edit Post
                        </button>
                <!-----UPDATE STATUS------>
                      <UpdateOfferStatus v-if="postModalVisible2" @closeModal2="listener2"/>
                        <button  @click="togglePostModal2" class="flex flex-row font-normal focus:outline-none gap-x-2">
                          <span class="font-normal text-gray-500 material-icons">
                            autorenew
                          </span>
                          Update Status
                        </button>
                        <!---END-->
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
          <p class="text-sm vs:text-xs lvs:text-sm font-bold leading-none items-center text-red-600">
              {{delivery_info.status}}</p>
        </div>
        <!--end-->

        <!--section 3-->
        <div class="flex vs:flex-col vs:items-start items-center justify-start mt-4 w-full space-x-4 vs:space-x-0">
          <div class="flex-col items-start">
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              delivery_dining  
              </span>
              <p class="text-sm vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{delivery_info.delivery_area}}</p>
            </div>
            <div class=" flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              alarm  
              </span>
              <p class="text-sm vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{delivery_info.schedule}}</p>
            </div>
            <div class=" flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              shopping_bag  
              </span>
              <p class="text-sm vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{delivery_info.capacity}}</p>
            </div>
          </div>
          <div class="flex-col vs:py-3">
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              shopping_cart  
              </span>
              <p class="text-sm vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{delivery_info.shopping_place}}</p>
            </div>
            <div class="flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              directions_car  
              </span>
              <p class="text-sm vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{delivery_info.public_transit}}</p>
            </div>
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              payments  
              </span>
              <p class="text-sm vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{delivery_info.payment_method}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex flex-grow-0 mt-4 vs:mt-2 items-start justify-start p-4 bg-gray-100 rounded-xl">
          <p class="text-sm vs:text-xs lvs:text-sm leading-loose text-gray-900 h-auto w-full vs:min-w-0 vs:px-2">{{delivery_info.comment}}</p>
        </div>
        <!--section 4-->

        <!--section 5-->
        <div class="flex justify-evenly w-full vs:space-x-3 vs:min-w-0 vs:px-2 pr-8 vs:pr-0 mt-4 space-x-6">
          <div class="flex items-center space-x-2">
            <span class="pr-2 material-icons md-24 ">
            send
            </span>
            <p class="text-base vs:text-xs lvs:text-sm font-bold leading-none text-gray-600">Send Request</p>
          </div>
          <div class="flex items-center space-x-2">
           <span class="pr-2 material-icons md-24 ">
           forum
           </span>
            <p class="text-base vs:text-xs lvs:text-sm font-bold leading-none text-gray-600">Chat</p>
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
import UpdateOfferStatus from './updateOfferStatus'


export default {
  data() {
    return {
      postModalVisible: false,
      postModalVisible1: false,
      postModalVisible2: false,
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
    EditShoppingOfferPostVue,
    UpdateOfferStatus,
  },
  methods:{
    togglePostModal(){
      this.postModalVisible = !this.postModalVisible
    },

    togglePostModal1(){
      this.postModalVisible1 = !this.postModalVisible1
      
    },
    togglePostModal2(){
      this.postModalVisible2 = !this.postModalVisible2
      
    },

    listener(){
      this.postModalVisible = false;
    },
    listener1(){
      this.postModalVisible1 = false;
    },
    listener2(){
      this.postModalVisible2 = false;
    }
  }
  
}
</script>
