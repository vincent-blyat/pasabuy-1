<template>
  <!--About-->
  <div class="bg-gray-100">
  <div class="flex items-center vs:flex-col justify-center space-x-10">

  <!--Section 2-->
    <div class="flex flex-col h-screen">

    <!--section 2.1-->
    <div class="flex py-6">
      <div class="flex flex-col py-8 space-x-4 items-center justify-center p-6 bg-white shadow rounded-xl h-auto" style="width: 304px;">  
        <div class="flex flex-row space-x-4">
          <div class="inline-flex flex-col " >
            <div class="inline-flex space-x-1 items-center justify-center">
              <span class="text-2xl font-bold leading-normal text-gray-900">{{rating}}</span>
              <img class="w-6 h-6 rounded-lg" src="img/star_rate.svg"/>
          </div>
            <div class="inline-flex">
              <span class="text-xs pl-1 font-semibold tracking-wide leading-none text-gray-500 uppercase">Rating</span>
            </div>
          </div>

          <div class="inline-flex flex-col" >
            <div class="inline-flex space-x-1 items-center justify-center">
              <p class="text-2xl font-bold leading-normal text-gray-900">{{deliveries}}</p>
              <img class="w-6 h-6 rounded-lg" src="img/shopping_cart.svg"/>
          </div>
            <div class="inline-flex ">
              <span class="text-xs font-semibold tracking-wide leading-none text-gray-500 uppercase">Deliveries</span>
            </div>
          </div>
          <div class="inline-flex flex-col" >
            <div class="inline-flex space-x-1 items-center justify-center">
              <p class="text-2xl font-bold leading-normal text-gray-900">{{orders}}</p>
              <img class="w-6 h-6 rounded-lg" src="img/shopping_bag.svg"/>
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
            <img class="w-6 h-6 rounded-lg" src="img/graduation-cap.svg"/>
            <p class="text-sm leading-normal text-gray-900">Studied at <span class="font-bold">{{education_info.school1}}</span> </p>
          </div>
          <div class="inline-flex space-x-2">
            <img class="w-6 h-6 rounded-lg" src="img/graduation-cap.svg"/>
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
            <img class="w-6 h-6 rounded-lg" src="img/location.svg"/>
            <p class="text-sm leading-normal text-gray-900">From <span class="font-bold">{{address_info.barangay}}, {{address_info.city}}</span></p>
          </div>
          <div class="inline-flex space-x-2">
            <img class="w-6 h-6 rounded-lg" src="img/location.svg"/>
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
          <div class="flex flex-col space-y-2">
            <div class="inline-flex space-x-2 items-start justify-start">
            <img class="w-4 h-full rounded-full" src="img/tool-box.svg"/>
            <p class="text-xs font-bold py-0.5 tracking-wide leading-none text-gray-500 uppercase">Work</p>
          </div>
          <div class="inline-flex space-x-2 items-start justify-start">
            <img class="w-4 h-full rounded-full" src="img/gender.svg"/>
            <p class="text-xs font-bold py-0.5 tracking-wide leading-none text-gray-500 uppercase">Gender</p>
          </div>
          <div class="inline-flex space-x-2 items-start justify-start">
            <img class="w-4 h-full rounded-full" src="img/cakee.svg"/>
            <p class="text-xs font-bold py-0.5 tracking-wide leading-none text-gray-500 uppercase">Birthday</p>
          </div>
          <div class="inline-flex space-x-2 items-start justify-start">
            <img class="w-4 h-full rounded-full" src="img/language.svg"/>
            <p class="text-xs font-bold py-0.5 tracking-wide leading-none text-gray-500 uppercase">Languages</p>
          </div>
          </div>
          <div class="flex flex-col space-y-2.5">
            <div class="inline-flex">
              <p class="text-sm leading-none text-gray-900">{{basic_info.work}}</p>
            </div>
            <div class="inline-flex">
              <p class="text-sm leading-none text-gray-900">{{basic_info.gender}}</p>
            </div>
            <div class="inline-flex">
              <p class="text-sm leading-none text-gray-900">{{basic_info.birdate}}</p>
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
<div class="flex flex-col h-screen">
<div class="flex py-6 vs:py-10">
  <div class="inline-flex space-x-4 items-start justify-start p-6 bg-white shadow rounded-xl h-auto w-608 vs:w-96.5">     
    <div class="flex flex-col">

      <!--Skills section-->
      <div class="flex flex-col">
        <div class="inline-flex items-start justify-between">
          <p class="text-base font-bold tracking-wide leading-none text-center text-gray-900 capitalize">Skills</p>
          <button class="text-sm font-bold leading-none text-center text-indigo-900">Edit</button>
        </div>
        <div class="inline-flex flex-row justify-start item-start py-6 space-x-4">
          <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
            <p class="text-sm leading-loose text-center text-gray-900">Writing</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
          <p class="text-sm leading-loose text-center text-gray-900">Blogging</p>
        </div>
        <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
        <p class="text-sm leading-loose text-center text-gray-900">Painting</p>
        </div>
        <div class="vs:hidden inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
        <p class="text-sm leading-loose text-center text-gray-900">Public speaking</p>
        </div>
        </div>
        <div class=" hidden vs:inline-flex flex-row justify-start item-start pb-6 space-x-4">
        <div class=" items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
        <p class="text-sm leading-loose text-center text-gray-900">Public speaking</p>
        </div>
        </div>
        <hr class="border-gray-200" style="width: 544px; height: 1px;">
      </div>
      <!--end-->

      <!--Interest section-->
      <div class="flex flex-col py-6">
        <div class="inline-flex items-start justify-between">
          <p class="text-base font-bold tracking-wide leading-none text-center text-gray-900 capitalize">Interest</p>
          <button class="text-sm font-bold leading-none text-center text-indigo-900">Edit</button>
        </div>
        <div class="inline-flex flex-row justify-start item-start py-6 space-x-4">
          <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
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
        </div>

        <div class="inline-flex flex-row justify-start item-start space-x-4">
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
        <div class=" hidden vs:inline-flex flex-row justify-start item-start pb-0 py-6 space-x-4">
        <div class=" items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
        <p class="text-sm leading-loose text-center text-gray-900">Public speaking</p>
        </div>
        </div>
      </div>
      <hr class="border-gray-200" style="width: 544px; height: 1px;">
      <!--end-->
    
      <!--Visited place section-->
      <div class="flex flex-col py-6">
        <div class="inline-flex items-start justify-between">
          <p class="text-base font-bold tracking-wide leading-none text-center text-gray-900 capitalize">Visited Place</p>
          <button class="text-sm font-bold leading-none text-center text-indigo-900">Edit</button>
        </div>
        <div class="inline-flex flex-row justify-start item-start py-6 space-x-4">
          <div class="inline-flex items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
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
        </div>

        <div class="inline-flex flex-row justify-start item-start space-x-4">
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
        <div class=" hidden vs:inline-flex flex-row justify-start item-start pb-0 py-6 space-x-4">
        <div class=" items-start justify-start px-4 py-1 bg-gray-100 rounded-full">
        <p class="text-sm leading-loose text-center text-gray-900">Joroan, Albay</p>
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