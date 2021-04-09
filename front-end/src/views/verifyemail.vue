<template class=" font-nunito">

    <div class="flex items-center ">
      <router-link to="/">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 block">
      </router-link>
        <h1 class="absolute text-xl font-black tracking-widest  left-16 font-raleway
          text-red-buttons block
          
           ">pasaBUY</h1>
      </div>

    <div id="verifyemail" class="flex items-center justify-center w-full px-4   ">
      <div class="w-full my-12 overflow-hidden text-center bg-white shadow-md rounded-xl
       xl:w-2/5 lg:w-2/5 2xl:w-2/5 
      md:w-97 sm:w-97
      ">
        <div class="px-10 py-16 ">
          <h1 class="space-x-1 space-y-1 text-2xl font-bold pb-7">Verify your email</h1>
            <p class="pb-10 text-base font-bold text-gray-700 ">
                For your security, Pasabuy wants to make sure  it's really you. Kindly check the inbox of your email. We sent a 6-digit verification code
            </p>

            <div action="#" class="space-y-3">
              <div class="">
                    <input name="" type="text" required class="relative block w-full px-3 py-2 mb-6 text-base font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10" placeholder="Code" v-model="textCode" />
              </div>
              <div class="flex mb-2 -mx-1 ">
                    <div class="w-1/2 px-1 mt-6 text-lg font-bold text-left text-grey-dark text-blue">
                        <router-link to="/sign-up" >Back</router-link>
                    </div>
                    <div class="flex justify-end w-1/2 px-1 mt-3">
                        <button class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                            <router-link to="/address-book" >NEXT</router-link>
                        </button>
                    </div>
                </div>
                <div class="flex justify-end w-1/2 px-1 mt-3">
                  <button @click="nextPage" class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                    NEXT </button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</template>

<style scoped>
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
#iCheck{
  font-size:16px;
  color:rgb(22, 22, 141);
}
#iMessage{
  font-size:24px;
  color:rgb(22, 22, 141);
}
</style>

<script>

export default {
    data(){
        return{
           code: localStorage.getItem("code"),
           textCode: null
        }
    }, 
    methods:{
        nextPage(){
            console.log(this.code)
            if(this.textCode == this.code){
              console.log("code matched")
              localStorage.removeItem("code")
              this.$router.push({name:"address"});
            }
            else{
                console.log("error, code doesnt match")
            }
        }
    },
    created: function () {
    document.body.style.backgroundColor = "rgb(235,235,235)";
  },
}
</script>
