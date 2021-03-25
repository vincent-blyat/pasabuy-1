<template>
<div v-on:click.self="close3" class="bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center">
       <div class="inline-flex flex-col bg-white shadow rounded-xl h-56 " style="width: 400px;" >
       <div class="flex flex-row w-full justify-around py-2">
        <h1 class="text-gray-900 pl-32 pr-8 leading-normal text-2xl font-bold">
          Followers
        </h1>
        <button @click.prevent="close3" class=" mt-2 focus:outline-none text-sm mb-1 leading-none text-indigo-900">
          Close
          </button>
       </div>
       <hr>
        <div class="flex-auto overflow-y-scroll">
          <div class="flex flex-col items-center p-4 space-y-4">
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 rounded-full" src="img/yami.jpg"/>
              <p class="text-base font-bold leading-none pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 rounded-full" src="img/yami.jpg"/>
              <p class="text-base font-bold leading-none pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 rounded-full" src="img/yami.jpg"/>
              <p class="text-base font-bold leading-none pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 rounded-full" src="img/yami.jpg"/>
              <p class="text-base font-bold leading-none pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 rounded-full" src="img/yami.jpg"/>
              <p class="text-base font-bold leading-none pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 rounded-full" src="img/yami.jpg"/>
              <p class="text-base font-bold leading-none pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 rounded-full" src="img/yami.jpg"/>
              <p class="text-base font-bold leading-none pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 rounded-full" src="img/yami.jpg"/>
              <p class="text-base font-bold leading-none pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 rounded-full" src="img/yami.jpg"/>
              <p class="text-base font-bold leading-none pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons pt-3 md-18">
                  verified
                </span>
            </div>
          </div>
          
          </div>
          <!-- Your content -->
        </div>
      </div>
</template>
<style>

</style>

<script>
export default {
    data(){
        return{
        isVisible: false,
        user_info:{
        firstname: 'Yami',
        lastname: 'Sukehiro'
        },
        }
    },
    methods:{
       close3(){
            this.$emit('closeModal3')
        },
    },
}
</script>