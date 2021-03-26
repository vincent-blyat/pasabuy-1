<template>
 <Nav/>
<div class="flex flex-col justify-center  font-nunito  vs:p-10 gap-y-4">
<div class="w-5/12  vs:w-full flex flex-col justify-center self-center mt-24 gap-y-5">
      <p class="text-2xl  font-nunito font-bold flex">Deliveries</p>
</div>
      <div class=" flex flex-col justify-center self-center w-5/12 vs:w-full bg-white ring-1 ring-gray-300 p-5 rounded-2xl" >
        <div class=" flex justify-between vs:w-full">
            <div class="flex gap-4  ">
            <p class="font-bold font-nunito">Order#{{order_number}}</p>
            <p v-if="selected=='Completed'" class=" tracking-wider text-green-600 bg-gray-200 text-xs rounded-2xl  h-min w-18 self-center p-1 font-nunito font-bold">
            {{selected}}
            </p>
            <p v-else-if="selected=='Confirmed'" class=" tracking-wider text-gray-500 bg-gray-200 text-xs rounded-2xl  h-min w-18 self-center p-1 font-nunito font-bold">
            {{selected}}
            </p>
            <p v-else class=" tracking-wider text-red-600 bg-gray-200 text-xs rounded-2xl  h-min w-18 self-center p-1 font-nunito font-bold">
            {{selected}}
            </p>
            </div>
           <div class="vs:flex-col"> 
             <select v-model="selected" id="select_option" class="w-10">
        <option v-for="option in options" :key="option.text" v-bind:value="option.value">
            {{ option.text }}
          </option>
      </select>
      <span class="text-blue-600 font-bold cursor-pointer" @click="update_order()">update</span>
           </div>
            
            </div>
          
        <div class="flex gap-8 my-3 ">
            <p>Customer:</p>
           <a href="#"> <p class=" -nunito">Juan dela Cruz</p></a>
        </div>
        <div class="bg-gray-200  py-1 px-3 rounded-2xl">
        <div class="flex text-sm  sm: space-x-2"><p>Shopping List</p><p class=" text-gray-500">{{items.length}}</p>
        <p v-if="items.length>1" class="text-gray-500">items</p>
        <p v-else class="text-gray-500">item</p>
        </div>
        <ul id="example-1" class="list-disc text-sm list-inside grid grid-cols-2 p-5">
       <li v-for="item in items" :key="item.list">
        {{ item.list }}
       </li>
        </ul>
        </div>
        <div class=" grid grid-cols-2 p-5 gap-y-4 text-sm">
          <div class="flex gap-2"><span class="material-icons text-red-600 ">
          room
          </span><p>Location</p></div>
          <div class="flex gap-2"><span class="material-icons text-red-600">
          watch_later
          </span><p>Date</p></div>
          <div class="flex gap-2"><span class="material-icons text-red-600">
          shopping_cart
          </span><p>Grocery Store</p></div>
          <div class="flex gap-2"><span class="material-icons text-red-600">
         payments
          </span><p>Payments</p></div>
        </div>  
      </div>
    </div>

</template>
<script>
import Nav from '../views/Navbar.vue'
export default {
  name: 'Deliver',
  components: {
    Nav
  },
  data(){
    return{
       items: [
      { list: 'Pork' },
       { list: 'Pork' },
    ],
    hide_selected:false,
    order_number:'1234',
    selected: 'Confirmed',
    options: [
      { text: 'Completed', value: 'Completed' },
      { text: 'Cancelled', value: 'Cancalled' },
    ]
    

}
},
methods:{
update_order(){
  if(this.selected!="Confirmed"){
alert(this.selected);
  }
  
document.getElementById("select_option").style="hidden";
}
}
}
</script>
