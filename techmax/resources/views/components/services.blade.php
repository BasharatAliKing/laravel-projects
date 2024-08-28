  <!--Services starts from here-->
  <section id="services" class="container py-10 flex flex-col ">
    <div class="flex flex-col md:flex-row gap-5">
      <div class="md:w-1/2 flex flex-col gap-3">
        <h2 class="uppercase flex text-base md:text-lg items-center gap-2 text-green font-medium"> <span
            class="h-[7px] w-[7px] rounded-full bg-green"></span> Services <span
            class="h-[7px] w-[7px] rounded-full bg-green"></span></h2>
        <h1 class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl font-bold">Services We Offer</h1>
        <p class="text-sm sm:text-base lg:text-lg">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Omnis
          Id Atque Dignissimos Repellat Quae Ullam.</p>
      </div>
      <div class="md:w-1/2 md:ml-auto flex items-center  md:justify-end">
        <button
          class="px-9 py-3 border-2 bg-green rounded-tr-2xl rounded-bl-2xl flex items-center font-medium text-sm md:text-base border-green hover:duration-700 hover:bg-transparent">
          <div class="text">See All Services</div> <i class="fa-solid fa-arrow-right-long ml-2"></i>
        </button>
      </div>
    </div>
   <!--Services Box-->
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-10">
   @foreach ($service as $service )
   <div onclick="service({{$service->id}})" id="readmore-btnser-{{$service->id}}" class="card  p-10 flex flex-col gap-5 cursor-pointer">
    <i class="fa-solid fa-code text-xl md:text-3xl text-green"></i>
    <h1 class="text-2xl font-medium">{{$service->service_name}}</h1>
    <p class="text-sm sm:text-base md:text-lg my-2">{{$service->service_des}}</p>
    <button id="readmore-btnser-{{$service->id}}"
      class="py-3 flex items-center font-medium text-green text-sm md:text-base border-green hover:duration-700 hover:bg-transparent">
      <div class="text">Read More</div> <i class="fa-solid fa-arrow-right-long ml-2"></i>
    </button>
  </div>
    <!--Read More Services absolute here-->
    <div id="readmore-ser-{{$service->id}}" style="display:none;"  class=" container absolute z-10 left-0 ">
    <div class="relative services-popup mx-auto flex flex-col gap-5 p-5 lg:w-[50%]  bg-[#00b2449c] left-0">
      <i id="close-ser-{{$service->id}}" class="fa-regular fa-circle-xmark absolute text-xl md:text-3xl right-3 top-3"></i>
      <img src="{{$service->image}}" class="pt-10 md:mr-auto mx-auto text-green" alt="">
      <h1 class="text-xl md:text-2xl font-medium">{{$service->service_name}}</h1>
      <p class="text-sm sm:text-base ">{{$service->service_longdes}}</p>
    </div>
    </div>
    @endforeach
  </div>

  </section>