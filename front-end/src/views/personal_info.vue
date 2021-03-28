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
        <div id="personal_info" class="text-sm w-full gap-x-10 pt-8 vs:text-sm vs:w-full">
        <form id="myForm" class=" ">
          <div class="flex flex-col items-center gap-y-3 justify-center">
            <img src="img/yami.jpg" class=" w-16 h-16 rounded-full ring-2 ring-gray-500"/>
            <label for="profile_image" class="font-extrabold cursor-pointer text-blue-800">Change Profile Photo</label>
          </div>
          <input id="profile_image" type="file" class="hidden">
        <div  class="text-sm w-7/12 gap-x-10 pt-8 space-y-8 vs:text-sm vs:w-full">
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
          </div>
       
        </form>
        </div>
    </div>
</template>
<script>
import Profile from './ProfileEdit.vue'
import api from '../api'
export default {
  
  name:'personal',
  component:{
   Profile,
  },
data(){
    return{
      avatar:null,
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

},
mounted(){
    //get the user information from the laravel API
    api.get('/api/getPersonal').then((res)=>{
      console.log('personal info' ,res.data);
      //this.user = res.data;
    }).catch((error) => {
      this.error=error.response.data.errors;
    })
    api.get('/api/getAddress').then((res)=>{
      console.log('address ' ,res.data);
      //this.user = res.data;
    }).catch((error) => {
      this.error=error.response.data.errors;
    })
  }
}
</script>
