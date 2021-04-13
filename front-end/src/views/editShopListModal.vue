<template>
    <!-- Post Modal-->
    <div v-if = "edit">
        <div v-on:click.self="close" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-25">
            <div class="p-3 bg-white rounded-lg w-96">
                <h1 class="items-center justify-center pb-3 pl-24 text-xl font-bold text-center">
                    Shopping Lists
                    <button @click.prevent="close" class="ml-16 text-sm font-bold focus:outline-none text-waterloo">
                        Close
                    </button>
                </h1>
                <hr>

                <div class="items-center justify-center p-2">
                    <p class="pb-3 text-sm">
                        {{shoppingListname}}
                        <a href="#" class="text-sm font-bold text-waterloo pl-52">
                            Edit
                        </a>
                    </p>
     
                <div class="flex flex-wrap w-full py-5 overflow-hidden bg-gray-100 rounded-lg editable focus:outline-red-700" contenteditable="true">        
                    <ul id="shoplist" class="pl-3 text-xs font-semibold leading-relaxed list-disc list-inside ">
                        <li v-for="shopList in shopList" :key="shopList.items">{{shopList.items}}</li>
                    </ul>
                </div>

                <div class="pt-3">
                    <button class="w-full h-8 px-5 text-base text-white transition-colors duration-150 bg-red-600 text-bold rounded-3xl focus:shadow-outline hover:bg-red-600">
                        <a href="#">
                            Save changes
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--end of Post Modal-->
</template>

<script>
export default {
    el:'#shoplist',
    data(){
        return {
        edit: true,
        shoppingListname:'Shopping List 1',
        shopList: [
      { items: 'Pork' },
      { items: 'Beef' },
      { items: 'Pork' },
      { items: 'Beef' },
      { items: 'Pork' },
      { items: 'Beef' },
    ],
        }
        
    },
    methods: {
        close(){
            this.$emit('closeModal')
        },
    },
}
</script>