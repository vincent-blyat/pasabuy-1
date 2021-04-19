<template>
    
         <!--User Profile-->
         <div class="inline-flex space-x-2 items-center justify-start p-4 ssm:mt-0 vs:mt-1">
           <img class="w-14 h-full vs:w-12 ssm:w-10 border rounded-full border-gray-200" src="img/yami.jpg"/>
           <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">Yami Sukehiro</p>
         </div>
         <!--end-->

        <!--Delivery information list-->
         <div class="flex flex-col mt-1 vs:mt-1 ssm:px-2 vs:px-2 sm:px-2 justify-center items-center">
             <div class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center">
                <div class="flex space-x-2 sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              delivery_dining  
              </span>
              <div class="sm:w-full">
                    <button @click="dropdown1=!dropdown1" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">{{deliveryAddress}}</button>
                    <div class="relative">
            <div v-if="dropdown1" class="absolute p-2 bg-white rounded-lg shadow-xl right-0 h-40 sm:w-full w-52">
            <div id="scroll1" class="flex-auto overflow-y-scroll  h-28">
              <div class="flex flex-col items-start space-y-1.5">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Home Address</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address1}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 1</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address2}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 2</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address3}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 3</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address4}}</p>
                 </div>
             </div>
             <hr>
            </div>
            </div> 
             <div @click="addAddress=!addAddress" class="flex text-base items-center focus:outline-none p-2 space-x-1" style="cursor: pointer;">
              <span class="text-red-700 material-icons">
                add_circle
              </span>
              <div class="flex-1 w-full" >
              <p class="text-sm font-bold tracking-wide leading-none text-red-700 ">Add New Shipping Address </p>
             </div>
             </div>
            <div @click.self="openAddModal" v-if="addAddress" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
             <div class="inline-flex flex-col bg-white p-4 space-y-4 shadow rounded-xl h-auto w-80 " >
                 <div class="flex flex-row w-full items-center space-x-2 ">
                    <label class="block text-sm font-bold tracking-wide leading-none text-gray-900">Title</label>
                    <input class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker" id="addressTitle" type="text" placeholder="Your shipping address title">
                 </div>
                 <div class="flex flex-row w-full items-center space-x-2 ">
                    <label class="block text-sm font-bold tracking-wide leading-none text-gray-900">Address</label>
                    <input class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker" id="addressTitle" type="text" placeholder="Your shipping address">
                 </div>     
                 <div class="justify-center flex">
                 <button class="inline-flex items-center justify-center focus:outline-none px-4 vs:py-2 bg-red-700 rounded-full w-full h-6">
                 <p class="text-base font-bold leading-normal text-center text-white">Add</p>
                 </button>
                 </div>
             </div>
            </div>
              </div>
              </div>
              </div>
                </div>
                 
                <div class="flex space-x-2 sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              shopping_cart  
              </span>
              <div class="sm:w-full">
                <button @click="dropdown4=!dropdown4" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 px-4 items-center py-2.5 bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">Shopping Place</button>
                 <div class="relative">
            <div v-if="dropdown4" class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full w-52">
            <div class="flex flex-col w-full px-2 justify-start items-start">
             <input type="text" id="myInput" v-on:keyup="myFunction()" placeholder="Search for place" title="Shopping Place">
            <div id="scroll1" class="flex px-2 flex-col overflow-y-scroll w-full h-24">
            <ul id="myUL" class="space-y-1">
            <li><a href="#">Ayala</a></li>
            <li><a href="#">Disney Land</a></li>
            <li><a href="#">Dotcom Infinity</a></li>
            <li><a href="#">Hepa</a></li>
            <li><a href="#">LCC Malls</a></li>
            <li><a href="#">Sampaguita</a></li>
            <li><a href="#">BUCS Building 4</a></li>
            </ul>
            </div>
            </div>
            </div>
              </div>
              </div>
             </div>
             </div>

             <div class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 ssm:pt-2 pt-3 space-x-4 w-full justify-center">
                <div class="flex space-x-2 sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              alarm  
              </span>
                    <input class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Schedule">
                </div>
                 
                <div class="flex space-x-2 sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              directions_car 
              </span>
              <div class="sm:w-full">
                <button @click="dropdown3=!dropdown3" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">Transport Mode</button>
              <div class="relative">
            <div v-if="dropdown3" class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full w-52">
            <div class="flex flex-col w-full px-2 justify-start items-start">
             <input type="text" id="myInput" v-on:keyup="myFunction()" placeholder="Mode of transport.." title="Transport Mode">
            <div id="scroll1" class="flex px-2 flex-col overflow-y-scroll w-full h-24">
            <ul id="myUL" class="space-y-1">
            <li><a href="#">Spaceship</a></li>
            <li><a href="#">Cart Titan</a></li>
            <li><a href="#">Magic Broom</a></li>
            <li><a href="#">Flying Nimbus</a></li>
            <li><a href="#">Train to Busan</a></li>
            <li><a href="#">Jeep</a></li>
            <li><a href="#">Rocketman</a></li>
            </ul>
            </div>
            </div>
              </div>
              </div>
              </div>
                 </div>
             </div>

             <div class="flex flex-row ssm:flex-col ssm:space-x-0 ssm:space-y-2 ssm:pt-2 pt-3 space-x-4 w-full justify-center">
                <div class="flex space-x-2 sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              shopping_bag  
              </span>
                    <input class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500" placeholder="Capacity">
                </div>
                 
                <div class="flex space-x-2 sm:w-full">
                    <span class=" mt-1.5 rounded-full material-icons text-red-600">
              payments
              </span>
              <div class="sm:w-full">
                    <button @click="dropdown2=!dropdown2" class="focus:outline-none flex sm:w-full ssm:w-full ssm:h-auto ssm:text-xs vs:w-full w-52 h-11 py-2.5 px-4 items-center bg-gray-100 rounded-xl text-sm vs:text-xs lvs:text-sm leading-none text-gray-500">Payment Method</button>
            <div class="relative">
            <div v-if="dropdown2" class="absolute py-3 bg-white rounded-lg shadow-xl right-0 h-35.1 sm:w-full w-52">
            <div class="flex flex-col w-full space-y-3 px-2 justify-start items-start">
             <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">Cash on Delivery</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">GCash</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">PayMaya</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">Online Banking</p>
            </button>
            </div>
              </div>
              </div>
                 </div>
                 </div>
             </div>
            </div>
            <!--end-->

            <!--Comment section-->
           <div class="justify-center flex mt-3 px-2">
            <textarea id="postMessage" name="postMessage" rows="3" class="p-4 bg-gray-100 shadow-sm text-sm ssm:text-xs vs:text-xs lvs:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 vs:w-full" placeholder = "Enter your post message here..."></textarea>
           </div>
           <!--end-->

           <!--Post button-->
           <div class="justify-center flex mt-3 pb-3 px-2">
            <button class="inline-flex items-center justify-center focus:outline-none px-4 vs:py-2 bg-red-700 rounded-full w-31.75 ssm:w-full vs:w-full h-10">
                <p class="text-base ssm:text-sm vs:text-sm sm:text-sm font-bold leading-normal text-center text-white">Post</p>
            </button>
           </div>
           <!--end-->
