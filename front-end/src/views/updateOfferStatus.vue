<template>
        <div v-on:click.self="close2" class="bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center">
      <div class="inline-flex flex-col bg-white shadow rounded-xl h-auto " style="width: 400px;" >
      <div class="flex flex-row w-full justify-center items-center py-3">
       <h1 class="text-gray-900 pr-10 pl-20 leading-normal text-xl font-bold">
         Update Shopping Offer
       </h1>
       <button @click.prevent="close2" class=" mt-2 focus:outline-none text-sm mb-1 leading-none text-indigo-900">
         Close
         </button>
      </div>
      <hr>
      <div class="flex flex-col space-y-3 mt-4 mb-4">
        <div class="ml-5 w-full">
          <label class="inline-flex items-center">
            <input type="radio" class="form-radio w-4 h-4" name="accountType" value="personal">
            <span class="ml-5 ">Accepting Request</span>
          </label>
        </div>
        <div class="ml-5 flex w-full py-2 ">
          <label class="inline-flex items-center">
            <input type="radio" class="form-radio w-4 h-4" name="accountType" value="personal">
            <span class="ml-5">No Longer Accepting Request</span>
          </label>
        </div>
        <div class="ml-5 flex w-full">
          <label class="inline-flex items-center">
            <input type="radio" class="form-radio w-4 h-4" name="accountType" value="personal">
            <span class="ml-5 ">Cancelled</span>
          </label>
        </div>
      </div>
      <hr>
      <div class="flex mt-4 mb-4 items-center justify-center">
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
        close2(){
            this.$emit('closeModal2')
        },
    }
}
</script>