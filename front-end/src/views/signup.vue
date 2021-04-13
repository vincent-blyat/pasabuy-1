<template class=" bg-gray-bgcolor font-nunito">
<!---Logo---->
    <div class="absolute vs:left-5 left-12 top-3">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 "/>
        <label for="" class="absolute text-xl font-black tracking-widest top-4 left-16 font-raleway text-red-buttons">
            pasaBUY
        </label>
    </div>
<!---End of Logo---->


    <div id="signup" class="flex items-center justify-center pt-10 pb-10 bg-gray-bgcolor vs:pt-16">
      <div class="w-2/5 my-12 overflow-hidden text-center bg-white shadow-md vs:w-10/12 flex-grow-1 rounded-xl">
        <div class="px-10 py-16 ">
            <h1 class="pb-5 space-x-1 space-y-1 text-2xl font-bold">Create an account</h1>
              <div action="#" class="space-y-3">
               <div class="flex mb-6 -mx-1">
                    <div class="w-1/2 px-1 mr-3">
                        <input name="" type="firstname"  required class="relative block w-full px-3 py-2 mt-4 mb-2 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="First Name" v-model="PersonalInfo.firstName" />
                    </div>
                    <div class="w-1/2 px-1">
                        <input aria-label="Last Name" name="" type="name" required class="relative block w-full px-3 py-2 mt-4 mb-2 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Last Name" v-model="PersonalInfo.lastName" />
                    </div>
                </div>
                <div class="mb-6">
                    <input aria-label="Email" name="" type="email" required class="relative block w-full px-3 py-2 mb-6 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Email" v-model="PersonalInfo.email" />
                </div>
                <div class="mb-10">
                    <input aria-label="Phone Number" name="" type="text" required class="relative block w-full px-3 py-2 mb-6 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Phone Number" v-model="PersonalInfo.phoneNumber" />
                </div>
                <div class="flex mb-2 -mx-1">
                    <div class="w-1/2 px-1 mr-3">
                        <input aria-label="Password" name="" type="password" required class="relative block w-full px-3 py-2 mb-6 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:z-10" placeholder="Password" v-model="PersonalInfo.password" />   
                    </div>
                    <div class="w-1/2 px-1">
                        <input aria-label="Confirm Password" name="" type="password" required class="relative block w-full px-3 py-2 mb-6 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Confirm Password" v-model="PersonalInfo.confirmPassword" />
                    </div>
                </div>
                <div class="flex mb-2 -mx-1 ">
                    <div class="w-1/2 px-1 mt-6 text-lg font-extrabold text-left text-grey-dark text-blue">
                        <router-link to="/log-in" >Log instead</router-link>
                    </div>
                    <div class="flex justify-end w-1/2 px-1 mt-3">
                        <button @click="nextPage" class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                            NEXT<!-- confirm email next -->
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
img{ 
  max-width: 100px;
  width:11%;
 
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
               confirmPassword : null
            }
        }
    }, 
    methods:{
        nextPage(){
            api.post('/api/postPersonal',this.PersonalInfo).then((res)=>{
               
                if(res!=null){
                    console.log('sucess, email sent');
                    console.log(res.data.personalInfo);
                    localStorage.setItem("code", res.data.code);
                    localStorage.setItem("personal", JSON.stringify(res.data.personalInfo));
                    localStorage.setItem("account",JSON.stringify(res.data.account));
                    this.$router.push({name:"verifyemail"});
                }
                else{
                    console.log('error, email not sent');
                }
            })
        }
    }
}



</script>
