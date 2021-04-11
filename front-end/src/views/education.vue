<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm ">Education Info</p>
            </div>
           <div>  <label for="sub" id="edt3" @click="toggle=!toggle" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label></div>
        </div> 
        <div  class="text-sm w-full gap-x-10 pt-8 space-y-8
                      xl:w-97
                      2xl:w-97
                      lg:w-97
                    ">
        <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500 uppercase">College</p>
       <span>
           <p>{{college}}</p>
       </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p  class="text-gray-500 uppercase">Highshool</p>
        <span>
          {{junior_high}}
        </span>
        </span>
        </div>
        <div v-if="toggle" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle" class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
            <div class=" bg-white ring-1  ring-gray-300  w-full rounded-xl
             2xl:w-97 
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
              p-5
          ">
             <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Education Info</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle=false"> Close</p>
          </div>
           
         <div class=" ">
            <div class="flex flex-col p-5 space-y-4
            ">
                <div class="flex flex-col space-y-2">
                   <span class="ml-2 uppercase">College</span> <input   type="text"  id="college" :value="college" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div> 
                <div class="flex flex-col space-y-2">
                   <span class="ml-2 uppercase">Highschool</span> <input   type="text"  id="high_school" :value="junior_high" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div> 
            </div>
           <div class="flex justify-between items-center mt-4 pb-4 space-x-4 px-6">
              <button @click="toggle=false" class="px-3 focus:outline-none h-6 w-full bg-white ring-2 ring-black   rounded-2xl">Cancel</button>
              <button @click="toggle=false ,save_data()" class="focus:outline-none px-5 bg-red-700 text-white w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
              
            </div>
          </div>
          </div>
        </div>
    </div>
    </div>
</template>
<script>
export default {
   
data(){
    return{
        toggle:false,
    disabled: 0,
    hidden:false,
    show:true,
    show2:true,
    
      college:'Bicol University',
      junior_high:'Legaspi City Science High School',
      senior_high:'Legaspi City Science High School',
  
    }
  
},
methods:{
     save_data(){
        this.college=document.getElementById('college').value;
        this.junior_high=document.getElementById('high_school').value;
       
     },
}
}
</script>
