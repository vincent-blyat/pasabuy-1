<template class=" font-nunito">

    <div class="absolute vs:left-5 left-12 top-3">
            <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 "/>
            <label for="" class="absolute text-xl font-black tracking-widest top-4 left-16 font-raleway text-red-buttons">
                pasaBUY
            </label>
        </div>

    <div id="uploadid" class="flex items-center justify-center w-full h-screen pt-16 pb-10 bg-gray-bgcolor ssm:w-full ">
        <div class="w-2/5 my-12 overflow-hidden text-center bg-white shadow-md lg:w-6/12 md:w-9/12 vs:w-10/12 flex-grow-1 rounded-xl sm:w-10/12 ssm:w-full">
            <div class="px-10 py-16">
                <h1 class="mb-3 space-x-1 space-y-1 text-2xl font-bold">Upload a valid ID</h1>
                <p class="mb-4 text-left sm:text-center lg:text-justify xl:text-center">
                    A government ID helps us check you're really you. It also helps us keep Pasabuy secure, fight fraud, and more. </p>

                <!--Front ID uploaded-->
                
                <div class="flex items-center pt-5 mb-2 -mx-1 vs:block">
                    <span class="absolute pb-1 mt-5 text-sm leading-normal text-gray-400 top-72 vs:pl-0 vs:float-left vs:static ssm:float-left ssm:static">Front of your id</span>
                        <label class="flex flex-col items-center w-1/2 py-3 mt-6 tracking-wide border-4 border-dashed rounded-lg vs:w-full ssm:w-full">
                            <img src="img/idsample.jpg" class="w-9/12">                        
                            <div for="" class="text-xs text-left">id-front-scanned.jpg</div>
                            <div class="pt-2 pl-16 font-bold vs:pl-24">
                                <a class="text-xs leading-normal vs:text-md text-red-danger">Delete</a>
                                <a class="pl-10 text-xs leading-normal vs:text-md">Edit </a>
                            </div> 
                        </label>

                    <!--Back ID uploading-->

                    <span class="absolute float-left pb-1 mt-5 text-sm leading-normal text-gray-400 pl-72 sm:pl-60 top-72 vs:pl-0 vs:static ssm:static ssm:float-left ssm:pl-0">Back of your id</span>
                        <label class="flex flex-col items-center w-1/2 px-1 py-10 mt-6 ml-10 tracking-wide border-4 border-dashed rounded-lg vs:mt-12 vs:ml-0 vs:w-full ssm:w-full">
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
                    <div class="flex mb-2 -mx-1 vs:m-1 vs:w-full md:w-full xl:w-full xl:pl-8 vs:pl-16 md:pl-16 lg:pl-16 lg:w-full vs:block">
                        <div class="w-1/2 px-1 mt-6 ml-12 vs:ml-6 vs:w-full md:w-full xl:w-full lg:w-full text-grey-dark">
                            <router-link to="/edit-profile" class="font-bold" >Skip for now</router-link>
                        </div>
                        <div class="flex justify-end w-1/2 px-1 mt-3 vs:mt-7 vs:w-full">
                            <button class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none ">
                            <router-link to="/verification-message" >NEXT</router-link></button>
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
