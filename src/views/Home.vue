
<template class="font-nunito w-full h-full mx-auto bg-local bg-no-repeat bg-cover sm:bg-cover 
                md:bg-fixed md:bg-center" style="background-image: url('img/main-back.jpg')"> 
<!---Web View-->
<div class="desktopVersion">
    <div id="navbar" class="font-nunito px-4 py-4 sm:py-6 flex justify sm:bg-transparent w-full z-10 fixed">
        <img src="#" alt="logo">
            <div class="flex items-center mt-4 sm:mt-2 w-full sm:space-x-4 sm:text-right sm:block">
                <button class="h-10 px-4 m-1 text-red-700 transition-colors duration-150 border border-red-700 
                                rounded-3xl focus:shadow-outline hover:bg-red-50">
                    <router-link :to="{name: 'login'}" >Log in</router-link>
                </button>
                <button  class="h-10 px-4 m-1 text-white transition-colors duration-150 bg-red-700 rounded-3xl
                                focus:shadow-outline hover:bg-red-800">
                    <router-link :to="{name: 'signup'}" >Sign Up</router-link>
                </button>
            </div>      
</div>
<div id="landing" class=" w-full h-screen font-nunito mx-auto bg-local 
                        bg-no-repeat bg-cover sm:bg-cover md:bg-fixed md:bg-center" 
                        style="background-image: url('img/main-back.jpg')">
  <div class="flex items-center h-full px-10 lg:px-32 ml-36 vs:ml-10 ">
            <section class=" md:w-9/12 xl:w-8/12 sm:text-left pl-26 vs:pl-2 vs:text-left vs:w-56">
            <p class="mb-4 text-3xl font-bold w-80 2xl:text-7xl md:text-5xl vs:text-4xl vs:text-1sm sm:text-left 
                        md:text-left lg:text-lelft">
                Need someone to do your grocery?</p>
            <p class="text-2xl text-right vs:mr-3 ssm:mb-5 vs:text-left vs:pb-12 ssm:text-left md:text-left lg:text-left">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <button class="items-center h-16 px-4 m-1 mb-4 font-semibold tracking-wide 
                    text-white uppercase transition-colors duration-150 bg-red-700 md:w-1/3 
                    vs:ml-0 vs:w-56 vs:h-12 rounded-3xl focus:shadow-outline hover:bg-red-800">
                   <router-link :to="{name: 'login'}" >Pasabuy now</router-link>
                </button>
            </section>
        </div>
 <!--SECOND-->
 <div class="flex flex-wrap justify-center bg-white md:pt-40 font-nunito vs:justify-center vs:px-2 md:flex vs:items-center">
        <div class="w-full p-8 m-4 mt-8 mb-4 mr-2 bg-gray-200 h-50 rounded-xl sm:w-1/2 md:w-2/3 lg:w-1/4 xl:w-2/7">
            <img class="mx-auto mb-5 w-1/2" src="img/bike.png"> 
            <h2 class="text-2xl font-bold leading-loose tracking-wide text-center">Order and Chill</h2>
            <p class="mb-4 text-left sm:text-justify md:text-justify lg:text-justify xl:text-center">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
                 Laboriosam porro autem numquam, sit nisi dolorem nemo deserunt.</p>
        </div> 
        <div class="w-full p-8 m-4 mt-8 mb-4 mr-2 bg-gray-200 h-50 rounded-xl sm:w-1/2 md:w-2/3 lg:w-1/4 xl:w-2/7">
            <img class="mx-auto mb-5 w-1/2" src="img/cart.png"> 
            <h2 class="text-2xl font-bold leading-loose tracking-wide text-center">Order and Chill</h2>
            <p class="mb-4 text-left sm:text-justify md:text-justify lg:text-justify xl:text-center">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
                Laboriosam porro autem numquam, sit nisi dolorem nemo deserunt.</p>
        </div> 
        <div class="w-full p-8 m-4 mt-8 mb-4 mr-2 bg-gray-200 h-50 rounded-xl sm:w-1/2 md:w-2/3 lg:w-1/4 xl:w-2/7">
            <img class="mx-auto mb-5 w-1/2" src="img/package.png">
            <h2 class="text-2xl font-bold leading-loose tracking-wide text-center">Order and Chill</h2>
            <p class="mb-4 text-left sm:text-justify md:text-justify lg:text-justify xl:text-center">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
                Laboriosam porro autem numquam, sit nisi dolorem nemo deserunt.</p>
        </div>
