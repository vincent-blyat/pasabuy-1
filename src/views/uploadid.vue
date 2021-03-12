<template class="font-nunito bg-gray-200">
    <div class=" min-h-screen md:flex items-center justify-center bg-gray-200 ">
        <!--Verification-->
        <div class="max-w-md mx-auto bg-white p-8 rounded shadow-2xl ">
            <h2 class="text-2xl font-bold mb-5 md:flex items-center justify-center font-raleways ">Upload a valid ID</h2>
            <p class="mb-4 text-left sm:text-center md:text-right lg:text-justify xl:text-center">
                A government ID helps us check you're really you. It also helps us keep Pasabuy secure, fight fraud, and more. </p>
               <!--Front ID uploading-->
               
               <div class=" flex items-center mb-2 -mx-1">
                <label class="mt-2 w-1/2 px-1 flex flex-col items-center py-6 rounded-lg  tracking-wide border">
                    <span class="mt-2 text-base leading-normal">Front ID</span>
                    <img src="img/id-front.svg">
                    <input type='file' class="hidden" />
                </label>
                <!--Back ID uploading-->
                <label class="mt-2 ml-4 w-1/2 px-1 flex flex-col items-center py-6 rounded-lg  tracking-wide border">
                    <span class="mt-2 text-base leading-normal">Back ID</span>
                    <img src="img/id-back.svg">
                    <input type='file' class="hidden" />
                </label>
                
                </div>
                <!--Buttons-->
                <div class="flex mb-2 -mx-1">
                    <div class="text-grey-dark mt-6 w-1/2 px-1">
                    <router-link :to="{name: 'address'}" class="font-bold" >Back</router-link>
                </div>
                <div class="flex mb-2 -mx-1">
                    <div class="text-grey-dark mt-6 w-1/2 px-1">
                    <a class="font-bold" href="#">Skip for now</a>
                </div>
                <div class="flex justify-end mt-3 w-1/2 px-1">
                <button class=" h-8 px-5 m-2 text-white transition-colors duration-150 bg-red-600 rounded-3xl focus:shadow-outline">
                <router-link :to="{name: 'verifymessage'}" >NEXT</router-link></button>
                </div>
                </div>
            </div>
        </div>
    </div>



</template>

<script>
export default {
    
}
</script>