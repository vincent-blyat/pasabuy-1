<template>
<Navbar/>
  <!--Desktop Version-->
<div class="desktopVersion">
    <div class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center divide-x divide-light-gray-700 px-2 pb-2">
      <!------------------------------------------------------->
        <div class="mt-20 shadow-md relative" style="min-width:270px">
        
        <div class="relative flex justify-items-center md:justify-items-center pt-1 shadow">
              <button class="focus:outline-none pl-5 hover:text-red-700" @click="backbtn();" type="button"><span class="material-icons pt-2" id="iMessage">
                chat</span></button>
              <h4 class="text-base font-semibold pt-2 pl-4 ">Message</h4>    
        </div>

        <div class="flex justify-center relative py-1 pt-2">
            <input type="text" class="h-8 w-11/12 pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Search" />
            <button class="absolute right-8 pt-1 focus:outline-none hover:text-red-700" @click="searchInputD" type="button"><span class="material-icons">
              search
              </span></button>
    </div><!---end of search bar-->
    <div class="overflow-auto px-1 py-1 h-5/6" id="journal-scroll">
        
        <button @click ="navMark" type="button" class="focus:bg-gray-200 relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition">
          <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
            <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm" id="mark"> {{ inbox[0].name}} <span class="material-icons pl-2" id="iCheck" >
              check_circle
              </span></span> 
              <span class="text-xs text-gray-400 truncate w-36"> {{ inbox[0].message}}
              </span> 
              </div>
            </div>
            <div class="flex flex-col items-start"> 
              <span class="text-gray-700 text-xs">
              <span class="font-bold pl-1 pr-1">·</span>{{ inbox[0].time}}</span>
          </div>
        </button>

        <button @click ="messagebtn" type="button" class=" focus:bg-gray-200 relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition">
          <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
            <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm" id="gwen">{{ inbox[1].name}}<span class="material-icons pl-2" id="iCheck" >
              check_circle
              </span></span> 
              <span class="text-xs text-gray-400 truncate w-36"> {{ inbox[1].message}}
              </span> 
              </div>
            </div>
            <div class="flex flex-col items-start"> 
              <span class="text-gray-700 text-xs">
              <span class="font-bold pl-1 pr-1">·</span>{{ inbox[1].time}}</span>
          </div>
        </button>

        
