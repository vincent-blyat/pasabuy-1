<template class="bg-gray-bgcolor">
    <Navbar/>

    <div class="flex pb-24 flex-wrap pt-8 overflow-hidden llg:justify-center llg:px-10 mv:pt-5 vs:pt-9 bg-gray-bgcolor vs:flex-col sm:flex-col font-nunito md:flex-col">
        <div class="w-3/5 overflow-hidden llg:w-65 vs:w-full xsm:w-full sm:w-full md:w-full ssm:w-full">
        <div class="pt-5 bg-gray-100 mv:pt-1 font-nunito rounded-xl llg:pl-5">
   <div class="w-full min-w-0 px-2 ssm:h-auto ssm:pb-6 vs:h-auto vs:pb-6 sm:pb-6 rounded-xl">
   <!--Modal-->
   <PostModal v-if="postModalVisible" @closeModal="listener"/>
   <!--end--> 
   <div class="flex items-center justify-center pt-16 dv:float-right">
    <div class="inline-flex items-center justify-center p-6 space-x-4 bg-white shadow rounded-xl ssm:space-x-2 vs:w-full sm:w-full ssm:w-full ssm:p-2 vs:p-4 rounded-x md:w-full mv:w-screen">
        <img class="rounded-full w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10" :src="userPersonal.profilePicture"/>
        <button @click="togglePostModal" class="flex items-center justify-start py-5 pl-6 text-base leading-none text-gray-500 bg-gray-100 rounded-full outline-none md:w-full focus:outline-none lvs:text-sm vs:text-xs ssm:text-xs vs:h-12 ssm:h-10 h-14 w-448 vs:w-full ssm:w-full x-v:text-sm">
        Post a shopping offer <span class="vs:hidden ssm:hidden sm:hidden xsm:hidden lg:mx-0 vsv:hidden"> or an order request</span></button>
    </div>
  </div>
  <!--end-->

