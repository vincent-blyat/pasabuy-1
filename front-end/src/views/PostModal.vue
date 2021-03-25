<template>
    <!-- Post Modal-->
    <div v-on:click.self="close" class="bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center">
     <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto" style="width: 550px;">
        <div class="flex flex-col  mt-4">

            <!--Create Post section-->
            <h1 class="items-center justify-center ml-24 pb-6 text-gray-900 leading-normal pl-24 text-2xl font-bold text-center">
                Create Post
                <button @click.prevent="close" class="pl-14 ml-20 focus:outline-none text-sm mb-1 leading-none text-indigo-900">
                Close
                </button>
              </h1>
            <!--end-->

            <!--Shopping Offer and Order Request Button-->
             <div class="flex flex-row items-center justify-around pb-4 space-x-2">
                <div class="inline-flex">
                    <button @click="toggleShopOfferbtn" class="text-base font-bold focus:outline-none leading-none text-center text-black uppercase">Shopping Offer</button>
                 </div>
                 <div @click="toggleOrderRequestbtn" class="inline-flex">
                    <button class="text-base font-bold focus:outline-none leading-none text-center text-black uppercase">Order Request</button>
                 </div>
             </div>
             <hr>
             <!--end-->
            <component :is="component"/>   
      </div>
     </div>
    </div>
    <!--end of Post Modal-->
</template>

<script>
import shopOfferPost from  './shopOfferPost'
import orderRequestPost from './orderRequestPost'
export default {
    components: {
        shopOfferPost,
        orderRequestPost
    },
    data(){
        return {
        component: "shopOfferPost",
        component2: "orderRequestPost",
        isVisible: true
        }
    },
    methods: {
        toggleShopOfferbtn(){
            if(this.component != shopOfferPost)
            this.component = shopOfferPost;
        },
        toggleOrderRequestbtn(){
            if(this.component != orderRequestPost)
            this.component = orderRequestPost;
        },
        close(){
            this.$emit('closeModal')
        },
    },
}
</script>