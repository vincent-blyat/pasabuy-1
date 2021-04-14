<template class="bg-gray-00 font-nunito">

  <div class="flex items-center ">
      <router-link to="/">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 block">
      </router-link>
        <h1 class="absolute text-xl font-black tracking-widest  left-16 font-raleway
          text-red-buttons block
          
           ">pasaBUY</h1>
      </div>

    <div id="uploadedid" class="flex items-center w-full justify-center  px-4 pb-10 ">
        <div class="w-full my-12 overflow-hidden text-center bg-white shadow-md flex-grow-1 rounded-xl
         xl:w-2/5 lg:w-2/5 2xl:w-2/5 
      md:w-97 sm:w-97
        ">
            <div class="px-10 py-16">
                <h1 class="mb-3 space-x-1 space-y-1 text-2xl font-bold">Upload a valid ID</h1>
                <p class="mb-4 text-left sm:text-center lg:text-justify xl:text-center">
                    A government ID helps us check you're really you. It also helps us keep Pasabuy secure, fight fraud, and more. </p>
                <div class="flex flex-col justify-between space-y-4
                sm:flex-row sm:space-y-0  sm:space-x-8
                md:flex-row md:space-y-0  md:space-x-8
                lg:flex-row lg:space-y-0  lg:space-x-8
                xl:flex-row xl:space-y-0  xl:space-x-8
                2xl:flex-row 2xl:space-y-0  2xl:space-x-8
                ">
                    <!--front id--->
                    <div class=" text-left text-gray-500 
                    md:w-1/2
                    lg:w-1/2
                    xl:w-1/2
                    2xl:w-1/2
                    sm:w-1/2">
                        <span>Front of your ID</span>
                        <div class="ring-2 rounded-xl  ring-gray-500 px-3 flex flex-col justify-center pt-4 pb-2 h-44">
                        <div class="flex  flex-col justify-center overflow-hidden items-center  h-32">
                        <img :src="front_image" class="w-full " />
                       <img id="front_img" :src="icon_front" class="w-16 cursor-pointer">  
                       <label for="front_id"> <span class="text-black">{{browse1}}</span>   </label> 
                        </div>
                            <div class="w-28 mt-">
                                <p class=" text-sm  w-full overflow-x-auto">{{filename}}</p> 
                            </div>
                         <div class="space-x-3 flex flex-row justify-end self-end">
                            <span class="text-red-700 font-bold cursor-pointer" @click="delete_front">{{delete1}}</span>
                             <label for="front_id"> <span class="font-bold text-black cursor-pointer">{{edit1}}</span></label>
                        </div>
                       
                        </div>
                        <input type="file" id="front_id" @change="filechange" class="hidden"/>
                       
                    </div>
                     <!--Back id-->   
                    <div class=" text-left text-gray-500 
                    md:w-1/2
                    lg:w-1/2
                    xl:w-1/2
                    2xl:w-1/2
                    sm:w-1/2">
                        <span>Back of your ID</span>
                        <div class="ring-2 rounded-xl  ring-gray-500 px-3 flex flex-col justify-center pt-4 pb-2 h-44">
                        <div class="flex  flex-col justify-center overflow-hidden items-center  h-32">
                        <img :src="back_image" class="w-full " />
                       <img id="front_img" :src="icon_back" class="w-16 cursor-pointer">  
                       <label for="back_id"> <span class="text-black">{{browse2}}</span>   </label> 
                        </div>
                            <div class="w-28 mt-">
                                <p class=" text-sm  w-full overflow-x-auto">{{filename2}}</p> 
                            </div>
                         <div class="space-x-3 flex flex-row justify-end self-end">
                            <span class="text-red-700 font-bold cursor-pointer" @click="delete_back">{{delete2}}</span>
                             <label for="back_id"> <span class="font-bold text-black cursor-pointer">{{edit2}}</span></label>
                        </div>
                       
                        </div>
                        <input type="file" id="back_id" @change="filechange_back" class="hidden"/>
                       
                    </div>
                </div>

                  <!--Buttons-->
            <div class="flex justify-between mt-4 items-center">
               <router-link to="/address-book"> <span class="font-bold">Back</span></router-link>
                <div class=" space-x-4">
                  <button class="font-bold" @click="saveUser">Skip for now</button>
                 <button class="h-10 m-2 text-white transition-colors duration-150
                    bg-red-buttons px-7 rounded-3xl focus:outline-none " @click="saveUser">Next</button>
                </div>
            </div>
              
             
        </div>
    </div>
</div>
</template>


<style>
    #journal-scroll::-webkit-scrollbar {
        width: 5px;
        cursor: pointer;
      }
  
    #journal-scroll::-webkit-scrollbar-track {
        background-color: rgba(229, 231, 235, var(--bg-opacity));
        cursor: pointer;
    }
  
    #journal-scroll::-webkit-scrollbar-thumb {
        cursor: pointer;
        background-color: rgba(185, 28, 28)
    
    }
</style>
<script>
import api from '../api'
export default {
 
  created: function () {
    document.body.style.backgroundColor = "rgb(235,235,235)";
  },
data(){
    return{
        browse1:'Browse',
        browse2:'Browse',
        delete1:null,
        delete2:null,
        edit1:null,
        edit2:null,
        front_image:'',
        back_image:'',
        icon_front:'img/id-front.svg',
        icon_back:'img/id-back.svg',
        filename:null,
        filename2:null,
    }
},
methods:{
    filechange(e){
        const file=e.target.files[0]
        this.front_image=URL.createObjectURL(file);
        this.icon_front=null;
        this.browse1=null;
        this.filename=file.name;
        this.delete1="Delete";
        this.edit1="Edit";
    },
    delete_front(){
        this.front_image=null;
        this.filename=null;
        this.icon_front='img/id-front.svg';
        this.browse1='Browse';
        this.delete1=null;
        this.edit1=null;
    },
    //back id
    filechange_back(e){
        const file=e.target.files[0]
        this.back_image=URL.createObjectURL(file);
        this.icon_back=null;
        this.browse2=null;
        this.filename2=file.name;
        this.delete2="Delete";
        this.edit2="Edit";
    },
    delete_back(){
        this.back_image=null;
        this.filename2=null;
        this.icon_back='img/id-back.svg';
        this.browse2='Browse';
        this.delete2=null;
        this.edit2=null;
    },
        saveUser(){
            var dataform = {personal:JSON.parse(localStorage.getItem('personal')), account:JSON.parse(localStorage.getItem('account')), address: JSON.parse(localStorage.getItem('address')) }

            console.log('mail=',dataform.personal.email)
            api.post('/api/register', {email:dataform.personal.email, password:dataform.account.password, firstName:dataform.personal.firstName, lastName:dataform.personal.lastName, phoneNumber:dataform.personal.phoneNumber, houseNumber:dataform.address.houseNumber, province:dataform.address.province,barangay:dataform.address.barangay, cityMunicipality:dataform.address.cityMunicipality}).then((res)=>{
                 console.log(res.data);
                 if(res){
                     localStorage.removeItem('personal')
                     localStorage.removeItem('account')
                     localStorage.removeItem('address')
                     this.$router.push({name:"accountsettings"});
                 }
                 else{
                     console.log('informmation not saved')
                 }
                
             
            })
        }

},

}
</script>
