<template>
<Navbar/>
  <!--Desktop Version-->
<div class="desktopVersion md:w-full vs:w-full">
    <div class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center divide-x divide-light-gray-700 px-2 pb-2">
      
      <!--------------------------inbox corner----------------------------->
        <div class="mt-20 md:1/5 shadow-md relative" style="min-width:300px">
        
        <div class="relative flex justify-items-center md:justify-items-center pb-2 pt-1 shadow">
              <button class="focus:outline-none pl-5 hover:text-red-700" @click="backbtn();" type="button"><span class="material-icons pt-2" id="iMessage">
                chat</span></button>
              <h4 class="text-base font-semibold pt-2 pl-4 ">Message</h4>    
        </div>
        <div v-if="searchMessageInactive" class="flex justify-center w-full relative py-1 pt-2">
            <input type="text" class="h-8 w-11/12 pl-5 border font-normal text-sm focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Search"/>
            <button  @click="searchBtn" class="align-middle absolute right-8 pt-1 h-7 focus:outline-none hover:text-red-700"><span class="material-icons" style="font-size:22px">
              search
              </span></button>
        </div><!---end of search bar-->

        <button v-if="showSearchResults" class="flex justify-center w-full relative py-1 pt-2">
            <input type="text" class="h-8 w-9/12 pl-5 border font-normal text-sm focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Mark" id="search"/>
            <button class="align-middle mt-1 ml-1 flex items-center h-6 w-6 rounded-full bg-gray-300 focus:outline-none hover:text-red-700">
              <span  @click="closeSearchResults" class="material-icons pl-1" style="font-size:17px">
              close
              </span></button>
        </button><!---end of search bar-->


        <div class="overflow-auto px-1 py-1 h-5/6" id="journal-scroll">
            
          <div v-if="searchMessageInactive">
            <button
            v-for="(chatRoom,index) in chatRooms"
            :key="index"
            @click="setRoom(chatRoomNames[index], 
                            chatRoom.messageRoomNumber)"
            type="button"
            class="focus:bg-gray-200 relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition"
            >
            <div class="flex ml-2">
              <img
                src="https://ptetutorials.com/images/user-profile.png"
                alt="sunil"
                class="rounded-lg h-8 w-7 pt-1"
              />
              <div class="flex flex-col justify-between items-start ml-2">
                <span class="font-medium text-sm" id="mark">
                  {{ chatRoomNames[index]}}
                  <span class="material-icons pl-2" id="iCheck">
                    check_circle
                  </span>
                </span>
               <span class="text-xs text-gray-400 truncate w-36" v-if="chatRoom.get_messages[chatRoom
                                                                        .get_messages.length-1].messageSender === authUser">
                  You : 
                  <strong>{{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .messageText}}</strong>
                </span>
                <span class="text-xs text-gray-400 truncate w-36" v-else>
                  {{chatRoom.get_messages[chatRoom
                    .get_messages.length-1]
                    .get_message_sender.firstName}} 
                    {{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .get_message_sender.lastName}}: 
                  <strong>{{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .messageText}}</strong>
                </span>
              </div>
            </div>
            <div class="flex flex-col items-start">
              <span class="text-gray-700 text-xs">
                <span class="font-bold pl-1 pr-1">·
                  </span>
                  {{  timestamp(chatRoom
                  .get_messages[chatRoom
                  .get_messages.length-1].dateCreated)}}
                  </span
              >
            </div>
          </button>  
          </div> <!---------------navigation message------------>

          <div v-if="showSearchResults" class="divide-y divide-gray-300">

            <div class="py-2 flex justify-center font-normal text-xs italic">
              <span>Search Results</span>
            </div>
            <div>
               <button
            v-for="(chatRoom,index) in chatRooms"
            :key="index"
            @click="setRoom(chatRoomNames[index], 
                            chatRoom.messageRoomNumber)"
            type="button"
            class="focus:bg-gray-200 relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition"
            >
            <div class="flex ml-2">
              <img
                src="https://ptetutorials.com/images/user-profile.png"
                alt="sunil"
                class="rounded-lg h-8 w-7 pt-1"
              />
              <div class="flex flex-col justify-between items-start ml-2">
                <span class="font-medium text-sm" id="mark">
                  {{ chatRoomNames[index]}}
                  <span class="material-icons pl-2" id="iCheck">
                    check_circle
                  </span>
                </span>
                <span class="text-xs text-gray-400 truncate w-36" v-if="chatRoom.get_messages[chatRoom
                                                                        .get_messages.length-1].messageSender === authUser">
                  You : 
                  <strong>{{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .messageText}}</strong>
                </span>
                <span class="text-xs text-gray-400 truncate w-36" v-else>
                  {{chatRoom.get_messages[chatRoom
                    .get_messages.length-1]
                    .get_message_sender.firstName}} 
                    {{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .get_message_sender.lastName}}: 
                  <strong>{{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .messageText}}</strong>
                </span>
              </div>
            </div>
            <div class="flex flex-col items-start">
              <span class="text-gray-700 text-xs">
                <span class="font-bold pl-1 pr-1">·
                  </span>
                  {{  timestamp(chatRoom
                  .get_messages[chatRoom
                  .get_messages.length-1].dateCreated)}}
                  </span
              >
            </div>
          </button>  
            </div>
            
          </div> <!---------------search message results------------>
        </div>

    </div><!--end of left corner-->
      <!------------------------------------------------------>
      <!---Chat Corner-->
      <div class="vs:w-full mt-20 w-2/5 md:w-4/5 shadow-md relative" style="min-width:400">
        
        <div class="relative flex justify-items-center md:justify-items-center pt-1 shadow py-2">
              <h4 class="text-base font-semibold pt-2 pl-4 " id="active">{{activeName}}</h4>
              <span class="material-icons pl-3 pt-2" id="iCheck" > check_circle </span>
          
        </div>

      <div class="overflow-auto pb-1 h-4/5 mb-1" id="journal-scroll">

       <!--------------U sent a request to Mark Arl------>
        <div v-if="false" class="sticky top-0 flex justify items-center shadow-lg bg-white border">
            <span class="text-sm p-3 w-full">
              <span>You sent a request to</span>
              <span class="font-semibold ml-2">{{recipient}}</span>
              <span class="ml-2">for</span>
              <span class="font-semibold ml-2">Post {{postNum}} </span>
              
              <div class="flex justify-end relative">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>Cancel Request</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>View Post</span></button>
              </div>
            </span>
        </div><!------------------->
        <!--------------Someone sent u a request------>
        <div v-if="true" class="sticky top-0 flex justify items-center shadow-lg bg-white border">
            <span class="text-sm p-3 w-full">
              <span><span class="font-semibold mr-2 ">{{sender}}</span>request you a request</span>
              <span class="ml-2">for</span>
              <span class="font-semibold ml-2">Post {{postNum2}} </span>
              
              <div class="flex justify-end relative">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>Decline</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Accept</span></button>
              </div>
            </span>
        </div><!------------------->
        <!--------------transaction details------>
        <div v-if="false" class="sticky top-0 flex justify items-center shadow-lg bg-white border">
            <span class="text-sm p-3 w-full">
              <div class="flex flex-row justify-between">
                <span>Transaction <span class="font-semibold ml-2">{{postNum2 }} </span> </span>
                
                <span class="rounded border border-blue-700 px-1">Confirmed</span>
                
              </div>
              <div class="flex justify-end relative">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>View Details</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Update</span></button>
              </div>
            </span>
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
              
      <div class="p-1 pl-2"
            v-for="(chat, index) in chatRooms"
            :key="index"
            >
      <div v-if="chat.messageRoomNumber===activeRoom">
      <div class="p-1 pl-2"
            v-for="(msg, index) in chat.get_messages"
            :key="index"
            >
            <div v-if="msg.messageSender === authUser">
             <div class="flex justify-end pr-10 mt-1">
              <div class="ml-32 pt-2 pl-4 pb-3 pr-4 text-sm bg-gray-100 rounded-lg">
                <p>{{ msg.messageText }}</p>
               
                <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px">
                  {{ timestamp(msg.dateCreated) }}  
                </span>
              </div>
            </div>
            </div>
             <div v-else>
             <div class="flex items-end pr-10 mt-1">
              <div class="ml-4 mr-10 p-3 bg-gray-200 text-sm rounded-lg ">
                <p>{{ msg.messageText }}</p>
               
                <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px">
                  {{ timestamp(msg.dateCreated) }}  
                </span>
              </div>
            </div>
            </div>
      </div>
      </div>
      </div>
        <div id="chatmsg"></div>
      </div>
      <div v-if="attachment" class="sticky bottom-11">
          <div class="w-full bg-white bg-opacity-100 flex justify-start pt-2">
            
            <div class="flex items-center">
              <input type="file" id="fileInput" accept=" .png .jpg .xls,.xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel" style="display:none">
              <button id="attachFile" @click="attachFile" class=" w-8 bg-gray-100 ml-3 mb-2 focus:outline-none hover:bg-white hover:text-red-700 rounded-md">
              <span class="material-icons" style="font-size:22px">
                attachment</span>
              </button>
              <span id="file" class="text-sm font-semibold text-gray-500 pl-4 pb-1 pb-2">No file chosen yet</span>
            </div>
          </div>
      </div>
       
      <div class=" w-pl-4 pr-4 mt-1 w-full absolute bottom-1 flex flex-cols justify-between items-center" style="min-width:400">
              <button class="h-6 w-6 ml-4 mr-1 bg-gray-400 rounded-full focus:outline-none hover:text-white" @click="attachbtn" type="button">
               <span class="material-icons" id="attach">
                    {{attach}}</span>
              </button>
             <input
              type="text"
              class="w-10/12 h-8 flex pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-400 rounded-full"
              placeholder="Type a message"
              id="typemsg"
              @keyup.enter="sendbtn"
              v-model="message"
            />
             <button  @click="sendbtn" class="w-8 h-8 flex items-center pl-1 rounded-full focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                    send</span>
              </button>
      </div>
      </div>
    </div><!--end of right corner-->
  </div>
