<template>
    <!-- Post Modal-->
    <div v-if = "edit">
        <div v-on:click.self="close" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-25">
            <div class="p-3 bg-white rounded-lg w-96">
                <h1 class="items-center justify-center pb-3 pl-24 text-xl font-bold text-center">
                    Shopping Lists
                    <button @click.prevent="close" class="ml-16 text-sm font-bold text-blue-800">
                        close
                    </button>
                </h1>
                <hr>

                <div class="items-center justify-center p-2">
                    <p class="pb-3">
                        Shopping List 1
                        <a href="#" class="pl-2 text-sm font-bold text-blue-800">
                            Edit
                        </a>
                    </p>
     
                <div class="flex flex-wrap w-full py-5 overflow-hidden bg-gray-200 rounded-lg editable" contenteditable="true">        
                    <ul class="pl-3 text-sm list-disc list-inside">
                        <li>Flour (1kg)</li>
                        <li>Vanilla extract (50ml)</li>
                        <li>brown sugar</li>
                        <li>cocoa powder</li>
                    </ul>
                </div>

                <div class="pt-3">
                    <button class="w-full h-10 px-5 py-2 text-base text-white transition-colors duration-150 bg-red-600 text-bold rounded-3xl focus:shadow-outline hover:bg-red-600">
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
        edit: true
        }
    },
    methods: {
        close(){
            this.$emit('closeModal')
        },
    },
}
</script>