</div>

    </div><!--end of left corner-->
      <!------------------------------------------------------>
      <!---rightCorner-->
      <div class="vs:w-full mt-20 w-2/5 md:w-3/5 shadow-md relative" style="min-width:400">
        
        <div class="relative flex justify-items-center md:justify-items-center pt-1 shadow py-2">
              <h4 class="text-base font-semibold pt-2 pl-4 " id="active">{{activeName}}</h4>
              <span class="material-icons pl-3 pt-2" id="iCheck" > check_circle </span>
          
        </div>

      <div class="overflow-auto pb-1 h-5/6 mb-1" id="journal-scroll">

        <div class="sticky top-0 flex justify items-center shadow-lg bg-white border">

            <span class="text-sm p-3 w-full">
              <span>You sent a request to</span>
              <span class="font-semibold ml-2">{{recipient}}</span>
              <span class="ml-2">for</span>
              <span class="font-semibold ml-2">Post {{postNum}} </span>

              <div class="flex justify-end relative">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 rounded-full border border-gray-700 "><span>Cancel Request</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full bg-red-700 text-white"><span>View Post</span></button>
              </div>
            </span>
        </div>

        <div class="p-2 flex justify-end">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 text-sm bg-gray-200 rounded-lg">
            <p>{{ chatOutgoing[0].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[0].timeSent}} </span> </div>
        </div>
        
        <div class=" flex justify-end mt-2">
          <div class="ml-32 bg-gray-100 text-sm rounded-lg">
            
            <div class="flex flex-col bg-gray-100 py-2 rounded-lg">
              <div class="mx-4 mb-2 text-sm font-semibold">
                <span>Order Details</span>
              </div>

              <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                <div class="flex flex-col px-2">
                  
                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:18px">place</span>
                    <span class="pl-2 pb-1"> {{placeFrom}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:18px">shopping_cart</span>
                    <span class="pl-2 pb-1">SM {{destination}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:16px">watch_later</span>
                    <span class="pl-2 pb-1">{{timeAlloted}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:16px">payments</span>
                    <span class="pl-2">{{paymentMethod}}</span>
                  </div>
                  

                </div>
              </div>

              <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                <div>
                  <span class="font-semibold">Shopping List<span class="ml-3 text-gray-500">{{shoppingListSize }}items</span></span>
                </div>
                <div>
                    <ul class="text-gray-600 list-disc list-inside pl-4 ">
                      <li v-for="items in shoppingList" :key="items.ShoppingList">
                        <span>
                          {{ items.items}}
                        </span>
                      </li>
                    </ul>
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>
        </div><!----------------------------------------->



        <div class="p-1 ml-12">
         <div class="flex items-end pr-10 mt-1">
            <div class="flex flex-col bg-gray-100 py-2 rounded-lg">
              <div>
              <div class="mx-4 mb-2 text-sm font-semibold">
                <span>Order Details</span>
              </div>

              <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                <div class="flex flex-col px-2">
                  
                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:18px">place</span>
                    <span class="pl-2 pb-1">{{placeFrom}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:18px">shopping_cart</span>
                    <span class="pl-2 pb-1">{{destination}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:16px">watch_later</span>
                    <span class="pl-2 pb-1">{{timeAlloted}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:16px">payments</span>
                    <span class="pl-2">{{paymentMethod}}</span>
                  </div>
                  

                </div>
              </div>

              <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                <div>
                  <span class="font-semibold">Shopping List<span class="ml-3 text-gray-500">8 items</span></span>
                </div>
                <div>
                    <ul class="text-gray-600 list-disc list-inside pl-4 ">
                      <li v-for="items in shoppingList" :key="items.ShoppingList">
                        <span>
                          {{ items.items}}
                        </span>
                      </li>
                    </ul>
                </div>
                <div></div>

              </div>
            </div>
            </div>
         </div>
        </div>

        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8 "> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{ chatIncoming[0].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{ chatIncoming[0].timeReceived}}</span></div>
          </div>
         </div>
        </div>

        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">
            <p>{{chatOutgoing[1].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" >{{chatOutgoing[1].timeSent}}</span> </div>
        </div>


        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[1].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[1].timeReceived}}</span></div>
          </div>
         </div>
        </div>



        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">
            <p>{{chatOutgoing[2].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[2].timeSent}} </span> </div>
        </div>

        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
            <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[2].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[2].timeReceived}}</span></div>
            </div>
         </div>
        </div>

        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">
            <p>{{chatOutgoing[3].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[3].timeSent}}</span> </div>
        </div>

        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[3].received}}</p>
             <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[3].received}}</span></div>
          </div>
         </div>
        </div>


        <div id="chatmsg"></div>

      </div>

        
      <div class=" w-pl-4 pr-4 mt-1 w-full absolute bottom-1 flex flex-cols justify-between items-center" style="min-width:400">
            <div v-if="attachtoggle" class="ml-3 h-12 flex flex-cols justify-between items-center">
              <button id="add" class="rounded-full h-8 w-8 mr-2 pt-1 border-solid border-2 border-red-700 hover:text-red-700">
                <span class="material-icons" style="font-size:18px">
                wallpaper
                </span>
              </button>

              <button class="rounded-full h-8 w-8 pt-1 border-solid border-2 border-red-700 hover:text-red-700">
                <span class="material-icons" style="font-size:22px">
                attachment
                </span>
              </button>
            </div>

              <button class="h-6 w-6 ml-4 mr-1 bg-gray-400 rounded-full focus:outline-none hover:text-white" @click="attachbtn" type="button">
               <span class="material-icons">
                    add</span>
              </button>
              <input type="text" class="w-10/12 h-8 flex pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-400 rounded-full" placeholder="Type a message" id="typemsg" />
              <button  @click="sendbtn" class="w-8 h-8 flex items-center pl-1 rounded-full focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                    send</span>
              </button>
        </div>
    </div><!--end of right corner-->
  </div>
