<template>
  <!-- Post Modal-->
  <div
    v-on:click.self="closeSendRequest"
    class="fixed inset-0 z-40 flex items-center justify-center pt-20 bg-black bg-opacity-25 font-nunito"
  >
    <div
      class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 vs:w-96.7"
    >
      <div class="flex flex-col"> 
        <!--Create Post section-->
        <h1
          class="relative items-center justify-center py-3 pl-4 text-xl font-bold leading-normal text-center text-gray-900 vs:ml-14"
        >
          Send Request to {{ post.user.firstName }} {{ post.user.lastName }}
          <button
            @click.prevent="closeSendRequest"
            class="absolute mb-1 ml-1 text-sm font-bold leading-none text-indigo-900 right-6 top-5 vs:ml-8 focus:outline-none"
          >
            Close
          </button>
        </h1>

        <hr />
        <span class="pt-3 pl-5 text-base">Order Details</span>
        <div class="flex flex-col items-center justify-center mt-4">
          <div class="flex flex-row justify-center w-full space-x-4">
            <div class="flex space-x-2">
              <span class="mt-1.5 rounded-full material-icons text-red-600">
                delivery_dining
              </span>
              <input
                class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500"
                readonly
                :value="post.offer_post.deliveryArea"
                placeholder="Delivery Address"
              />
            </div>

            <div class="flex space-x-2">
              <span class="mt-1.5 rounded-full material-icons text-red-600">
                shopping_cart
              </span>
              <input
                class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500"
                readonly
                :value="post.offer_post.shoppingPlace"
                placeholder="Shopping Place"
              />
            </div>
          </div>

          <div class="flex flex-row justify-center w-full pt-3 space-x-4">
            <div class="flex space-x-2">
              <span class="mt-1.5 rounded-full material-icons text-red-600">
                alarm
              </span>
              <input
                class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-2 items-center pr-2 bg-gray-100 rounded-xl text-sm leading-none text-gray-500"
                readonly
                :value="timestampSched(post.offer_post.deliverySchedule)"
                placeholder="Schedule"
              />
            </div>

            <div class="flex space-x-2">
              <span class="mt-1.5 rounded-full material-icons text-red-600">
                payments
              </span>
              <input
                class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500"
                readonly
                :value="post.offer_post.paymentMethod"
                placeholder="Payment Method"
              />
            </div>
          </div>
        </div>
        <!--end-->

        <!--Select Shopping List button-->
        <div class="flex items-center justify-center mt-4">
          <button
            class="inline-flex items-center justify-center p-4 bg-gray-100 rounded-full w-31.75 vs:w-26.5 h-11"
          >
            <div class="flex items-center space-x-2">
              <img class="w-6 h-full rounded-lg" src="img/add.svg" />
              <p class="text-sm font-extrabold leading-none text-gray-900">
                Select Shopping List
              </p>
            </div>
          </button>
        </div>
        <!--end-->

        <!--Comment Section-->
        <div class="flex justify-center mt-6">
          <textarea
            id="postMessage"
            name="postMessage"
            rows="3"
            class="p-4 bg-gray-100 shadow-sm sm:text-sm rounded-2xl outline-none h-16 w-31.75 vs:w-26.5 text-sm"
            placeholder="Enter your post message here..."
            v-model="message"
          ></textarea>
        </div>
        <!--end-->

        <!--Post button-->
        <div class="flex justify-center pb-6 mt-6">
        <router-link :to="'/messages/?postNum='+toEncrypt(post.postNumber)+'/?p='+toEncrypt(post.user.email)+'/?p='+toEncrypt(this.message)">
          <button
            class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 vs:w-26.5 h-8"
          >
            <p
              class="text-base font-bold leading-normal text-center text-white"
            >
              Send
            </p>
          </button>
        </router-link>
        </div>
      </div>
    </div>
  </div>

  <!--end-->
</template>
<script>
import moment from "moment"
export default {
  props: ["post"],
  data() {
    return {
      isOpen: false,
      message:null
    };
  },
  methods: {
    closeSendRequest() {
      this.$emit("closeSendRequest");
    },
    toEncrypt(val){
      return btoa(val)
    },
    timestampSched(datetime) {
      var schedDate = new Date(datetime);
      var dateToday = new Date();
      var dateDiff = schedDate.getTime() - dateToday.getTime();
      dateDiff = dateDiff / (1000 * 3600 * 24);
      console.log(dateDiff);
      if (dateDiff < 1 && dateDiff > 0)
        return moment(datetime).format("[Today at] h:mm a");
      else if (dateDiff >= 1 && dateDiff < 2)
        return moment(datetime).format("[Tommorow at] h:mm a");
      else return moment(datetime).format("[From] MMM DD, YYYY [at] h:mm a");
    },
  },
};
</script>