<template>
  <!--profile review-->
 <div class="h-screen">
  <div class="flex items-center justify-center space-x-10">

  <!--Rating-->
    <div class="flex flex-col h-screen">
    <div class="flex mt-10">
      <div class="flex flex-col space-x-4 items-center justify-center p-6 bg-white shadow rounded-xl h-auto" style="width: 304px;">     
        <div class="inline-flex mb-3">
          <p class="font-bold leading-10 text-gray-900 text-4xl">4.9 / 5</p>
        </div>
        <div class="inline-flex items-start space-x-1 justify-start px-4 py-2 bg-gray-100 rounded-full">
          <img class="w-1/5 h-full rounded-lg" src="img/star_rate.svg"/>
          <img class="w-1/5 h-full rounded-lg" src="img/star_rate.svg"/>
          <img class="w-1/5 h-full rounded-lg" src="img/star_rate.svg"/>
          <img class="w-1/5 h-full rounded-lg" src="img/star_rate.svg"/>
          <img class="w-1/5 h-full rounded-lg" src="img/star_rate.svg"/>
        </div>
        <div class="flex py-3">
          <p class="text-xs leading-none text-gray-900">based on 20 Pasabuyers</p>
        </div>
        <div class="flex flex-col ">
          <div class="inline-flex flex-row space-x-2">
            <div>
              <p class="text-sm leading-normal text-gray-900">5 stars</p>
            </div>
            <div class="inline-flex py-2">
                <div class="w-44 h-2  right-0 top-0 bg-gray-200 rounded-full">
                  <div class="w-40 h-2 left-0 top-0 bg-red-700 rounded-full"></div>
            </div>
            </div>
          </div>
          <div class="inline-flex flex-row space-x-2">
            <div>
              <p class="text-sm leading-normal text-gray-900">4 stars</p>
            </div>
            <div class="inline-flex py-2">
                <div class="w-44 h-2  right-0 top-0 bg-gray-200 rounded-full">
                  <div class="w-2.5 h-2 bg-red-700 rounded-full"></div>
            </div>
            </div>
          </div>
          <div class="inline-flex flex-row space-x-2">
            <div>
              <p class="text-sm leading-normal text-gray-900">3 stars</p>
            </div>
            <div class="inline-flex py-2">
                <div class="w-44 h-2  right-0 top-0 bg-gray-200 rounded-full">
                  <div class="w-0 h-2 left-0 top-0 bg-red-700 rounded-full"></div>
            </div>
            </div>
          </div>
          <div class="inline-flex flex-row space-x-2">
            <div>
              <p class="text-sm leading-normal text-gray-900">2 stars</p>
            </div>
            <div class="inline-flex py-2">
                <div class="w-44 h-2  right-0 top-0 bg-gray-200 rounded-full">
                  <div class="w-0 h-2 left-0 top-0 bg-red-700 rounded-full"></div>
            </div>
            </div>
          </div>
          <div class="inline-flex flex-row space-x-2">
            <div>
              <p class="text-sm leading-normal text-gray-900">1 stars</p>
            </div>
            <div class="inline-flex py-2">
                <div class="w-44 h-2  right-0 top-0 bg-gray-200 rounded-full">
                  <div class="w-0 h-2 left-0 top-0 bg-red-700 rounded-full"></div>
            </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!--end of rating code-->

<!--user post comments about reviews-->
  <div class="flex flex-col h-screen">

    <!--post 1-->
    <div class="flex py-10">
      <div class="inline-flex space-x-4 items-start justify-start p-6 bg-white shadow rounded-xl h-auto" style="width: 608px;">     
        <div class="flex flex-col">
          <div class="flex flex-grow space-x-4 flex-wrap flex-row w-full justify-between">
            <div class="flex">
              <img class="w-14 h-14 rounded-full" src="img/asta.jpeg"/>
              <div class="flex flex-col items-start px-4">
                <div class="space-x-8">
                  <span class="text-base font-bold leading-none text-gray-900">Asta Staria</span>
                  <!--check icon here-->
                </div>
                <div class="flex-row flex py-2 space-x-4">
                  <div class="inline-flex items-start space-x-1 justify-start">
                    <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                    <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                    <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                    <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                    <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                   </div>
                   <div class="inline-flex">
                    <span class="text-sm mt-0.5leading-none text-gray-500">4 hours ago</span>
                   </div>
                </div>
              </div>
            </div>
        </div>
        <div class="flex items-start justify-start px-6 py-4  bg-gray-100 rounded-xl h-auto mt-3" style="width: 560px;">
          <p class="text-sm leading-normal text-gray-900">My items arrived complete and in safe condition. The delivery is also fast, got all the things I needed just before our party starts. Definitely recommended!</p>
      </div>
      </div>    
    </div>
  </div>
  <!--end-->

  <!--post 2-->
  <div class="flex">
    <div class="inline-flex space-x-4 items-start justify-start p-6 bg-white shadow rounded-xl h-auto" style="width: 608px;">     
      <div class="flex flex-col">
        <div class="flex flex-grow space-x-4 flex-wrap flex-row w-full justify-between">
          <div class="flex">
            <img class="w-14 h-14 rounded-full" src="img/julius.png"/>
            <div class="flex flex-col items-start px-4">
              <div class="space-x-8">
                <span class="text-base font-bold leading-none text-gray-900">Julius Novachrono</span>
                <!--check icon here-->
              </div>
              <div class="flex-row flex py-2 space-x-4">
                  <div class="inline-flex items-start space-x-1 justify-start">
                    <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                    <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                    <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                    <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                    <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                   </div>
                   <div class="inline-flex">
                    <span class="text-sm mt-0.5leading-none text-gray-500">February 16, 2021</span>
                   </div>
                </div>
            </div>
          </div>
      </div>
      <div class="flex items-start justify-start px-6 py-4  bg-gray-100 rounded-xl h-auto mt-3" style="width: 560px;">
        <p class="text-sm leading-normal text-gray-900">My items arrived complete and in safe condition. The delivery is also fast, got all the things I needed just before our party starts. Definitely recommended!</p>
    </div>
    </div>    
  </div>
</div>
<!--end-->

<!--post 3-->
<div class="flex py-10">
  <div class="inline-flex space-x-4 items-start justify-start p-6 bg-white shadow rounded-xl h-auto" style="width: 608px;">     
    <div class="flex flex-col">
      <div class="flex flex-grow space-x-4 flex-wrap flex-row w-full justify-between">
        <div class="flex">
          <img class="w-14 h-14 rounded-full" src="img/baha.jpg"/>
          <div class="flex flex-col items-start px-4">
            <div class="space-x-8">
              <span class="text-base font-bold leading-none text-gray-900">Baha-haha-ha</span>
              <!--check icon here-->
            </div>
           <div class="flex-row flex py-2 space-x-4">
              <div class="inline-flex items-start space-x-1 justify-start">
                <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
                <img class="w-4 h-full rounded-full" src="img/star_rate.svg"/>
              </div>
              <div class="inline-flex">
                <span class="text-sm mt-0.5leading-none text-gray-500">Februray 12, 2021</span>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="flex items-start justify-start px-6 py-4  bg-gray-100 rounded-xl h-auto mt-3" style="width: 560px;">
      <p class="text-sm leading-normal text-gray-900">My items arrived complete and in safe condition. The delivery is also fast, got all the things I needed just before our party starts. Definitely recommended!</p>
  </div>
  </div>    
</div>
</div>
<!--end-->

</div>
<!--end of user post comments about reviews-->
</div>
</div>
<!--end of reviews-->
</template>

<script>
export default {
    
}
</script>