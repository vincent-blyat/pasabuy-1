<template>
      <div v-on:click.self="close1" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 sm:px-2 vs:px-2">
       <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 ssm:w-full vs:w-full sm:w-full">
          <div class="flex flex-col  mt-4">
                <!--Create Post section-->
                <h1 class="items-center justify-center sm:ml-8 se:pl-14 se:ml-0 ssm:pl-11 ssm:ml-0 ssm:text-lg vs:ml-0 sm:ml-12 ml-12 pb-4 text-gray-900 leading-normal vs:pl-22 pl-24 text-2xl vs:text-xl font-bold text-center">
                    Edit Shopping Offer
                    <button @click.prevent="close1" class=" vs:ml-4 ml-20 sm:ml-14 se:ml-4 ssm:ml-3 ssm:text-xs focus:outline-none text-sm vs:text-xs mb-1 leading-none text-indigo-900">
                        Close
                    </button>
                </h1>
              <!--end-->
               <hr>

                <!--User Profile-->
                <div class="inline-flex space-x-2 items-center justify-start p-4">
                    <img class="w-14 h-full vs:w-12 ssm:w-10 border rounded-full border-gray-200" src="img/yami.jpg"/>
                    <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">{{btnText.posts.user.firstName}} {{btnText.posts.user.lastName}}</p>
                </div>
                <!--end-->

                <!--Delivery information list-->
                <!--<form @submit.prevent='createOfferPost'>-->
                <input v-model="shop_info.indexShoppingOfferPost" type="hidden" name="indexShoppingOfferPost">
                <input v-model="shop_info.postNumber" type="hidden" name="postNumber">
                <input v-model="shop_info.postStatus" type="hidden" name="postStatus">
                    <div class="flex flex-col mt-1  sm:px-2 ssm:px-2 vs:px-2 justify-center items-center">
                        <div class="flex flex-row ssm:flex-col ssm:space-x-0 se:space-x-1 ssm:space-y-2 space-x-4 w-full justify-center">
                            <div class="flex flex-row space-x-2 sm:w-full ">
                                <span class="rounded-lg mt-1.5 material-icons text-red-700">
                                delivery_dining
                                </span>
                                <div class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
                                    <div class="flex flex-col items-start justify-start h-full py-1.5 vs:w-full rounded-2xl">
                                        <p class="text-xs font-semibold leading-none text-gray-500">Delivery Area</p>
                                        <span>
                                            <input type="text" v-model="shop_info.deliveryArea" name="deliveryArea" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 sm:w-full vs:w-full h-auto">            
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex flex-row space-x-2 sm:w-full">
                                <div>
                                    <span class="rounded-lg mt-1.5 material-icons text-red-700">
                                    shopping_cart
                                    </span>
                                </div>
                                <div class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
                                    <div class="flex flex-col items-start justify-start h-full py-1.5 vs:w-full rounded-2xl">
                                        <p class="text-xs font-semibold leading-none text-gray-500">Shopping Place</p>
                                        <span>
                                            <input type="text" v-model="shop_info.shoppingPlace" name="shoppingPlace" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 sm:w-full vs:w-full h-auto">            
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row pt-3 ssm:pt-2 ssm:flex-col ssm:space-x-0 se:space-x-1 ssm:space-y-2 space-x-4 w-full justify-center">
                            <div class="flex flex-row space-x-2 sm:w-full">
                                <span class="rounded-lg mt-1.5 material-icons text-red-700">
                                alarm
                                </span>
                                <div class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
                                    <div class="flex flex-col items-start justify-start h-full py-1.5 vs:w-full rounded-2xl">
                                        <p class="text-xs font-semibold leading-none text-gray-500">Schedule</p>
                                        <span>
                                            <input v-model="shop_info.deliverySchedule" name="deliverySchedule" type="datetime-local" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 sm:w-full vs:w-full h-auto">            
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex flex-row space-x-2 sm:w-full ">
                                <span class="rounded-lg mt-1.5 material-icons text-red-700">
                                directions_car
                                </span>
                                <div class="inline-flex items-center justify-start w-52 sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full h-12 vs:h-12 px-4 vs:px-2  bg-gray-100 rounded-xl">
                                    <div class="inline-flex flex-col items-start justify-start w-full h-full py-1.5 rounded-2xl">
                                        <p class="text-xs font-semibold leading-none text-gray-500">Public Transit</p>
                                        <span>
                                            <input type="text" v-model="shop_info.transportMode" name="transportMode" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 sm:w-full vs:w-full h-auto">            
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row pt-3 ssm:pt-2 ssm:flex-col se:space-x-1 ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center">
                            <div class="flex flex-row space-x-2 sm:w-full">
                                <span class="rounded-lg mt-1.5 material-icons text-red-700">
                                shopping_bag
                                </span>
                                <div class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
                                    <div class="flex flex-col items-start justify-start w-full h-full py-1.5 rounded-2xl">
                                        <p class="text-xs font-semibold leading-none text-gray-500">Capacity</p>
                                        <span>
                                        <input type="text" v-model="shop_info.capacity" name="capacity" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 sm:w-full vs:w-full h-auto">            
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex flex-row space-x-2 sm:w-full">
                                <span class="rounded-lg mt-1.5 material-icons text-red-700">
                                payments
                                </span>
                                <div class="inline-flex items-center justify-start w-52 sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
                                    <div class="inline-flex flex-col items-start justify-start vs:w-full h-full py-1.5 rounded-2xl">
                                        <p class="text-xs font-semibold leading-none text-gray-500">Payment Method</p>
                                        <span>
                                            <input type="text" v-model="shop_info.paymentMethod" name="paymentMethod" class="ssm:text-xs block bg-gray-100 focus:outline-none text-sm leading-7 text-gray-900 w-44 sm:w-full vs:w-full h-auto">            
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!--end-->

                    <!--Comment section-->
                    <div class="justify-center flex  ssm:px-2 mt-3 sm:px-2 vs:px-2">
                        <textarea rows="3" v-model="shop_info.caption" name="caption" class="p-4 bg-gray-100 shadow-sm text-sm ssm:text-xs vs:text-xs lvs:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 ssm:w-full vs:w-full" placeholder = "Enter your post message here..."></textarea>
                    </div>
                    <!--end-->

                    <!--Post button-->
                    <div class="justify-center flex mt-3 pb-3 px-2 ">
                        <button @click="submit" class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 ssm:w-full ssm:h-8 vs:w-full h-10">
                            <p class="text-base ssm:text-sm vs:text-sm font-bold leading-normal text-center text-white">Post</p>
                        </button>
                    </div>
                    <!--end-->
            </div>
        </div>
  </div>
    <!--end-->
