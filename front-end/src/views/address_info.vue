<template>
  <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm">
    <div class="flex justify-between">
      <div class="flex gap-4">
        <p class="font-bold font-nunito text-sm">Address Info</p>
      </div>
      <div>
        <label
          @click="toggle_add = !toggle_add"
          class="text-blue-800 w-min font-bold text-sm cursor-pointer select-none"
          >Add new Shipping Address</label
        >
      </div>
    </div>
    <div class="text-sm w-full pt-8 space-y-8 xl:w-97 2xl:w-97 lg:w-97">
      <div class="flex items-center space-x-4">
        <p class="uppercase font-bold select-none">Home address</p>
        <span
          @click="(toggle = !toggle), setOldData()"
          class="material-icons text-base text-gray-500 cursor-pointer sele"
        >
          mode
        </span>
      </div>
      <span class="font-raleways font-bold grid grid-cols-2">
        <p class="text-gray-500 uppercase">Landmark</p>
        <span>
          <p>{{ address_info.landmark }}</p>
        </span>
      </span>

      <span class="font-raleways font-bold grid grid-cols-2">
        <p class="text-gray-500">HOUSE NUMBER</p>
        <span>
          <p>{{ address_info.house_number }}</p>
        </span>
      </span>
      <span class="font-raleways font-bold grid grid-cols-2">
        <p class="text-gray-500">PROVINCE</p>
        <span>
          <p>{{ address_info.province }}</p>
        </span>
      </span>
      <span class="font-raleways font-bold grid grid-cols-2">
        <p class="text-gray-500">CITY/MUNICIPALITY</p>
        <span>
          <p>{{ address_info.city }}</p>
        </span>
      </span>
      <span class="font-raleways font-bold grid grid-cols-2">
        <p class="text-gray-500">BARANGAY</p>
        <span>
          <p>{{ address_info.barangay }}</p>
        </span>
      </span>
    </div>
    <div class="text-sm w-full pt-8 space-y-8 xl:w-97 2xl:w-97 lg:w-97">
      <div class="grid grid-cols-2 items-center">
        <select
          value="adjsad"
          id="select_address"
          @click="AddShippingAdd()"
          v-model="selected"
          class="h-9 rounded-xl px-2 bg-gray-300 bg-right text-gray-400 font-bold select-none focus:outline-none appearance-none bg-dropdown bg-no-repeat"
        >
          <option
            v-for="(option, index) in userShippingAddresses"
            :key="index"
            v-bind:value="index"
            class="text-black"
          >
            Shipping Address {{ index + 1 }}
          </option>
        </select>
      </div>
      <div class="flex items-center space-x-4">
        <p class="uppercase font-bold select-none">
          Shipping Address
          {{ selected + 1 }}
        </p>
        <span
          @click="toggle_shipping = !toggle_shipping, setOldDataShip()"
          class="material-icons text-base text-gray-500 cursor-pointer select-none"
        >
          mode
        </span>
      </div>
      <span class="font-raleways font-bold grid grid-cols-2">
        <p class="text-gray-500 uppercase">Landmark</p>
        <span>
          <p>{{ Landmark }}</p>
        </span>
      </span>

      <span class="font-raleways font-bold grid grid-cols-2">
        <p class="text-gray-500">HOUSE NUMBER</p>
        <span>
          <p>{{ House_number }}</p>
        </span>
      </span>
      <span class="font-raleways font-bold grid grid-cols-2">
        <p class="text-gray-500">PROVINCE</p>
        <span>
          <p>{{ Province }}</p>
        </span>
      </span>
      <span class="font-raleways font-bold grid grid-cols-2">
        <p class="text-gray-500">CITY/MUNICIPALITY</p>
        <span>
          <p>{{ City }}</p>
        </span>
      </span>
      <span class="font-raleways font-bold grid grid-cols-2">
        <p class="text-gray-500">BARANGAY</p>
        <span>
          <p>{{ Barangay }}</p>
        </span>
      </span>
    </div>
    <!--Edit Home address-->
    <div v-if="toggle" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
    <div v-if="toggle" class="fixed overflow-y-auto items-center inset-0">
      <div class="flex mt-4 w-full p-3 items-center justify-center py-20">
        <div
          class="bg-white ring-1 ring-gray-300 p-5 w-full rounded-md 2xl:w-97 lg:w-97 xl:w-97 xl:mr-16 md:w-8/12 sm:w-10/12 shadow-2xl h-auto"
        >
          <div class="flex flex-row items-center justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg flex font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">
              Update Address Info
            </p>
            <p
              class="font-bold text-blue-700 cursor-pointer left-10"
              @click="(toggle = false), getOldData()"
            >
              Close
            </p>
          </div>

          <div class=" ">
            <div class="flex flex-col space-y-4">
              <div class="flex flex-col">
                <span class="ml-2 uppercase text-sm font-bold text-gray-500"
                  >Landmark</span
                >
                <input
                  type="text"
                  v-model="address_info.landmark"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                />
              </div>

              <div class="flex flex-col">
                <span class="ml-2 uppercase text-sm font-bold text-gray-500"
                  >House Number</span
                >
                <input
                  type="text"
                  v-model="address_info.house_number"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                />
              </div>
              <div class="flex flex-col">
                <span class="ml-2">Province:</span>
                <select
                  id="Province"
                  @change="getProvCode()"
                  v-model="selectedProvince"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                >
                  <option value="Province" disabled>Choose Province</option>
                  <option
                    v-for="province in refProvince"
                    v-bind:key="province.id"
                    v-bind:value="province.provCode"
                  >
                    {{ province.provDesc }}
                  </option>
                </select>
              </div>

              <div class="flex flex-col">
                <span class="ml-2">City/Municaplity: </span>
                <select
                  id="City"
                  @change="getCityCode()"
                  v-model="selectedCity"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                >
                  <option value="City" disabled>
                    Choose City/Municipality
                  </option>
                  <option
                    v-for="city in refCity"
                    v-bind:key="city.id"
                    v-bind:value="city.citymunCode"
                  >
                    {{ city.citymunDesc }}
                  </option>
                </select>
              </div>

              <div class="flex flex-col">
                <span class="ml-2">Barangay: </span>
                <select
                  v-model="selectedBrgy"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                >
                  <option value="Brgy" disabled>Choose Baranggay</option>
                  <option
                    v-for="brgy in refBaranggay"
                    v-bind:key="brgy.id"
                    v-bind:value="brgy.brgyDesc"
                  >
                    {{ brgy.brgyDesc }}
                  </option>
                </select>
              </div>
            </div>
            <div class="flex justify-between mt-4 items-center space-x-4">
              <button
                @click="(toggle = false), getOldData()"
                class="focus:outline-none px-3 h-7 w-full bg-white ring-1 ring-black rounded-2xl"
              >
                Cancel
              </button>
              <button
                @click="save_data()"
                class="px-5 focus:outline-none bg-red-buttons text-white w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl"
              >
                Save
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Home Address Edit end-->
    <!--Edit Shipping Address-->
    <div
      v-if="toggle_shipping"
      class="fixed inset-0 h-max bg-white bg-opacity-75"
    ></div>
    <div
      v-if="toggle_shipping"
      class="fixed overflow-y-auto items-center inset-0"
    >
      <div class="flex mt-4 w-full p-3 items-center justify-center py-20">
        <div
          class="bg-white ring-1 ring-gray-300 p-5 w-full rounded-md 2xl:w-97 lg:w-97 xl:w-97 xl:mr-16 md:w-8/12 sm:w-10/12 shadow-2xl h-auto"
        >
          <div class="flex flex-row items-center justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg flex font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">
              Update Shipping Address
            </p>
            <p
              class="font-bold text-red-700 cursor-pointer left-10"
              @click="
                (toggle_shipping = false), (toggle_delete = !toggle_delete)
              "
            >
              Delete
            </p>
          </div>

          <div class=" ">
            <div class="flex flex-col space-y-4">
              <div class="flex flex-col">
                <span class="ml-2 uppercase text-sm font-bold text-gray-500"
                  >Landmark</span
                >
                <input
                  type="text"
                   
                  v-model="Landmark"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                />
              </div>

              <div class="flex flex-col">
                <span class="ml-2 uppercase text-sm font-bold text-gray-500"
                  >House Number</span
                >
                <input
                  type="text"
                  
                  v-model="House_number"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                />
              </div>
              <div class="flex flex-col">
                <span class="ml-2">Province:</span>
                <select
                  id="Province"
                  @change="getProvCode()"
                  v-model="selectedProvince"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                >
                  <option value="Province" disabled>Choose Province</option>
                  <option
                    v-for="province in refProvince"
                    v-bind:key="province.id"
                    v-bind:value="province.provCode"
                  >
                    {{ province.provDesc }}
                  </option>
                </select>
              </div>

              <div class="flex flex-col">
                <span class="ml-2">City/Municaplity: </span>
                <select
                  id="City"
                  @change="getCityCode()"
                  v-model="selectedCity"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                >
                  <option value="City" disabled>
                    Choose City/Municipality
                  </option>
                  <option
                    v-for="city in refCity"
                    v-bind:key="city.id"
                    v-bind:value="city.citymunCode"
                  >
                    {{ city.citymunDesc }}
                  </option>
                </select>
              </div>

              <div class="flex flex-col">
                <span class="ml-2">Barangay: </span>
                <select
                  v-model="selectedBrgy"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                >
                  <option value="Brgy" disabled>Choose Baranggay</option>
                  <option
                    v-for="brgy in refBaranggay"
                    v-bind:key="brgy.id"
                    v-bind:value="brgy.brgyDesc"
                  >
                    {{ brgy.brgyDesc }}
                  </option>
                </select>
              </div>
            </div>
            <div class="flex justify-between items-center mt-4 space-x-4">
              <button
                @click="toggle_shipping = false, getOldDataShip()"
                class="focus:outline-none px-3 h-7 w-full bg-white ring-1 ring-black rounded-2xl"
              >
                Cancel
              </button>
              <button
                @click="save_data_shippingAdd()"
                class="px-5 focus:outline-none bg-red-buttons text-white w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl"
              >
                Save
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Edit Shipping Address-->
    <!--Add new Shipping Address-->
    <div
      v-if="toggle_add"
      class="fixed inset-0 h-max bg-white bg-opacity-75"
    ></div>
    <div v-if="toggle_add" class="fixed overflow-y-auto items-center inset-0">
      <div class="flex mt-4 w-full p-3 items-center justify-center py-20">
        <div
          class="bg-white ring-1 ring-gray-300 p-5 w-full rounded-md 2xl:w-97 lg:w-97 xl:w-97 xl:mr-16 md:w-8/12 sm:w-10/12 shadow-2xl h-auto"
        >
          <div class="flex flex-row items-center justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg flex font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">
              Add New Shipping Address
            </p>
            <p
              class="font-bold text-blue-700 cursor-pointer left-10"
              @click="
                (toggle_add = false),
                  (selectedProvince = 'Province'),
                  (selectedCity = 'City'),
                  (selectedBrgy = 'Brgy')
              "
            >
              Close
            </p>
          </div>

          <div class=" ">
            <div class="flex flex-col space-y-4">
              <div class="flex flex-col">
                <span class="ml-2 uppercase text-sm font-bold text-gray-500"
                  >Landmark</span
                >
                <input
                  type="text"
                  id="Landmark_add"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                />
              </div>

              <div class="flex flex-col">
                <span class="ml-2 uppercase text-sm font-bold text-gray-500"
                  >House Number</span
                >
                <input
                  type="text"
                  id="H_number_add"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                />
              </div>
              <div class="flex flex-col">
                <span class="ml-2">Province:</span>
                <select
                  id="Province"
                  @change="getProvCode()"
                  v-model="selectedProvince"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                >
                  <option value="Province" disabled>Choose Province</option>
                  <option
                    v-for="province in refProvince"
                    v-bind:key="province.id"
                    v-bind:value="province.provCode"
                  >
                    {{ province.provDesc }}
                  </option>
                </select>
              </div>

              <div class="flex flex-col">
                <span class="ml-2">City/Municaplity: </span>
                <select
                  id="City"
                  @change="getCityCode()"
                  v-model="selectedCity"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                >
                  <option value="City" disabled>
                    Choose City/Municipality
                  </option>
                  <option
                    v-for="city in refCity"
                    v-bind:key="city.id"
                    v-bind:value="city.citymunCode"
                  >
                    {{ city.citymunDesc }}
                  </option>
                </select>
              </div>

              <div class="flex flex-col">
                <span class="ml-2">Barangay: </span>
                <select
                  v-model="selectedBrgy"
                  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"
                >
                  <option value="Brgy" disabled>Choose Baranggay</option>
                  <option
                    v-for="brgy in refBaranggay"
                    v-bind:key="brgy.id"
                    v-bind:value="brgy.brgyDesc"
                  >
                    {{ brgy.brgyDesc }}
                  </option>
                </select>
              </div>
            </div>
            <div class="flex justify-between items-center mt-4 space-x-4">
              <button
                @click="
                  (toggle_add = false),
                    (selectedProvince = 'Province'),
                    (selectedCity = 'City'),
                    (selectedBrgy = 'Brgy')
                "
                class="focus:outline-none px-3 h-7 w-full bg-white ring-1 ring-black rounded-2xl"
              >
                Cancel
              </button>
              <button
                type="submit"
                @click="save_newShippingAdd()"
                class="px-5 focus:outline-none bg-red-buttons text-white w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl"
              >
                Save
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Add new Shipping Address-->
    <!--Delete Confirmation-->
    <div
      v-if="toggle_delete"
      class="fixed inset-0 h-max bg-white bg-opacity-75"
    ></div>
    <div v-if="toggle_delete" class="fixed overflow-y-auto inset-0">
      <div class="flex mt-4 w-full p-3 items-center justify-center py-20">
        <div
          class="bg-white ring-1 ring-gray-300 p-5 w-full rounded-xl 2xl:w-97 lg:w-97 xl:w-97 xl:mr-16 md:w-8/12 sm:w-10/12 shadow-2xl h-auto"
        >
          <div class="flex flex-row items-center justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">
              Delete Shipping Address
            </p>
            <p
              class="font-bold text-blue-700 cursor-pointer left-10"
              @click="toggle_delete = false"
            >
              Close
            </p>
          </div>
          <div class="text-center pb-5">
            <p class="text-lg">
              Are you sure you want to remove this shipping Address?
            </p>
          </div>
          <hr />
          <div class=" ">
            <div class="flex justify-between mt-4 px-5 space-x-4 items-center">
              <button
                @click="toggle_delete = false"
                class="px-4 bg-white text-black focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl"
              >
                Cancel
              </button>

              <button
                @click="(toggle_delete = false), delete_shippingAdd()"
                class="px-4 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl"
              >
                Delete
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--End Delete Confirmation-->
  </div>
