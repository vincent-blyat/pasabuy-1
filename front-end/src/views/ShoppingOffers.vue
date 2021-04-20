<template> 
    <!--post comment-->
    <div class="bg-gray-100 pt-6 font-nunito">
   <div class=" h-screen ssm:h-auto ssm:pb-6 vs:h-auto vs:pb-6 sm:pb-6 w-full min-w-0 px-2">
   <!--Modal-->
   <PostModal v-if="postModalVisible" @closeModal="listener"/>
   <!--end--> 
   <div class="flex items-center justify-center">
    <div class="inline-flex space-x-4 ssm:space-x-2 items-center vs:w-full sm:w-full ssm:w-full ssm:p-2 justify-center vs:p-4 p-6 bg-white shadow rounded-xl">
        <img class="w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10 rounded-full" src="img/yami.jpg"/>
        <button @click="togglePostModal" class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-gray-500 py-5 pl-6 bg-gray-100 rounded-full vs:h-12 ssm:h-10 h-14 w-448 vs:w-full ssm:w-full">
        Post a shopping offer</button>
    </div>
  </div>
  <!--end-->

  <!--user post-->
  <div v-for="shoppingOffer_info in shoppingOffer_infos" v-bind:key="shoppingOffer_info.indexShoppingOfferPost" class="flex items-center justify-center pt-6">
    <div class="space-x-4 h-auto p-6 vs:p-4 ssm:p-2 ssm:w-full vs:w-full sm:w-full w-608 bg-white shadow rounded-xl">
      <div class="flex flex-col items-start justify-start">

        <!--section 1-->
        <div class="flex flex-grow flex-wrap flex-row w-full justify-between">
          <div class="inline-flex">
            <img class="w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10 rounded-full" src="img/yami.jpg"/>
            <div class="flex flex-col items-start w-full vs:px-1 se:px-2 ssm:px-2 px-4">
              <div class="space-x-4 ssm:space-x-0 se:flex-col se:space-x-0 ssm:flex-col vs:space-x-1 sm:space-x-2 flex flex-row mt-1">
                <p class="ssm:text-xs vs:text-xs lvs:text-sm text-base font-bold leading-none text-gray-900"><router-link to="/edit-profile" >{{shoppingOffer_info.posts.user.firstName}} {{shoppingOffer_info.posts.user.lastName}}</router-link>
                  <span class="text-blue-900 align-middle material-icons md-18 ">
                  verified
                </span>
                </p>
                <p class="ssm:text-xs vs:text-xs lvs:text-sm text-base leading-none text-gray-500">posted a shopping offer</p>
              </div>
              <div class="vs:flex vs:w-full ssm:w-full ssm:flex vs:pb-2">
                <span class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-500">{{timestamp(shoppingOffer_info.posts.dateCreated).fromNow()}}</span>
              </div>
            </div>
          </div>
          <div class="vs:mt-1">
            <button @click="edit1=!edit1, shoppingOffer_postNumber = shoppingOffer_info.indexShoppingOfferPost" class="focus:outline-none">
              <img class="w-6 vs:w-4 lvs:w-5 ssm:w-4 h-auto" src="img/3dot.svg"/>
            </button>
            <div class="flex w-full">
            <div v-if="edit1&&shoppingOffer_postNumber==shoppingOffer_info.indexShoppingOfferPost" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl ssm:right-5 vs:right-5 sm:right-5 lg:right-56 md:right-24 xl:right-91 h-min w-30">
             <EditShoppingOfferPostVue v-if="postModalVisible1&&shoppingOffer_postNumber==shoppingOffer_info.indexShoppingOfferPost" :btnText="shoppingOffer_info" @closeModal1="listener1"/>
              <button  @click="togglePostModal1" class="flex flex-row gap-x-2 text-base focus:outline-none">
               <span class="font-medium text-gray-500 material-icons">
                mode
               </span>
                Edit Post
              </button>
             <UpdateOfferStatus v-if="postModalVisible2" @closeModal2="listener2"/>
              <button  @click="togglePostModal2" class="flex flex-row font-normal text-base focus:outline-none gap-x-2">
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
        <div class="inline-flex mt-4 items-center space-x-2 justify-start  px-2 py-1 bg-gray-100 rounded-full text-green-600" v-if="shoppingOffer_info.postStatus !== 'Accepting Request'">
          <span class="rounded-full material-icons text-red-600">
              remove_circle_outline
              </span>
          <p class="text-sm vs:text-xs ssm:text-xs lvs:text-sm font-bold leading-none items-center text-red-600">
              {{shoppingOffer_info.postStatus}}</p>
        </div>
        <div class="inline-flex mt-4 items-center space-x-2 justify-start  px-2 py-1 bg-gray-100 rounded-full text-green-600" v-if="shoppingOffer_info.postStatus === 'Accepting Request'">
          <span class="rounded-full material-icons">
              remove_circle_outline
              </span>
          <p class="text-sm vs:text-xs ssm:text-xs lvs:text-sm font-bold leading-none items-center">
              {{shoppingOffer_info.postStatus}}</p>
        </div>
        <!--end-->

        <!--section 3-->
        <div class="flex ssm:flex-col ssm:items-start ssm:space-x-0 vs:flex-col vs:items-start items-center justify-start mt-4 w-full space-x-4 vs:space-x-0">
          <div class="flex-col items-start w-full">
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              delivery_dining  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{shoppingOffer_info.deliveryArea}}</p>
            </div>
            <div class=" flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              alarm  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{timestamp(shoppingOffer_info.deliverySchedule).format('LLL')}}</p>
            </div>
            <div class=" flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              shopping_bag  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{shoppingOffer_info.capacity}}</p>
            </div>
          </div>
          <div class="flex-col w-full ssm:py-2 vs:py-3">
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              shopping_cart  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{shoppingOffer_info.shoppingPlace}}</p>
            </div>
            <div class="flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              directions_car  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{shoppingOffer_info.transportMode}}</p>
            </div>
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              payments  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{shoppingOffer_info.paymentMethod}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex flex-grow-0 mt-4 ssm:mt-2 vs:mt-2 w-full items-start justify-start p-4 bg-gray-100 rounded-xl">
          <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-loose text-gray-900 h-auto w-full vs:min-w-0 vs:px-2">{{shoppingOffer_info.caption}}</p>
        </div>
        <!--section 4-->

        <!--section 5-->
        <div v-if="shoppingOffer_info.posts.email !== shoppingOffer_info.posts.user.email" class="flex justify-evenly w-full vs:space-x-3 vs:min-w-0 vs:px-2 ssm:space-x-1 ssm:px-0 pr-8 ssm:pr-0 vs:pr-0 mt-4 space-x-6">
          <SendRequest v-if="postSendModal" @closeSendRequest="listener3"/>
          <button @click="toggleSendModal" class="flex focus:outline-none items-center space-x-2 ssm:space-x-1">
            <span class="pr-2 ssm:pr-0 material-icons md-24 ">
            send
            </span>
            <p class="text-base ssm:text-xs vs:text-xs lvs:text-sm font-bold leading-none text-gray-600">Send Request</p>
          </button>
          <router-link to="/messages">
          <button class="flex focus:outline-none items-center space-x-2 ssm:space-x-1">
           <span class="pr-2 ssm:pr-0 material-icons md-24 ">
           forum
           </span>
            <p class="text-base ssm:text-xs vs:text-xs lvs:text-sm font-bold leading-none text-gray-600">Chat</p>
          </button>
          </router-link>
          <div>
          <button @click="share=!share" class="flex focus:outline-none items-center space-x-2 ssm:space-x-1">
           <span class="pr-2 ssm:pr-0 material-icons md-24 ">
           share
           </span>
            <p class="text-base ssm:text-xs vs:text-xs lvs:text-sm font-bold leading-none text-gray-500">Share</p>
          </button>
          <div class="flex w-full">
            <div v-if="share" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl ssm:right-5 vs:right-5 sm:right-5 lg:right-56 md:right-24 xl:right-91 h-min w-30">
              <button class="flex flex-row gap-x-2 text-base focus:outline-none">
               <span class="font-medium text-gray-500 material-icons">
                share
               </span>
                Share on Feed
              </button>
              <button class="flex py-2 flex-row font-normal text-base focus:outline-none gap-x-2">
               <span class="font-normal text-gray-500 material-icons">
                link
               </span>
                Copy link to this post
              </button>
              </div>
            </div>
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
import api from '../api'
import EditShoppingOfferPostVue from './EditShoppingOffer.vue'
import PostModal from "./PostModal"
import UpdateOfferStatus from './updateOfferStatus'
import SendRequest from "./sendRequest"
import moment from 'moment'
export default {
  data() {
    return {
      postModalVisible: false,
      postModalVisible1: false,
      postModalVisible2: false,
      postSendModal: false,
      postChatModal: false,
      edit1: false,
      share: false,
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
        comment: 'Hi! I’ll be  going to SM City Legazpi tomorrow. If there’s anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request!',
        status: 'No Longer Accepting Requests'
      },
      shoppingOffer_postNumber: null,

      shoppingOffer_infos: [],

      user_email: null,
    }
  },
  components: {
    PostModal,
    EditShoppingOfferPostVue,
    UpdateOfferStatus,
    SendRequest,
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
    toggleSendModal(){
      this.postSendModal = !this.postSendModal
      
    },
    toggleChatModal(){
      this.postChatModal = !this.postChatModal
      
    },
    listener(){
      this.postModalVisible = false;
    },
    listener1(){
      this.postModalVisible1 = false;
    },
    listener2(){
      this.postModalVisible2 = false;
    },
    listener3(){
      this.postSendModal = false;
    },
    loadShoppingOffer_infos(){
      api.get("api/shoppingoffers").then((data) => {this.shoppingOffer_infos = data.data; console.log("offer",this.shoppingOffer_infos)});
    },
    timestamp(date){
      return moment(date);
    }
    
  },
  created(){
    this.loadShoppingOffer_infos();
    //api.get("api/user").then((data) => {this.user_email = data.data.email; console.log("email",this.user_email)});
  },
//   computed: {
//     //  filterOffers: function() {
//     //    return this.shoppingOffer_infos.filter(function(value) {
//     //      if (value.posts.email == this.user_email) {
//     //        return value
//     //      }
//     //   })
//       filterOffers: function() {
//        api.get("api/user").then((data) => {this.shoppingOffer_infos = data.data; console.log("offer",this.shoppingOffer_infos)});
//        return this.shoppingOffer_infos.user.filter(function(value) {
//          if (value.postStatus == 'Accepting Request') {
//            return value.postStatus
//          }
//       })
//     },
//  }
// computed: {
//      filterOffers: function() {
//        return this.shoppingOffer_infos.filter(function(value) {
//          if (value.postStatus == 'Accepting Request') {
//            return value.postStatus
//          }
//       })
//     }
//  }
}
</script>