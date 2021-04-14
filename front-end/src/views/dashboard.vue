<template class="bg-gray-bgcolor">
    <Navbar  />

    <div class="flex flex-wrap pt-8 overflow-hidden llg:justify-center llg:px-10 mv:pt-5 vs:pt-9 bg-gray-bgcolor vs:flex-col sm:flex-col font-nunito md:flex-col">
        <div class="w-3/5 overflow-hidden llg:w-65 vs:w-full xsm:w-full sm:w-full md:w-full ssm:w-full">
        <div class="pt-5 bg-gray-100 mv:pt-1 font-nunito rounded-xl llg:pl-5">
   <div class="w-full min-w-0 px-2 ssm:h-auto ssm:pb-6 vs:h-auto vs:pb-6 sm:pb-6 rounded-xl">
   <!--Modal-->
   <PostModal v-if="postModalVisible" @closeModal="listener"/>
   <!--end--> 
   <div class="flex items-center justify-center pt-16 dv:float-right">
    <div class="inline-flex items-center justify-center p-6 space-x-4 bg-white shadow rounded-xl ssm:space-x-2 vs:w-full sm:w-full ssm:w-full ssm:p-2 vs:p-4 rounded-x md:w-full mv:w-screen">
        <img class="rounded-full w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10" :src="profilePicture"/>
        <button @click="togglePostModal" class="flex items-center justify-start py-5 pl-6 text-base leading-none text-gray-500 bg-gray-100 rounded-full outline-none md:w-full focus:outline-none lvs:text-sm vs:text-xs ssm:text-xs vs:h-12 ssm:h-10 h-14 w-448 vs:w-full ssm:w-full x-v:text-sm">
        Post a shopping offer <span class="vs:hidden ssm:hidden sm:hidden xsm:hidden lg:mx-0 vsv:hidden"> or an order request</span></button>
    </div>
  </div>
  <!--end-->

