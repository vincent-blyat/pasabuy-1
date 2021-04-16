<template> 

        <nav class="fixed z-10 flex items-center justify-between w-full py-4 xl:px-4 font-nunito" :class="{change_color: scrollPosition > 100}">
        <div class="absolute items-center ">
        <img src="/img/pasaBUYLogoOnly.png" class="w-20 h-16 "/>
          <label for="" class="absolute text-xl font-black tracking-widest top-4 left-16 font-raleway text-red-buttons vs:hidden ssm:hidden 2xl:text-2xl">
            pasaBUY
          </label>
      </div>
            <div class="flex items-center w-full mt-2 text-right ssm:flex ssm:justify-between sm:block xl:block 2xl:block vs:block lg:block md:block">
                <button class="h-10 px-4 m-1 text-red-700 transition-colors duration-150 border-2 border-red-700 rounded-3xl focus:outline-none hover:bg-red-50 2xl:text-2xl">
                    <router-link to="/log-in" class="font-bold">Log in</router-link>
                </button>
                <button  class="h-10 px-4 m-1 text-white transition-colors duration-150 bg-red-700 2xl:text-2xl rounded-3xl focus:outline-none hover:bg-red-800">
                    <router-link to="/sign-up" >Sign Up</router-link>
                </button>
            </div>
        </nav>      
    

    <div id="landing" class="w-full h-screen bg-no-repeat bg-cover xl:mx-auto ssm:w-full vs:bg-center md:bg-center vs:justify-center sm:bg-cover sm:bg-center ssm:bg-cover ssm:bg-center md:bg-no-repeat font-nunito" style="background-image: url('img/main-back.jpg')">
        <div class="flex items-center h-full xl:px-10 xl:ml-56 lg:ml-56 md:ml-28 2xl:pl-60 2xl:leading-loose">
            <section class="w-full ml-3 xl:w-6/12 md:w-7/12 lg:w-5/12 2xl:w-6/12 ">
                <p class="mb-4 text-3xl font-bold tracking-wide xl:text-5xl 2xl:text-6xl ">
                    Need someone to do your groceries?</p>
                <p class="text-lg leading-loose text-left 2xl:text-2xl">
               Let your shopping list be taken care of while staying within the comforts of your home </p>
                <button class="items-center px-4 m-1 mt-3 font-semibold tracking-wide text-white transition-colors duration-150 rounded-full 2xl:mt-7 lg:h-10 ssm:ml-8 sm:mt-8 vs:mt-7 md:mt-6 xl:mb-4 bg-red-buttons h-9 2xl:ml-0 hover:bg-red-800 2xl:text-xl">
                   <router-link to="/log-in" >Pasabuy Now</router-link>
                </button>
            </section>
        </div>
        <!--SECOND-->
    <div class="flex flex-wrap justify-center bg-white sm:pt-16 lg:pt-40 2xl:pt-56 ssm:pt-16 xl:pt-28 vs:pt-12 font-nunito md:pt-20">
       <div class="w-1/5 p-1 pt-20 m-4 mt-8 mb-4 mr-2 bg-gray-200 vs:pt-10 vs:mx-7 rounded-xl md:w-10/12 vs:w-full vs:justify-center md:pt-10 ssm:w-full sm:w-full sm:mx-7 lg:w-1/4">
            <img class="w-1/2 p-1 mx-auto mb-5 md:p-10" src="img/cart.png"> 
            <h2 class="text-xl font-bold leading-loose tracking-wide text-center md:leading-loose md:text-3xl">Get Help with Shopping</h2>
            <p class="px-4 mb-4 text-center md:leading-normal md:text-2xl">
                Post a request and let your shopping list be taken care of for you</p>
        </div> 
        <div class="w-1/5 p-2 pt-20 m-4 mt-8 mb-4 mr-2 bg-gray-200 lg:w-1/4 vs:pt-10 sm:mx-12 sm:w-full md:pt-10 rounded-xl md:w-10/12 vs:mx-7 vs:w-full">
            <img class="w-1/2 p-1 mx-auto mb-5 md:p-10" src="img/bike.png"> 
            <h2 class="text-xl font-bold leading-loose tracking-wide text-center md:leading-loose md:text-3xl">Get Extra Income</h2>
            <p class="px-4 mb-4 text-center md:leading-normal md:text-2xl">
                Earn by accepting shopping requests from people near you</p>
        </div> 
        <div class="w-1/5 p-2 pt-20 m-4 mt-8 mb-4 mr-2 bg-gray-200 lg:w-1/4 vs:pt-10 sm:mx-12 sm:w-full md:pt-10 rounded-xl md:w-10/12 vs:mx-7 vs:w-full">
            <img class="w-1/2 mx-auto mb-5 md:p-10" src="img/package.png">
            <h2 class="text-xl font-bold leading-loose tracking-wide text-center md:leading-loose md:text-3xl">Explore Pasabuy Now</h2>
            <p class="px-4 pb-5 text-center md:leading-normal md:text-2xl">
                Sign up now and see how pasaBuy works</p>
        </div>
    </div>
    <div class="flex flex-wrap items-center self-auto justify-center p-6 pt-10 bg-white sm:w-full font-nunito md:flex">
            <button class="h-8 px-5 font-semibold tracking-wider text-white transition-colors duration-150 bg-red-700 md:w-80 md:h-14 sm:w-96.5 sm:h-12 2xl:h-11 2xl:w-89 w-72 rounded-3xl focus:shadow-outline hover:bg-red-700 ">
                <a href="#" class="inline-flex align-top md:text-2xl">
                Start Shopping
                </a>
            </button>
        </div> <!--END-->
        
            
        <!--THIRD-->
        <div class="flex flex-wrap items-center justify-center px-20 bg-white 2xl:pt-48 sm:pt-20 sm:px-12 vs:px-12 vs:w-full pt-28 vs:pt-16 font-nunito">
            <div class="p-1 sm:p-0 sm:w-full vs:p-0 md:p-5 sm:px-4 vs:w-full md:justify-center md:w-full w-1/4 bg-white h-96.7 rounded-xl 2xl:pl-5 ">    
                <h2 class="pt-5 text-3xl font-bold leading-snug tracking-wide text-left lg:text-2xl 2xl:pt-0 md:text-3xl leading-1">We deliver<br class="vs:hidden sm:hidden md:hidden"> more than just groceries</h2>
                <p class="py-3 mb-6 font-semibold leading-loose text-left text-md xl:mr-3 pt-9 2xl:mr-8 2xl:text-xl 2xl:leading-loose sm:text-lg md:text-lg lg:text-md lg:leading-loose lg:mr-3 lg:mb-0 lg:pt-6" >
                    Did your favorite lotion runout? Or your shampoo? Wanting to buy that branded shirt on sale? Need party supplies for a surprise birthday celebration? pasaBuy got you covered. Your other essentials are just at the end of your fingerprints. </p>
                    <button class="h-8 px-5 font-semibold tracking-wider text-white transition-colors duration-150 w-26 bg-red-buttons rounded-3xl focus:shadow-outline 2xl:h-10 hover:bg-red-700">
                        <a href="#">Try Now</a> <!--change to router link-->
                    </button>
            </div>
            <div class="bg-gray-200 xl:w-2/4 2xl:w-150 lg:w-99.5 rounded-xl sm:w-full">
                <img class="float-right object-contain w-full h-full border" src="img/eimage.png">
            </div>

            
        </div>


        <div class="flex flex-wrap-reverse items-center pr-20 bg-white sm:px-12 sm:pt-20 vs:px-12 pt-36 2xl:pb-90 2xl:pt-56 xl:pb-40 vs:pb-20 vs:pt-20 md:pb-20 md:pt-20 font-nunito lg:pb-40">
                <div class="float-left bg-gray-200 sm:justify-center sm:mb-28 xl:w-ew xl:h-eh lg:w-110 2xl:w-111 2xl:h-eh">
                <img class="border w-ew xl:h-eh 2xl:w-200 2xl:h-99" src="img/eimage2.jpg">
            </div>

                <div class="ml-6 vs:ml-0 sm:pl-0 sm:w-full vs:p-0 md:ml-20 p-1 vs:justify-center md:w-full vs:w-full w-1/4 bg-white h-96.7 rounded-xl">  
                <h2 class="pt-2 text-3xl font-bold leading-snug tracking-wide text-left 2xl:pt-8 leading-1">We value your <br class="vs:hidden md:hidden sm:hidden 2xl:hidden"> health and <br class="vs:hidden sm:hidden"> safety.</h2>
                <p class="py-3 mb-6 font-semibold leading-loose text-left md:text-lg 2xl:text-xl 2xl:leading-loose pt-11 text-md xl:mr-8 2xl:mr-8">
                    With pasaBuy, you can limit your presence outside reducing your possibility of contracting the virus. Its security features ensure safe and worry-free transactions with other users on the platform.</p>
                    <button class="h-8 px-5 mt-2 font-semibold tracking-wider text-white transition-colors duration-150 w-26 bg-red-buttons 2xl:h-10 rounded-3xl focus:shadow-outline hover:bg-red-700">
                        <a href="#">Try Now</a> <!--change to router link-->
                    </button>
            </div>
            
            
        </div>
        
<!--FOOTER-->
        <footer class="px-4 pb-8 text-white xl:pt-12 md:pt-12 bg-bastille">
            <div class="container flex flex-col items-center justify-center mx-auto overflow-hidden leading-none sm:justify-around md:justify-around vs:flex-auto xl:px-4">
                <div class="block w-3/4 mt-6 text-base md:w-11/12 sm:w-11/12 lg:flex xl:flex 2xl:flex md:flex sm:flex lg:mt-0">
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-1 font-medium tracking-wide ">Pasabuy</li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-1 font-medium tracking-wide sm:px-0">Company</li>
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
                    <div class="flex flex-col w-full sm:w-11/12">
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

<style scoped>
   
 .change_color {
       background-color:white;
       box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px
   }
   .scrollbehavior{
       scroll-behavior: smooth;
   }
</style>

<script>
export default {

  name: "Header",
      data(){
          return{
                scrollPosition: null
          }
      },

    methods: {

        updateScroll() {
        this.scrollPosition = window.scrollY
        }

  },

        mounted() {
            window.addEventListener('scroll', this.updateScroll);
  },

        destroy() {
            window.removeEventListener('scroll', this.updateScroll)
    }
}
</script>