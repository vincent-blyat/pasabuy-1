<template class="font-nunito">
<Navbar/>
<div class="max-h-screen min-h-screen vs:pt-20 pt-16 shadow-md flex flex-col flex justify-center items-center bg-gray-100">

<!---------------------------------------------------------->
<div class="fixed top-16 h-26 vs:w-full xl:w-1/2 w-full h-full bg-gray-100 rounded" style="max-width:608px">

    <div class="mt-5 h-10 vs:px-3 xsm:px-2 vs:max-w-full mt-2 flex justify-between">
       <div class="flex justify-center pt-1 pb-1 w-full bg-white border border-gray-300 focus:outline-none focus:ring-1 focus:ring-red-700 rounded-full">
            <button class="pt-1 xsm:pt-1 ssm:pt-1 xsm:left-4 xsm:text-s vs:left-10 focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
              search
              </span></button>
            <input type="text" class="rounded focus:outline-none h-7 xsm:h-7 ssm:h-7 w-10/12 vs:w-11/12 pl-16 xsm:pl-10 truncate ssm:w-60 ssm:text-xs xsm:text-xs" placeholder="Banquerohan, Legazpi City" />
            
        </div>
    </div><!---end of search bar-->

    <div class="vs:pl-2 xsm:pl-1 vs:max-w-full flex items-center">
       <div class="flex justify-center pb-3 w-full ">
            
        <div class="overflow-x-auto w-full flex justify-center pb-1 text-sm bg-transparent rounded-lg xl:w-99 pt-3" style="font-size:13px" id="scroll_filter">

            <button class="flex flex-row truncate xsm:w-44 items-center xsm:ml-32 ssm:ml-36 vs:ml-24 lvs:ml-8 rounded-full px-1 xsm:mr-1 ssm:mr-1 min-w-min h-6 mr-5 vs:mr-2 bg-red-700 hover:bg-gray-300 bg-white border shadow-inner shadow-lg">
              <span class="material-icons" style="font-size:18px">drag_handle</span>
              <span class="align-middle xsm:text-s">All</span>
            </button>

            <button class="flex flex-row truncate xsm:w-44 items-center rounded-full px-1 xsm:mr-1 ssm:mr-1 min-w-min h-6 mr-5 vs:mr-2 hover:bg-gray-300 bg-white border shadow-inner shadow-lg">
              <span class="material-icons" style="font-size:18px">delivery_dining</span>
              <span class="align-middle pl-1 pr-1 xsm:text-s">Shopping Offers</span>
            </button>

            <button class="flex flex-row truncate xsm:w-44 items-center rounded-full px-1 xsm:mr-1 ssm:mr-1 min-w-min h-6 mr-5 vs:mr-2 hover:bg-gray-300 bg-white border shadow-inner shadow-lg">
              <span class="material-icons" style="font-size:18px">shopping_bag</span>
              <span class="align-middle pl-1 pr-1 xsm:text-s">Order Requests</span>
            </button>

            <button class="flex flex-row truncate xsm:w-44 items-center rounded-full px-1 xsm:mr-1 ssm:mr-1 min-w-min h-6 mr-5 vs:mr-2 hover:bg-gray-300 bg-white border shadow-inner shadow-lg">
              <span class="material-icons" style="font-size:18px">people_alt</span>
              <span class="align-middle pl-1 pr-1 xsm:text-s">People</span>
            </button>

        </div>
      </div>
    </div><!---end of filter bar-->

</div><!-------------------------->