<!--FILTER--->
     <div class="relative flex items-center justify-center pt-3 ssm:justify-around x-v:pt-2  dv:float-right">
    <div class="justify-center h-auto bg-transparent ssm:px-0 dv:space-x-4 mv:w-full ssm:p-2 ssm:w-full vs:w-full sm:w-full dv:w-608 rounded-xl">
      <div class="flex items-start justify-start dv:flex-wrap vs:space-x-2 ssm:flex-col ssm:justify-start">
          <button type="button" class=" inline-flex ssm:float-left 2xl:w-50 ssm:px-0 justify-around px-3 py-1.5 text-sm font-bold text-black align-bottom bg-white vsv:text-xs vs:text-xs ssm:text-xs font-nunito border border-gray-300 rounded-full shadow-sm w-44 sm:w-full mv-filterbutton1 hover:bg-gray-50 focus:outline-none" id="options-menu x-v:text-sm"  @click="filter =! filter">
               <span class="pr-1 mt-0.5 ssm:pr-0  x-v:mt-0 align-bottom material-icons-round md-24 vsv:pr-0.5">
                  view_stream
                </span>
                 <label for="" class="pt-1 vs:py-2 se:py-1.5 cursor-pointer se:text-xs x-v:text-sm "> All Postss</label>
                <span class="pt-1 x-v:pt-0.5 ssm:pl-0 vsv:pl-1 pl-2 text-gray-500 align-middle md-24 material-icons">
                  arrow_drop_down
                </span>
              </button>

              <!---------OPTIONS----------->
              <div class="absolute z-20 font-bold origin-top-right bg-white rounded-lg shadow-lg top-15 w-44 focus:outline-none x-v:leading-tight" role="menu" aria-orientation="vertical" aria-labelledby="options-menu" >
                <div class="py-1" role="none" v-if="filter">
                  <a href="#" class="block px-4 py-2 text-xs font-light tracking-wider text-gray-500 font-raleway" aria-disabled role="menuitem">
                 <label for=""> POST TYPE</label>
                </a>

                  <a href="#" class="block px-4 py-2 text-sm text-gray-900" role="menuitem" >
                    <span class="pr-3 x-v:mt-0 mt-0.5 align-bottom material-icons-round text-gray-600">
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

                <button type="button" class="2xl:w-64 inline-flex mv:absolute  mv:right-0 mv:float-right justify-around w-56 px-3 py-1.5 ml-6 text-sm font-bold text-black bg-white s-sm:float-right border-gray-300 vs:w-56 mv-filterbutton1 rounded-full vs:ml-0 shadow-sm align-bottom x-v:text-sm hover:bg-gray-50  vvs:px-0 vvs:w-44 focus:outline-none vsv:text-xs" id="options-menu x-v:text-sm"  @click="filter2 =! filter2">
               <span class="pt-1 pr-2 lvs:pr-1 se:pt-0.5 se:pl-1 se:pr-0 vs:pl-2 align-middle vvs:pr-1 material-icons x-v:pt-0">
                  people_alt
                </span>
                 <label for="" class="pt-1 vs:py-1.5 cursor-pointer se:text-xs vs:text-sm"> Following Only</label>
                <span class="pt-1 pl-2 se:pt-0.5 x-v:pt-0.5 text-gray-500 align-middle vvs:pl-1 md-24 x-v:md-18 material-icons">
                  arrow_drop_down
                </span>
              </button>
              <!---------OPTIONS----------->
              <div class="absolute z-20 font-bold origin-top-right bg-white rounded-lg shadow-lg w-52 top-15 left-52 2xl:left-58 2xl:w-60 focus:outline-none vs:left-40 mv:right-2" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
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
             

      </div>
    </div>
     </div>
     
  <!--user post-->
  <div class="flex items-center justify-center pt-3 x-v:pt-2 dv:float-right "
    v-for="(post_info, index) in delivery_info"
    :key="index"
    >
    
    <div class="h-auto p-6 space-x-4 bg-white shadow vs:p-4 mv:w-full ssm:p-2 ssm:w-full vs:w-full sm:w-full w-608 rounded-xl">
      <div class="flex flex-col items-start justify-start">

        <!--section 1-->
        <div class="relative flex flex-row justify-between flex-grow w-full">
          <div class="inline-flex">
            <img class="rounded-full x-v:absolute w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10" :src="post_info.user.profilePicture"/>
            <div class="flex flex-col items-start w-full px-4 vs:px-1 se:px-2 ssm:px-2">
              <div class="flex mt-1 space-x-4 ssm:space-x-0 se:space-x-0 vs:space-x-1 sm:space-x-2">
                <h5 class="text-base font-bold leading-none text-gray-900 x-v:pl-10 vsv:text-xs ssm:text-sm vs:text-sm lvs:text-sm">{{post_info.user.firstName}} {{post_info.user.lastName}}
                  <span class="inline-block text-blue-900 align-middle material-icons-round md-18">
                    verified
                  </span>
                  <label class="pl-1 font-normal text-gray-500 align-top vs:font-light">posted a shopping offer</label>
                </h5>
              </div>
              <div class="vs:flex vs:w-full ssm:w-full ssm:flex vs:pb-2 x-v:ml-10">
                <span class="text-sm leading-none text-gray-500 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.dateCreated}}</span>
              </div>
            </div>
          </div>
          <div class="vs:mt-1" v-if="post_info.email == user.email">
            <button @click="edit1=!edit1; edit2=post_info.postNumber" class="absolute right-0 focus:outline-none ">
              <img class="w-6 h-auto vs:w-4 lvs:w-5 ssm:w-4" src="img/3dot.svg"/>
            </button>
            <div class="flex w-full ">
            <div v-if="edit1 && edit2==post_info.postNumber" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl vs:text-sm vs:right-0 top-5 right-8">
             <EditShoppingOfferPostVue v-if="postModalVisible1" @closeModal1="listener1"/>
              <button  @click="togglePostModal1" class="flex flex-row text-base vs:text-sm gap-x-2 focus:outline-none">
               <span class="font-medium text-gray-500 material-icons vs:md-14">
                mode
               </span>
                Edit Post
              </button>
             <UpdateOfferStatus v-if="postModalVisible2" @closeModal2="listener2"/>
              <button  @click="togglePostModal2" class="flex flex-row text-base font-normal vs:text-sm focus:outline-none gap-x-2">
               <span class="font-normal text-gray-500 material-icons vs:md-14">
                autorenew
               </span>
                Update Status
              </button>
              <button class="flex flex-row text-base gap-x-2 vs:text-sm vs:md-14"> 
                <span class="text-gray-500 material-icons">delete</span>Delete</button>
              </div>
              </div>
          </div>
        </div>
        <!--end-->

        <!--section 2-->
        <div class="inline-flex items-center justify-start px-2 py-1 mt-4 space-x-2 bg-gray-100 rounded-full">
          <span class="text-red-600 rounded-full material-icons">
              remove_circle_outline
              </span>
          <p class="items-center text-sm font-bold leading-none text-red-600 vs:text-xs ssm:text-xs lvs:text-sm">
              {{post_info.postStatus}}</p>
        </div>
        <!--end-->

        <!--section 3-->
        <div class="flex items-center justify-start w-full mt-4 space-x-4 ssm:flex-col ssm:items-start ssm:space-x-0 vs:flex-col vs:items-start vs:space-x-0"
          v-if="post_info.offer_post != null">
          <div class="flex-col items-start w-full">
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              delivery_dining  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.offer_post.deliveryArea}}</p>
            </div>
            <div class="flex py-2 space-x-2 ">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              alarm  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.offer_post.deliverySchedule}}</p>
            </div>
            <div class="flex space-x-2 ">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              shopping_bag  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.offer_post.capacity}}</p>
            </div>
          </div>
          <div class="flex-col w-full ssm:py-2 vs:py-3">
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              shopping_cart  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.offer_post.shoppingPlace}}</p>
            </div>
            <div class="flex py-2 space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              directions_car  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.offer_post.transportMode}}</p>
            </div>
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              payments  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.offer_post.paymentMethod}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 3-->
        <div class="flex items-center justify-start w-full mt-4 space-x-4 ssm:flex-col ssm:items-start ssm:space-x-0 vs:flex-col vs:items-start vs:space-x-0"
          v-if="post_info.request_post != null">
          <div class="flex-col items-start w-full">
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              delivery_dining  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.request_post.deliveryAddress}}</p>
            </div>
            <div class="flex py-2 space-x-2 ">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              alarm  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.request_post.deliverySchedule}}</p>
            </div>
          </div>
          <div class="flex-col w-full ">
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              shopping_cart  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.request_post.shoppingPlace}}</p>
            </div>
            <div class="flex py-2 space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              payments  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{post_info.request_post.paymentMethod}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex items-center justify-start w-full p-2 mt-4 space-x-4 rounded-lg bg-gray-bgcolor ssm:flex-col ssm:items-start ssm:space-x-0 vs:flex-col vs:items-start vs:space-x-0" v-if="post_info.request_post != null">
          <div class="flex-col items-start w-full">
          <span class="pb-2 text-base vs:text-sm vs:font-bold sm:text-sm sm:font-bold">Shopping List
            <label class="pl-3 text-gray-500">{{post_info.request_post.shoppingList.split(',').length}} items</label>
          </span>
          <div class="flex-col">
            <ul id="shop-list" class="pl-3 text-sm leading-loose list-disc list-inside vs:text-xs vs:leading-relaxed vs:font-semibold sm:text-xs sm:leading-relaxed sm:font-semibold">
              <li v-for="(shoppingList,index ) in post_info.request_post.shoppingList.split(',')" :key="index" >{{ shoppingList }}</li>
            </ul>
          </div>
          </div>
        </div>
        <!--section 4-->
        <!--section 4-->
        <div class="flex items-start justify-start flex-grow-0 w-full p-4 mt-4 bg-gray-100 ssm:mt-2 vs:mt-2 rounded-xl" v-if="post_info.offer_post != null">
          <p class="w-full h-auto text-sm leading-loose text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm vs:min-w-0 vs:px-2">{{post_info.offer_post.caption}}</p>
        </div>
        <div class="flex items-start justify-start flex-grow-0 w-full p-4 mt-4 bg-gray-100 ssm:mt-2 vs:mt-2 rounded-xl" v-if="post_info.request_post != null">
          <p class="w-full h-auto text-sm leading-loose text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm vs:min-w-0 vs:px-2">{{post_info.request_post.caption}}</p>
        </div>

        
        <!--section 4-->
    
        <!--section 5-->
        <div class="relative flex w-full pr-8 mt-4 space-x-6 justify-evenly vs:space-x-3 vs:min-w-0 vs:px-2 ssm:space-x-1 ssm:px-0 ssm:pr-0 vs:pr-0">
          <SendRequest v-if="postSendModal" @closeSendRequest="listener3"/>
          <button @click="toggleSendModal" class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
            <span class="pr-2 ssm:pr-0 material-icons md-24 ssm:md-18 xsm:md-18 vs:md-18">
            send
            </span>
            <p class="text-base font-bold leading-none text-gray-600 ssm:text-xs vs:text-xs lvs:text-sm">Send Request</p>
          </button>
          <router-link :to="'/messages/?postnum='+post_info.postNumber">
          <button class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
           <span class="pr-2 ssm:pr-0 material-icons md-24 ">
           forum
           </span>
            <p class="text-base font-bold leading-none text-gray-600 ssm:text-xs vs:text-xs lvs:text-sm">Chat</p>
          </button>
          </router-link>
          <div>
          <button @click="share1=!share1; share2=post_info.postNumber" class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
           <span class="pr-2 x-v:pr-1 ssm:pr-0 material-icons md-24 x-v:md-16">
           share
           </span>
            <p class="text-base font-bold leading-none text-gray-500 ssm:text-xs vs:text-xs lvs:text-sm">Share</p>
          </button>
          <div class="flex w-full">
            <div v-show="share2==post_info.postNumber && share1" class="absolute z-30 py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl ssm:right-5 vs:right-5 sm:right-5 lg:right-2 md:right-24 xl:right-91 h-min w-30">
              <button @click="share(post_info.postNumber)" class="flex flex-row text-base gap-x-2 vs:text-sm ssm:text-sm xsm:text-sm focus:outline-none">
               <span class="font-medium text-gray-500 material-icons x-v:md-16">
                share
               </span>
                Share on Feed
              </button>
              <button class="flex flex-row py-2 text-base font-normal x-v:text-sm focus:outline-none gap-x-2">
               <span class="font-normal text-gray-500 material-icons x-v:md-16 x-v:inline-block x-v:align-top">
                link
               </span>
                Copy link to this post
              </button>
              </div>
              </div>
          </div>
        </div>
        <!--end-->
      </div>
    </div>
  </div>
  <!--end of user post-->
   </div>
   </div>
        </div>

   <!----------------------------START OF SHOPPING LISTS--------------------->
        <div class="w-2/5 pt-20 overflow-hidden llg:w-35 pl-7 vs:hidden ssm:hidden md:hidden sm:hidden xsm:hidden">
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

              <div class="relative z-0 flex items-center w-220  p-1.5 rounded-xl ml-2 bg-gray-bgcolor">
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
            <div class="z-0 mb-3 bg-white w-72 rounded-xl vs:hidden xsm:hidden ssm:hidden">
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

              <div class="relative flex items-center w-220  z-0  p-1.5 rounded-xl ml-2 bg-gray-bgcolor">
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
          

          <div class="flex flex-wrap float-left font-nunito md:block vs:hidden xsm:hidden ssm:hidden">
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
        </div>
