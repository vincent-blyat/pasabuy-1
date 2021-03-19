<template>
<Navbar/>
<!--Desktop Version-->
  <div class="desktopVersion">
    <div class="flex justify-center px-2 divide-x bg-gray-50 divide-light-gray-700 h-5/6">
    
      <!---leftCorner-->
      <div class="w-auto max-h-screen shadow-md left-Corner" style="min-width: 250px;">

        <div class="flex py-2 pt-1 shadow justify-items-center md:justify-items-center">
          <span class="pt-1 pl-4 material-icons" id="iMessage">
            chat</span>
            <h4 class="pl-3 text-base font-medium">Messages</h4>
        </div><!--end of upper-->

        <div class="p-2 m-1">
          <div class="flex justify-center">
            <input type="text" class="relative w-11/12 px-3 py-2 border border-gray-300 rounded-lg " placeholder="Search" />
            <button class="float-right p-2 rounded-full bottom-4 focus:outline-none hover:bg-gray-500 hover:text-white" onclick="searchbtn();" type="button"><span class="material-icons">
              search
              </span></button>
          </div>
        </div><!---end of search bar-->

        <div class="px-0 py-0 mb-1 overflow-auto h-5/6" id="journal-scroll">
          <div class="px-2 mt-2">
            <ul>
              <li class="flex items-center justify-between p-2 mt-2 transition bg-gray-200 rounded cursor-pointer hover:shadow-lg">
                <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="w-10 h-10 rounded-lg "> 
                    <div class="flex flex-col ml-2"> <span class="font-medium text-black">Mark Aral<span class="pl-2 material-icons" id="iCheck" >
                      check_circle
                      </span></span> 
                      <span class="w-32 text-xs text-gray-400 truncate">No Problem.Thanks...
                       </span> 
                    </div>
                </div>
                   <div class="flex flex-col items-start"> 
                     <span class="text-xs text-gray-700">
                       <span class="pl-1 pr-1 font-bold">·</span>21 mins</span>
                   </div>
              </li>
              
              <li class="flex items-center justify-between p-2 mt-2 transition bg-white rounded cursor-pointer hover:shadow-lg">
                    <div class="flex ml-2"> <img src="https://images-na.ssl-images-amazon.com/images/I/41IK02LISNL._SY355_.jpg" alt="sunil" class="w-10 h-10 rounded-lg "> 
                        <div class="flex flex-col ml-2"> <span class="font-medium text-black">Gwen Lopez<span class="pl-2 material-icons" id="iCheck" >
                          check_circle
                          </span></span> 
                          <span class="w-32 text-xs text-gray-400 truncate">Sure, no problem!
                           </span> 
                        </div>
                    </div>
                       <div class="flex flex-col items-start"> 
                         <span class="text-xs text-gray-700">
                           <span class="pl-1 pr-1 font-bold">·</span>30 mins</span>
                       </div>
              </li>
            </ul>

          </div><!--end outer scroll-->
        </div> <!--end of navigation-->
      
      </div><!--end of left corner-->

      <!---rightCorner-->
      <div class="w-auto max-h-screen shadow-md" style="min-width: 450px;">
        <div class="flex py-2 pt-1 shadow justify-items-center md:justify-items-center">
              <h4 class="pt-1 pl-4 text-base font-medium ">Mark Aral</h4>
              <span class="pt-2 pl-3 material-icons" id="iCheck" > check_circle </span>
        </div>
      
      <div class="px-1 py-1 mb-1 overflow-auto h-5/6" id="journal-scroll">
        <div class="flex justify-end p-2 ">
          <div class="pt-2 pb-3 pl-4 pr-4 ml-32 text-sm bg-gray-100 rounded-lg">
            <p>Do you think you can do it in time?</p>
            <p>I need it before 4 pm so I hope you can deliver it in time.</p>
            <span class="pl-1 text-gray-500 time_date" style="font-size: 10.5px;" > 1:24 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="w-8 h-8 rounded-lg "> 
           <div class="rounded-lg ">
            <div class="p-3 ml-4 mr-10 text-sm bg-gray-100 rounded-lg">
              <p>Yeah, sure! No problem.</p>
              <p>I'm already on my way to SM City Legazpi.</p>
              <span class="pl-1 text-gray-500" style="font-size: 10.5px;">1:26 PM    |    Today</span></div>
          </div>
         </div>
        </div>

        <div class="flex justify-end p-2 ">
          <div class="pt-2 pb-3 pl-4 pr-4 ml-32 text-sm bg-gray-100 rounded-lg">
            <p>Thank you so much!</p>
            <p>Laet me know when you're on your way.</p>
            <span class="pl-1 text-gray-500 time_date" style="font-size: 10.5px;" > 1:31 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="w-8 h-8 rounded-lg"> 
           <div class="rounded-lg ">
            <div class="p-3 ml-4 mr-10 text-sm bg-gray-100 rounded-lg">
              <p>Sorry, it took me a while. I had to shop for three orders.</p>
              <p>Anyway, I'm already in my car. I'll deliver these two orders first here in Legazpi.</p>
              <span class="pl-1 text-gray-500" style="font-size: 10.5px;">2:40 PM    |    Today</span></div>
          </div>
         </div>
        </div>

        <div class="flex justify-end p-2 ">
          <div class="pt-2 pb-3 pl-4 pr-4 ml-32 text-sm bg-gray-100 rounded-lg">
            <p>No problem, chat me when you're near my house already</p>
            <span class="pl-1 text-gray-500 time_date" style="font-size: 10.5px;" > 2:45 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="w-8 h-8 rounded-lg"> 
           <div class="rounded-lg ">
            <div class="p-3 ml-4 mr-10 text-sm bg-gray-100 rounded-lg">
              <p>I'm two mins away from your house.</p>
              <span class="pl-1 text-gray-500" style="font-size: 10.5px;">3:12 PM    |    Today</span></div>
          </div>
         </div>
        </div>

        <div class="flex justify-end p-2 ">
          <div class="pt-2 pb-3 pl-4 pr-4 ml-32 text-sm bg-gray-100 rounded-lg">
            <p>Thanks for your help!</p>
            <span class="pl-1 text-gray-500 time_date" style="font-size: 10.5px;" > 3:36 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="w-8 h-8 rounded-lg"> 
           <div class="rounded-lg ">
            <div class="p-3 ml-4 mr-10 text-sm bg-gray-100 rounded-lg">
              <p>No problem. Thanks as well for the handsome pay!</p>
             <span class="pl-1 text-gray-500" style="font-size: 10.5px;">3:39 PM    |    Today</span></div>
          </div>
         </div>
        </div>

          <div class="" id="chatmsg"></div>

      </div>

      <div class="pl-4 pr-4 mt-1 mb-4">
          <div class="relative ">
                <input type="text" class="relative w-11/12 px-3 py-2 border border-gray-300 rounded" placeholder="Type a message" id="typemsg" />
              
                  <button class="absolute float-right text-red-700 bottom-2 right-2 focus:outline-none hover:bg-gray-500 hover:text-white" onclick="sendbtn();" type="button"><span class="material-icons">
                    send
                    </span></button>
          </div>
      </div>
      </div>
    </div><!--end of right corner-->
  </div><!--end of desktop version-->
  
  <!------------------------------------------------------------------------------------------------------->
  
  <!---Mobile Version-->
  <div class="mobileVersion">
   
    <div class="w-full max-h-screen p-2" style="min-width: 250px;">

      <div class="px-3 pt-2 overflow-hidden overflow-x-auto" id="journal-scroll">
         <button class="pr-4">
            <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="w-10 h-10 rounded-lg "> 
            <span class="font-medium" style="font-size: 11px;">Mark<br>Aral</span>
          </button>
          <button class="pr-4">
            <img src="https://images-na.ssl-images-amazon.com/images/I/41IK02LISNL._SY355_.jpg" alt="sunil" class="w-10 h-10 rounded-lg ">  
            <span class="font-medium" style="font-size: 11px;">Gwen<br>Lopez</span>
          </button>
          <button class="float-right pt-4 pr-4 rounded-full focus:outline-none" onclick="searchbtn();" type="button"><span class="material-icons">
            search
            </span></button>
      </div>

      <!---MessageContent-->
      <div class="w-auto pb-6 mt-2 shadow-md h-5/6" style="min-width: 400px;">
        <div class="flex h-12 pt-1 pl-2 pr-16 rounded shadow justify-items-center md:justify-items-center">
              <h4 class="pt-1 pl-4 text-lg font-medium ">Mark Aral</h4>
              <span class="pt-2 pl-3 material-icons" id="iCheck" > check_circle </span>
        </div>
      
      <div class="px-1 py-1 pr-8 mb-1 overflow-auto h-5/6" id="journal-scroll">
        <div class="flex justify-end p-2 ">
          <div class="pt-2 pb-3 pl-4 pr-4 ml-32 text-sm bg-gray-100 rounded-lg">
            <p>Do you think you can do it in time?</p>
            <p>I need it before 4 pm so I hope you can deliver it in time.</p>
            <span class="pl-1 text-gray-500 time_date" style="font-size: 10.5px;" > 1:24 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="w-5 h-5 rounded-lg "> 
           <div class="rounded-lg ">
            <div class="p-3 ml-4 mr-10 text-sm bg-gray-100 rounded-lg">
              <p>Yeah, sure! No problem.</p>
              <p>I'm already on my way to SM City Legazpi.</p>
              <span class="pl-1 text-gray-500" style="font-size: 10.5px;">1:26 PM    |    Today</span></div>
          </div>
         </div>
        </div>

        <div class="flex justify-end p-2 ">
          <div class="pt-2 pb-3 pl-4 pr-4 ml-32 text-sm bg-gray-100 rounded-lg">
            <p>Thank you so much!</p>
            <p>Laet me know when you're on your way.</p>
            <span class="pl-1 text-gray-500 time_date" style="font-size: 10.5px;" > 1:31 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="w-5 h-5 rounded-lg"> 
           <div class="rounded-lg ">
            <div class="p-3 ml-4 mr-10 text-sm bg-gray-100 rounded-lg">
              <p>Sorry, it took me a while. I had to shop for three orders.</p>
              <p>Anyway, I'm already in my car. I'll deliver these two orders first here in Legazpi.</p>
              <span class="pl-1 text-gray-500" style="font-size: 10.5px;">2:40 PM    |    Today</span></div>
          </div>
         </div>
        </div>

        <div class="flex justify-end p-2 ">
          <div class="pt-2 pb-3 pl-4 pr-4 ml-32 text-sm bg-gray-100 rounded-lg">
            <p>No problem, chat me when you're near my house already</p>
            <span class="pl-1 text-gray-500 time_date" style="font-size: 10.5px;" > 2:45 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="w-5 h-5 rounded-lg"> 
           <div class="rounded-lg ">
            <div class="p-3 ml-4 mr-10 text-sm bg-gray-100 rounded-lg">
              <p>I'm two mins away from your house.</p>
              <span class="pl-1 text-gray-500" style="font-size: 10.5px;">3:12 PM    |    Today</span></div>
          </div>
         </div>
        </div>

        <div class="flex justify-end p-2 ">
          <div class="pt-2 pb-3 pl-4 pr-4 ml-32 text-sm bg-gray-100 rounded-lg">
            <p>Thanks for your help!</p>
            <span class="pl-1 text-gray-500 time_date" style="font-size: 10.5px;" > 3:36 PM    |    Today</span> </div>
        </div>

        <div class="p-1">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="w-5 h-5 rounded-lg"> 
           <div class="rounded-lg ">
            <div class="p-3 ml-4 mr-10 text-sm bg-gray-100 rounded-lg">
              <p>No problem. Thanks as well for the handsome pay!</p>
             <span class="pl-1 text-gray-500" style="font-size: 10.5px;">3:39 PM    |    Today</span></div>
          </div>
         </div>
        </div>

          <div class="" id="chatmsg"></div>

      </div>

      <div class="pl-2 h-10px">
          <div class="relative">
                <input type="text" class="relative w-11/12 h-10 px-3 py-2 border border-gray-300 rounded" placeholder="Type a message" id="typemsg" />
               <button class="absolute float-right bottom-2 right-2 focus:outline-none hover:bg-gray-500 hover:text-white" onclick="sendbtn();" type="button"><span class="material-icons">
                  send</span></button>
          </div>
      </div>
    </div><!--end of right corner-->

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