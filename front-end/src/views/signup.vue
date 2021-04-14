<template class=" bg-gray-bgcolor font-nunito">

    <div class="flex items-center ">
        <router-link to="/">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 block">
        </router-link>
        <h1 class="absolute text-xl font-black tracking-widest  left-16 font-raleway
          text-red-buttons block
          
           ">pasaBUY</h1>
      </div>


    <div id="signup" class="flex items-center justify-center   pb-10  px-4">
      <div class="w-full my-12 overflow-hidden text-center bg-white shadow-md flex-grow-1 rounded-xl
      xl:w-2/5 lg:w-2/5 2xl:w-2/5 
      md:w-97 sm:w-97
      ">
        <div class="px-10 py-16 ">
            <h1 class="pb-5 space-x-1 space-y-1 text-2xl font-bold">Create an account</h1>
              <div action="#" class="space-y-3">
                <p class="text-center text-red-500">{{errors}}</p>
               <div class="flex flex-col 
                md:flex-row md:justify-between md:space-x-6
                sm:flex-row sm:justify-between sm:space-x-6
                xl:flex-row xl:justify-between xl:space-x-6
                2xl:flex-row 2xl:justify-between 2xl:space-x-6
                lg:flex-row lg:justify-between lg:space-x-6
                 ">
                    <div  class="w-full">
                        <input name="" type="firstname" required class="relative block w-full px-3 py-2 mt-4 mb-2 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="First Name" v-model="PersonalInfo.firstName" />
                    </div>
                    <div  class="w-full">
                        <input aria-label="Last Name" name="" type="name" required class="relative block w-full px-3 py-2 mt-4 mb-2 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Last Name" v-model="PersonalInfo.lastName" />
                    </div>
                </div>
                <div class="mb-6">
                    <input aria-label="Email" name="" type="email" required class="relative block w-full px-3 py-2 mb-6 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Email" v-model="PersonalInfo.email"  />
                </div>
                <div class="mb-10">
                    <input aria-label="Phone Number" name="" type="number" required class="relative block w-full px-3 py-2 mb-6 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Phone Number" v-model="PersonalInfo.phoneNumber"  />
                </div>
                <div class="flex flex-col  
                md:flex-row md:justify-between md:space-x-6
                sm:flex-row sm:justify-between sm:space-x-6
                xl:flex-row xl:justify-between xl:space-x-6
                2xl:flex-row 2xl:justify-between 2xl:space-x-6
                lg:flex-row lg:justify-between lg:space-x-6
                 ">
                    <div class="w-full" >
                        <input aria-label="Password" name="" type="password" required class="relative block w-full px-3 py-2 mb-6 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:z-10 focus:border-blue-300 " placeholder="Password" v-model="PersonalInfo.password"/>   
                    </div>
                    <div class="w-full" >
                        <input aria-label="Confirm Password" name="" type="password" required class="relative block w-full px-3 py-2 mb-6 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Confirm Password" v-model="PersonalInfo.password_confirmation" />
                    </div>
                </div>
                <div class="flex mb-2 -mx-1 ">
                    <div class="w-1/2 px-1 mt-6 text-lg font-bold text-left text-grey-dark text-blue">
                        <router-link to="/log-in" >Log instead</router-link>
                    </div>
                    <div class="flex justify-end w-1/2 px-1 mt-3">
                        <button @click="nextPage" class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                           NEXT
                        </button>
                    </div>
                </div>
                <div class="mt-4 text-xs font-bold tracking-wide text-left text-gray-500 text-grey-dark">
                    By signing up, you agree to the 
                    <a class="font-bold text-black" href="#">
                         Terms of Service
                    </a> and 
                    <a class="font-bold text-black" href="#">
                        Privacy Policy
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
</template>

<style>
    #journal-scroll::-webkit-scrollbar {
        width: 5px;
        cursor: pointer;
      }
  
    #journal-scroll::-webkit-scrollbar-track {
        background-color: rgba(229, 231, 235, var(--bg-opacity));
        cursor: pointer;
    }
  
    #journal-scroll::-webkit-scrollbar-thumb {
        cursor: pointer;
        background-color: rgba(185, 28, 28)
    
    }
#iCheck{
  font-size:16px;
  color:rgb(22, 22, 141);
}
#iMessage{
  font-size:24px;
  color:rgb(22, 22, 141);
}
</style>

<script>
import api from '../api'
export default {
    data(){
        return{
            PersonalInfo:{
               firstName : null,
               lastName : null,
               email :  null,
               phoneNumber : null,
               password : null,
               password_confirmation : null
            },
            errors:null,
        }
    }, 
    methods:{
        nextPage(){
            api.get('/sanctum/csrf-cookie').then(() => {
            api.post('/api/postPersonal',this.PersonalInfo).then((res)=>{
                if(res!=null){
                    localStorage.setItem("personal", JSON.stringify(res.data.personalInfo));
                    localStorage.setItem("account",JSON.stringify(res.data.account));
                    console.log(res.data.personalInfo);
                    localStorage.setItem("code", res.data.code);
                    this.$router.push({name:"verifyemail"});
                }
                else{
                    console.log('error, email not sent');
                }
            }).catch((errors)=>{
                if(errors.response.data.firstName == undefined)
                    errors.response.data.firstName = "";
                if(errors.response.data.lastName == undefined)
                    errors.response.data.lastName = "";
                if(errors.response.data.phoneNumber == undefined)
                    errors.response.data.phoneNumber = "";
                if(errors.response.data.password == undefined)
                    errors.response.data.password = "";
                if(errors.response.data.email == undefined)
                    errors.response.data.email = "";
                this.errors =errors.response.data.firstName+' '+ errors.response.data.lastName+' '+errors.response.data.email+' '+errors.response.data.phoneNumber+' '+errors.response.data.password;
            })
            })
        }
    },
    created: function () {
    document.body.style.backgroundColor = "rgb(235,235,235)";
  },
  mounted(){
      if(localStorage.getItem('personal')!=null && localStorage.getItem('account')!=null ){
          var dataPersonal = JSON.parse(localStorage.getItem('personal'))
          this.PersonalInfo.firstName = dataPersonal.firstName
          this.PersonalInfo.lastName = dataPersonal.lastName
          this.PersonalInfo.email = dataPersonal.email
          this.PersonalInfo.phoneNumber = dataPersonal.phoneNumber
      }
  }
}
</script>
