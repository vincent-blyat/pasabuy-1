<template>
<Navbar/>
  <!--Desktop Version-->
  <div class="desktopVersion">
    <div class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center divide-x divide-light-gray-700 px-2 pb-3">
      
      <!---leftCorner-->
      <div class="w-auto mt-20 shadow-md pr-1" style="min-width: 250px;">

        <div class="flex justify-items-center md:justify-items-center pt-1 shadow py-2">
          <span class="material-icons pt-1 pl-4" id="iMessage">
            chat</span>
            <h4 class="text-base font-medium pl-3">Messages </h4>
        </div><!--end of upper-->

        <div class="flex justify-center relative py-1 pt-2 ">
            <input type="text" class="h-8 w-11/12 pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Search" />
            <button class="absolute right-5 pt-1 focus:outline-none hover:text-red-700" onclick="searchbtn();" type="button"><span class="material-icons">
              search
              </span></button>
        </div><!---end of search bar-->

        <div class="overflow-auto px-0 py-0 h-4/5" id="journal-scroll">
       
            <button onclick="messagebtn();" type="button" class="relative w-full flex justify-between focus:outline-none items-center bg-gray-200 mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition">
                <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
                    <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm">Mark Aral<span class="material-icons pl-2" id="iCheck" >
                      check_circle
                      </span></span> 
                      <span class="text-xs text-gray-400 truncate w-32"> No problem. Thanks as well for the handsome pay!
                       </span> 
                    </div>
                </div>
                <div class="flex flex-col items-start"> 
                     <span class="text-gray-700 text-xs">
                       <span class="font-bold pl-1 pr-1">·</span>21 mins</span>
                </div>
              </button>

              <button onclick="messagebtn();" type="button" class="relative w-full flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition">
                <div class="flex ml-2"> <img src="https://images-na.ssl-images-amazon.com/images/I/41IK02LISNL._SY355_.jpg" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
                    <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm">Gwen lopez<span class="material-icons pl-2" id="iCheck" >
                      check_circle
                      </span></span> 
                      <span class="text-xs text-gray-400 truncate w-32"> No problem. Thanks as well for the handsome pay!
                       </span> 
                    </div>
                </div>
                <div class="flex flex-col items-start"> 
                     <span class="text-gray-700 text-xs">
                       <span class="font-bold pl-1 pr-1">·</span>21 mins</span>
                </div>
              </button>
        </div> <!--end of navigation-->
      
      </div><!--end of left corner-->
      
      <!------------------------------------------------------->
      <!---rightCorner-->
      <div class="w-auto mt-20 shadow-md" style="min-width: 370px;">
        <div class="relative flex justify-items-center md:justify-items-center pt-1 shadow py-2">
              <h4 class="text-base font-medium pt-1 pl-4 ">Mark Aral</h4>
              <span class="material-icons pl-3 pt-2" id="iCheck" > check_circle </span>
           
              <div id="dropdown relative">
                <div id="myDropdown" class="dropdown-content">
                  <button class="absolute right-0 mt-7 px-2 h-9 w-24 bg-gray-300 hover:text-white"><span>Delete</span>
                  </button>
                </div>
                <button onclick="myFunction()" class="dropbtn absolute right-4 pt-1 focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                more_horiz</span></button>
              </div>
        </div>
        <!---rounded-full float-right bottom-2 right-2 focus:outline-none hover:bg-gray-500 hover:text-white--->
      
      <div class="overflow-auto px-1 py-1 h-5/6 mb-1" id="journal-scroll">
        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">
            <p>Do you think you can do it in time?</p>
            <p>I need it before 4 pm so I hope you can deliver it in time.</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > 1:24 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8 "> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>Yeah, sure! No problem.</p>
              <p>I'm already on my way to SM City Legazpi.</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">1:26 PM    |    Today</span></div>
          </div>
         </div>
        </div>

        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">
            <p>Thank you so much!</p>
            <p>Laet me know when you're on your way.</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > 1:31 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>Sorry, it took me a while. I had to shop for three orders.</p>
              <p>Anyway, I'm already in my car. I'll deliver these two orders first here in Legazpi.</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">2:40 PM    |    Today</span></div>
          </div>
         </div>
        </div>

        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">
            <p>No problem, chat me when you're near my house already</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > 2:45 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>I'm two mins away from your house.</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">3:12 PM    |    Today</span></div>
          </div>
         </div>
        </div>

        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">
            <p>Thanks for your help!</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > 3:36 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>No problem. Thanks as well for the handsome pay!</p>
             <span class="text-gray-500 pl-1" style="font-size: 10.5px;">3:39 PM    |    Today</span></div>
          </div>
         </div>
        </div>

        <div id="chatmsg"></div>

      </div>

      <div class="pl-4 pr-4 mb-4 mt-1 relative flex flex-cols justify-between items-center">
            <button class="h-6 w-6 bg-gray-400 rounded-full hover:text-white" onclick="attachbtn();" type="button">
              <span class="material-icons">
                  add</span>
            </button>
            <input type="text" class="w-10/12 h-8 flex pl-4 border focus:outline-none focus:ring-2 focus:ring-gray-300 rounded-full" placeholder="Type a message" id="typemsg" />
            <button  onclick="sendbtn();" class="w-8 h-8 flex items-center pl-1 rounded-full focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                  send</span>
            </button>
      </div>
    </div><!--end of right corner-->
    </div>
  </div><!--end of desktop version-->
  
  <!------------------------------------------------------------------------------------------------------->
  
  <!---Mobile Version-->
  <div class="mobileVersion">
   <div class="bg-gray-50 flex items-start h-full min-h-screen max-h-screen divide-x divide-light-gray-700 px-2 pb-1">
      
      <!---leftCorner-->
      <div class="mt-16 pr-1 sm:w-5/6 ssm:w-full vs:w-full">

       <router-link to ="/dashboard">
        <div class="flex justify-items-center md:justify-items-center pt-4 pb-3">
          <button class="focus:outline-none pl-5 hover:text-red-700" onclick="backbtn();" type="button"><span class="material-icons">
              keyboard_backspace
              </span></button>
          <h4 class="text-base font-bold pl-3">Messages </h4>
        </div><!--end of upper-->
        </router-link>

       
        <div class="flex justify-center relative py-1">
            <input type="text" class="h-8 w-11/12 pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Search" />
            <button class="absolute right-9 pt-1 focus:outline-none hover:text-red-700" onclick="searchbtn();" type="button"><span class="material-icons">
              search
              </span></button>
        </div><!---end of search bar-->

        <div class="overflow-auto mt-1 py-0 h-4/5" id="journal-scroll">
              <router-link to="/submessage">
              <div class="relative w-full flex justify-between items-center focus:bg-gray-200 mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition">
                <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
                    <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm">Mark Aral<span class="material-icons pl-2" id="iCheck" >
                      check_circle
                      </span></span> 
                      <span class="text-xs text-gray-400 truncate w-50"> No problem. Thanks as well for the handsome pay!
                       </span> 
                    </div>
                </div>
                <div class="flex flex-col items-start"> 
                     <span class="text-gray-700 text-xs">
                       <span class="font-bold pl-1 pr-1">·</span>21 mins</span>
                </div>
              </div></router-link>

              <router-link to="/submessage">
              <div class="relative w-full flex justify-between items-center mt-2 p-2 hover:shadow-lg focus:bg-gray-200 rounded cursor-pointer transition">
                <div class="flex ml-2"> <img src="https://images-na.ssl-images-amazon.com/images/I/41IK02LISNL._SY355_.jpg" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
                    <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm">Gwen lopez<span class="material-icons pl-2" id="iCheck" >
                      check_circle
                      </span></span> 
                      <span class="text-xs text-gray-400 truncate w-50"> No problem. Thanks as well for the handsome pay!
                       </span> 
                    </div>
                </div>
                <div class="flex flex-col items-start"> 
                     <span class="text-gray-700 text-xs">
                       <span class="font-bold pl-1 pr-1">·</span>21 mins</span>
                </div>
              </div></router-link>
        </div> <!--end of navigation-->
      
      </div><!--end of left corner-->
   </div> 
  </div> <!-------------end Mobile version------------>
</template>

<style>
    #journal-scroll::-webkit-scrollbar {
        width: 3px;
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
     .dropbtn {
       cursor: pointer;
     }

    .dropdown-content {
      display: none;
      overflow: auto;
    }

    .dropdown-content button {
      display: block;
    }

.show {display: block;}

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

<script>
  import Navbar from './Navbar'
  export default {
    components:{
      Navbar
    }
  }

</script>