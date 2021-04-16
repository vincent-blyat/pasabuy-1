  
<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Address Info</p>
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
   
    // api.get("/api/refcityMunicipality").then((res) => {
    //     this.newrefCity = res.data;
    // }).catch((error) => {
    //   console.log(error);
    // })

    // api.get("/api/refBrgy").then((res) => {
    //     this.newrefBaranggay = res.data;
    // }).catch((error) => {
    //   console.log(error);
    // })

  }
}
</script>
