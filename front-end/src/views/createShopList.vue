<template>
    <!-- CREATE NEW SHOPPING LIST-->
    <div v-if = "edit">
        <div v-on:click.self="closeshopList" class="fixed inset-0 z-40 flex items-center justify-center bg-black bg-opacity-25">
            <div class="p-3 bg-white rounded-lg w-96">
                <h1 class="items-center justify-center pb-3 pl-24 text-xl font-bold text-center">
                    Shopping Lists
                    <button @click.prevent="closeshopList" class="ml-16 text-sm font-bold focus:outline-none text-waterloo">
                        Close
                    </button>
                </h1>
                <hr>

                <div class="items-center justify-center p-2">
                    <input name="" id="" class="h-12 p-3 text-sm font-normal placeholder-gray-500 bg-gray-200 rounded-xl w-87 focus:outline-none" placeholder="Name your shopping list">

                    <textarea name="" id="" class="h-20 p-3 mt-4 text-sm placeholder-gray-500 bg-gray-200 w-87 rounded-xl" placeholder="Enter your shopping list here..."></textarea>

                <div class="pt-3">
                    <button class="w-full h-8 px-5 text-sm text-white transition-colors duration-150 bg-red-600 text-normal rounded-3xl focus:shadow-outline hover:bg-red-600">
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
    data(){
        return {
        edit: true,
        }
        
    },
    methods: {
        closeshopList(){
            this.$emit('closeshopListModal')
        },
    },
}
</script>