</template>
<script>
//import ShippingAdd from './shopping_address_info.vue'
import store from "../store/index";
import api from "../api";
import VueSimpleAlert from "vue-simple-alert";
export default {
  name: "AddressInfo",
  /* components:{
    ShippingAdd
  },*/
  data() {
    return {
      toggle: false,
      toggle_add: false,
      toggle_shipping: false,
      toggle_delete: false,
      //  address_info:this.userHomeAddress,
      address_info: {},
      old: {
        house_number: "",
        province: "",
        city: "",
        barangay: "",
        landMark: "",
      },
      Landmark: "",
      House_number: "",
      Province: "",
      City: "",
      Barangay: "",
      num: 0,
      selected: 0,
      shippingAdd: [],
      selectedProvince: "Province",
      selectedCity: "City",
      selectedBrgy: "Brgy",
      refProvince: [],
      refCity: [],
      newrefCity: [],
      refBaranggay: [],
      newrefBaranggay: [],
    };
  },
  created: function () {
    api
      .get("/api/refProvince")
      .then((res) => {
        this.refProvince = res.data;
      })
      .catch((error) => {
        console.log(error);
      });
    this.address_info = {
      landmark: this.userHomeAddress.landMark,
      house_number: this.userHomeAddress.houseNumber,
      province: this.userHomeAddress.province,
      city: this.userHomeAddress.cityMunicipality,
      barangay: this.userHomeAddress.barangay,
    };
    this.shippingAdd = this.userShippingAddresses;
    console.log(
      "home address ",
      this.userHomeAddress,
      "shipping address ",
      this.userShippingAddresses
    );

    this.Landmark = this.shippingAdd[0].landMark;
    this.House_number = this.shippingAdd[0].houseNumber;
    this.Province = this.shippingAdd[0].province;
    this.City = this.shippingAdd[0].cityMunicipality;
    this.Barangay = this.shippingAdd[0].barangay;
  },
  methods: {
    save_data() {
      //set old address data to this variable so that if it catch an error the old data will bne set
      let oldAddr = {
        province: this.address_info.province,
        city: this.address_info.city,
        barangay: this.address_info.barangay,
        house_number: this.address_info.house_number,
        landmark: this.address_info.landmark,
      };
      this.address_info.province = document.getElementById("Province").options[
        document.getElementById("Province").selectedIndex
      ].text;
      this.address_info.city = document.getElementById("City").options[
        document.getElementById("City").selectedIndex
      ].text;
      this.address_info.barangay = this.selectedBrgy;

      console.log("this is the new home address ", this.address_info);
      api
        .post("/api/editAddress", this.address_info)
        .then((res) => {
          //this.user = res.data;
          store.dispatch("getUserAddress").then(() => {
            VueSimpleAlert.alert(res.data.message, "Success", "success");
            this.toggle = false;
          });
        })
        .catch((errors) => {
          this.address_info = oldAddr;
          VueSimpleAlert.alert(
            errors.response.data.error,
            "Invalid",
            "warning"
          );
          console.log(errors);
        });
      this.selectedProvince = "Province";
      this.selectedCity = "City";
      this.selectedBrgy = "Brgy";
    },
    setOldData() {
      this.old.house_number = this.address_info.house_number;
      this.old.province = this.address_info.province;
      this.old.city = this.address_info.city;
      this.old.barangay = this.address_info.barangay;
      this.old.landMark = this.address_info.landmark;
    },
    getOldData() {
      this.address_info.house_number = this.old.house_number;
      this.address_info.province = this.old.province;
      this.address_info.city = this.old.city;
      this.address_info.barangay = this.old.barangay;
      this.address_info.landmark = this.old.landMark;
      this.selectedProvince = "Province";
      this.selectedCity = "City";
      this.selectedBrgy = "Brgy";
    },
    setOldDataShip() {
      let y = document.getElementById("select_address").value;
      this.old.house_number= this.shippingAdd[y].houseNumber ;
      this.old.province=this.shippingAdd[y].province;
      this.old.city=this.shippingAdd[y].city ;
      this.old.barangay =  this.shippingAdd[y].barangay ;
      this.old.landMark= this.shippingAdd[y].landMark ;
      console.log(y,this.shippingAdd[y].landMark, this.shippingAdd[y].houseNumber)
      this.Landmark = this.shippingAdd[y].landMark
      this.House_number = this.shippingAdd[y].houseNumber
    },
    getOldDataShip() {
      let y = document.getElementById("select_address").value;
      this.shippingAdd[y].houseNumber = this.old.house_number;
      this.shippingAdd[y].province= this.old.province;
      this.shippingAdd[y].city = this.old.city;
      this.shippingAdd[y].barangay = this.old.barangay;
      this.shippingAdd[y].landMark = this.old.landMark;
      this.Landmark = this.shippingAdd[y].landMark
      this.House_number = this.shippingAdd[y].houseNumber
      this.selectedProvince = "Province";
      this.selectedCity = "City";
      this.selectedBrgy = "Brgy";
    },
    AddShippingAdd() {
      let x = document.getElementById("select_address").value;
      this.Landmark = this.shippingAdd[x].landMark;
      this.House_number = this.shippingAdd[x].houseNumber;
      this.Province = this.shippingAdd[x].province;
      this.City = this.shippingAdd[x].cityMunicipality;
      this.Barangay = this.shippingAdd[x].barangay;
    },
    save_data_shippingAdd() {
      let y = document.getElementById("select_address").value;

      let oldAddr = {
        province: this.shippingAdd[y].province,
        city: this.shippingAdd[y].city,
        barangay: this.shippingAdd[y].barangay,
        house_number: this.shippingAdd[y].house_number,
        landmark: this.shippingAdd[y].landmark,
      };
      this.Province = document.getElementById("Province").options[
        document.getElementById("Province").selectedIndex
      ].text;
      this.City = document.getElementById("City").options[
        document.getElementById("City").selectedIndex
      ].text;
      this.Barangay = this.selectedBrgy;
      let data = {
        landmark: this.Landmark,
        house_number: this.House_number,
        province: document.getElementById("Province").options[
          document.getElementById("Province").selectedIndex
        ].text,
        city: document.getElementById("City").options[
          document.getElementById("City").selectedIndex
        ].text,
        barangay: this.selectedBrgy,
        shippingAddnum: this.shippingAdd[y].shippingAddressNumber,
      };

      console.log("this is the new edited shipping address ", y, " = ", data);
      api
        .post("/api/editShipping", data)
        .then((res) => {
          //this.user = res.data;
          store.dispatch("getUserShippingAddress").then(() => {
            VueSimpleAlert.alert(res.data.message, "Success", "success");
            this.toggle_shipping = false;
            this.shippingAdd = this.userShippingAddresses;
            this.Landmark = this.shippingAdd[y].landMark;
            this.House_number = this.shippingAdd[y].houseNumber;
            this.Province = this.shippingAdd[y].province;
            this.City = this.shippingAdd[y].cityMunicipality;
            this.Barangay = this.shippingAdd[y].barangay;
          });
        })
        .catch((errors) => {
          this.shippingAdd[y] = oldAddr;
          VueSimpleAlert.alert(
            errors.response.data.error,
            "Invalid",
            "warning"
          );
          console.log(errors);
        });
      this.selectedProvince = "Province";
      this.selectedCity = "City";
      this.selectedBrgy = "Brgy";
    },
    save_newShippingAdd() {
      let dataX = {
        landmark: document.getElementById("Landmark_add").value,
        house_number: document.getElementById("H_number_add").value,
        province: document.getElementById("Province").options[
          document.getElementById("Province").selectedIndex
        ].text,
        city: document.getElementById("City").options[
          document.getElementById("City").selectedIndex
        ].text,
        barangay: this.selectedBrgy,
      };
      console.log("this is the new shipping Address ", dataX);
      api
        .post("/api/addNewShipping", dataX)
        .then((res) => {
          //this.user = res.data;
          store.dispatch("getUserShippingAddress").then(() => {
            VueSimpleAlert.alert(res.data.message, "Success", "success");
            this.toggle_add = false;
            this.shippingAdd = this.userShippingAddresses;
          });
        })
        .catch((errors) => {
          VueSimpleAlert.alert(
            errors.response.data.error,
            "Invalid",
            "warning"
          );
          console.log(errors);
        });
      // this.shippingAdd.push(dataX);
      // let textX = "Shipping Address ";
      // let selectX = {
      //   text: textX.concat(this.shippingAdd.length),
      //   value: this.shippingAdd.length - 1,
      // };
      // this.options.push(selectX);
      this.selectedProvince = "Province";
      this.selectedCity = "City";
      this.selectedBrgy = "Brgy";
    },
    delete_shippingAdd() {
      let n = document.getElementById("select_address").value;
      this.shippingAdd.splice(n, 1);
      this.options.pop();
    },
    getProvCode() {
      var getProvCode = document.getElementById("Province").value;
      api
        .get("api/refcityMunicipality", { params: { provCode: getProvCode } })
        .then((res) => {
          this.refCity = res.data;
        })
        .catch((errors) => {
          console.log(errors);
        });
    },
    getCityCode() {
      var getCityCode = document.getElementById("City").value;
      console.log(getCityCode);
      api
        .get("api/refBrgy", { params: { cityCode: getCityCode } })
        .then((res) => {
          console.log("brgy", res.data);
          this.refBaranggay = res.data;
        })
        .catch((errors) => {
          console.log(errors);
        });
    },
  },
  computed: {
    userHomeAddress() {
      return store.getters.getAddress;
    },
    userShippingAddresses() {
      return store.getters.getUserShippingAddress;
    },
  },
};
</script>