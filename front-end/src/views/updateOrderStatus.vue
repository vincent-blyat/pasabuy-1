<template>
        <div v-on:click.self="close3" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-25">
      <div class="z-10 inline-flex flex-col h-auto bg-white shadow rounded-xl " style="width: 400px;" >
      <div class="z-10 flex flex-row items-center justify-center w-full py-3">
       <h1 class="pl-20 pr-10 text-xl font-bold leading-normal text-gray-900">
         Update Order Request
       </h1>
       <button @click.prevent="close3" class="mt-2 mb-1 text-sm leading-none text-indigo-900 focus:outline-none">
         Close
         </button>
      </div>
      <hr>
      <div class="flex flex-col mt-4 mb-4 space-y-3">
        <div class="w-full ml-5">
          <label class="inline-flex items-center">
            <input type="radio" class="w-4 h-4 form-radio" name="accountType" value="personal">
            <span class="ml-5 ">Accepting Request</span>
          </label>
        </div>
        <div class="flex w-full py-2 ml-5 ">
          <label class="inline-flex items-center">
            <input type="radio" class="w-4 h-4 form-radio" name="accountType" value="personal">
            <span class="ml-5">No Longer Accepting Request</span>
          </label>
        </div>
        <div class="flex w-full ml-5">
          <label class="inline-flex items-center">
            <input type="radio" class="w-4 h-4 form-radio" name="accountType" value="personal">
            <span class="ml-5 ">Cancelled</span>
          </label>
        </div>
      </div>
      <hr>
      <div class="flex items-center justify-center mt-4 mb-4">
        <div class="inline-flex items-center justify-center px-4 py-2 bg-red-700 rounded-full" style="width: 360px; height: 40px;">
          <p class="text-base font-bold leading-normal text-center text-white">Update Status</p>
      </div>
      </div>
       </div>
     </div>
</template>

<script>
export default {
    data(){
        return {
        isVisible: true,
        }
    },
    
    methods: {
        close3(){
            this.$emit('closeModal3')
        },
    }
}
</script>