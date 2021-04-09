<template class="bg-gray-bgcolor font-nunito">
    <div class="absolute vs:left-5 left-12 top-3 ">
      <router-link to="/">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 "/>
      </router-link>
        <label for="" class="absolute text-xl font-black tracking-widest top-4 left-16 font-raleway text-red text-red-buttons">
            pasaBUY
        </label>
    </div>
    
    <div id="forgotPassword" class="flex items-center justify-center pt-32 pb-32 bg-gray-100">
      <div class="w-4/12 my-12 overflow-hidden text-center bg-white shadow-md vs:w-10/12 flex-grow-1 md:w-4/12 rounded-xl">
            <div class="px-10 py-16">
              <h1 class="mb-5 space-x-1 space-y-1 text-2xl font-bold">Forgot Password</h1>
              <p class="mb-5 space-y-1 font-light text-black-200">
                Enter your email and we'll send you a link to get back into your account</p>
              <form action="#" class="space-y-3">
                <div class="mb-2 -mx-1">
                  <div>
                      <input aria-label="Email" name="" type="email" required class="relative block w-full h-12 px-3 py-2 mb-6 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Email" value="" />
                  </div>

                  <div class="flex mb-2 -mx-1 ">
                    <div class="w-1/2 px-1 mt-6 text-lg font-bold text-left text-grey-dark text-blue">
                        <router-link to="/log-in" >Log instead</router-link>
                    </div>
                    <div class="flex justify-end w-1/2 px-1 mt-3">
                        <button class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                            <router-link to="/forgot-password-verify" >SEND</router-link>
                        </button>
                    </div>
                </div>
                  
                </div>
            </form>
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
