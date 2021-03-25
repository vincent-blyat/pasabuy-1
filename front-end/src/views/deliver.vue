<template>
 <Navbar/>
<div class="flex flex-col justify-center self-center font-nunito ">
<div class="w-5/12 sm:w-96 flex flex-col justify-center self-center mt-24 gap-y-5">
      <p class="text-2xl  font-nunito font-bold flex">Deliveries</p>
</div>
      <div class=" sm:w-96 flex flex-col justify-center self-center w-5/12 bg-white ring-1 ring-gray-300 p-5 rounded-2xl" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito">Order#{{order_number}}</p>
            <p class=" tracking-wider text-gray-400 bg-gray-200 text-xs rounded-2xl  h-min w-18 self-center p-1 font-nunito font-bold">Confirmed</p>
            </div>
           <div> <p class=" hover:text-gray-500 cursor-pointer tracking-wider text-blue-800  text-xs rounded-2xl  h-min w-18 self-center p-1 font-nunito font-bold">Update</p></div>
        </div>
        <div class="flex gap-8 my-3 ">
            <p>Customer:</p>
           <a href="#"> <p class=" -nunito">Juan dela Cruz</p></a>
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
import Navbar from './Navbar.vue'
export default {
  name: 'deliver',
  components: {
    Navbar
  },
  data(){
    return{
       items: [
      { list: 'Pork' },
      { list: 'Apple' },
    ],
    order_number:'1234',
    }
}
}
</script>
<style>
body{
  background-color:#dfdfdf ;
}
</style>