<!--end of desktop version-->


<!------------mobile version--------------------->
<div class="mobileVersion">
<div v-show="toggleChat">
    <div class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center divide-x divide-light-gray-700 px-2 pb-2">
      <!------------------------------------------------------->
        <div class="vs:w-full mt-20 shadow-md" style="min-width:400">
        
        <div class="flex items-center justify-between md:items-center pt-1 shadow">
            <div class="flex flex-row">
              <button class="focus:outline-none pl-5 hover:text-red-700" @click="backChat" type="button"><span class="material-icons pt-2" id="iMessage">
                  keyboard_backspace</span></button>
              <h4 class="text-base font-bold pt-2 pl-4 ">{{activeName}}</h4> 
              <span class="material-icons pl-3 pt-3" id="iCheck" > check_circle </span>
            </div>
            <div class="align-middle">
              <button v-if="toggle" class="absolute right-2 mt-7 px-2 h-9 w-24 rounded bg-gray-100 border-solid border-2 border-gray-300 hover:text-red-700"><span class="font-semibold">Delete</span></button>
              <button @click="threedots" class="pt-1 mr-3 focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                  more_horiz</span></button>
            </div> 
        </div>
        <!--------------Someone sent u a request------>
        <div v-if="true" class="top-0 flex justify items-center shadow-lg bg-white border">
            <span class="text-sm p-3 w-full">
              <span><span class="font-semibold mr-2 ">{{sender}}</span>request you a request</span>
              <span class="ml-2">for</span>
              <span class="font-semibold ml-2">Post {{postNum2}} </span>
              
              <div class="flex justify-end">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>Decline</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Accept</span></button>
              </div>
            </span>
        </div><!------------------->
        <div v-if="false" class="sticky top-0 flex justify items-center shadow-lg bg-white border">
            <span class="text-sm p-3 w-full">
              <span>You sent a request to</span>
              <span class="font-semibold ml-2">{{recipient}}</span>
              <span class="ml-2">for</span>
              <span class="font-semibold ml-2">Post {{postNum}} </span>
              <div class="flex justify-end">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 rounded-full border border-gray-700 "><span>Cancel Request</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full bg-red-700 text-white"><span>View Post</span></button>
              </div>
            </span>
        </div><!------------------->
        <!--------------transaction details------>
        <div v-if="false" class="sticky top-0 flex justify items-center shadow-lg bg-white border">
            <span class="text-sm p-3 w-full">
              <div class="flex flex-row justify-between">
                <span>Transaction <span class="font-semibold ml-2">{{postNum2 }} </span> </span>
                
                <span class="rounded border border-blue-700 px-1">Confirmed</span>
                
              </div>
              <div class="flex justify-end">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>View Details</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Update</span></button>
              </div>
            </span>
        </div><!------------------->
      <!----chat box---->
      <div class="overflow-auto overflow-x-hidden px-1 py-1 h-4/6" id="journal-scroll">
        
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
        
      <div class="p-1 pl-2"
            v-for="(chat, index) in chatRooms"
            :key="index"
            >
      <div v-if="chat.messageRoomNumber===activeRoom">
      <div class="p-1 pl-2"
            v-for="(msg, index) in chat.get_messages"
            :key="index"
            >
            <div v-if="msg.messageSender === authUser">
             <div class="flex justify-end pr-10 mt-1">
              <div class="ml-32 pt-2 pl-4 pb-3 pr-4 text-sm bg-gray-100 rounded-lg">
                <p>{{ msg.messageText }}</p>
               
                <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px">
                  {{ timestamp(msg.dateCreated) }}  
                </span>
              </div>
            </div>
            </div>
             <div v-else>
             <div class="flex items-end pr-10 mt-1">
              <div class="ml-4 mr-10 p-3 bg-gray-200 text-sm rounded-lg ">
                <p>{{ msg.messageText }}</p>
               
                <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px">
                  {{ timestamp(msg.dateCreated) }}  
                </span>
              </div>
            </div>
            </div>
      </div>
      </div>
      </div>

        <div id="chatmsg"></div>
    </div><!--end overflow--->
      <div v-if="attachment" class="sticky bottom-11">
          <div class="w-full bg-white bg-opacity-100 flex justify-start pt-2">
            
            <div class="flex items-center">
              <input type="file" id="fileInput" accept=" .png .jpg .xls,.xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel" style="display:none">
              <button id="attachFile" @click="attachFile" class=" w-8 bg-gray-100 ml-3 mb-2 focus:outline-none hover:bg-white hover:text-red-700 rounded-md">
              <span class="material-icons" style="font-size:22px">
                attachment</span>
              </button>
              <span id="file" class="text-sm font-semibold text-gray-500 pl-4 pb-1 pb-2">No file chosen yet</span>
            </div>
          </div>
      </div>
       
      <div class=" w-pl-4 pr-4 mt-1 w-full absolute bottom-1 flex flex-cols justify-between items-center" style="min-width:400">
              <button class="h-6 w-6 ml-4 mr-1 bg-gray-400 rounded-full focus:outline-none hover:text-white" @click="attachbtn" type="button">
               <span class="material-icons" id="attach2">
                    {{attach}}</span>
              </button>
             <input
              type="text"
              class="w-10/12 h-8 flex pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-400 rounded-full"
              placeholder="Type a message"
              id="typemsg"
              @keyup.enter="sendbtn"
              v-model="message"
            />  <button  @click="sendbtn" class="w-8 h-8 flex items-center pl-1 rounded-full focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                    send</span>
              </button>
      </div>
  </div>