</div>
</template>

<script>
import Navbar from './Navbar'
import EditShoppingOfferPostVue from './EditShoppingOffer.vue'
import PostModal from "./PostModal"
import UpdateOfferStatus from './updateOfferStatus'
import SendRequest from "./sendRequest"
import editShopListModal from "./editShopListModal"
import ShoppingList from "./ShoppingList"
import createShopList from "./createShopList"
import VueSimpleAlert from 'vue-simple-alert'
// import EditOrderRequest from "./EditOrderRequest"
import api from '../api'

export default {
    el:'#shop-list',
  data() {
    return {
      postModalVisible: false,
      postModalVisible1: false,
      postModalVisible2: false,
      postSendModal: false,
      postChatModal: false,
      editVisible: false,
      edit1: false,
      edit2: false,
      share1: false,
      share2: false,
      shares:[],
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
      filterAddress: "Bonot, Legazpi City",
      datePosted: '3 hours ago',
      datePosted1: '13 hours ago',
      postStatus: 'posted',
      user_info:[],
      profilePicture:null,

      // delivery_info:{
      //   delivery_area: 'Naga City',
      //   shopping_place: 'SM City Legazpi',
      //   schedule: '2021-04-28 13:12:01',
      //   public_transit: 'Public Transit',
      //   capacity: '2 Big Plastic Bag',
      //   payment_method: 'Cash on Delivery',
      //   comment: 'Let me Know',
      //   status: 'No Longer Accepting Requests'
      // },
      delivery_info:[],
   
      activeDeliveries:{
        transNo: '61913174',
        address: 'Ligao',
        firstName: 'Hanbin',
        lastName: 'Kim',
        rate: '4.9',
        stats: "Confirmed"
      },
      activeOrders: {
        transactNo: "1267643764",
        address: "Legazpi",
        first_name: "Go Eun",
        last_name: "Na",
        rating: "4.9",
        stat: "Confirmed",
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
    EditShoppingOfferPostVue,
    UpdateOfferStatus,
    SendRequest,
    createShopList,
    ShoppingList,
    editShopListModal,
    // EditOrderRequest,
    
  },
  methods: {
    togglePostModal() {
      this.postModalVisible = !this.postModalVisible;
    },
    togglePostModal1(){
      this.postModalVisible1 = !this.postModalVisible1
      
    },
    togglePostModal2(){
      this.postModalVisible2 = !this.postModalVisible2
      
    },
    toggleSendModal(){
      this.postSendModal = !this.postSendModal
      
    },
    toggleChatModal(){
      this.postChatModal = !this.postChatModal
      
    },
    listener(){
      this.postModalVisible = false;
    },
    listener1(){
      this.postModalVisible1 = false;
    },
    listener2(){
      this.postModalVisible2 = false;
    },
    listener3(){
      this.postSendModal = false;
    },
    toggleeditShopList(){
      this.editVisible = !this.editVisible 
    },
    editlistener(){
      this.editVisible = false;
    },
    togglecreateShopList() {
      this.createShopList = !this.createShopList;
    },
    listener6() {
      this.createShopList = false;
    },
     toggleEditOrderRequest(){
      this.editOrderRequest = !this.editOrderRequest
    },
    listener5(){
      this.editOrderRequest = false;
    },
    share(postNumber){
      var shareData = {postNum: postNumber}
      console.log(shareData)
      api.post('/api/share',shareData).then((res)=>{
        VueSimpleAlert.alert(res.data.message,"Success","success")
        console.log(res.data)
        this.share1 = false;
      }).catch((error) => {
        VueSimpleAlert.alert('An error occured',"Error","error")
        console.log(error)
      })
    }
  },
    mounted(){
    api.get('/api/getPersonal').then((resp)=>{
      this.profilePicture ='data:image/jpeg;base64,' + btoa(resp.data.profilePicture)
    }).catch((error) => {
       console.log(error)
    })
  },
  created(){
    api.get('/api/user').then((res)=>{
      this.user = res.data;
    }).catch((error) => {
       console.log(error)
    })


    api.get('/api/getPosts').then((res)=>{
      console.log(res.data)
      var i;
      for(i=0;i<res.data.length;i++){
        res.data[i].user.profilePicture = 'data:image/jpeg;base64,' + btoa(res.data[i].user.profilePicture)
      }
   
      this.delivery_info=res.data
      console.log(this.delivery_info)
    }).catch((error) => {
      console.log(error)
    })

     api.get('/api/getShares').then((res)=>{
      var i;
      for(i=0;i<res.data.length;i++){
        res.data[i].user.profilePicture = 'data:image/jpeg;base64,' + btoa(res.data[i].user.profilePicture)
      }
      this.shares=res.data
      console.log(this.shares)
    }).catch((error) => {
      console.log(error)
    })
  }
}
</script>