<!--FILTER--->
     <div class="relative flex items-center justify-center pt-6 ssm:justify-around x-v:pt-2  dv:float-right">
    <div class="justify-center h-auto bg-transparent ssm:px-0 dv:space-x-4 mv:w-full ssm:p-2 ssm:w-full vs:w-full sm:w-full dv:w-608 rounded-xl">
      <div class="flex items-start justify-start dv:flex-wrap ssm:space-x-0 ssm:space-y-2 ssm:flex-col ssm:justify-start">
          <button type="button" class=" mr-4 vs:mr-2 inline-flex ssm:float-left 2xl:w-50 ssm:px-0 justify-around px-3 py-1.5 text-sm font-bold text-black align-bottom bg-white vsv:text-xs vs:text-xs ssm:text-xs font-nunito border border-gray-300 rounded-full shadow-sm w-44 sm:w-full mv-filterbutton1 hover:bg-gray-50 focus:outline-none" id="options-menu x-v:text-sm"  @click="filter =! filter">
               <span class="pr-1 mt-0.5 ssm:pr-0  x-v:mt-0 align-bottom material-icons-round md-24 vsv:pr-0.5">
                  view_stream
                </span>
                 <label for="" class="pt-1 vs:py-2 se:py-1.5 cursor-pointer se:text-xs x-v:text-sm "> {{post_type}}</label>
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

                  <a @click="getAll" href="#" class="block px-4 py-2 text-sm text-gray-900" role="menuitem" >
                    <span class="pr-3 x-v:mt-0 mt-0.5 align-bottom material-icons-round text-gray-600">
                  view_stream
                </span>
                 <label for="" class="cursor-pointer"> All Posts</label>
                </a>

                  <a  @click="getOffer" href="#" class="block px-4 py-2 text-sm text-gray-900" role="menuitem"> <span class="pr-3 mt-0.5 align-bottom material-icons text-gray-600">
                  delivery_dining
                </span>Shopping Offer</a>

                  <a  @click="getRequests" href="#" class="block px-4 py-2 text-sm hover:text-gray-900" role="menuitem"> <span class="pr-3 mt-0.5 align-bottom material-icons text-gray-600">
                  shopping_bag
                </span>Order Requests</a>
                </div>
              </div>
              <!---------END OF OPTIONS---------->

                <button @click="filter2 =! filter2" type="button" class="2xl:w-64 inline-flex mv:absolute  mv:right-0 mv:float-right justify-around w-56 px-3 py-1.5 ml-6 text-sm font-bold text-black bg-white s-sm:float-right border-gray-300 vs:w-56 mv-filterbutton1 rounded-full vs:ml-0 shadow-sm align-bottom x-v:text-sm hover:bg-gray-50  vvs:px-0 vvs:w-44 focus:outline-none vsv:text-xs" id="options-menu x-v:text-sm"  >
               <span class="pt-1 pr-2 lvs:pr-1 se:pt-0.5 se:pl-1 se:pr-0 vs:pl-2 align-middle vvs:pr-1 material-icons x-v:pt-0">
                  people_alt
                </span>
                 <label for="" class="pt-1 vs:py-1.5 cursor-pointer se:text-xs vs:text-sm"> {{post_filter}}</label>
                <span class="pt-1 pl-2 se:pt-0.5 x-v:pt-0.5 text-gray-500 align-middle vvs:pl-1 md-24 x-v:md-18 material-icons">
                  arrow_drop_down
                </span>
              </button>
              <!---------OPTIONS----------->
              <div class="absolute z-20 ssm:float-left ssm:right-0 ssm:left-0 right-60 font-bold origin-top-right lvs:left-48 bg-white rounded-lg shadow-lg w-44 top-15 ssm:top-266 2xl:left-58 2xl:w-60 focus:outline-none mv:right-2" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                <div class="py-1" role="none" v-if="filter2">
                  <a href="#" class="block px-4 py-2 text-xs font-light tracking-wider text-gray-500 font-raleway" aria-disabled role="menuitem">
                 <label for=""> POST FROM</label></a>
                  <a @click="getFollowing" href="#" class="block px-4 py-2 text-sm text-gray-600" role="menuitem"><span class="pr-2 align-bottom material-icons">
                  people_alt
                </span>
                 <label for="" class="pt-1 text-gray-900 cursor-pointer"> Following Only</label></a>
                 <a @click="getNearby" href="#" class="block px-4 py-2 text-sm text-gray-600" role="menuitem"><span class="pr-2 align-bottom material-icons">
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
    v-for="(post_info, index) in posts"
    :key="index"
    >
    
    <div class="h-auto p-6 space-x-4 bg-white shadow vs:p-4 mv:w-full ssm:p-2 ssm:w-full vs:w-full sm:w-full w-608 rounded-xl">
      <div class="flex flex-col items-start justify-start">

        <!--section 1-->
        <div class="flex flex-row justify-between flex-grow w-full">
          <div class="inline-flex">
            <img class="rounded-full x-v:absolute w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10" src="img/yami.jpg"/>
            <div class="flex flex-col items-start w-full px-4 vs:px-1 se:px-2 ssm:px-2">
              <div class="flex mt-1 space-x-4 ssm:space-x-0 se:space-x-0 vs:space-x-1 sm:space-x-2">
                <h5 class="text-base font-bold leading-none text-gray-900 x-v:pl-10 vsv:text-xs ssm:text-sm vs:text-sm lvs:text-sm"><router-link to="/edit-profile" >{{post_info.user.firstName}} {{post_info.user.lastName}}</router-link>
                  <span class="inline-block text-blue-900 align-middle material-icons-round md-18">
                    verified
                  </span>
                  <label v-if="post_info.offer_post != null" class="pl-1 font-normal text-gray-500 align-top vs:font-light">posted a shopping offer</label>
                  <label v-if="post_info.request_post != null"  class="pl-1 font-normal text-gray-500 align-top vs:font-light">posted an order request</label>
                </h5>
              </div>
              <div class="vs:flex vs:w-full ssm:w-full ssm:flex vs:pb-2 x-v:ml-10">
                <span class="text-sm leading-none text-gray-500 ssm:text-xs vs:text-xs lvs:text-sm">{{timestamp(post_info.dateCreated)}}</span>
              </div>
            </div>
          </div>
          <div id="3dotmenu" class="vs:mt-1">
            <button @click="edit1=!edit1" class="focus:outline-none ">
              <img class="w-6 h-auto vs:w-4 lvs:w-5 ssm:w-4" src="img/3dot.svg"/>
            </button>
            <div class="flex w-full ">
            <div v-if="edit1" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl ssm:right-5 vs:right-5 sm:right-5 lg:right-95 md:right-5 xl:right-99.1 h-min w-30 ">
             <EditShoppingOfferPostVue v-if="postModalVisible1" @closeModal1="listener1"/>
              <button  @click="togglePostModal1" class="flex flex-row text-base vs:text-sm gap-x-2 focus:outline-none">
               <span class="font-medium text-gray-500 material-icons vs:md-14">
                mode
               </span>
                Edit post
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
              {{delivery_info.status}}</p>
        </div>
        <!--end-->

        <!--section 3-->
        <div class="flex items-center justify-start w-full mt-4 space-x-4 ssm:flex-col ssm:items-start ssm:space-x-0 vs:flex-col vs:items-start vs:space-x-0">
          <div class="flex-col items-start w-full">
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              delivery_dining  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.delivery_area}}</p>
            </div>
            <div class="flex py-2 space-x-2 ">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              alarm  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{timestampSched(post_info.offer_post.deliverySchedule)}}</p>
            </div>
            <div class="flex space-x-2 ">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              shopping_bag  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.capacity}}</p>
            </div>
          </div>
          <div class="flex-col w-full ssm:py-2 vs:py-3">
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              shopping_cart  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.shopping_place}}</p>
            </div>
            <div class="flex py-2 space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              directions_car  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.public_transit}}</p>
            </div>
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              payments  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info.payment_method}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex items-start justify-start flex-grow-0 w-full p-4 mt-4 bg-gray-100 ssm:mt-2 vs:mt-2 rounded-xl">
          <p class="w-full h-auto text-sm leading-loose text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm vs:min-w-0 vs:px-2">{{delivery_info.comment}}</p>
        </div>
        <!--section 4-->

        <!--section 5-->
        <div class="flex w-full pr-8 mt-4 space-x-6 justify-evenly vs:space-x-3 vs:min-w-0 vs:px-2 ssm:space-x-1 ssm:px-0 ssm:pr-0 vs:pr-0">
          <SendRequest v-if="postSendModal" @closeSendRequest="listener3"/>
          <button @click="toggleSendModal" class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
            <span class="pr-2 ssm:pr-0 material-icons md-24 ssm:md-18 xsm:md-18 vs:md-18">
            send
            </span>
            <p class="text-base font-bold leading-none text-gray-600 ssm:text-xs vs:text-xs lvs:text-sm">Send Request</p>
          </button>
          <router-link to="/messages">
          <button class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
           <span class="pr-2 ssm:pr-0 material-icons md-24 ">
           forum
           </span>
            <p class="text-base font-bold leading-none text-gray-600 ssm:text-xs vs:text-xs lvs:text-sm">Chat</p>
          </button>
          </router-link>
          <div>
          <button @click="share1=!share1" class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
           <span class="pr-2 x-v:pr-1 ssm:pr-0 material-icons md-24 x-v:md-16">
           share
           </span>
            <p class="text-base font-bold leading-none text-gray-500 ssm:text-xs vs:text-xs lvs:text-sm">Share</p>
          </button>
          <div class="flex w-full">
            <div v-if="share1" class="target absolute z-30 py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl ssm:right-5 vs:right-5 sm:right-5 lg:right-95 md:right-5 xl:right-99.1 h-min w-30">
              <button @click="showShareDisplay" class="flex flex-row text-base gap-x-2 vs:text-sm ssm:text-sm xsm:text-sm focus:outline-none">
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

  <!--user post-->
  <div id="shopOrder-UserPost" class=" flex items-center justify-center pt-6 x-v:pt-2 dv:float-right">
    <div id="changeBoxRadius" class="h-auto p-6 space-x-4 bg-white shadow vs:p-4 mv:w-full ssm:p-2 ssm:w-full vs:w-full sm:w-full w-608 rounded-xl">
      <div class="flex flex-col items-start justify-start">

        <!--section 1-->
       <div class="flex flex-row justify-between flex-grow w-full">
          <div class="inline-flex">
            <img class="rounded-full x-v:absolute w-14 h-14 vs:w-10 vs:h-10 ssm:w-10 ssm:h-10" src="img/yami.jpg"/>
            <div class="flex flex-col items-start w-full px-4 vs:px-1 se:px-2 ssm:px-2">
              <div class="flex mt-1 space-x-4 ssm:space-x-0 se:space-x-0 vs:space-x-1 sm:space-x-2">
                <h5 class="text-base font-bold leading-none text-gray-900 x-v:pl-10 vsv:text-xs ssm:text-sm vs:text-sm lvs:text-sm">{{user_info1.firstname}} {{user_info1.lastname}}
                  <span class="inline-block text-blue-900 align-middle material-icons-round md-18">
                    verified
                  </span>
                  <label class="pl-1 font-normal text-gray-500 align-top vs:font-light">posted an order request</label>
                </h5>
              </div>
              <div class="vs:flex vs:w-full ssm:w-full ssm:flex vs:pb-2 x-v:ml-10">
                <span class="text-sm leading-none text-gray-500 ssm:text-xs vs:text-xs lvs:text-sm">{{datePosted1}}</span>
              </div>
            </div>
          </div>
          <div id="3dotmenu" class="vs:mt-1">
            <button @click="edit2=!edit2" class="focus:outline-none ">
              <img class="w-6 h-auto vs:w-4 lvs:w-5 ssm:w-4" src="img/3dot.svg"/>
            </button>
            <div class="flex w-full ">
            <div v-if="edit2" class="absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl absolute py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl ssm:right-5 vs:right-5 sm:right-5 lg:right-95 md:right-5 xl:right-99.1 h-min w-30 ">
            <EditOrderRequest v-if="editOrderRequest" @closeModal2="listener5"/>
              <button  @click="toggleEditOrderRequest" class="flex flex-row text-base x-v:text-sm gap-x-2 focus:outline-none">
               <span class="font-medium text-gray-500 material-icons x-v:md-16">
                mode
               </span>
                Edit Post
              </button>
             <UpdateOfferStatus v-if="postModalVisible2" @closeModal2="listener2"/>
              <button  @click="togglePostModal2" class="flex flex-row text-base font-normal x-v:text-sm focus:outline-none gap-x-2">
               <span class="font-normal text-gray-500 material-icons x-v:md-16">
                autorenew
               </span>
                Update Status
              </button>
              <button class="flex flex-row text-base gap-x-2 x-v:text-sm"> 
                <span class="text-gray-500 material-icons x-v:md-16">delete</span>Delete</button>
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
              {{delivery_info1.status}}</p>
        </div>
        <!--end-->

        <!--section 3-->
        <div class="flex items-center justify-start w-full mt-4 space-x-4 ssm:flex-col ssm:items-start ssm:space-x-0 vs:flex-col vs:items-start vs:space-x-0">
          <div class="flex-col items-start w-full">
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              delivery_dining  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info1.delivery_area}}</p>
            </div>
            <div class="flex py-2 space-x-2 ">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              alarm  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{timestampSched(post_info.request_post.deliverySchedule)}}</p>
            </div>
          </div>
          <div class="flex-col w-full ">
            <div class="flex space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              shopping_cart  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info1.shopping_place}}</p>
            </div>
            <div class="flex py-2 space-x-2">
              <span class="w-6 h-6 text-red-600 rounded-full material-icons">
              payments  
              </span>
              <p class="py-1 text-sm leading-none text-gray-900 ssm:text-xs vs:text-xs lvs:text-sm">{{delivery_info1.payment_method}}</p>
            </div>
          </div>
        </div>
        <!--end-->

        <!--section 4-->
        <div class="flex items-center justify-start w-full p-2 mt-4 space-x-4 rounded-lg bg-gray-bgcolor ssm:flex-col ssm:items-start ssm:space-x-0 vs:flex-col vs:items-start vs:space-x-0">
          <div class="flex-col items-start w-full">
          <span class="pb-2 text-base vs:text-sm vs:font-bold sm:text-sm sm:font-bold">Shopping List
            <label class="pl-3 text-gray-500">{{post_info.request_post.shopping_list.text.split(',').length}} items</label>
          </span>
          <div class="flex-col">
            <ul id="shop-list" class="pl-3 text-sm leading-loose list-disc list-inside vs:text-xs vs:leading-relaxed vs:font-semibold sm:text-xs sm:leading-relaxed sm:font-semibold">
              <li v-for="(shoppingList,index ) in post_info.request_post.shopping_list.text.split(',')" :key="index" >{{ shoppingList }}</li>
            </ul>
          </div>
          </div>
          <div class="flex-col items-start w-full xl:pt-6 2xl:pt-6 lg:pt-6">
          <div class="flex-col">
            <ul id="shop-list" class="pl-3 text-sm leading-loose list-disc list-inside vs:text-xs vs:leading-relaxed vs:font-semibold sm:text-xs sm:leading-relaxed sm:font-semibold">
              <li v-for="shopListRequest2 in shopListRequest2" :key="shopListRequest2.items" >{{ shopListRequest2.items }}</li>
            </ul>
          </div>
        </div>
        </div>

        <p class="px-5 py-5 text-sm font-medium leading-loose vs:font-medium ssm:pb-0 vs:text-xs sm:font-semibold sm:text-xs vvs:px-0">
                {{ delivery_info1.comment }}
              </p>
              <hr>
        <!--section 4-->

        <!--section 5-->
        <div class="relative flex w-full pr-8 mt-4 space-x-6 justify-evenly vs:space-x-3 vs:min-w-0 vs:px-2 ssm:space-x-1 ssm:px-0 ssm:pr-0 vs:pr-0">
          <div v-if="post_info.email != user.email && post_info.offer_post != null"  >
            <SendRequest v-if="postSendModal && sendOfferOrRequestpostNum== post_info.offer_post.indexShoppingOfferPost" @closeSendRequest="listener3" :post="post_info"/>
          </div>
          <div v-if="post_info.email != user.email && post_info.request_post != null" >
            <SendOffer v-if="postSendModal && sendOfferOrRequestpostNum== post_info.request_post.indexOrderRequestPost" @closeSendOffer="listener3" :post="post_info"/>
          </div>
          <button v-if="post_info.email != user.email && post_info.offer_post != null" @click="toggleSendModal();sendOfferOrRequestpost = post_info.postIdentity;sendOfferOrRequestpostNum=post_info.offer_post.indexShoppingOfferPost " class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
            <span class="pr-2 ssm:pr-0 material-icons md-24 ssm:md-18 xsm:md-18 vs:md-18">
            send
            </span>
            <p class="text-base font-bold leading-none text-gray-600 ssm:text-xs vs:text-xs lvs:text-sm">Send Request</p>
          </button>
          <button v-if="post_info.email != user.email && post_info.request_post != null" @click="toggleSendModal(); sendOfferOrRequestpost = post_info.postIdentity; sendOfferOrRequestpostNum=post_info.request_post.indexOrderRequestPost" class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
            <span class="pr-2 ssm:pr-0 material-icons md-24 ssm:md-18 xsm:md-18 vs:md-18">
            send
            </span>
            <p class="text-base font-bold leading-none text-gray-600 ssm:text-xs vs:text-xs lvs:text-sm">Send Offer</p>
          </button>
          <router-link v-if="post_info.email != user.email" :to="'/messages/?ID='+toEncrypt(post_info.user.email)">
          <button class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
           <span class="pr-2 ssm:pr-0 material-icons md-24 ">
           forum
           </span>
            <p class="text-base font-bold leading-none text-gray-600 ssm:text-xs vs:text-xs lvs:text-sm">Chat</p>
          </button>
          </router-link>
          <div>
          <button @click="share2=!share2" class="flex items-center space-x-2 focus:outline-none ssm:space-x-1">
           <span class="pr-2 ssm:pr-0 material-icons md-24 ">
           share
           </span>
            <p class="text-base font-bold leading-none text-gray-500 ssm:text-xs vs:text-xs lvs:text-sm">Share</p>
          </button>
          <div class="flex w-full">
            <div v-if="share2" class="target absolute z-30 py-2 pt-2 pl-2 pr-4 leading-loose bg-white rounded-lg shadow-xl ssm:right-5 vs:right-5 sm:right-5 lg:right-95 md:right-5 xl:right-99.1 h-min w-30">
              <button @click="showOrderShareModal" class="flex flex-row text-base gap-x-2 focus:outline-none">
               <span class="font-medium text-gray-500 material-icons x-v:text-sm">
                share
               </span>
                Share on Feed
              </button>
              <button class="flex flex-row py-2 text-base font-normal x-v:inline-block focus:outline-none gap-x-2">
               <span class="font-normal text-gray-500 material-icons x-v:text-sm">
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

   <!--Share Modal-->
    <div @click.self="hideShareModal" id="modal-background" class="bg-opacity-25 z-50">
