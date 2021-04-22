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
            <div class="flex space-x-2 sm:w-full">
              <span class="mt-1.5 rounded-full material-icons text-red-600">
                delivery_dining
              </span>
              <div class="sm:w-full">
                <button
                  @click="
                    (dropdown1 = !dropdown1),
                      (dropdown2 = false),
                      (dropdown3 = false),
                      (dropdown4 = false)
                  "
                  class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500"
                >
                  {{ deliveryAddress }}
                </button>
                <div class="relative">
                  <div
                    v-if="dropdown1"
                    class="absolute p-2 bg-white rounded-lg shadow-xl right-0 h-40 sm:w-full w-52"
                  >
                    <div id="scroll1" class="flex-auto overflow-y-scroll h-28">
                      <div class="flex flex-col items-start space-y-1.5">
                        <div
                          @click="
                            getHomeAddressValue();
                            dropdown1 = !dropdown1;
                          "
                          class="flex flex-col w-full space-y-1 px-2"
                          style="cursor: pointer"
                        >
                          <p
                            class="text-sm font-bold tracking-wide leading-none text-gray-900"
                          >
                            Home Address
                          </p>
                          <div class="flex-1 w-full px-2">
                            <p
                              id="homeAdd"
                              class="text-sm tracking-wide leading-none text-gray-900"
                            >
                              {{ userHomeAddress.province }},
                              {{ userHomeAddress.cityMunicipality }},
                              {{ userHomeAddress.barangay }},
                              {{ userHomeAddress.houseNumber }}
                            </p>
                          </div>
                        </div>
                        <hr class="flex w-full px-2" />
                        <div
                          v-for="(shipAdd, index) in userShippingAddress"
                          :key="index"
                        >
                          <div
                            @click="
                              getShipAddressValue(index);
                              dropdown1 = !dropdown1;
                            "
                            class="flex flex-col w-full space-y-1 px-2"
                            style="cursor: pointer"
                          >
                            <p
                              class="text-sm font-bold tracking-wide leading-none text-gray-900"
                            >
                              Shipping Address {{ index + 1 }}
                            </p>
                            <div class="flex-1 w-full px-2">
                              <p
                                :id="'shipAdd' + index"
                                class="text-sm tracking-wide leading-none text-gray-900"
                              >
                                {{ shipAdd.province }},
                                {{ shipAdd.cityMunicipality }},
                                {{ shipAdd.barangay }},
                                {{ shipAdd.houseNumber }}
                              </p>
                            </div>
                          </div>
                        </div>

                        <hr />
                      </div>
                    </div>
                    <div
                      @click="addAddress = !addAddress"
                      class="flex text-base items-center focus:outline-none p-2 space-x-1"
                      style="cursor: pointer"
                    >
                      <span class="text-red-700 material-icons">
                        add_circle
                      </span>
                      <div class="flex-1 w-full">
                        <p
                          class="text-sm font-bold tracking-wide leading-none text-red-700"
                        >
                          Add New Shipping Address
                        </p>
                      </div>
                    </div>
                    <div
                      @click.self="openAddModal"
                      v-if="addAddress"
                      class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2"
                    >
                      <div
                        class="inline-flex flex-col bg-white p-4 space-y-4 shadow rounded-xl h-auto w-80"
                      >
                        <div
                          class="flex flex-row w-full items-center space-x-2"
                        >
                          <label
                            class="block text-sm font-bold tracking-wide leading-none text-gray-900"
                            >Title</label
                          >
                          <input
                            class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker"
                            id="addressTitle"
                            type="text"
                            placeholder="Your shipping address title"
                          />
                        </div>
                        <div
                          class="flex flex-row w-full items-center space-x-2"
                        >
                          <label
                            class="block text-sm font-bold tracking-wide leading-none text-gray-900"
                            >Address</label
                          >
                          <input
                            class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker"
                            id="addressTitle"
                            type="text"
                            placeholder="Your shipping address"
                          />
                        </div>
                        <div class="justify-center flex">
                          <button
                            class="inline-flex items-center justify-center focus:outline-none px-4 vs:py-2 bg-red-700 rounded-full w-full h-6"
                          >
                            <p
                              class="text-base font-bold leading-normal text-center text-white"
                            >
                              Add
                            </p>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="flex space-x-2 sm:w-full">
              <span class="mt-1.5 rounded-full material-icons text-red-600">
                shopping_cart
              </span>
              <div class="sm:w-full">
                <input
                  @click="
                    (dropdown4 = !dropdown4),
                      (dropdown2 = false),
                      (dropdown3 = false),
                      (dropdown1 = false)
                  "
                  type="text"
                  id="myInputSP"
                  v-on:keyup="myFunctionSP()"
                  placeholder="Search for place"
                  title="Shopping Place"
                  class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 px-4 items-center py-2.5 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500"
                  v-model="shoppingPlace"
                />
                <!-- {{shoppingPlace}} -->
                <!-- </button> -->
                <div class="relative">
                  <div
                    v-if="dropdown4"
                    class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full w-52"
                  >
                    <div
                      class="flex flex-col w-full px-2 justify-start items-start"
                    >
                      <div
                        id="scroll1"
                        class="flex px-2 flex-col overflow-y-scroll w-full h-24"
                      >
                        <ul id="myUL" class="space-y-1">
                          <li
                            v-for="(sp, index) in shoppingPlaces"
                            :key="index"
                            @click="
                              setShoppingPlace(index);
                              dropdown4 = !dropdown4;
                            "
                          >
                            <a href="#" :id="'sp' + index">{{
                              sp.shoppingPlace
                            }}</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="flex flex-row justify-center w-full pt-3 space-x-4">
            <div class="flex space-x-2 sm:w-full">
              <span class="mt-1.5 rounded-full material-icons text-red-600">
                alarm
              </span>
              <input
                type="datetime-local"
                class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500"
                placeholder="Schedule"
                v-model="sched"
              />
            </div>

            <div class="flex space-x-2 sm:w-full">
              <span class="mt-1.5 rounded-full material-icons text-red-600">
                payments
              </span>
              <div class="sm:w-full">
                <button
                  @click="
                    (dropdown2 = !dropdown2),
                      (dropdown1 = false),
                      (dropdown3 = false),
                      (dropdown4 = false)
                  "
                  class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500"
                >
                  {{ payment }}
                </button>
                <div class="relative">
                  <div
                    v-if="dropdown2"
                    class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full w-52"
                  >
                    <div
                      v-for="(pm, index) in Payments"
                      :key="index"
                      class="flex flex-col w-full space-y-3 px-2 justify-start items-start"
                    >
                      <button
                        @click="
                          setPayment(index);
                          dropdown2 = !dropdown2;
                        "
                        class="flex w-full focus:outline-none justify-start items-start px-2"
                      >
                        <p
                          :id="'pm' + index"
                          class="text-sm tracking-wide leading-none text-gray-900"
                        >
                          {{ pm }}
                        </p>
                      </button>
                      <hr class="flex w-full" />
                    </div>
                  </div>
                </div>
              </div>
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
          
          <router-link
            :to="
              '/messages/?postNum=' +
              toEncrypt(post.postNumber) +
              '/?p=' +
              toEncrypt(post.user.email) +
              '/?p=' +
              toEncrypt(post.user.email)
            "
          >
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
import store from "../store/index";
export default {
  props: ["post"],
  data() {
    return {
      isOpen: false,
      addAddress: false,
      dropdown1: false,
      dropdown2: false,
      dropdown3: false,
      dropdown4: false,
      deliveryAddress: "Delivery Area",
      shoppingPlace: '',
      payment: "Payment Method",
      Payments:['Cash on Delivery','Gcash','PayMaya','Online Banking'],
      message:null,
      sched:null,
      requestData:null
    };
  },
  methods: {
    toEncryptData(){
      return btoa(JSON.stringify({
        deliveryAddress:this.deliveryAddress,
        shoppingPlace:this.shoppingPlace,
        payment:this.payment,
        message:this.message,
        deliverySchedule:this.sched,
        param: 'this_is_a_parameter_post_message'
        // shoppingListNumber: '1',
      }))
      // console.log('this is the requested data',this.requestData)
    },
    closeSendRequest() {
      this.$emit("closeSendRequest");
    },
    toEncrypt(val) {
      return btoa(val);
    },
    getHomeAddressValue() {
      this.deliveryAddress = document.getElementById("homeAdd").innerHTML;
      console.log(document.getElementById("homeAdd").innerHTML);
    },
    getShipAddressValue(index) {
      this.deliveryAddress = document.getElementById(
        "shipAdd" + index
      ).innerHTML;
      console.log(document.getElementById("shipAdd" + index).innerHTML);
    },
    myFunctionSP() {
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("myInputSP");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName("li");
      console.log(li[0].getElementsByTagName("a")[0]);
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().search(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    },
    setShoppingPlace(index) {
      this.shoppingPlace = document.getElementById("sp" + index).innerHTML;
    },
    setPayment(index) {
      this.payment = document.getElementById("pm" + index).innerHTML;
    },
  },
  computed: {
    userPersonal() {
      return store.getters.getPersonal;
    },
    userHomeAddress() {
      return store.getters.getAddress;
    },
    userShippingAddress() {
      return store.getters.getUserShippingAddress;
    },
    transportModes() {
      return store.getters.getTransportModes;
    },
    shoppingPlaces() {
      return store.getters.getShoppingPlaces;
    },
  },
};
</script>