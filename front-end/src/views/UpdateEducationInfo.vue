<template>
 <div v-on:click.self="close" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
   <div class="inline-flex flex-col bg-white shadow rounded-xl h-auto w-538 ssm:w-full vs:w-full" >

       <div class="flex flex-row w-full justify-end se:space-x-11 ssm:space-x-8 vs:space-x-16 space-x-42 items-center py-4">
       <h1 class="text-gray-900  leading-normal ssm:text-sm vs:text-base lvs:text-xl text-xl font-bold">
         Edit Interest
       </h1>
       <button @click.prevent="close" class="mt-2 pr-4 focus:outline-none text-sm ssm:text-xs vs:text-xs lvs:text-sm mb-1 ssm:mb-2 leading-none text-indigo-900">
         Close
         </button>
      </div>
      
        <div class="flex flex-col px-4">

        <div class="flex flex-col pb-8">
         <div class="flex pl-4 pb-1.5">
            <p class="text-sm font-bold tracking-wide leading-none text-gray-500 uppercase">School</p>
         </div>
         <div class="flex">
          <input class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-black py-5 pl-4 bg-gray-100 rounded-xl vs:h-10 ssm:h-8 h-12 w-full vs:w-full ssm:w-full" v-model="schoolStudiedAt" disabled>
         </div>
         <div class="flex mt-3 space-x-4 flex-row px-4">
          <div class="flex space-x-2">
          <input type="radio" class="form-radio" name="anythinghaha" value="school">
          <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Current</p>
          </div>
          <div class="flex space-x-2">
          <input type="radio" class="form-radio" name="anythinghaha" value="school">
          <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Previous</p>
          </div>
         </div>
        </div>

        <div class="flex flex-col pb-6">
         <div class="flex pl-4 pb-1.5">
            <p class="text-sm font-bold tracking-wide leading-none text-gray-500 uppercase">School</p>
         </div>
         <div class="flex">
          <input class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-black py-5 pl-4 bg-gray-100 rounded-xl vs:h-10 ssm:h-8 h-12 w-full vs:w-full ssm:w-full" v-model="schoolWentTo" disabled>
         </div>
         <div class="flex mt-3 space-x-4 flex-row px-4">
          <div class="flex space-x-2">
          <input type="radio" class="form-radio" name="anythinghaha" value="school">
          <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Current</p>
          </div>
          <div class="flex space-x-2">
          <input type="radio" class="form-radio" name="anythinghaha" value="school">
          <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Previous</p>
          </div>
         </div>
        </div>

        <div class="flex space-x-2 items-center  px-3 pb-4">
          <button>
         <span class="text-indigo-900 material-icons">
          add_circle
          </span>
          </button>
         <p class="text-base font-bold leading-loose text-center text-indigo-900">Add School</p>
        </div>

                
        <div class="flex space-x-4 pb-4 flex-row w-full justify-center items-center">
            <button class="inline-flex items-center justify-center w-full px-4 py-0.5 border-2 rounded-full border-gray-900">
            <p class="text-base font-bold leading-normal text-center text-gray-900">Cancel</p>
            </button>
            <button class="inline-flex items-center justify-center w-full px-4 py-1.5 bg-red-700 rounded-full">
            <p class="text-base font-bold leading-normal text-center text-white">Save</p>
            </button>
        </div>
        
        </div>
        
   </div>
   </div>
</template>

<script>

export default {

    data(){
      return{
          schoolStudiedAt: 'Bicol University',
          schoolWentTo: 'Banquerohan National High School',
      }
    },
    methods: {
        close(){
            this.$emit('closeEditEducationModal')
        },
  }
}
</script>

<style scoped>
</style>