<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Address Info</p>
            </div>
        <div>  <label  id="edt2" @click="setOldData();toggle=!toggle" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label>
                
        </div>
        </div>
         <div  class="text-sm w-full  pt-8 space-y-8
                      xl:w-7/12
                      2xl:w-9/12
                      lg:w-8/12
                    ">
        <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">HOUSE NUMBER</p>
        <span>
        <p >{{address_info.house_number}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">PROVINCE</p>
        <span>
        <p >{{address_info.province}}</p>
        </span>
        </span> 
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">CITY/MUNICIPALITY</p>
        <span>
            <p >{{address_info.city}}</p>
            
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">BARANGAY</p>
        <span>
            <p>{{address_info.barangay}}</p>
            
        </span>
        </span>
        </div>
        <div v-if="toggle" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle" class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class="  bg-white ring-1  ring-gray-300 p-5 w-full rounded-md
             2xl:w-6/12 
              lg:w-6/12
              xl:w-6/12 
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
            <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg flex  font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Address Info</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle=false"> Close</p>
          </div>
            
          <div class=" 2xl:px-28 xl:px-28 lg:px-28 md:px-10">
              <div class="grid grid-cols-2 gap-y-4">
                <span>House Number:</span> <input   type="number" v-model="address_info.house_number"  class=" pl-2 bg-transparent border-2 border-gray-400"/>
                 
                 
                <span>Province:</span> 
                <select  id="Province" @change="getProvCode()" v-model="selectedProvince" class=" pl-2 bg-transparent border-2 border-gray-400">
                  <option value="Province" disabled>Choose Province</option>
                  <option v-for="province in refProvince" v-bind:key="province.id" v-bind:value="province.provCode"> {{ province.provDesc }} </option>
                </select>
                
                
                <span>City/Municaplity: </span>
                <select id="City"  @change="getCityCode()" v-model="selectedCity" class=" pl-2 bg-transparent border-2 border-gray-400">
                  <option value="City" disabled>Choose City/Municipality</option>
                  <option v-for="city in refCity" v-bind:key="city.id" v-bind:value="city.citymunCode"> {{ city.citymunDesc }} </option>
                </select>
                
                
                <span>Barangay: </span>
                <select  v-model="selectedBrgy" class=" pl-2 bg-transparent border-2 border-gray-400">
                  <option value="Brgy" disabled>Choose Baranggay</option>
                  <option v-for="brgy in refBaranggay" v-bind:key="brgy.id" v-bind:value="brgy.brgyDesc"> {{ brgy.brgyDesc }} </option>
                </select>
                
              </div>
            <div class="flex justify-end mt-4 space-x-4">
              <button @click="getOldData();toggle=false" class="px-3 bg-red-700 text-white rounded-2xl">Cancel</button>
              <button @click="submit" class="px-5 shadow-xl ring-1 ring-gray-300 bg-white text-red-700 rounded-2xl">Save</button>
              
            </div>
          </div>
          </div>
        </div>
    </div>

     </div>
</template>
<script>
import api from '../api'
import VueSimpleAlert from 'vue-simple-alert'
export default {
  
data(){
    return{
    toggle:false,
    disabled: 0,
    hidden:false,
    show:true,
    show2:true,
    edit2:false,
    selectedProvince:'Province',
    selectedCity:'City',
    selectedBrgy:'Brgy',
    address_info:{
        house_number:'',
        province:'',
        city:'',
        barangay:''
    },
    old:{
        house_number:'',
        province:'',
        city:'',
        barangay:''
    },
    refProvince:[],
    refCity:[],
    newrefCity:[],
    refBaranggay:[],
    newrefBaranggay:[],
    }

},
methods:{

    submit () {
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
      var newCityMun = this.newrefCity;
      this.refCity = [];
      var getProvCode = document.getElementById("Province").value;
      for (var i = 0; i < newCityMun.length; i++) {
        if (newCityMun[i].provCode === getProvCode) {
          this.refCity.splice(i, 1, newCityMun[i]);
        }
      }
    },
    getCityCode() {
      var newBrgy = this.newrefBaranggay;
      this.refBaranggay = [];
      var getCityCode = document.getElementById("City").value;
      for (var i = 0; i < newBrgy.length; i++) {
        if (newBrgy[i].citymunCode === getCityCode) {
          this.refBaranggay.splice(i, 1, newBrgy[i]);
        }
      }
    },

},
mounted(){
    //get the user information from the laravel API
    api.get('/api/getAddress').then((res)=>{
      this.address_info.house_number = res.data.houseNumber;
      this.address_info.province = res.data.province;
      this.address_info.city = res.data.cityMunicipality;
      this.address_info.barangay = res.data.barangay;
      //this.user = res.data;
    }).catch((error) => {
      console.log(error);
    })
    api.get("/api/refProvince").then((res) => {
        this.refProvince = res.data;
    }).catch((error) => {
      console.log(error);
    })
   
    api.get("/api/refcityMunicipality").then((res) => {
        this.newrefCity = res.data;
    }).catch((error) => {
      console.log(error);
    })

    api.get("/api/refBrgy").then((res) => {
        this.newrefBaranggay = res.data;
    }).catch((error) => {
      console.log(error);
    })

  }
}
</script>
