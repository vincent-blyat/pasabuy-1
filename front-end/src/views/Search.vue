<template class="font-nunito">
<Navbar/>
<div class="min-h-screen vs:pt-20 pt-16 shadow-md  flex justify-center item-center bg-gray-100">

<!---------------------------------------------------------->
<div class="fixed h-26 vs:w-full xl:w-1/2 w-full bg-gray-100 rounded" style="max-width:608px">
       
    <div class="vs:px-3 vs:max-w-full px-4 mt-2 flex justify-between">
       <div class="flex justify-center relative pt-1 pt-1 w-full">
            <input type="text" class="bg-white h-10 w-full vs:w-11/12 pl-16 border focus:outline-none focus:ring-1 focus:ring-red-700 rounded-full" placeholder="Banquerohan, Legazpi City" />
            <button class="pt-2 absolute left-7 vs:left-10 focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
              search
              </span></button>
        </div>
    </div><!---end of search bar-->

    <div class="vs:pl-2 vs:max-w-full flex items-center">
       <div class="flex justify-center relative pb-3 w-full ">
            
        <div class="flex justify-center text-sm bg-transparent rounded-lg xl:w-99 pt-3" style="font-size:13px">
          
            <button class="flex flex-row items-center h-6 rounded-full px-1 mr-5 vs:mr-2 hover:bg-gray-300 bg-red-700 border shadow-inner shadow-lg">
              <span class="material-icons">drag_handle</span>
              <span class="align-middle pl-1 pr-1 ">All</span>
            </button>

            <button class="flex flex-row items-center h-6 rounded-full px-1 mr-5 vs:mr-2 hover:bg-gray-300 bg-white border shadow-inner shadow-lg">
              <span class="material-icons" style="font-size:18px">delivery_dining</span>
              <span class="align-middle pl-1 pr-1 ">Shopping Offers</span>
            </button>

            <button class="flex flex-row items-center h-6 rounded-full px-1 mr-5 vs:mr-2 hover:bg-gray-300 bg-white border shadow-inner shadow-lg">
              <span class="material-icons align-middle" style="font-size:18px">shopping_bag</span>
              <span class="align-middle pl-1 pr-1 ">Order Requests</span>
            </button>

            <button class="flex flex-row items-center h-6 rounded-full px-1 hover:bg-gray-300 bg-white border shadow-inner shadow-lg">
              <span class="material-icons align-middle" style="font-size:18px">people_alt</span>
              <span class="align-middle pl-1 pr-1 ">People</span>
            </button>





         

            

        </div>
      </div>
    </div><!---end of search bar-->




</div><!-------------------------->