</div>
</div><!-------------end inbox------------->
<div v-show="toggleInbox">
    <div class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center divide-x divide-light-gray-700 px-2 pb-2">
      
      <!------------------------------------------------------->
        <div class="vs:w-full mt-20 shadow-md sm:w-10/12">
        
        <div class="flex justify-items-center md:justify-items-center pt-1 shadow">
              <router-link to="/dashboard">
              <button class="focus:outline-none pl-5 hover:text-red-700" @click="backbtn();" type="button"><span class="material-icons pt-2" id="iMessage">
                keyboard_backspace</span></button></router-link>
              <h4 class="text-base font-bold pt-2 pl-4 ">Message</h4>    
        </div>
        <div class="w-full flex justify-center">
          <div v-if="searchMessageInactive" class="border mt-2 border-gray-300 bg-white flex w-10/12 justify-center focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full">
              <input type="text" class="h-7 w-10/12 pl-3 rounded font-normal text-sm focus:outline-none" placeholder="Search"/>
              <button  @click="searchBtn" class="align-middle ml-4 pt-1 h-7 focus:outline-none hover:text-red-700"><span class="material-icons" style="font-size:22px">
                search
                </span></button>
          </div><!---end of search bar-->
        </div>
        <button v-if="showSearchResults" class="flex justify-center w-full py-1 pt-2 focus:outline-none">
            <input type="text" class="h-8 w-9/12 pl-5 border font-normal text-sm focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Mark" id="search"/>
            <button class="align-middle mt-1 ml-1 flex items-center h-6 w-6 rounded-full bg-gray-300 focus:outline-none hover:text-red-700">
              <span  @click="closeSearchResults" class="material-icons pl-1" style="font-size:17px">
              close
              </span></button>
        </button><!---end of search bar-->

    <div class="overflow-auto px-1 py-1 h-5/6" id="journal-scroll">

          <div v-if="searchMessageInactive">
            <button
            v-for="(chatRoom,index) in chatRooms"
            :key="index"
            @click="setRoom(chatRoomNames[index], 
                            chatRoom.messageRoomNumber)"
            type="button"
            class="focus:bg-gray-200 relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition"
            >
            <div class="flex ml-2">
              <img
                src="https://ptetutorials.com/images/user-profile.png"
                alt="sunil"
                class="rounded-lg h-8 w-7 pt-1"
              />
              <div class="flex flex-col justify-between items-start ml-2">
                <span class="font-medium text-sm" id="mark">
                  {{ chatRoomNames[index]}}
                  <span class="material-icons pl-2" id="iCheck">
                    check_circle
                  </span>
                </span>
                <span class="text-xs text-gray-400 truncate w-36" v-if="chatRoom.get_messages[chatRoom
                                                                        .get_messages.length-1].messageSender === authUser">
                  You : 
                  <strong>{{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .messageText}}</strong>
                </span>
                <span class="text-xs text-gray-400 truncate w-36" v-else>
                  {{chatRoom.get_messages[chatRoom
                    .get_messages.length-1]
                    .get_message_sender.firstName}} 
                    {{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .get_message_sender.lastName}}: 
                  <strong>{{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .messageText}}</strong>
                </span>
              </div>
            </div>
            <div class="flex flex-col items-start">
              <span class="text-gray-700 text-xs">
                <span class="font-bold pl-1 pr-1">·
                  </span>
                  {{  timestamp(chatRoom
                  .get_messages[chatRoom
                  .get_messages.length-1].dateCreated)}}
                  </span
              >
            </div>
          </button>   
          </div> <!---------------navigation message------------>

          <div v-if="showSearchResults" class="divide-y divide-gray-300">

            <div class="py-2 flex justify-center font-normal text-xs italic">
              <span>Search Results</span>
            </div>
            <div>
               <button
            v-for="(chatRoom,index) in chatRooms"
            :key="index"
            @click="setRoom(chatRoomNames[index], 
                            chatRoom.messageRoomNumber)"
            type="button"
            class="focus:bg-gray-200 relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition"
            >
            <div class="flex ml-2">
              <img
                src="https://ptetutorials.com/images/user-profile.png"
                alt="sunil"
                class="rounded-lg h-8 w-7 pt-1"
              />
              <div class="flex flex-col justify-between items-start ml-2">
                <span class="font-medium text-sm" id="mark">
                  {{ chatRoomNames[index]}}
                  <span class="material-icons pl-2" id="iCheck">
                    check_circle
                  </span>
                </span>
                <span class="text-xs text-gray-400 truncate w-36" v-if="chatRoom.get_messages[chatRoom
                                                                        .get_messages.length-1].messageSender === authUser">
                  You : 
                  <strong>{{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .messageText}}</strong>
                </span>
                <span class="text-xs text-gray-400 truncate w-36" v-else>
                  {{chatRoom.get_messages[chatRoom
                    .get_messages.length-1]
                    .get_message_sender.firstName}} 
                    {{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .get_message_sender.lastName}}: 
                  <strong>{{  chatRoom
                    .get_messages[chatRoom
                    .get_messages.length-1]
                    .messageText}}</strong>
                </span>
              </div>
            </div>
            <div class="flex flex-col items-start">
              <span class="text-gray-700 text-xs">
                <span class="font-bold pl-1 pr-1">·
                  </span>
                  {{  timestamp(chatRoom
                  .get_messages[chatRoom
                  .get_messages.length-1].dateCreated)}}
                  </span
              >
            </div>
          </button>  
            </div>
            
          </div> <!---------------search message results------------>

    </div>
  </div>