</div><!--end of desktop version-->
  
<!-------------------------------------------------------------->

<!--Mobile Version-->
<div class="mobileVersion">
<div v-show="toggleChat">
    <div class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center divide-x divide-light-gray-700 px-2 pb-2">
      <!------------------------------------------------------->
        <div class="vs:w-full mt-16 shadow-md relative" style="min-width:400">
        
        <div class="relative flex justify-items-center md:justify-items-center pt-1 shadow">
              <button class="focus:outline-none pl-5 hover:text-red-700" @click="backChat" type="button"><span class="material-icons pt-2" id="iMessage">
                keyboard_backspace</span></button>
              <h4 class="text-base font-bold pt-2 pl-4 ">{{activeName}}</h4> 
               <span class="material-icons pl-3 pt-3" id="iCheck" > check_circle </span>
          
                <div>
                  <div v-if="toggle">
                    <button class="absolute right-0 mt-7 px-2 h-9 w-24 rounded bg-gray-100 border-solid border-2 border-gray-300 hover:text-red-700"><span class="font-semibold">Delete</span></button>
                  </div>
                  <button @click="threedots" class=" absolute right-4 pt-1 focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                  more_horiz</span></button>
                </div> 
        </div>

    <div class="overflow-auto px-1 py-1 h-5/6" id="journal-scroll">
        
                <div class="sticky top-0 flex justify items-center shadow-lg bg-white border">

            <span class="text-sm p-3 w-full">
              <span>You sent a request to</span>
              <span class="font-semibold ml-2">{{recipient}}</span>
              <span class="ml-2">for</span>
              <span class="font-semibold ml-2">Post {{postNum}} </span>

              <div class="flex justify-end relative">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 rounded-full border border-gray-700 "><span>Cancel Request</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full bg-red-700 text-white"><span>View Post</span></button>
              </div>
            </span>
        </div>

        <div class="p-2 flex justify-end">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 text-sm bg-gray-200 rounded-lg">
            <p>{{ chatOutgoing[0].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[0].timeSent}} </span> </div>
        </div>
        
        <div class=" flex justify-end mt-2">
          <div class="ml-32 bg-gray-100 text-sm rounded-lg">
            
            <div class="flex flex-col bg-gray-100 py-2 rounded-lg">
              <div class="mx-4 mb-2 text-sm font-semibold">
                <span>Order Details</span>
              </div>

              <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                <div class="flex flex-col px-2">
                  
                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:18px">place</span>
                    <span class="pl-2 pb-1"> {{placeFrom}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:18px">shopping_cart</span>
                    <span class="pl-2 pb-1">SM {{destination}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:16px">watch_later</span>
                    <span class="pl-2 pb-1">{{timeAlloted}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:16px">payments</span>
                    <span class="pl-2">{{paymentMethod}}</span>
                  </div>
                  

                </div>
              </div>

              <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                <div>
                  <span class="font-semibold">Shopping List<span class="ml-3 text-gray-500">{{shoppingListSize }}items</span></span>
                </div>
                <div>
                    <ul class="text-gray-600 list-disc list-inside pl-4 ">
                      <li v-for="items in shoppingList" :key="items.ShoppingList">
                        <span>
                          {{ items.items}}
                        </span>
                      </li>
                    </ul>
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>
        </div><!----------------------------------------->



        <div class="p-1 ml-12">
         <div class="flex items-end pr-10 mt-1">
            <div class="flex flex-col bg-gray-100 py-2 rounded-lg">
              <div>
              <div class="mx-4 mb-2 text-sm font-semibold">
                <span>Order Details</span>
              </div>

              <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                <div class="flex flex-col px-2">
                  
                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:18px">place</span>
                    <span class="pl-2 pb-1">{{placeFrom}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:18px">shopping_cart</span>
                    <span class="pl-2 pb-1">{{destination}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:16px">watch_later</span>
                    <span class="pl-2 pb-1">{{timeAlloted}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:16px">payments</span>
                    <span class="pl-2">{{paymentMethod}}</span>
                  </div>
                  

                </div>
              </div>

              <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                <div>
                  <span class="font-semibold">Shopping List<span class="ml-3 text-gray-500">8 items</span></span>
                </div>
                <div>
                    <ul class="text-gray-600 list-disc list-inside pl-4 ">
                      <li v-for="items in shoppingList" :key="items.ShoppingList">
                        <span>
                          {{ items.items}}
                        </span>
                      </li>
                    </ul>
                </div>
                <div></div>

              </div>
            </div>
            </div>
         </div>
        </div>

        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8 "> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{ chatIncoming[0].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{ chatIncoming[0].timeReceived}}</span></div>
          </div>
         </div>
        </div>

        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">
            <p>{{chatOutgoing[1].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" >{{chatOutgoing[1].timeSent}}</span> </div>
        </div>


        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[1].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[1].timeReceived}}</span></div>
          </div>
         </div>
        </div>



        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">
            <p>{{chatOutgoing[2].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[2].timeSent}} </span> </div>
        </div>

        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
            <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[2].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[2].timeReceived}}</span></div>
            </div>
         </div>
        </div>

        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">
            <p>{{chatOutgoing[3].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[3].timeSent}}</span> </div>
        </div>

        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[3].received}}</p>
             <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[3].received}}</span></div>
          </div>
         </div>
        </div>



        <div id="chatmsg"></div>

    </div><!--end overflow--->

    <div class=" w-pl-4 pr-4 mt-1 w-full absolute bottom-1 flex flex-cols justify-between items-center" style="min-width:400">
            <div v-if="attachtoggle" class="ml-3 h-12 flex flex-cols justify-between items-center">
              <button class="rounded-full h-8 w-8 mr-2 pt-1 border-solid border-2 border-red-700 hover:text-red-700">
                <span class="material-icons" style="font-size:18px">
                wallpaper
                </span>
              </button>

              <button class="rounded-full h-8 w-8 pt-1 border-solid border-2 border-red-700 hover:text-red-700">
                <span class="material-icons" style="font-size:22px">
                attachment
                </span>
              </button>
            </div>

              <button class="h-6 w-6 ml-4 mr-1 bg-gray-400 rounded-full focus:outline-none hover:text-white" @click="attachbtn" type="button">
               <span class="material-icons">
                    add</span>
              </button>
              <input type="text" class="w-10/12 h-8 flex pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-400 rounded-full" placeholder="Type a message" id="typemsg" />
              <button  @click="sendbtn" class="w-8 h-8 flex items-center pl-1 rounded-full focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                    send</span>
              </button>
        </div>

  </div>
