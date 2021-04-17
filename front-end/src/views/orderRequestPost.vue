<template>
             <!--User profile section-->    
         <div class="inline-flex space-x-2 items-center justify-start p-4">
             <img class="w-14 h-full border rounded-full border-gray-200" :src="profile.profilePicture" />
            <p class="text-base font-bold leading-none text-gray-900">{{profile.firstName}} {{profile.lastName}}</p>
         </div>
         <!--end-->

        <!--Delivery Information List-->
         <div class="flex flex-col mt-1 ssm:px-2 sm:px-2 justify-center items-center vs:px-2">
             <div class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              delivery_dining 
              </span>
                    <input class="w-44 focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs ssm:pr-0 vs:w-full w-52 h-11 py-2.5 pl-4 items-center pr-16 vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Delivery Address">
                </div>
                 
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              shopping_cart
              </span>
                    <input class="w-44 focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs ssm:pr-0 vs:w-full w-52 h-11 py-2.5 pl-4 items-center pr-16 vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Shopping Place">
                </div>
             </div>

             <div class="flex flex-row pt-3 ssm:pt-2 ssm:flex-col ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              alarm
              </span>
                    <input class="w-44 focus:outline-none sm:w-full ssm:w-full ssm:h-auto ssm:text-xs ssm:pr-0 flex vs:w-full w-52 h-11 py-2.5 pl-4 items-center pr-16 vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Schedule">
                </div>
                 
               <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              payments
              </span>
                    <input class="w-44 focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs ssm:pr-0 vs:w-full w-52 h-11 py-2.5 pl-4 items-center pr-16 vs:pr-0 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Payment Method">
                </div>
             </div>
            </div>
            <!--end-->
            
            <!--Select Shopping List button-->
            <div class="flex justify-center items-center ssm:px-2 mt-3 sm:px-2 vs:px-2">
                <button class="inline-flex items-center justify-center p-4 bg-gray-100 rounded-full w-31.75 ssm:w-full vs:w-full h-14 ssm:h-10 vs:h-12">
                    <div class="flex space-x-2 items-center">
                        <img class="w-6 h-full rounded-lg" src="img/add.svg"/>
                        <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">Select Shopping List</p>
                    </div>
                </button>
            </div>
            <!--end-->
           
            <!--Comment Section-->
           <div class="justify-center flex mt-3 ssm:px-2 vs:px-2 sm:px-2">
            <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm text-sm ssm:text-xs vs:text-xs lvs:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 ssm:w-full vs:w-full" placeholder = "Enter your post message here..."></textarea>
           </div>
           <!--end-->

           <!--Post button-->
           <div class="justify-center flex mt-3 pb-3 ssm:px-2 vs:px-2 sm:px-2">
            <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 ssm:w-full vs:w-full h-10">
                <p class="text-base ssm:text-sm vs:text-sm sm:text-sm font-bold leading-normal text-center text-white">Post</p>
            </button>
           </div>
           <!--end-->
</template>

<script>
export default {
    props:['profile'],
    data (){
        return{
            isOpen:false
        }
    }
}
</script>