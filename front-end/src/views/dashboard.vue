<template class="font-nunito bg-gray-bgcolor">
<Navbar/>
    
   <!--START OF 'POST OFFER OR REQUEST' CODE-->
      <div class="flex flex-wrap pt-12 overflow-hidden vs:pt-9 bg-gray-bgcolor vs:flex-col sm:flex-col font-nunito md:flex-col">
    <div class="w-3/5 overflow-hidden mobile-view-w md:w-full">
      <div class="flex flex-wrap float-right pt-12 rounded-lg 2xl:w-8/12 md:w-full xl:w-3/4 vs:justify-center vs:w-full sm:w-full vs:mt-1 lg:w-4/5">
         <div class="relative flex items-center justify-center py-2 pl-6 bg-white shadow-md sm:w-full vs:px-0 md:w-full md:pl-0 md:py-0 sm:py-0 lg:w-full vs:pl-0 md:rounded-none mobile-view-w sm:rounded-none 2xl:w-full vs:justify-center rounded-xl vs:rounded-none xl:w-full">
            <button class="absolute w-12 h-12 rounded-full left-7 border-1 vs:left-5 focus:outline-none">
              <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </button>
            <div class="justify-center pl-3 mx-5 vs:pl-5 vs:mr-7 md:pl-20 md:mx-0 sm:pr-7 md:float-right md:w-full ml-15 2xl:w-full lg:w-full xl:w-full vs:w-5/6 sm:w-11/12 md:pr-7"> 
              <!--modal-->
              <PostModal v-if="postModalVisible" @closeModal="listener"/>
                <button  @click="togglePostModal" class="float-right px-3 py-2 my-5 text-base text-left text-gray-500 placeholder-gray-500 bg-gray-200 border rounded-full appearance-none xl:w-full lg:w-full 2xl:w-full vs:my-3 h-14 vs:w-full vs:h-11 md:w-11/12 sm:w-full vs:text-base md:mx-10 w-97 sm:text-lg focus:outline-none focus:shadow-outline-blue focus:border-blue-300">Post a shopping offer<span class="vs:hidden sm:hidden lg:mx-0"> or an order request</span>
              </button>
            </div>
          </div>
        </div>

          <!--START OF 'FILTER' CODE-->
          <div class="flex flex-wrap w-3/4 px-0 pt-3 md:w-full vs:pt-1 lg:w-4/5 2xl:w-8/12 2xl:float-right xl:float-right xl:block vs:w-full lg:float-right md:float-left sm:w-full">
            <div class="w-full vs:py-0.5 sm:py-0 py-1.5 text-sm font-normal rounded-lg sm:justify-around">
              
              <button type="button" class=" inline-flex 2xl:w-50 justify-around px-3 py-1.5 text-sm font-bold text-black align-bottom bg-white vs:text-base sm:text-lg sm:bg-transparent font-nunito border vs:shadow-none vs:w-40 vs:bg-transparent sm:text-gray-500 md:bg-transparent md:shadow-none md:border-none sm:border-none sm:shadow-none vs:border-none border-gray-300 rounded-full shadow-sm w-44 vs:font-bold vs:text-gray-500 hover:bg-gray-50 focus:outline-none  md:w-52 md:text-lg md:text-gray-500" id="options-menu"  @click="filter =! filter">
               <span class="pr-1 mt-0.5 align-bottom material-icons-round md-24">
                  view_stream
                </span>
                 <label for="" class="pt-1 cursor-pointer"> All Posts</label>
                <span class="pt-1 pl-2 text-gray-500 align-middle md-24 material-icons">
                  arrow_drop_down
                </span>
              </button>

              <!---------OPTIONS----------->
              <div class="absolute z-20 font-bold origin-top-right bg-white rounded-lg shadow-lg w-44 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu" >
                <div class="py-1" role="none" v-if="filter">
                  <a href="#" class="block px-4 py-2 text-xs font-light tracking-wider text-gray-500 font-raleway" aria-disabled role="menuitem">
                 <label for=""> POST TYPE</label>
                </a>

                  <a href="#" class="block px-4 py-2 text-sm text-gray-900" role="menuitem" >
                    <span class="pr-3 mt-0.5 align-bottom material-icons-round text-gray-600">
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

              <button type="button" class="2xl:w-64 inline-flex vs:float-right justify-around w-56 px-3 py-1.5 ml-6 text-sm font-bold text-black bg-white  vs:shadow-none border vs:bg-transparent vs:border-none border-gray-300 vs:w-56 vs:text-base rounded-full vs:font-bold vs:font-nunito vs:text-gray-500 sm:bg-transparent sm:border-none md:text-lg vs:ml-0 md:text-gray-500 md:bg-gray-bgcolor md:float-right md:border-none md:shadow-none sm:shadow-none sm:text-gray-500 sm:float-right sm:text-lg shadow-sm align-bottom hover:bg-gray-50 sm:mr-8 vvs:px-0 vvs:w-44 md:mr-8 vs:focus:bg-transparent  focus:outline-none md:focus:bg-transparent" id="options-menu"  @click="filter2 =! filter2">
               <span class="pt-1 pr-2 align-middle vvs:pr-1 material-icons">
                  people_alt
                </span>
                 <label for="" class="pt-1 cursor-pointer"> Following Only</label>
                <span class="pt-1 pl-2 text-gray-500 align-middle vvs:pl-1 md-24 material-icons">
                  arrow_drop_down
                </span>
              </button>

               <!---------OPTIONS----------->
              <div class="absolute z-20 font-bold origin-top-right bg-white rounded-lg shadow-lg vs:left-64 w-52 2xl:left-98.5 2xxl:left-99 xl:left-90 xxl:left-95.5 lg:left-90 md:left-60 2xl:w-60 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
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
          <div class="relative z-10 flex flex-wrap float-right w-3/4 pt-3 sm:w-full lg:w-4/5 md:float-left md:w-full 2xl:w-8/12 vs:pt-2 vs:w-full ">
            <div class="flex items-center w-full p-5 bg-white vs:pt-4 rounded-t-xl px-7 vs:w-full vs:rounded-none sm:rounded-none md:w-full md:rounded-none">
              <button class="top-0 left-0 rounded-full border-1 vs:absolute vs:left-5 vs:top-7 focus:outline-none">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2 vs:ml-12 ">
                <h5 class="font-bold vs:text-lg font-nunito sm:text-lg"> {{ deliveryPostOffer.firstname }} {{ deliveryPostOffer.lastname }}
                  <span class="inline-block text-blue-900 align-middle material-icons-round md-18">
                    verified
                  </span>
                  <label class="pl-1 font-normal text-gray-500 align-top vs:font-light">posted a shopping offer</label>
                  <!-------OPTION(POST)----------->
                  <button @click="edit1=!edit1" class="absolute right-8 vs:hidden sm:hidden focus:outline-none md:hidden">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full">
                    <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl right-5 h-min w-30 ">
                        <!--EDIT POST--->
                      <EditShoppingOffer v-if="editShoppingOffer" @closeModal1="listener3"/>
                        <button  @click="toggleEditShoppingOffer" class="flex flex-row gap-x-2 focus:outline-none">
                          <span class="font-medium text-gray-500 material-icons">
                            mode
                          </span>
                          Edit Post
                        </button>

                         <!-----UPDATE STATUS------>
                      <updateOfferStatus v-if="updateOfferStatus" @closeUpdate="listener7"/>
                        <button  @click="toggleupdateOfferStatus" class="flex flex-row font-normal focus:outline-none gap-x-2">
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
                    <p class="text-sm font-normal text-gray-400 sm:text-base vs:text-base">
                      <span>{{ deliveryPostOffer.time }}</span>
                    </p>
                  </div>
              </div>

            <!--NO LONGER ACCEPTING REQUESTS TEXT-->
            <div class="flex items-center w-full bg-white px-7">
              <div class="p-1 px-2 text-sm font-semibold bg-gray-200 rounded-full vs:pt-0 text-red-danger">
                <span class="inline-block align-middle material-icons">
                  remove_circle_outline
                  </span>
                  <label class="pl-1 font-bold align-bottom sm:text-lg vs:text-lg vvs:text-base">{{ deliveryPostOffer.status }}</label> 
              </div>
            </div>

            <!--DETAILS-->
            <div class="flex w-full p-3 bg-white vs:leading-loose px-7 vvs:pr-0 gap-y-4">
              <div class="flex flex-wrap w-full overflow-hidden lg:relative vs:pt-2">
                <!--AREA-->
                <div class="w-2/4 overflow-hidden vs:w-full sm:w-full">
                  <span class="items-center text-red-700 lg:absolute lg:left-0 material-icons">
                    delivery_dining
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm font-normal text-gray-800 align-top lg:pl-7 vs:pl-3 vs:text-black vs:text-base sm:pl-3 sm:text-black sm:text-base"> Delivering to {{ deliveryPostOffer.deliveryPlace }}</label> 
                </div>
                
                <!--SHOPPING LOCATION-->
                <div class="w-1/2 pl-3 overflow-hidden vs:pl-0 vs:w-full sm:w-full sm:pl-0" >
                  <span class="text-red-700 material-icons vs:pl-0 lg:absolute lg:left-62 ">
                    shopping_cart
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top vs:pl-3 lg:pl-7 vs:text-black vs:text-base sm:pl-3 sm:text-black sm:text-base">{{ deliveryPostOffer.shoppingPlace }}</label>
                </div>
              
                <!--TIME-->
                <div class="w-1/2 overflow-hidden vs:w-full sm:w-full" >
                  <span class="text-red-700 material-icons ">
                    watch_later  
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top vs:pl-3 vs:text-black vs:text-base sm:pl-3 sm:text-black sm:text-base">{{ deliveryPostOffer.schedule }}</label>
                </div>
              
                <!--TRANSPO-->
                <div class="w-1/2 overflow-hidden vs:w-full sm:w-full">
                  <span class="pl-3 text-red-700 material-icons vs:pl-0 sm:pl-0">
                    directions_car_filled
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top vs:pl-3 vs:text-black vs:text-base sm:pl-3 sm:text-black sm:text-base">{{ deliveryPostOffer.transportation }}</label>
                </div>
              
                <!--SIZES OF BAGS-->
                <div class="w-1/2 overflow-hidden vs:w-full sm:w-full">
                  <span class="text-red-700 material-icons lg:absolute lg:left-0">
                    shopping_bag
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top lg:pl-7 vs:pl-3 vs:text-black vs:text-base sm:pl-3 sm:text-black sm:text-base">{{ deliveryPostOffer.limitation }}</label>
                </div>
              
                <!--MODE OF PAYMENT-->
                <div class="w-1/2 overflow-hidden vs:w-full sm:w-full">
                  <span class="pl-3 text-red-700 vs:pl-0 sm:pl-0 material-icons">
                    payments
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top vs:pl-3 vs:text-black vs:text-base sm:pl-3 sm:text-black sm:text-base">{{ deliveryPostOffer.paymentMethod }}</label>
                </div>
              </div>
            </div>
            
            <!--POST MESSAGE-->
            <div class="flex items-center w-full px-5 py-2 bg-white">
              <div class="p-5 text-sm leading-loose bg-gray-200 rounded-lg vs:mr-5 vs:font-medium vs:text-base sm:text-base sm:font-semibold vvs:mr-0">
                {{ deliveryPostOffer.comment }}
              </div>
            </div>

             <!--SEND, CHAT, SHARE-->
          <div class="flex justify-center w-full py-4 tracking-wide bg-white rounded-b-lg shadow-md vs:rounded-none sm:rounded-none md:rounded-none vvs:justify-around s-sm:text-lg">
            
            <!--SEND A REQUEST/OFFER-->
            <div class="font-extrabold focus:text-gray-600">
              <span class="pr-2 material-icons-round md-24 ">
                send
                </span>
              <sendRequest v-if="sendrequest" @closeSendRequest="listener8"/>
              <button  @click="togglesendRequest" class="font-bold align-top cursor-pointer s-sm:text-lg">Send Request</button>
            </div>

            <!--CHAT-->
            <div class="font-bold focus:text-gray-600 text-balticsea">
              <span class="pl-24 pr-2 md:pl-36 vs:pl-12 vvs:pl-0 material-icons-round md-24">
              forum
              </span>
              <router-link to="/messages" class="font-bold align-top cursor-pointer s-sm:text-lg">Chat</router-link>
            </div>

            <!--SHARE-->
            <div class="font-bold focus:text-gray-600">
              <span class="pl-24 pr-2 md:pl-36 vs:pl-16 vvs:pl-0 vvs:pr-0 material-icons-round md-24">
                  share
              </span>
              <button @click="share2=!share2" class="font-bold align-top cursor-pointer mmd:text-base focus:outline-none ">Share</button>
                <div class="w-full">
                    <div v-if="share2" class="absolute right-0 py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl h-min w-30 ">
                      <router-link to="#" class="flex flex-row mt-1 mb-1 ml-1 mr-1 gap-x-2">
                        <span class="text-gray-500 material-icons">mode</span>Share on feed</router-link>
                      <router-link to="#" class="flex flex-row mt-1 mb-1 ml-1 mr-1 gap-x-2"> 
                        <span class="text-gray-500 material-icons">link</span>Copy link to the Post</router-link>
                    </div>
                </div>
            </div>
          </div>
          </div>

          
          <!--END-->
 <!--------------------------START OF ORDER REQUESR POST----------------------------------------------->
          <!----------START OF ACCEPTING OFFERS(EDIT ORDER REQUEST)---------->
          <div class="relative flex flex-wrap float-right w-3/4 pt-3 pb-20 sm:w-full z-00 lg:w-4/5 md:w-full 2xl:w-8/12 vs:pt-3 vs:w-full">
            <div class="flex items-center w-full p-5 bg-white rounded-t-lg px-7 vs:w-full vs:rounded-none">
              <button class="top-0 left-0 rounded-full border-1 vs:absolute vs:left-5 vs:top-7 focus:outline-none">
                <img class="w-12 h-12 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2 vs:ml-12">
                <h5 class="font-bold vs:text-lg font-nunito sm:text-lg"> {{ deliveryPostRequest.firstname }} {{ deliveryPostRequest.lastname }}
                  <span class="inline-block text-blue-900 align-middle material-icons-round md-18">
                    verified
                  </span>
                  <label class="pl-1 font-normal text-gray-400 align-middle">posted a shopping offer</label>
                  <button @click="edit2=!edit2" class="absolute sm:hidden vs:hidden md:hidden right-8 focus:outline-none">
                    <img class="w-6 h-auto" src="img/3dot.svg"/>
                  </button>
                  <div class="w-full " >
                    <div v-if="edit2" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl right-5 h-min w-30 ">
                        <!--EDIT POST--->
                      <EditOrderRequest v-if="editOrderRequest" @closeModal2="listener5"/>
                        <button  @click="toggleEditOrderRequest" class="flex flex-row gap-x-2 focus:outline-none">
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
                    <p class="text-sm font-normal text-gray-400 sm:text-base vs:text-base">
                      <span>{{ deliveryPostRequest.time }}</span>
                    </p>
                  </div>
              </div>

            <!--NO LONGER ACCEPTING REQUESTS TEXT-->
            <div class="flex items-center w-full pb-1 bg-white px-7">
              <div class="p-1 px-2 text-sm font-bold bg-gray-200 rounded-full vs:mt-0 text-waterloo vs:text-lg sm:text-lg">
                <span class="inline-block align-middle material-icons">
                  check_circle_outline
                  </span>
                  <label class="pl-1 align-bottom vvs:text-base">{{ deliveryPostRequest.status }}</label> 
              </div>
            </div>

            <!--DETAILS-->
            <div class="flex flex-col w-full p-3 bg-white vs:leading-loose font-nunito px-7 gap-y-4 sm:font-semibold">
              <div class="flex flex-wrap w-full overflow-hidden lg:relative">
                <!--AREA-->
                <div class="w-2/4 overflow-hidden vs:w-full sm:w-full">
                 <span class="text-red-700 material-icons ">
                    watch_later  
                  </span>
                  <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top vs:pl-3 vs:text-base sm:pl-3 sm:text-base">{{ deliveryPostRequest.schedule }}</label>
                </div>
                
                <!--SHOPPING LOCATION-->
                <div class="w-1/2 pl-3 overflow-hidden vs:pl-0 sm:pl-0 sm:w-full vs:w-full">
                  <span class="text-red-700 material-icons vs:pl-0 sm:pl-0">
                    shopping_cart
                    </span>
                    <label class="inline-flex pt-1 pl-1 text-sm text-gray-800 align-top vs:pl-3 vs:text-base sm:pl-3 sm:text-base">{{ deliveryPostRequest.shoppingPlace }}</label>
                </div>
              
                <!--TIME-->
                <div class="w-1/2 overflow-hidden vs:w-full sm:w-full">
                   <span class="items-center text-red-700 lg:absolute lg:left-0 material-icons">
                    delivery_dining
                  </span>
                  <label class="inline-flex pt-1 pl-1 text-sm font-normal text-gray-800 align-top lg:pl-7 vs:pl-3 vs:text-base sm:pl-3 sm:text-base sm:font-semibold"> Delivering to {{ deliveryPostRequest.deliveryPlace }}</label> 
                  
                </div>
              
              
                <!--MODE OF PAYMENT-->
                <div class="w-1/2 overflow-hidden vs:w-full sm:w-full">
                  <span class="pl-3 text-red-700 vs:pl-0 sm:pl-0 material-icons">
                    payments
                    </span>
                    <label class="inline-block pt-1 pl-1 text-sm text-gray-800 align-top vs:pl-3 vs:text-base sm:pl-3 sm:text-base">{{ deliveryPostRequest.paymentMethod }}</label>
                </div>
              </div>
            </div>
            
            <div class="flex items-center w-full gap-y-4 font-nunito">
              <div class="w-full px-5 py-2 font-medium bg-white vs:pr-8 vvs:mr-0">
                <div class="flex flex-wrap w-full p-2 overflow-hidden bg-gray-200 rounded-lg">
                
                  <div class="w-2/4 overflow-hidden vs:w-full sm:w-full ">
                    <h2 class="pb-2 text-base vs:text-lg vs:font-bold sm:text-lg sm:font-bold">
                      Shopping List
                      <label class="pl-3 text-gray-500">8 items</label>
                      </h2>
                    <ul id="shop-list" class="pl-3 text-sm leading-loose list-disc list-inside vs:text-base vs:leading-relaxed vs:font-semibold sm:text-base sm:leading-relaxed sm:font-semibold">
                      <li v-for="shopListRequest1 in shopListRequest1" :key="shopListRequest1.items" >{{ shopListRequest1.items }}</li>
                    </ul>
                  </div>
                  <div class="w-2/4 overflow-hidden vs:w-full">
                    <ul id="shop-list" class="pl-5 text-sm leading-loose list-disc list-inside pt-7 vs:leading-relaxed vs:text-base vs:font-semibold vs:pl-3 vs:pt-0 sm:text-base sm:leading-relaxed sm:font-semibold sm:pt-0 sm:pl-3">
                      <li v-for="shopListRequest2 in shopListRequest2" :key="shopListRequest2.items" >
                      {{ shopListRequest2.items }}</li>
                    </ul>
                  </div>
              </div>
              <p class="px-5 py-5 text-sm font-medium leading-loose vs:font-medium vs:text-base sm:font-semibold sm:text-base vvs:px-0">
                {{ deliveryPostRequest.comment }}
              </p>
              <hr>
              </div>
            </div>

             <!--SEND, CHAT, SHARE-->
          <div class="flex justify-center w-full py-4 tracking-wide bg-white rounded-b-lg shadow-md vs:rounded-none sm:rounded-none md:rounded-none vvs:justify-around">
            
            <!--SEND A REQUEST/OFFER-->
            <div class="font-extrabold focus:text-gray-600">
              <span class="pr-2 material-icons-round md-24 ">
                send
                </span>
              <label class="font-bold align-top cursor-pointer">Send Offer</label>
            </div>

            <!--CHAT-->
            <div class="font-bold focus:text-gray-600 text-balticsea">
              <span class="pl-24 pr-2 md:pl-36 vs:pl-12 vvs:pl-0 material-icons-round md-24">
              forum
              </span>
              <router-link to="/messages" class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block">Chat</router-link>
            </div>

            <!--SHARE-->
            <div class="font-bold focus:text-gray-600">
              <span class="pl-24 pr-2 md:pl-36 vs:pl-16 vvs:pl-0 vvs:pr-0 material-icons-round md-24">
                  share
              </span>
              <button @click="share2=!share2" class="font-bold align-top cursor-pointer mmd:text-base focus:outline-none ">Share</button>
                <div class="w-full">
                    <div v-if="share2" class="absolute right-0 py-2 pt-2 pl-2 pr-4 bg-white rounded-lg shadow-xl h-min w-30 ">
                      <router-link to="#" class="flex flex-row mt-1 mb-1 ml-1 mr-1 gap-x-2">
                        <span class="text-gray-500 material-icons">mode</span>Share on feed</router-link>
                      <router-link to="#" class="flex flex-row mt-1 mb-1 ml-1 mr-1 gap-x-2"> 
                        <span class="text-gray-500 material-icons">link</span>Copy link to the Post</router-link>
                    </div>
                </div>
            </div>
          </div>
          </div>

  </div>

 
          


        
        <!----------------------------START OF SHOPPING LISTS--------------------->
        <div class="w-2/5 pt-12 overflow-hidden pl-7 vs:hidden ssm:hidden md:hidden sm:hidden">
          <!-----------ACTIVE ORDERS---------------------->
            <div class="mb-3 bg-white shadow-md w-72 rounded-2xl">
              <header class="py-3 pl-4 text-sm font-semibold tracking-wide text-gray-500">
                ACTIVE ORDERS
                  <span class="inline-flex pl-20 pr-3 align-bottom material-icons-round md-18">
                    navigate_before
                </span>
                <span class="inline-flex align-bottom material-icons-round md-18">
                    navigate_next
                </span>

              </header>
              <hr>
              <div class="px-2 pt-2 text-base bg-white rounded-b-xl">
                <label for="" class="pt-2 pl-3 font-bold">
                 Transaction #{{ activeOrders.transactNo }}
                </label>
              </div>

              <div class="text-base bg-white rounded-b-xl">
                <label for="" class="pl-6 font-normal text-gray-500 ">
                  8 items
                </label>

                <label for="" class="float-right px-3 m-2 py-0.5 text-sm font-semibold border rounded-md border-waterloo text-waterloo">
                  {{ activeOrders.stat }}
                </label>
              </div>

              <div class="relative z-0 flex items-center w-65  p-1.5 rounded-xl ml-2 bg-gray-bgcolor">
              <button class="top-0 left-0 pl-2 rounded-full border-1">
                <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2">
                <h5 class="text-sm font-bold">{{ activeOrders.first_name }} {{ activeOrders.last_name }}
                  <span class="inline-block text-blue-900 align-middle material-icons-round md-18">
                    verified
                  </span>
                 
                 </h5>
                 
                    <p class="text-sm font-normal font-nunito">
                      <span class="inline-block align-middle">{{ activeOrders.rating }}
                      </span>
                      <span class="top-0 inline-block text-red-700 align-top material-icons-round md-20">
                          star_rate
                        </span>
                    </p>
                  </div>
                 

                   <div class="absolute h-10 p-2 mr-2 rounded-full right-2 bg-success">
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
            <div class="z-0 mb-3 bg-white w-72 rounded-xl vs:hidden">
              <header class="py-3 pl-4 text-sm font-semibold tracking-wide text-gray-500">
                ACTIVE DELIVERIES
                  <span class="inline-flex pl-16 pr-3 align-bottom material-icons-round md-18">
                    navigate_before
                </span>
                <span class="inline-flex align-bottom material-icons-round md-18">
                    navigate_next
                </span>

              </header>
              <hr>
              <div class="px-2 pt-2 text-base bg-white rounded-b-xl">
                <label for="" class="pt-2 pl-3 font-bold">
                  Transaction #{{ activeDeliveries.transNo }}
                </label>
              </div>

              <div class="text-base bg-white rounded-b-xl">
                <label for="" class="pl-6 font-normal text-gray-500 ">
                  8 items
                </label>

                <label for="" class="float-right px-3 m-2 py-0.5 text-sm font-semibold border rounded-md border-waterloo text-waterloo">
                  {{ activeDeliveries.stats }}
                </label>
              </div>

              <div class="relative flex items-center w-65  z-0  p-1.5 rounded-xl ml-2 bg-gray-bgcolor">
              <button class="top-0 left-0 pl-2 rounded-full border-1">
                <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
              <div class="ml-2 ">
                <h5 class="text-sm font-bold">{{ activeDeliveries.firstName }} {{ activeDeliveries.lastName }}
                  <span class="inline-block text-blue-900 align-middle material-icons-round md-18">
                    verified
                  </span>
                 
                 </h5>
                 <p class="text-sm font-normal font-nunito">
                      <span class="inline-block align-middle">{{ activeDeliveries.rate }}
                      </span>
                      <span class="top-0 inline-block text-red-700 align-top material-icons-round md-20">
                          star_rate
                        </span>
                    </p>
                  </div>
                 
                   <div class="absolute h-10 p-2 mr-2 rounded-full bg-success right-2">
                    <span class="inline-flex text-white align-middle material-icons">chat</span>
                    <router-link to="/messages" class="font-bold align-top cursor-pointer mmd:text-base mmd:inline-block"></router-link>
                  </div>  
                  
              </div>
              <div class="p-2">
                    <span class="inline-block pl-3 text-gray-500 align-top material-icons-round md-18">
                      room
                    </span>
                    <label for="" class="inline-block pl-2 text-sm tracking-wide align-text-top">
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
                  <span class="inline-flex pl-24 pr-3 align-bottom material-icons-round md-18">
                    navigate_before
                </span>
                <span class="inline-flex align-bottom material-icons-round md-18">
                    navigate_next
                </span>
              </header>
              
              <hr>
               
               <!--SHOPPING LIST-->
               <h3 class="relative pt-2 pl-5 text-lg font-bold leading-loose tracking-wide">Shopping List 1
                 <editShopListModal v-if="editVisible" @closeModal="editlistener"/>
                <button @click="toggleeditShopList" class="absolute text-sm font-bold text-blue-700 right-7 top-4 focus:outline-none">Edit</button>
                </h3> 
                    <ul id="shop-list" class="overflow-hidden text-sm leading-relaxed text-gray-500 list-disc list-inside h-22 pl-9">
                      <li v-for="shopList in shopList" :key="shopList.items" >{{ shopList.items }}</li>
                    </ul>
                    <ShoppingList v-if="list" @closeListModal="listlistener"/>
                      <button @click="toggleList" class="text-sm leading-loose pl-9 focus:outline-none">
                      4 more items...
                    </button>
                   <hr>
                  <div class="items-center justify-center p-3 pl-4">
                    <createShopList v-if="createShopList" @closeshopListModal="listener6"/>
                    <button @click="togglecreateShopList" class="w-64 h-8 px-5 text-sm font-bold text-red-600 transition-colors duration-150 border-2 border-red-600 rounded-3xl focus:outline-none">
                            Create New
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
import api from '../api'
import ShoppingList from "./ShoppingList"
import EditShoppingOffer from "./EditShoppingOffer"
import EditOrderRequest from "./EditOrderRequest"
import UpdateOrderStatus from "./updateOrderStatus"
import createShopList from "./createShopList"
import updateOfferStatus from "./updateOfferStatus"
import sendRequest from "./sendRequest"

