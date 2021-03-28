<template class="font-nunito bg-gray-bgcolor">
<Navbar/>
    
   <!--START OF 'POST OFFER OR REQUEST' CODE-->
      <div class="flex flex-wrap pt-12 overflow-hidden bg-gray-bgcolor vs:flex-col">
    <div class="w-3/5 overflow-hidden vs:w-full">
      <div class="flex flex-wrap float-right px-0 pt-12 rounded-lg xl:w-3/4 vs:justify-center vs:w-full vs:mt-1">
         <div class="flex items-center justify-center px-8 py-2 pl-6 bg-white vs:w-full vs:justify-center rounded-xl vs:rounded-none">
            <button class="w-12 h-12 rounded-full border-1">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
            <div class="justify-center pl-3 "> 
              <!--modal-->
              <PostModal v-if="postModalVisible" @closeModal="listener"/>
                <button  @click="togglePostModal" class="float-right px-3 py-2 my-5 text-base text-left text-gray-500 placeholder-gray-500 bg-gray-200 border rounded-full appearance-none vs:my-3 h-14 vs:w-89 w-97 focus:outline-none focus:shadow-outline-blue focus:border-blue-300">Post a shopping offer or an order request
              </button>
            </div>
          </div>
        </div>

          <!--START OF 'FILTER' CODE-->
          <div class="flex flex-wrap w-3/4 px-0 pt-3 vs:pt-1 xl:float-right xl:block vs:w-full">
            <div class="w-full vs:py-0.5 py-1.5 text-sm font-normal rounded-lg vs:w-full">
              
              <button type="button" class="inline-flex justify-around px-3 py-1.5 text-sm font-bold text-black align-bottom bg-white border vs:shadow-none vs:bg-transparent vs:border-none border-gray-300 rounded-full shadow-sm w-44 hover:bg-gray-50 focus:outline-none" id="options-menu"  @click="filter =! filter">
               <span class="pr-1 mt-0.5 align-bottom material-icons">
                  view_stream
                </span>
                 <label for="" class="pt-1 cursor-pointer"> All Posts</label>
                <span class="pt-1 pl-2 text-gray-500 align-middle md-24 material-icons">
                  arrow_drop_down
                </span>
              </button>

              <!---------OPTIONS----------->
              <div class="absolute font-bold origin-top-right bg-white rounded-lg shadow-lg w-44 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu" >
                <div class="py-1" role="none" v-if="filter">
                  <a href="#" class="block px-4 py-2 text-xs font-light tracking-wider text-gray-500 font-raleway" aria-disabled role="menuitem">
                 <label for=""> POST TYPE</label>
                </a>

                  <a href="#" class="block px-4 py-2 text-sm text-gray-900" role="menuitem" >
                    <span class="pr-3 mt-0.5 align-bottom material-icons text-gray-600">
                  view_stream
                </span>
                 <label for="" class="cursor-pointer"> All Posts</label>
                </a>

                  <a href="#" class="block px-4 py-2 text-sm text-gray-900" role="menuitem"> <span class="pr-3 mt-0.5 align-bottom material-icons text-gray-600">
                  delivery_dining
                </span>Shopping Offer</a>

                  <a href="#" class="block px-4 py-2 text-sm hover:text-gray-900" role="menuitem"> <span class="pr-3 mt-0.5 align-bottom material-icons text-gray-600">
                  shopping_bag
                </span>Order Requests</a>
                </div>
              </div>
              <!---------END OF OPTIONS---------->

              <button type="button" class="inline-flex vs:float-right justify-around w-56 px-3 py-1.5 ml-6 text-sm font-bold text-black bg-white vs:shadow-none border vs:bg-transparent vs:border-none border-gray-300 rounded-full shadow-sm align-botto hover:bg-gray-50 focus:outline-none" id="options-menu"  @click="filter2 =! filter2">
               <span class="pr-2 align-bottom material-icons">
                  people_alt
                </span>
                 <label for="" class="pt-1 cursor-pointer"> Following Only</label>
                <span class="pt-1 pl-2 text-gray-500 align-middle md-24 material-icons">
                  arrow_drop_down
                </span>
              </button>

               <!---------OPTIONS----------->
              <div class="absolute font-bold origin-top-right bg-white rounded-lg shadow-lg vs:left-64 w-52 left-92 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                <div class="py-1" role="none" v-if="filter2">
                  <a href="#" class="block px-4 py-2 text-xs font-light tracking-wider text-gray-500 font-raleway" aria-disabled role="menuitem">
                 <label for=""> POST FROM</label></a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-600" role="menuitem"><span class="pr-2 align-bottom material-icons">
                  people_alt
                </span>
                 <label for="" class="pt-1 text-gray-900 cursor-pointer"> Following Only</label></a>
                 <a href="#" class="block px-4 py-2 text-sm text-gray-600" role="menuitem"><span class="pr-2 align-bottom material-icons">
                  near_me
                </span>
                 <label for="" class="pt-1 text-gray-900 cursor-pointer"> Nearby</label></a>
                </div>
              </div>
              <!---------END OF OPTIONS---------->

                <label for="" class="inline-flex pt-2.5 ml-4 hidden text-red-700 align-top md-18 text-sm">
                  <span class="material-icons">
                  place
                </span> {{ filterPost.filterAddress }}</label>
              
            </div>
          </div>
          
          <!--END-->