</template>

<script>
import api from '../api'
export default {    
    props: [
        'btnText'
    ],
    data(){
        return {
            isVisible: true,
            hidden: false,
            delivery_info:{
            delivery_area: 'Banquerohan',
            shopping_place: 'SM City Legazpi',
            schedule: 'Tomorrow at 2 PM',
            public_transit: 'Public Transit',
            capacity: '2 medium bags',
            payment_method: 'Payment First',
            comment: 'Hi! I’ll be going to SM City Legazpi tomorrow. If there’s anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request!',
            status: 'No Longer Accepting Requests'
            },
            shop_info: this.btnText,
            newshop_info:{
            indexShoppingOfferPost: '',
            postNumber: '',
            postStatus: '',
            deliveryArea: '',
            shoppingPlace: '',
            deliverySchedule: '',
            transportMode: '',
            capacity: '',
            paymentMethod: '',
            caption: ''
            }
            
        }
    },
    methods: {
        close1(){
            this.$emit('closeModal1')
        },
        // editOfferPost:function(){
        //     api.post("api/editshoppingoffers", this.shop_info)
        //     .then((response) => {
        //     console.log("offer",this.shoppingOffer_infos)
        //             console.log(response.data.message)
        //             window.location.reload();
        //         })
        //         .catch((errors) => {
        //             console.log(errors)
        //         })
        // },
        submit () {
            console.log(this.shop_info)
            api.post('/api/editshoppingoffers', this.shop_info).then((res)=>{
            //this.user = res.data;
            //VueSimpleAlert.alert(res.data.message,"Success","success")
            console.log(res.data.message)
            window.location.reload();
            }).catch((errors) => {
                console.log(errors)
            })
            //this.toggle=false;
        },


        // update: function() {
        //     var indexShoppingOfferPost = indexShoppingOfferPost;
        //     var postNumber = this.btnText.postNumber;
        //     var postStatus = this.btnText.postStatus;
        //     var deliveryArea = this.btnText.deliveryArea;
        //     var shoppingPlace = this.btnText.shoppingPlace;
        //     var deliverySchedule = this.btnText.deliverySchedule;
        //     var transportMode = this.btnText.transportMode;
        //     var capacity = this.btnText.capacity;
        //     var paymentMethod = this.btnText.paymentMethod;
        //     var caption = this.btnText.caption;

        //     api.post("api/shoppingoffers/update",{
        //         indexShoppingOfferPost: indexShoppingOfferPost,
        //         postNumber: postNumber,
        //         postStatus: postStatus,
        //         deliveryArea: deliveryArea,
        //         shoppingPlace: shoppingPlace,
        //         deliverySchedule: deliverySchedule,
        //         transportMode: transportMode,
        //         capacity: capacity,
        //         paymentMethod: paymentMethod,
        //         caption: caption
        //     });
        // },
    },
}
</script>