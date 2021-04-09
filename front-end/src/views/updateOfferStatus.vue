<template>
        <div v-on:click.self="close2" class="bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
      <div class="inline-flex flex-col bg-white shadow rounded-xl h-auto w-95 ssm:w-full vs:w-full" >
      <div class="flex flex-row w-full justify-center items-center py-3">
       <h1 class="text-gray-900 pr-10 se:pr-6 se:pl-14 ssm:pr-4 ssm:pl-14 pl-20 leading-normal ssm:text-sm vs:text-base lvs:text-xl text-xl font-bold">
         Update Shopping Offer
       </h1>
       <button @click.prevent="close2" class=" mt-2 focus:outline-none text-sm ssm:text-xs vs:text-xs lvs:text-sm mb-1 ssm:mb-2 leading-none text-indigo-900">
         Close
         </button>
      </div>
      <hr>
      <div class="flex flex-col space-y-3 mt-4 mb-4">
        <div class="ml-5 flex w-full">
          <label class="inline-flex items-center">
            <input type="radio" class="form-radio w-4 h-4 vs:w-3 vs:h-3 lvs:w-4 lvs:h-4" name="accountType" value="personal">
            <span class="ml-5 text-base ssm:text-xs vs:text-sm lvs:text-base">Accepting Request</span>
          </label>
        </div>
        <div class="ml-5 flex w-full">
          <label class="inline-flex items-center">
            <input type="radio" class="form-radio w-4 h-4 vs:w-3 vs:h-3 lvs:w-4 lvs:h-4" name="accountType" value="personal">
            <span class="ml-5 text-base ssm:text-xs vs:text-sm lvs:text-base">No Longer Accepting Request</span>
          </label>
        </div>
        <div class="ml-5 flex w-full">
          <label class="inline-flex items-center">
            <input type="radio" class="form-radio w-4 h-4 vs:w-3 vs:h-3 lvs:w-4 lvs:h-4" name="accountType" value="personal">
            <span class="ml-5 text-base ssm:text-xs vs:text-sm lvs:text-base">Cancelled</span>
          </label>
        </div>
      </div>
      <hr>
      <div class="flex mt-4 mb-4 items-center justify-center ssm:px-2 vs:px-2">
        <div class="inline-flex items-center justify-center px-4 py-2 bg-red-700 rounded-full ssm:h-8 h-10 w-88 ssm:w-full vs:w-full">
          <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-normal text-center text-white">Update Status</p>
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