<!---------------------------START OF 'NO LONGER ACCEPTING OFFERS' POST------------------------------------------------>
          <div class="flex flex-wrap float-right w-3/4 pt-3 vs:pt-2 vs:w-full">
            <div class="flex items-center w-full p-5 bg-white rounded-t-lg px-7 vs:w-full vs:rounded-none">
              <button class="top-0 left-0 rounded-full mmd:w-12 mmd:h-12 border-1">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2">
                <h5 class="font-semibold mmd:text-base"> {{ deliveryPost.firstname }} {{ deliveryPost.lastname }}
                  <span class="inline-block text-blue-900 align-middle material-icons md-18">
                    verified
                  </span>
                  <label class="pl-1 font-normal text-gray-400 align-middle">posted a shopping offer</label>
                  <button @click="edit1=!edit1" class="absolute right-99">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl right-99 h-min w-30 ">
                        <!--EDIT POST--->
                      <EditShoppingOffer v-if="editShoppingOffer" @closeModal1="listener3"/>
                        <button  @click="toggleEditShoppingOffer" class="flex flex-row gap-x-2 focus:outline-none">
                          <span class="font-medium text-gray-500 material-icons">
                            mode
                          </span>
                          Edit Post
                        </button>

                         <!-----UPDATE STATUS------>
                      <UpdateOrderStatus v-if="updateOrderStatus" @closeModal3="listener4"/>
                        <button  @click="toggleUpdateOrderStatus" class="flex flex-row font-normal focus:outline-none gap-x-2">
                          <span class="font-normal text-gray-500 material-icons">
                            autorenew
                          </span>
                          Update Status
                        </button>
                        <!---END-->

                      <router-link to="#" class="flex flex-row gap-x-2"> 
                        <span class="text-gray-500 material-icons">delete</span>Delete</router-link>
                    </div>
                    </div>
                 </h5>
                    <p class="text-sm font-normal text-gray-400">
                      <span>{{ deliveryPost.time }}</span>
                    </p>
                  </div>
              </div>

            <!--NO LONGER ACCEPTING REQUESTS TEXT-->
            <div class="flex items-center w-full bg-white px-7">
              <div class="p-1 px-2 text-sm font-semibold bg-gray-200 rounded-full text-red-danger">
                <span class="inline-block align-middle material-icons">
                  remove_circle_outline
                  </span>
                  <label class="pl-1 align-bottom">{{ deliveryPost.status }}</label> 
              </div>
            </div>

            <!--DETAILS-->
            <div class="flex w-full p-3 bg-white vs:leading-relaxed px-7 gap-y-4">
              <div class="flex flex-wrap w-full overflow-hidden">
                <!--AREA-->
                <div class="w-2/4 overflow-hidden vs:w-full">
                  <span class="items-center text-red-700 material-icons">
                    delivery_dining
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm font-normal text-gray-800 align-top"> Delivering to {{ deliveryPost.deliveryPlace }}</label> 
                </div>
                
                <!--SHOPPING LOCATION-->
                <div class="w-1/2 pl-3 overflow-hidden vs:pl-0 vs:w-full">
                  <span class="text-red-700 material-icons vs:pl-0">
                    shopping_cart
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">{{ deliveryPost.shoppingPlace }}</label>
                </div>
              
                <!--TIME-->
                <div class="w-1/2 overflow-hidden vs:w-full">
                  <span class="text-red-700 material-icons ">
                    watch_later  
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">{{ deliveryPost.schedule }}</label>
                </div>
              
                <!--TRANSPO-->
                <div class="w-1/2 overflow-hidden vs:w-full">
                  <span class="pl-3 text-red-700 material-icons vs:pl-0">
                    directions_car_filled
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">{{ deliveryPost.transportation }}</label>
                </div>
              
                <!--SIZES OF BAGS-->
                <div class="w-1/2 overflow-hidden vs:w-full">
                  <span class="text-red-700 material-icons">
                    shopping_bag
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">{{ deliveryPost.limitation }}</label>
                </div>
              
                <!--MODE OF PAYMENT-->
                <div class="w-1/2 overflow-hidden vs:w-full">
                  <span class="pl-3 text-red-700 vs:pl-0 material-icons">
                    payments
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">{{ deliveryPost.paymentMethod }}</label>
                </div>
              </div>
            </div>
            
            <!--POST MESSAGE-->
            <div class="flex items-center w-full px-5 py-2 bg-white">
              <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg">
                {{ deliveryPost.comment }}
              </div>
            </div>

             <!--SEND, CHAT, SHARE-->
          <div class="flex justify-center w-full py-4 tracking-wide bg-white rounded-b-lg">
            
            <!--SEND A REQUEST/OFFER-->
            <div class="font-extrabold focus:text-gray-600">
              <span class="pr-2 material-icons md-24 ">
                send
                </span>
              <label class="font-bold align-top cursor-pointer">Send Offer</label>
            </div>

            <!--CHAT-->
            <div class="font-bold focus:text-gray-600 text-balticsea">
              <span class="pl-24 pr-2 material-icons md-24">
              forum
              </span>
              <router-link to="/messages" class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block">Chat</router-link>
            </div>

            <!--SHARE-->
            <div class="font-bold focus:text-gray-600">
              <span class="pl-24 pr-2 material-icons md-24">
                  share
              </span>
              <button @click="isOpen=!isOpen" class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block">Share</button>
                <div class="w-full">
                    <div v-if="isOpen" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-99 h-min w-30 ">
                      <router-link to="#" class="flex flex-row mt-1 mb-1 ml-1 mr-1 gap-x-2">
                        <span class="text-gray-500 material-icons">mode</span>Share on feed</router-link>
                      <router-link to="#" class="flex flex-row mt-1 mb-1 ml-1 mr-1 gap-x-2"> 
                        <span class="text-gray-500 material-icons">link</span>Copy link to the Post</router-link>
                    </div>
                </div>
            </div>
          </div>
          </div>
          <!-----------------------END OF NO LONGER ACCPETING REQUEST CODE--------------------------------->
