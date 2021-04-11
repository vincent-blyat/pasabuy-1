<template>
 <div v-if="toggle" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle"  class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class=" bg-white ring-1  ring-gray-300  p-5 w-full rounded-xl
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
            <p class="text-lg font-extrabold">Update Password</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle=false"> Close</p>
          </div>
          <div class="text-center text-gray-400 text-sm">
              <p>
                  Choose a strong password and dont reuse it for other accounts
                </p>
          </div>
          <p class="text-center text-red-500">{{errors}}</p>
          <div class=" ">
            <div class="flex flex-col p-5 space-y-4
            ">
             <div class="flex flex-col">
                <span class="ml-2">Current Password</span>
                 <input id="password"  v-model="currentPassword" type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
             <div class="flex flex-col">
                <span class="ml-2">New Password</span>
                 <input id="password" v-model="password"  type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
             <div class="flex flex-col">
                <span class="ml-2">Confirm Password</span>
                 <input id="password" v-model="password_confirmation"  type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
              </div>
            
          </div>
           <div class="flex justify-between mt-4 px-5 text-2xlspace-x-4 items-center">
             <button @click="save" class="px-4 bg-red-buttons text-white focus:outline-none w-full h-8 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
import api from "../api"
import VueSimpleAlert from 'vue-simple-alert'
export default {
data(){
    return{
        toggle:true,
        password:null,
        password_confirmation:null,
        currentPassword:null,
        errors:null
    }
},
methods:{
  save(){
    var params = {password:this.password,currentPassword:this.currentPassword,password_confirmation:this.password_confirmation}
    api.post('/api/changePassword',params).then((res)=>{
      VueSimpleAlert.alert(res.data.message,"Success","success")
      this.toggle=false
    }).catch((errors)=>{
      if(errors.response.data.currentPassword == undefined)
        this.errors=errors.response.data.password+' '
      else if(errors.response.data.password == undefined)
        this.errors=errors.response.data.currentPassword+' '
      else
        this.errors=errors.response.data.currentPassword+' '+errors.response.data.password
    })
  }
}

}
</script>

<style>

</style>