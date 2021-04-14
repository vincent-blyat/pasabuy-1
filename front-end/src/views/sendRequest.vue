<template>
    <!-- Post Modal-->
    <div v-on:click.self="closeSendRequest" class="fixed inset-0 z-40 flex items-center justify-center pt-20 bg-black bg-opacity-25 font-nunito">
     <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 vs:w-96.7">
        <div class="flex flex-col">

            <!--Create Post section-->
            <h1 class="relative items-center justify-center py-3 pl-4 text-xl font-bold leading-normal text-center text-gray-900 vs:ml-14">
                Send Request to Mark Aral
                <button @click.prevent="closeSendRequest" class="absolute mb-1 ml-1 text-sm font-bold leading-none text-indigo-900 right-6 top-5 vs:ml-8 focus:outline-none">
                Close
                </button>
              </h1>
              <hr>
              <span class="pt-3 pl-5 text-base">Order Details</span>
              <div class="flex flex-col items-center justify-center mt-4">
             <div class="flex flex-row justify-center w-full space-x-4">
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

             <div class="flex flex-row justify-center w-full pt-3 space-x-4">
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
            <div class="flex items-center justify-center mt-4">
                <button class="inline-flex items-center justify-center p-4 bg-gray-100 rounded-full w-31.75 vs:w-26.5 h-11">
                    <div class="flex items-center space-x-2">
                        <img class="w-6 h-full rounded-lg" src="img/add.svg"/>
                        <p class="text-sm font-extrabold leading-none text-gray-900">Select Shopping List</p>
                    </div>
                </button>
            </div>
            <!--end-->
           
            <!--Comment Section-->
           <div class="flex justify-center mt-6">
            <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm sm:text-sm rounded-2xl outline-none h-16 w-31.75 vs:w-26.5 text-sm" placeholder = "Enter your post message here..."></textarea>
           </div>
           <!--end-->

           <!--Post button-->
           <div class="flex justify-center pb-6 mt-6">
            <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 vs:w-26.5 h-8">
                <p class="text-base font-bold leading-normal text-center text-white">Post</p>
            </button>
           </div>
        </div>
     </div>
    </div>
    
           <!--end-->
</template>
<script>
export default {
    data (){
        return{
            isOpen:false
        }
    },
    methods:{
        closeSendRequest(){
            this.$emit('closeSendRequest')
        },
    }
}
</script>