<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Address Info</p>
            </div>
        <div>  <label for="sub" id="edt2" @click="edit2=!edit2,Edit('edt2'), show=!show" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label></div>
        </div>
         <div  class="text-sm w-full gap-x-10 pt-8 space-y-8
                      xl:w-7/12
                      2xl:w-9/12
                      lg:w-8/12
                    ">
        <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">HOUSE NUMBER</p>
        <span>
        <p v-if="show">{{address_info.house_number}}</p>
        <input type="text" v-if="edit2"
        id="input_name" v-model="address_info.house_number" 
        class="ring-2 ring-gray-400 font-bold w-full">
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">PROVINCE</p>
        <span>
        <p v-if="show">{{address_info.province}}</p>
        <input type="text" v-if="edit2"
        id="input_name" v-model="address_info.province" 
        class="ring-2 ring-gray-400 font-bold w-full">
        </span>
        </span> 
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">CITY/MUNICIPALITY</p>
        <span>
            <p v-if="show">{{address_info.city}}</p>
            <input type="text" v-if="edit2"
            id="input_name" v-model="address_info.city" 
            class="ring-2 ring-gray-400 font-bold w-full">
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">BARANGAY</p>
        <span>
            <p v-if="show">{{address_info.barangay}}</p>
            <input type="text" v-if="edit2"
            id="input_name" v-model="address_info.barangay" 
            class="ring-2 ring-gray-400 font-bold w-full" >
        </span>
        </span>
        </div>
    </div>
</template>
<script>
export default {
  
data(){
    return{
    disabled: 0,
    hidden:false,
    show:true,
    show2:true,
    edit2:false,
    address_info:{
    house_number:'0210',
    province:'Albay',
    city:'Legaspi',
    barangay:'Banquerohan'
    },
    }

},
methods:{

    submit () {
       
    },
     Edit(pars) {
      let x=document.getElementById(pars).innerHTML;
      if(x=='Edit'){
          document.getElementById(pars).innerHTML="Save";
          
      }
      else{
         document.getElementById(pars).innerHTML="Edit"; 
         
      }
    }

}
}
</script>
 