</div>
            
 <!--THIRD-->
        <div class="flex flex-wrap items-center justify-center p-6 bg-white md:pt-20 font-nunito md:flex">
            <div class="w-full p-10 m-4 mt-8 mb-4 mr-2 bg-white h-50 rounded-xl sm:w-1/2 md:w-2/3 lg:w-1/4 xl:w-2/7">    
                <h2 class="text-3xl font-bold text-left leading-1">It's all here.<br>All in one app.</h2>
                <p class="mb-4 leading-loose text-left leading">Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
                    Laboriosam porro autem numquam, sit nisi dolorem nemo deserunt.</p>
                    <button class="w-40 h-10 px-5 py-2 font-bold tracking-wider text-white transition-colors duration-150 bg-red-700 
                        rounded-3xl focus:shadow-outline hover:bg-red-700">
                        <a href="#">GORA</a> <!--change to router link-->
                    </button>
            </div>
            <div class="w-full bg-gray-200 h-50 rounded-xl sm:w-1/2 md:w-2/3 lg:w-1/4 xl:w-2/5">
                <img class="float-right object-contain w-full h-full border sm:object-center" src="img/eimage.png">
            </div>
        </div>
        <div class="flex flex-wrap-reverse items-center justify-center pb-32 pr-6 bg-white md:pr-6 sm:pt-20 
                    md:pt-16 font-nunito md:flex">
            <div class="w-full bg-gray-200 h-50 rounded-xl sm:w-1/2 md:w-2/3 lg:w-1/4 xl:w-2/5">
                <img class="float-right object-contain w-full h-full sm:object-center" src="img/eimage2.jpg">
            </div>
            <div class="w-full p-10 m-4 mt-8 mb-4 mr-2 bg-white h-50 rounded-xl sm:w-1/2 md:w-2/3 lg:w-1/4 xl:w-2/7">    
                <h2 class="text-3xl font-bold text-left leading-1">It's all here.<br>All in one app.</h2>
                <p class="mb-4 leading-loose text-left leading">Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
                     Laboriosam porro autem numquam, sit nisi dolorem nemo deserunt.</p>
                     <button class="w-40 h-10 px-5 py-2 font-bold tracking-wider text-white transition-colors 
                                    duration-150 bg-red-700 rounded-3xl focus:shadow-outline hover:bg-red-700">
                        <a href="#">GORA</a> <!--change to router link-->
                    </button>
            </div>
        </div>
<!--FOOTER-->
        <footer class=" bg-black px-4 pt-12 pb-8 text-white md:pt-12 ">
            <div class="container flex flex-col justify-center px-4 mx-auto overflow-hidden md:justify-center md:items-center
                         sm:justify-center sm:items-center lg:flex-row">
                <div class="block w-3/4 mt-6 text-sm sm:flex lg:mt-0">
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-2 font-medium tracking-wide text-white uppercase">Pasabuy</li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-2 font-medium tracking-wide text-white uppercase">Company</li>
                        <li><a href="#" class="inline-block py-2 pl-3 pr-5 no-underline hover:text-white">About Us</a>
                        </li>
                        <li><a href="#" class="inline-block py-2 pl-3 pr-5 no-underline hover:text-white">FAQs</a></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-2 font-medium tracking-wide text-white uppercase">Privacy Policy</li>
                        <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-white no-underline hover:text-white">Privacy</a></li>
                        <li><a href="#" class="inline-block py-2 pl-3 pr-5 no-underline hover:text-white">Terms</a></li>
                    </ul>
                    <div class="flex flex-col w-full">
                        <div class="inline-block px-3 py-2 font-medium tracking-wide text-white uppercase">©Pasabuy 2021</div>
                        <ul class="flex flex-col w-full p-0 font-thin text-left">
                            <li><a href="#" class="inline-block py-2 pl-3 pr-5 no-underline hover:text-white">Stay connected with us</a></li>
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
</div>

<!---------------------------------MOBILE VIEW--------------------------------------------------------------------------------------->
<div class="mobileVersion">
    <div id="navbar" class="font-nunito px-4 py-4 py-6 flex justify bg-transparent w-full z-10 fixed">
        <img src="#" alt="logo">
            <div class="flex justify justify-end items-center mt-2 w-full space-x-4 text-right block">
                <button class="h-10 px-4 m-1 text-red-700 transition-colors duration-150 border border-red-700 
                                rounded-3xl focus:shadow-outline hover:bg-red-50">
                    <router-link :to="{name: 'login'}" >Log in</router-link>
                </button>
                <button  class="h-10 px-4 m-1 text-white transition-colors duration-150 bg-red-700 rounded-3xl
                                focus:shadow-outline hover:bg-red-800">
                    <router-link :to="{name: 'signup'}" >Sign Up</router-link>
                </button>
            </div>      