</div>

</div>
</div>

</template>
<script>
import Navbar from "./Navbar";
import api from "../api";
import moment from 'moment'
export default {
  components: {
    Navbar,
  },
    //message: String
  data() {
    return {
      //buttons
      searchMessageInactive: true,
      showSearchResults: false,
      attachment:false,
      attach:'add',
      toggle: false,
      attachtoggle: false,
      toggleInbox: true,
      toggleChat: false,
      chatRooms: [],
      chatRoomNames:[],
      //inbox
      inbox: [],
      //chat
      activeName: null,
      activeRoom: null,
      authUser:null,
      chatIncoming: [],
      chatOutgoing: [],
      message:null,
      out :[],
      incoming:[],
      chat: [],
      //sent a request
       //sent a request
      activity: 'You sent a request to to',
      recipient: 'Mark Aral',
      sender: 'Monica Rambeau',
      postNum: '#2021352',
      postNum2: '#130317',
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
    };
  },

  watch:{
    activeRoom(val,oldval){
      if(oldval){      
        this.disconnect(oldval)
      }
      this.connect()
    }
  },

  methods: {

    connect(){
      console.log("connect")
      if(this.activeRoom !=null){
        let vm =this;
        vm.getChatRooms();
        window.Echo.private("chat."+this.activeRoom).listen('.message.new',()=>{
          console.log('listening...')
          vm.getChatRooms();
        })
      }
    },
    disconnect(oldval){
      window.Echo.leave('chat.'+oldval)
    },

    sendbtn() {
      if (this.message != "") {
        var dataMessage = {roomID:this.activeRoom, message: this.message}
        api.get('/sanctum/csrf-cookie').then(() => {
          api.post('/api/sendMessage', dataMessage).then((res)=>{
            console.log('success, message sent.  ', res.data)
            this.getChatRooms();
            // var printnow =
            // '<div class="flex justify-end pr-10 mt-1">' +
            // '<div class="ml-32 pt-2 pl-4 pb-3 pr-4 text-sm bg-gray-100 rounded-lg">' +
            // copiedtext +
            // '<span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" >' +
            // "<br>" +
            // this.timestamp +
            // "</span>" +
            // "</div> ";
            // printtext.insertAdjacentHTML("beforeend", printnow);
            this.message = "";
            var box = document.getElementById("journal-scroll");
            box.scrollIntoView();
          })
        })
      }else{
        return;
      }
    }, //end sendbtn

    setRoom(name,room_ID) {
      this.toggleInbox = !this.toggleInbox;
      this.toggleChat = !this.toggleChat;
      this.activeName = name;
      this.activeRoom = room_ID;
      this.recipient = name;
      console.log('setroom')
    },
    // getMessages(){
    //   if(this.activeRoom!=null){
    //     console.log('active room number: ',this.activeRoom);
    //     api.get("/api/getMessages", {params: {roomID:this.activeRoom}}).then((response)=>{
    //       var i;
    //       for(i=0;i<response.data.length;i++){
    //         if(response.data[i].messageSender == this.authUser){
    //           this.chat[i] = response.data[i];
    //           this.out[i]= true;
    //           this.incoming[i]= false;
    //         }
    //         else{
    //           this.chat[i] = response.data[i];
    //           this.out[i]= false;
    //           this.incoming[i]= true;
    //         }
    //       }
    //     })
    //   }else{
    //     console.log('not found')
    //   }
    // },

    backChat() {
      this.toggleInbox = !this.toggleInbox;
      this.toggleChat = !this.toggleChat;
    },

    threedots() {
      this.toggle = !this.toggle;
    }, //end threedots
    attachbtn() {
      this.attachtoggle = !this.attachtoggle;
    },
    getChatRooms() {
        api.get('/api/getChatroom').then((res) => {
            this.chatRooms = res.data;
            console.log(this.chatRooms)
            var i;
            // var j;
            //var x=0;
            for(i=0; i<this.chatRooms.length; i++){
              if(this.chatRooms[i].email1.localeCompare(this.authUser)==0){
                this.chatRoomNames[i]= this.chatRooms[i].get_email2.firstName
              }
              else{
                this.chatRoomNames[i]=this.chatRooms[i].get_email1.firstName 
              }
            
              // for(j=0; j<this.chatRooms[i].get_messages.length; j++){
              //   if(this.chatRooms[i].get_messages[j].messageSender == this.authUser){
              //     this.chat[j]=this.chatRooms[i];
              //     this.out[j]= true;
              //     this.incoming[j]= false;
              //   }
              //   else{
              //     this.chat[j]=this.chatRooms[i]
              //     this.out[j]= false;
              //     this.incoming[j]= true;
              //   }
              // //  x++;
              // }
            }
           console.log('chat-lenght=', this.chat.length)
            if(this.activeRoom==null){
              this.setRoom(this.chatRoomNames[0], 
              this.chatRooms[0]
              .messageRoomNumber)
            }
        });
    },
    getAuthUser(){
      api.get('api/user').then((res)=>{
        this.authUser = res.data.email;
      })
    },
    timestamp(date) {
      return moment(date).fromNow();
    }


  }, //end methods
  created() {
    this.getAuthUser();
    this.getChatRooms();
  },

}; //end export default

