<template>
   <!--post comment-->
   <div class="h-screen">
   <!--Modal-->
   <PostModal v-if="postModalVisible" @closeModal="listener"/>
   <!--end--> 
   <div class="flex items-center justify-center mt-10">
    <div class="inline-flex space-x-4 items-center justify-center p-6 bg-white shadow rounded-xl h-25" style="width: 608px;">
        <img class="w-14 h-14 rounded-full" src="img/yami.jpg"/>
        <button @click="togglePostModal" class="flex items-center justify-start text-base outline-none leading-none text-gray-500 py-5 pl-6 bg-gray-100 rounded-full h-14" style="width: 488px;">
        Post an order request</button>
    </div>
  </div>
  <!--end-->

  <!--user post-->
  <div class="flex items-center justify-center mt-10">
    <div class="space-x-4 h-auto p-6 bg-white shadow rounded-xl">
      <div class="flex flex-col items-start justify-start">

        <!--section 1-->
        <div class="flex flex-grow space-x-4 flex-wrap flex-row w-full justify-between">
          <div class="flex">
            <img class="w-14 h-14 rounded-full" src="img/yami.jpg"/>
            <div class="flex flex-col items-start px-4">
              <div class="space-x-8">
                <span class="text-base font-bold leading-none text-gray-900">Yami Sukehiro</span>
                <!--check icon here-->
                <span class="text-base leading-none text-gray-500">posted a shopping offer.</span>
              </div>
              <div class=" py-1">
                <span class="text-sm leading-none text-gray-500">3 hours ago</span>
              </div>
            </div>
          </div>
          <div>
            <img class="w-6 h-auto rounded-lg" src="img/3dot.svg"/>
          </div>
        </div>
        <!--end-->

        <!--section 2-->
        <div class="inline-flex mt-4 items-start justify-start px-2 py-1 bg-gray-100 rounded-full">
          <p class="text-sm font-bold leading-none text-blue-600">Accepting Requests</p>
        </div>
        <!--end-->

        <!--section 3-->
        <div class="flex items-center justify-start mt-4 w-full space-x-2">
          <div class="flex-col items-start pr-12">
            <div class="flex space-x-2">
              <img class="w-6 h-full rounded-lg" src="img/location.svg"/>
              <p class="text-sm leading-none text-gray-900 py-1">Banquerohan, Legazpi City</p>
            </div>
            <div class=" flex space-x-2 py-2">
              <img class="w-6 h-6 rounded-lg" src="img/alarm.svg"/>
              <p class="text-sm leading-none text-gray-900 py-1">Friday at 5 PM</p>
            </div>
            
          </div>
          <div class="flex-col">
            <div class="flex space-x-2">
              <img class="w-6 h-6 rounded-lg" src="img/shopping_cart.svg"/>
              <p class="text-sm leading-none text-gray-900 py-1">Shopping at SM City Legazpi</p>
            </div>
            <div class="flex space-x-2 py-2">
              <img class="w-6 h-6 rounded-lg" src="img/payments.svg"/>
              <p class="text-sm leading-none text-gray-900 py-1">Payment first</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex flex-col  mt-3 w-full items-start justify-start p-4 bg-gray-100 rounded-xl">
            <div class="inline-flex flex-row space-x-4">
                <span class="text-base leading-none text-gray-900">Shopping List</span>
                <span class="text-base leading-none text-gray-500">8 items</span>
            </div>
            <div class="inline-flex flex-row space-x-4 py-4 px-5">
                <div>
                  <p class="w-60 text-sm leading-normal text-gray-900">•flour (1 kg)<br/>• vanilla extract (50 mL)<br/>• brown sugar<br/>• cocoa powder</p>
                </div>
                <div>
                    <p class=" text-sm leading-normal text-gray-900">• baking soda<br/>• chocolate syrup<br/>• powdered sugar<br/>• cocoa powder</p>
                </div>
            </div>
        </div>
        <!--section 4-->

        <div class="inline-flex  items-start justify-start mt-3 rounded-xl" style="width: 560px; height: 64px;">
            <p class="text-sm leading-loose w-auto text-gray-900">Hi! If there’s anyone who can help me and sabuy my groceries, I would greatly appreciate it. Send me an offer if you’re willing. Thanks!</p>
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
</template>

<script>
import PostModal from "./PostModal"
export default {
    data() {
    return {
      postModalVisible: false
    }
  },
  components: {
    PostModal
  },
  methods:{
    togglePostModal(){
      this.postModalVisible = !this.postModalVisible
    },
    listener(){
      this.postModalVisible = false;
    }
  }
}
</script>