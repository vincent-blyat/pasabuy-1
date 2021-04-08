<template>
     <div id ="personal_info" class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm " >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Personal Info</p>
            </div>
           <div> 
               <label for="sub" id="edt1" @click="toggle=!toggle" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label>
           </div>
            
        </div>
        <div id="personal_info" class="text-sm  gap-x-10 pt-8  w-full">
        <form id="myForm" class=" ">
          <div class="flex flex-col items-center gap-y-3 justify-center">
            <img src="img/yami.jpg" class=" w-16 h-16 rounded-full ring-2 ring-gray-500"/>
            <label for="profile_image" class="font-extrabold cursor-pointer text-blue-800">Change Profile Photo</label>
          </div>
          <input id="profile_image" type="file" class="hidden">
        <div  class="text-sm w-full gap-x-10 pt-8 space-y-8
                      xl:w-7/12
                      2xl:w-9/12
                      lg:w-8/12
                    ">
             <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">NAME</p>
        <span>
        <p >{{personal.name}} {{personal.midname}} {{personal.lastname}}</p>
       </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2 ">
        <p class="text-gray-500">PHONE NUMBER</p>
        <span>
        <p>{{personal.phone_number}}</p>
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">WORK</p>
        <span>
        <p>{{personal.work}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">GENDER</p>
        <span>
        <p>{{personal.gender}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">BIRTHDAY</p>
        <span>
        <p>{{personal.birdate}}</p>
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">Language</p>
        <span>
        <p>{{personal.language}}</p>
        </span>
         </span>
          </div>
       
        </form>
        </div>
       <div v-if="toggle" class="fixed inset-0 bg-white bg-opacity-75"></div>
        <div v-if="toggle" class=" absolute items-center z-40  inset-0 ">
        <div class="flex   w-full p-3  items-center justify-center
        py-20
        ">
          <div class=" bg-white ring-1  ring-gray-300 p-5 w-full rounded-md
             2xl:w-6/12 
              lg:w-6/12
              xl:w-6/12 
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
            <p class="text-lg font-extrabold">Edit Personal Information</p>
            <hr class="mb-5 border-2 border-red-700 bg-red-700">
            <div class="flex flex-col items-center gap-y-3 justify-center mb-4">
            <img src="img/yami.jpg" class=" w-16 h-16 rounded-full ring-2 ring-gray-500
            xl:w-40 xl:h-40
            2xl:w-40 2xl:h-40
            lg:w-40 lg:h-40
            "/>
            <label for="profile_image" class="font-extrabold cursor-pointer text-blue-800">Change Profile Photo</label>
          </div>
          <div>
            <div class="relative grid grid-cols-2 gap-y-4
            ">
                <span>Firstname:</span> <input id="f_name"   type="text" :value="personal.name" class=" pl-2 bg-transparent border-2 border-gray-400"/>
                 <span>Middlename:</span> <input type="text" :value="personal.midname" class=" pl-2 bg-transparent border-2 border-gray-400"/>
                 <span>Lastname: </span> <input type="text" :value="personal.lastname" class=" pl-2 bg-transparent border-2 border-gray-400"/>
                <span>Phone number: </span> <input type="number" :value="personal.phone_number" class=" pl-2 bg-transparent border-2 border-gray-400"/>
                <span>Work: </span> <input type="text" :value="personal.work" class=" pl-2 bg-transparent border-2 border-gray-400"/>
                <span>Gender</span>
                <div class=" space-x-4">
                  <span class="space-x-2">
                  <span><input type="radio" value="Male" id="male" name="gender" v-model="personal.gender"/></span>
                  <label for="male">Male</label>
                  </span>
                  <span class="space-x-2">
                  <span><input type="radio" value="Female" id="female" name="gender" v-model="personal.gender"/></span>
                  <label for="female">Female</label>
                  </span>
              </div>
                  <span>Birthday:</span>  <input class=" pl-2 bg-transparent border-2 border-gray-400" @keyup="personal.birdate=$event.target.value" type="date" id="start" name="trip-start"
                 min="1990-01-01"  v-model="personal.birdate" >
                <span>Language: </span> <input type="text" :value="personal.language" class=" pl-2 bg-transparent border-2 border-gray-400"/>
            </div>
            <div class="flex justify-end mt-4 space-x-4">
              <button @click="toggle=false" class="px-3 bg-red-700 text-white rounded-2xl">Cancel</button>
              <button @click="toggle=false" class="px-5 shadow-xl ring-1 ring-gray-300 bg-white text-red-700 rounded-2xl">Save</button>
              
            </div>
          </div>
          </div>
        </div>
    </div>
    </div>
  
</template>
<script>
import Profile from './ProfileEdit.vue'
export default {
  
  name:'personal',
  component:{
   Profile,
  },
data(){
    return{
      toggle:false,
      avatar:null,
    disabled: 0,
    hidden:false,
    show:true,
    show2:true,
    edit2:false,
    message:'yeah',
    personal:  {
      name:'Juan',
      midname:'B',
      lastname:'Delacruz',
      phone_number:'09021050502',
      work:'Krusty Crab',
      gender:'Male',
      language:'Bicol',
      birdate:new Date().toISOString().slice(0,10)
    },
    }
  
},
methods:
    {
      handleInput(value) {
      this.name = value;
      alert(this.name)
    },
    }
}
</script>