<template class="font-nunito">
   
    <div class="absolute vs:left-5 left-12 top-3">
        <img src="/img/pasaBUYLogoOnly.png" class="w-16 h-16 "/>
          <label for="" class="absolute text-xl font-black tracking-widest top-4 left-16 font-raleway text-red-buttons">
            pasaBUY
          </label>
    </div>

    <div id="login" class="flex items-center justify-center pt-20 pb-20 bg-gray-bgcolor vs:pt-16">
        <div class="w-2/5 my-12 overflow-hidden text-center bg-white shadow-md vs:w-10/12 flex-grow-1 rounded-xl">
            <div class="px-10 py-16">
                <img class= "w-1/4 mx-auto mb-5 2xl:mx-auto" src="img/id-review.svg">
                <h2 class="items-center justify-center mb-5 text-2xl font-bold md:flex font-raleways ">
                We're still reviewing your ID</h2>
                <p class="text-left vs:text-center lg:text-justify xl:text-center">
                This will get wrapped up as soon as possible. We'll be in touch if there's anything we need.</p>
                <p class="pt-2 mb-4 text-center">
                In the meantime, you can continue setting up your profile</p>
                <div class="justify-end md:flex">
                    <button class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                     <router-link :to="{name: 'ProfileEdit'}" >NEXT</router-link>
                    </button>
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


</script>

