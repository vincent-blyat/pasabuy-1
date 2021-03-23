<template>
     <div id ="personal_info" class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm " >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Personal Info</p>
            </div>
           <div> 
               <label for="sub" id="edt1" @click="hidden=!hidden,Edit('edt1'), show=!show" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label>
           </div>
            
        </div>
        <div id="personal_info" class="text-sm w-3/5 gap-x-10 pt-8 vs:text-sm vs:w-full">
        <form id="myForm" class="space-y-8 ">
        <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">NAME</p>
        <span>
        <p v-if="show" id="name">{{personal.name}}</p>
        <input type="text" v-if="hidden" 
        id="input_name" v-model="personal.name" 
        class="ring-2 ring-gray-400 font-bold w-full">
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2 ">
        <p class="text-gray-500">PHONE NUMBER</p>
        <span>
        <p v-if="show">{{personal.phone_number}}</p>
        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="09xx xx xx xxx" v-if="hidden"
         required v-model="personal.phone_number" 
        class="ring-2 ring-gray-400 font-bold w-full  ">
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">WORK</p>
        <span>
        <p v-if="show">{{personal.work}}</p>
        <input type="text" v-if="hidden"
         v-model="personal.work"  
        class="ring-2 ring-gray-400 font-bold w-full">
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">GENDER</p>
        <span>
        <p v-if="show">{{personal.gender}}</p>
        <div class="flex gap-x-4">
        <input type="radio" v-if="hidden"
        id="male"
        class="ring-2 ring-gray-400 font-bold w-full" value="Male" v-model="personal.gender">
        <label for="Male" v-if="hidden">Male</label>
            <input type="radio" v-if="hidden"
            id="Female"   
            class="ring-2 ring-gray-400 font-bold w-full" value="Female" v-model="personal.gender">
            <label for="Female" v-if="hidden">Female</label>
        </div>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">BIRTHDAY</p>
        <span>
        <p v-if="show">{{personal.birdate}}</p>     
         <input class="w-full" @keyup="personal.birdate=$event.target.value" v-if="hidden" type="date" id="start" name="trip-start"
       min="1990-01-01"  v-model="personal.birdate">
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">Language</p>
        <span>
        <p v-if="show">{{personal.language}}</p>
        <input type="text" v-if="hidden"
          v-model="personal.language"  
        class="ring-2 ring-gray-400 font-bold w-full">
        </span>
         </span>
        </form>
        </div>
    </div>
</template>
<script>
import Profile from './ProfileEdit.vue'
export default {
  
  name:'personal',
  component:{
   Profile,
  },
   beforeCreate:function () {
      document.body.className='account';
  },
data(){
    return{
    disabled: 0,
    hidden:false,
    show:true,
    show2:true,
    edit2:false,
    message:'yeah',
    personal:  {
      name:'Juan',
      lastname:'Delacruz',
      phone_number:'09021050502',
      work:'Krusty Crab',
      gender:'Male',
      language:'Bicol',
      birdate:new Date().toISOString().slice(0,10)
    },
    }
  
},
methods:{

    submit () {
       document.getElementById("myForm").submit();
       
    },
     Edit(pars) {
      let x=document.getElementById(pars).innerHTML;
      if(x=='Edit'){
          document.getElementById(pars).innerHTML="Save";
          
      }
      else{
         document.getElementById(pars).innerHTML="Edit"; 
         this.submit()
      }
    }

}
}
</script>
