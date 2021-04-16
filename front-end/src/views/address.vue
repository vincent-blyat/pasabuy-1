<template class="bg-gray-bgcolor font-nunito">
  <div class="flex items-center bg-gray-bgcolor">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 block">
        <h1 class="absolute text-xl font-black tracking-widest  left-16 font-raleway
          text-red-buttons block
           ">pasaBUY</h1>
      </div>
    <div id="address" class="flex items-center justify-center w-full h-screen pt-16 pb-10 bg-gray-bgcolor">
      <div class="w-2/5 my-12 overflow-hidden text-center bg-white shadow-md vs:w-10/12 lg:w-6/12 md:w-7/12 sm:w-9/12 ssm:w-10/12 flex-grow-1 rounded-xl">
        <div class="px-10 py-16">
          <h1 class="space-x-1 space-y-1 text-2xl font-bold">Add your shipping address</h1>
            <div action="#" class="space-y-3">
              <div class="w-full">
                 <select @change="getProvCode()" class="relative block w-full px-3 py-2 mt-4 mb-4 font-semibold text-gray-500 border appearance-none bg-gray-bgcolor rounded-xl h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" v-model="selectedProvince"  >
                        <option value="Province" selected disabled>Choose Province</option>
                    <option v-for="province in provinces" v-bind:key="province.id" v-bind:value="province.provCode"> {{ province.provDesc }} </option>
                </select>
              </div>
              
              <div class="w-full">
                <select  @change="getCityCode()" id="City"   class="relative block w-full px-3 py-2 mt-4 mb-4 text-gray-500 border appearance-none bg-gray-bgcolor h-14 rounded-xl focus:outline-none focus:z-10"  v-model="selectedCity" >
                 <option value="City" selected disabled>Choose City/Municipality</option>
                       <option v-for="city in cityMunicipality" v-bind:key="city.id" v-bind:value="city.citymunCode"> {{ city.citymunDesc }} </option>
                   </select>
              </div>

              <div class="w-full">
                <select  class="relative block w-full px-3 py-2 mt-4 mb-4 text-gray-500 border appearance-none bg-gray-bgcolor h-14 rounded-xl focus:outline-none focus:z-10"  v-model="selectedBrgy">
                  <option value="Brgy" disabled>Choose Baranggay</option>
                  <option v-for="brgy in barangays" v-bind:key="brgy.id" v-bind:value="brgy.brgyDesc"> {{ brgy.brgyDesc }} </option>
                </select>
               <!-- <input aria-label="Barangay" name="" type="text" required  class="relative block w-full px-3 py-2 mt-4 mb-4 font-semibold tracking-wide placeholder-gray-500 border appearance-none focus:outline-none bg-gray-bgcolor rounded-xl h-14 focus:border-red-600 focus:z-10 sm:text-sm" placeholder="Baranggay"   v-model="addressInfo.barangay"/>-->
              </div>
              <div class="w-full ">
                <input aria-label="House Number" name="" type="text" required class="relative block w-full px-3 py-2 mt-4 mb-4 font-semibold tracking-wide placeholder-gray-500 border appearance-none focus:outline-none bg-gray-bgcolor rounded-xl h-14 focus:border-red-600 focus:z-10 sm:text-sm" placeholder="House Number"  v-model="addressInfo.houseNumber"/>
              </div>
              <div class="w-full ">
                <input aria-label="Landmark" name="" type="text" required class="relative block w-full px-3 py-2 mt-4 mb-4 font-semibold tracking-wide placeholder-gray-500 border appearance-none focus:outline-none bg-gray-bgcolor rounded-xl h-14 focus:border-red-600 focus:z-10 sm:text-sm" placeholder="Landmark"  v-model="addressInfo.landMark" />
              </div>
              <div class="flex mb-2 -mx-1">
                <div class="w-1/2 px-1 mt-6 text-left text-grey-dark">
                  <router-link to="/sign-up" class="font-bold underline-none text-blue" >Back</router-link>
                </div>
                <div class="flex justify-end w-1/2 px-1 mt-3">
                  <button @click="nextPage" class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                    NEXT</button> <!-- upload id next -->
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
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
img {
  max-width: 100px;
  width: 11%;
}

</style>

<script>
import api from "../api";
export default {
  data() {
    return {
      provinces: [],
      cityMunicipality: [],
      newcityMunicipality: [],
      barangays: [],
      newrefBaranggay: [],
      selectedrefBrgy: null,
      selectedProvince:'Province',
      selectedCity:'City',
      selectedBrgy:'Brgy',

      addressInfo: {
        houseNumber: null,
        barangay: null,
        cityMunicipality: null,
        province: null,
        landMark: null,

      },
    };
  },
  methods: {
    
    nextPage() {
      var d = document.getElementById("Province");
      var getProv = d.options[d.selectedIndex].text;
      this.addressInfo.province = getProv;
      console.log(this.addressInfo.province);

      api.post("/api/postAddress", this.addressInfo).then((res) => {
        console.log(res.data);
        localStorage.setItem("address", JSON.stringify(res.data));
        this.$router.push({ name: "uploadid" });
      });
    },

    getProvCode() {
      var getProvCode = document.getElementById("Province").value;
      console.log(getProvCode)
      api.get('api/refcityMunicipality', {params:{provCode: getProvCode}}).then((res)=>{
        this.cityMunicipality = res.data
      }).catch((errors)=>{
        console.log(errors)
      })
      console.log(getProvCode);
      console.log(this.cityMunicipality);
    },
    getCityCode() {
     var getCityCode = document.getElementById("City").value;
      console.log(getCityCode)
      api.get('api/refBrgy', {params:{cityCode: getCityCode}}).then((res)=>{
        console.log('brgy', res.data)
        this.barangays = res.data
      }).catch((errors)=>{
        console.log(errors)
      })
       console.log(this.citymunCode);
       console.log(getCityCode);
    },
    refProvince() {
      api.get("/api/refProvince").then((res) => {
        this.provinces = res.data;
        // for (var i=0;i < this.provinces.length;i++){
        //  // this.provinces[i] = JSON.stringify(this.provinces[i].provDesc); 
        //   this.provinces[i].provDesc=this.provinces[i].provDesc.toString();
        //   this.provinces[i].provDesc=(this.provinces[i].provDesc).charAt(0).toUpperCase() + (this.provinces[i].provDesc).slice(1);
        // }
        
        console.log('Provinces: ', this.provinces);
      });
    },
  },
  created() {
    this.refProvince();
    //this.refcityMunicipality();
    //this.refBrgy();
  },

};
</script>
