<template>
    <!--User Profile-->
    <div class="inline-flex space-x-2 items-center justify-start p-4 mt-2">
        <img class="w-14 h-full border rounded-full border-gray-200" src="img/yami.jpg" />
        <p class="text-base font-bold leading-none text-gray-900">Yami Sukehiro</p>
    </div>
    <!--end-->
    <!--Accepting Request Button
         <div class="inline-flex flex-col items-start justify-start pl-5 mt-2">
            <div class="inline-flex space-x-2 items-center justify-start px-2 py-1 border rounded-full border-gray-500">
                <img class="w-6 h-full rounded-full" src="img/checkcircle.svg"/>
                <p class="text-sm font-bold leading-none text-indigo-900">Accepting Requests</p>
                <button @click="isOpen=!isOpen" >
                    <img class="w-6 h-full rounded-full" src="img/arrowdown (1).svg"/>
                </button>
                
                <div class="w-full">
                      <div v-if="isOpen" class="shadow-xl fixed bg-white rounded-lg py-2 pl-2 pr-4 pt-2 ">
                        <router-link to="#"  class="flex flex-row gap-x-2 "><span class="material-icons text-gray-500">mode</span>Accepting Request</router-link>
                        <router-link to="#" class="flex flex-row gap-x-2"> <span class="material-icons text-gray-500">delete</span>Accepting Offers</router-link>
                    </div>
                    </div>
                    
            </div>
        </div>-->
    <!--end-->
    <form @submit.prevent='createOfferPost'>
        <!--Delivery information list-->
        <div class="flex flex-col mt-4 justify-center items-center">
            <div class="flex flex-row space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
                        delivery_dining
                    </span>
                    <input class="focus:outline-none flex vs:w-44 w-52  h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500 w-44" placeholder="Delivery Area" name="deliveryArea" v-model='form_data.deliveryArea'>
                </div>
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
                        shopping_cart
                    </span>
                    <input class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 pl-4 items-center py-2.5 pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Shopping Place" name="shoppingPlace" v-model='form_data.shoppingPlace'>
                </div>
            </div>
            <div class="flex flex-row pt-3 space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
                        alarm
                    </span>
                    <input class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Schedule" name="deliverySchedule" v-model='form_data.deliverySchedule'>
                </div>
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
                        directions_car
                    </span>
                    <input class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Transport Mode" name="transportMode" v-model='form_data.transportMode'>
                </div>
            </div>
            <div class="flex flex-row pt-3 space-x-4 w-full justify-center">
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
                        shopping_bag
                    </span>
                    <input class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Capacity" name="capacity" v-model='form_data.capacity'>
                </div>
                <div class="flex space-x-2">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
                        payments
                    </span>
                    <input class="w-44 focus:outline-none flex vs:w-44 w-52 h-11 py-2.5 pl-4 items-center pr-16 bg-gray-100 rounded-xl text-sm leading-none text-gray-500" placeholder="Payment Method" name="paymentMethod" v-model='form_data.paymentMethod'>
                </div>
            </div>
        </div>
        <!--end-->
        <!--Comment section-->
        <div class="justify-center flex mt-6">
            <textarea id="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm sm:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 vs:w-26.5" placeholder="Enter your post message here..." name="caption" v-model='form_data.caption'></textarea>
        </div>
        <!--end-->
        <!--Post button-->
        <div class="justify-center flex mt-6 pb-6">
            <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 vs:w-26.5 h-10">
                <p class="text-base font-bold leading-normal text-center text-white">Post</p>
            </button>
        </div>
        <!--end-->
    </form>
</template>
<script>

import api from '../api'

export default {
    data() {
        return {
            isOpen: false,
            form_data: {
                deliveryArea: '',
                shoppingPlace: '',
                deliverySchedule: '',
                transportMode: '',
                capacity: '',
                paymentMethod: '',
                caption: '',
                isLoggedIn: true,
                email: 'test@test.com',
                postIdentity: 'offer_post',
                postStatus: 'foo bar'     
            },
            errors: []
        }
    },
    methods: {
        createOfferPost() {
            console.log(this.form_data)
            api.post('api/post/offer', this.form_data)
                .then((response) => {
                    console.log(response.json())
                })
                .catch((errors) => {
                    console.log(errors)
                })
        }
    }
}
</script>