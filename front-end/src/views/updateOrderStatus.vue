<template>
        <div v-on:click.self="close3" class="bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
      <div class="inline-flex flex-col bg-white shadow rounded-xl h-auto w-95 ssm:w-full vs:w-full" >
      <div class="flex flex-row w-full justify-center items-center py-3">
       <h1 class="text-gray-900 pr-10 pl-20 ssm:pr-4 se:pr-6 se:pl-14 ssm:pl-14 ssm:text-sm leading-normal vs:text-base lvs:text-xl text-xl font-bold">
         Update Order Request
       </h1>
       <button @click.prevent="close3" class=" mt-2 focus:outline-none text-sm ssm:text-xs ssm:mb-2 vs:text-xs lvs:text-sm mb-1 leading-none text-indigo-900">
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
        <div class="ml-5 flex w-full vs:py-0 py-2">
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
        <div class="inline-flex items-center justify-center px-4 py-2 bg-red-700 rounded-full w-88 ssm:h-8 ssm:w-full vs:w-full">
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
        close3(){
            this.$emit('closeModal3')
        },
    }
}
</script>