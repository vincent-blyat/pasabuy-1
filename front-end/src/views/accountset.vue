<template>
<Nav/>
<div  class=" border-black border-2 shadow-sm bg-white  w-1/2 h-32 sm:w-full sm:justify-center mb-3">
<div class="  border-black border-2 sm:float-right sm:w-full sm:mr-20">
<p class="text-center sm:float  pt-20 w-full text-xl font-nunito font-bold">ACCOUNT SETTINGS</p>
</div>
</div>
<div class="  w-full flex justify-center self-center font-nunito mb-11  ">
<div class=" w-5/12  vs:w-96 flex flex-col justify-center self-center gap-y-5 ">
        <Personal/>
        <Address/>
        <InfoAccount/>
         <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Verification Status</p>
            </div>
          </div>
        <div class="text-sm w-5/12 gap-x-10 space-y-8 pt-8 ">
        <span class="  font-raleways font-bold grid grid-cols-1 "> 
        <p   :class="{red : unverified }">{{verification_status.msg}}</p>
        </span>
        </div>
    </div>
</div>
</div>
</template>
<script>
import Nav from '../views/Navbar.vue'
import Personal from '../views/personal_info.vue'
import Address from '../views/address_info.vue'
import InfoAccount from '../views/account_info.vue'
import api from '../api'
export default {
  name: 'Account',
  components: {
    Nav,Personal,Address,InfoAccount
  },
   beforeCreate:function () {
      document.body.className='account';
  },
data(){
    return{
    verification_status:{
        msg:''
    },
    unverified: true
    }
  
},
methods:{
    submit:function () {
       
    },
     Edit:function(pars) {
      let x=document.getElementById(pars).innerHTML;
      if(x=='Edit'){
          document.getElementById(pars).innerHTML="Save";
          
      }
      else{
         document.getElementById(pars).innerHTML="Edit"; 
         this.submit();
      }
    }

    },
mounted(){
    //get the user information from the laravel API
    api.get('/api/getPersonal').then((res)=>{
      console.log(res.data);
      if (!res.data.verifyStatus.localeCompare('unverified')){
        this.verification_status.msg = 'Your account is not fully verified.';
        this.unverified = true;
      }else{
        this.verification_status.msg = 'Your account is fully verified.';
        this.unverified = false;
      }
      //this.user = res.data;
    }).catch((error) => {
      this.error=error.response.data.errors;
    })
  }
}
</script>
<style>
body.account{
    background:white;
}
body.home{
    background-color:white;
}
.red {
  color: red;
}
</style>
