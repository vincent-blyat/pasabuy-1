<template class="bg-gray-00 font-nunito">

    <div id="login" class="login items-center justify-center bg-gray-100 md:min-h-screen sm:max-h-screen sm:flex md:flex">
      <div class="w-4/12 my-12 overflow-hidden font-bold text-center bg-white shadow-md flex-grow-1 md:w-4/12 rounded-xl">
            <div class="px-10 py-16">
              <h1 class="space-x-1 space-y-1 text-2xl">Add your shipping address</h1>
              <form action="#" class="space-y-3">
                <div class="w-full ">
                    <input aria-label="House Number" name="" type="text" required class="relative block w-full h-12 px-3 py-2 mt-8 mb-4 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="House Number" value="" />
                </div>
                <div class="w-full">
                    <select aria-label="Province" name="" type="text" required class="relative block w-full h-12 px-3 py-2 mt-4 mb-4 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Province" value="" >
                      <option>Province</option>
                      <option>Albay</option>
                      <option>Albay</option>
                    </select>
                  </div>
                  <div class="w-full">
                    <select aria-label="Barangay" name="" type="text" required class="relative block w-full h-12 px-3 py-2 mt-4 mb-4 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Barangay" value="" >
                      <option>Barangay</option>
                      <option>Albay</option>
                      <option>Albay</option>
                    </select>
                  </div>
                  <div class="w-full">
                    <select aria-label="City" name="" type="text" required class="relative block w-full h-12 px-3 py-2 mt-4 mb-4 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="City/Municipality" value="" >
                      <option>City/Municipality</option>
                      <option>Albay</option>
                      <option>Albay</option>
                    </select>
                  </div>
                <div class="lg:flex mb-2 -mx-1">
                <div class="text-grey-dark mt-6 w-1/2 px-1 text-left">
                        <router-link :to="{name: 'signup'}" class="no-underline border-b border-blue text-blue font-bold" >Back</router-link>
                </div>
                <div class="flex justify-end w-1/2 px-1">
                <button class=" h-10 px-5 m-2 text-white transition-colors duration-150 bg-red-700 rounded-3xl focus:shadow-outline hover:bg-red-800 ">
                    <router-link :to="{name: 'uploadid'}" >NEXT</router-link></button>
                </div>
                </div>
            </form>
          </div>
        </div>
      </div>
</template>
