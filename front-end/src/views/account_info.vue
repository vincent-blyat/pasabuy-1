<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Account Info</p>
            </div>
           <div>  <label for="sub" id="edt3" @click="edit3=!edit3,Edit('edt3'), show=!show" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label></div>
        </div>
        <div class="text-sm w-1/2 gap-x-10 space-y-8 pt-8 vs:w-full">
        <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">Email</p>
       <span>
           <p v-if="show">{{account_info.email}}</p>
           <input type="email" v-if="edit3"
        id="input_email" v-model="account_info.email"
        class="ring-2 ring-gray-400 font-bold w-full">
       </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p  class="text-gray-500">Password</p>
        <span>
            <input v-if="show" type="password" v-model="account_info.password" disabled/>
            <input type="password" v-if="edit3"
        id="input_password"  v-model="account_info.password" 
        class="ring-2 ring-gray-400 font-bold w-full">
        </span>
        </span>
        </div>
    </div>
</template>
<script>
import api from '../api'
export default {
   beforeCreate:function () {
      document.body.className='account';
  },
data(){
    return{
    disabled: 0,
    hidden:false,
    show:true,
    show2:true,
    edit3:false,
    account_info:{
        email:'',
        password:'',
        password_int:'',
        type:'password',
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

},
mounted(){
    //get the user information from the laravel API
    api.get('/api/user').then((res)=>{
      console.log('account info ', res.data);
      this.account_info.email = res.data.email;
      this.account_info.password = 'password';
      //this.user = res.data;
    }).catch(() => {
      //this.error=error.response.data.errors;
    })
  }
}
</script>
