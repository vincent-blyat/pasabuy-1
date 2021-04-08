<template class="bg-gray-bgcolor font-nunito">
  <div class="flex items-center bg-gray-bgcolor">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 block">
        <h1 class="absolute text-xl font-black tracking-widest  left-16 font-raleway
          text-red-buttons block
           ">pasaBUY</h1>
      </div>
    <div id="address" class="flex items-center justify-center w-full h-screen pt-16 pb-10 bg-gray-bgcolor">
      <div class="w-2/5 my-12 overflow-hidden text-center bg-white shadow-md vs:w-10/12 lg:w-6/12 md:w-7/12 sm:w-9/12 ssm:w-10/12 flex-grow-1 rounded-xl">
        <div class="px-10 py-16">
          <h1 class="space-x-1 space-y-1 text-2xl font-bold">Add your shipping address</h1>
            <form action="#" class="space-y-3">
              <div class="w-full">
                <select aria-label="Province" name="" type="text" required class="relative block w-full px-3 py-2 mt-6 mb-4 font-semibold tracking-wide text-gray-500 border appearance-none bg-gray-bgcolor rounded-xl h-14 focus:outline-none focus:border-red-600 focus:z-10 sm:text-sm" placeholder="Province" value="" >
                  <option value="" disabled selected hidden>Province</option>
                  <option class="text-black">Albay</option>
                  <option class="text-black">Albay</option>
                </select>
              </div>
              <div class="w-full">
                <select aria-label="City" name="" type="text" required class="relative block w-full px-3 py-2 mt-4 mb-4 font-semibold tracking-wide text-gray-500 border appearance-none bg-gray-bgcolor h-14 rounded-xl focus:outline-none focus:border-red-600 focus:z-10" placeholder="City/Municipality" value="" >
                  <option value="" disabled selected hidden>City/Municipality</option>
                  <option class="text-black">Albay</option>
                  <option class="text-black">Albay</option>
                </select>
              </div>
              <div class="w-full">
                <select aria-label="Barangay" name="" type="text" required class="relative block w-full px-3 py-2 mt-4 mb-4 font-semibold tracking-wide text-gray-500 border appearance-none bg-gray-bgcolor h-14 rounded-xl focus:outline-none focus:border-red-600 focus:z-10 sm:text-sm" placeholder="Barangay" value="" >
                  <option value="" disabled selected hidden>Barangay</option>
                  <option class="text-black">Albay</option>
                  <option class="text-black">Albay</option>
                </select>
              </div>
              <div class="w-full ">
                <input aria-label="House Number" name="" type="text" required class="relative block w-full px-3 py-2 mt-4 mb-4 font-semibold tracking-wide placeholder-gray-500 border appearance-none focus:outline-none bg-gray-bgcolor rounded-xl h-14 focus:border-red-600 focus:z-10 sm:text-sm" placeholder="House Number" value="" />
              </div>
              <div class="w-full ">
                <input aria-label="Landmark" name="" type="text" required class="relative block w-full px-3 py-2 mt-4 mb-4 font-semibold tracking-wide placeholder-gray-500 border appearance-none focus:outline-none bg-gray-bgcolor rounded-xl h-14 focus:border-red-600 focus:z-10 sm:text-sm" placeholder="Landmark" value="" />
              </div>
              <div class="flex mb-2 -mx-1">
                <div class="w-1/2 px-1 mt-6 text-left text-grey-dark">
                  <router-link to="/verify-email" class="font-bold underline-none text-blue" >Back</router-link>
                </div>
                <div class="flex justify-end w-1/2 px-1 mt-3">
                  <button class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                    <router-link to="/upload-id" >NEXT</router-link></button>
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