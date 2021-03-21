<template class="font-nunito">
<Navbar/>
<!--Desktop Version--->
<div class="desktopVersion">
    
   <!--START OF 'POST OFFER OR REQUEST' CODE-->
      <div class="flex flex-wrap overflow-hidden bg-gray-bgcolor mmd:pt-12">
        <div class="overflow-hidden mmd:w-3/5">
          <div class="flex flex-wrap mt-10 rounded-lg mmd:w-3/4 mmd:px-0 mmd:float-right sm:w-full ">
            <div class="flex items-center w-full px-8 bg-white rounded-lg">
              <button class="w-12 h-12 rounded-full border-1">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="justify-center mmd:pl-3 "> 
                <!--modal-->
                <PostModal v-if="postModalVisible" @closeModal="listener"/>
                <button  @click="togglePostModal" class="float-right px-3 my-5 text-left text-gray-500 placeholder-gray-500 bg-gray-200 border 
                rounded-full appearance-none lg:text-base mmd:text-base sm:w-96.5 md:w-97 ssm:h-12 mmd:h-14 focus:outline-none 
                focus:shadow-outline-blue focus:border-blue-300 ssm:text-xs">Post a shopping offer or an order request
                </button>
              </div>
            </div>
          </div>
          <!--START OF 'FILTER' CODE-->
          <div class="flex flex-wrap hidden mmd:float-right lg:float-right md:block mmd:w-3/4 mmd:px-0 ">
            <div class="w-full px-5 text-sm font-normal rounded-lg">
              <div class="flex px-2">
                <div class="flex items-center p-4 mb-2 mr-2"><label class="font-semibold">Filter:</label>
                  <input type="radio" id="all-post" name="radio" class="ml-2 text-red-700 border rounded-full form-radio">
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
          <!--END-->
          <!--START OF 'NO LONGER ACCEPTING OFFERS' POST-->
          <div class="flex flex-wrap mmd:float-right lg:float-right md:w-3/4 lg:w-3/4 w:3/4 mmd:w-3/4 mmd:px-0 ">
            <div class="flex items-center w-full py-5 pl-5 bg-white rounded-t-lg pr-7">
              <button class="top-0 left-0 rounded-full mmd:w-12 mmd:h-12 border-1">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2">
                <h5 class="font-semibold mmd:text-base">
                 Wanda
                  <span class="inline-block text-blue-900 align-middle material-icons md-18">
                    verified
                  </span>
                  <label class="pl-1 font-normal text-gray-400 align-middle">posted a shopping offer</label>
                  <button @click="edit1=!edit1" class="absolute right-99">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-99 h-min w-30 ring-2 ring-gray-200">
                      <router-link to="#" class="flex flex-row gap-x-2 ">
                        <span class="text-gray-500 material-icons">mode</span>Edit Post</router-link>
                      <router-link to="#" class="flex flex-row gap-x-2"> 
                        <span class="text-gray-500 material-icons">delete</span>Delete</router-link>
                    </div>
                    </div>
                 </h5>
                    <p class="text-sm font-normal text-gray-400">
                      <span>13 hours ago</span>
                    </p>
                  </div>
              </div>

            <!--NO LONGER ACCEPTING REQUESTS TEXT-->
            <div class="flex items-center w-full bg-white px-7">
              <div class="p-1 px-2 text-sm font-semibold bg-gray-200 rounded-full text-red-danger">
                <span class="inline-block align-middle material-icons">
                  remove_circle_outline
                  </span>
                  <label class="pl-1 align-bottom">No longer Accepting Requests</label> 
              </div>
            </div>

            <!--DETAILS-->
            <div class="flex w-full p-3 bg-white px-7 gap-y-4">
              <div class="flex flex-wrap w-full overflow-hidden">
                <!--AREA-->
                <div class="w-full overflow-hidden mmd:w-2/4">
                  <span class="items-center text-red-700 material-icons">
                    delivery_dining
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm font-normal text-gray-800 align-top">Delivering anywhere in Legazpi City</label> 
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
            
            <!--POST MESSAGE-->
            <div class="flex items-center w-full px-5 py-2 bg-white">
              <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg">
                Hi! I'll be going to SM City Legazpi tommorow. If there's anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request.
              </div>
            </div>

            <!--SEND, CHAT, SHARE-->
            <div class="flex items-center justify-center w-full py-4 tracking-wide bg-white rounded-b-lg mmd:px-5 ">
              
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
          <!--END OF NO LONGER ACCPETING REQUEST CODE-->

          <!--START OF ACCEPTING OFFERS CODE-->
          <div class="flex flex-wrap pt-8 mmd:float-right mmd:w-3/4 mmd:px-0">
            <div class="flex items-center w-full px-5 py-5 bg-white rounded-t-lg">
              <button class="rounded-full mmd:w-12 mmd:h-12 border-1">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2">
                <h5 class="font-bold mmd:text-base">
                  Monica
                   <span class="inline-block text-blue-900 align-middle material-icons md-18">
                     verified
                   </span>
                   <label class="pl-1 font-normal text-gray-400 align-middle">posted an order request</label>
                    <button @click="edit2=!edit2" class="absolute right-99">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit2" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-99 h-min w-30 ring-2 ring-gray-200">
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

            <!--OFFER STATUS-->
            <div class="flex items-center w-full pb-1 bg-white px-7">
              <div class="p-1 px-2 text-sm font-bold bg-gray-200 rounded-full text-waterloo">
                <span class="inline-block align-middle material-icons">
                  check_circle_outline
                  </span>
                  <label class="pl-1 align-bottom">Accepting Offers</label>
              </div>
            </div>

            <!--DETAILS-->
            <div class="flex items-center w-full p-3 bg-white px-7 gap-y-4">
              <div class="flex flex-wrap w-full overflow-hidden">
                <!--AREA-->
                <div class="w-full overflow-hidden mmd:w-2/4">
                  <span class="text-red-700 material-icons">
                    place
                    </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">Banquerohan,Legazpi City</label> 
                </div>
                
                <!--SHOPPING LOCATION-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="pl-3 text-red-700 material-icons mmd:pl-3">
                    shopping_cart
                    </span>
                    <label class="items-center inline-block pt-1 pl-1 text-sm text-gray-800 align-top">SM City Legazpi</label>
                </div>
              
                <!--TIME-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="text-red-700 material-icons">
                    watch_later  
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 8 am</label>
                </div>
              
                <!--MODE OF PAYMENT-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="pl-3 text-red-700 material-icons mmd:pl-3">
                    payments
                    </span>
                    <label class="items-center inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Payment First</label>
                </div>
              </div>
            </div>
            <!--END-->
            
           <!--SHOPPING LIST-->
            <div class="flex items-center w-full gap-y-4">
              <div class="w-full px-5 py-2 font-medium bg-white">
              <div class="flex flex-wrap w-full p-2 overflow-hidden bg-gray-200 rounded-lg">
              
                <div class="w-full overflow-hidden mmd:w-2/4 ">
                  <h2 class="pb-2 text-base">
                    Shopping List
                    <label class="pl-3 text-gray-500">8 items</label>
                    </h2>
                  <ul class="pl-3 text-sm leading-loose list-disc list-inside">
                    <li>Flour (1kg)</li>
                    <li>Vanilla extract (50ml)</li>
                    <li>brown sugar</li>
                    <li>cocoa powder</li>
                  </ul>
                </div>
                <div class="w-full overflow-hidden mmd:w-2/4">
                  <ul class="pl-5 text-sm leading-loose list-disc list-inside mmd:pt-7 ssm:pt-0 ssm:pl-3">
                    <li>baking soda</li>
                    <li>chocolate syrup</li>
                    <li>Powdered sugar</li>
                    <li>coconut oil</li>
                  </ul>
                </div>
              </div>
              <p class="px-5 py-5 text-sm font-medium leading-loose">
                Hi! If there's anyone  who can help me and sabuy my groceries, I would greatly appreciate it. Send me an offer if you are willing. Thanks!
              </p>
              <hr>
            </div>
          </div>
            
            <!--SEND, CHAT, SHARE-->
            <div class="flex items-center justify-center w-full px-5 py-4 pb-5 font-bold tracking-wide bg-white rounded-b-lg">
              <hr>
              <!--SEND A REQUEST/OFFER-->
              <a href="#" class="focus:text-gray-600">
                <span class="pr-2 material-icons md-24 ">
                send
                </span>
                <label class="align-top cursor-pointer mmd:text-base mmd:inline-block ">Send Offer</label>
              </a>

              <!--CHAT-->
              <a href="#" class="focus:text-gray-600">
                <span class="pl-20 pr-2 material-icons md-24">
                forum
                </span>
                <label class="align-top cursor-pointer mmd:text-base mmd:inline-block">Chat</label>
              </a>

              <!--SHARE-->
              <a href="#" class="focus:text-gray-600">
                <span class="pl-20 pr-2 material-icons md-24">
                share
                </span>
                <label class="align-top cursor-pointer mmd:text-base mmd:inline-block">Chat</label>
              </a> 
            </div>
          </div>
          <!--END-->

          <!--START OF ACCEPTING REQUESTS-->
          <div class="flex flex-wrap float-right w-3/4 pt-8 mmd:float-right mmd:w-3/4 mmd:px-0 ">
            <div class="flex items-center w-full p-5 bg-white rounded-t-lg px-7">
              <button class="rounded-full left-2 mmd:w-12 mmd:h-12border-1">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2">
                <h5 class="font-bold mmd:text-base">
                 Mark Aral
                  <span class="inline-block text-blue-900 align-middle material-icons md-18">
                    verified
                  </span>
                  <label class="pl-1 font-normal text-gray-400 align-middle">posted a shopping offer</label>
                   <button @click="edit3=!edit3" class="absolute right-99">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit3" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-99 h-min w-30 ring-2 ring-gray-200">
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
            <!--OFFER STATUS-->
            <div class="flex items-center w-full bg-white px-7">
              <div class="p-1 px-2 text-sm font-bold bg-gray-200 rounded-full text-waterloo">
                <span class="inline-block align-middle material-icons">
                  check_circle_outline
                  </span>
                  <label class="pl-1 align-bottom">Accepting Request</label>
              </div>
            </div>
            <!--DETAILS-->
            <div class="flex w-full p-3 bg-white px-7 gap-y-4">
              <div class="flex flex-wrap w-full overflow-hidden">
                <div class="w-full overflow-hidden mmd:w-2/4">
                  <span class="text-red-700 material-icons">
                    delivery_dining
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Delivering anywhere in Legazpi City</label> 
                </div>
                
                <!--AREA-->
                <div class="w-full overflow-hidden lg:my-px lg:px-px lg:w-1/2">
                  <span class="pl-3 text-red-700 material-icons mmd:pl-3">
                    shopping_cart
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Shopping at downtown Legazpi</label>
                </div>
              
                <!--TIME-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="text-red-700 material-icons">
                    watch_later  
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 10 AM</label>
                </div>
              
                <!--TRANSPO-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="pl-3 text-red-700 material-icons ssm:pl-0 mmd:pl-3">
                    directions_car_filled
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Car</label>
                </div>
              
                <!--SIZES OF BAGS-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="text-red-700 material-icons">
                    shopping_bag
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Up to 5 large bags</label>
                </div>
              
                <!--MODE OF PAYMENT-->
                <div class="w-full overflow-hidden mmd:w-1/2">
                  <span class="pl-3 text-red-700 material-icons mmd:pl-3">
                    payments
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Pay upon delivery</label>
                </div>
              </div>
            </div>
            
            <!--POST MESSAGE-->
            <div class="flex w-full px-5 py-2 bg-white">
              <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg">
                Will be doing some grocery shopping tommorow at downtown Legazpi. Send me a request if you need some pasabuying
              </div>
            </div>

            <!--SEND, CHAT, SHARE-->
            <div class="flex justify-center w-full px-5 py-4 tracking-wide bg-white rounded-b-lg">
              
              <!--SEND A REQUEST/OFFER-->
              <a href="#" class="font-bold focus:text-gray-600">
                <span class="pr-2 material-icons md-24 ">
                send
                </span>
                <label class="inline-block font-bold align-top cursor-pointer mmd:text-base mmd:inline-block ">Send Offer</label>
              </a>

              <!--CHAT-->
              <a href="#" class="focus:text-gray-600">
                <span class="pl-20 pr-2 material-icons md-24">
                forum
                </span>
                <label class="align-top cursor-pointer mmd:text-base mmd:inline-block ">Chat</label>
              </a>

              <!--SHARE-->
              <a href="#" class="focus:text-gray-600">
                <span class="pl-20 pr-2 material-icons md-24">
                    share
                </span>
                <label class="align-top cursor-pointer mmd:text-base mmd:inline-block ">Share</label>
              </a>
            </div>
          </div>
          <!--END OF ACCPETING REQUEST CODE-->

         <!--START OF 'ORDER TAKEN' CODE-->
         <div class="flex flex-wrap float-right w-3/4 pt-8 mmd:float-right lg:float-right md:w-3/4 lg:w-3/4 w:3/4 mmd:w-3/4 mmd:px-0">
          <div class="flex items-center w-full p-5 px-6 bg-white rounded-t-lg">
            <button class="rounded-full left-2 mmd:w-12 mmd:h-12 border-1">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
            <div class="ml-2">
              <h5 class="font-bold mmd:text-base">
              Sarah
                <span class="inline-block text-blue-900 align-middle material-icons md-18">
                  verified
                </span>
                <label class="pl-1 font-normal text-gray-400 align-middle">posted an order request</label>
                <button @click="edit4=!edit4" class="absolute right-99">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit4" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-99 h-min w-30 ring-2 ring-gray-200">
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
          <!--OFFER STATUS-->
          <div class="flex w-full pb-1 bg-white px-7">
            <div class="p-1 px-2 text-sm font-semibold bg-gray-200 rounded-full text-red-danger">
              <span class="inline-block align-middle material-icons">
                remove_circle_outline
                </span>
                <label class="pl-1 align-bottom">Order Taken</label>
                <span class="inline-block text-black align-middle md-18 material-icons">
                  arrow_drop_down
                  </span>
            </div>
          </div>
          <!--DETAILS-->
          <div class="flex w-full p-3 bg-white px-7 gap-y-4">
            <div class="flex flex-wrap w-full overflow-hidden">

              <!--AREA-->
              <div class="w-full overflow-hidden lg:my-px lg:px-px lg:w-2/4">
                <span class="text-red-700 material-icons">
                  place
                  </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">Banquerohan,Legazpi City</label> 
              </div>
              
              <!--SHOPPING LOCATION-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="pl-3 text-red-700 material-icons mmd:pl-3">
                  shopping_cart
                  </span>
                  <label class="pt-1 pl-1 text-sm text-gray-800 align-top">SM City Legazpi</label>
              </div>
            
              <!--TIME-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="text-red-700 material-icons">
                  watch_later  
                </span>
                <label class="pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 8 am</label>
              </div>
            
              <!--MODE OF PAYMENT-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="pl-3 text-red-700 material-icons mmd:pl-3">
                  payments
                  </span>
                  <label class="pt-1 pl-1 text-sm text-gray-800 align-top">Payment First</label>
              </div>
            </div>
          </div>
          <!--END-->
          
          <!--POST MESSAGE-->
          <div class="flex w-full gap-y-4">
            <div class="w-full px-5 py-2 text-base font-normal bg-white">
            <div class="flex flex-wrap w-full p-2 overflow-hidden bg-gray-200 rounded-lg">
              
              <!--SHOPPING LIST-->
              <div class="w-full overflow-hidden mmd:w-2/4">
                <h2 class="pb-2 text-base">
                  Shopping List
                  <label class="pl-3 text-gray-500">8 items</label>
                  </h2>
                <ul class="pl-3 text-sm leading-loose list-disc list-inside ">
                  <li>Flour (1kg)</li>
                  <li>Vanilla extract (50ml)</li>
                  <li>brown sugar</li>
                  <li>cocoa powder</li>
                </ul>
              </div>

              <div class="w-full overflow-hidden mmd:w-1/2">
                <ul class="pl-5 text-sm leading-loose list-disc list-inside mmd:pt-7 ssm:pt-0 ssm:pl-3 md:pl-3">
                  <li>baking soda</li>
                  <li>chocolate syrup</li>
                  <li>Powdered sugar</li>
                  <li>coconut oil</li>
                </ul>
              </div>
            </div>
            <p class="px-5 py-5 leading-loose font-sm">
              Hi! If there's anyone  who can help me and sabuy my groceries, I would greatly appreciate it. Send me an offer if you are willing. Thanks!
            </p>
            <hr>
            </div>
          </div>
          
          <!--SEND, CHAT, SHARE-->
          <div class="flex justify-center w-full px-5 py-4 pb-5 font-bold tracking-wide bg-white rounded-b-lg">
            <hr>
            <!--SEND A REQUEST/OFFER-->
            <a href="#" class="font-bold focus:text-gray-600">
              <span class="pr-2 material-icons md-24 ">
              send
              </span>
              <label class="align-top cursor-pointer mmd:text-base mmd:inline-block ">Send Offer</label>
            </a>

            <!--CHAT-->
            <a href="#" class="focus:text-gray-600">
              <span class="pl-20 pr-2 material-icons md-24">
              forum
              </span>
              <label class="align-top cursor-pointer mmd:text-base mmd:inline-block">Chat</label>
            </a>

            <!--SHARE-->
            <a href="#" class="focus:text-gray-600">
              <span class="pl-20 pr-2 material-icons md-24">
                  share
              </span>
              <label class="align-top cursor-pointer mmd:text-base mmd:inline-block">Share</label>
            </a>
          </div>
        </div>
        <!--END-->

        <!--START OF 'CANCELLED' CODE -->
        <div class="flex flex-wrap float-right w-3/4 pt-8 mmd:float-right mmd:w-3/4 mmd:px-0">
          <div class="flex w-full p-5 bg-white rounded-t-lg px-7">
            <button class="rounded-full left-2 mmd:w-12 mmd:h-12 border-1">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
            <div class="ml-2">
              <h5 class="font-bold mmd:text-base">
               Gwen Lopez
                <span class="inline-block text-blue-900 align-middle material-icons md-18">
                  verified
                </span>
                <label class="pl-1 font-normal text-gray-400 align-middle">posted a shopping offer</label>
                <button @click="edit5=!edit5" class="absolute right-99">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit5" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-99 h-min w-30 ring-2 ring-gray-200">
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
          <!--OFFER STATUS-->
          <div class="flex w-full bg-white px-7">
            <div class="px-3 py-1 text-sm font-bold bg-gray-200 rounded-full text-warning ">
              <span class="inline-block align-top material-icons md-24">
                radio_button_unchecked
                </span>
                <label class="pl-1 align-bottom">Cancelled</label>
            </div>
          </div>
          <!--DETAILS-->
          <div class="flex w-full p-3 bg-white px-7 gap-y-4">
            <div class="flex flex-wrap w-full overflow-hidden">

              <!--AREA-->
              <div class="w-full overflow-hidden mmd:w-2/4">
                <span class="text-red-700 material-icons">
                  delivery_dining
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Delivering anywhere in Legazpi City</label> 
              </div>
              
              <!--SHOPPING LOCATION-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="pl-3 text-red-700 material-icons mmd:pl-3">
                  shopping_cart
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Shopping at downtown Legazpi</label>
              </div>
            
              <!--TIME-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="text-red-700 material-icons">
                  watch_later  
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 10 AM</label>
              </div>
            
              <!--TRANSPO-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="pl-3 text-red-700 material-icons mmd:pl-3">
                  directions_car_filled
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Car</label>
              </div>
            
              <!--SIZES OF BAGS-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="text-red-700 material-icons">
                  shopping_bag
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Up to 5 large bags</label>
              </div>
            
              <!--MODE OF PAYMENT-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="pl-3 text-red-700 material-icons mmd:pl-3">
                  payments
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Pay upon delivery</label>
              </div>
            </div>
          </div>
          
          <!--POST MESSAGE-->
          <div class="flex w-full px-5 py-2 bg-white">
            <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg">
              Will be doing some grocery shopping tommorow at downtown Legazpi. Send me a request if you need some pasabuying!
            </div>
          </div>

          <!--SEND, CHAT, SHARE-->
          <div class="flex justify-center w-full px-5 py-4 mb-10 tracking-wide bg-white rounded-b-lg">
            
            <!--SEND A REQUEST/OFFER-->
            <a href="#" class="font-extrabold focus:text-gray-600">
              <span class="pr-2 material-icons md-24 ">
                send
                </span>
              <label class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block">Send Offer</label>
            </a>

            <!--CHAT-->
            <a href="#" class="font-bold focus:text-gray-600 text-balticsea">
              <span class="pl-20 pr-2 material-icons md-24">
              forum
              </span>
              <label class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block">Chat</label>
            </a>

            <!--SHARE-->
            <a href="#" class="font-bold focus:text-gray-600">
              <span class="pl-20 pr-2 material-icons md-24">
                  share
              </span>
              <label class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block">Share</label>
            </a>
          </div>
        </div>
        <!--END OF 'CANCELLED' CODE-->
      </div>
        
        <!--START OF SHOPPING LISTS-->
        <div class="w-2/5 pt-10 overflow-hidden pl-7">
          <div class="flex flex-wrap visible hidden float-left font-nunito md:block">
            <div class="pt-5 pb-3 bg-white shadow-xl w-72 px-7 rounded-xl">
               <h3 class="font-bold text-center uppercase text-1xl">Your shopping lists</h3><br>
               <hr>
               
               <!--SHOPPING LIST 1-->
               <h3 class="pt-2 font-bold leading-loose tracking-wide">Shopping List 1
                 <a href="" class="pl-16 text-sm font-bold text-blue-700">Edit</a>
                </h3> 
                    <ul class="pl-5 text-sm text-gray-500 list-disc list-inside ">
                      <li>Flour</li>
                      <li>vanilla extract</li>
                      <li>brown sugar</li>
                      <li>cocoa powder</li>
                    </ul>
                    <label class="text-sm leading-loose">
                      4 more items...
                    </label>
                    <hr>
  
                    <!--SHOPPING LIST 2-->
                    <h3 class="pt-2 font-semibold leading-loose tracking-wide">Shopping List 2
                      <a href="" class="pl-16 text-sm font-bold text-blue-700">Edit</a>
                    </h3>
                    <ul class="pl-5 text-sm text-gray-500 list-disc list-inside ">
                      <li>Flour</li>
                      <li>vanilla extract</li>
                      <li>brown sugar</li>
                      <li>cocoa powder</li>
                    </ul>
                    <label class="pb-3 text-sm leading-loose">
                      4 more items...
                    </label>
                    <hr>
                    
                    <!--CREATE NEW SHOPPING LIST BUTTON-->
                    <div class="flex justify-center py-5">
                      <button class="w-full px-5 py-2 text-sm text-red-700 uppercase transition-colors duration-150 border-2 border-red-700 text-bold h-11 rounded-3xl focus:outline-none">
                        <a href="#">
                          Create new
                        </a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--ends-->
            </div>
          </div>

