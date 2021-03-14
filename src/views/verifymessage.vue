<template class="font-nunito">
    <!--Desktop Version-->
  <div class="desktopVersion">
    <div id="verifymsg" class="login items-center justify-center bg-gray-100 md:min-h-screen sm:max-h-screen sm:flex md:flex">
      <div class="w-4/12 my-12 overflow-hidden text-center bg-white shadow-md flex-grow-1 md:w-4/12 rounded-xl">
            <div class="px-10 py-16">
            <img class= "sm:mx-auto md:mx-auto lg:mx-auto xl:mx-auto 2xl:mx-auto w-1/4 mb-5" src="img/id-review.svg">
            <h2 class="text-2xl font-bold mb-5 md:flex items-center justify-center font-raleways ">
                We're still reviewing your ID</h2>
            <p class=" text-left sm:text-center md:text-right lg:text-justify xl:text-center">
                This will get wrapped up as soon as possible. We'll be in touch if there's anything we need.</p>
            <p class="mb-4 text-left sm:text-center md:text-right lg:text-justify xl:text-center">
                In the meantime, you can continue setting up your profile</p>
            <div class="md:flex justify-end">
                <button class=" h-10 px-5 m-2 text-white transition-colors duration-150 bg-red-700 rounded-3xl 
                                focus:shadow-outline hover:bg-red-800 ">
                    <router-link :to="{name: 'ProfileEdit'}" >NEXT</router-link></button>
            </div>
        </div>    
    </div>
</div>
</div>

<!--Mobile Version-->
   <div id="verifymsg" class="login items-center justify-center bg-gray-100 max-h-screen flex ">
      <div class="text-center bg-white">
            <div class="px-10 py-16">
            <img class= "mx-auto w-1/4 mb-5" src="img/id-review.svg">
            <h2 class="text-2xl font-bold mb-5 items-center justify-center font-raleways ">
                We're still reviewing your ID</h2>
            <p class="text-center">
                This will get wrapped up as soon as possible. We'll be in touch if there's anything we need.
                In the meantime, you can continue setting up your profile</p>
            <div class="flex justify-end">
                <button class=" h-10 px-5 m-2 text-white transition-colors duration-150 bg-red-700 rounded-3xl 
                                focus:shadow-outline hover:bg-red-800 ">
                    <router-link :to="{name: 'ProfileEdit'}" >NEXT</router-link></button>
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
    /*minimized desktop version and mobile version
    screen sizes lesser than 600px*/
   
    .desktopVersion{
      display:none;
      }
    .mobileVersion{
      display:inline;
    }
     
    /*for screen sizes 600px++*/
    @media only screen and (min-width: 700px) {
      .desktopVersion{
        display:inline;}
      .mobileVersion{
       display:none;
    }
    }


#iCheck{
  font-size:16px;
  color:rgb(22, 22, 141);
}
#iMessage{
  font-size:24px;
  color:rgb(22, 22, 141);
}
img{ 
  max-width: 100px;
  width:11%;
 
}
</style>


<script>


</script>

