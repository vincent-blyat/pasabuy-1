<template>
    
         <!--User Profile-->
         <div class="inline-flex space-x-2 items-center justify-start p-4 ssm:mt-0 vs:mt-1">
           <img class="w-14 h-full vs:w-12 ssm:w-10 border rounded-full border-gray-200" src="img/yami.jpg"/>
           <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">Yami Sukehiro</p>
         </div>
         <!--end-->

        <!--Delivery information list-->
         <div class="flex flex-col mt-1 vs:mt-1 ssm:px-2 vs:px-2 sm:px-2 justify-center items-center">
             <div class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              delivery_dining  
              </span>
                    <input class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52  h-11 py-2.5 pl-4 items-center pr-16 vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500 w-44" placeholder="Delivery Area">
                </div>
                 
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              shopping_cart  
              </span>
                    <input class="w-44 focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 pl-4 items-center py-2.5 pr-16 vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Shopping Place">
                 </div>
             </div>

             <div class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 ssm:pt-2 pt-3 space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              alarm  
              </span>
                    <input class="w-44 focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 pl-4 items-center pr-16 vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Schedule">
                </div>
                 
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              directions_car 
              </span>
                    <input class="w-44 focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 pl-4 items-center pr-16 vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Transport Mode">
                 </div>
             </div>

             <div class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 ssm:pt-2 pt-3 space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              shopping_bag  
              </span>
                    <input class="w-44 focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 pl-4 items-center pr-16 vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Capacity">
                </div>
                 
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              payments
              </span>
                    <input class="w-44 focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 pl-4 items-center pr-16 vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Payment Method">
                 </div>
             </div>
            </div>
            <!--end-->

            <!--Comment section-->
           <div class="justify-center flex mt-3 px-2">
            <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm text-sm ssm:text-xs vs:text-xs lvs:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 vs:w-full" placeholder = "Enter your post message here..."></textarea>
           </div>
           <!--end-->

           <!--Post button-->
           <div class="justify-center flex mt-3 pb-3 px-2">
            <button class="inline-flex items-center justify-center focus:outline-none px-4 vs:py-2 bg-red-700 rounded-full w-31.75 ssm:w-full vs:w-full h-10">
                <p class="text-base ssm:text-sm vs:text-sm sm:text-sm font-bold leading-normal text-center text-white">Post</p>
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