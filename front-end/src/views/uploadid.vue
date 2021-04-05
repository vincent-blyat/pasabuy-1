<template class="bg-gray-00 font-nunito">

    <div class="absolute vs:left-5 left-12 top-3">
            <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 "/>
            <label for="" class="absolute text-xl font-black tracking-widest top-4 left-16 font-raleway text-red-buttons">
                pasaBUY
            </label>
        </div>

    <div id="uploadedid" class="flex items-center justify-center pt-10 pb-10 bg-gray-bgcolor vs:pt-16">
        <div class="w-2/5 my-12 overflow-hidden text-center bg-white shadow-md vs:w-10/12 flex-grow-1 rounded-xl">
            <div class="px-10 py-16">
                <h1 class="mb-3 space-x-1 space-y-1 text-2xl font-bold">Upload a valid ID</h1>
                <p class="mb-4 text-left sm:text-center lg:text-justify xl:text-center">
                    A government ID helps us check you're really you. It also helps us keep Pasabuy secure, fight fraud, and more. </p>

                <!--Front ID uploaded-->
                
                <div class="flex items-center pt-5 mb-2 -mx-1">
                    <span class="absolute pb-1 mt-5 text-sm leading-normal text-gray-400 top-64 vs:top-74 vs:pl-2">Front of your id</span>
                        <label class="flex flex-col items-center w-1/2 py-3 mt-6 tracking-wide border-4 border-dashed rounded-lg">
                            <img src="img/idsample.jpg" class="w-9/12">                        
                            <div for="" class="text-xs text-left">id-front-scanned.jpg</div>
                            <div class="pt-2 pl-16 font-bold">
                                <a class="text-xs leading-normal text-red-danger">Delete</a>
                                <a class="pl-10 text-xs leading-normal">Edit </a>
                            </div> 
                        </label>

                    <!--Back ID uploading-->

                    <span class="absolute pb-1 mt-5 text-sm leading-normal text-gray-400 pl-72 top-64 vs:top-74 vs:pl-56">Back of your id</span>
                        <label class="flex flex-col items-center w-1/2 px-1 py-10 mt-6 ml-10 tracking-wide border-4 border-dashed rounded-lg">
                            <img src="img/id-back.svg" class="w-4/12">
                            <span class="text-base leading-normal">Browse</span>
                            <input type='file' class="hidden" />
                        </label>
                </div>

                <!--Buttons-->
                <div class="flex mb-2 -mx-1">
                    <div class="w-1/2 px-1 mt-6 text-left text-grey-dark focus:outline-none ">
                        <router-link to="/address-book" class="font-bold" >Back</router-link>
                    </div>
                    <div class="flex mb-2 -mx-1 vs:m-1 vs:w-full vs:pl-16 vs:mb-7">
                        <div class="w-1/2 px-1 mt-6 ml-12 vs:w-full text-grey-dark">
                            <button class="font-bold" @click="saveUser">Skip for now</button>
                        </div>
                        <div class="flex justify-end w-1/2 px-1 mt-3 vs:absolute vs:pr-81 vs:mt-16 vs:w-full vs:pb-20">
                            <button  @click="saveUser" class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none ">
                            NEXT</button>
                    </div>
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


</style>
<script>


import api from '../api'
export default {
    methods:{
        saveUser(){

            var data = [JSON.parse(localStorage.getItem('personal')), JSON.parse(localStorage.getItem('account')),JSON.parse(localStorage.getItem('address'))]
            
            var dataform = {personal: data[0], account:data[1], address: data[2] }
            api.post('/api/register', {params: {data:dataform}}).then((res)=>{
                 console.log('register ',res.data);
                // if(res!=null){
                //     console.log('sucess, info sent');
                //     console.log(res.data);
                //     //this.$router.push({name:"dashboard"});
                // }
                // else{
                //     console.log('error, email not sent');
                // }
            })
        }
    }
}
</script>
