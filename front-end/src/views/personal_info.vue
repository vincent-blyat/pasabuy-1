<template>
     <div id ="personal_info" class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm " >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Personal Info</p>
            </div>
           <div> 
               <label for="sub" id="edt1" @click="toggle=!toggle, setOldData()" class="
               text-blue-800 w-min font-bold text-sm cursor-pointer">Edit</label>
           </div>
            
        </div>
        <div id="personal_info" class="text-sm  gap-x-10 pt-8  w-full">
        <form id="myForm" class=" ">
          <div class="flex flex-col items-center gap-y-3 justify-center">
           <div class="w-16 h-16 overflow-hidden rounded-full border-2 border-gray-500"> <img :src="userPersonal.profilePicture" class=" w-full h-full rounded-full ring-2 ring-gray-100" style="object-fit:cover; vertical-align:middle"/></div>
            <label for="profile_image" class="font-extrabold cursor-pointer text-blue-800">Change Profile Photo</label>
          </div>
          <input id="profile_image" type="file" @change="change_profile" class="hidden">
        <div  class="text-sm w-full gap-x-10 pt-8 space-y-8
                      xl:w-97
                      2xl:w-97
                      lg:w-97
                    ">
             <span class="  font-raleways font-bold grid grid-cols-2 "> 
        <p class="text-gray-500">NAME</p>
        <span>
        <p >{{userPersonal.firstName}} {{userPersonal.lastName}}</p>
       </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2 ">
        <p class="text-gray-500">PHONE NUMBER</p>
        <span>
        <p>{{userPersonal.phoneNumber}}</p>
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">WORK</p>
        <span>
        <p>{{personal.work}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">GENDER</p>
        <span>
        <p>{{userPersonal.gender}}</p>
        </span>
        </span>
        <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">BIRTHDAY</p>
        <span>
        <p>{{personal.bday}}</p>
        </span>
        </span>
         <span class=" font-raleways font-bold  grid grid-cols-2"> 
        <p class="text-gray-500">Language</p>
        <span>
        <p>{{userLang.languages}}</p>
        </span>
         </span>
          </div>
       
        </form>
        </div>
       <div v-if="toggle" class="fixed inset-0 h-max bg-white bg-opacity-75"></div>
        <div v-if="toggle" class=" fixed items-center  inset-0 overflow-y-auto ">
        <div class="flex   mt-4 w-full p-3  items-center justify-center
        py-20
        ">
          
          <div class=" bg-white ring-1  ring-gray-300  p-5 w-full rounded-xl
             2xl:w-97 2xl:ml-5
              lg:w-97
              xl:w-97   xl:mr-16
              md:w-8/12
              sm:w-10/12
              shadow-2xl
              h-auto
          ">
          <div class="flex flex-row items-center  justify-between p-3">
            <p class="hidden lg:block 2xl:block xl:block"></p>
            <p class="text-lg font-extrabold xl:ml-9 lg:ml-9 2xl:ml-9">Update Personal Info</p>
            <p class="font-bold text-blue-700 cursor-pointer left-10" @click="toggle=false, getOldData()"> Close</p>
          </div>
          <p class="text-center text-red-500">{{errors}}</p>
           <div class=" ">
            <div class="flex flex-col px-4  space-y-4
            ">
                <div class="flex flex-col"><span class="ml-2">Firstname</span> <input id="f_name"   type="text" v-model="userPersonal.firstName" class="focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                 </div>
                <div class="flex flex-col"><span class="ml-2">Middlename</span> <input id="m_name" type="text" v-model="personal.midname" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                </div>
                <div class="flex flex-col"><span class="ml-2">Lastname</span> <input id="l_name" type="text" v-model="userPersonal.lastName" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                </div>
                <div class="flex flex-col"><span class="ml-2">Phone number </span> <input id="p_number" type="number" v-model="userPersonal.phoneNumber" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                </div>
                <div class="flex flex-col"><span class="ml-2">Work </span> <input id="work" type="text" v-model="personal.work" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/>
                </div>
                <span class="ml-2">Gender</span>
                <div class=" space-x-4 ml-4">
                  <span class="space-x-2">
                  <span><input type="radio" value="Male" id="male" v-model="userPersonal.gender" name="gender" /></span>
                  <label for="male">Male</label>
                  </span>
                  <span class="space-x-2">
                  <span><input type="radio" value="Female" id="female" v-model="userPersonal.gender" name="gender" /></span>
                  <label for="female">Female</label>
                  </span>
              </div>
                 <div class="flex flex-col "><span class="ml-2">Birthday</span>  <input  type="date" id="b_date"  v-model="userPersonal.birthDate"   class="focus:outline-none rounded-xl w-full h-10 pl-2 bg-transparent bg-gray-200" 
                  ></div> 
                <div class="flex flex-col"><span class="ml-2">Language: </span> <input type="text" id="language" v-model="userLang.languages" class=" focus:outline-none rounded-xl h-10 pl-2 bg-transparent bg-gray-200"/></div>
             
            </div>
           <div class="flex justify-between mt-10 space-x-4 items-center">
              <button @click="toggle=false, getOldData()" class="px-3 h-6 w-full bg-white ring-2 ring-black focus:outline-none   rounded-2xl">Cancel</button>
              <button @click="save_data()" class="px-5 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl">Save</button>
            </div>
          </div>
          </div>
        </div>
    </div>

    </div>
  
</template>
<script>
import api from '../api'
import Profile from './ProfileEdit.vue'
import VueSimpleAlert from 'vue-simple-alert'
import moment from "moment"
import store from '../store/index'
export default {
  name: "personal",
  component: {
    Profile,
  },
data(){
    return{
      toggle:false,
      avatar:null,
    disabled: 0,
    hidden:false,
    show:true,
    show2:true,
    edit2:false,
    message:'yeah',
    personal:  {
      firstname:'',
      lastname:'',
      phone_number:'',
      work:'',
      gender:'',
      language:'',
      birdate: '',
      bday:'',
      profilePic:null
    },
    old:  {
      firstname:'',
      lastname:'',
      phone_number:'',
      work:'',
      gender:'',
      language:'',
      birdate: ''
    },
    errors:null
    }
  
},

methods:{

    save_data () {
       
      var personal=  {
        firstname:this.userPersonal.firstName,
        lastname:this.userPersonal.lastName,
        phone_number:this.userPersonal.phoneNumber,
        gender:this.userPersonal.gender,
        language:this.userLang.languages,
        birdate: this.userPersonal.birthDate,
      };
      api.post('/api/editPersonal', personal).then((res)=>{
          this.dispatchThis().then(()=>{
            this.setBday()
            VueSimpleAlert.alert(res.data.message,"Success","success")
            this.toggle=false
          })
      //this.user = res.data;
      }).catch((errors)=>{
        console.log(errors.response.data)
        if(errors.response.data.firstname == undefined)
           errors.response.data.firstname =' '
        if(errors.response.data.lastname == undefined)
           errors.response.data.lastname =' '
        if(errors.response.data.phone_number == undefined)
           errors.response.data.phone_number =' '
        this.errors = errors.response.data.firstname +' '+ errors.response.data.lastname +' '+errors.response.data.phone_number
        
      })
    },
      handleInput(value) {
      this.name = value;
      alert(this.name)
    },
    setOldData(){
        this.errors = ''
        this.old.firstname=this.userPersonal.firstName
        this.old.lastname=this.userPersonal.lastName
        this.old.phone_number=this.userPersonal.phoneNumber
        this.old.work=this.personal.work
        this.old.gender=this.userPersonal.gender
        this.old.language=this.userLang.languages
        this.old.birdate=this.userPersonal.birthDate
    },
    getOldData(){
        this.userPersonal.firstName=this.old.firstname
        this.userPersonal.lastName=this.old.lastname
        this.userPersonal.phoneNumber=this.old.phone_number
        this.personal.work=this.old.work
        this.userPersonal.gender=this.old.gender
        this.userLang.languages=this.old.language
        this.userPersonal.birthDate=this.old.birdate
    },
    change_profile(e){
      const file=e.target.files[0]
      this.profile=URL.createObjectURL(file);
      const data = new FormData();
      data.append('photo', file);
      api.post('/api/updateProfilePic',data).then((res)=>{
        this.dispatchThis().then(()=>{
          VueSimpleAlert.alert(res.data.message,"Success","success")
        })
      }).catch((errors)=>{
        VueSimpleAlert.alert("Something went wrong.","Error","error")
        console.log(errors.response)
      })
    },
    async dispatchThis(){
      await store.dispatch('getPersonal')
    },
    setBday(){
    //get the user information from the laravel API
        if(this.userPersonal.birthDate==null){
          this.personal.bday = "";

        }else{
          this.personal.bday = moment( this.userPersonal.birthDate).format("MMMM DD, YYYY");
        }
    }
},
mounted(){
    this.setBday()
  },
computed:{
    userPersonal(){
      return store.getters.getPersonal
    },
    userLang(){
      return store.getters.getUserLang
    },
  },
};
</script>
