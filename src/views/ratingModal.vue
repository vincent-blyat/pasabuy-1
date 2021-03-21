<template lang="">
    <div v-if = "isVisible">
    <div v-on:click.self="close" class="bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center">
    <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto" style="width: 550px;">
        <div class="flex flex-col  mt-4">
            <!--Review section-->
            <h1 class="items-center justify-center ml-24 pb-6 text-gray-900 leading-normal pl-24 text-2xl font-bold text-center">
                Write a review
                <button @click.prevent="close" class="pl-14 ml-20 focus:outline-none text-sm mb-1 leading-none text-indigo-900">
                Close
                </button>
              </h1>
            <!--end-->
            <div class="inline-flex space-x-2  p-5">
            <h1>Shopper: </h1>





        </div>
    </div>
    </div>
    </div>
</template>

<style>

</style>

<script>
export default {
    
}
</script>