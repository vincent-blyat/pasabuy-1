<template>
<div class="bg-gray-100  pt-6 font-nunito">
  <!--profile review-->
  <div class="flex h-auto ssm:items-center vs:items-center sm:items-center md:items-center ssm:flex-col ssm:h-auto sm:flex-col vs:flex-col md:flex-col md:h-auto vs:h-auto sm:h-auto ssm:pb-6 vs:pb-6 sm:pb-6 md:pb-6 w-full justify-center  ssm:space-x-0 vs:space-x-0 sm:space-x-0 space-x-10">

  <!--Rating-->
    <div class="flex flex-col ssm:h-auto vs:h-auto sm:h-auto md:h-auto h-auto">
    <div class="flex ">
      <div class="flex ssm:px-2 flex-col space-x-4 items-center justify-center py-6 ssm:py-2 vs:py-4 bg-white shadow rounded-xl h-auto w-74 ssm:w-full">     
        <div class="inline-flex mb-3">
          <p class="font-bold leading-10 text-gray-900 ssm:text-2xl vs:text-3xl lvs:text-4xl text-4xl">{{rating}} / {{max_rate}}</p>
        </div>
        <div class="inline-flex items-start space-x-1 justify-start px-4 py-2 ssm:py-1 vs:py-1 lvs:py-2 bg-gray-100 rounded-full">
          <span class="text-yellow-500 align-middle material-icons md-24">
                  star_rate
                </span>
          <span class="text-yellow-500 align-middle material-icons md-24">
                  star_rate
                </span>
          <span class=" text-yellow-500 align-middle material-icons md-24">
                  star_rate
                </span>
          <span class=" text-yellow-500 align-middle material-icons md-24">
                  star_rate
                </span>
          <span class="text-yellow-500 align-middle material-icons md-24">
                  star_rate
                </span>
        </div>
        <div class="flex py-3">
          <p class="text-xs leading-none text-gray-900">based on {{pasabuyers}} Pasabuyers</p>
        </div>
        <div class="flex flex-col ">
          <div class="inline-flex flex-row space-x-2">
            <div>
              <p class="text-sm leading-normal text-gray-900">5 stars</p>
            </div>
            <div class="inline-flex py-2">
                <div class="w-44 h-2  right-0 top-0 bg-gray-200 rounded-full">
                  <div class="w-40 h-2 left-0 top-0 bg-red-700 rounded-full"></div>
            </div>
            </div>
          </div>
          <div class="inline-flex flex-row space-x-2">
            <div>
              <p class="text-sm leading-normal text-gray-900">4 stars</p>
            </div>
            <div class="inline-flex py-2">
                <div class="w-44 h-2  right-0 top-0 bg-gray-200 rounded-full">
                  <div class="w-2.5 h-2 bg-red-700 rounded-full"></div>
            </div>
            </div>
          </div>
          <div class="inline-flex flex-row space-x-2">
            <div>
              <p class="text-sm leading-normal text-gray-900">3 stars</p>
            </div>
            <div class="inline-flex py-2">
                <div class="w-44 h-2  right-0 top-0 bg-gray-200 rounded-full">
                  <div class="w-0 h-2 left-0 top-0 bg-red-700 rounded-full"></div>
            </div>
            </div>
          </div>
          <div class="inline-flex flex-row space-x-2">
            <div>
              <p class="text-sm leading-normal text-gray-900">2 stars</p>
            </div>
            <div class="inline-flex py-2">
                <div class="w-44 h-2  right-0 top-0 bg-gray-200 rounded-full">
                  <div class="w-0 h-2 left-0 top-0 bg-red-700 rounded-full"></div>
            </div>
            </div>
          </div>
          <div class="inline-flex flex-row space-x-2">
            <div>
              <p class="text-sm leading-normal text-gray-900">1 stars</p>
            </div>
            <div class="inline-flex py-2">
                <div class="w-44 h-2  right-0 top-0 bg-gray-200 rounded-full">
                  <div class="w-0 h-2 left-0 top-0 bg-red-700 rounded-full"></div>
            </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!--end of rating code-->

