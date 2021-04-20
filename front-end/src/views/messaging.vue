<template>
  <Navbar />
  <!--Desktop Version-->
  <div class="desktopVersion md:w-full vs:w-full">
    <div
      class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center divide-x divide-light-gray-700 px-2 pb-2"
    >
      <!--------------------------inbox corner----------------------------->
      <div class="mt-20 md:1/5 shadow-md relative" style="min-width: 300px">
        <div
          class="relative flex justify-items-center md:justify-items-center pb-2 pt-1 shadow"
        >
          <button
            class="focus:outline-none pl-5 hover:text-red-700"
            @click="backbtn()"
            type="button"
          >
            <span class="material-icons pt-2" id="iMessage"> chat</span>
          </button>
          <h4 class="text-base font-semibold pt-2 pl-4">Message</h4>
        </div>
        <div
          v-if="searchMessageInactive"
          class="flex justify-center w-full relative py-1 pt-2"
        >
          <input
            type="text"
            class="h-8 w-11/12 pl-5 border font-normal text-sm focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full"
            placeholder="Search"
          />
          <button
            @click="searchBtn"
            class="align-middle absolute right-8 pt-1 h-7 focus:outline-none hover:text-red-700"
          >
            <span class="material-icons" style="font-size: 22px"> search </span>
          </button>
        </div>
        <!---end of search bar-->

        <button
          v-if="showSearchResults"
          class="flex justify-center w-full relative py-1 pt-2"
        >
          <input
            type="text"
            class="h-8 w-9/12 pl-5 border font-normal text-sm focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full"
            placeholder="Mark"
            id="search"
          />
          <button
            class="align-middle mt-1 ml-1 flex items-center h-6 w-6 rounded-full bg-gray-300 focus:outline-none hover:text-red-700"
          >
            <span
              @click="closeSearchResults"
              class="material-icons pl-1"
              style="font-size: 17px"
            >
              close
            </span>
          </button></button
        ><!---end of search bar-->

        <div class="overflow-auto px-1 py-1 h-5/6" id="journal-scroll">
          <div v-if="searchMessageInactive && activeRoom != null">
            <button
              v-for="(chatRoom, index) in chatRooms"
              :key="index"
              @click="
                setRoom(
                  chatRoomNames[index],
                  chatRoom.messageRoomNumber,
                  chatRoom.email1,
                  chatRoom.email2
                )
              "
              type="button"
              class="focus:bg-gray-200 relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition"
            >
              <div class="flex ml-2">
                <img
                  :src="chatRoomPic[index]"
                  alt="sunil"
                  class="rounded-lg h-8 w-7 pt-1"
                />
                <div
                  class="flex flex-col justify-between items-start ml-2"
                  v-if="chatRoom.get_messages.length != 0"
                >
                  <span class="font-medium text-sm" id="mark">
                    {{ chatRoomNames[index] }}
                    <span class="material-icons pl-2" id="iCheck">
                      check_circle
                    </span>
                  </span>
                  <span
                    class="text-xs text-gray-400 truncate w-36"
                    v-if="
                      chatRoom.get_messages[chatRoom.get_messages.length - 1]
                        .messageSender === authUser.email
                    "
                  >
                    You :
                    <strong>{{
                      chatRoom.get_messages[chatRoom.get_messages.length - 1]
                        .messageText
                    }}</strong>
                  </span>
                  <span class="text-xs text-gray-400 truncate w-36" v-else>
                    {{
                      chatRoom.get_messages[chatRoom.get_messages.length - 1]
                        .get_message_sender.firstName
                    }}
                    {{
                      chatRoom.get_messages[chatRoom.get_messages.length - 1]
                        .get_message_sender.lastName
                    }}:
                    <strong>{{
                      chatRoom.get_messages[chatRoom.get_messages.length - 1]
                        .messageText
                    }}</strong>
                  </span>
                </div>
                <div
                  class="flex flex-col justify-between items-start ml-2"
                  v-else
                >
                  <span class="font-medium text-sm" id="mark">
                    {{ chatRoomNames[index] }}
                    <span class="material-icons pl-2" id="iCheck">
                      check_circle
                    </span>
                  </span>
                </div>
              </div>
              <div
                class="flex flex-col items-start"
                v-if="chatRoom.get_messages.length != 0"
              >
                <span class="text-gray-700 text-xs">
                  <span class="font-bold pl-1 pr-1">· </span>
                  {{
                    timestampRoom(
                      chatRoom.get_messages[chatRoom.get_messages.length - 1]
                        .dateCreated
                    )
                  }}
                </span>
              </div>
            </button>
          </div>
          <!---------------navigation message------------>

          <!-- <div v-if="showSearchResults" class="divide-y divide-gray-300" && activeRoom!=null>

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
                :src="chatRoomPic[index]"
                alt="sunil"
                class="rounded-lg h-8 w-7 pt-1"
              />
              <div class="flex flex-col justify-between items-start ml-2" v-if="chatRoom.get_messages.length !=0">>
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
                <div class="flex flex-col justify-between items-start ml-2" v-else>
                 <span class="font-medium text-sm" id="mark">
                  {{ chatRoomNames[index]}}
                  <span class="material-icons pl-2" id="iCheck">
                    check_circle
                  </span>
                </span>
               </div>
            </div>
            <div class="flex flex-col items-start" v-if="chatRoom.get_messages.length !=0">
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
            
          </div> -------------search message results---------- -->
        </div>
      </div>
      <!--end of left corner-->
      <!------------------------------------------------------>
      <!---Chat Corner-->
      <div
        class="vs:w-full mt-20 w-2/5 md:w-4/5 shadow-md relative"
        style="min-width: 400"
      >
        <div v-if="activeRoom != null">
          <div
            class="relative flex justify-items-center md:justify-items-center pt-1 shadow py-2"
          >
            <h4 class="text-base font-semibold pt-2 pl-4" id="active">
              {{ activeName }}
            </h4>
            <span class="material-icons pl-3 pt-2" id="iCheck">
              check_circle
            </span>
          </div>
        </div>
        <div class="overflow-auto h-4/5" id="journal-scroll">
          <!--------------U sent a request to Mark Arl------>
          <div
            v-for="transaction in transactions"
            :key="transaction.postNumber"
          >
            <div
              v-if="
                transaction.emailCustomerShopper == authUser.email &&
                (transaction.transactionReceiver == activeEmail1 ||
                  transaction.transactionReceiver == activeEmail2)
              "
              class="sticky top-0 flex justify items-center shadow-lg bg-white border"
            >
              <span class="text-sm p-3 w-full">
                <span>You sent a request to</span>
                <span class="font-semibold ml-2">{{ recipient }}</span>
                <span class="ml-2">for</span>
                <span class="font-semibold ml-2"
                  >Post {{ transaction.postNumber }}
                </span>

                <div class="flex justify-end relative">
                  <button
                    @click="
                      cancelRequest(
                        transaction.postNumber,
                        transaction.indexTransactionPost
                      )
                    "
                    class="mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700"
                  >
                    <span>Cancel Request</span>
                  </button>
                  <button
                    class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"
                  >
                    <span>View Post</span>
                  </button>
                </div>
              </span>
            </div>

            <!--------------Someone sent u a request------>
            <div
              v-if="
                transaction.transactionReceiver == authUser.email &&
                (transaction.emailCustomerShopper == activeEmail1 ||
                  transaction.emailCustomerShopper == activeEmail2)
              "
              class="sticky top-0 flex justify items-center shadow-lg bg-white border"
            >
              <span class="text-sm p-3 w-full">
                <span
                  ><span class="font-semibold mr-2"
                    >{{ transaction.transaction_sender.firstName }}
                    {{ transaction.transaction_sender.lastName }}</span
                  >sent you a request</span
                >
                <span class="ml-2">for</span>
                <span class="font-semibold ml-2"
                  >Post {{ transaction.postNumber }}
                </span>

                <div class="flex justify-end relative">
                  <button
                    @click="
                      declineOffer(
                        transaction.postNumber,
                        transaction.indexTransactionPost,
                        transaction.emailCustomerShopper
                      )
                    "
                    class="mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700"
                  >
                    <span>Decline</span>
                  </button>
                  <button
                    class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"
                  >
                    <span>Accept</span>
                  </button>
                </div>
              </span>
            </div>
          </div>
          <!------------------->

          <!------------------->
          <!--------------transaction details------>
          <!-- <div
            v-if="postNum != null"
            class="sticky top-0 flex justify items-center shadow-lg bg-white border"
          >
            <span class="text-sm p-3 w-full">
              <div class="flex flex-row justify-between">
                <span
                  >Transaction
                  <span class="font-semibold ml-2">{{ postNum2 }} </span>
                </span>

                <span class="rounded border border-blue-700 px-1"
                  >Confirmed</span
                >
              </div>
              <div class="flex justify-end relative">
                <button
                  class="mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700"
                >
                  <span>View Details</span>
                </button>
                <button
                  class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"
                >
                  <span>Update</span>
                </button>
              </div>
            </span>
          </div> -->
          <div class="p-1 pl-2" v-for="(chat, index) in chatRooms" :key="index">
            <div v-if="chat.messageRoomNumber === activeRoom">
              <div v-for="(msg, index) in chat.get_messages" :key="index">
                <div v-if="msg.messageSender != authUser.email">
                  <!--your incoming messages-->
                  <div v-if="hasPostNum(msg.messageText) == -1">
                    <div class="flex items-end pr-10 mt-1">
                      <img
                        :src="msg.get_message_sender.profilePicture"
                        class="rounded-lg h-8 w-8"
                      />
                      <div class="rounded-lg">
                        <div
                          class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg"
                        >
                          <p>{{ msg.messageText }}</p>

                          <span
                            class="text-gray-500 pl-1"
                            style="font-size: 10.5px"
                            >{{ timestamp(msg.dateCreated) }}</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div v-else>
                    <!-- if the message is a post--->
                    <!----------------------------------------->

                    <div
                      v-for="(msgPost, index) in parseString(msg.messageText)"
                      :key="index"
                    >
                      <div class="flex items-end pr-10 mt-1">
                        <img
                          :src="msg.get_message_sender.profilePicture"
                          class="rounded-lg h-8 w-8"
                        />
                        <div
                          class="flex ml-4 mr-10 p-3 flex-col bg-gray-100 py-2 rounded-lg"
                        >
                          <div class="mx-4 mb-2 text-sm font-semibold">
                            <span>Order Details</span>
                          </div>
                          <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                            <div class="flex flex-col px-2">
                              <div class="flex items-start">
                                <span
                                  class="text-red-700 material-icons"
                                  style="font-size: 18px"
                                  >place</span
                                >
                                <span class="pl-2 pb-1">{{
                                  msgPost.deliveryArea
                                }}</span>
                              </div>
                              <div class="flex items-start">
                                <span
                                  class="text-red-700 material-icons"
                                  style="font-size: 18px"
                                  >shopping_cart</span
                                >
                                <span class="pl-2 pb-1">{{
                                  msgPost.shoppingPlace
                                }}</span>
                              </div>
                              <div class="flex items-start">
                                <span
                                  class="text-red-700 material-icons"
                                  style="font-size: 16px"
                                  >watch_later</span
                                >
                                <span class="pl-2 pb-1">{{
                                  timestampSched(msgPost.deliverySchedule)
                                }}</span>
                              </div>
                              <div class="flex items-start">
                                <span
                                  class="text-red-700 material-icons"
                                  style="font-size: 16px"
                                  >payments</span
                                >
                                <span class="pl-2">{{
                                  msgPost.paymentMethod
                                }}</span>
                              </div>
                            </div>
                          </div>
                          <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                            <div>
                              <span class="font-semibold"
                                >Shopping List<span class="ml-3 text-gray-500"
                                  >8 items</span
                                ></span
                              >
                            </div>
                            <div>
                              <ul
                                class="text-gray-600 list-disc list-inside pl-4"
                              >
                                <li
                                  v-for="items in shoppingList"
                                  :key="items.ShoppingList"
                                >
                                  <span>
                                    {{ items.items }}
                                  </span>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="ml-0 mr-10 pb-1">
                            <span
                              class="time_date text-gray-500"
                              style="font-size: 10.5px"
                            >
                              {{ timestamp(msg.dateCreated) }}
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div v-else>
                  <!--your outgoing messages-->
                  <div v-if="hasPostNum(msg.messageText) == -1">
                    <div class="flex justify-end pr-10 mt-1">
                      <div
                        class="ml-32 pt-2 pl-4 pb-3 pr-4 text-sm bg-gray-100 rounded-lg"
                      >
                        <p>{{ msg.messageText }}</p>
                        <span
                          class="time_date text-gray-500 pl-1"
                          style="font-size: 10.5px"
                        >
                          {{ timestamp(msg.dateCreated) }}
                        </span>
                      </div>
                    </div>
                  </div>
                  <div v-else>
                    <!--if the message is a post-->
                    <div
                      v-for="(msgPost, index) in parseString(msg.messageText)"
                      :key="index"
                    >
                      <div class="flex justify-end mt-2 pr-10">
                        <div class="ml-32 bg-gray-100 text-sm rounded-lg">
                          <div
                            class="flex flex-col bg-gray-100 py-2 rounded-lg"
                          >
                            <div class="mx-4 mb-2 text-sm font-semibold">
                              <span>Order Details</span>
                            </div>

                            <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                              <div class="flex flex-col px-2">
                                <div class="flex items-start">
                                  <span
                                    class="text-red-700 material-icons"
                                    style="font-size: 18px"
                                    >place</span
                                  >
                                  <span
                                    class="pl-2 pb-1"
                                    v-if="msgPost.deliveryArea == null"
                                  >
                                    {{ msgPost.deliveryAddress }}</span
                                  >
                                  <span
                                    class="pl-2 pb-1"
                                    v-if="msgPost.deliveryAddress == null"
                                  >
                                    {{ msgPost.deliveryArea }}</span
                                  >
                                </div>

                                <div class="flex items-start">
                                  <span
                                    class="text-red-700 material-icons"
                                    style="font-size: 18px"
                                    >shopping_cart</span
                                  >
                                  <span class="pl-2 pb-1">{{
                                    msgPost.shoppingPlace
                                  }}</span>
                                </div>

                                <div class="flex items-start">
                                  <span
                                    class="text-red-700 material-icons"
                                    style="font-size: 16px"
                                    >watch_later</span
                                  >
                                  <span class="pl-2 pb-1">{{
                                    timestampSched(msgPost.deliverySchedule)
                                  }}</span>
                                </div>

                                <div class="flex items-start">
                                  <span
                                    class="text-red-700 material-icons"
                                    style="font-size: 16px"
                                    >payments</span
                                  >
                                  <span class="pl-2">{{
                                    msgPost.paymentMethod
                                  }}</span>
                                </div>
                              </div>
                            </div>

                            <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                              <div>
                                <span class="font-semibold"
                                  >Shopping List<span class="ml-3 text-gray-500"
                                    >{{ shoppingListSize }}items</span
                                  ></span
                                >
                              </div>
                              <div>
                                <ul
                                  class="text-gray-600 list-disc list-inside pl-4"
                                >
                                  <li
                                    v-for="items in shoppingList"
                                    :key="items.ShoppingList"
                                  >
                                    <span>
                                      {{ items.items }}
                                    </span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="ml-32 pt-2 pl-4 pb-1 pr-4">
                              <span
                                class="time_date text-gray-500"
                                style="font-size: 10.5px"
                              >
                                {{ timestamp(msg.dateCreated) }}
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!----------------------------------------->
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
              <input
                type="file"
                id="fileInput"
                accept=" .png .jpg .xls,.xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel"
                style="display: none"
              />
              <button
                id="attachFile"
                @click="attachFile"
                class="w-8 bg-gray-100 ml-3 mb-2 focus:outline-none hover:bg-white hover:text-red-700 rounded-md"
              >
                <span class="material-icons" style="font-size: 22px">
                  attachment</span
                >
              </button>
              <span
                id="file"
                class="text-sm font-semibold text-gray-500 pl-4 pb-1 pb-2"
                >No file chosen yet</span
              >
            </div>
          </div>
        </div>

        <div
          class="w-pl-4 pr-4 mt-1 w-full absolute bottom-1 flex flex-cols justify-between items-center"
          style="min-width: 400"
        >
          <button
            class="h-6 w-6 ml-4 mr-1 bg-gray-400 rounded-full focus:outline-none hover:text-white"
            @click="attachbtn"
            type="button"
          >
            <span class="material-icons" id="attach"> {{ attach }}</span>
          </button>
          <input
            type="text"
            class="w-10/12 h-8 flex pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-400 rounded-full"
            placeholder="Type a message"
            id="typemsg"
            @keyup.enter="sendbtn"
            v-model="message"
          />
          <button
            @click="sendbtn"
            class="w-8 h-8 flex items-center pl-1 rounded-full focus:outline-none hover:text-red-700"
            type="button"
          >
            <span class="material-icons"> send</span>
          </button>
        </div>
      </div>
      <!--end of right corner-->
    </div>
  </div>
  <!--end of desktop version-->

  <!------------mobile version--------------------->
  <div class="mobileVersion">
    <div v-show="toggleChat">
      <div
        class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center divide-x divide-light-gray-700 px-2 pb-2"
      >
        <!------------------------------------------------------->
        <div class="vs:w-full mt-20 shadow-md" style="min-width: 400">
          <div
            class="flex items-center justify-between md:items-center pt-1 shadow"
          >
            <div class="flex flex-row">
              <button
                class="focus:outline-none pl-5 hover:text-red-700"
                @click="backChat"
                type="button"
              >
                <span class="material-icons pt-2" id="iMessage">
                  keyboard_backspace</span
                >
              </button>
              <h4 class="text-base font-bold pt-2 pl-4">{{ activeName }}</h4>
              <span class="material-icons pl-3 pt-3" id="iCheck">
                check_circle
              </span>
            </div>
            <div class="align-middle">
              <button
                v-if="toggle"
                class="absolute right-2 mt-7 px-2 h-9 w-24 rounded bg-gray-100 border-solid border-2 border-gray-300 hover:text-red-700"
              >
                <span class="font-semibold">Delete</span>
              </button>
              <button
                @click="threedots"
                class="pt-1 mr-3 focus:outline-none hover:text-red-700"
                type="button"
              >
                <span class="material-icons"> more_horiz</span>
              </button>
            </div>
          </div>
          <!--------------Someone sent u a request------>
          <div
            v-if="false"
            class="top-0 flex justify items-center shadow-lg bg-white border"
          >
            <span class="text-sm p-3 w-full">
              <span
                ><span class="font-semibold mr-2">{{ sender }}</span
                >request you a request</span
              >
              <span class="ml-2">for</span>
              <span class="font-semibold ml-2">Post {{ postNum2 }} </span>

              <div class="flex justify-end">
                <button
                  class="mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700"
                >
                  <span>Decline</span>
                </button>
                <button
                  class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"
                >
                  <span>Accept</span>
                </button>
              </div>
            </span>
          </div>
          <!------------------->
          <div
            v-if="false"
            class="sticky top-0 flex justify items-center shadow-lg bg-white border"
          >
            <span class="text-sm p-3 w-full">
              <span>You sent a request to</span>
              <span class="font-semibold ml-2">{{ recipient }}</span>
              <span class="ml-2">for</span>
              <span class="font-semibold ml-2">Post {{ postNum }} </span>
              <div class="flex justify-end">
                <button
                  class="mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 rounded-full border border-gray-700"
                >
                  <span>Cancel Request</span>
                </button>
                <button
                  class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full bg-red-700 text-white"
                >
                  <span>View Post</span>
                </button>
              </div>
            </span>
          </div>
          <!------------------->
          <!--------------transaction details------>
          <div
            v-if="false"
            class="sticky top-0 flex justify items-center shadow-lg bg-white border"
          >
            <span class="text-sm p-3 w-full">
              <div class="flex flex-row justify-between">
                <span
                  >Transaction
                  <span class="font-semibold ml-2">{{ postNum2 }} </span>
                </span>

                <span class="rounded border border-blue-700 px-1"
                  >Confirmed</span
                >
              </div>
              <div class="flex justify-end">
                <button
                  class="mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700"
                >
                  <span>View Details</span>
                </button>
                <button
                  class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"
                >
                  <span>Update</span>
                </button>
              </div>
            </span>
          </div>
          <!------------------->
          <!----chat box---->
          <div
            class="overflow-auto overflow-x-hidden px-1 py-1 h-4/6"
            id="journal-scroll"
          >
            <div class="flex justify-end mt-2">
              <div class="ml-32 bg-gray-100 text-sm rounded-lg">
                <div class="flex flex-col bg-gray-100 py-2 rounded-lg">
                  <div class="mx-4 mb-2 text-sm font-semibold">
                    <span>Order Details</span>
                  </div>

                  <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                    <div class="flex flex-col px-2">
                      <div class="flex items-start">
                        <span
                          class="text-red-700 material-icons"
                          style="font-size: 18px"
                          >place</span
                        >
                        <span class="pl-2 pb-1"> {{ placeFrom }}</span>
                      </div>

                      <div class="flex items-start">
                        <span
                          class="text-red-700 material-icons"
                          style="font-size: 18px"
                          >shopping_cart</span
                        >
                        <span class="pl-2 pb-1">SM {{ destination }}</span>
                      </div>

                      <div class="flex items-start">
                        <span
                          class="text-red-700 material-icons"
                          style="font-size: 16px"
                          >watch_later</span
                        >
                        <span class="pl-2 pb-1">{{ timeAlloted }}</span>
                      </div>

                      <div class="flex items-start">
                        <span
                          class="text-red-700 material-icons"
                          style="font-size: 16px"
                          >payments</span
                        >
                        <span class="pl-2">{{ paymentMethod }}</span>
                      </div>
                    </div>
                  </div>

                  <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                    <div>
                      <span class="font-semibold"
                        >Shopping List<span class="ml-3 text-gray-500"
                          >{{ shoppingListSize }}items</span
                        ></span
                      >
                    </div>
                    <div>
                      <ul class="text-gray-600 list-disc list-inside pl-4">
                        <li
                          v-for="items in shoppingList"
                          :key="items.ShoppingList"
                        >
                          <span>
                            {{ items.items }}
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div></div>
                  </div>
                </div>
              </div>
            </div>
            <!----------------------------------------->
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
                          <span
                            class="text-red-700 material-icons"
                            style="font-size: 18px"
                            >place</span
                          >
                          <span class="pl-2 pb-1">{{ placeFrom }}</span>
                        </div>
                        <div class="flex items-start">
                          <span
                            class="text-red-700 material-icons"
                            style="font-size: 18px"
                            >shopping_cart</span
                          >
                          <span class="pl-2 pb-1">{{ destination }}</span>
                        </div>
                        <div class="flex items-start">
                          <span
                            class="text-red-700 material-icons"
                            style="font-size: 16px"
                            >watch_later</span
                          >
                          <span class="pl-2 pb-1">{{ timeAlloted }}</span>
                        </div>
                        <div class="flex items-start">
                          <span
                            class="text-red-700 material-icons"
                            style="font-size: 16px"
                            >payments</span
                          >
                          <span class="pl-2">{{ paymentMethod }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                      <div>
                        <span class="font-semibold"
                          >Shopping List<span class="ml-3 text-gray-500"
                            >8 items</span
                          ></span
                        >
                      </div>
                      <div>
                        <ul class="text-gray-600 list-disc list-inside pl-4">
                          <li
                            v-for="items in shoppingList"
                            :key="items.ShoppingList"
                          >
                            <span>
                              {{ items.items }}
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

            <div
              class="p-1 pl-2"
              v-for="(chat, index) in chatRooms"
              :key="index"
            >
              <div v-if="chat.messageRoomNumber === activeRoom">
                <div
                  class="p-1 pl-2"
                  v-for="(msg, index) in chat.get_messages"
                  :key="index"
                >
                  <div v-if="msg.messageSender === authUser.email">
                    <div class="flex justify-end pr-10 mt-1">
                      <div
                        class="ml-32 pt-2 pl-4 pb-3 pr-4 text-sm bg-gray-100 rounded-lg"
                      >
                        <p>{{ msg.messageText }}</p>

                        <span
                          class="time_date text-gray-500 pl-1"
                          style="font-size: 10.5px"
                        >
                          {{ timestamp(msg.dateCreated) }}
                        </span>
                      </div>
                    </div>
                  </div>
                  <div v-else>
                    <div class="flex items-end pr-10 mt-1">
                      <div
                        class="ml-4 mr-10 p-3 bg-gray-200 text-sm rounded-lg"
                      >
                        <p>{{ msg.messageText }}</p>

                        <span
                          class="time_date text-gray-500 pl-1"
                          style="font-size: 10.5px"
                        >
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
          <!--end overflow--->
          <div v-if="attachment" class="sticky bottom-11">
            <div class="w-full bg-white bg-opacity-100 flex justify-start pt-2">
              <div class="flex items-center">
                <input
                  type="file"
                  id="fileInput"
                  accept=" .png .jpg .xls,.xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel"
                  style="display: none"
                />
                <button
                  id="attachFile"
                  @click="attachFile"
                  class="w-8 bg-gray-100 ml-3 mb-2 focus:outline-none hover:bg-white hover:text-red-700 rounded-md"
                >
                  <span class="material-icons" style="font-size: 22px">
                    attachment</span
                  >
                </button>
                <span
                  id="file"
                  class="text-sm font-semibold text-gray-500 pl-4 pb-1 pb-2"
                  >No file chosen yet</span
                >
              </div>
            </div>
          </div>

          <div
            class="w-pl-4 pr-4 mt-1 w-full absolute bottom-1 flex flex-cols justify-between items-center"
            style="min-width: 400"
          >
            <button
              class="h-6 w-6 ml-4 mr-1 bg-gray-400 rounded-full focus:outline-none hover:text-white"
              @click="attachbtn"
              type="button"
            >
              <span class="material-icons" id="attach2"> {{ attach }}</span>
            </button>
            <input
              type="text"
              class="w-10/12 h-8 flex pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-400 rounded-full"
              placeholder="Type a message"
              id="typemsg"
              @keyup.enter="sendbtn"
              v-model="message"
            />
            <button
              @click="sendbtn"
              class="w-8 h-8 flex items-center pl-1 rounded-full focus:outline-none hover:text-red-700"
              type="button"
            >
              <span class="material-icons"> send</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-------------end inbox------------->
    <div v-show="toggleInbox">
      <div
        class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center divide-x divide-light-gray-700 px-2 pb-2"
      >
        <!------------------------------------------------------->
        <div class="vs:w-full mt-20 shadow-md sm:w-10/12">
          <div
            class="flex justify-items-center md:justify-items-center pt-1 shadow"
          >
            <router-link to="/dashboard">
              <button
                class="focus:outline-none pl-5 hover:text-red-700"
                @click="backbtn()"
                type="button"
              >
                <span class="material-icons pt-2" id="iMessage">
                  keyboard_backspace</span
                >
              </button></router-link
            >
            <h4 class="text-base font-bold pt-2 pl-4">Message</h4>
          </div>
          <div class="w-full flex justify-center">
            <div
              v-if="searchMessageInactive"
              class="border mt-2 border-gray-300 bg-white flex w-10/12 justify-center focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full"
            >
              <input
                type="text"
                class="h-7 w-10/12 pl-3 rounded font-normal text-sm focus:outline-none"
                placeholder="Search"
              />
              <button
                @click="searchBtn"
                class="align-middle ml-4 pt-1 h-7 focus:outline-none hover:text-red-700"
              >
                <span class="material-icons" style="font-size: 22px">
                  search
                </span>
              </button>
            </div>
            <!---end of search bar-->
          </div>
          <button
            v-if="showSearchResults"
            class="flex justify-center w-full py-1 pt-2 focus:outline-none"
          >
            <input
              type="text"
              class="h-8 w-9/12 pl-5 border font-normal text-sm focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full"
              placeholder="Mark"
              id="search"
            />
            <button
              class="align-middle mt-1 ml-1 flex items-center h-6 w-6 rounded-full bg-gray-300 focus:outline-none hover:text-red-700"
            >
              <span
                @click="closeSearchResults"
                class="material-icons pl-1"
                style="font-size: 17px"
              >
                close
              </span>
            </button></button
          ><!---end of search bar-->

          <div class="overflow-auto px-1 py-1 h-5/6" id="journal-scroll">
            <div v-if="searchMessageInactive && activeRoom != null">
              <button
                v-for="(chatRoom, index) in chatRooms"
                :key="index"
                @click="
                  setRoom(
                    chatRoomNames[index],
                    chatRoom.messageRoomNumber,
                    chatRoom.email1,
                    chatRoom.email2
                  )
                "
                type="button"
                class="focus:bg-gray-200 relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition"
              >
                <div class="flex ml-2">
                  <img
                    :src="chatRoomPic[index]"
                    alt="sunil"
                    class="rounded-lg h-8 w-7 pt-1"
                  />
                  <div
                    class="flex flex-col justify-between items-start ml-2"
                    v-if="chatRoom.get_messages.length != 0"
                  >
                    <span class="font-medium text-sm" id="mark">
                      {{ chatRoomNames[index] }}
                      <span class="material-icons pl-2" id="iCheck">
                        check_circle
                      </span>
                    </span>
                    <span
                      class="text-xs text-gray-400 truncate w-36"
                      v-if="
                        chatRoom.get_messages[chatRoom.get_messages.length - 1]
                          .messageSender === authUser.email
                      "
                    >
                      You :
                      <strong>{{
                        chatRoom.get_messages[chatRoom.get_messages.length - 1]
                          .messageText
                      }}</strong>
                    </span>
                    <span class="text-xs text-gray-400 truncate w-36" v-else>
                      {{
                        chatRoom.get_messages[chatRoom.get_messages.length - 1]
                          .get_message_sender.firstName
                      }}
                      {{
                        chatRoom.get_messages[chatRoom.get_messages.length - 1]
                          .get_message_sender.lastName
                      }}:
                      <strong>{{
                        chatRoom.get_messages[chatRoom.get_messages.length - 1]
                          .messageText
                      }}</strong>
                    </span>
                  </div>
                  <div
                    class="flex flex-col justify-between items-start ml-2"
                    v-else
                  >
                    <span class="font-medium text-sm" id="mark">
                      {{ chatRoomNames[index] }}
                      <span class="material-icons pl-2" id="iCheck">
                        check_circle
                      </span>
                    </span>
                  </div>
                </div>
                <div
                  class="flex flex-col items-start"
                  v-if="chatRoom.get_messages.length != 0"
                >
                  <span class="text-gray-700 text-xs">
                    <span class="font-bold pl-1 pr-1">· </span>
                    {{
                      timestampRoom(
                        chatRoom.get_messages[chatRoom.get_messages.length - 1]
                          .dateCreated
                      )
                    }}
                  </span>
                </div>
              </button>
            </div>
            <!---------------navigation message------------>

            <!-- <div v-if="showSearchResults && activeRoom!=null" class="divide-y divide-gray-300">

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
                :src="chatRoomPic[index]"
                alt="sunil"
                class="rounded-lg h-8 w-7 pt-1"
              />
              <div class="flex flex-col justify-between items-start ml-2" v-if="chatRoom.get_messages.length !=0">
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
                <div class="flex flex-col justify-between items-start ml-2" v-else>
                 <span class="font-medium text-sm" id="mark">
                  {{ chatRoomNames[index]}}
                  <span class="material-icons pl-2" id="iCheck">
                    check_circle
                  </span>
                </span>
               </div>
            </div>
            <div class="flex flex-col items-start" v-if="chatRoom.get_messages.length !=0">
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
            
          </div> -------------search message results---------- -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Navbar from "./Navbar";
import api from "../api";
import moment from "moment";
import store from "../store/index";
import Axios from 'axios';
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
      attachment: false,
      attach: "add",
      toggle: false,
      attachtoggle: false,
      toggleInbox: true,
      toggleChat: false,
      chatRooms: [],
      chatRoomNames: [],
      chatRoomPic: [],
      //inbox
      inbox: [],
      //chat
      activeName: null,
      activeRoom: null,
      chatIncoming: [],
      chatOutgoing: [],
      message: null,
      out: [],
      incoming: [],
      chat: [],
      activeEmail1: null,
      activeEmail2: null,
      //sent a request
      //sent a request
      activity: "You sent a request to to",
      recipient: "Mark Aral",
      sender: "Monica Rambeau",
      postNum: null,
      postNum2: "#130317",
      placeFrom: "Banquerohan, Legazpi City",
      destination: "SM City ",
      timeAlloted: "Tomorrow, 5 PM",
      paymentMethod: "Payment First via GCash transfer",
      //shoppingList
      shoppingList: [
        { items: "Baking Soda" },
        { items: "Choco Syrup" },
        { items: "cocoa powder" },
        { items: "flour 1 kg" },
        { items: "brown sugar" },
        { items: "cocoa powder" },
      ],
      shoppingListSize: 8,
      userQueryID: null,
    };
  },

  watch: {
    activeRoom(val, oldval) {
      if (oldval) {
        this.disconnect(oldval);
      }
      this.connect();
    },
  },

  methods: {
    connect() {
      console.log("connect");
      if (this.activeRoom != null) {
        let vm = this;
        store.dispatch("getChatRoom").then(() => {
          vm.getChatRooms();
        });
        window.Echo.private("chat." + this.activeRoom).listen(
          ".message.new",
          () => {
            console.log("listening...");
            Axios.all([
              api.get('api/getTransaction'),
              api.get('api/getChatroom')
            ]).then(()=>{
              vm.getChatRooms();
            }) 
          }
        );
      }
    },
    disconnect(oldval) {
      window.Echo.leave("chat." + oldval);
    },

    sendbtn() {
      if (this.message != "") {
        var dataMessage = { roomID: this.activeRoom, message: this.message };
        api.get("/sanctum/csrf-cookie").then(() => {
          api.post("/api/sendMessage", dataMessage).then((res) => {
            console.log("success, message sent.  ", res.data);
            this.getChatRooms();

            this.message = "";
            var box = document.getElementById("journal-scroll");
            box.scrollIntoView();
          });
        });
      } else {
        return;
      }
    }, //end sendbtn

    setRoom(name, room_ID, email1, email2) {
      this.toggleInbox = !this.toggleInbox;
      this.toggleChat = !this.toggleChat;
      this.activeName = name;
      this.activeRoom = room_ID;
      this.recipient = name;
      this.activeEmail1 = email1;
      this.activeEmail2 = email2;
      console.log("setroom");
    },

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
      //filtering the message room where there are no message and not the active room if there is
      var z = 0;
      console.log("this room in store", this.room);
      for (i = 0; i < this.room.length; i++) {
        if (this.room[i].get_messages.length == 0) {
          //means epmty messages on room
          if (
            (this.authUser.email === this.room[i].email1 ||
              this.authUser.email === this.room[i].email2) &&
            (this.userQueryID === this.room[i].email1 ||
              this.userQueryID === this.room[i].email2)
          ) {
            //filtering only the user with messages and the active chatroom
            this.chatRooms[z] = this.room[i];
            z++;
            continue;
          }
        } else {
          this.chatRooms[z] = this.room[i];
          z++;
        }
      }
      var i;
      var j;
      //var x=0;
      for (i = 0; i < this.chatRooms.length; i++) {
        //setting the picture and name of the chatrooms
        if (this.chatRooms[i].email1.localeCompare(this.authUser.email) == 0) {
          this.chatRoomNames[i] =
            this.chatRooms[i].get_email2.firstName +
            " " +
            this.chatRooms[i].get_email2.lastName;
          this.chatRoomPic[i] =
            "http://localhost:8000/storage/images/" +
            this.chatRooms[i].get_email2.profilePicture;
        } else {
          this.chatRoomNames[i] =
            this.chatRooms[i].get_email1.firstName +
            " " +
            this.chatRooms[i].get_email1.lastName;
          this.chatRoomPic[i] =
            "http://localhost:8000/storage/images/" +
            this.chatRooms[i].get_email1.profilePicture;
        }

        //check if the auth user and passed email is on the list
        if (
          (this.authUser.email == this.chatRooms[i].email1 ||
            this.authUser.email == this.chatRooms[i].email2) &&
          (this.userQueryID === this.chatRooms[i].email1 ||
            this.userQueryID === this.chatRooms[i].email2)
        )
          if (this.activeRoom == null)
            //filtering only the user with messages and the active chatroom
            this.setRoom(
              this.chatRoomNames[i],
              this.chatRooms[i].messageRoomNumber,
              this.chatRooms[i].email1,
              this.chatRooms[i].email2
            );

        if (this.chatRooms[i].get_messages.length != 0)
          for (j = 0; j < this.chatRooms[i].get_messages.length; j++) {
            this.chatRooms[i].get_messages[
              j
            ].get_message_sender.profilePicture =
              "http://localhost:8000/storage/images/" +
              this.chatRooms[i].get_messages[j].get_message_sender
                .profilePicture;
            console.log("get chat room");
          }
      }
      if (this.activeRoom == null && this.chatRooms.length != 0)
        this.setRoom(
          this.chatRoomNames[0],
          this.chatRooms[0].messageRoomNumber,
          this.chatRooms[0].email1,
          this.chatRooms[0].email2
        );
    },
    timestampRoom(datetime) {
      var postedDate = new Date(datetime);
      var dateToday = new Date();
      var dateDiff = dateToday.getTime() - postedDate.getTime();
      dateDiff = dateDiff / (1000 * 3600 * 24);
      if (dateDiff < 1) return moment(datetime).fromNow();
      else if (dateDiff >= 1 && dateDiff < 2)
        return moment(datetime).format("[Yesterday at]");
      else return moment(datetime).format("MMM DD, YYYY [at] h:mm a");
    },
    timestamp(datetime) {
      var postedDate = new Date(datetime);
      var dateToday = new Date();
      var dateDiff = dateToday.getTime() - postedDate.getTime();
      dateDiff = dateDiff / (1000 * 3600 * 24);
      if (dateDiff < 1) return moment(datetime).format("[Today at] h:mm a");
      else if (dateDiff >= 1 && dateDiff < 2)
        return moment(datetime).format("[Yesterday at] h:mm a");
      else return moment(datetime).format("MMM DD, YYYY [at] h:mm a");
    },
    getUrlQuery() {
      if (this.$route.query.ID != null) {
        this.userQueryID = atob(this.$route.query.ID);
        let params = { userEmail: this.userQueryID };
        Axios
          .all([
            api.get("/sanctum/csrf-cookie"),
            api.post("api/createChatRoom", params),
            api.get("api/getChatroom"),
          ])
          .then((responseArr) => {
            store.commit("FETCH_ROOMS", responseArr[2]);
            this.getChatRooms();
          });
      } else if (this.$route.query.postNum != null) {
        var params = [];
        params = this.$route.query.postNum.split("/?p=");
        var postNum = atob(params[0]);
        var email = atob(params[1]);
        var message = atob(params[2]);
        params = { userEmail: email };
        var transactionDetails = {
                  email: email,
                  postNumber: postNum,
                };

        Axios
          .all([
            api.get("/sanctum/csrf-cookie"),
            api.post("api/createChatRoom", params),
          ])
          .then((responseArr) => {
            var dataMessage = [];
            var dataMessage1 = {
              roomID: responseArr[1].data.messageRoomNumber,
              message: message,
            };
            var foundPost = this.posts.find((x) => x.postNumber === postNum); //find the passed post in the stored objects in vuex

            if (foundPost.offer_post != null) {
              dataMessage = {
                roomID: responseArr[1].data.messageRoomNumber,
                message: JSON.stringify(foundPost.offer_post),
              };
              console.log(dataMessage);
            } else {
              dataMessage = {
                roomID: responseArr[1].data.messageRoomNumber,
                message: JSON.stringify(foundPost.request_post),
              };
              console.log(dataMessage);
            }

             Axios.all([
                api.post("/api/sendMessage", dataMessage),
                api.post("/api/sendMessage", dataMessage1),
                api.post("/api/createTransaction", transactionDetails),
                api.get("/api/getTransaction"),
                api.get("/api/getChatroom")

             ]).then(responseArr=>{
                console.log('transactions', responseArr[3].data)
                store.commit('setUserTransactions',responseArr[3].data)
                store.commit('FETCH_ROOMS',responseArr[4].data)
                var box = document.getElementById("journal-scroll");
                box.scrollIntoView();
             })
          });
      }

    },
    hasPostNum(text) {
      return text.search("postNumber");
    },
    timestampSched(datetime) {
      var schedDate = new Date(datetime);
      var dateToday = new Date();
      var dateDiff = schedDate.getTime() - dateToday.getTime();
      dateDiff = dateDiff / (1000 * 3600 * 24);
      if (dateDiff < 1 && dateDiff > 0)
        return moment(datetime).format("[Today at] h:mm a");
      else if (dateDiff >= 1 && dateDiff < 2)
        return moment(datetime).format("[Tommorow at] h:mm a");
      else return moment(datetime).format("[From] MMM DD, YYYY [at] h:mm a");
    },
    parseString(string) {
      var data = [];
      data[0] = JSON.parse(string);
      return data;
    },
    cancelRequest(postNum, indexTransactionPost) {
      Axios.all([
        api.post("api/cancelRequest", {postNumber: postNum,ID: indexTransactionPost}),
        api.get("/api/getTransaction"),
      ]).then(resArr=>{
        store.commit('setUserTransactions',resArr[1].data)
      })
    },
    declineOffer(postNum, indexTransactionPost, user) {
      Axios.all([
        api.post("api/declineRequest", {postNumber: postNum,ID: indexTransactionPost,userNotif: user}),
        api.get("/api/getTransaction"),
      ]).then(resArr=>{
        store.commit('setUserTransactions',resArr[1].data)
      })
    },
    // search(receiver,sender, myArray){
    //   for (var i=0; i < myArray.length; i++) {
    //       console.log(myArray[i].emailCustomerShopper ,'===' ,receiver, '&&',myArray[i].transactionReceiver,'===', sender )
    //       if (myArray[i].emailCustomerShopper === receiver && myArray[i].transactionReceiver === sender ) {
    //           return myArray[i];
    //       }
    //     }
    // },
    //  filteredTransactions(){
    //   var i,j;
    //   var rows=this.transactions

    //   // for(i=0;i<this.transactions.length;i++){
    //   //   rows[i] = this.search(this.transactions[i].transactionReceiver,this.transactions[i].emailCustomerShopper,this.transactions)
    //   // }
    //   // for(j=0;j<rows.length;j++){
    //   //   var
    //   //   if(rows[i])
    //   // }
    //   rows = rows.filter(function (el) {
    //             var  val1 =
    //             return el.transactionNumber.search('084'+val1+val2,'084'+val2+val1);
    //           });
    //   // rows=this.transactions
    //   console.log('brows = ',rows)
    //   rows = rows.sort(function (a, b) {
    //               var dateA = new Date(a.dateCreated), dateB = new Date(b.dateCreated)
    //               return dateA - dateB
    //           });

    //   console.log('arows = ', rows)

    //   // return filtered
    // }
  }, //end methods
  created() {
    this.getUrlQuery();
    this.getChatRooms();
  },
  computed: {
    authUser() {
      return store.getters.getUser;
    },
    room() {
      return store.getters.getRooms;
    },
    posts() {
      return store.getters.getPosts;
    },
    transactions() {
      return store.getters.getUserTransactions;
    },
  },
}; //end export default
const add = document.querySelector("#add");
const del = document.querySelector("#del");
document.addEventListener("click", function (event) {
  if (event.target.closest(".add")) return add.classList.add("hide");
  if (event.target.closest(".del")) return del.classList.add("hide");
});
</script>

<style>
.hide {
  display: none;
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
  background-color: rgba(185, 28, 28);
}
#scrollInbox::-webkit-scrollbar {
  width: 0px;
  cursor: pointer;
}
#scrollInbox::-webkit-scrollbar-track {
  background-color: rgba(219, 216, 216, var(--bg-opacity));
  cursor: pointer;
}
#scrollInbox::-webkit-scrollbar-thumb {
  cursor: pointer;
  background-color: rgb(219, 216, 216);
}
/*minimized desktop version and mobile version
screen sizes lesser than 639px*/
.desktopVersion {
  display: none;
}
.mobileVersion {
  display: inline;
}

/*for screen sizes 639px++*/
@media only screen and (min-width: 639px) {
  .desktopVersion {
    display: inline;
  }
  .mobileVersion {
    display: none;
  }
}
#iCheck {
  font-size: 16px;
  color: rgb(22, 22, 141);
}
#iMessage {
  font-size: 24px;
  color: rgb(22, 22, 141);
}
.material-icons {
  font-family: "Material Icons";
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
  font-feature-settings: "liga";
}
</style>