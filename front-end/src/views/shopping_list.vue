<template>
 <Nav/>
<div class="flex flex-col justify-center  font-nunito  vs:p-3 gap-y-4">
<div class="w-5/12  vs:w-full flex flex-col justify-center self-center mt-24 gap-y-5 vs:hidden">
      <p class="text-2xl  font-nunito font-extrabold flex uppercase ">shopping lists</p>
</div>

 <div class=" flex flex-col vs:mt-20 justify-center self-center w-5/12 vs:w-full bg-white ring-1 ring-gray-300 p-5 rounded-2xl" >
        <div class=" flex justify-between mb-4">
            <div class="flex flex-col gap-4">
            <span class="flex justify-between gap-x-3"> 
            <p class="font-bold font-nunito">Shopping List # {{list_number+1}}</p>
    
            </span>
            </div>
                <div class="vs:flex-col"> 
      <span class="text-blue-600 font-bold cursor-pointer" >Edit</span>
           </div>
         </div>

        <div class="bg-gray-300  py-1 px-3 rounded-2xl"> 
        <ul id="example-1" class="list-disc text-sm list-inside grid grid-cols-2 p-5">
       <li v-for="item in items" :key="item.list" class="font-bold">
        {{ item.list }}
       </li>
        </ul>
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
        list_number:0,
       items: [
        { list: 'Pork' },
        { list: 'flour(1kg)' },
        { list: 'Brown Sugar' },
    ],

}
},
methods:{
update_order(){
  if(this.selected!="Confirmed"){
      alert(this.selected+'?');
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
