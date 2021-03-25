
<template class="w-full h-full mx-auto bg-local bg-no-repeat bg-cover font-nunito" style="background-image: url('img/main-back.jpg')"> 

    <div id="navbar" class="fixed z-10 flex w-full px-4 py-4 bg-transparent font-nunito justify">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 vs:hidden">
            <div class="flex items-center w-full mt-4 text-right xl:block 2xl:block vs:block lg:block md:block">
                <button class="h-10 px-4 m-1 text-red-700 transition-colors duration-150 border border-red-700 rounded-3xl focus:outline-none hover:bg-red-50 2xl:text-2xl">
                    <router-link :to="{name: 'login'}" >Log in</router-link>
                </button>
                <button  class="h-10 px-4 m-1 text-white transition-colors duration-150 bg-red-700 2xl:text-2xl rounded-3xl focus:outline-none hover:bg-red-800">
                    <router-link :to="{name: 'signup'}" >Sign Up</router-link>
                </button>
            </div>      
    </div>

    <div id="landing" class="w-full h-screen mx-auto bg-local bg-no-repeat bg-cover md:bg-center md:bg-no-repeat vs:bg-center font-nunito" style="background-image: url('img/main-back.jpg')">
        <div class="flex items-center h-full px-10 xl:ml-56 lg:ml-56 md:ml-28 2xl:ml-36 vs:ml-8 ">
            <section class="w-9/12 lg:w-9/12 2xl:w-9/12 md:w-9/12">
                <p class="mb-4 text-5xl font-bold tracking-wide vs:text-4xl xl:w-97 md:w-97 lg:w-97 2xl:w-99 vs:w-90 2xl:text-6xl">
                    Need someone to do your groceries?</p>
                <p class="text-lg leading-loose text-left 2xl:text-xl xl:w-7/12 vs:w-96">
               Let your shopping list be taken care of while staying within the comforts of your home </p>
                <button class="items-center px-4 m-1 mt-3 font-semibold tracking-wide text-white transition-colors duration-150 rounded-full md:mt-6 xl:mb-4 bg-red-buttons h-9 focus:shadow-outline hover:bg-red-800 2xl:text-xl">
                   <router-link :to="{name: 'login'}" >Pasabuy Now</router-link>
                </button>
            </section>
        </div>
 <!--SECOND-->
 <div class="flex flex-wrap justify-center bg-white 2xl:pt-40 xl:pt-40 vs:pt-12 font-nunito md:pt-20">
       <div class="w-1/5 p-2 pt-20 m-4 mt-8 mb-4 mr-2 bg-gray-200 h-50 rounded-xl md:w-10/12 vs:w-10/12 md:pt-10">
            <img class="w-1/2 p-1 mx-auto mb-5 md:p-10" src="img/cart.png"> 
            <h2 class="text-2xl font-bold leading-loose tracking-wide text-center md:leading-loose md:text-3xl">Get Help with Shopping</h2>
            <p class="px-4 mb-4 text-center md:leading-normal md:text-2xl">
                Post a request and let your shopping list be taken care of for you</p>
        </div> 
        <div class="w-1/5 p-2 pt-20 m-4 mt-8 mb-4 mr-2 bg-gray-200 md:pt-10 h-50 rounded-xl md:w-10/12 vs:w-10/12">
            <img class="w-1/2 p-1 mx-auto mb-5 md:p-10" src="img/bike.png"> 
            <h2 class="text-2xl font-bold leading-loose tracking-wide text-center md:leading-loose md:text-3xl">Get Extra Income</h2>
            <p class="px-4 mb-4 text-center md:leading-normal md:text-2xl">
                Earn by accepting shopping requests from people near you</p>
        </div> 
        <div class="w-1/5 p-2 pt-20 m-4 mt-8 mb-4 mr-2 bg-gray-200 md:pt-10 h-50 rounded-xl md:w-10/12 vs:w-10/12">
            <img class="w-1/2 mx-auto mb-5 md:p-10" src="img/package.png">
            <h2 class="text-2xl font-bold leading-loose tracking-wide text-center md:leading-loose md:text-3xl">Explore Pasabuy Now</h2>
            <p class="px-4 mb-4 text-center md:leading-normal md:text-2xl">
                Sign up now and see how pasaBuy works</p>
        </div>