const add = document.querySelector("#add");
const del = document.querySelector("#del");

document.addEventListener("click", function (event) {
  if (event.target.closest(".add")) return add.classList.add("hide");

  if (event.target.closest(".del")) return del.classList.add("hide");
});


// import Navbar from './Navbar'
// export default {
//     components:{
//       Navbar,
//     },
//     props:{
//       //message: String 
//     },
//     data() {
//       return{
//         //buttons
//           toggle:false,
//           toggleInbox:true,
//           toggleChat: false,
//           searchMessageInactive: true,
//           showSearchResults: false,
//           attachment:false,
//           attach:'add',
//         //inbox
//           inbox: [
//             { name: 'Mark Aral', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins ago'},
//             { name: 'Gwen Lopez', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins ago'},
//             { name: 'Monica Rambeau', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins ago'},
//             { name: 'Wanda Maximoff', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins ago'},
//             { name: 'Wanda Maximoff', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins ago'},
          
//           ],
//         //chat
//           activeName: 'Mark Aral',
//           chatIncoming: [
//             { received: 'Yeah, sure! No problem. I am already on my way to SM City Legazpi.', timeReceived:'1:26 PM    |    Today'},
//             { received: 'Sorry, it took me a while. I had to shop for three orders. Anyway, I am already in my car. I will deliver these two orders first here in Legazpi.', timeReceived:'2:40 PM    |    Today'},
//             { received: 'I am two mins away from your house. ', timeReceived:'3:12 PM    |    Today'},
//             { received: 'No problem. Thanks as well for the handsome pay!', timeReceived:'3:39 PM    |    Today'},
//           ],
//           chatOutgoing:[
//             { sent: 'Do you think you can do it in time? I need it before 4 pm so I hope you can deliver it in time.', timeSent:'1:24 PM    |    Today'},
//             { sent: 'Thank you so much! Let me know when you are on your way.', timeSent:'1:31 PM    |    Today'},
//             { sent: 'No problem, chat me when you are near my house already', timeSent:'2:45 PM    |    Today'},
//             { sent: 'Thanks for help', timeSent: '3:36  | Today'},
//           ],
//           //sent a request
//           activity: 'You sent a request to to',
//           recipient: 'Mark Aral',
//           sender: 'Monica Rambeau',
//           postNum: '#2021352',
//           postNum2: '#130317',
//           placeFrom: 'Banquerohan, Legazpi City',
//           destination: 'SM City ',
//           timeAlloted: 'Tomorrow, 5 PM',
//           paymentMethod: 'Payment First via GCash transfer',
//           //shoppingList
//           shoppingList: [
//             { items: 'Baking Soda'},
//             { items: 'Choco Syrup'},
//             { items: 'cocoa powder'},
//             { items: 'flour 1 kg'},
//             { items: 'brown sugar'},
//             { items: 'cocoa powder'},
//           ],
//           shoppingListSize: 8,
//       }
//     },
//     methods: {
//       sendbtn(){
//         const fileInputBtn = document.getElementById('fileInput');
//         var printtext = document.getElementById('chatmsg');
//         var copytext = document.getElementById('typemsg');
//         var copiedtext = copytext.value;
//         if (fileInputBtn.value){
//           var fileText = fileInputBtn.value;
//           var printFile = '<div class="p-2 flex justify-end ">'+'<div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">'+fileText+'</div> '  
//           printtext.insertAdjacentHTML('beforeend', printFile);
//           document.getElementById('typemsg').value = '';
//           this.attachment = !this.attachment;
//           if( this.attachment == true){
//           document.getElementById("attach").innerHTML="close";
//           } 
//           else if(this.attachment ==false){
//             document.getElementById("attach").innerHTML="add";
//           }
//         }
//         if(copiedtext!=='' ){
//           var printnow = '<div class="p-2 flex justify-end ">'+'<div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">'+copiedtext+'<span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" >'+'<br>'+'3:45 PM'+' | '+'Today'+'</span>'+'</div> '
              