</div>
        
        <!----------------------------START OF SHOPPING LISTS--------------------->
        <div class="w-2/5 pt-12 overflow-hidden pl-7 vs:hidden">
          <!-----------ACTIVE ORDERS---------------------->
            <div class="mb-3 bg-white shadow-md w-72 rounded-2xl">
              <header class="py-3 pl-4 text-sm font-semibold tracking-wide text-gray-500">
                ACTIVE ORDERS
                  <span class="inline-flex pl-24 pr-3 align-bottom material-icons md-18">
                    navigate_before
                </span>
                <span class="inline-flex align-bottom material-icons md-18">
                    navigate_next
                </span>

              </header>
              <hr>
              <div class="px-2 pt-2 text-base bg-white rounded-b-xl">
                <label for="" class="pt-2 pl-3 font-semibold">
                 Transaction #{{ activeOrders.transactNo }}
                </label>
              </div>

              <div class="text-base bg-white rounded-b-xl">
                <label for="" class="pl-6 font-normal text-gray-500 ">
                  8 items
                </label>

                <label for="" class="float-right px-3 m-2 py-0.5 text-sm font-semibold border rounded-md border-waterloo text-waterloo">
                  {{ activeOrders.status }}
                </label>
              </div>

              <div class="flex items-center w-65  p-1.5 rounded-xl ml-2 bg-gray-bgcolor">
              <button class="top-0 left-0 pl-2 rounded-full border-1">
                <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2">
                <h5 class="text-sm font-semibold">{{ activeOrders.first_name }} {{ activeOrders.last_name }}
                  <span class="inline-block text-blue-900 align-middle material-icons md-18">
                    verified
                  </span>
                 
                 </h5>
                 
                    <p class="text-sm font-normal ">
                      <span>{{ activeOrders.rating }}
                        <span class="text-red-700 material-icons md-16">
                          star_rate
                        </span>
                      </span>
                    </p>
                  </div>
                 

                   <div class="absolute h-10 p-2 mr-2 rounded-full bg-success right-60">
                    <span class="inline-flex text-white align-middle material-icons">
                       chat
                    </span>
                    <router-link to="/messages" class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block"></router-link>
                  </div>  
                  
              </div>
               <div class="pt-2 pb-8 pr-3 text-sm tracking-wide bg-white rounded-b-xl">
                 <a href="" class="float-right font-bold">View Full Details</a>
              
               </div>
            </div>
            <!-----------END OF ACTIVE ORDERS---------------->
          
            <!-----------ACTIVE DELIVERIES---------------------->
            <div class="mb-3 bg-white w-72 rounded-xl vs:hidden">
              <header class="py-3 pl-4 text-sm font-semibold tracking-wide text-gray-500">
                ACTIVE DELIVERIES
                  <span class="inline-flex pl-20 pr-3 align-bottom material-icons md-18">
                    navigate_before
                </span>
                <span class="inline-flex align-bottom material-icons md-18">
                    navigate_next
                </span>

              </header>
              <hr>
              <div class="px-2 pt-2 text-base bg-white rounded-b-xl">
                <label for="" class="pt-2 pl-3 font-semibold">
                  Transaction #{{ activeDeliveries.transNo }}
                </label>
              </div>

              <div class="text-base bg-white rounded-b-xl">
                <label for="" class="pl-6 font-normal text-gray-500 ">
                  8 items
                </label>

                <label for="" class="float-right px-3 m-2 py-0.5 text-sm font-semibold border rounded-md border-waterloo text-waterloo">
                  {{ activeDeliveries.stat }}
                </label>
              </div>

              <div class="flex items-center w-65  p-1.5 rounded-xl ml-2 bg-gray-bgcolor">
              <button class="top-0 left-0 pl-2 rounded-full border-1">
                <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2">
                <h5 class="text-sm font-semibold">{{ activeDeliveries.firstName }} {{ activeDeliveries.lastName }}
                  <span class="inline-block text-blue-900 align-middle material-icons md-18">
                    verified
                  </span>
                 
                 </h5>
                 
                    <p class="text-sm font-normal ">
                      <span>{{ activeDeliveries.rate }}
                        <span class="text-red-700 material-icons md-16">
                          star_rate
                        </span>
                      </span>
                    </p>
                  </div>
                 
                   <div class="absolute h-10 p-2 mr-2 rounded-full bg-success right-60">
                    <span class="inline-flex text-white align-middle material-icons">chat</span>
                    <router-link to="/messages" class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block"></router-link>
                  </div>  
                  
              </div>
              <div class="p-2">
                    <span class="inline-flex pt-2 pl-3 text-gray-500 align-bottom material-icons md-18">
                      room
                    </span>
                    <label for="" class="text-xs tracking-wide">
                      {{ activeDeliveries.address }}
                    </label>
                  </div>
               <div class="pt-2 pb-8 pr-3 text-sm tracking-wide bg-white rounded-b-xl">
                 <a href="" class="float-right font-bold">View Full Details</a>
              
               </div>
            </div>
            <!-----------END OF ACTIVE DELIVERIES---------------->
          

          <div class="flex flex-wrap float-left font-nunito md:block vs:hidden">
            <div class="mb-3 bg-white w-72 rounded-xl">
               <header class="py-3 pl-4 text-sm font-semibold tracking-wide text-gray-500">
                SHOPPING LIST
                  <span class="inline-flex pl-24 pr-3 align-bottom material-icons md-18">
                    navigate_before
                </span>
                <span class="inline-flex align-bottom material-icons md-18">
                    navigate_next
                </span>
              </header>
              
              <hr>
               
               <!--SHOPPING LIST-->
               <h3 class="pt-2 pl-5 text-lg font-bold leading-loose tracking-wide">Shopping List 1
                 <editShopListModal v-if="editVisible" @closeModal="editlistener"/>
                <button @click="toggleeditShopList" class="ml-16 text-sm font-bold text-blue-700 focus:outline-none">Edit</button>
                </h3> 
                    <ul id="shop-list" class="text-sm leading-relaxed text-gray-500 list-disc list-inside pl-9">
                      <li v-for="shopList in shopList" :key="shopList.items" >{{ shopList.items }}</li>
                    </ul>
                    <ShoppingList v-if="list" @closeListModal="listlistener"/>
                      <button @click="toggleList" class="text-sm leading-loose pl-9 focus:outline-none">
                      4 more items...
                    </button>
                   <hr>
                  <div class="items-center justify-center p-3 pl-4">
                    <button class="w-64 h-8 px-5 text-sm font-bold text-red-600 transition-colors duration-150 border-2 border-red-600 rounded-3xl">
                        <a href="#">
                            Create New
                        </a>
                    </button>
                  </div>
                  </div>
                </div>
          
              <!--ends-->

            
            </div>
            </div>
