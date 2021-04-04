<template>
 <Nav/>
<div class="flex flex-col justify-center  font-nunito  p-3 gap-y-4">
<div class="w-5/12  vs:w-full  flex-col justify-center self-center mt-24 gap-y-5 hidden 2xl:block">
      <p class="text-2xl  font-nunito font-extrabold flex uppercase ">shopping lists</p>
</div>

 <div class=" flex flex-col mt-28 justify-center self-center  w-full bg-white ring-1 ring-gray-300 p-5 rounded-2xl
              2xl:w-6/12 
              lg:w-6/12
              xl:w-6/12
              md:w-10/12
              sm:w-10/12
 " >
        <div class=" flex justify-between mb-4">
            <div class="flex flex-col gap-4">
            <span class="flex justify-between gap-x-3"> 
            <p class="font-bold font-nunito">Shopping List # {{list_number+1}}</p>
    
            </span>
            </div>
                <div class="vs:flex-col"> 
                    <editShopListModal v-if="editVisible" @closeModal="editlistener"/>
                <button @click="toggleeditShopList" class="ml-16 text-sm font-bold text-blue-700 focus:outline-none">Edit</button>
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
import editShopListModal from "./editShopListModal"

export default {
  name: 'Deliver',
  components: {
    Nav,
    editShopListModal
    
  },
  data(){
    return{
        editVisible: false,
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

    toggleeditShopList(){
      this.editVisible = !this.editVisible 
    },
    editlistener(){
      this.editVisible = false;
    },
}
}
</script>
