<template> 
    <!--post comment-->
    <div class="bg-gray-100 pt-6 font-nunito">
   <div class="h-screen ssm:h-auto ssm:pb-6 vs:h-auto vs:pb-6 sm:pb-6 w-full min-w-0 px-2">
   <!--Modal-->
   <div v-if="userID === user.email">
   <PostModal v-if="postModalVisible" @closeModal="listener"/>
   <!--end--> 
   <div class="flex items-center justify-center">
    <div class="inline-flex space-x-4 ssm:space-x-2 items-center vs:w-full sm:w-full ssm:w-full ssm:p-2 justify-center vs:p-4 p-6 bg-white shadow rounded-xl">
        <img class="w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10 rounded-full" :src="user.profilePicture"/>
        <button @click="togglePostModal" class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-gray-500 py-5 pl-6 bg-gray-100 rounded-full vs:h-12 ssm:h-10 h-14 w-448 vs:w-full ssm:w-full">
        Post a shopping offer</button>
    </div>
  </div>
   </div>
  <!--end-->

  <!--user post-->
  <div v-for="shoppingOffer_info in shoppingOffer_infos" v-bind:key="shoppingOffer_info.offer_post.indexShoppingOfferPost" class="flex items-center justify-center pt-6">
    <div class="space-x-4 h-auto p-6 vs:p-4 ssm:p-2 ssm:w-full vs:w-full sm:w-full w-608 bg-white shadow rounded-xl">
      <div class="flex flex-col items-start justify-start">

        <!--section 1-->
        <div class="flex flex-grow flex-wrap flex-row w-full justify-between">
          <div class="inline-flex">
            <img class="w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10 rounded-full" :src="shoppingOffer_info.user.profilePicture"/>
            <div class="flex flex-col items-start w-full vs:px-1 se:px-2 ssm:px-2 px-4">
              <div class="space-x-4 ssm:space-x-0 se:flex-col se:space-x-0 ssm:flex-col vs:space-x-1 sm:space-x-2 flex flex-row mt-1">
                <p class="ssm:text-xs vs:text-xs lvs:text-sm text-base font-bold leading-none text-gray-900"><router-link to="/edit-profile" >{{shoppingOffer_info.user.firstName}} {{shoppingOffer_info.user.lastName}}</router-link>
                  <span class="text-blue-900 align-middle material-icons md-18 ">
                  verified
                </span>
                </p>
                <p class="ssm:text-xs vs:text-xs lvs:text-sm text-base leading-none text-gray-500">posted a shopping offer</p>
              </div>
              <div class="vs:flex vs:w-full ssm:w-full ssm:flex vs:pb-2">
                <span class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-500">{{timestamp(shoppingOffer_info.dateCreated)}}</span>
              </div>
            </div>
          </div>
          <div class="vs:mt-1">
            <button @click="edit1=!edit1, shoppingOffer_postNumber = shoppingOffer_info.offer_post.indexShoppingOfferPost" class="focus:outline-none">
              <img class="w-6 vs:w-4 lvs:w-5 ssm:w-4 h-auto" src="img/3dot.svg"/>
            </button>
            <div class="flex w-full">
            <div v-if="edit1&&shoppingOffer_postNumber==shoppingOffer_info.offer_post.indexShoppingOfferPost" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl ssm:right-5 vs:right-5 sm:right-5 lg:right-56 md:right-24 xl:right-91 h-min w-30">
             <EditShoppingOfferPostVue v-if="postModalVisible1&&shoppingOffer_postNumber==shoppingOffer_info.offer_post.indexShoppingOfferPost" :btnText="shoppingOffer_info" @closeModal1="listener1"/>
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
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{shoppingOffer_info.offer_post.deliveryArea}}</p>
            </div>
            <div class=" flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              alarm  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{timestampSched(shoppingOffer_info.offer_post.deliverySchedule)}}</p>
            </div>
            <div class=" flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              shopping_bag  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{shoppingOffer_info.offer_post.capacity}}</p>
            </div>
          </div>
          <div class="flex-col w-full ssm:py-2 vs:py-3">
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              shopping_cart  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{shoppingOffer_info.offer_post.shoppingPlace}}</p>
            </div>
            <div class="flex space-x-2 py-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              directions_car  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{shoppingOffer_info.offer_post.transportMode}}</p>
            </div>
            <div class="flex space-x-2">
              <span class=" w-6 h-6 rounded-full material-icons text-red-600">
              payments  
              </span>
              <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-none text-gray-900 py-1">{{shoppingOffer_info.offer_post.paymentMethod}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex flex-grow-0 mt-4 ssm:mt-2 vs:mt-2 w-full items-start justify-start p-4 bg-gray-100 rounded-xl">
          <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-loose text-gray-900 h-auto w-full vs:min-w-0 vs:px-2">{{shoppingOffer_info.offer_post.caption}}</p>
        </div>
        <!--section 4-->

        <!--section 5-->
        <div v-if="shoppingOffer_info.email !== shoppingOffer_info.user.email" class="flex justify-evenly w-full vs:space-x-3 vs:min-w-0 vs:px-2 ssm:space-x-1 ssm:px-0 pr-8 ssm:pr-0 vs:pr-0 mt-4 space-x-6">
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
          <button @click="closeOpen" class="flex focus:outline-none items-center space-x-2 ssm:space-x-1">
           <span class="pr-2 ssm:pr-0 material-icons md-24 ">
           share
           </span>
            <p class="text-base ssm:text-xs vs:text-xs lvs:text-sm font-bold leading-none text-gray-500">Share</p>
          </button>
          <div class="flex w-full">
            <div  v-if="share" class="target absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl ssm:right-5 vs:right-5 sm:right-5 lg:right-56 md:right-24 xl:right-91 h-min w-30">
              <button @click="showShareModal" class="flex flex-row gap-x-2 text-base focus:outline-none">
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
    <!--    
    -->
      </div>
    </div>
  </div>
  <!--end of user post-->
  
  <!--Share Modal-->
    <div @click.self="hideShareModal" id="modal-background" class="bg-opacity-25 z-50">
