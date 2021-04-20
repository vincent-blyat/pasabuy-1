<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Account Info</p>
            </div>
       
        </div> 
        <div  class="text-sm w-full gap-x-10 pt-8 space-y-8
             
                    ">
        <div class=" w-full   font-raleways font-bold flex justify-between"> 
        <p class="text-gray-500">Email</p>
       <span>
           <p>{{email}}</p>
       </span>
       <button @click="toggle_email=!toggle_email" class="material-icons focus:outline-none">
        chevron_right 
       </button>
        </div>
        <div class="  w-full font-raleways font-bold flex justify-between"> 
        <p  class="text-gray-500">Password</p>
        <span>
            <input type="password" class="bg-transparent" :value="password" disabled/>
        </span>
         <button @click="toggle_password=!toggle_password"  class="material-icons focus:outline-none">
        chevron_right 
       </button>
        </div>
        </div>
        <!--Change Email Address-->
        <div v-if="toggle_email" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle_email"  class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class=" bg-white ring-1  ring-gray-300  p-5 w-full rounded-xl
             2xl:w-97 
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
            <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Email</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle_email=false"> Close</p>
          </div>
          <div class="text-center text-gray-400 text-sm">
              <p>
                  Update your email below. There will be a new email sent that you will need to verify this new email.
              </p>
          </div>
          <div class=" ">
            <div class="flex flex-col space-y-4
            ">
             <div class="flex flex-col">
                <span class="ml-2  text-gray-500 font-bold">Password</span>
                 <input id="password"   type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
             <div class="flex flex-col">
                <span class="ml-2  text-gray-500 font-bold">New Email</span>
                 <input id="new_email"   type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
              </div>
            
          </div>
           <div class="flex justify-between mt-4  text-2xlspace-x-4 items-center">
             <button @click="toggle_email=false,toggle_confirmation=!toggle_confirmation" class="px-4 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Next</button>
            </div>
          </div>
        </div>
    </div>
    <!--Confirmation-->
    <div v-if="toggle_confirmation" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle_confirmation"  class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class=" bg-white ring-1  ring-gray-300  p-5 w-full rounded-xl
             2xl:w-97 
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
            <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Email</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle_confirmation=false"> Close</p>
          </div>
          <div class="text-center text-gray-400 text-sm">
              <p>
                  To make sure  it's really you, enter the 6-digit verification code sent to your new Email
              </p>
          </div>
          <div class=" ">
            <div class="flex flex-col  space-y-4
            ">
             
            
             <div class="flex flex-col">
                <span class="ml-2  text-gray-500 font-bold">Code</span>
                 <input id="new_email"   type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
              </div>
            
          </div>
           <div class="flex justify-between mt-4   items-center">
             <button @click="toggle_confirmation=false" class="px-4 bg-red-buttons  text-white focus:outline-none w-full h-7     shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
            </div>
          </div>
        </div>
    </div>
         <!---->
    <!--Change Password-->
    
 <div v-if="toggle_password" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle_password"  class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class=" bg-white ring-1  ring-gray-300  p-5 w-full rounded-xl
             2xl:w-97 
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
            <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Password</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle_password=false"> Close</p>
          </div>
          <div class="text-center text-gray-400 text-sm">
              <p>
                  Choose a strong password and dont reuse it for other accounts
                </p>
          </div>
          <div class=" ">
            <div class="flex flex-col pt-5 space-y-4
            ">
             <div class="flex flex-col">
                <span class="ml-2">Current Password</span>
                 <input id="password"   type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
             <div class="flex flex-col">
                <span class="ml-2">New Password</span>
                 <input id="password"   type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
             <div class="flex flex-col">
                <span class="ml-2">Confirm Password</span>
                 <input id="password"   type="password" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
            </div>
            
              </div>
            
          </div>
           <div class="flex justify-between mt-4  pt-3 text-2xlspace-x-4 items-center">
             <button @click="toggle_password=false" class="px-4 bg-red-buttons text-white focus:outline-none w-full h-8 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
            </div>
          </div>
        </div>
    </div>
    <!--End Change Password-->
    </div>
  

</template>
<script>
export default {
 
data:()=>{
    return{
    toggle:false,
    toggle_email:false,
    toggle_password:false,
    toggle_confirmation:false,
    email:'sanJuan@gmail.com',
    password:'password',
    }
  
},
}
</script>
