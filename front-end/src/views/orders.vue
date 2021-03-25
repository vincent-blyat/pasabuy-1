<template>
  <Navbar/>
<div class="flex flex-col justify-center self-center font-nunito">
  <div class="w-5/12 flex flex-col justify-center self-center mt-24 gap-y-5 sm:w-96">
      <p class="text-2xl  font-nunito font-bold flex">Orders</p>
</div>
      <div class=" flex flex-col justify-center sm:w-96 self-center w-5/12 bg-white ring-1 ring-gray-300 p-5 rounded-2xl" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito">Order#{{order_number}}</p>
            <p class=" tracking-wider text-gray-400 bg-gray-200 text-xs rounded-2xl  h-min w-18 self-center p-1 font-nunito font-bold">Confirmed</p>
            </div>
           </div>
        <div class="flex gap-8 my-3 ">
            <p>Shopper:</p>
            <a   href="#"><p class="font-bold font-nunito">Juan dela Cruz</p></a>
        </div>
        <div class="bg-gray-200  py-1 px-3 rounded-2xl">
        <div class="flex text-sm  sm: space-x-2"><p>Shopping List</p><p class=" text-gray-500">{{items.length}}</p><p class="text-gray-500">items</p></div>
        <ul id="example-1" class="list-disc text-sm list-inside grid grid-cols-2 p-5">
       <li v-for="item in items" :key="item.list">
        {{ item.list }}
       </li>
        </ul>
        </div>
        <div class="grid-flow-col grid grid-rows-2 relative p-5 gap-y-4 text-sm">
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
import Navbar from '../views/Navbar.vue'
export default {
  name: 'Order',
  components: {
    Navbar
  },
   beforeCreate:function () {
      document.body.className='order';
  },
  data(){
    return{
      location:'',
      date:'',
      store:'',
      payments:'',
      order_number:'12453',
      status:'Confirmed',
      items: [
      { list: 'Milk' },
      { list: 'Pork' },
      { list: 'Brown sugar 2kl' },
      { list: 'Cocoa powder' },
    ],
    }
}
}

</script>