export default {
el:'#shop-list',
    data() {
    return {
      postModalVisible: false,
      edit1:false,
      edit2:false,
      show:false,
      share1:false,
      share2:false,
      NewList:false,
      editVisible: false,
      editVisible1: false,
      filter: false,
      filter2: false,
      isOpen:false,
      isOpen1:false,
      isOpen2:false,
      isOpen3:false,
      isOpen4:false,
      user: null,
      list:false,
      editShoppingOffer:false,
      editOrderRequest:false,
      updateOrderStatus:false,
      createShopList:false,
      updateOfferStatus:false,
      sendrequest:false,

      filterPost:{
        filterAddress: "Bonot, Legazpi City"
      },

      deliveryPostOffer:{
              firstname:'Sarah',
              lastname:'Panadero',
              time: '14 hours ago',
              address: 'Banquerohan, Legazpi',
              comment: "Hi! I'll be going to SM City Legazpi tommorow. If there's anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request. PS. WHOLO ON APRIL",
              status: "No longer Accepting Requests",
              deliveryPlace: "Banquerohan area only",
              shoppingPlace: "Shopping at SM City Legazpi",
              paymentMethod: "Payment first",
              schedule: "Tomorrow at 2 PM",
              transportation: "Public Transit",
              limitation: "Up to 3 medium or 2 large bags",
              

          },

          deliveryPostRequest:{
              firstname:'Jane',
              lastname:'Doe',
              time: '11 hours ago',
              address: 'Banquerohan, Legazpi',
              comment: "Hi! If there's anyone who can help me and sabuy my groceries, I would greatly appreciate it. Send me an offer if you are willing. Thanks!",
              status: "Accepting Offers",
              deliveryPlace: "Banquerohan, Legazpi",
              shoppingPlace: "SM Legazpi",
              paymentMethod: "GCash",
              schedule: "Tomorrow at 5 PM",
              

          },

      activeDeliveries:{
        transNo: '61913174',
        address: 'Ligao',
        firstName: 'Hanbin',
        lastName: 'Kim',
        rate: '4.9',
        stats: "Confirmed"
      },

      activeOrders:{
        transactNo: '1267643764',
        address: 'Legazpi',
        first_name:'Go Eun',
        last_name: 'Na',
        rating: '4.9',
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

    shopListRequest1: [
      { items: 'Flour (1kg)' },
      { items: 'Vanilla extract (50ml)' },
      { items: 'brown sugar' },
      { items: 'cocoa powder' },
    ],

    shopListRequest2: [
      { items: 'baking soda' },
      { items: 'Chocolate syrup' },
      { items: 'powdered sugar' },
      { items: 'cocoa powder' },
    ],

    }
  },
  
  components: {
    Navbar,
    PostModal,
    editShopListModal,
    ShoppingList,
    EditShoppingOffer,
    EditOrderRequest,
    UpdateOrderStatus,
    createShopList,
    updateOfferStatus,
    sendRequest,
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
    },
    toggleEditOrderRequest(){
      this.editOrderRequest = !this.editOrderRequest
    },
    listener5(){
      this.editOrderRequest = false;
    },
    togglecreateShopList(){
      this.createShopList = !this.createShopList
    },
    listener6(){
      this.createShopList = false;
    },
    toggleupdateOfferStatus(){
      this.updateOfferStatus = !this.updateOfferStatus
    },
    listener7(){
      this.updateOfferStatus = false;
    },
    togglesendRequest(){
      this.sendrequest = !this.sendrequest
    },
    listener8(){
      this.sendrequest = false;
    },
  },
    mounted(){
    api.get('/api/user').then((res)=>{
      this.user = res.data;
    }).catch((error) => {
      this.error=error.response.data.errors;
    })
  }
 
   
}
</script>