<!---------------------------------------------------------->
  <div class="overflow-hidden flex flex-col items-center pt-2 mt-24 w-full vs:w-11/12" style="max-width:608px">

    <div class="w-full h-min ">
       <div class="vs:px-3 vs:max-w-full px-4 py-3 mb-3 bg-white rounded-lg flex justify-between items-center">
          <div class="flex ml-1"> <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="sunil" class="rounded-full h-11 w-10 pt-1"> 
            <div class="flex flex-col justify-between items-start ml-2 pt-1 align-middle"> 
              <span class="font-medium text-sm" id="mark">{{ searchProfileResult.firstname }} {{ searchProfileResult.lastname }} <span class="material-icons pl-2 vs:mr-28 md:mr-48 lg:mr-64 lg:pr-2 xl:mr-64" id="iCheck" >verified</span>
                  <button><span class=" font-semibold rounded-full px-2 pb-1  border border-gray-600 hover:text-red-700" style="font-size:13px">Following</span></button>
                  <button><span class="font-semibold rounded-full px-2 pb-1 ml-3 border border-gray-600 hover:text-red-700" style="font-size:13px">Message</span></button>
              </span> 
              <span class="text-xs text-gray-600"> {{ searchProfileResult.address }}
              </span> 

              <div class="w-full">
                <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-96.5 h-min w-30 ring-2 ring-gray-200">
                  <router-link to="#"  class="flex flex-row gap-x-2 ">
                    <span class="text-gray-500 material-icons">mode</span>Edit Post</router-link>
                  <router-link to="#" class="flex flex-row gap-x-2"> 
                    <span class="text-gray-500 material-icons">delete</span>Delete</router-link>
                </div>
              </div> 

              </div>
            </div>
        </div>
    </div><!-------------------------->

    <div class="w-full h-min">
       <div class="vs:px-3 vs:max-w-full px-4 py-3 mb-3 bg-white rounded-lg flex justify-between items-center">
          <div class="flex ml-1"> <img src="https://whatsondisneyplus.com/wp-content/uploads/2021/02/wanda-icon.png" alt="sunil" class="rounded-full h-11 w-10 pt-1"> 
            <div class="flex flex-col justify-between items-start ml-2 pt-1 align-middle"> 
              <span class="font-medium text-sm" id="mark">Wanda Maximoff<span class="material-icons pl-2 vs:mr-20 md:mr-44 lg:mr-60 xl:mr-56" id="iCheck" >verified</span>
                  <button><span class="top-3 font-semibold rounded-full px-2 pb-1  border border-gray-600 hover:text-red-700" style="font-size:13px">Follow</span></button>
                  <button><span class="top-3 font-semibold rounded-full px-2 pb-1 ml-3 border border-gray-600 hover:text-red-700" style="font-size:13px">Message</span></button>
             </span> 
              <span class="text-xs text-gray-600"> {{ searchProfileResult.address }}
              </span> 
              </div>
          </div>
        </div>
    </div><!-------------------------->

    <div class="w-full h-min bg-white rounded-lg">

       <div class=" vs:max-w-full vs:px-0 px-3 mx-3 py-2 mb-3 pt-4 rounded-lg flex justify-between items-center">
          <div class="flex"> <img src="https://whatsondisneyplus.com/wp-content/uploads/2021/02/wanda-icon.png" alt="sunil" class="rounded-full h-11 w-10 pt-1"> 
            <div class="flex flex-col justify-between items-start ml-2 align-middle"> 
              <span class="font-semibold text-base">{{ searchPostResult.firstName }} {{ searchPostResult.lastName }} <span class="material-icons align-middle pl-2" id="iCheck" >verified</span>
                  <span class="text-base vs:text-sm text-gray-600 mr-36 vs:mr-4 "> posted a {{ searchPostResult.offerPosted }}</span>
                  <button @click="edit=!edit">
                  <span class="material-icons rig align-middle">more_horiz</span>
                 </button>
                 <div class="w-full">
                    <div v-if="edit" class="absolute space-y-2 py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-91 h-min w-30 ring-2 ring-gray-200">
                        <!--EDIT POST--->
                      <EditShoppingOffer v-if="editShoppingOffer" @closeModal1="listener1"/>
                        <button  @click="toggleEditShoppingOffer" class="flex flex-row gap-x-2 focus:outline-none">
                          <span class="font-medium text-gray-500 material-icons">
                            mode
                          </span>
                          Edit Post
                        </button>

                         <!-----UPDATE STATUS------>
                      <UpdateOrderStatus v-if="updateOrderStatus" @closeModal3="listener2"/>
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
                    <!------------3 DOT MENU END------------------>
             </span> 
              <span class="text-sm text-gray-600"> {{ searchPostResult.datePosted }}
              </span> 
              </div>
          </div>
        </div>

        <div class="flex flex-wrap justify-center overflow-hidden">
        <div class="flex vs:pl-6 py-2 text-sm bg-transparent bg-white w-99"> 
          <div class="px-2 text-sm font-semibold bg-gray-200 rounded-full text-red-danger">
            <span class="inline-block align-middle material-icons">
              remove_circle_outline
            </span>
            <label class="pl-1 align-middle">{{ searchPostResult.status }}</label> 
          </div>
        </div>
      </div><!------------------------------------------>
      

      <!---------------POST MESSAGE------------->
      <div class="flex flex-wrap justify-center w-full">
        <div class="flex pt-3 px-4 vs:px-0 vs:ml-1 text-sm bg-transparent bg-white w-full">
        
        <div class="flex flex-row vs:flex-col vs:ml-3 w-full">
          <div class="flex flex-col pl-4">

            <div><!--AREA-->
             <div class="w-full overflow-hidden mmd:w-2/4 pb-2">
                <span class="items-center text-red-700 material-icons">
                  delivery_dining
                </span>
                <label class="inline-block pt-1 pl-1 text-sm font-normal text-gray-800 align-top">Delivering at {{ searchPostResult.deliveryAddress }}</label> 
              </div>
            </div>

            <div>
              <!--TIME-->
              <div class="w-full overflow-hidden mmd:w-1/2 pb-2">
                <span class="text-red-700 material-icons ">
                    watch_later  
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">{{ searchPostResult.schedule }}</label>
              </div>
            </div>

            <div>
              <div class="w-full overflow-hidden mmd:w-1/2 pb-3">
                <span class="text-red-700 material-icons">
                    shopping_bag
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Up to 3 medium or 2 large bags</label>
              </div>
            </div>
          </div>

          <div class="flex flex-col vs:pl-4 pl-16">
              
            <div><!--AREA-->
             <div class="w-full overflow-hidden mmd:w-2/4 pb-2">
                <span class="items-center text-red-700 material-icons">
                  shopping_cart
                </span>
                <label class="inline-block pt-1 pl-1 text-sm font-normal text-gray-800 align-top">Shopping at {{ searchPostResult.shoppingAddress }}</label> 
              </div>
            </div>

            <div><!--mode of transpo-->
             <div class="w-full overflow-hidden mmd:w-2/4 pb-2">
                <span class="items-center text-red-700 material-icons">
                  directions_car_filled
                </span>
                <label class="inline-block pt-1 pl-1 text-sm font-normal text-gray-800 align-top">{{ searchPostResult.transportation }}</label> 
              </div>
            </div>

            <div><!--mode of payment-->
             <div class="w-full overflow-hidden mmd:w-2/4">
                <span class="items-center text-red-700 material-icons">
                  payments
                </span>
                <label class="inline-block pt-1 pl-1 text-sm font-normal text-gray-800 align-top">{{ searchPostResult.paymentMethod }}</label> 
              </div>
            </div>

            


                

          </div>

        </div>
        </div>
        </div><!---------end details-------------------->


        <!---------------POST MESSAGE------------->
      <div class="flex flex-wrap justify-center w-full">
        <div class="flex py-3 px-2 text-sm bg-transparent bg-white w-full">
          <div class="flex items-center py-2 bg-white mx-3">
            <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg w-full">
               {{ searchPostResult.comment }}
            </div>
          </div> 
        </div>
      </div>

      <!---------------SEND, MESSAGE, SHARE------------->
      <div class="flex pb-3 text-sm bg-transparent rounded-b-lg flex flex-cols justify-center items-between bg-white h-10">
          <div class="flex items-center justify-center py-4 tracking-wide bg-white rounded-b-lg w-99 mmd:px-5 ">
              
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
              <router-link to="/messages" class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block"> Chat </router-link>
            </div>

            <!--SHARE-->
            <div class="font-bold focus:text-gray-600">
              <span class="pl-24 pr-2 material-icons md-24">
                  share
              </span>
              <button @click="isOpen=!isOpen" class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block">Share</button>
                <div class="w-full">
                    <div v-if="isOpen" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-99 h-min w-30">
                      <router-link to="#" class="flex flex-row gap-x-2 mb-1 mt-1 mr-1 ml-1">
                        <span class="text-gray-500 material-icons">mode</span>Share on feed</router-link>
                      <router-link to="#" class="flex flex-row gap-x-2 mb-1 mt-1 mr-1 ml-1"> 
                        <span class="text-gray-500 material-icons">link</span>Copy link to the Post</router-link>
                    </div>
                </div>
            </div>
        </div>
      </div> <!----------------------END--------------->


    </div><!-------------------------->
