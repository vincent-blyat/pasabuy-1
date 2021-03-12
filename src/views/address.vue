<template class="font-nunito bg-gray-200">
    <div class="sm:min-h-screen md:min-h-screen lg:min-h-screen xl:min-h-screen flex items-center justify-center bg-gray-200 ">
        <!--Sign Up-->
        <div class="bg-white p-8 rounded shadow-2xl ">
            <h2 class="text-2xl font-bold mb-5 flex items-center justify-center">Add your Shipping Address</h2>
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
                    <select aria-label="City" name="" type="text" required class="relative block w-full h-12 px-3 py-2 mt-4 mb-4 text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="City/Municipality" value="" >
                      <option>City/Municipality</option>
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
                <div class="lg:flex mb-2 -mx-1">
                <div class="text-grey-dark mt-6 w-1/2 px-1">
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
</template>

<script>
export default {
    
}
</script>