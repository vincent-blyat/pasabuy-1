<template>
  <!--User profile section-->
  <div class="inline-flex space-x-2 items-center justify-start p-4">
    <img
      class="w-14 h-full ssm:w-10 vs:w-12 border rounded-full border-gray-200"
      :src="userPersonal.profilePicture"
    />
    <p
      class="text-base font-bold ssm:text-sm vs:text-sm lvs:text-base leading-none text-gray-900"
    >
      {{ userPersonal.firstName }} {{ userPersonal.lastName }}
    </p>
  </div>
  <!--end-->

  <!--Delivery Information List-->
  <div
    class="flex flex-col mt-1 ssm:px-2 sm:px-2 justify-center items-center vs:px-2"
  >
    <div
      class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center"
    >
      <div class="flex space-x-2 sm:w-full">
        <span class="mt-1.5 rounded-full material-icons text-red-600">
          delivery_dining
        </span>
        <div class="sm:w-full">
          <button
             @click="dropdown1 = !dropdown1, dropdown2=false, dropdown3=false,dropdown4=false"
            class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs ssm:pr-0 vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500"
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
                    @click="getHomeAddressValue(); dropdown1=!dropdown1"
                    class="flex flex-col w-full space-y-1 px-2"
                    style="cursor: pointer"
                  >
                    <p
                      class="text-sm font-bold tracking-wide leading-none text-gray-900"
                    >
                      Home Address
                    </p>
                    <div class="flex-1 w-full px-2">
                      <p   id="homeAdd"
                        class="text-sm tracking-wide leading-none text-gray-900"
                      >
                        {{ userHomeAddress.province }}, {{ userHomeAddress.cityMunicipality }}, {{ userHomeAddress.barangay }}, {{ userHomeAddress.houseNumber }}
                      </p>
                    </div>
                  </div>
                  <hr class="flex w-full px-2" />
                    <div
                    v-for="(shipAdd, index) in userShippingAddress"
                    :key="index"
                  >
                    <div
                      @click="getShipAddressValue(index);dropdown1=!dropdown1"
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
                          {{ shipAdd.barangay }}, {{ shipAdd.houseNumber }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                @click="addAddress = !addAddress"
                class="flex text-base items-center focus:outline-none p-2 space-x-1"
                style="cursor: pointer"
              >
                <span class="text-red-700 material-icons"> add_circle </span>
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
                  <div class="flex flex-row w-full items-center space-x-2">
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
                  <div class="flex flex-row w-full items-center space-x-2">
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
            @click="dropdown4 = !dropdown4, dropdown2=false, dropdown3=false,dropdown1=false"
            type="text"
            id="myInput"
            v-on:keyup="myFunction()"
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
              <div class="flex flex-col w-full px-2 justify-start items-start">
           
                <div
                  id="scroll1"
                  class="flex px-2 flex-col overflow-y-scroll w-full h-24"
                >
                  <ul id="myUL" class="space-y-1" >
                    <li v-for="(sp, index) in shoppingPlaces" :key="index" @click="setShoppingPlace(index);dropdown4=!dropdown4"><a href="#" :id="'sp'+index">{{sp.shoppingPlace}}</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="flex flex-row pt-3 ssm:pt-2 ssm:flex-col ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center"
    >
      <div class="flex space-x-2 sm:w-full">
        <span class="mt-1.5 rounded-full material-icons text-red-600">
          alarm
        </span>
        <input
        type="datetime-local"
          class="focus:outline-none sm:w-full ssm:w-full ssm:h-auto ssm:text-xs flex vs:w-full w-52 h-11 py-2.5 px-4 items-center vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500"
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
            @click="dropdown2 = !dropdown2, dropdown1=false, dropdown3=false,dropdown4=false"
            class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500"
          >
            {{payment}}
          </button>
          <div class="relative">
            <div
              v-if="dropdown2"
              class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full w-52"
            >
              <div
                v-for="(pm,index) in Payments" :key="index"
                class="flex flex-col w-full space-y-3 px-2 justify-start items-start"
              >
                <button
                  @click="setPayment(index); dropdown2=!dropdown2"
                  class="flex w-full focus:outline-none justify-start items-start px-2"
                >
                  <p :id="'pm'+index" class="text-sm tracking-wide leading-none text-gray-900">
                    {{pm}}
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
  <div class="flex justify-center items-center ssm:px-2 mt-3 sm:px-2 vs:px-2">
    <button
      class="inline-flex items-center justify-center p-4 bg-gray-100 rounded-full w-31.75 ssm:w-full vs:w-full h-14 ssm:h-10 vs:h-12"
    >
      <div class="flex space-x-2 items-center">
        <img class="w-6 h-full rounded-lg" src="img/add.svg" />
        <p
          class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900"
        >
          Select Shopping List
        </p>
      </div>
    </button>
  </div>
  <!--end-->

  <!--Comment Section-->
  <div class="justify-center flex mt-3 ssm:px-2 vs:px-2 sm:px-2">
    <textarea
      id="postMessage"
      name="postMessage"
      rows="3"
      class="p-4 bg-gray-100 shadow-sm text-sm ssm:text-xs vs:text-xs lvs:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 ssm:w-full vs:w-full"
      placeholder="Enter your post message here..."
      v-model="caption"
    ></textarea>
  </div>
  <!--end-->

  <!--Post button-->
  <div class="justify-center flex mt-3 pb-3 ssm:px-2 vs:px-2 sm:px-2">
    <button @click="submit"
      class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 ssm:w-full vs:w-full h-10"
    >
      <p
        class="text-base ssm:text-sm vs:text-sm sm:text-sm font-bold leading-normal text-center text-white"
      >
        Post
      </p>
    </button>
  </div>
  <!--end-->
</template>

<script>
import store from "../store/index";
import VueSimpleAlert from 'vue-simple-alert'
export default {
  data() {
    return {
      isOpen: false,
      addAddress: false,
      dropdown1: false,
      dropdown2: false,
      dropdown3: false,
      dropdown4: false,
      deliveryAddress: "Delivery Address",
      shoppingPlace: '',
      transport: '',
      payment: "Payment Method",
      Payments:['Cash on Delivery','Gcash','PayMaya','Online Banking'],
      caption:null,
      capacity:null,
      sched:null

    };
  },
  methods: {
    submit(){
        var form ={
            postIdentity: 'request_post',
            postStatus: 'Acccepting Orders',
            deliveryArea: this.deliveryAddress,
            shoppingPlace: this.shoppingPlace,
            deliverySchedule: this.sched,
            paymentMethod: this.payment,
            caption:this.caption,
            shoppingList: '1' 
        }
      
        store.dispatch('createPostRequest',form).then(()=>{
            store.dispatch('getPosts').then(()=>{
              this.$parent.$emit('getSortPosts')
            })
            VueSimpleAlert.alert("Request post created successfully", "Sucess","success")
            this.$parent.$emit('closeModal')
        })
    },
    openAddModal() {
      this.addAddress = !this.addAddress;
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
    myFunction() {
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    },
    setShoppingPlace(index){
        this.shoppingPlace = document.getElementById('sp'+index).innerHTML
    },
    setPayment(index){
        this.payment = document.getElementById('pm'+index).innerHTML
    }
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

<style scoped>
#scroll1::-webkit-scrollbar-track {
  border-radius: none;
}
#scroll1::-webkit-scrollbar {
  width: 6px;
}
#scroll1::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background-color: grey;
}
#button1 {
  padding: 0;
  margin: 0;
}
#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
#myUL li a {
  margin-top: -1px; /* Prevent double borders */
  text-decoration: none;
  color: black;
  display: block;
}
#myUL li a:hover:not(.header) {
  background-color: #eee;
}
::placeholder {
  --tw-text-opacity: 1;
  color: rgba(107, 114, 128, var(--tw-text-opacity));
}
</style>