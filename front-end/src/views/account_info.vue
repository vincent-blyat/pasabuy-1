<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Account Info</p>
            </div>
       
        </div> 
        <div  class="text-sm w-full gap-x-10 pt-8 space-y-8
             
                    ">
        <div class=" w-full   font-raleways font-bold flex justify-between"> 
        <p class="text-gray-500">Email</p>
       <span>
           <p>{{account_info.email}}</p>
       </span>
       <button @click="toggle_email=!toggle_email" class="material-icons focus:outline-none">
        chevron_right 
       </button>
        </div>
        <div class="  w-full font-raleways font-bold flex justify-between"> 
        <p  class="text-gray-500">Password</p>
        <span>
            <input type="password" class="bg-transparent" :value="account_info.password" disabled/>
        </span>
         <button @click="toggle_password=!toggle_password"  class="material-icons focus:outline-none">
        chevron_right 
       </button>
        </div>
        </div>
         <Email class="hidden" v-if="toggle_email"/>  
         <Password class="hidden" v-if="toggle_password"/>
    </div>
  

</template>
<script>
import Email from  './changeEmail.vue'
import Password from './changePassword.vue'
export default {
   components:{
     Email,Password
   },
data:()=>{
    return{
    toggle:false,
    toggle_email:false,
    toggle_password:false,
    
    account_info:{
        email:'sanJuan@gmail.com',
        password:'password',
       
    },
    }
  
},
}
</script>