<!--user post comments about reviews-->
  <div class="flex flex-col ssm:mt-6 ssm:w-full ssm:h-auto vs:mt-6 sm:mt-6 sm:h-auto md:mt-6 md:h-auto h-auto vs:w-full min-w-0 px-2 sm:w-full vs:h-auto">

    <!--Modal-->
   <PostReviewModal v-if="postModalVisible" @closeReviewModal="listener"/>
   <!--end--> 
     <div class="flex pb-6">
    <div class="inline-flex space-x-4 ssm:space-x-2 items-center vs:w-full sm:w-full ssm:w-full ssm:p-2 justify-center vs:p-4 p-6 bg-white shadow rounded-xl">
        <img class="w-14 h-14 ssm:w-10 ssm:h-10 rounded-full" src="img/asta.jpeg"/>
        <button @click="togglePostModal" class="flex items-center focus:outline-none justify-start lvs:text-sm vs:text-xs ssm:text-xs text-base outline-none leading-none text-gray-500 py-5 pl-6 bg-gray-100 rounded-full vs:h-12 ssm:h-10 h-14 w-448 vs:w-full ssm:w-full">
        Post a review for Yami...</button>
    </div>
  </div>

    <!--post 1-->
    <div class="flex pb-6 ssm:w-full vs:w-full sm:w-full">
      <div class="inline-flex items-start justify-start p-6 vs:p-4 bg-white shadow rounded-xl h-auto w-608 ssm:w-full vs:w-full sm:w-full ">     
        <div class="flex flex-col ">
          <div class="flex flex-grow space-x-4 flex-wrap flex-row w-full justify-between">
            <div class="flex">
              <img class="w-14 h-14 ssm:w-10 ssm:h-10 rounded-full" src="img/asta.jpeg"/>
              <div class="flex flex-col items-start px-4">
                <div class="space-x-8">
                  <span class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">{{users.user1}}</span>
                  <!--check icon here-->
                </div>
                <div class="flex-row ssm:flex-col ssm:space-x-0 ssm:py-0 ssm:space-y-1 flex py-2 space-x-4">
                  <div class="inline-flex items-start space-x-1 justify-start">
                      <div class="inline-flex items-start space-x-1 justify-start">
                        <span class="text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class="text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class=" text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class=" text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class="text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                  </div>
                   </div>
                   <div class="inline-flex">
                    <span class="text-sm ssm:text-xs vs:text-xs lvs:text-sm mt-0.5leading-none text-gray-500">{{datePosted.date1}}</span>
                   </div>
                </div>
              </div>
            </div>
        </div>
        <div class="flex items-start justify-start px-6 py-4  bg-gray-100 rounded-xl h-auto mt-3 w-99 ssm:w-full vs:w-full sm:w-full">
          <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-normal text-gray-900">{{comments.comment1}}</p>
      </div>
      </div>    
    </div>
  </div>
  <!--end-->

  <!--post 2-->
  <div class="flex pb-6 ssm:w-full vs:w-full sm:w-full">
    <div class="inline-flex space-x-4 items-start justify-start p-6 vs:p-4 bg-white shadow rounded-xl h-auto w-608 vs:w-full sm:w-full">     
      <div class="flex flex-col">
        <div class="flex flex-grow space-x-4 flex-wrap flex-row w-full justify-between">
          <div class="flex">
            <img class="w-14 h-14 ssm:w-10 ssm:h-10 rounded-full" src="img/julius.png"/>
            <div class="flex flex-col items-start px-4">
              <div class="space-x-8">
                <span class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">{{users.user2}}</span>
                <!--check icon here-->
              </div>
              <div class="flex-row flex py-2 space-x-4 ssm:flex-col ssm:space-x-0 ssm:py-0 ssm:space-y-1">
                  <div class="inline-flex items-start space-x-1 justify-start">
                   <span class="text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class="text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class=" text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class=" text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class="text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                   </div>
                   <div class="inline-flex">
                    <span class="text-sm ssm:text-xs vs:text-xs lvs:text-sm mt-0.5leading-none text-gray-500">{{datePosted.date2}}</span>
                   </div>
                </div>
            </div>
          </div>
      </div>
      <div class="flex items-start justify-start px-6 py-4  ssm:w-full bg-gray-100 rounded-xl h-auto mt-3 w-99 vs:w-full sm:w-full">
        <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-normal text-gray-900">{{comments.comment1}}</p>
    </div>
    </div>    
  </div>
</div>
<!--end-->

<!--post 3-->
<div class="flex pb-6 ssm:w-full vs:w-full sm:w-full">
  <div class="inline-flex space-x-4 items-start justify-start p-6 vs:p-4 bg-white shadow rounded-xl h-auto w-608 vs:w-full sm:w-full">     
    <div class="flex flex-col">
      <div class="flex flex-grow space-x-4 flex-wrap flex-row w-full justify-between">
        <div class="flex">
          <img class="w-14 h-14 ssm:w-10 ssm:h-10 rounded-full" src="img/baha.jpg"/>
          <div class="flex flex-col items-start px-4">
            <div class="space-x-8">
              <span class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">{{users.user3}}</span>
              <!--check icon here-->
            </div>
           <div class="flex-row flex py-2 space-x-4 ssm:flex-col ssm:space-x-0 ssm:py-0 ssm:space-y-1">
              <div class="inline-flex items-start space-x-1 justify-start">
                <span class="text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class="text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class=" text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class=" text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
                <span class="text-yellow-500 align-middle material-icons md-18">
                  star_rate
                </span>
              </div>
              <div class="inline-flex">
                <span class="text-sm ssm:text-xs vs:text-xs lvs:text-sm mt-0.5leading-none text-gray-500">{{datePosted.date3}}</span>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="flex items-start justify-start px-6 py-4 ssm:w-full bg-gray-100 rounded-xl h-auto mt-3 w-99 vs:w-full sm:w-full">
      <p class="text-sm ssm:text-xs vs:text-xs lvs:text-sm leading-normal text-gray-900">{{comments.comment1}}</p>
  </div>
  </div>    
</div>
</div>
<!--end-->

</div>
<!--end of user post comments about reviews-->
</div>
</div>
<!--end of reviews-->
</template>

<script>
import PostReviewModal from './postReviewModal'
export default {
  data(){
    return{
      pasabuyers: '20',
      rating: '4.9',
      max_rate: '5',
      postModalVisible: false,

      datePosted:{
        date1: '4 hours ago',
        date2: 'February 16,2021',
        date3: 'February 12, 2021'
      },
      comments:{
        comment1: 'My items arrived complete and in safe condition. The delivery is also fast, got all the things I needed just before our party starts. Definitely recommended!'
      },
      users:{
        user1: 'Asta Staria',
        user2: 'Julius Novachrono',
        user3: 'Baha-haha-haha'
      },
      
    }
    
  },
   components: {
    PostReviewModal
  },
  methods:{
    togglePostModal(){
      this.postModalVisible = !this.postModalVisible
    },
    listener(){
      this.postModalVisible = false;
  }
}

}
</script>

<style scoped>

</style>