</template>

<script>
export default {
    data (){
        return{
            isOpen:false,
            addAddress: false,
            dropdown1: false,
            dropdown2: false,
            dropdown3: false,
            dropdown4: false,
            deliveryAddress: "Delivery Address",
            address1: "Banquerohan,Legazpi City",
            address2: "Buraguis Legazpi City",
            address3: "United State of Bicol",
            address4: "Maski Sain City"
        }
    },
    methods:{

        openAddModal(){
            this.addAddress = !this.addAddress
        },
        
        getAddressValue(){
          this.deliveryAddress = this.address1 
        },

        myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } 
            else {
                li[i].style.display = "none";
            }
          }
        },
},
}
</script>

<style scoped>
#scroll1::-webkit-scrollbar-track
{
	
	border-radius: none;
	
}
#scroll1::-webkit-scrollbar
{
	width: 6px;
	
}
#scroll1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-color: grey;
}
#button1{
    padding:0;
    margin:0;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  margin-top: -1px; /* Prevent double borders */
  text-decoration: none;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}

#myInput {
  background-image: url('/img/search.svg');
  background-position: 8px 4px;
  background-repeat: no-repeat;
  background-size: 24px;
  width: 100%;
  padding: 4px 0px 4px 35px;
  border: 1px solid #ddd;
  margin-bottom: 6px;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
 --tw-text-opacity: 1;
color: rgba(107, 114, 128, var(--tw-text-opacity));
}
</style>