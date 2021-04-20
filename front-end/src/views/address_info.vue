  
<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Account Info</p>
            </div>
        <div>  <label  id="edt2" @click="toggle=!toggle,setOldData()" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label>
                
        </div>
        </div>
         <div  class="text-sm w-full  pt-8 space-y-8
                       xl:w-97
                      2xl:w-97
                      lg:w-97
                    ">
        <div class=" w-full   font-raleways font-bold flex justify-between"> 
        <p class="text-gray-500">Email</p>
       <span>
           <p>{{email}}</p>
       </span>
       <button @click="toggle_email=!toggle_email" class="material-icons focus:outline-none">
        chevron_right 
       </button>
        </div>
        <div class="  w-full font-raleways font-bold flex justify-between"> 
        <p  class="text-gray-500">Password</p>
        <span>
            <input type="password" class="bg-transparent" :value="password" disabled/>
        </span>
         <button @click="toggle_password=!toggle_password"  class="material-icons focus:outline-none">
        chevron_right 
       </button>
        </div>
        </div>
        <!--Change Email Address-->
        <div v-if="toggle_email" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle_email"  class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class=" bg-white ring-1  ring-gray-300  p-5 w-full rounded-xl
             2xl:w-97 
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
            <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Email</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle_email=false"> Close</p>
          </div>
          <div class="text-center text-gray-400 text-sm">
              <p>
                  Update your email below. There will be a new email sent that you will need to verify this new email.
              </p>
          </div>
          <div class=" ">
            <div class="flex flex-col space-y-4
            ">
             <div class="flex flex-col">
                <span class="ml-2  text-gray-500 font-bold">Password</span>
                 <input id="password"   type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
             <div class="flex flex-col">
                <span class="ml-2  text-gray-500 font-bold">New Email</span>
                 <input id="new_email"   type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
              </div>
            
          </div>
           <div class="flex justify-between mt-4  text-2xlspace-x-4 items-center">
             <button @click="toggle_email=false,toggle_confirmation=!toggle_confirmation" class="px-4 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Next</button>
            </div>
          </div>
        </div>
    </div>
    <!--Confirmation-->
    <div v-if="toggle_confirmation" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle_confirmation"  class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class="  bg-white ring-1  ring-gray-300 p-5 w-full rounded-md
            2xl:w-97 
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
         <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg flex  font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Address Info</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle=false, getOldData()"> Close</p>
          </div>
          <div class=" ">
            <div class="flex flex-col  space-y-4
            ">
             
            
         <div class=" ">
            <div class="flex flex-col p-5 space-y-4
            ">
                 <div class="flex flex-col">
                   <span class="ml-2">House Number:</span> <input   type="number"  id="h_number" v-model="address_info.house_number" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>


                  <div class="flex flex-col">
                  <span class="ml-2">Province:</span> 
                  <select id="Province" @change="getProvCode()" v-model="selectedProvince"  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200">
                    <option value="Province" disabled>Choose Province</option>
                    <option v-for="province in refProvince" v-bind:key="province.id" v-bind:value="province.provCode"> {{ province.provDesc }} </option>
                  </select>
                  </div>


                   <div class="flex flex-col">
                  <span class="ml-2">City/Municaplity: </span> 
                  <select id="City"  @change="getCityCode()" v-model="selectedCity" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200">
                    <option value="City" disabled>Choose City/Municipality</option>
                    <option v-for="city in refCity" v-bind:key="city.id" v-bind:value="city.citymunCode"> {{ city.citymunDesc }} </option>
                  </select>
                   </div>


                    <div class="flex flex-col">
                  <span class="ml-2">Barangay: </span> 
                  <select v-model="selectedBrgy"  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200">
                     <option value="Brgy" disabled>Choose Baranggay</option>
                      <option v-for="brgy in refBaranggay" v-bind:key="brgy.id" v-bind:value="brgy.brgyDesc"> {{ brgy.brgyDesc }} </option>
                    </select>
                  </div>

              </div>
               <div class="flex justify-between mt-4 pb-4 space-x-4 px-6">
              <button @click="toggle=false, getOldData()" class=" focus:outline-none px-3 h-7 w-full bg-white ring-2 ring-black   rounded-2xl">Cancel</button>
              <button @click="toggle=false ,save_data()" class="px-5 focus:outline-none bg-red-buttons text-white w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
              
            </div>
          </div>
        </div>
    </div>
         <!---->
    <!--Change Password-->
    
 <div v-if="toggle_password" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle_password"  class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class=" bg-white ring-1  ring-gray-300  p-5 w-full rounded-xl
             2xl:w-97 
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
            <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Password</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle_password=false"> Close</p>
          </div>
          <div class="text-center text-gray-400 text-sm">
              <p>
                  Choose a strong password and dont reuse it for other accounts
                </p>
          </div>
          <div class=" ">
            <div class="flex flex-col pt-5 space-y-4
            ">
             <div class="flex flex-col">
                <span class="ml-2">Current Password</span>
                 <input id="password"   type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
             <div class="flex flex-col">
                <span class="ml-2">New Password</span>
                 <input id="password"   type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
             <div class="flex flex-col">
                <span class="ml-2">Confirm Password</span>
                 <input id="password"   type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
              </div>
            
          </div>
           <div class="flex justify-between mt-4  pt-3 text-2xlspace-x-4 items-center">
             <button @click="toggle_password=false" class="px-4 bg-red-buttons text-white focus:outline-none w-full h-8 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
            </div>
          </div>
        </div>
    </div>
    <!--End Change Password-->
    </div>
        </div>
        </div>
    </div>