</div>
<div class="flex flex-wrap items-center self-auto justify-center p-6 bg-white font-nunito md:flex">
            <button class="h-8 px-5 font-semibold tracking-wider text-white transition-colors duration-150 bg-red-700 md:w-80 md:h-14 w-72 rounded-3xl focus:shadow-outline hover:bg-red-700 ">
                <a href="#" class="inline-flex align-top md:text-2xl">
                Start Shopping
                </a></button>
        </div> <!--END-->
            
 <!--THIRD-->
        <div class="flex flex-wrap items-center justify-center px-20 pt-40 bg-white vs:pt-16 font-nunito">
            <div class="p-1 md:p-5 vs:justify-center vs:w-full md:justify-center md:w-full w-1/4 bg-white h-96.7 rounded-xl">    
                <h2 class="text-4xl font-bold leading-snug tracking-wide text-left md:text-3xl leading-1">We deliver<br class="vs:hidden md:hidden"> more than just groceries</h2>
                <p class="py-3 mb-6 text-base font-medium leading-loose text-left xl:mr-8 pt-9 2xl:mr-8 2xl:text-xl 2xl:leading-loose">
                    Did your favorite lotion runout? Or your shampoo? Wanting to buy that branded shirt on sale? Need party supplies for a surprise birthday celebration? pasaBuy got you covered. Your other essentials are just at the end of your fingerprints. </p>
                    <button class="h-8 px-5 font-semibold tracking-wider text-white transition-colors duration-150 w-26 bg-red-buttons rounded-3xl focus:shadow-outline hover:bg-red-700">
                        <a href="#">Try Now</a> <!--change to router link-->
                    </button>
            </div>
            <div class="bg-gray-200 xl:w-3/6 2xl:w-5/12 vs:full rounded-xl">
                <img class="float-right object-contain w-full h-full border" src="img/eimage.png">
            </div>

            
        </div>


        <div class="flex flex-wrap-reverse items-center pt-40 pr-20 bg-white 2xl:pb-56 xl:pb-40 vs:pb-20 vs:pt-20 md:pb-20 md:pt-20 font-nunito ">
                <div class="float-left bg-gray-200 xl:w-ew xl:h-eh 2xl:w-111 2xl:h-eh">
                <img class="border w-ew xl:h-eh 2xl:w-111 2xl:h-99" src="img/eimage2.jpg">
            </div>

                <div class="ml-8 vs:ml-20 md:ml-20 p-1 vs:justify-center md:w-full vs:w-full w-1/4 bg-white h-96.7 rounded-xl">  
                <h2 class="text-4xl font-bold leading-snug tracking-wide text-left leading-1">We value your <br class="vs:hidden md:hidden"> health and <br class="vs:hidden"> safety.</h2>
                <p class="py-3 mb-6 text-base font-medium leading-loose text-left xl:mr-8 2xl:mr-8 pt-9">
                    With pasaBuy, you can limit your presence outside reducing your possibility of contracting the virus. Its security features ensure safe and worry-free transactions with other users on the platform.</p>
                    <button class="h-8 px-5 font-semibold tracking-wider text-white transition-colors duration-150 w-26 bg-red-buttons rounded-3xl focus:shadow-outline hover:bg-red-700">
                        <a href="#">Try Now</a> <!--change to router link-->
                    </button>
            </div>
            
            
        </div>
        
<!--FOOTER-->
        <footer class="px-4 pb-8 text-white xl:pt-12 md:pt-12 bg-bastille">
            <div class="container flex flex-col items-center justify-center mx-auto overflow-hidden leading-none xl:px-4">
                <div class="block w-3/4 mt-6 text-base sm:flex lg:mt-0">
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-1 font-medium tracking-wide ">Pasabuy</li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-1 font-medium tracking-wide">Company</li>
                        <li><a href="#" class="inline-block py-1 pl-3 pr-5 no-underline">About Us</a>
                        </li>
                        <li><a href="#" class="inline-block py-1 pl-3 pr-5 no-underline ">FAQs</a></li>
                        <li><a href="#" class="inline-block py-1 pl-3 pr-5 no-underline ">Help</a></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-2 font-medium tracking-wide ">Privacy Policy</li>
                        <li><a href="#" class="inline-block py-1 pl-3 pr-5 text-white no-underline">Privacy</a></li>
                        <li><a href="#" class="inline-block py-1 pl-3 pr-5 no-underline ">Terms</a></li>
                    </ul>
                    <div class="flex flex-col w-full">
                        <div class="inline-block px-3 py-1 font-medium tracking-wide ">©Pasabuy 2021</div>
                        <ul class="flex flex-col w-full p-0 font-thin text-left">
                            <li><a href="#" class="inline-block py-1 pl-3 pr-5 no-underline ">Stay connected with us</a></li>
                        </ul>
                        <div class="flex justify-start pl-4 mt-2">
                            <a class="flex items-center mr-6 text-gray-300 no-underline hover:text-white" href="#">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" /></svg>
                            </a>
                            <a class="flex items-center mr-6 text-gray-300 no-underline hover:text-white" href="#">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" /></svg>
                            </a>
                            <a class="flex items-center no-underline hover:text-white" href="#">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" /></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>    
    </footer>    
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

export default {
  components:{
     
  }

}
</script>