</div>
</div><!-------------end inbox------------->
<div v-show="toggleInbox">
    <div class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center divide-x divide-light-gray-700 px-2 pb-2">
      
      <!------------------------------------------------------->
        <div class="vs:w-full mt-16 shadow-md relative" style="min-width:400">
        
        <div class="relative flex justify-items-center md:justify-items-center pt-1 shadow">
              <router-link to="/dashboard">
              <button class="focus:outline-none pl-5 hover:text-red-700" @click="backbtn();" type="button"><span class="material-icons pt-2" id="iMessage">
                keyboard_backspace</span></button></router-link>
              <h4 class="text-base font-bold pt-2 pl-4 ">Message</h4>    
        </div>

        <div class="flex justify-center relative py-1 pt-3">
            <input type="text" class="h-8 w-11/12 pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Search" />
            <button class="absolute right-8 pt-1 focus:outline-none hover:text-red-700" @click="searchInputD" type="button"><span class="material-icons">
              search
              </span></button>
        </div><!---end of search bar-->
    <div class="overflow-auto px-1 py-1 h-5/6" id="journal-scroll">
        
        <button @click ="navMark" type="button" class="focus:bg-gray-200 relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition">
          <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
            <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm" id="mark">{{inbox[0].name}}<span class="material-icons pl-2" id="iCheck" >
              check_circle
              </span></span> 
              <span class="text-xs text-gray-400 truncate w-50 s:w-32 md:w-28 xl:w-36 lg:w-36 2xl:w-36"> {{inbox[0].message}}
              </span> 
              </div>
            </div>
            <div class="flex flex-col items-start"> 
              <span class="text-gray-700 text-xs">
              <span class="font-bold pl-1 pr-1">·</span>{{inbox[0].time}}</span>
          </div>
        </button>

        <button @click ="messagebtn" type="button" class=" focus:bg-gray-200 relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition">
          <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
            <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm" id="gwen">{{inbox[1].name}}<span class="material-icons pl-2" id="iCheck" >
              check_circle
              </span></span> 
              <span class="text-xs text-gray-400 truncate w-50 s:w-32 md:w-28 xl:w-36 lg:w-36 2xl:w-36"> {{inbox[1].message}}
              </span> 
              </div>
            </div>
            <div class="flex flex-col items-start"> 
              <span class="text-gray-700 text-xs">
              <span class="font-bold pl-1 pr-1">·</span>{{inbox[1].time}}</span>
          </div>
        </button>

    </div>
  </div>