//           printtext.insertAdjacentHTML('beforeend', printnow);
//           document.getElementById('typemsg').value = '';
//           var box = document.getElementById('journal-scroll');
//           box.scrollIntoView();
//         }
//       },//end sendbtn
//       searchBtn(){
//         this.showSearchResults=!this.showSearchResults;
//         this.searchMessageInactive=!this.searchMessageInactive;
//         document.getElementByID('search').value ='Mark';
//       },
//       alert(){
//         alert('called');
//       },
//       closeSearchResults(){
//         if(this.searchMessageInactive==false){
//           this.searchMessageInactive=!this.searchMessageInactive;
//           this.showSearchResults=!this.showSearchResults
//         }
//       },
//       searchBackBtn(){
//         this.showSearchResults=!this.showSearchResults;
//         this.searchMessageInactive=!this.searchMessageInactive;
//       },
//       attachbtn(){
//         this.attachment = !this.attachment;
//         if( this.attachment == true){
//           document.getElementById("attach").innerHTML="close";
//           document.getElementById("attach2").innerHTML="close";
//         } 
//         else if(this.attachment ==false){
//           document.getElementById("attach").innerHTML="add";
//           document.getElementById("attach2").innerHTML="add";
//         }
//       },
//       messagebtn(){
//         this.toggleInbox=!this.toggleInbox;
//         this.toggleChat=!this.toggleChat;
//         var b = document.getElementById('gwen');
//         var bText = b.textContent;
//         var bLen = bText.length;
//         var res = bText.substring(0, bLen-13);
//         document.getElementById("active").innerHTML = res;
//       },
//        navMark(){
//         this.toggleInbox=!this.toggleInbox;
//         this.toggleChat=!this.toggleChat;
//         var b = document.getElementById('mark');
//         var bText = b.textContent;
//         var bLen = bText.length;
//         var res = bText.substring(0, bLen-13);
//         document.getElementById("active").innerHTML = res;
//       },
//       backChat(){
//         this.toggleInbox=!this.toggleInbox;
//         this.toggleChat=!this.toggleChat;
//       },
//       threedots(){
//         this.toggle = !this.toggle;
        
