<template class=" bg-gray-bgcolor font-nunito">

    <div class="absolute vs:left-5 left-12 top-3 bg-gray-bgcolor">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 "/>
          <label for="" class="absolute text-xl font-black tracking-widest top-4 left-16 font-raleway text-red-buttons">
            pasaBUY
          </label>
    </div>

    <div id="verifyemail" class="flex items-center justify-center w-full h-screen pt-20 bg-gray-bgcolor">
      <div class="w-2/5 my-12 overflow-hidden text-center bg-white shadow-md vs:w-10/12 lg:w-6/12 md:w-7/12 sm:w-9/12 flex-grow-1 rounded-xl ssm:w-11/12">
        <div class="px-10 py-16 ">
          <h1 class="space-x-1 space-y-1 text-2xl font-bold pb-7">Verify your email</h1>
            <p class="pb-10 text-base font-bold text-gray-700 ">
                For your security, Pasabuy wants to make sure  it's really you. Pasabuy will send an email with a 6-digit verification code
            </p>

            <form action="#" class="space-y-3">
              <div class="">
                    <input name="" type="text" required class="relative block w-full px-3 py-2 mb-6 text-base font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-red-600 focus:z-10" placeholder="Code" value="" />
              </div>
              <div class="flex -mx-1 ">
                <div class="w-1/2 px-1 mt-4 text-lg font-bold text-left text-grey-dark text-blue">
                    <router-link to="/sign-up" >Back</router-link>
                </div>
                <div class="flex justify-end w-1/2 px-1 mt-3">
                  <button class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                    <router-link to="/address-book" >NEXT</router-link></button>
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