</div>
<div id="landing" class=" w-full h-screen font-nunito mx-auto bg-local bg-no-repeat bg-cover " style="background-image: url('img/main-back.jpg')">
  <div class="flex items-center h-full px-10 ml-36 vs:ml-10 ">
            <section class=" text-left pl-26  w-56">
            <p class="mt-10 mb-4 text-3xl font-bold w-70 text-left">
                Need someone to do your grocery?</p>
            <p class="text-2xl vs:mr-3 ssm:mb-5 vs:text-left vs:pb-12 ssm:text-left">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <button class="items-center h-16 px-4 m-1 mb-4 font-semibold tracking-wide 
                 text-white uppercase transition-colors duration-150 bg-red-700 
                    vs:ml-0 vs:w-56 vs:h-12 rounded-3xl focus:shadow-outline hover:bg-red-800">
                   <router-link :to="{name: 'login'}" >Pasabuy now</router-link>
                </button>
            </section>
        </div>
 <!--SECOND-->
 <div class="flex flex-wrap justify-center bg-white md:pt-40 font-nunito vs:justify-center vs:px-2 vs:items-center">
        <div class="w-full p-8 m-4 mt-8 mb-4 mr-2 bg-gray-200 h-50 rounded-xl w-1/2 ">
            <img class="mx-auto mb-5 w-1/2" src="img/bike.png"> <!----bike.svg-->
            <h2 class="text-2xl font-bold leading-loose tracking-wide text-center">Order and Chill</h2>
            <p class="mb-4 text-left text-justify">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
                 Laboriosam porro autem numquam, sit nisi dolorem nemo deserunt.</p>
        </div> 
        <div class="w-full p-8 m-4 mt-8 mb-4 mr-2 bg-gray-200 h-50 rounded-xl sw-1/2 ">
            <img class="mx-auto mb-5 w-1/2" src="img/cart.png"> <!----cart.svg-->
            <h2 class="text-2xl font-bold leading-loose tracking-wide text-center">Order and Chill</h2>
            <p class="mb-4 text-left text-justify ">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
                Laboriosam porro autem numquam, sit nisi dolorem nemo deserunt.</p>
        </div> 
        <div class="w-full p-8 m-4 mt-8 mb-4 mr-2 bg-gray-200 h-50 rounded-xl sw-1/2 ">
            <img class="mx-auto mb-5 w-1/2" src="img/package.png"> <!----cart.svg-->
            <h2 class="text-2xl font-bold leading-loose tracking-wide text-center">Order and Chill</h2>
            <p class="mb-4 text-left text-justify ">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
                Laboriosam porro autem numquam, sit nisi dolorem nemo deserunt.</p>
        </div> 
</div>
            
 <!--THIRD-->
        <div class="flex flex-wrap items-center justify-center p-6 bg-white font-nunito ">
            <div class="w-full p-10 m-4 mt-8 mb-4 mr-2 bg-white h-50 rounded-xl sm:w-1/2">    
                <h2 class="text-3xl font-bold text-left leading-1">It's all here.<br>All in one app.</h2>
                <p class="mb-4 leading-loose text-left leading">Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
                    Laboriosam porro autem numquam, sit nisi dolorem nemo deserunt.</p>
                    <button class="w-40 h-10 px-5 py-2 font-bold tracking-wider text-white transition-colors duration-150 bg-red-700 
                        rounded-3xl focus:shadow-outline hover:bg-red-700">
                        <a href="#">GORA</a> <!--change to router link-->
                    </button>
            </div>
            <div class="w-full bg-gray-200 h-50 rounded-xl sm:w-1/2 ">
                <img class="float-right object-contain w-full h-full border sm:object-center" src="img/eimage.png">
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-center p-6 bg-white font-nunito ">
            <div class="w-full p-10 m-4 mt-8 mb-4 mr-2 bg-white h-50 rounded-xl sm:w-1/2">    
                <h2 class="text-3xl font-bold text-left leading-1">It's all here.<br>All in one app.</h2>
                <p class="mb-4 leading-loose text-left leading">Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br />
                    Laboriosam porro autem numquam, sit nisi dolorem nemo deserunt.</p>
                    <button class="w-40 h-10 px-5 py-2 font-bold tracking-wider text-white transition-colors duration-150 bg-red-700 
                        rounded-3xl focus:shadow-outline hover:bg-red-700">
                        <a href="#">GORA</a> <!--change to router link-->
                    </button>
            </div>
            <div class="w-full bg-gray-200 h-50 rounded-xl sm:w-1/2 ">
                <img class="float-right object-contain w-full h-full border sm:object-center" src="img/eimage2.jpg">
            </div>
        </div>
<!--FOOTER-->
        <footer class=" bg-black px-4 pt-12 pb-8 text-white md:pt-12 ">
            <div class="container flex flex-col justify-center px-4 mx-auto overflow-hidden items-center ">
                <div class="block w-3/4 mt-6 text-sm sm:flex lg:mt-0">
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-2 font-medium tracking-wide text-white uppercase">Pasabuy</li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-2 font-medium tracking-wide text-white uppercase">Company</li>
                        <li><a href="#" class="inline-block py-2 pl-3 pr-5 no-underline hover:text-white">About Us</a>
                        </li>
                        <li><a href="#" class="inline-block py-2 pl-3 pr-5 no-underline hover:text-white">FAQs</a></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-2 font-medium tracking-wide text-white uppercase">Privacy Policy</li>
                        <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-white no-underline hover:text-white">Privacy</a></li>
                        <li><a href="#" class="inline-block py-2 pl-3 pr-5 no-underline hover:text-white">Terms</a></li>
                    </ul>
                    <div class="flex flex-col w-full">
                        <div class="inline-block px-3 py-2 font-medium tracking-wide text-white uppercase">©Pasabuy 2021</div>
                        <ul class="flex flex-col w-full p-0 font-thin text-left">
                            <li><a href="#" class="inline-block py-2 pl-3 pr-5 no-underline hover:text-white">Stay connected with us</a></li>
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

export default {
  components:{
     
  }

}
</script>


