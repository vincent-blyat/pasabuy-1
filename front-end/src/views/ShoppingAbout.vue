<template>
  <!--About-->
  <div class="bg-gray-100 font-nunito w-full">
  <div class="flex items-center w-full vs:px-1 sm:px-6 vs:flex-col sm:flex-col md:flex-col justify-center vs:space-x-0 sm:space-x-0 space-x-10">

  <!--Section 2-->
    <div class="flex flex-col h-screen md:h-auto vs:h-auto sm:h-auto">

    <!--section 2.1-->
    <div class="flex py-6">
      <div class="flex flex-col py-8 space-x-4 items-center justify-center p-6 bg-white shadow rounded-xl h-auto" style="width: 304px;">  
        <div class="flex flex-row space-x-4">
          <div class="inline-flex flex-col " >
            <div class="inline-flex space-x-1 items-center justify-center">
              <span class="text-2xl font-bold leading-normal text-gray-900">{{rating}}</span>
               <span class="text-yellow-500 align-middle material-icons md-24">
                  star_rate
                </span>
          </div>
            <div class="inline-flex">
              <span class="text-xs pl-1 font-semibold tracking-wide leading-none text-gray-500 uppercase">Rating</span>
            </div>
          </div>

          <div class="inline-flex flex-col" >
            <div class="inline-flex space-x-1 items-center justify-center">
              <p class="text-2xl font-bold leading-normal text-gray-900">{{deliveries}}</p>
              <span class="text-red-600 align-middle material-icons md-24">
                  delivery_dining
                </span>
          </div>
            <div class="inline-flex ">
              <span class="text-xs font-semibold tracking-wide leading-none text-gray-500 uppercase">Deliveries</span>
            </div>
          </div>
          <div class="inline-flex flex-col" >
            <div class="inline-flex space-x-1 items-center justify-center">
              <p class="text-2xl font-bold leading-normal text-gray-900">{{orders}}</p>
              <span class="text-red-600 align-middle material-icons md-24">
                  shopping_bag
                </span>
            </div>
            <div class="inline-flex">
              <p class="text-xs pl-1 font-semibold tracking-wide leading-none text-gray-500 uppercase">Orders</p>
            </div>
          </div>
        </div> 
    </div>
  </div>
  <!--end-->

  <!--section 2.2-->
  <div class="flex">
    <div class="flex space-x-4 items-start justify-start p-6 bg-white shadow rounded-xl h-auto" style="width: 304px;">     
      <div class="flex-col">
        <div class="flex flex-col">
          <div class="inline-flex justify-between">
            <p class="text-base font-bold tracking-wide leading-none text-center text-gray-900 capitalize">Education</p>
            <button class="text-sm font-bold leading-none text-center text-indigo-900">Edit</button>
          </div>
          <div class="inline-flex space-x-2 py-4">
            <span class="text-red-600 align-middle material-icons md-18">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.23em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 472 384"><path d="M85 217l150 82l149-82v86l-149 81l-150-81v-86zM235 0l234 128v171h-42V151L235 256L0 128z" fill="#626262"/></svg>
                </span>
            <p class="text-sm leading-normal text-gray-900">Studied at <span class="font-bold">{{education_info.school1}}</span> </p>
          </div>
          <div class="inline-flex space-x-2">
            <span class="text-red-600 align-middle material-icons md-18">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.23em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 472 384"><path d="M85 217l150 82l149-82v86l-149 81l-150-81v-86zM235 0l234 128v171h-42V151L235 256L0 128z" fill="#626262"/></svg>
                </span>
            <p class="text-sm leading-normal text-gray-900">Went to <span class="font-bold">{{education_info.school2}}</span> </p>
          </div>
          <div class="py-3">
            <hr class="border-gray-200" style="width: 260px; height: 1px;">
          </div>
        </div>

        <div class="flex flex-col">
          <div class="inline-flex justify-between">
            <p class="text-base font-bold tracking-wide leading-none text-center text-gray-900 capitalize">Places Lived</p>
            <button class="text-sm font-bold leading-none text-center text-indigo-900">Edit</button>
          </div>
          <div class="inline-flex space-x-2 py-4">
           <span class="rounded-full material-icons text-gray-500">
              location_on
              </span>
            <p class="text-sm leading-normal text-gray-900">From <span class="font-bold">{{address_info.barangay}}, {{address_info.city}}</span></p>
          </div>
          <div class="inline-flex space-x-2">
            <span class="rounded-full material-icons text-gray-500">
              location_on
              </span>
            <p class="text-sm leading-normal text-gray-900">Lives in <span class="font-bold">{{address_info.barangay}}, {{address_info.city}}</span></p>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <!--end-->

  <!--section 2.3-->
  <div class="flex py-6">
   <div class="flex flex-col space-x-4 items-center justify-center p-6 bg-white shadow rounded-xl h-auto" style="width: 304px;">     
    <div class="flex-col">
      <div class="flex flex-col">
        <div class="inline-flex justify-between">
          <p class="text-base font-bold tracking-wide leading-none text-center text-gray-900 capitalize">Basic Info</p>
          <button class="text-sm font-bold leading-none text-center text-indigo-900">Edit</button>
        </div>
        <div class="flex flex-row space-x-4 py-4">
          <div class="flex flex-col space-y-1.5">
            <div class="inline-flex space-x-2 items-start justify-start">
            <span class="rounded-full material-icons text-gray-500 md-18">
              work
              </span>
            <p class="text-xs font-bold py-0.5 tracking-wide leading-none text-gray-500 uppercase">Work</p>
          </div>
          <div class="inline-flex space-x-2 items-start justify-start">
            <span class="rounded-full material-icons text-gray-500 md-18">
              account_circle
              </span>
            <p class="text-xs font-bold py-0.5 tracking-wide leading-none text-gray-500 uppercase">Gender</p>
          </div>
          <div class="inline-flex space-x-2 items-start justify-start">
            <span class="rounded-full material-icons text-gray-500 md-18">
              cake
              </span>
            <p class="text-xs font-bold py-0.5 tracking-wide leading-none text-gray-500 mt-0.5 uppercase">Birthday</p>
          </div>
          <div class="inline-flex space-x-2 items-start justify-start">
            <span class="rounded-full material-icons text-gray-500 md-18">
              language
              </span>
            <p class="text-xs font-bold py-0.5 tracking-wide leading-none text-gray-500 uppercase">Languages</p>
          </div>
          </div>
          <div class="flex flex-col space-y-2.5 ">
            <div class="inline-flex">
              <p class="text-sm leading-none text-gray-900 pt-0.5">{{basic_info.work}}</p>
            </div>
            <div class="inline-flex">
              <p class="text-sm leading-none text-gray-900">{{basic_info.gender}}</p>
            </div>
            <div class="inline-flex">
              <p class="text-sm leading-none text-gray-900 pt-0.5 ">{{basic_info.birdate}}</p>
            </div>
            <div class="inline-flex">
              <p class="text-sm leading-none text-gray-900">{{basic_info.language}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--end-->
</div>
<!--section 2 end-->

<!--Section 1-->
<div class="flex flex-col  h-screen sm:h-auto vs:h-auto vs:w-full sm:w-full">
<div class="flex py-6 sm:py-0 sm:pb-6 vs:py-0 vs:pb-6">
  <div class="inline-flex space-x-4 items-start justify-start p-6 bg-white shadow rounded-xl h-auto w-608 vs:w-full sm:w-full">     
    <div class="flex flex-col w-full">

      <!--Skills section-->
      <div class="flex flex-col">
        <div class="inline-flex items-start justify-between">
          <p class="text-base font-bold tracking-wide leading-none text-center text-gray-900 capitalize">Skills</p>
          <button class="text-sm font-bold leading-none text-center text-indigo-900">Edit</button>
        </div>
        <div class="flex-1 space-y-6 items-start justify-start w-full h-auto item-start space-x-4 mb-6">
        <div class="ml-4 inline-flex flex-grow-0 items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Writing</p>
        </div>
        <div class="inline-flex flex-grow-0 items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Blogging</p>
        </div>
        <div class="inline-flex flex-grow-0 items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Painting</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Public speaking</p>
        </div>
        </div>
        <hr class="border-gray-200 h-2 w-full">
      </div>
      <!--end-->

      <!--Interest section-->
      <div class="flex flex-col py-6">
        <div class="inline-flex items-start justify-between">
          <p class="text-base font-bold tracking-wide leading-none text-center text-gray-900 capitalize">Interest</p>
          <button class="text-sm font-bold leading-none text-center text-indigo-900">Edit</button>
        </div>
        <div class="flex-1 space-y-6 flex-row justify-start w-full h-auto item-start space-x-4">
          <div class="ml-4 inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Writing</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Blogging</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Painting</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Coding</p>
        </div>
        <div class="vs:hidden inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Public speaking</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
            <p class="text-sm leading-loose text-center text-gray-900">Sight-Seeing</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Travel</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
        <p class="text-sm leading-loose text-center text-gray-900">Photography</p>
        </div>
        </div>
      </div>
      <hr class="border-gray-200 h-2 w-full">
      <!--end-->
    
      <!--Visited place section-->
      <div class="flex flex-col py-6">
        <div class="inline-flex items-start justify-between">
          <p class="text-base font-bold tracking-wide leading-none text-center text-gray-900 capitalize">Visited Place</p>
          <button class="text-sm font-bold leading-none text-center text-indigo-900">Edit</button>
        </div>
        <div class="flex-1 space-y-6 flex-row justify-start item-start space-x-4">
          <div class="ml-4 inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Sorsogon</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Masbate</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Tiwi-Albay</p>
        </div>
        <div class="vs:hidden inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Joroan, Albay</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Cebu</p>
        </div>
         <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
            <p class="text-sm leading-loose text-center text-gray-900">Taguig City</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Davao City</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
        <p class="text-sm leading-loose text-center text-gray-900">Catanduanes</p>
        </div>
        </div>
      </div>
      <!--end-->
      </div>
    </div>    
</div>
</div>
<!--Section 1 end-->
</div>
</div>
<!--About end-->
</template>

<script>
export default {
  data(){
    return{
      rating: '4.9',
      deliveries: '20',
      orders: '13',
      education_info:{
            school1: 'Bicol University',
            school2: 'Banquerohan High School'
          },
      basic_info:{
            work:'Self-employed',
            gender:'Male',
            language:'Japanese and Filipino',
            birdate: 'September 17, 1992'
      },
      address_info:{
            city:'Legaspi City',
            barangay:'Banquerohan'
          },
    }
  }

}
</script>