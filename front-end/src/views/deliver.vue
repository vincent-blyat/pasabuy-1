<template>
 <Nav/>
<div class="flex flex-col justify-center  font-nunito  vs:p-3 gap-y-4">
<div class="w-5/12  vs:w-full flex flex-col justify-center self-center mt-24 gap-y-5 vs:mt-16 vs:hidden">
      <p class="text-2xl  font-nunito font-bold flex uppercase">Deliveries</p>
</div>
<div class="flex flex-row justify-items-center self-center w-5/12 gap-x-5 vs:w-full vs:h-8 vs:my-4 vs:space-x-3 vs:mt-20">
<button @click=" isActive_function('btn1')" :class="{active: activeBtn === 0 }" type="button"           class="text-red-700 px-3 py-1 shadow-md rounded-2xl bg-white vs:w-auto vs:px-1 text-sm"><a>All Orders</a></button>
<button  @click=" isActive_function('btn2')" :class="{active: activeBtn === 'btn2' }"  type="button"    class="text-sm text-green-150 px-3 py-1 shadow-md rounded-2xl bg-white"><a>Complete</a></button>
<button   @click=" isActive_function('btn3')" :class="{active: activeBtn === 'btn3' }"  type="button"   class="text-sm text-blue-700 px-3 py-1 shadow-md rounded-2xl bg-white"><a>Confirmed</a></button>
<button  @click=" isActive_function('btn4')" :class="{active: activeBtn === 'btn4' }"  type="button"    class="text-sm text-yellow-600 px-3 py-1 shadow-md rounded-2xl bg-white"><a>Cancelled</a></button>
</div>
 <div class=" flex flex-col justify-center self-center w-5/12 vs:w-full bg-white ring-1 ring-gray-300 p-5 rounded-2xl" >
        <div class=" flex justify-between">
            <div class="flex flex-col gap-4">
            <span class="flex vs:flex-col gap-x-3"> 
            <p class="font-bold font-nunito">Transaction#{{order_number}}</p>
              <div>
              <p v-if="selected=='Completed'" class="text-center  tracking-wider text-green-150 ring-1 ring-green-150 bg-white text-xs h-min w-18 self-center p-1 font-nunito font-bold">
            {{selected}}
            </p>
            <p v-else-if="selected=='Confirmed'" class=" text-center tracking-wider text-blue-700 ring-1 ring-blue-700 bg-gray-200 text-xs   h-min w-18 self-center p-1 font-nunito font-bold">
            {{selected}}
            </p>
            <p v-else class=" text-center  tracking-wider text-yellow-600 bg-white ring-1 ring-yellow-600 text-xs  h-min w-18 self-center p-1 font-nunito font-bold">
            {{selected}}
            </p>
              </div>
            </span>
            <span class="text-gray-500">Place on {{date}}</span>
            </div>
            <div class="vs:flex-col vs:space-x-2"> 
             <select v-model="selected" id="select_option" class="">
        <option v-for="option in options" :key="option.text" v-bind:value="option.value">
            {{ option.text }}
          </option>
      </select>
      <span class="text-blue-600 font-bold cursor-pointer" @click="update_order()">update</span>
           </div>
         </div>
       <div class="flex items-center vs:justify-between vs:w-full  gap-x-8 my-3 ">
            <p class="uppercase font-semibold text-gray-500">Shopper:</p>
            <div class=" flex gap-x-3 items-center">
           <img class="w-8 h-8 border rounded-full border-gray-700 shadow-md " src="img/yami.jpg"/>
            <span class="flex flex-col">
              <p class="font-bold">{{name}}</p>
              <span class="flex gap-x-1">
              <p class="font-bold text-gray-500 text-sm">{{rate}}</p>
              <p class="material-icons text-sm text-red-700">star</p>
              </span>
            </span>
            </div>
              <button class="  flex items-center gap-x-2  bg-green-150 rounded-2xl p-2">
                <p class="material-icons text-white text-sm">chat</p>
                <p class=" font-bold text-white text-sm"> Chat Shopper</p>
              </button>
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
        <div class=" grid grid-cols-2  p-5 gap-y-4 text-sm">
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
       activeBtn:0,
        name:'Yamete',
      rate:'4.5',
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
},
isActive_function(el){
     if(el=='btn1'){
      this.  activeBtn= 0;
    }
    else {
        this.  activeBtn= el;
        }
    },
}
}
</script>
<style scoped>
.active{
 
  background-color: currentColor;
}
.active a{
  color:white;
}
</style>
