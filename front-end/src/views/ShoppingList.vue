<template>
   <div v-if = "isVisible">
      <div v-on:click.self="closeListModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-25">
       <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-75 vs:w-96.7">
          <div class="flex flex-col">
  
              <!--Create Post section-->
              <h1 class="justify-center p-4 text-xl font-bold leading-normal text-center text-white rounded-t-xl bg-red-buttons vs:ml-0 font-nunito">
                  Shopping List 1
                  <button @click.prevent="closeListModal" class="mb-1 ml-20 text-sm leading-none text-white vs:ml-10 focus:outline-none">
                  Close
                  </button>
                </h1>
              <!--end-->
               <hr>

                <!--User Profile-->
                <div class="inline-flex items-center justify-start mt-1 space-x-2">
                    <ul id="shop-list" class="text-base leading-relaxed text-black list-disc list-inside pl-9">
                      <li v-for="item in items" :key="item.list" class="mb-1" >{{item.list}}</li>
                    </ul>
                </div>
                <!--end-->
          </div>
       </div>
      </div>
   </div>

 
    <!--end-->
</template>

<script>
export default {
    el:'#shop-list',
    data() {
    return {
     isVisible: true,
        hidden: false,

      profile:{
              firstname:'Wheein',
              lastname:'Jung',
          },

      activeDeliveries:{
        transNo: '61913174'
      },

      activeOrders:{
        transactNo: '1267643764'
      },
      
      items: [
      { list: 'Pork' },
      { list: 'Beef' },
      { list: 'Pork' },
      { list: 'Beef' },
      { list: 'Pork' },
      { list: 'Beef' },
    ],
    }
    },
      
    methods: {
        closeListModal(){
            this.$emit('closeListModal')
        },
    },
}
</script>