<template class="bg-gray-00 font-nunito">
<!--Desktop Version-->
<div class="desktopVersion">

    <div id="uploadid" class="login items-center justify-center bg-gray-100 md:min-h-screen sm:max-h-screen sm:flex md:flex">
      <div class="w-4/12 my-12 overflow-hidden text-center bg-white shadow-md flex-grow-1 md:w-4/12 rounded-xl">
            <div class="px-10 py-16">
              <h1 class="space-x-1 space-y-1 text-2xl font-bold mb-3">Upload a valid ID</h1>
              <p class="mb-4 text-left sm:text-center md:text-right lg:text-justify xl:text-center">
                A government ID helps us check you're really you. It also helps us keep Pasabuy secure, fight fraud, and more. </p>
               <!--Front ID uploading-->
               
               <div class=" flex items-center mb-2 -mx-1">
                <label class="mt-2 w-1/2 px-1 flex flex-col items-center py-6 rounded-lg  tracking-wide border">
                    <span class="mt-2 text-base leading-normal">Front ID</span>
                    <img src="img/id-front.svg" class="w-1/2">
                    <input type='file' class="hidden" />
                </label>
                <!--Back ID uploading-->
                <label class="mt-2 ml-4 w-1/2 px-1 flex flex-col items-center py-6 rounded-lg  tracking-wide border">
                    <span class="mt-2 text-base leading-normal">Back ID</span>
                    <img src="img/id-back.svg" class="w-1/2">
                    <input type='file' class="hidden" />
                </label>
                </div>
                <!--Buttons-->
                <div class="flex mb-2 -mx-1">
                    <div class="text-grey-dark mt-6 w-1/2 px-1 text-left ">
                    <router-link :to="{name: 'address'}" class="font-bold" >Back</router-link>
                </div>
                <div class="flex mb-2 -mx-1">
                    <div class="text-grey-dark mt-6 w-1/2 px-1">
                    <a class="font-bold" href="#">Skip for now</a>
                </div>
                <div class="flex justify-end mt-3 w-1/2 px-1">
                <button class=" h-10 px-5 m-2 text-white transition-colors duration-150 bg-red-700 rounded-3xl focus:shadow-outline hover:bg-red-800 ">
                    <router-link :to="{name: 'verifymessage'}" >NEXT</router-link></button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--Mobile version-->
<div class="mobileVersion">
  
    <div id="uploadid" class="login items-center justify-center bg-gray-100 sm:max-h-screen sm:flex ">
      <div class="overflow-hidden text-center bg-white ">
            <div class="px-10 py-16">
              <h1 class="space-x-1 space-y-1 text-2xl font-bold mb-3">Upload a valid ID</h1>
              <p class="mb-4 text-left sm:text-center md:text-right lg:text-justify xl:text-center">
                A government ID helps us check you're really you. It also helps us keep Pasabuy secure, fight fraud, and more. </p>
               <!--Front ID uploading-->
               
               <div class=" flex items-center mb-2 -mx-1">
                <label class="mt-2 w-1/2 px-1 flex flex-col items-center py-6 rounded-lg  tracking-wide border">
                    <span class="mt-2 text-base leading-normal">Front ID</span>
                    <img src="img/id-front.svg" class="w-1/2">
                    <input type='file' class="hidden" />
                </label>
                <!--Back ID uploading-->
                <label class="mt-2 ml-4 w-1/2 px-1 flex flex-col items-center py-6 rounded-lg  tracking-wide border">
                    <span class="mt-2 text-base leading-normal">Back ID</span>
                    <img src="img/id-back.svg" class="w-1/2">
                    <input type='file' class="hidden" />
                </label>
                </div>
                <!--Buttons-->
                <div class="flex mb-2 -mx-1">
                    <div class="text-grey-dark mt-6 w-1/2 px-1 text-left ">
                    <router-link :to="{name: 'address'}" class="font-bold" >Back</router-link>
                </div>
                <div class="flex mb-2 -mx-1">
                    <div class="text-grey-dark mt-6 w-1/2 px-1">
                    <a class="font-bold" href="#">Skip for now</a>
                </div>
                <div class="flex justify-end mt-3 w-1/2 px-1">
                <button class=" h-10 px-5 m-2 text-white transition-colors duration-150 bg-red-700 rounded-3xl focus:shadow-outline hover:bg-red-800 ">
                    <router-link :to="{name: 'verifymessage'}" >NEXT</router-link></button>
                </div>
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
    /*minimized desktop version and mobile version
    screen sizes lesser than 600px*/
   
    .desktopVersion{
      display:none;
      }
    .mobileVersion{
      display:inline;
    }
     
    /*for screen sizes 600px++*/
    @media only screen and (min-width: 700px) {
      .desktopVersion{
        display:inline;}
      .mobileVersion{
       display:none;
    }
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