//       },//end threedots
//       attachPhoto(){
//         const fileInputBtn = document.getElementById('photoInput');
//         const fileholder = document.getElementById('photo');
//         fileInputBtn.click();
//         fileInputBtn.addEventListener("change", function(){
//         if (fileInputBtn.value){
//            fileholder.innerHTML = fileInputBtn.value;
//         } else {
//         fileholder.innerhtml = "";
//         }
//         })
//       },
//       attachFile(){
//         const fileInputBtn = document.getElementById('fileInput');
//         const fileholder = document.getElementById('file');
//         fileInputBtn.click();
//         fileInputBtn.addEventListener("change", function(){
//         if (fileInputBtn.value){
//            fileholder.innerHTML = fileInputBtn.value;
//         } else {
//         fileholder.innerhtml = "";
//         }
//         })
//       }
//     }//end methods
//   }//end export default
// const add = document.querySelector("#add");
// const del = document.querySelector("#del");
// document.addEventListener("click", function(event) { 
//     if(event.target.closest(".add")) return add.classList.add("hide");
//     if(event.target.closest(".del")) return del.classList.add("hide");
// })
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
screen sizes lesser than 639px*/
.desktopVersion{
  display:none;
  }
.mobileVersion{
  display:inline;
}
 
/*for screen sizes 639px++*/
@media only screen and (min-width: 639px) {
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