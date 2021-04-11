<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Address Info</p>
            </div>
        <div>  <label  id="edt2" @click="toggle=!toggle" class="
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
            <p class="text-lg font-extrabold">Update Address Info</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle=false"> Close</p>
          </div>
            
         <div class=" ">
            <div class="flex flex-col p-5 space-y-4
            ">
                 <div class="flex flex-col">
                   <span class="ml-2">House Number:</span> <input   type="number"  id="h_number" :value="address_info.house_number" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>
                  <div class="flex flex-col">
                 <span class="ml-2">Province:</span> <input type="text" id="province" :value="address_info.province"  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                  </div>
                   <div class="flex flex-col">
                  <span class="ml-2">City/Municaplity: </span> <input id="town" :value="address_info.city" type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                   </div>
                    <div class="flex flex-col">
                  <span class="ml-2">Barangay: </span> <input id="barangay" :value="address_info.barangay" type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                    </div>
              </div>
               <div class="flex justify-between mt-4 pb-4 space-x-4 px-6">
              <button @click="toggle=false" class=" focus:outline-none px-3 h-7 w-full bg-white ring-2 ring-black   rounded-2xl">Cancel</button>
              <button @click="toggle=false ,save_data()" class="px-5 focus:outline-none bg-red-buttons text-white w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
              
            </div>
          </div>
          </div>
        </div>
    </div>

     </div>
</template>
<script>
export default {
  
data(){
    return{
    toggle:false,
   
    address_info:{
    house_number:'0210',
    province:'Albay',
    city:'Legaspi',
    barangay:'Banquerohan'
    },
    }

},
methods:  {
     save_data(){
        this. address_info.house_number=document.getElementById('h_number').value;
        this. address_info.city=document.getElementById('town').value;
        this. address_info.province=document.getElementById('province').value;
        this. address_info.barangay=document.getElementById('barangay').value;
     },
}
}
</script>