<div id="modal-content" class="flex-col w-608 space-y-4 bg-white h-auto rounded-lg">
      <div id="modal-header" class="flex flex-row pt-4 space-x-4 px-2 justify-between items-center">
        <button @click="$router.push('edit-profile')" class="focus:outline-none flex items-center space-x-4">
          <img class="w-12 h-12 rounded-full" src="img/asta.jpeg"/>
        <p class="text-base font-bold leading-none text-gray-900">Asta Staria</p>
        </button>
      <button @click="hideShareModal" class="focus:outline-none flex items-center">
        <span class="text-gray-500 material-icons allign-middle" style="font-size: 36px">
        cancel
        </span>
      </button>
      </div>
     <div id="fkmouse" class="modal-body cursor-not-allowed px-2"></div>
     <div id="modal-footer" class="flex px-2 pb-4 items-center justify-center ssm:px-2 vs:px-2">
        <button class="focus:outline-none inline-flex items-center justify-center px-4 py-2 bg-red-700 rounded-full w-full ssm:h-8 ssm:w-full vs:w-full">
          <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-normal text-center text-white">Share Post</p>
      </button>
      </div>
</div>
</div>
<!--end-->

    <!--Display Shared Post-->
    <div id="display-sharedPost" class="pt-6 flex-col dv:float-right justify-center items-center">
