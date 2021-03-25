<template class="font-nunito">
<Navbar/>
<!--Desktop Version--->
<div class="desktopVersion">
    
    <!--START OF 'POST OFFER OR REQUEST' CODE-->
    <div class="sticky w-full h-14 top-16 bg-red-search">

    </div>
      <div class="sticky flex flex-wrap justify-center overflow-hidden top-20">
        <div class="relative flex items-center justify-center w-2/5 px-8 bg-transparent rounded-lg">
        <span class="absolute left-10 inset-y-7 material-icons">
          search
        </span>
          <div class="justify-center mmd:pl-3">
           <input class="pl-12 px-3 my-5 text-left text-balticsea placeholder-balticsea bg-white border rounded-full appearance-none lg:text-base mmd:text-base sm:w-96.5 md:w-99 ssm:h-12 mmd:h-10 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 ssm:text-xs" placeholder="Search">
          </div>
        </div>
      </div>
      
      <!-------------------------FILTER------------------------>
      <div class="flex flex-wrap justify-center pt-2 overflow-hidden">
        <div class="flex justify-center px-3 text-sm bg-transparent rounded-lg w-99">
          <div class="flex ">
            <div class="flex items-center p-4 mb-2 mr-2"><label class="font-semibold">Filter:  </label>
              <input type="radio" id="all-post" name="radio" class="ml-4 text-red-700 border rounded-full form-radio">
              <label for="all-post" class="pl-2">All Post</label>
            </div>
            <div class="flex items-center mb-2 mr-2">
              <input type="radio" id="shopping-offer" name="radio" class="text-red-700 border rounded-full form-radio">
              <label for="shopping-offers" class="pl-2">Shopping Offers</label>
            </div>
            <div class="flex items-center p-2 mb-2 mr-2">
              <input type="radio" id="order-requests" name="radio" class="text-red-700 border rounded-full form-radio">
              <label for="order-request" class="pl-2">Order Requests</label>
            </div>
            <div class="flex items-center mb-2 mr-2 ">
              <input type="radio" id="nearby" name="radio" class="text-red-700 border rounded-full form-radio">
              <label for="nearby" class="pl-2">Nearby</label>
            </div>
          </div>
        </div>
      </div>
      <!-------------------ENDS------------------->

      <!---------------RESULT (PEOPLE)------------->
      <div class="flex flex-wrap justify-center pl-2 overflow-hidden">
        <div class="flex px-5 py-4 text-sm bg-transparent bg-white rounded-lg w-99"> 
          <button class="rounded-full left-2 mmd:w-12 mmd:h-12 border-1 focus:outline-none">
            <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </button>
          <div class="ml-2">
            <h5 class="font-bold mmd:text-base">
              Mark Aral
              <span class="inline-block text-blue-900 align-middle material-icons md-18">
                  verified
              </span> 
              <button class="absolute px-3 text-sm font-semibold border rounded-full right-97.2 text-waterloo border-waterloo focus:outline-none">
                Following
              </button>
              <button class="focus:outline-none absolute px-3 text-sm font-semibold border rounded-full right-96.5 text-black border-black">
                Message
              </button>
            </h5>
              <p class="text-sm font-normal text-gray-400">
                <span>
                  Lives in Banquerohan, Legazpi City
                </span>
              </p>
          </div> 
        </div>
      </div>
      <!-------------------ENDS------------------------>

      <!---------------RESULT (PEOPLE)------------->
      <div class="flex flex-wrap justify-center pt-8 pl-2 overflow-hidden">
        <div class="flex px-5 py-4 text-sm bg-transparent bg-white rounded-lg w-99"> 
          <button class="rounded-full left-2 mmd:w-12 mmd:h-12 border-1 focus:outline-none">
            <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </button>
          <div class="ml-2">
            <h5 class="font-bold mmd:text-base">
              Mark Aral
              <span class="inline-block text-blue-900 align-middle material-icons md-18">
                  verified
              </span> 
              <button class="focus:outline-none absolute px-3 text-sm font-semibold border rounded-full right-97.2 text-black border-black">
                Follow
              </button>
              <button class="focus:outline-none absolute px-3 text-sm font-semibold border rounded-full right-96.5 text-black border-black">
                Message
              </button>
            </h5>
            <p class="text-sm font-normal text-gray-400">
              <span>
                Lives in Banquerohan, Legazpi City
              </span>
            </p>
          </div> 
        </div>
      </div>
      <!---------------ENDS------------->

       <!---------------RESULT (POST)------------->        
      <div class="flex flex-wrap justify-center pt-8 pl-2 overflow-hidden">
        <div class="flex px-5 py-4 text-sm bg-transparent bg-white rounded-t-lg w-99"> 
          <button class="rounded-full focus:outline-none left-2 mmd:w-12 mmd:h-12 border-1">
            <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </button>
          <div class="ml-2">
            <h5 class="font-bold mmd:text-base">
              Mark Aral
              <span class="inline-block text-blue-900 align-middle material-icons md-18">
                verified
              </span>
              <label class="pl-1 font-normal text-gray-400 align-middle">posted an order request</label>
              <button @click="edit1=!edit1" class="absolute right-96.5">
                <img class="w-6 h-auto" src="img/3dot.svg"/>
              </button>
              <div class="w-full">
                <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-96.5 h-min w-30 ring-2 ring-gray-200">
                  <router-link to="#"  class="flex flex-row gap-x-2 ">
                    <span class="text-gray-500 material-icons">mode</span>Edit Post</router-link>
                  <router-link to="#" class="flex flex-row gap-x-2"> 
                    <span class="text-gray-500 material-icons">delete</span>Delete</router-link>
                </div>
              </div> 
            </h5>
            <p class="text-sm font-normal text-gray-400">
              <span>
                  13 hours ago
              </span>
            </p>
          </div> 
        </div>
      </div>

      <!---------------OFFER STATUS------------->
      <div class="flex flex-wrap justify-center pl-2 overflow-hidden">
        <div class="flex px-5 py-2 text-sm bg-transparent bg-white w-99"> 
          <div class="p-1 px-2 text-sm font-semibold bg-gray-200 rounded-full text-red-danger">
            <span class="inline-block align-middle material-icons">
              remove_circle_outline
            </span>
            <label class="pl-1 align-bottom">No longer Accepting Requests</label> 
          </div>
        </div>
      </div>
      <!----------ENDS--------------->

      <div class="flex flex-wrap justify-center pl-2 overflow-hidden">
        <div class="flex px-5 py-2 text-sm bg-transparent bg-white w-99"> 
          <div class="flex bg-white gap-y-4 w-99">
            <div class="flex flex-wrap w-full overflow-hidden">

              <!--AREA-->
              <div class="w-full overflow-hidden mmd:w-2/4">
                <span class="items-center text-red-700 material-icons">
                  delivery_dining
                </span>
                <label class="inline-block pt-1 pl-1 text-sm font-normal text-gray-800 align-top">Delivering at Banquerohan area only</label> 
              </div>

                <!--SHOPPING LOCATION-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="pl-3 text-red-700 sm:pl-0 md:pl-3 mmd:pl-3 material-icons ssm:pl-0">
                    shopping_cart
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">Shopping at downtown Legazpi</label>
              </div>
              
                <!--TIME-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="text-red-700 material-icons ">
                    watch_later  
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 10 AM</label>
              </div>
              
                <!--TRANSPO-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="pl-3 text-red-700 material-icons mmd:pl-3">
                    directions_car_filled
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">Car</label>
              </div>
              
                <!--SIZES OF BAGS-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="text-red-700 material-icons">
                    shopping_bag
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Up to 3 medium or 2 large bags</label>
              </div>
              
                <!--MODE OF PAYMENT-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="pl-4 text-red-700 material-icons mmd:pl-3">
                    payments
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Pay upon delivery</label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!---------------POST MESSAGE------------->
      <div class="flex flex-wrap justify-center pl-2 overflow-hidden">
        <div class="flex py-3 text-sm bg-transparent bg-white w-99">
          <div class="flex items-center px-5 py-2 bg-white w-99">
            <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg">
                Hi! I'll be going to SM City Legazpi tommorow. If there's anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request.
            </div>
          </div> 
        </div>
      </div>

      <!---------------SEND, MESSAGE, SHARE------------->
      <div class="flex flex-wrap justify-center pl-2 mb-8 overflow-hidden">
        <div class="flex py-3 text-sm bg-transparent bg-white rounded-b-lg w-99">
          <div class="flex items-center justify-center py-4 tracking-wide bg-white rounded-b-lg w-99 mmd:px-5 ">
              
              <!--SEND A REQUEST/OFFER-->
            <a href="#" class="font-bold focus:text-gray-600">
              <span class="mmd:pr-2 material-icons mmd:md-24 ">
                send
              </span>
              <label class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block">Send Offer</label>
            </a>

              <!--CHAT-->
            <a href="#" class="font-bold focus:text-gray-600">
              <span class="pr-2 mmd:pl-20 material-icons md-24 ">
                forum
              </span>
              <label class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block ">Chat</label>
            </a>

              <!--SHARE-->
            <a href="#" class="font-bold focus:text-gray-600">
              <span class="pr-2 mmd:pl-20 material-icons md-24">
                    share
              </span>
              <label class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block ">Share</label>
            </a>
          </div> 
        </div>
      </div>
          <!----------------------END--------------->
