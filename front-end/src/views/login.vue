<template class="">
<div>
 <loading
     :show="show"
     :label="label"
     event-show="show-my-full-loading"
     event-hide="hide-my-full-loading">
 </loading>
  <div class="flex items-center">
    <router-link to="/">
      <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 block" />
    </router-link>
    <h1
      class="absolute text-xl font-black tracking-widest left-16 font-raleway text-red-buttons block"
    >
      pasaBUY
    </h1>
  </div>

  <div
    id="login"
    class="items-center flex justify-center w-full mt-10 pb-16 bg-transparent px-3"
  >
    <div
      class="overflow-hidden font-bold text-center bg-white shadow-md w-full rounded-xl lg:w-97 2xl:w-97 xl:w-97 md:w-97 sm:w-97"
    >
      <div class="px-10 py-16">
        <h1 class="space-x-1 space-y-1 text-2xl">Welcome back!</h1>
        <p class="mb-5 space-y-1 font-light text-gray-500">
          Log in with your email and password
        </p>
        <form action="#" @submit.prevent="loginUser">
          <p class="w-full text-red-700">{{ errors }}</p>
          <div class="">
            <input
              v-model="dataForm.email"
              aria-label="Email"
              name=""
              type="email"
              required
              class="relative block w-full h-12 px-3 py-2 mt-8 mb-6 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm"
              placeholder="Email"
            />
          </div>
          <div class="text-2xl">
            <input
              v-model="dataForm.password"
              aria-label="Password"
              name=""
              type="password"
              required
              class="relative block w-full h-12 px-3 py-2 text-sm placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 focus:text-l"
              placeholder="Password"
            />
          </div>
          <div class="mt-6 text-left text-md text-grey-dark">
            <a class="font-bold underline-none" href="#">
              <router-link to="/forgot-password">
                Forgot Password?
              </router-link>
            </a>
          </div>
          <div class="flex justify-center py-5">
            <button
              class="w-full h-12 py-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none"
            >
              Log in
            </button>
          </div>
        </form>
        <div
          class="mt-4 font-normal text-left text-gray-500 text-md text-grey-dark"
        >
          Need and account?
          <router-link
            class="font-bold text-black border-b border-grey-dark"
            to="/sign-up"
            >Register</router-link
          >
        </div>
      </div>
    </div>
  </div>
  </div>
  <!---End -->
</template>


<style>
#journal-scroll::-webkit-scrollbar {
  width: 5px;
  cursor: pointer;
}

#journal-scroll::-webkit-scrollbar-track {
  background-color: rgba(229, 231, 235, var(--bg-opacity));
  cursor: pointer;
}

#journal-scroll::-webkit-scrollbar-thumb {
  cursor: pointer;
  background-color: rgba(185, 28, 28);
}

#iCheck {
  font-size: 16px;
  color: rgb(22, 22, 141);
}
#iMessage {
  font-size: 24px;
  color: rgb(22, 22, 141);
}
</style>
<script>
import api from "../api";
import store from "../store/index";
import loading from 'vue-full-loading'
export default {
  components: {
    loading,
  },
  data() {
    return {
      dataForm: {
        email: "",
        password: "",
      },
      errors: null,
      show: false,
      label: 'Loading...'
    };
  },
  methods: {
    loginUser() {
      this.show = !this.show
      api.get("/sanctum/csrf-cookie").then(() => {
        // Login...
        api
          .post("/api/login", this.dataForm)
          .then(() => {
            this.dispatches().then(() => {
              //wait for the dispatches to finish
              sessionStorage.setItem("isLoggedIn", true);
              this.show = !this.show
              this.$router.push({ name: "dashboard" });
            });
          })
          .catch((errors) => {
            this.show = !this.show
            this.errors = errors.response.data.errors.invalid.join();
          });
      });
      // setTimeout(() => {
      //   this.isLoading = false;
      // }, 5000);
      
    },
    async dispatches() {
      await store.dispatch("getAuthUser");
      await store.dispatch("getPersonal");
      await store.dispatch("getUserAddress");
      await store.dispatch("getPosts");
      await store.dispatch("getUnreadNotifications");
      await store.dispatch("getAllNotifications");
      await store.dispatch("getUserLang");
      await store.dispatch("getChatRoom");
      await store.dispatch("getUserTransactions");
      await store.dispatch("getUserShippingAddress");
      await store.dispatch("getTransportModes");
      await store.dispatch("getShoppingPlaces");


    },
  },

  created: function () {
    document.body.style.backgroundColor = "rgb(235,235,235)";
  },
  computed: {
    user() {
      return store.getters.getUser;
    },
  },
};
</script>