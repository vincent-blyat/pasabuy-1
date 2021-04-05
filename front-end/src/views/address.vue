<template class="bg-gray-bgcolor font-nunito">

  <div class="absolute vs:left-5 left-12 top-3 bg-gray-bgcolor">
        <img src="/img/pasaBUYLogoOnly.png" class="w-16 h-16 "/>
        <label for="" class="absolute text-xl font-black tracking-widest top-4 left-16 font-raleway text-red-buttons">
            pasaBUY
        </label>
    </div>
    <div id="login" class="flex items-center justify-center pt-10 pb-10 bg-gray-bgcolor vs:pt-16">
      <div class="w-2/5 my-12 overflow-hidden text-center bg-white shadow-md vs:w-10/12 flex-grow-1 rounded-xl">
        <div class="px-10 py-16">
          <h1 class="space-x-1 space-y-1 text-2xl font-bold">Add your shipping address</h1>
            <div action="#" class="space-y-3">
              <div class="w-full ">
                <input aria-label="House Number" name="" type="text" required class="relative block w-full px-3 py-2 mt-8 mb-4 font-semibold placeholder-gray-500 border appearance-none bg-gray-bgcolor rounded-xl h-14 focus:outline-none focus:shadow-outline-blue focus:z-10 sm:text-sm" placeholder="House Number"  v-model="addressInfo.houseNumber" />
              </div>
              <div class="w-full">
                <input aria-label="Province" name="" type="text" required class="relative block w-full px-3 py-2 mt-4 mb-4 font-semibold text-gray-500 border appearance-none bg-gray-bgcolor rounded-xl h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Province"  v-model="addressInfo.province"  />
              
              </div>
              <div class="w-full">
                <input aria-label="Barangay" name="" type="text" required class="relative block w-full px-3 py-2 mt-4 mb-4 font-semibold tracking-wide text-gray-500 border appearance-none bg-gray-bgcolor h-14 rounded-xl focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Barangay" v-model="addressInfo.barangay" />
                
                
              </div>
              <div class="w-full">
                <input aria-label="City" name="" type="text" required class="relative block w-full px-3 py-2 mt-4 mb-4 text-gray-500 border appearance-none bg-gray-bgcolor h-14 rounded-xl focus:outline-none focus:z-10" placeholder="City/Municipality" v-model="addressInfo.cityMunicipality" />
                  
                
              </div>
              <div class="flex mb-2 -mx-1">
                <div class="w-1/2 px-1 mt-6 text-left text-grey-dark">
                  <router-link to="/verify-email" class="font-bold underline-none text-blue" >Back</router-link>
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
        background-color: rgba(185, 28, 28)
    
    }

#iCheck{
  font-size:16px;
  color:rgb(22, 22, 141);
}
#iMessage{
  font-size:24px;
  color:rgb(22, 22, 141);
}
img{ 
  max-width: 100px;
  width:11%;
 
}
</style>

<script>
import api from '../api'
export default {
    data(){
        return{
            addressInfo:{
               houseNumber : null,
               barangay : null,
               cityMunicipality :  null,
               province : null
            }
        }
    }, 
    methods:{
        nextPage(){
            api.post('/api/postAddress', this.addressInfo).then((res)=>{
                console.log(res.data)
                localStorage.setItem("address",JSON.stringify(res.data));
                this.$router.push({name:"uploadid"});
            })
        }
    }
}



</script>