</div>

</div>

</div><!--end of mobile version-->


</template>

<script>
import Navbar from './Navbar'
import api from '../api'
export default {
    components:{
      Navbar,

    },
    props:{
      //message: String 
    },
    data() {
      return{
          users: null,
          messages: null,
        //buttons
          toggle:false,
          attachtoggle: false,
          toggleInbox:true,
          toggleChat: false,
        //inbox
          inbox: [
            { name: 'Mark Aral', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins ago'},
            { name: 'Gwen Lopez', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins ago'},
            { name: 'Monica Rambeau', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins ago'},
            { name: 'Wanda Maximoff', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins ago'},
            { name: 'Wanda Maximoff', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins ago'},
          
          ],
        //chat
          activeName: 'Mark Aral',
          chatIncoming: [
            { received: 'Yeah, sure! No problem. I am already on my way to SM City Legazpi.', timeReceived:'1:26 PM    |    Today'},
            { received: 'Sorry, it took me a while. I had to shop for three orders. Anyway, I am already in my car. I will deliver these two orders first here in Legazpi.', timeReceived:'2:40 PM    |    Today'},
            { received: 'I am two mins away from your house. ', timeReceived:'3:12 PM    |    Today'},
            { received: 'No problem. Thanks as well for the handsome pay!', timeReceived:'3:39 PM    |    Today'},
          ],
          chatOutgoing:[
            { sent: 'Do you think you can do it in time? I need it before 4 pm so I hope you can deliver it in time.', timeSent:'1:24 PM    |    Today'},
            { sent: 'Thank you so much! Let me know when you are on your way.', timeSent:'1:31 PM    |    Today'},
            { sent: 'No problem, chat me when you are near my house already', timeSent:'2:45 PM    |    Today'},
            { sent: 'Thanks for help', timeSent: '3:36  | Today'},
          ],
          //sent a request
          activity: 'You sent a request to to',
          recipient: 'Mark Aral',
          postNum: '#2021352',
          placeFrom: 'Banquerohan, Legazpi City',
          destination: 'SM City ',
          timeAlloted: 'Tomorrow, 5 PM',
          paymentMethod: 'Payment First via GCash transfer',

          //shoppingList
          shoppingList: [
            { items: 'Baking Soda'},
            { items: 'Choco Syrup'},
            { items: 'cocoa powder'},
            { items: 'flour 1 kg'},
            { items: 'brown sugar'},
            { items: 'cocoa powder'},
          ],
          shoppingListSize: 8,

      }
    },

    methods: {
      sendbtn(){
        var printtext = document.getElementById('chatmsg');
        var copytext = document.getElementById('typemsg');
        
        var copiedtext = copytext.value;
        if(copiedtext!==''){
          var printnow = '<div class="p-2 flex justify-end ">'+'<div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">'+copiedtext+'<span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" >'+'<br>'+'3:45 PM'+' | '+'Today'+'</span>'+'</div> '
              
          printtext.insertAdjacentHTML('beforeend', printnow);
          document.getElementById('typemsg').value = '';
          var box = document.getElementById('journal-scroll');
          box.scrollIntoView();
        }
      },//end sendbtn

      messagebtn(){
        this.toggleInbox=!this.toggleInbox;
        this.toggleChat=!this.toggleChat;
        var b = document.getElementById('gwen');
        var bText = b.textContent;
        var bLen = bText.length;
        var res = bText.substring(0, bLen-13);
        document.getElementById("active").innerHTML = res;
      },

       navMark(){
        this.toggleInbox=!this.toggleInbox;
        this.toggleChat=!this.toggleChat;
        var b = document.getElementById('mark');
        var bText = b.textContent;
        var bLen = bText.length;
        var res = bText.substring(0, bLen-13);
        document.getElementById("active").innerHTML = res;
      },

      backChat(){
        this.toggleInbox=!this.toggleInbox;
        this.toggleChat=!this.toggleChat;
      },

      threedots(){
        this.toggle = !this.toggle;
        
      },//end threedots
      attachbtn(){
        this.attachtoggle=!this.attachtoggle;
      },
      

    },//end methods
     mounted(){
      api.get('/api/users').then((response)=>{     
        console.log(response.data);
      })
    }

  }//end export default

const add = document.querySelector("#add");
const del = document.querySelector("#del");

document.addEventListener("click", function(event) { 
    if(event.target.closest(".add")) return add.classList.add("hide");

    if(event.target.closest(".del")) return del.classList.add("hide");

})

</script>


<style>
    .hide{
    display:none;
}

#journal-scroll::-webkit-scrollbar {
    width: 3px;
    cursor: pointer;
  }

#journal-scroll::-webkit-scrollbar-track {
    background-color: rgba(229, 231, 235, var(--bg-opacity));
    cursor: pointer;
}

#scrollInbox::-webkit-scrollbar-thumb {
    cursor: pointer;
    background-color: rgba(185, 28, 28)

}


#scrollInbox::-webkit-scrollbar {
    width: 0px;
    cursor: pointer;
  }

#scrollInbox::-webkit-scrollbar-track {
    background-color: rgba(219,216,216, var(--bg-opacity));
    cursor: pointer;
}

#scrollInbox::-webkit-scrollbar-thumb {
    cursor: pointer;
    background-color: rgb(219, 216, 216)

}

/*minimized desktop version and mobile version
screen sizes lesser than 600px*/

.desktopVersion{
  display:none;
  }
.mobileVersion{
  display:inline;
}
 
/*for screen sizes 768px++*/
@media only screen and (min-width: 600px) {
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

.material-icons {
font-family: 'Material Icons';
font-weight: normal;
font-style: normal;
line-height: 1;
text-transform: none;
letter-spacing: normal;
word-wrap: normal;
white-space: nowrap;
direction: ltr;
/* Support for all WebKit browsers. */
-webkit-font-smoothing: antialiased;
/* Support for Safari and Chrome. */
text-rendering: optimizeLegibility;
/* Support for Firefox. */
-moz-osx-font-smoothing: grayscale;
/* Support for IE. */
font-feature-settings: 'liga';
}
</style>