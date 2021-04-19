<template>
  <!-- Post Modal-->
  <div
    v-on:click.self="closeSendOffer"
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
          Send Offer to {{ post.user.firstName }} {{ post.user.lastName }}
          <button
            @click.prevent="closeSendOffer"
            class="absolute mb-1 ml-1 text-sm font-bold leading-none text-indigo-900 right-6 top-5 vs:ml-8 focus:outline-none"
          >
            Close
          </button>
        </h1>

        <hr />
       
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
    closeSendOffer() {
      this.$emit("closeSendOffer");
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