</template>
<script>
import api from '../api'
import VueSimpleAlert from 'vue-simple-alert'
import store from "../store/index"
export default {
 
data:()=>{
    return{
    toggle:false,
    toggle_email:false,
    toggle_password:false,
    toggle_confirmation:false,
    email:'sanJuan@gmail.com',
    password:'password',
    }

},
methods:{

    save_data() {
      this.address_info.province = document.getElementById("Province").options[document.getElementById("Province").selectedIndex].text;
      this.address_info.city = document.getElementById("City").options[document.getElementById("City").selectedIndex].text;
      this.address_info.barangay = this.selectedBrgy;
      api.post('/api/editAddress', this.address_info).then((res)=>{
      //this.user = res.data;
       VueSimpleAlert.alert(res.data.message,"Success","success")
        }).catch((errors) => {
            console.log(errors)
        })
        this.toggle=false;
    },
    setOldData(){
        this.old.house_number=this.address_info.house_number
        this.old.province= this.address_info.province
        this.old.city= this.address_info.city
        this.old.barangay=this.address_info.barangay
    },
    getOldData(){
        this.address_info.house_number=this.old.house_number
        this.address_info.province= this.old.province
        this.address_info.city= this.old.city
        this.address_info.barangay=this.old.barangay
    },
    getProvCode() {
      var getProvCode = document.getElementById("Province").value;
      api.get('api/refcityMunicipality', {params:{provCode: getProvCode}}).then((res)=>{
        this.refCity = res.data
      }).catch((errors)=>{
        console.log(errors)
      })
    },
    getCityCode() {
      var getCityCode = document.getElementById("City").value;
      console.log(getCityCode)
      api.get('api/refBrgy', {params:{cityCode: getCityCode}}).then((res)=>{
        console.log('brgy', res.data)
        this.refBaranggay = res.data
      }).catch((errors)=>{
        console.log(errors)
      })
    },

},
mounted(){
    //get the user information from the laravel API
    this.address_info.province = this.addressInfo.province;
    this.address_info.city =  this.addressInfo.cityMunicipality;
    this.address_info.barangay =  this.addressInfo.barangay;
    this.address_info.house_number =  this.addressInfo.houseNumber;
    api.get("/api/refProvince").then((res) => {
        this.refProvince = res.data;
    }).catch((error) => {
      console.log(error);
    })
  },
  computed:{
    addressInfo(){
      return store.getters.getAddress
    },
  },
}
</script>