<!-------------------------------------------------------------------->
<!--------------------------------------------------------------------->

    

  </div><!--------end of bottom elements---------->
<!----------------------------------->
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

.overlay {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
}

.modal-vue .modal {
  position: relative;
  width: 300px;
  z-index: 9999;
  margin: 0 auto;
  padding: 20px 30px;
  background-color: #fff;
}

.modal-vue .close{
  position: absolute;
  top: 10px;
  right: 10px;
}

</style>

<script>

import Navbar from './Navbar'
import EditShoppingOffer from "./EditShoppingOffer"
import UpdateOrderStatus from "./updateOrderStatus"

 export default {
    data() {
    return {
      postModalVisible: false,
      edit1:false,
      isOpen:false,
      edit:false,
      editShoppingOffer:false,
      updateOrderStatus:false,

      searchProfileResult:{
        firstname: "Tony",
        lastname: "Stark",
        address: "Los Angeles, California",
        dateposted: "13 hours ago",

      },
      searchPostResult:{
        firstName:"Monica",
        lastName: "Rambaeu",
        status: "No longer Accepting Request",
        offerPosted: "shopping offer",
        datePosted: "3 hours ago",
        deliveryAddress: "Manhattan",
        shoppingAddress: "7-eleven",
        schedule: "Tomorrow 10AM",
        transportation: "Public Transit",
        paymentMethod: "Payment First",
        comment:" Hi! I'll be going to SM City Legazpi tommorow. If there's anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request."
      }
           
        }
    },

  components:{
     Navbar,
     EditShoppingOffer,
    UpdateOrderStatus,
  },

  methods:{
    toggleEditShoppingOffer(){
      this.editShoppingOffer = !this.editShoppingOffer 
    },
    listener1(){
      this.editShoppingOffer = false;
    },
    toggleUpdateOrderStatus(){
      this.updateOrderStatus = !this.updateOrderStatus
    },
    listener2(){
      this.updateOrderStatus = false;
    }

  }
}
</script>