<div id="display-content" class="flex-col w-608 space-y-4 bg-white h-auto rounded-lg">
      <div id="display-header" class="flex pt-4 px-2 justify-between items-center">
        <div class="focus:outline-none flex items-center space-x-4">
        <p @click="$router.push('edit-profile')" class="text-base italic leading-none text-gray-900"><span class="font-bold ">Asta Staria</span> shared this post</p>
        </div>
      </div>
     <div id="fkmouse" class="display-body cursor-not-allowed"></div>
</div>
</div>
<!--end-->

   </div>
   </div>
        </div>

   <!----------------------------START OF SHOPPING LISTS--------------------->
        <div class="w-2/5 pt-20 overflow-hidden llg:w-35 pl-7 vs:hidden ssm:hidden md:hidden sm:hidden xsm:hidden">
          <!-----------ACTIVE ORDERS---------------------->
            <div class="mb-6 bg-white shadow-md w-72 rounded-2xl">
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
            <div class="z-0 mb-6 bg-white w-72 rounded-xl vs:hidden xsm:hidden ssm:hidden">
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
            <div class="mb-6 bg-white w-72 rounded-xl">
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
import store from '../store/index'
import moment from "moment"
 
// import EditOrderRequest from "./EditOrderRequest"
import api from '../api'
import SendOffer from './sendOffer.vue'

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
      filter: false,
      filter2: false,
      isOpen:false,
      isOpen1:false,
      isOpen2:false,
      isOpen3:false,
      isOpen4:false,
      // user: null,
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
      post_filter:"nearby",
      post_type:"all",
   
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
    sendOfferOrRequestpost:null,
    sendOfferOrRequestpostNum:null
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
    SendOffer
    // EditOrderRequest,
    
  },
  methods:{
    togglePostModal(){
      this.postModalVisible = !this.postModalVisible
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
    togglecreateShopList(){
      this.createShopList = !this.createShopList
    },
    listener6(){
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
    },
    toEncrypt(val){
      return btoa(val)
    },
    getNearby(){
      this.post_filter = "nearby"
      api.get('api/user/feed',{params:{post_filter:this.post_filter, post_type:this.post_type}}).then((res)=>{
        console.log('nearby', res.data)
      })
    },
    getFollowing(){
      this.post_filter = "following"
      api.get('api/user/feed',{params:{post_filter:this.post_filter, post_type:this.post_type}}).then((res)=>{
        console.log('following', res.data)
      })
    },
    getAll(){
      this.post_type = "all"
      api.get('api/user/feed',{params:{post_filter:this.post_filter, post_type:this.post_type}}).then((res)=>{
        console.log('all', res.data)
      })
    },
    getOffers(){
      this.post_type = "offers"
      api.get('api/user/feed',{params:{post_filter:this.post_filter, post_type:this.post_type}}).then((res)=>{
        console.log('offers', res.data)
      })
    },
     getRequests(){
      this.post_type = "requests"
      api.get('api/user/feed',{params:{post_filter:this.post_filter, post_type:this.post_type}}).then((res)=>{
        console.log('req', res.data)
      })
    },
    timestamp(datetime){
      var postedDate = new Date(datetime)
      var dateToday = new Date()
      var dateDiff = dateToday.getTime() - postedDate.getTime()
      dateDiff = dateDiff/(1000 * 3600 * 24)
      if(dateDiff<1)
        return moment(datetime).format("[Today at] h:mm a");
      else if(dateDiff>=1 &&  dateDiff <2)
        return moment(datetime).format("[Yesterday at] h:mm a");
      else
        return moment(datetime).format("MMM DD, YYYY [at] h:mm a");
    },
    timestampSched(datetime){
      var schedDate = new Date(datetime)
      var dateToday = new Date()
      var dateDiff = schedDate.getTime() - dateToday.getTime()
      dateDiff = dateDiff/(1000 * 3600 * 24)
      console.log(dateDiff)
      if(dateDiff<1 && dateDiff>0)
        return moment(datetime).format("[Today at] h:mm a");
      else if(dateDiff>=1 &&  dateDiff <2)
        return moment(datetime).format("[Tommorow at] h:mm a");
      else
        return moment(datetime).format("[From] MMM DD, YYYY [at] h:mm a");
    }
  },
  computed:{
    user(){
      return store.getters.getUser
    },
    userPersonal(){
      return store.getters.getPersonal
    },
    posts(){
      return store.getters.getPosts
    },
    
  },
}
</script>

<style scoped>
#fkmouse{
  pointer-events: none;
}
#modal-background{
  display:none;
  position:fixed;
    justify-content: center;
    align-items: center;
    background-color: rgba(0,0,0,0.3);
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
}
#display-sharedPost{
  display:none;
}
</style>