<template class="font-nunito">
    <div id="verifymsg" class="login items-center justify-center bg-gray-100 md:min-h-screen sm:max-h-screen sm:flex md:flex">
      <div class="w-4/12 my-12 overflow-hidden text-center bg-white shadow-md flex-grow-1 md:w-4/12 rounded-xl">
            <div class="px-10 py-16">
            <img class= "sm:mx-auto md:mx-auto lg:mx-auto xl:mx-auto 2xl:mx-auto h-50 w-50 mb-5" src="img/id-review.svg">
            <h2 class="text-2xl font-bold mb-5 md:flex items-center justify-center font-raleways ">
                We're still reviewing your ID</h2>
            <p class=" text-left sm:text-center md:text-right lg:text-justify xl:text-center">
                This will get wrapped up as soon as possible. We'll be in touch if there's anything we need.</p>
            <p class="mb-4 text-left sm:text-center md:text-right lg:text-justify xl:text-center">
                In the meantime, you can continue setting up your profile</p>
            <div class="md:flex justify-end">
                <button class=" h-10 px-5 m-2 text-white transition-colors duration-150 bg-red-700 rounded-3xl focus:shadow-outline hover:bg-red-800 ">
                    <router-link :to="{name: 'ProfileEdit'}" >NEXT</router-link></button>
            </div>
        </div>    
    </div>
</div>
</template>
<script>


</script>

