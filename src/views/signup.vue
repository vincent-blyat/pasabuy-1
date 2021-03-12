<template class="font-nunito">
<div class="md:flex justify-between md:items-center bg-gray-200">
        <img src="#" alt="logo">
    </div>
    <div class="sm:min-h-screen md:min-h-screen lg:min-h-screen xl:min-h-screen flex items-center justify-center bg-gray-200 ">
<!--Sign Up-->
        <div class="bg-white p-8 rounded">
            <h2 class="text-2xl font-bold mb-5 flex items-center justify-center">Create an account</h2>
            <form action="#" class="space-y-3">
                <div class="lg:flex sm:flex md:flex xl:flex mb-2 -mx-1">
                <div class="w-1/2 px-1">
                    <input aria-label="First Name" name="" type="name" required class="relative block w-full h-12 px-3 py-2 mt-4 mb-2 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="First Name" value="" />
                </div>
                <div class="w-1/2 px-1">
                    <input aria-label="Last Name" name="" type="name" required class="relative block w-full h-12 px-3 py-2 mt-4 mb-2 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Last Name" value="" />
                </div>
                </div>
                <div>
                    <input aria-label="Email" name="" type="email" required class="relative block w-full h-12 px-3 py-2 mb-6 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Email" value="" />
                </div>
                <div>
                    <input aria-label="Phone Number" name="" type="text" required class="relative block w-full h-12 px-3 py-2 mb-6 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Phone Number" value="" />
                </div>
                <div class="lg:flex mb-2 -mx-1">
                <div class="w-1/2 px-1">
                    <input aria-label="Password" name="" type="password" required class="relative block w-full h-12 px-3 py-2 mb-6 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Password" value="" />     
                </div>
                <div class="w-1/2 px-1">
                    <input aria-label="Confirm Password" name="" type="password" required class="relative block w-full h-12 px-3 py-2 mb-6 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Confirm Password" value="" />
                </div>
                </div>
                <div class="lg:flex mb-2 -mx-1 ">
                <div class="text-grey-dark mt-6 w-1/2 px-1 border-b border-blue text-blue font-bold">
                    <router-link :to="{name: 'login'}" >Log instead</router-link>
                </div>
                <div class="flex justify-end w-1/2 px-1">
                <button class="h-10 px-5 m-2 text-white transition-colors duration-150 bg-red-700 rounded-3xl focus:shadow-outline hover:bg-red-800 ">
                    <router-link :to="{name: 'address'}" >NEXT</router-link></button>
                </div>
                </div>
                <div class="text-left text-xs text-grey-dark mt-4">
                    By signing up, you agree to the 
                    <a class="border-b border-grey-dark font-bold" href="#">
                        Terms of Service
                    </a> and 
                    <a class="border-b border-grey-dark font-bold" href="#">
                        Privacy Policy
                    </a>
                </div>
            </form>
        </div>    
    </div> 
</template>

<script>
export default {
    
}
</script>