</template>

<style>
 #journal-scroll::-webkit-scrollbar {
        width: 5px;
        cursor: pointer;
      }
  
    #journal-scroll::-webkit-scrollbar-track {
        background-color: rgba(229, 231, 235, var(--bg-opacity));
        cursor: pointer;
    }
  
    #journal-scroll::-webkit-scrollbar-thumb {
        cursor: pointer;
        background-color: rgba(185, 28, 28)
    
    }
#iCheck{
  font-size:16px;
  color:rgb(22, 22, 141);
}
#iMessage{
  font-size:24px;
  color:rgb(22, 22, 141);
}
img{ 
  max-width: 100px;
  width:11%;
 
}
</style>

<script>
import Navbar from './Navbar'
import PostModal from "./PostModal"
import editShopListModal from "./editShopListModal"
import ShoppingList from "./ShoppingList"
import EditShoppingOffer from "./EditShoppingOffer"
import UpdateOrderStatus from "./updateOrderStatus"

 export default {
el:'#shop-list',
    data() {
    return {
      postModalVisible: false,
      edit1:false,
      show:false,
      share1:false,
      NewList:false,
      editVisible: false,
      editVisible1: false,
      filter: false,
      filter2: false,
      isOpen:false,
      list:false,
      editShoppingOffer:false,
      updateOrderStatus:false,

      filterPost:{
        filterAddress: "Bonot, Legazpi City"
      },

      deliveryPost:{
              firstname:'Wheein',
              lastname:'Jung',
              time: '14 hours ago',
              address: 'Banquerohan, Legazpi',
              comment: "Hi! I'll be going to SM City Legazpi tommorow. If there's anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request. PS. WHOLO ON APRIL",
              status: "No longer Accepting Requests",
              deliveryPlace: "Legazpi City Only",
              shoppingPlace: "SM Legazpi",
              paymentMethod: "Cash",
              schedule: "Tomorrow at 10 AM",
              transportation: "Car",
              limitation: "Up to 3 medium or 2 large bags",
              

          },

      activeDeliveries:{
        transNo: '61913174',
        address: 'Ligao',
        firstName: 'Hanbin',
        lastName: 'Kim',
        rate: '131',
        stats: "Confirmed"
      },

      activeOrders:{
        transactNo: '1267643764',
        address: 'Legazpi',
        first_name:'Go Eun',
        last_name: 'Na',
        rating: '4.17',
        stat:"Confirmed"
        
      },
      
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
  components: {
    Navbar,
    PostModal,
    editShopListModal,
    ShoppingList,
    EditShoppingOffer,
    UpdateOrderStatus,
  },
  methods:{
    togglePostModal(){
      this.postModalVisible = !this.postModalVisible
    },
    listener(){
      this.postModalVisible = false;
    },
    toggleeditShopList(){
      this.editVisible = !this.editVisible 
    },
    editlistener(){
      this.editVisible = false;
    },
    toggleeditShopList1(){
      this.editVisible1 = !this.editVisible 
    },
    editlistener1(){
      this.editVisible1 = false;
    },
    toggleList(){
      this.list = !this.list
    },
    listlistener(){
      this.list = false;
  },
    toggleEditShoppingOffer(){
      this.editShoppingOffer = !this.editShoppingOffer 
    },
    listener3(){
      this.editShoppingOffer = false;
    },
    toggleUpdateOrderStatus(){
      this.updateOrderStatus = !this.updateOrderStatus
    },
    listener4(){
      this.updateOrderStatus = false;
    }
  }
}
</script>