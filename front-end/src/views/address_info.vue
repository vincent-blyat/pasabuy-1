<template>
    <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Address Info</p>
            </div>
        <div>  <label  @click="toggle_add=!toggle_add" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer select-none">Add new Shipping Address</label>
                
        </div>
        </div>
         <div  class="text-sm w-full  pt-8 space-y-8
                       xl:w-97
                      2xl:w-97
                      lg:w-97
                    ">

         <div class="flex items-center space-x-4">
           <p class="uppercase font-bold select-none">Home address </p>
             <span  @click="toggle=!toggle" class="material-icons text-base text-gray-500 cursor-pointer sele">
              mode
              </span>
         </div>
         <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500 uppercase">Landmark</p>
        <span>
        <p >{{address_info.landmark}}</p>
        </span>
        </span>

        <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">HOUSE NUMBER</p>
        <span>
        <p >{{address_info.house_number}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">PROVINCE</p>
        <span>
        <p >{{address_info.province}}</p>
        </span>
        </span> 
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">CITY/MUNICIPALITY</p>
        <span>
            <p >{{address_info.city}}</p>
            
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">BARANGAY</p>
        <span>
            <p>{{address_info.barangay}}</p>
            
        </span>
        </span>
        </div>
       <div  class="text-sm w-full  pt-8 space-y-8
                       xl:w-97
                      2xl:w-97
                      lg:w-97
                    ">
        <div class=" grid grid-cols-2 items-center ">
        <select value="adjsad" id="select_address" @click="AddShippingAdd()" v-model="selected" 
        class="h-9 rounded-xl px-2 bg-gray-300 
         bg-right text-gray-400 font-bold select-none
        focus:outline-none appearance-none bg-dropdown bg-no-repeat">
        
        <option  v-for="option in options" :key="option.text" v-bind:value="option.value" class="text-black ">
        {{ option.text }}
        </option>

        </select>
        </div>
         <div class="flex items-center space-x-4">
           <p class="uppercase font-bold select-none">Shipping Address
               {{selected+1}}
           </p>
             <span @click="toggle_shipping=!toggle_shipping"  class="material-icons text-base text-gray-500 cursor-pointer select-none">
              mode
              </span>
         </div>
         <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500 uppercase">Landmark</p>
        <span>
        <p >{{Landmark}}</p>
        </span>
        </span>

        <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">HOUSE NUMBER</p>
        <span>
        <p >{{House_number}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">PROVINCE</p>
        <span>
        <p >{{Province}}</p>
        </span>
        </span> 
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">CITY/MUNICIPALITY</p>
        <span>
            <p >{{City}}</p>
            
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">BARANGAY</p>
        <span>
            <p>{{Barangay}}</p>
            
        </span>
        </span>
        </div>
        <!--Edit Home address-->
        <div v-if="toggle" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle" class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class="  bg-white ring-1  ring-gray-300 p-5 w-full rounded-md
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
            <p class="text-lg flex  font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Address Info</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle=false"> Close</p>
          </div>
            
         <div class=" ">
            <div class="flex flex-col p-5 space-y-4
            ">
                 <div class="flex flex-col">
                   <span class="ml-2 uppercase">Landmark</span> <input   type="text"  id="landmark" :value="address_info.landmark" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>

                 <div class="flex flex-col">
                   <span class="ml-2 uppercase">House Number</span> <input   type="number"  id="h_number" :value="address_info.house_number" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>
                  <div class="flex flex-col">
                 <span class="ml-2 uppercase">Province</span> <input type="text" id="province" :value="address_info.province"  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                  </div>
                   <div class="flex flex-col">
                  <span class="ml-2 uppercase">City/Municaplity </span> <input id="town" :value="address_info.city" type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                   </div>
                    <div class="flex flex-col">
                  <span class="ml-2 uppercase">Barangay</span> <input id="barangay" :value="address_info.barangay" type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                    </div>
              </div>
               <div class="flex justify-between mt-4 pb-4 space-x-4 px-6">
              <button @click="toggle=false" class=" focus:outline-none px-3 h-7 w-full bg-white ring-2 ring-black   rounded-2xl">Cancel</button>
              <button @click="toggle=false ,save_data()" class="px-5 focus:outline-none bg-red-buttons text-white w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
              
            </div>
          </div>
          </div>
        </div>
    </div>
      <!--Home Address Edit end-->
      <!--Edit Shipping Address-->
      <div v-if="toggle_shipping" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle_shipping" class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class="  bg-white ring-1  ring-gray-300 p-5 w-full rounded-md
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
            <p class="text-lg flex  font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Update Shipping Address</p>
            <p class="font-bold text-red-700 cursor-pointer left-10" @click="toggle_shipping=false,toggle_delete=!toggle_delete"> Delete</p>
          </div>
            
         <div class=" ">
            <div class="flex flex-col p-5 space-y-4
            ">
                 <div class="flex flex-col">
                   <span class="ml-2 uppercase">Landmark</span> <input   type="text"  id="Landmark" :value="Landmark" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>

                 <div class="flex flex-col">
                   <span class="ml-2 uppercase">House Number</span> <input   type="number"  id="H_number" :value="House_number" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>
                  <div class="flex flex-col">
                 <span class="ml-2 uppercase">Province</span> <input type="text" id="Province" :value="Province"  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                  </div>
                   <div class="flex flex-col">
                  <span class="ml-2 uppercase">City/Municaplity </span> <input id="Town" :value="City" type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                   </div>
                    <div class="flex flex-col">
                  <span class="ml-2 uppercase">Barangay</span> <input id="Barangay" :value="Barangay" type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                    </div>
              </div>
               <div class="flex justify-between mt-4 pb-4 space-x-4 px-6">
              <button @click="toggle_shipping=false" class=" focus:outline-none px-3 h-7 w-full bg-white ring-2 ring-black   rounded-2xl">Cancel</button>
              <button @click="toggle_shipping=false ,save_data_shippingAdd()" class="px-5 focus:outline-none bg-red-buttons text-white w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
              
            </div>
          </div>
          </div>
        </div>
    </div>
      <!--End Edit Shipping Address-->
      <!--Add new Shipping Address-->
      <div v-if="toggle_add" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle_add" class=" fixed overflow-y-auto items-center  inset-0 ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          <div class="  bg-white ring-1  ring-gray-300 p-5 w-full rounded-md
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
            <p class="text-lg flex  font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Add New Shipping Address</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle_add=false"> Close</p>
          </div>
            
         <div class=" ">
            <div class="flex flex-col p-5 space-y-4
            ">
                 <div class="flex flex-col">
                   <span class="ml-2 uppercase">Landmark</span> 
                   <input   type="text"  id="Landmark_add" required  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>

                 <div class="flex flex-col">
                   <span class="ml-2 uppercase">House Number</span> <input  required type="number"  id="H_number_add"  class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>
                  <div class="flex flex-col">
                 <span class="ml-2 uppercase">Province</span> <input type="text" id="Province_add" required   class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                  </div>
                   <div class="flex flex-col">
                  <span class="ml-2 uppercase">City/Municaplity </span> <input id="Town_add" required  type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                   </div>
                    <div class="flex flex-col">
                  <span class="ml-2 uppercase">Barangay</span> <input id="Barangay_add" required type="text" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                    </div>
              </div>
               <div class="flex justify-between mt-4 pb-4 space-x-4 px-6">
              <button @click="toggle_add=false" class=" focus:outline-none px-3 h-7 w-full bg-white ring-2 ring-black   rounded-2xl">Cancel</button>
              <button type="submit" @click="toggle_add=false ,save_newShippingAdd()" class="px-5 focus:outline-none bg-red-buttons text-white w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
              
            </div>
          </div>
          </div>
        </div>
    </div>
      <!--End Add new Shipping Address-->
      <!--Delete Confirmation-->
      <div v-if="toggle_delete" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle_delete"  class=" fixed overflow-y-auto   inset-0 ">
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
            <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">Delete Shipping Address</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle_delete=false"> Close</p>
          </div>
          <div class="text-center pb-5 ">
          <p class="text-lg">
            Are you sure you want to remove this shipping Address?
          </p>
          </div>
         <hr>
          <div class=" ">
           <div class="flex justify-between mt-4 px-5 text-2xl space-x-4 items-center">
             <button @click="toggle_delete=false" class="px-4 bg-white text-black focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Cancel</button>
             
             <button @click="toggle_delete=false,delete_shippingAdd()" class="px-4 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Delete</button>
              
            </div>
            
          </div>
           
          </div>
        </div>
    </div>
   
      <!--End Delete Confirmation-->
     </div>
</template>
<script>
//import ShippingAdd from './shopping_address_info.vue'
export default {
  name:'AddressInfo',
 /* components:{
    ShippingAdd
  },*/
data(){
    return{
    toggle:false,
    toggle_add:false,
   toggle_shipping:false,
   toggle_delete:false,
    address_info:{
    landmark:'Mana Zone',
    house_number:'0210',
    province:'Albay',
    city:'Legaspi',
    barangay:'Banquerohan'
    },
            Landmark:'',
            House_number:'',
            Province:'',
            City:'',
            Barangay:'',
            num:0,
            selected:0,
              options: [
            { text: 'Shipping Address 1', value: 0 },
            { text: 'Shipping Address 2', value: 1 },
            { text: 'Shipping Address 3', value: 2 }
                    ],
            shippingAdd:[
                 {
                    'landmark':'La la land',
                    'house_number':'5050',
                    'province':'Albay',
                    'city':'Legazpi',
                    'barangay':'Chairman',
                },
                {
                    'landmark':'San Jose',
                    'house_number':'143',
                    'province':'Camarines Sur',
                    'city':'San Jose',
                    'barangay':'Tanod',
                },
                {
                    'landmark':'Goa',
                    'house_number':'123',
                    'province':'Camarines Sur',
                    'city':'Goa',
                    'barangay':'Hall',
                }
            ]
    }
    

},
 created: function () {
          this.Landmark=this.shippingAdd[0].landmark;
           this.House_number=this.shippingAdd[0].house_number;
           this.Province=this.shippingAdd[0].province;
           this.City=this.shippingAdd[0].city;
           this.Barangay=this.shippingAdd[0].barangay;
  },
methods:  {
     save_data(){
        this. address_info.house_number=document.getElementById('h_number').value;
        this. address_info.city=document.getElementById('town').value;
        this. address_info.province=document.getElementById('province').value;
        this. address_info.barangay=document.getElementById('barangay').value;
        this. address_info.landmark=document.getElementById('landmark').value;
        
     },
      AddShippingAdd(){
           let x=document.getElementById('select_address').value;
           this.Landmark=this.shippingAdd[x].landmark;
           this.House_number=this.shippingAdd[x].house_number;
           this.Province=this.shippingAdd[x].province;
           this.City=this.shippingAdd[x].city;
           this.Barangay=this.shippingAdd[x].barangay;
       },
    save_data_shippingAdd(){
           let y=document.getElementById('select_address').value;
           this.Landmark=document.getElementById('Landmark').value;
           this.shippingAdd[y].landmark=this.Landmark;

            this.House_number=document.getElementById('H_number').value;
            this.shippingAdd[y].house_number=this.House_number;

           this.Province=document.getElementById('Province').value;
           this.shippingAdd[y].province=this.Province;

           this.City=document.getElementById('Town').value;
            this.shippingAdd[y].city=this.City

           this.Barangay=document.getElementById('Barangay').value;
           this.shippingAdd[y].barangay=this.Barangay
        
           
    },
    save_newShippingAdd(){
      
          let dataX={
                    'landmark':document.getElementById('Landmark_add').value,
                    'house_number':document.getElementById('H_number_add').value,
                    'province':document.getElementById('Province_add').value,
                    'city':document.getElementById('Town_add').value,
                    'barangay':document.getElementById('Barangay_add').value,
           }
           this.shippingAdd.push(dataX);
           let textX="Shipping Address ";
          let selectX={
            text:textX.concat(this.shippingAdd.length),value:this.shippingAdd.length-1
          }
          this.options.push(selectX);
    },
    delete_shippingAdd(){
          let n=document.getElementById('select_address').value;
          this.shippingAdd.splice(n,1);
          this.options.pop();
         
    }

}
}
</script>
