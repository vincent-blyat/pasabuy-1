<template>
             <!--User profile section-->    
         <div class="inline-flex space-x-2 items-center justify-start p-4 mt-2">
           <img class="w-14 h-full border rounded-full border-gray-200" src="img/yami.jpg"/>
           <p class="text-base font-bold leading-none text-gray-900">Yami Sukehiro</p>
         </div>
         <!--end-->

         <!--Accepting Offers button-->
         <div class="inline-flex flex-col items-start justify-start pl-5 mt-2">
            <div class="inline-flex space-x-2 items-center justify-start px-2 py-1 border rounded-full border-gray-500">
                <img class="w-6 h-full rounded-full" src="img/checkcircle.svg"/>
                <p class="text-sm font-bold leading-none text-indigo-900">Accepting Offers</p>
                <button>
                    <img class="w-6 h-full rounded-full" src="img/arrowdown (1).svg"/>
                </button>
            </div>
        </div>
        <!--end-->

        <!--Delivery Information List-->
         <div class="flex flex-col mt-4 justify-center items-center">
             <div class="flex flex-row space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <img class="w-8 h-8 rounded-lg mt-1.5" src="img/delivery.svg"/>
                    <input class="focus:outline-none flex w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Delivery Area">
                </div>
                 
                <div class="flex space-x-2">
                    <img class="w-8 h-8 rounded-lg mt-1.5" src="img/shopping_cart.svg"/>
                    <input class="focus:outline-none flex w-52 h-11 pl-4 items-center py-2.5 pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Shopping Place">
                 </div>
             </div>

             <div class="flex flex-row pt-3 space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <img class="w-8 h-8 rounded-lg mt-1.5" src="img/alarm.svg"/>
                    <input class="focus:outline-none flex w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Schedule">
                </div>
                 
                <div class="flex space-x-2">
                    <img class="w-8 h-8 rounded-lg mt-1.5" src="img/car.svg"/>
                    <input class="focus:outline-none flex w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Transport Mode">
                 </div>
             </div>
            </div>
            <!--end-->
            
            <!--Select Shopping List button-->
            <div class="flex justify-center items-center mt-4">
                <div class="inline-flex items-center justify-center p-4 bg-gray-100 rounded-full" style="width: 508px; height: 56px;">
                    <button class="flex space-x-2 items-center">
                        <img class="w-6 h-full rounded-lg" src="img/add.svg"/>
                        <p class="text-base font-bold leading-none text-gray-900">Select Shopping List</p>
                    </button>
                </div>
            </div>
            <!--end-->
           
            <!--Comment Section-->
           <div class="justify-center flex mt-6">
            <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm sm:text-sm rounded-2xl rounded-md outline-none h-auto" placeholder = "Enter your post message here..." style="width: 508px;"></textarea>
           </div>
           <!--end-->

           <!--Post button-->
           <div class="justify-center flex mt-6 pb-6">
            <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full" style="width: 508px; height: 40px;">
                <p class="text-base font-bold leading-normal text-center text-white">Post</p>
            </button>
           </div>
           <!--end-->
</template>