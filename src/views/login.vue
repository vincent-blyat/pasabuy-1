<template class="bg-gray-00 font-nunito">

    <div id="login" class="login items-center justify-center bg-gray-100 md:min-h-screen sm:max-h-screen sm:flex md:flex">
      <div class="w-4/12 my-12 overflow-hidden font-bold text-center bg-white shadow-md flex-grow-1 md:w-4/12 rounded-xl">
            <div class="px-10 py-16">
              <h1 class="space-x-1 space-y-1 text-2xl">Welcome back!</h1>
              <p class="mb-5 space-y-1 font-light text-gray-500">
                Log in with your email and password</p>
                <div class=""> 
                    <input aria-label="Email" name="" type="email" required class="relative block w-full h-12 px-3 py-2 mt-8 mb-6 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Email" value="" />
                </div>
                <div class="text-2xl">
                    <input aria-label="Password" name="" type="password" required class="relative block w-full h-12 px-3 py-2 text-sm placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 focus:text-l" placeholder="Password" value="" />
          
                  </div>
                <div class="mt-6 text-left text-md text-grey-dark">
                    <a class="font-bold no-underline border-b border-blue text-blue" href="#">
                        Forgot Password?
                    </a>
                </div>
                <div class="flex justify-center py-5">
                    <button class="w-full h-12 px-5 py-2 text-white transition-colors duration-150 bg-red-700 rounded-3xl focus:shadow-outline hover:bg-red-700">
                        <a href="#">
                        Log in
                        </a></button>
                    </div>
                    <div class="mt-4 font-normal text-left text-gray-500 text-md text-grey-dark">
                        Need and account? 
                          <router-link class="font-bold text-black border-b border-grey-dark" :to="{name: 'signup'}" >Register</router-link>
                      </div>
          </div>
        </div>
      </div>
</template>
