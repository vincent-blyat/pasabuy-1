<template class="bg-gray-bgcolor font-nunito">
<!---Logo---->
      <div class="absolute vs:left-5 left-12 top-3">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 "/>
          <label for="" class="absolute text-xl font-black tracking-widest top-4 left-16 font-raleway text-red-buttons">
            pasaBUY
          </label>
      </div>
<!---End of Logo---->

      <div id="login" class="flex items-center justify-center w-full h-screen pt-12 bg-gray-bgcolor">
        <div class="absolute overflow-hidden font-bold text-center bg-white shadow-md vs:w-10/12 w-97 vs:left-11 left-96.7 rounded-xl">
          <div class="px-10 py-16">
            <h1 class="space-x-1 space-y-1 text-2xl">Welcome back!</h1>
              <p class="mb-5 space-y-1 font-light text-gray-500">
                Log in with your email and password</p>
                <div class=""> 
                  <input aria-label="Email" name="" type="email" required class="relative block w-full h-12 px-3 py-2 mt-8 mb-6 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-red-600 focus:z-10 sm:text-sm" placeholder="Email" value="" />
                </div>
                <div class="text-2xl">
                  <input aria-label="Password" name="" type="password" required class="relative block w-full h-12 px-3 py-2 text-sm placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-red-600 focus:z-10 focus:text-l" placeholder="Password" value="" />
                </div>
                <div class="mt-6 text-left text-md text-grey-dark">
                  <a class="font-bold underline-none " href="#">
                    <router-link to="/forgot-password" >
                      Forgot Password?
                    </router-link>
                  </a>
                </div>
                <div class="flex justify-center py-5">
                  <button class="w-full h-12 py-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                    <router-link to="/dashboard" >Log in</router-link>
                  </button>
                </div>
                <div class="mt-4 font-normal text-left text-gray-500 text-md text-grey-dark">
                  Need and account? 
                    <router-link class="font-bold text-black border-b border-grey-dark" to="/sign-up" >Register</router-link>
                </div>
              </div>
            </div>
          </div><!---End -->
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

