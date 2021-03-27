<template>
             <!--User profile section-->    
         <div class="inline-flex space-x-2 items-center justify-start p-4 mt-2">
           <img class="w-14 h-full border rounded-full border-gray-200" src="img/yami.jpg"/>
           <p class="text-base font-bold leading-none text-gray-900">Yami Sukehiro</p>
         </div>
         <!--end-->

         <!--Accepting Offers button
         <div class="inline-flex flex-col items-start justify-start pl-5 mt-2">
            <div class="inline-flex space-x-2 items-center justify-start px-2 py-1 border rounded-full border-gray-500">
                <img class="w-6 h-full rounded-full" src="img/checkcircle.svg"/>
                <p class="text-sm font-bold leading-none text-indigo-900">Accepting Offers</p>
                <button @click="isOpen=!isOpen" >
                    <img class="w-6 h-full rounded-full" src="img/arrowdown (1).svg"/>
                </button>
                
                <div class="w-full">
                      <div v-if="isOpen" class="shadow-xl fixed bg-white rounded-lg py-2 pl-2 pr-4 pt-2 ">
                        <router-link to="#"  class="flex flex-row gap-x-2 "><span class="material-icons text-gray-500">mode</span>Accepting Request</router-link>
                        <router-link to="#" class="flex flex-row gap-x-2"> <span class="material-icons text-gray-500">delete</span>Accepting Offers</router-link>
                    </div>
                    </div>
                    
            </div>
        </div>-->
        <!--end-->

        <!--Delivery Information List-->
         <div class="flex flex-col mt-4 justify-center items-center">
             <div class="flex flex-row space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              delivery_dining 
              </span>
                    <input class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Delivery Address">
                </div>
                 
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              shopping_cart
              </span>
                    <input class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Shopping Place">
                </div>
             </div>

             <div class="flex flex-row pt-3 space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              alarm
              </span>
                    <input class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Schedule">
                </div>
                 
               <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              payments
              </span>
                    <input class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Payment Method">
                </div>
             </div>
            </div>
            <!--end-->
            
            <!--Select Shopping List button-->
            <div class="flex justify-center items-center mt-4">
                <button class="inline-flex items-center justify-center p-4 bg-gray-100 rounded-full w-31.75 vs:w-26.5 h-14">
                    <div class="flex space-x-2 items-center">
                        <img class="w-6 h-full rounded-lg" src="img/add.svg"/>
                        <p class="text-base font-bold leading-none text-gray-900">Select Shopping List</p>
                    </div>
                </button>
            </div>
            <!--end-->
           
            <!--Comment Section-->
           <div class="justify-center flex mt-6">
            <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm sm:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 vs:w-26.5" placeholder = "Enter your post message here..."></textarea>
           </div>
           <!--end-->

           <!--Post button-->
           <div class="justify-center flex mt-6 pb-6">
            <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 vs:w-26.5 h-10">
                <p class="text-base font-bold leading-normal text-center text-white">Post</p>
            </button>
           </div>
           <!--end-->
</template>

<script>
export default {
    data (){
        return{
            isOpen:false
        }
    }
}
</script>