<template class="font-nunito">
     <div class="flex items-center ">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 block">
        <h1 class="absolute text-xl font-black tracking-widest  left-16 font-raleway
          text-red-buttons block
          
           ">pasaBUY</h1>
      </div>
    
    <div id="login" class="flex items-center justify-center w-full px-4  pb-10 ">
        <div class="w-full my-12 overflow-hidden text-center bg-white shadow-md  flex-grow-1 rounded-xl
          xl:w-2/5 lg:w-2/5 2xl:w-2/5 
      md:w-97 sm:w-97
        ">
            <div class="px-10 py-16">
                <img class= "w-1/4 mx-auto mb-5 2xl:mx-auto" src="img/id-review.svg">
                <h2 class="items-center justify-center mb-5 text-2xl font-bold md:flex font-raleways ">
                We're still reviewing your ID</h2>
                <p class="text-left vs:text-center lg:text-justify xl:text-center">
                This will get wrapped up as soon as possible. We'll be in touch if there's anything we need.</p>
                <p class="pt-2 mb-4 text-center">
                In the meantime, you can continue setting up your profile</p>
                <div class="justify-end flex">
                    <button class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                     <router-link to="/edit-profile" >NEXT</router-link>
                    </button>
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
</style>


<script>


</script>