</div>


<!----------------------------MOBILE VERSION---------------------->
<div class="mobileVersion">
      <!---------------START OF SEARCH MOBILE------------->
      <div class="sticky w-full h-14 top-16 bg-red-search"></div>

      <!---------------SEARCH BAR------------->
      <div class="sticky flex flex-wrap justify-center overflow-hidden top-20">
        <div class="relative flex items-center justify-center w-2/5 px-8 bg-transparent rounded-lg"> 
          <span class="absolute right-52 inset-y-7 material-icons ">
            search
          </span>
          <div class="justify-center mmd:pl-3"> 
            <input class="px-3 pl-12 my-5 text-left bg-white border rounded-full appearance-none h-9 w-80 text-balticsea placeholder-balticsea lg:text-base mmd:text-base focus:outline-none focus:shadow-outline-blue focus:border-blue-300 ssm:text-xs" placeholder="Search">
          </div>
        </div>
      </div>
        <!---------------ENDS------------->

      <!---------------FILTER MOBILE------------->
      <div class="flex flex-wrap justify-center pt-2 overflow-hidden">
        <div class="flex justify-center px-3 text-sm bg-transparent rounded-lg w-99"> 
          <div class="flex ">

            <div class="flex items-center p-4 mb-2 mr-2"><label class="font-semibold">Filter:  </label>
              <input type="radio" id="all-post" name="radio" class="ml-4 text-red-700 border rounded-full form-radio">
              <label for="all-post" class="pl-2">All Post</label>
            </div>

            <div class="flex items-center mb-2 mr-2">
              <input type="radio" id="shopping-offer" name="radio" class="text-red-700 border rounded-full form-radio">
                <label for="shopping-offers" class="pl-2">Shopping Offers</label>
            </div>

            <div class="flex items-center p-2 mb-2 mr-2">
              <input type="radio" id="order-requests" name="radio" class="text-red-700 border rounded-full form-radio">
              <label for="order-request" class="pl-2">Order Requests</label>
            </div>

            <div class="flex items-center mb-2 mr-2 ">
              <input type="radio" id="nearby" name="radio" class="text-red-700 border rounded-full form-radio">
              <label for="nearby" class="pl-2">Nearby</label>
            </div>
          </div>
        </div>
      </div>
      <!---------------END OF FILTER MOBILE------------->

      <!---------------RESULT (PEOPLE)------------->
      <div class="flex flex-wrap justify-center px-4 overflow-hidden">
        <div class="flex px-5 py-4 text-sm bg-transparent bg-white rounded-lg w-99"> 
          <button class="rounded-full left-2 mmd:w-12 mmd:h-12 border-1 focus:outline-none">
           <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </button>
          <div class="ml-2">
            <h5 class="pt-1 font-bold mmd:text-base">
              Mark Aral
              <span class="inline-block text-blue-900 align-middle material-icons md-18">
                  verified
              </span> 
              <button class="absolute px-3 text-xs font-semibold border rounded-full right-28 text-waterloo border-waterloo focus:outline-none">
                Following
              </button>
              <button class="absolute px-3 text-xs font-semibold text-black border border-black rounded-full focus:outline-none right-8">
                Message
              </button>
            </h5>
            <p class="pt-1 text-xs font-normal text-gray-400">
              <span>
                Lives in Banquerohan, Legazpi City
              </span>
            </p>
          </div> 
        </div>
      </div>
      <!---------------ENDS------------->

      <!---------------RESULT (PEOPLE)------------->
        <div class="flex flex-wrap justify-center px-4 overflow-hidden pt-7 ">
          <div class="flex px-5 py-4 text-sm bg-transparent bg-white rounded-lg w-99"> 
            <button class="rounded-full left-2 mmd:w-12 mmd:h-12 border-1 focus:outline-none">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
            <div class="ml-2">
              <h5 class="pt-1 font-bold mmd:text-base">
              Mark Aral
                <span class="inline-block text-blue-900 align-middle material-icons md-18">
                  verified
                </span> 
                <button class="absolute px-3 text-xs font-semibold border rounded-full right-28 text-waterloo border-waterloo focus:outline-none">
                Following
                </button>
                <button class="absolute px-3 text-xs font-semibold text-black border border-black rounded-full focus:outline-none right-8">
                Message
               </button>
              </h5>
              <p class="pt-1 text-xs font-normal text-gray-400">
                <span>
                  Lives in Banquerohan, Legazpi City
                </span>
              </p>
            </div> 
          </div>
        </div>
        <!---------------ENDS------------->
               
        <!---------------RESULT (POST)------------->       
        <div class="flex flex-wrap justify-center px-4 overflow-hidden pt-7 ">
          <div class="flex px-5 py-4 text-sm bg-transparent bg-white rounded-t-lg w-99"> 
             <button class="rounded-full focus:outline-none left-2 mmd:w-12 mmd:h-12 border-1">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
            <div class="ml-2">
              <h5 class="font-bold mmd:text-base">
              Mark Aral
                <span class="inline-block text-blue-900 align-middle material-icons md-18">
                  verified
                </span>
                <label class="font-normal text-gray-400 align-middle">posted a shopping offer</label>
                  <button @click="edit1=!edit1" class="absolute right-11">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-11 h-min w-30 ring-2 ring-gray-200">
                      <router-link to="#"  class="flex flex-row gap-x-2 ">
                        <span class="text-gray-500 material-icons">mode</span>Edit Post</router-link>
                      <router-link to="#" class="flex flex-row gap-x-2"> 
                        <span class="text-gray-500 material-icons">delete</span>Delete</router-link>
                    </div>
                    </div> 
              </h5>
              <p class="text-sm font-normal text-gray-400">
                <span>
                   13 hours ago
                </span>
              </p>
            </div> 
          </div>
        </div>
        <!---------------OFFER STATUS------------->
        <div class="flex flex-wrap justify-center px-4 overflow-hidden">
          <div class="flex px-5 pb-3 text-sm bg-transparent bg-white w-99"> 
            <div class="p-1 px-2 text-sm font-semibold bg-gray-200 rounded-full text-red-danger">
              <span class="inline-block align-middle material-icons">
                  remove_circle_outline
              </span>
              <label class="pl-1 align-bottom">No longer Accepting Requests</label> 
            </div>
          </div>
        </div><!---------------ENDS------------->
          
        <!---------------DETAILS------------->
        <div class="flex flex-wrap justify-center px-4 overflow-hidden">
          <div class="flex px-5 text-sm bg-transparent bg-white w-99">
            <div class="flex bg-white gap-y-4">
              <div class="flex flex-wrap w-full overflow-hidden">
               
               <!--AREA-->
                  <div class="w-full overflow-hidden mmd:w-2/4">
                    <span class="items-center text-red-700 material-icons">
                    delivery_dining
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm font-normal text-gray-800 align-top">Delivering at Banquerohan area only</label> 
                 </div>

                <!--SHOPPING LOCATION-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="pl-3 text-red-700 sm:pl-0 md:pl-3 mmd:pl-3 material-icons ssm:pl-0">
                    shopping_cart
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">Shopping at downtown Legazpi</label>
                </div>
              
                <!--TIME-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="text-red-700 material-icons ">
                    watch_later  
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 10 AM</label>
                </div>
              
                <!--TRANSPO-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="text-red-700 material-icons mmd:pl-3">
                    directions_car_filled
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">Car</label>
                </div>
              
                <!--SIZES OF BAGS-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="text-red-700 material-icons">
                    shopping_bag
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Up to 3 medium or 2 large bags</label>
                </div>
              
                <!--MODE OF PAYMENT-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="text-red-700 material-icons mmd:pl-3">
                    payments
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Pay upon delivery</label>
                </div>
              </div>
            </div>
          </div>
        </div><!---------------END OF DETAILS------------->

        <!---------------POST MESSAGE------------->
        <div class="flex flex-wrap justify-center px-4 overflow-hidden">
          <div class="flex pb-3 text-sm bg-transparent bg-white w-99">
            <div class="flex items-center px-5 py-2 bg-white">
              <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg">
                Hi! I'll be going to SM City Legazpi tommorow. If there's anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request.
              </div>
            </div> 
          </div>
        </div><!---------------ENDS------------->

        <div class="flex flex-wrap justify-center px-4 overflow-hidden">
          <div class="flex justify-center w-full px-5 pb-5 font-bold tracking-wide bg-white rounded-b-lg">
            <hr>

            <!--SEND A REQUEST/OFFER-->
              <a href="#" class="font-bold focus:text-gray-600">
                <span class="pr-2 material-icons md-24 ">
                  send
                </span>
                <label class="hidden text-sm align-top cursor-pointer ">Send Offer</label>
              </a>

              <!--CHAT-->
              <a href="#" class="focus:text-gray-600">
                <span class="pl-20 pr-2 material-icons md-24">
                  forum
                </span>
                <label class="hidden text-sm align-top cursor-pointer">Chat</label>
              </a>

              <!--SHARE-->
              <a href="#" class="focus:text-gray-600">
                <span class="pl-20 pr-2 material-icons md-24">
                  share
                </span>
                <label class="hidden text-sm align-top cursor-pointer">Share</label>
              </a>
            </div>
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
    /*minimized desktop version and mobile version
    screen sizes lesser than 600px*/
   
    .desktopVersion{
      display:none;
      }
    .mobileVersion{
      display:inline;
    }
     
    /*for screen sizes 600px++*/
    @media only screen and (min-width: 700px) {
      .desktopVersion{
        display:inline;}
      .mobileVersion{
       display:none;
    }
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


 export default {
    data() {
    return {
      postModalVisible: false,
      edit1:false,
            

        }
    },

  components:{
     Navbar
     
  }

}

</script>
