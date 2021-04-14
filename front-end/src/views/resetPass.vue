<template class="">

      <div class="flex items-center ">
        <router-link to="/">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 block">
        </router-link>
        <h1 class="absolute text-xl font-black tracking-widest  left-16 font-raleway
          text-red-buttons block
           ">pasaBUY</h1>
      </div>

      <div id="resetpass" class="items-center flex justify-center w-full mt-10  pb-16 bg-transparent px-3 ">
        <div class=" overflow-hidden font-bold text-center bg-white shadow-md w-full rounded-xl
        lg:w-97
        2xl:w-97  
        xl:w-97 
        md:w-97
        sm:w-97
        ">
          <div class="px-10 py-16">
            <h1 class="space-x-1 space-y-1 text-2xl">Reset Password</h1>
              <p class="mb-5 space-y-1 font-light text-gray-500">
                Your new password must be different from the previous used passwords.</p>
                <div class=""> 
                  <input aria-label="New Password" name="" type="password" required class="relative block w-full h-12 px-3 py-2 mt-8 mb-6 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="New Password" value="" />
                </div>
                <div class="text-2xl">
                  <input aria-label="Contirm Password" name="" type="password" required class="relative block w-full h-12 px-3 py-2 text-sm placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 focus:text-l" placeholder="Confirm Password" value="" />
                </div>
                <div class="flex justify-center py-5">
                    <button class="w-full h-12 px-5 py-2 text-white transition-colors duration-150 bg-red-700 rounded-3xl focus:shadow-outline hover:bg-red-700">
                        <router-link to="/log-in" >Log in</router-link></button>
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
</style>

<script>
export default {
  
  created: function () {
    document.body.style.backgroundColor = "rgb(235,235,235)";
  },
}
</script>