<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Account Info</p>
            </div>
           <div>  <label for="sub" id="edt3" @click="toggle=!toggle" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label></div>
        </div> 
        <div  class="text-sm w-full gap-x-10 pt-8 space-y-8
                      xl:w-7/12
                      2xl:w-9/12
                      lg:w-8/12
                    ">
        <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">Email</p>
       <span>
           <p>{{account_info.email}}</p>
       </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p  class="text-gray-500">Password</p>
        <span>
            <input type="password" class="bg-transparent" :value="account_info.password" disabled/>
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
            <p class="text-lg font-extrabold">Edit Account Information</p>
            <hr class="mb-5 border-2 border-red-700 bg-red-700">
            
          <div class=" 2xl:px-28 xl:px-28 lg:px-28 md:px-10">
              <div class="grid grid-cols-2 gap-y-4">
                <span>Email:</span> <input   type="text" :value="account_info.email"   class=" pl-2 bg-transparent border-2 border-gray-400"/>
                 <span>Current Password:</span> <input type="password" placeholder="Current password"  class=" pl-2 bg-transparent border-2 border-gray-400"/>
                 <span>New Password:</span> <input type="password" placeholder="New password"  class=" pl-2 bg-transparent border-2 border-gray-400"/>
              
              </div>
            <div class="flex justify-end mt-4 space-x-4">
              <button @click="toggle=false" class="px-3 bg-red-700 text-white rounded-2xl">Cancel</button>
              <button @click="toggle=false" class="px-5 shadow-xl ring-1 ring-gray-300 bg-white text-red-700 rounded-2xl">Save</button>
              
            </div>
          </div>
          </div>
        </div>
    </div>
    </div>
</template>
<script>
import api from '../api'
export default {
   
data(){
    return{
        toggle:false,
    disabled: 0,
    hidden:false,
    show:true,
    show2:true,
    edit3:false,
    account_info:{
        email:'sanJuan@gmail.com',
        password:'password',
        password_int:'',
        type:'password',
    },
    }
  
},
 methods: {
    submit() {},
    Edit(pars) {
      let x = document.getElementById(pars).innerHTML;
      if (x == "Edit") {
        document.getElementById(pars).innerHTML = "Save";
      } else {
        document.getElementById(pars).innerHTML = "Edit";
      }
    },
  },
  mounted() {
    //get the user information from the laravel API
    api
      .get("/api/user")
      .then((res) => {
        console.log("account info ", res.data);
        this.account_info.email = res.data.email;
        this.account_info.password = "password";
        //this.user = res.data;
      })
      .catch(() => {
        //this.error=error.response.data.errors;
      });
  },
}
</script>
