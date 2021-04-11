<template>
<Nav/>
<div  class="  bg-white hidden w-full h-10 mt-24 mb-3
xl:flex justify-center
lg:flex
2xl:flex
">
<div class=" w-6/12 self-center pl-5">
<p class=" w-full text-xl font-nunito font-bold">ACCOUNT SETTINGS</p>
</div>
</div>
<div class="  flex justify-center self-center font-nunito mb-11 mt-28 
            2xl:mt-4
            xl:mt-4
            lg:mt-4  w-full
            ">
<div class="  w-full px-3 flex flex-col justify-center self-center gap-y-5 space-y-4
              2xl:w-6/12 
              lg:w-6/12
              xl:w-6/12
              md:w-8/12
              sm:w-10/12
            ">
        <Personal class="inherited"/>
        <Address/>
        <InfoAccount/>
         <div class="ring-1 ring-gray-300 bg-white p-5 rounded-2xl shadow-sm" >
        <div class=" flex justify-between">
            <div class="flex gap-4">
            <p class="font-bold font-nunito text-sm">Verification Status</p>
            </div>
          </div>
        <div class="text-sm gap-x-10 space-y-8 pt-8 ">
        <span class="  font-raleways font-bold grid grid-cols-1 "> 
        <p :class="{ red: unverified }">{{ verification_status.msg }}</p>
        </span>
        </div>
    </div>
</div>
</div>
</template>
<style>
body.account {
  background: white;
}
body.home {
  background-color: white;
}
.red {
  color: red;
}
</style>

<script>
import Nav from "../views/Navbar.vue";
import Personal from "../views/personal_info.vue";
import Address from "../views/address_info.vue";
import InfoAccount from "../views/account_info.vue";
import api from "../api";
export default {
  name: "Account",
  components: {
    Nav,
    Personal,
    Address,
    InfoAccount,
  },
  created: function () {
    document.body.style.backgroundColor = "white";
  },

  data() {
    return {
      verification_status: {
        msg: "",
      },
      unverified: true,
    };
  },
  methods: {
    submit: function () {},
    Edit: function (pars) {
      let x = document.getElementById(pars).innerHTML;
      if (x == "Edit") {
        document.getElementById(pars).innerHTML = "Save";
      } else {
        document.getElementById(pars).innerHTML = "Edit";
        this.submit();
      }
    },
  },
  mounted() {
    //get the user information from the laravel API
    api
      .get('/api/getValidID')
      .then((res) => {
        console.log('asd',res.data);
        if(res.data.verifyStatus != null){
          if (!res.data.verifyStatus.localeCompare("unverified")) {
            this.verification_status.msg = "Your account is not fully verified.";
            this.unverified = true;
          } else {
            this.verification_status.msg = "Your account is fully verified.";
            this.unverified = false;
          }   
        }else{
          this.verification_status.msg = "Your account is not fully verified.";
          this.unverified = true;
        }
        
        //this.user = res.data;
      })
      .catch((error) => {
        console.log(error)
      });
  },
};
</script>
<style>
body.account{
    background:white;
}
body.home{
    background-color:white;
}
.red {
  color: red;
}
</style>
}

