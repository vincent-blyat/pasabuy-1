<template class="bg-gray-00 font-nunito">

    <div id="signup" class="login items-center justify-center bg-gray-100 md:min-h-screen sm:max-h-screen sm:flex md:flex">
      <div class="w-4/12 my-12 overflow-hidden text-center bg-white shadow-md flex-grow-1 md:w-4/12 rounded-xl">
            <div class="px-10 py-16">
              <h1 class="space-x-1 space-y-1 text-2xl font-bold">Create an account</h1>
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
                <div class="text-grey-dark mt-6 w-1/2 px-1 text-blue  text-left font-bold">
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
    </div>
</template>
