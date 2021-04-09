<template>
<div> 
<div v-on:click.self="close3" class="bg-black font-nunito bg-opacity-25 fixed flex w-full ssm:px-2 vs:px-2 inset-0 justify-center items-center">
       <div class="inline-flex flex-col bg-white shadow rounded-xl h-56 w-95 ssm:w-full vs:w-full" >
       <div class="flex flex-row justify-around py-2">
        <h1 class="text-gray-900 pl-32 ssm:pl-17 ssm:text-xl vs:pl-6.5 lvs:pl-32 ssm:pr-0 pr-8 leading-normal text-2xl font-bold">
          Followers
        </h1>
        <button @click.prevent="close3" class=" mt-2 focus:outline-none ssm:text-xs text-sm mb-1 leading-none text-indigo-900">
          Close
          </button>
       </div>
       <hr>
        <div class="flex-auto overflow-y-scroll">
          <div class="flex flex-col items-center p-4 space-y-4">
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full" src="img/yami.jpg"/>
              <p class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full" src="img/yami.jpg"/>
              <p class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full" src="img/yami.jpg"/>
              <p class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full" src="img/yami.jpg"/>
              <p class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full" src="img/yami.jpg"/>
              <p class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full" src="img/yami.jpg"/>
              <p class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full" src="img/yami.jpg"/>
              <p class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full" src="img/yami.jpg"/>
              <p class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18">
                  verified
                </span>
            </div>
            <div class="inline-flex flex-row w-full space-x-2">
              <img class="w-10 h-10 ssm:w-8 ssm:h-8 rounded-full" src="img/yami.jpg"/>
              <p class="text-base ssm:text-sm font-bold leading-none ssm:pt-2 pt-3 text-gray-900">{{user_info.firstname}} {{user_info.lastname}}</p>
              <span class="text-blue-900 align-middle material-icons ssm:pt-2 pt-3 md-18">
                  verified
                </span>
            </div>
          </div>
          
          </div>
          <!-- Your content -->
        </div>
      </div>
      </div>
</template>

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