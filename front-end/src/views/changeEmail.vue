<template>
  <div v-if="toggle" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
  <div v-if="toggle" class="fixed overflow-y-auto items-center inset-0">
    <div class="flex mt-4 w-full p-3 items-center justify-center py-20">
      <div
        class="bg-white ring-1 ring-gray-300 p-5 w-full rounded-xl 2xl:w-97 lg:w-97 xl:w-97 xl:mr-16 md:w-8/12 sm:w-10/12 shadow-2xl h-auto"
      >
        <div class="flex flex-row items-center justify-between p-3">
          <p class="hidden lg:block 2xl:block xl:block"></p>
          <p class="text-lg font-extrabold">Update Email</p>
          <p
            class="font-bold text-blue-700 cursor-pointer left-10"
            @click="toggle = false"
          >
            Close
          </p>
        </div>
        <div class="text-center text-gray-400 text-sm">
          <p>
            Update your email below. There will be a new email sent that you
            will need to verify this new email.
          </p>
         
        </div>
         <p class="text-center text-red-500">{{ errors }}</p>
        <div class=" ">
          <div class="flex flex-col p-5 space-y-4">
            <div class="flex flex-col">
              <span class="ml-2">Password</span>
              <input
                id="password"
                v-model="password"
                type="password"
                class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
              />
            </div>

            <div class="flex flex-col">
              <span class="ml-2">New Email</span>
              <input
                id="new_email"
                v-model="newEmail"
                type="text"
                class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
              />
            </div>
          </div>
        </div>
        <div
          class="flex justify-between mt-4 px-5 text-2xlspace-x-4 items-center"
        >
          <button
            @click="nextPage"
            class="px-4 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl"
          >
            Next
          </button>
        </div>
      </div>
    </div>
  </div>
  <Confirmation v-if="toggle_confirmation" :email="newEmail"/>
</template>

<script>
import Confirmation from "./confirm_email";
import api from "../api";
export default {
  components: {
    Confirmation,
  },
  data() {
    return {
      toggle: true,
      toggle_confirmation: false,
      user: null,
      errors: null,
      password: null,
      newEmail:null
    };
  },
  methods: {
    nextPage() {
      
      var params = { password: this.password, email:this.newEmail };
      api
        .post("api/confirmUser", params)
        .then((res) => {
          this.toggle = false;
          this.toggle_confirmation = !this.toggle_confirmation;
          this.toggle_confirmation=true;
          localStorage.setItem('a',res.data.code)
        })
        .catch((errors) => {
          console.log(errors.response.data);
          this.errors=null;
          if(errors.response.data.email == undefined)
            this.errors = errors.response.data.password+' '
          else if(errors.response.data.password == undefined)
            this.errors = errors.response.data.email+' '
          else
            this.errors = errors.response.data.email+' '+ errors.response.data.password
        });
    },
  },
  created() {
    api
      .get("api/user")
      .then((res) => {
        this.user = res.data.email;
      })
      .catch((errors) => {
        console.log(errors);
      });
  }
};
</script>