<!---------------------------------------------------------->
  <div class=" h-full flex flex-col items-center w-full vs:w-11/12" style="max-width:608px" id="scroll_content">

    <div class="w-full h-full">
       <div class="vs:px-3 vs:max-w-full px-4 py-3 mb-3 bg-white rounded-lg flex justify-between items-center">
          <div class="flex ml-1 xsm:items-center"> <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="sunil" class="rounded-full h-11 w-10 pt-1"> 
            <div class="flex flex-col justify-between items-start ml-2 pt-1 align-middle"> 
              <span class="font-medium text-sm" id="mark">{{ searchProfileResult.firstname }} {{ searchProfileResult.lastname }} <span class="material-icons pl-2 vs:mr-28 md:mr-48 lg:mr-64 lg:pr-2 xl:mr-64" id="iCheck" >verified</span>
                  <button><span class="xsm:text-xs xsm:hidden ssm:hidden vs:hidden top-3 font-semibold rounded-full px-2 pb-1 sm:ml-32 border border-gray-600 hover:text-red-700">Following</span></button>
                  <button><span class="xsm:text-xs xsm:hidden ssm:hidden vs:hidden top-3 font-semibold rounded-full px-2 pb-1 ml-3 border border-gray-600 hover:text-red-700">Message</span></button>
             </span> 
              <span class="text-xs text-gray-600"> {{ searchProfileResult.address }}</span>
              <div class="flex flex-row mt-2">
                <button><span class="xsm:text-xs ssm:text-xs vs:text-xs xsm:inline ssm:inline vs:inline hidden top-3 font-semibold rounded-full pb-1 px-2 border border-gray-600 hover:text-red-700">Following</span></button>
                <button><span class="xsm:text-xs ssm:text-xs vs:text-xs xsm:inline ssm:inline vs:inline hidden top-3 font-semibold rounded-full pb-1 px-2 ml-2 border border-gray-600 hover:text-red-700">Message</span></button>
              </div>


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
                  <button><span class="xsm:text-s xsm:hidden ssm:hidden vs:hidden top-3 font-semibold rounded-full px-2 pb-1 sm:ml-28 border border-gray-600 hover:text-red-700" style="font-size:13px">Follow</span></button>
                  <button><span class="xsm:text-s xsm:hidden ssm:hidden vs:hidden top-3 font-semibold rounded-full px-2 pb-1 ml-3 border border-gray-600 hover:text-red-700" style="font-size:13px">Message</span></button>
             </span> 
              <span class="text-xs text-gray-600"> {{ searchProfileResult.address }}</span> 

              <div class="flex flex-row mt-2">
                <button><span class="xsm:text-xs ssm:text-xs vs:text-xs xsm:inline ssm:inline vs:inline hidden top-3 font-semibold rounded-full pb-1 px-2 border border-gray-600 hover:text-red-700">Following</span></button>
                <button><span class="xsm:text-xs ssm:text-xs vs:text-xs xsm:inline ssm:inline vs:inline hidden top-3 font-semibold rounded-full pb-1 px-2 ml-2 border border-gray-600 hover:text-red-700">Message</span></button>
              </div>

              </div>
          </div>
        </div>
    </div><!-------------------------->

    <!----------post------------------>
    <div class="w-full h-min bg-white rounded-lg relative ">

        <div class=" vs:max-w-full vs:px-0 px-3 mx-3 py-2 mb-3 pt-4 rounded-lg flex justify-between items-center">
          <div class="flex w-full"> <img src="https://whatsondisneyplus.com/wp-content/uploads/2021/02/wanda-icon.png" alt="sunil" class="rounded-full vs:h-9 vs:w-8 h-11 w-10 pt-1"> 
            <div class="flex flex-col justify-between items-start ml-2 align-middle w-full"> 
              <div class="font-semibold text-sm w-full">
                  <div class="flex flex-row justify-between w-full">
                    <div class="flex flex-col">
                      <div><span>{{ searchPostResult.firstName }} {{ searchPostResult.lastName }}</span><span class="material-icons align-middle pl-2 vs:pl-0 " id="iCheck" >verified</span><span class="text-sm vs:text-xs ssm:text-xs xsm:text-xs vs:text-xs text-gray-600"> posted a {{ searchPostResult.offerPosted }}</span></div>
                      <span class="text-sm ssm:text-xs xsm:text-xs vs:text-xs text-gray-600"> {{ searchPostResult.datePosted }}</span> 
                    </div>
                    <button @click="edit=!edit"><span class="material-icons right align-middle">more_horiz</span></button>
                  </div>

                 <div class="w-min mt-1">
                    <div v-if="edit" class="absolute right-2 py-2 pt-2 pl-2 pr-4 leading-loose bg-white h-min w-30 flex flex-col items-start min-w-max p-2 bg-white rounded-lg shadow-xl h-min ring-2 ring-gray-200">

                        <!--EDIT POST--->
                      <EditShoppingOffer v-if="editShoppingOffer" @closeModal1="listener1"/>
                        <button  @click="toggleEditShoppingOffer" class="focus:outline-none">
                          <span class="font-medium text-gray-500 material-icons">
                            mode
                          </span>
                          Edit Post
                        </button>
                         <!-----UPDATE STATUS------>
                      <UpdateOrderStatus v-if="updateOrderStatus" @closeModal3="listener2"/>
                        <button  @click="toggleUpdateOrderStatus" class="font-normal focus:outline-none ">
                          <span class="font-normal text-gray-500 material-icons">
                            autorenew
                          </span>
                          Update Status
                        </button>
                        <!---END-->

                      <router-link to="#" class=""> 
                        <span class="text-gray-500 material-icons">delete</span>Delete</router-link>
                    </div>
                 </div> <!------------3 DOT MENU END------------------>

             </div> 
              </div>
          </div>
        </div><!----------------------------------->
        <div class="flex flex-wrap justify-center overflow-hidden">
        <div class="flex vs:pl-6 xsm:pl-3 ssm:pl-2 vs:pl-2 lvs:pl-2 sm:pl-3 py-2 text-sm bg-transparent bg-white w-99"> 
          <div class="px-2 text-sm font-semibold bg-gray-200 rounded-full text-red-danger">
            <span class="inline-block align-middle material-icons">
              remove_circle_outline
            </span>
            <label class="pl-1 align-middle xsm:text-xs">{{ searchPostResult.status }}</label> 
          </div>
        </div>
      </div><!------------------------------------------>
      

      <!---------------POST MESSAGE------------->
      <div class="flex flex-wrap justify-center w-full">
        <div class="flex pt-3 px-4 xsm:px-2 ssm:px-2 vs:px-2 lvs:px-2 vs:px-0 vs:ml-1 text-sm bg-transparent bg-white w-full">
        
        <div class="flex flex-row xsm:flex-col ssm:flex-col vs:flex-col lvs:flex-col vs:flex-col vs:ml-3 w-full">
          
          <div class="flex flex-col vs:pl-4 md:pl-12 lg:pl-8 xl:pl-12 2xl:pl-12 xsm:pl-3 ssm:pl-3 vs:pl-3 lvs:pl-3">
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

          <div class="flex flex-col vs:pl-4 pl-16 xsm:pl-3 ssm:pl-3 vs:pl-3 lvs:pl-3">
              
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
        <div class="flex py-3 xsm:py-2 xsm:px-1 px-2 text-sm bg-transparent bg-white w-full">
          <div class="flex items-center py-2 bg-white mx-3 xsm:mx-2">
            <div class="p-5 text-sm xsm:text-xs leading-loose bg-gray-200 rounded-lg w-full">
               {{ searchPostResult.comment }}
            </div>
          </div> 
        </div>
      </div>
      <!---------------SEND, MESSAGE, SHARE------------->
      <div class="flex pb-3 text-sm xsm:text-xs bg-transparent rounded-b-lg flex flex-cols bg-white h-10">
          <div class="flex items-center justify-between xsm:px-4 ssm:px-2 vs:px-4 lvs:px-5 sm:px-8 md:px-16 lg:px-16 xl:px-16 2xl:px-16 py-2 bg-white rounded-b-lg w-full">
 
            <!--SEND A REQUEST/OFFER-->
            <div class="font-extrabold flex flex-row focus:text-gray-600">
              <span class="pr-2 xsm:text-sm ssm:text-sm vs:text-sm lvs:text-sm material-icons">
                send</span>
              <label class="text-sm font-bold align-top cursor-pointer">Send Offer</label>
            </div>

            <!--CHAT-->
            <div class="xsm:px-3 flex flex-row font-bold focus:text-gray-600 text-balticsea">
              <span class="lvs:pl-2 xsm:text-sm ssm:text-sm vs:text-sm lvs:text-sm xsm:pl-1  pr-2 material-icons">
              forum
              </span>
              <router-link to="/messages" class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block"> <span class="">Chat</span> </router-link>
            </div>

            <!--SHARE-->
            <div class="font-bold flex flex-row focus:text-gray-600">
              <span class="lvs:pl-2 xsm:pl-1 pr-2 material-icons xsm:text-sm ssm:text-sm vs:text-sm lvs:text-sm">
                  share
              </span>
              <button @click="isOpen=!isOpen" class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block"><span class="">Share</span></button>
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
      </div> <!-----END----->
    </div><!-------------------------->

  </div><!--------end of bottom elements---------->

</div>
</template>


<style>
#scroll_filter::-webkit-scrollbar {
        height: 2px;
        cursor: pointer;
      }
  
#scroll_filter::-webkit-scrollbar-track {
        background-color: rgba(229, 231, 235, var(--bg-opacity));
        cursor: pointer;
    }
  
#scroll_filter::-webkit-scrollbar-thumb {
        cursor: pointer;
        background-color: rgb(126, 123, 123)
    
    }
#scroll_content::-webkit-scrollbar {
        width: 5px;
        cursor: pointer;
      }
  
#scroll_content::-webkit-scrollbar-track {
        background-color: rgba(229, 231, 235, var(--bg-opacity));
        cursor: pointer;
    }
  
#scroll_content::-webkit-scrollbar-thumb {
        cursor: pointer;
        background-color: rgb(199, 196, 196)
    
    }
   
#iCheck{
  font-size:16px;
  color:rgb(22, 22, 141);
}
#iMessage{
  font-size:24px;
  color:rgb(22, 22, 141);
}
.material-icons.md-12 { font-size: 18px; }
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
      },
 
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
    },
 
  }
}
</script>