<div id="modal-content" class="flex-col w-608 space-y-4 px-2 bg-white h-auto rounded-lg">
      <div id="modal-header" class="flex flex-row pt-4 space-x-4 px-2 justify-between items-center">
        <button @click="$router.push('edit-profile')" class="focus:outline-none flex items-center space-x-4">
          <img class="w-12 h-12 rounded-full" src="img/asta.jpeg"/>
        <p class="text-base font-bold leading-none text-gray-900">Asta Staria</p>
        </button>
      <button @click="hideShareModal" class="focus:outline-none flex items-center">
        <span class="text-gray-500 material-icons allign-middle" style="font-size: 36px">
        cancel
        </span>
      </button>
      </div>
     <div id="fkmouse" class="modal-body cursor-not-allowed"></div>
     <div id="modal-footer" class="flex px-2  pb-4 items-center justify-center ssm:px-2 vs:px-2">
        <button class="focus:outline-none inline-flex items-center justify-center px-4 py-2 bg-red-700 rounded-full w-full ssm:h-8 ssm:w-full vs:w-full">
          <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-normal text-center text-white">Share Post</p>
      </button>
      </div>
</div>
</div>
<!--end-->

   </div>
   </div>

</template>

<script>
// import api from '../api'
import store from '../store/index'
import EditShoppingOfferPostVue from './EditShoppingOffer.vue'
import PostModal from "./PostModal"
import UpdateOfferStatus from './updateOfferStatus'
import SendRequest from "./sendRequest"
import moment from 'moment'
export default {
  props:['userID'],
  data() {
    
    return {
      postModalVisible: false,
      postModalVisible1: false,
      postModalVisible2: false,
      postSendModal: false,
      postChatModal: false,
      edit1: false,
      share: false,
      shareIt: false,
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
    // loadShoppingOffer_infos(){
    //   api.get("api/shoppingoffers").then((data) => {this.shoppingOffer_infos = data.data; console.log("offer",this.shoppingOffer_infos)});
    // },
    timestampSched(datetime){
      var schedDate = new Date(datetime)
      var dateToday = new Date()
      var dateDiff = schedDate.getTime() - dateToday.getTime()
      dateDiff = dateDiff/(1000 * 3600 * 24)
      if(dateDiff<1 && dateDiff>0)
        return moment(datetime).format("[Today at] h:mm a");
      else if(dateDiff>=1 &&  dateDiff <2)
        return moment(datetime).format("[Tommorow at] h:mm a");
      else
        return moment(datetime).format("[From] MMM DD, YYYY [at] h:mm a");
    },
    timestamp(datetime){
      var postedDate = new Date(datetime)
      var dateToday = new Date()
      var dateDiff = dateToday.getTime() - postedDate.getTime()
      dateDiff = dateDiff/(1000 * 3600 * 24)
      if(dateDiff<1)
        return moment(datetime).format("[Today at] h:mm a");
      else if(dateDiff>=1 &&  dateDiff <2)
        return moment(datetime).format("[Yesterday at] h:mm a");
      else
        return moment(datetime).format("MMM DD, YYYY [at] h:mm a");
    },
    
  },
  // created(){
  //   this.loadShoppingOffer_infos();
  //   //api.get("api/user").then((data) => {this.user_email = data.data.email; console.log("email",this.user_email)});
  // },
  created(){
    console.log('posts',this.shoppingOffer_infos)
  },
  computed:{
    user(){
      return store.getters.getPersonal
    },
    posts(){
      return store.getters.getPosts
    },
    shoppingOffer_infos(){
      return this.posts.filter((post) => {return (post.email ==  this.userID) && (post.offer_post != null)})//filtering only the offer posts opf the current user
    }
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

<style scoped>
#fkmouse{
  pointer-events: none
}

#modal-background{
  display:none;
  position:fixed;
    justify-content: center;
    align-items: center;
    background-color: rgba(0,0,0,0.3);
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    
}


</style>