<!-----------------------------------------------Mobile Version------------------------------------------------------------------------>
<div class="justify-center mobileVersion">
  
    <!--START OF 'POST OFFER OR REQUEST' CODE-->
      <div class="flex flex-wrap pt-24 overflow-hidden">
        <div class="overflow-hidden ">
          <div class="flex flex-wrap rounded-lg w-96.5 px-5 xs:w-full">
            <div class="flex items-center w-full px-8 bg-white rounded-lg ">
              <button class="w-12 h-12 rounded-full border-1">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="justify-center pl-2"> 
                <button class="float-right px-3 my-5 text-left text-gray-500 placeholder-gray-500 bg-gray-200 border rounded-full appearance-none xs:w-97.5 w-96.5 h-12 focus:outline-none focus:shadow-outline-blue 
                 focus:border-blue-300 text-xs">Post a shopping offer or an order request
                </button>
              </div>
            </div>
          </div>

          <!--START OF 'FILTER' MOBILE VIEW CODE-->
          <div class="flex flex-wrap py-3 visible w-96.5 px-7 pt-7 xs:w-full">
            <div class="flex w-full pl-6">
              <label class="pt-2 pr-6 font-semibold">Filter:</label>
              <select class="block w-full px-4 py-3 pr-8 text-sm leading-tight bg-white border-none rounded appearance-none focus:border-none">
                    <option>All post</option>
                    <option>Shopping Offer</option>
                    <option>Order Requests</option>
                    <option>Nearby</option>
                  </select>
            </div>
          </div>
          <!--END-->

          <!--START OF 'NO LONGER ACCEPTING OFFERS' POST-->
          <div class="flex flex-wrap w-96.5 px-5 pt-7 xs:w-full">
            <div class="flex items-center w-full py-5 pl-5 bg-white rounded-t-lg pr-7">
              <button class="top-0 left-0 w-10 h-10 rounded-full border-1">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2">
                <h5 class="text-sm font-semibold ">
                 Wanda
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

            <!--NO LONGER ACCEPTING REQUESTS TEXT-->
            <div class="flex items-center w-full bg-white px-7">
              <div class="p-1 px-2 text-sm font-semibold bg-gray-200 rounded-full text-red-danger">
                <span class="inline-block align-middle material-icons">
                  remove_circle_outline
                  </span>
                  <label class="pl-1 align-bottom">No longer Accepting Requests</label> 
              </div>
            </div>

            <!--DETAILS-->
            <div class="flex w-full p-3 bg-white px-7 gap-y-4">
              <div class="flex flex-wrap w-full overflow-hidden">
                <!--AREA-->
                <div class="w-full overflow-hidden ">
                  <span class="items-center text-red-700 material-icons">
                    delivery_dining
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm font-normal text-gray-800 align-top">Delivering anywhere in Legazpi City</label> 
                </div>
                
                <!--SHOPPING LOCATION-->
                <div class="w-full overflow-hidden ">
                  <span class="pl-0 text-red-700 material-icons">
                    shopping_cart
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">Shopping at downtown Legazpi</label>
                </div>
              
                <!--TIME-->
                <div class="w-full overflow-hidden ">
                  <span class="text-red-700 material-icons ">
                    watch_later  
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 10 AM</label>
                </div>
              
                <!--TRANSPO-->
                <div class="w-full overflow-hidden ">
                  <span class="pl-0 text-red-700 material-icons">
                    directions_car_filled
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">Car</label>
                </div>
              
                <!--SIZES OF BAGS-->
                <div class="w-full overflow-hidden ">
                  <span class="text-red-700 material-icons">
                    shopping_bag
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Up to 3 medium or 2 large bags</label>
                </div>
              
                <!--MODE OF PAYMENT-->
                <div class="w-full overflow-hiddenw-1/2">
                  <span class="pl-0 text-red-700 material-icons">
                    payments
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Pay upon delivery</label>
                </div>
              </div>
            </div>
            
            <!--POST MESSAGE-->
            <div class="flex items-center w-full px-5 py-2 bg-white">
              <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg">
                Hi! I'll be going to SM City Legazpi tommorow. If there's anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request.
              </div>
            </div>

            <!--SEND, CHAT, SHARE-->
            <div class="flex items-center justify-center w-full px-5 py-4 pb-5 font-bold tracking-wide bg-white rounded-b-lg">
              <hr>
              <!--SEND A REQUEST/OFFER-->
              <a href="#" class="focus:text-gray-600">
                <span class="pr-2 material-icons md-24 ">
                send
                </span>
                <label class="hidden text-sm align-top cursor-pointer">Send Offer</label>
              </a>

              <!--CHAT-->
              <a href="#" class="focus:text-gray-600">
                <span class="pl-20 pr-2 material-icons md-24">
                forum
                </span>
                <label class="hidden align-top cursor-pointertext-sm">Chat</label>
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
          <!--END OF NO LONGER ACCPETING REQUEST CODE-->

          <!--START OF ACCEPTING OFFERS CODE-->
          <div class="flex flex-wrap w-96.5 px-5 pt-7 xs:w-full">
            <div class="flex items-center w-full px-5 py-5 bg-white rounded-t-lg">
              <button class="w-10 h-10 rounded-full border-1">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2">
                <h5 class="text-sm font-bold">
                  Monica
                   <span class="inline-block text-blue-900 align-middle material-icons md-18">
                     verified
                   </span>
                   <label class="font-normal text-gray-400 align-middle">posted an order request</label>
                   <button @click="edit2=!edit2" class="absolute right-11">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit2" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-11 h-min w-30 ring-2 ring-gray-200">
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

            <!--OFFER STATUS-->
            <div class="flex items-center w-full pb-1 bg-white px-7">
              <div class="p-1 px-2 text-sm font-bold bg-gray-200 rounded-full text-waterloo">
                <span class="inline-block align-middle material-icons">
                  check_circle_outline
                  </span>
                  <label class="pl-1 align-bottom">Accepting Offers</label>
              </div>
            </div>

            <!--DETAILS-->
            <div class="flex items-center w-full p-3 bg-white px-7 gap-y-4">
              <div class="flex flex-wrap w-full overflow-hidden">
                <!--AREA-->
                <div class="w-full overflow-hidden ">
                  <span class="text-red-700 material-icons">
                    place
                    </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">Banquerohan,Legazpi City</label> 
                </div>
                
                <!--SHOPPING LOCATION-->
                <div class="w-full overflow-hidden ">
                  <span class="pl-3 text-red-700 material-icons ssm:pl-0 mmd:pl-3">
                    shopping_cart
                    </span>
                    <label class="items-center inline-block pt-1 pl-1 text-sm text-gray-800 align-top">SM City Legazpi</label>
                </div>
              
                <!--TIME-->
                <div class="w-full overflow-hidden">
                  <span class="text-red-700 material-icons">
                    watch_later  
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 8 am</label>
                </div>
              
                <!--MODE OF PAYMENT-->
                <div class="w-full overflow-hidden ">
                  <span class="pl-0 text-red-700 material-icons">
                    payments
                    </span>
                    <label class="items-center inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Payment First</label>
                </div>
              </div>
            </div>
            <!--END-->
            
           <!--SHOPPING LIST-->
            <div class="flex items-center w-full gap-y-4">
              <div class="w-full px-5 py-2 font-medium bg-white">
              <div class="flex flex-wrap w-full p-2 overflow-hidden bg-gray-200 rounded-lg">
              
                <div class="w-full overflow-hidden">
                  <h2 class="pb-2 text-base">
                    Shopping List
                    <label class="pl-3 text-gray-500">8 items</label>
                    </h2>
                  <ul class="pl-3 text-sm leading-loose list-disc list-inside">
                    <li>Flour (1kg)</li>
                    <li>Vanilla extract (50ml)</li>
                    <li>brown sugar</li>
                    <li>cocoa powder</li>
                  </ul>
                </div>
                <div class="w-full overflow-hidden ">
                  <ul class="pt-0 pl-3 text-sm leading-loose list-disc list-inside">
                    <li>baking soda</li>
                    <li>chocolate syrup</li>
                    <li>Powdered sugar</li>
                    <li>coconut oil</li>
                  </ul>
                </div>
              </div>
              <p class="px-5 py-5 text-sm font-medium leading-loose">
                Hi! If there's anyone  who can help me and sabuy my groceries, I would greatly appreciate it. Send me an offer if you are willing. Thanks!
              </p>
              <hr>
            </div>
          </div>
            
            <!--SEND, CHAT, SHARE-->
            <div class="flex items-center justify-center w-full px-5 py-4 pb-5 font-bold tracking-wide bg-white rounded-b-lg">
              <hr>
              <!--SEND A REQUEST/OFFER-->
              <a href="#" class="focus:text-gray-600">
                <span class="pr-2 material-icons md-24 ">
                send
                </span>
                <label class="hidden text-sm align-top cursor-pointer">Send Offer</label>
              </a>

              <!--CHAT-->
              <a href="#" class="focus:text-gray-600">
                <span class="pl-20 pr-2 material-icons md-24">
                forum
                </span>
                <label class="hidden align-top cursor-pointertext-sm">Chat</label>
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
          <!--END-->

          <!--START OF ACCEPTING REQUESTS-->
          <div class="flex flex-wrap justify-center w-96.5 px-5 pt-7 xs:w-full">
            <div class="flex items-center w-full p-5 bg-white rounded-t-lg px-7">
              <button class="w-10 h-10 rounded-full left-2 border-1">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2">
                <h5 class="text-sm font-bold ">
                 Mark Aral
                  <span class="inline-block text-blue-900 align-middle material-icons md-18">
                    verified
                  </span>
                  <label class="font-normal text-gray-400 align-middle">posted a shopping offer</label>
                  <button @click="edit3=!edit3" class="absolute right-11">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit3" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-11 h-min w-30 ring-2 ring-gray-200">
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
            <!--OFFER STATUS-->
            <div class="flex items-center w-full bg-white px-7">
              <div class="p-1 px-2 text-sm font-bold bg-gray-200 rounded-full text-waterloo">
                <span class="inline-block align-middle material-icons">
                  check_circle_outline
                  </span>
                  <label class="pl-1 align-bottom">Accepting Request</label>
              </div>
            </div>
            <!--DETAILS-->
            <div class="flex w-full p-3 bg-white px-7 gap-y-4">
              <div class="flex flex-wrap w-full overflow-hidden">
                <div class="w-full overflow-hidden ">
                  <span class="text-red-700 material-icons">
                    delivery_dining
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Delivering anywhere in Legazpi City</label> 
                </div>
                
                <!--AREA-->
                <div class="w-full overflow-hidden">
                  <span class="pl-0 text-red-700 material-icons">
                    shopping_cart
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Shopping at downtown Legazpi</label>
                </div>
              
                <!--TIME-->
                <div class="w-full overflow-hidden">
                  <span class="text-red-700 material-icons">
                    watch_later  
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 10 AM</label>
                </div>
              
                <!--TRANSPO-->
                <div class="w-full overflow-hidden ">
                  <span class="pl-0 text-red-700 material-icons ">
                    directions_car_filled
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Car</label>
                </div>
              
                <!--SIZES OF BAGS-->
                <div class="w-full overflow-hidden">
                  <span class="text-red-700 material-icons">
                    shopping_bag
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Up to 5 large bags</label>
                </div>
              
                <!--MODE OF PAYMENT-->
                <div class="w-full overflow-hidden ">
                  <span class="pl-0 text-red-700 material-icons ">
                    payments
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Pay upon delivery</label>
                </div>
              </div>
            </div>
            
            <!--POST MESSAGE-->
            <div class="flex w-full px-5 py-2 bg-white">
              <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg">
                Will be doing some grocery shopping tommorow at downtown Legazpi. Send me a request if you need some pasabuying
              </div>
            </div>

            <!--SEND, CHAT, SHARE-->
            <div class="flex justify-center w-full px-5 py-4 tracking-wide bg-white rounded-b-lg">
              
              <!--SEND A REQUEST/OFFER-->
              <a href="#" class="font-bold focus:text-gray-600">
                <span class="pr-2 material-icons md-24 ">
                send
                </span>
                <label class="hidden text-sm font-bold align-top cursor-pointer ">Send Offer</label>
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
          <!--END OF ACCPETING REQUEST CODE-->

         <!--START OF 'ORDER TAKEN' CODE-->
         <div class="flex flex-wrap justify-center w-96.5 px-5 pt-7 xs:w-full">
            <div class="flex items-center w-full p-5 bg-white rounded-t-lg px-7">
            <button class="w-10 h-10 rounded-full left-2 border-1">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
            <div class="ml-2">
              <h5 class="text-sm font-bold">
              Sarah
                <span class="inline-block text-blue-900 align-middle material-icons md-18">
                  verified
                </span>
                <label class="font-normal text-gray-400 align-middle">posted an order request</label>
                <button @click="edit4=!edit4" class="absolute right-11">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit4" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-11 h-min w-30 ring-2 ring-gray-200">
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
          <!--OFFER STATUS-->
          <div class="flex w-full pb-1 bg-white px-7">
            <div class="p-1 px-2 text-sm font-semibold bg-gray-200 rounded-full text-red-danger">
              <span class="inline-block align-middle material-icons">
                remove_circle_outline
                </span>
                <label class="pl-1 align-bottom">Order Taken</label>
                <span class="inline-block text-black align-middle md-18 material-icons">
                  arrow_drop_down
                  </span>
            </div>
          </div>
          <!--DETAILS-->
          <div class="flex w-full p-3 bg-white px-7 gap-y-4">
            <div class="flex flex-wrap w-full overflow-hidden">

              <!--AREA-->
              <div class="w-full overflow-hidden">
                <span class="text-red-700 material-icons">
                  place
                  </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top ">Banquerohan,Legazpi City</label> 
              </div>
              
              <!--SHOPPING LOCATION-->
              <div class="w-full overflow-hidden ">
                <span class="pl-0 text-red-700 material-icons">
                  shopping_cart
                  </span>
                  <label class="pt-1 pl-1 text-sm text-gray-800 align-top">SM City Legazpi</label>
              </div>
            
              <!--TIME-->
              <div class="w-full overflow-hidden ">
                <span class="text-red-700 material-icons">
                  watch_later  
                </span>
                <label class="pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 8 am</label>
              </div>
            
              <!--MODE OF PAYMENT-->
              <div class="w-full overflow-hidden ">
                <span class="pl-0 text-red-700 material-icons ">
                  payments
                  </span>
                  <label class="pt-1 pl-1 text-sm text-gray-800 align-top">Payment First</label>
              </div>
            </div>
          </div>
          <!--END-->
          
          <!--POST MESSAGE-->
          <div class="flex w-full gap-y-4">
            <div class="w-full px-5 py-2 text-base font-normal bg-white">
            <div class="flex flex-wrap w-full p-2 overflow-hidden bg-gray-200 rounded-lg">
              
              <!--SHOPPING LIST-->
              <div class="w-full overflow-hidden">
                <h2 class="pb-2 text-base">
                  Shopping List
                  <label class="pl-3 text-gray-500">8 items</label>
                  </h2>
                <ul class="pl-3 text-sm leading-loose list-disc list-inside ">
                  <li>Flour (1kg)</li>
                  <li>Vanilla extract (50ml)</li>
                  <li>brown sugar</li>
                  <li>cocoa powder</li>
                </ul>
              </div>

              <div class="w-full overflow-hidden">
                <ul class="pt-0 pl-3 text-sm leading-loose list-disc list-inside ">
                  <li>baking soda</li>
                  <li>chocolate syrup</li>
                  <li>Powdered sugar</li>
                  <li>coconut oil</li>
                </ul>
              </div>
            </div>
            <p class="px-5 py-5 leading-loose font-sm">
              Hi! If there's anyone  who can help me and sabuy my groceries, I would greatly appreciate it. Send me an offer if you are willing. Thanks!
            </p>
            <hr>
            </div>
          </div>
          
          <!--SEND, CHAT, SHARE-->
          <div class="flex justify-center w-full px-5 py-4 pb-5 font-bold tracking-wide bg-white rounded-b-lg">
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
        <!--END-->

        <!--START OF 'CANCELLED' CODE -->
        <div class="flex flex-wrap float-right w-96.5 px-5 pt-7 xs:w-full">
            <div class="flex items-center w-full p-5 bg-white rounded-t-lg px-7">
            <button class="w-10 rounded-full left-2 border-1">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
            <div class="ml-2">
              <h5 class="text-sm font-bold">
               Gwen Lopez
                <span class="inline-block text-blue-900 align-middle material-icons md-18">
                  verified
                </span>
                <label class="font-normal text-gray-400 align-middle">posted a shopping offer</label>
                <button @click="edit5=!edit5" class="absolute right-11">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit5" class="absolute py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl right-11 h-min w-30 ring-2 ring-gray-200">
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
          <!--OFFER STATUS-->
          <div class="flex w-full bg-white px-7">
            <div class="px-3 py-1 text-sm font-bold bg-gray-200 rounded-full text-warning ">
              <span class="inline-block align-top material-icons md-24">
                radio_button_unchecked
                </span>
                <label class="pl-1 align-bottom">Cancelled</label>
            </div>
          </div>
          <!--DETAILS-->
          <div class="flex w-full p-3 bg-white px-7 gap-y-4">
            <div class="flex flex-wrap w-full overflow-hidden">

              <!--AREA-->
              <div class="w-full overflow-hidden ">
                <span class="text-red-700 material-icons">
                  delivery_dining
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Delivering anywhere in Legazpi City</label> 
              </div>
              
              <!--SHOPPING LOCATION-->
              <div class="w-full overflow-hidden">
                <span class="pl-0 text-red-700 material-icons">
                  shopping_cart
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Shopping at downtown Legazpi</label>
              </div>
            
              <!--TIME-->
              <div class="w-full overflow-hidden">
                <span class="text-red-700 material-icons">
                  watch_later  
                </span>
                <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Tomorrow at 10 AM</label>
              </div>
            
              <!--TRANSPO-->
              <div class="w-full overflow-hidden">
                <span class="pl-0 text-red-700 material-icons">
                  directions_car_filled
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Car</label>
              </div>
            
              <!--SIZES OF BAGS-->
              <div class="w-full overflow-hidden">
                <span class="text-red-700 material-icons">
                  shopping_bag
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Up to 5 large bags</label>
              </div>
            
              <!--MODE OF PAYMENT-->
              <div class="w-full overflow-hidden mmd:w-1/2">
                <span class="pl-0 text-red-700 material-icons">
                  payments
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top">Pay upon delivery</label>
              </div>
            </div>
          </div>
          
          <!--POST MESSAGE-->
          <div class="flex w-full px-5 py-2 bg-white">
            <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg">
              Will be doing some grocery shopping tommorow at downtown Legazpi. Send me a request if you need some pasabuying!
            </div>
          </div>

          <!--SEND, CHAT, SHARE-->
          <div class="flex justify-center w-full px-5 py-4 tracking-wide bg-white rounded-b-lg">
            
            <!--SEND A REQUEST/OFFER-->
            <a href="#" class="font-extrabold focus:text-gray-600">
              <span class="pr-2 material-icons md-24 ">
                send
                </span>
              <label class="hidden text-sm font-bold align-top cursor-pointer">Send Offer</label>
            </a>

            <!--CHAT-->
            <a href="#" class="font-bold focus:text-gray-600 text-balticsea">
              <span class="pl-20 pr-2 material-icons md-24">
              forum
              </span>
              <label class="hidden text-sm font-bold align-top cursor-pointer">Chat</label>
            </a>

            <!--SHARE-->
            <a href="#" class="font-bold focus:text-gray-600">
              <span class="pl-20 pr-2 material-icons md-24">
                  share
              </span>
              <label class="hidden text-sm font-bold align-top cursor-pointer">Share</label>
            </a>
          </div>
        </div>
        <!--END OF 'CANCELLED' CODE-->
      </div>
        

        <!--START OF SHOPPING LISTS-->
        <div class="w-2/5 overflow-hidden pl-7">
          <div class="flex flex-wrap visible hidden float-left font-nunito ">
            <div class="pt-5 pb-3 bg-white shadow-xl w-72 px-7 rounded-xl">
               <h3 class="font-bold text-center uppercase text-1xl">Your shopping lists</h3><br>
               <hr>
               
               <!--SHOPPING LIST 1-->
               <h3 class="pt-2 font-bold leading-loose tracking-wide">Shopping List 1
                 <a href="" class="pl-16 text-sm font-bold text-blue-700">Edit</a>
                </h3> 
                    <ul class="pl-5 text-sm text-gray-500 list-disc list-inside ">
                      <li>Flour</li>
                      <li>vanilla extract</li>
                      <li>brown sugar</li>
                      <li>cocoa powder</li>
                    </ul>
                    <label class="text-sm leading-loose">
                      4 more items...
                    </label>
                    <hr>
                    
                    
                    <!--SHOPPING LIST 2-->
                    <h3 class="pt-2 font-semibold leading-loose tracking-wide">Shopping List 2
                      <a href="" class="pl-16 text-sm font-bold text-blue-700">Edit</a>
                    </h3>
                    <ul class="pl-5 text-sm text-gray-500 list-disc list-inside ">
                      <li>Flour</li>
                      <li>vanilla extract</li>
                      <li>brown sugar</li>
                      <li>cocoa powder</li>
                    </ul>
                    <label class="pb-3 text-sm leading-loose">
                      4 more items...
                    </label>
                    <hr>
                    
                    <!--CREATE NEW SHOPPING LIST BUTTON-->
                    <div class="flex justify-center py-5">
                      <button class="w-full px-5 py-2 text-sm text-red-700 uppercase transition-colors duration-150 border-2 border-red-700 text-bold h-11 rounded-3xl focus:outline-none">
                        <a href="#">
                          Create new
                        </a>
                      </button>
                    </div>
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
</style>

<script>
import Navbar from './Navbar'
import PostModal from "./PostModal"

 export default {
    data() {
    return {
      postModalVisible: false,
      edit1:false,
      edit2:false,
      edit3:false,
      edit4:false,
      edit5:false,
      show:false,
      share1:false,
    }
  },
  components: {
    Navbar,
    PostModal
  },
  methods:{
    togglePostModal(){
      this.postModalVisible = !this.postModalVisible
    },
    listener(){
      this.postModalVisible = false;
    }
  }
}
</script>