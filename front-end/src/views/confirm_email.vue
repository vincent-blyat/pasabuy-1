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
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Email</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="close"> Close</p>
          </div>
          <div class="text-center text-gray-400 text-sm">
              <p>
                  To make sure  it's really you, enter the 6-digit verification code sent to your new Email
              </p>
          </div>
           <p class="text-center text-red-500">{{ errors }}</p>
          <div class=" ">
            <div class="flex flex-col p-5 space-y-4
            ">
             
            
             <div class="flex flex-col">
                <span class="ml-2">Code</span>
                 <input id="new_email" v-model="typeCode"  type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
              </div>
            
          </div>
           <div class="flex justify-between mt-4 px-5 text-2xlspace-x-4 items-center">
             <button @click="save" class="px-4 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
import api from "../api"
import VueSimpleAlert from 'vue-simple-alert'
export default {
props:['email'],
data(){
    return{
        toggle:true,
        code:null,
        errors:null,
        typeCode:null
    }
},
methods:{
    save(){
        console.log(this.email)
        this.code = localStorage.getItem('a')
        var params= {code:this.code,email:this.email,typeCode:this.typeCode}
        api.post('api/changeEmail',params).then((res)=>{
            VueSimpleAlert.alert(res.data.message,"Success","success")
            localStorage.removeItem('a')
            this.toggle=false
        }).catch((errors)=>{
            this.errors = errors.response.data.error
        })
       
    },
    close(){
        this.toggle=false;
        localStorage.removeItem('a')
    }
}

}
</script>

<style>

</style>
