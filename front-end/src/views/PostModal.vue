<template>
    <!-- Post Modal-->
    <div v-on:click.self="close" class="bg-black font-nunito bg-opacity-25 fixed inset-0 flex ssm:px-2 vs:px-2 sm:px-2 justify-center items-center">
     <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 ssm:w-full vs:w-full sm:w-full">
        <div class="flex flex-col  mt-4">

            <!--Create Post section-->
            <h1 class="items-center justify-center ml-24 ssm:ml-8 ssm:pl-8 vs:ml-6 pb-6 text-gray-900 leading-normal pl-20 text-2xl ssm:text-xl vs:text-xl font-bold text-center">
                Create Post
                <button @click.prevent="close" class="pl-14 ml-20 ssm:pl-4 ssm:ml-4 vs:pl-4 vs:ml-8 focus:outline-none text-sm ssm:text-xs vs:text-xs mb-1 leading-none text-indigo-900">
                Close
                </button>
              </h1>
            <!--end-->

            <!--Shopping Offer and Order Request Button-->
             <div class="flex flex-row items-center justify-around pb-2 space-x-2 ssm:space-x-1">
                <div @click=" isActive_function('btn1')" :class="{active: activeBtn === 0 }" class="inline-flex">
                    <button @click="toggleShopOfferbtn" class="text-base ssm:text-sm vs:text-sm font-nunito font-bold focus:outline-none leading-none text-center text-black uppercase">Shopping Offer</button>
                 </div>
                 <div @click=" isActive_function('btn2')" :class="{active: activeBtn === 'btn2' }" class="inline-flex">
                    <button @click="toggleOrderRequestbtn" class="text-base ssm:text-sm vs:text-sm font-nunito font-bold focus:outline-none leading-none text-center text-black uppercase">Order Request</button>
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
        isVisible: true,
        activeBtn:0,
        hidden: false,
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
         isActive_function(el){
        if(el=='btn1'){
        this.activeBtn= 0;
        }
        else {
        this.activeBtn= el;
        }
        },
    },
}
</script>

<style scoped>
.active {
  color:red;  
  border-bottom: solid red 5px;
}
.active button{
  color:red;
}
</style>