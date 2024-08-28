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
    <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-10">
     @foreach ($data as $id=>$services )
     <div class="card  p-10 flex flex-col gap-5">
      <i class="fa-solid fa-code text-xl md:text-3xl text-green"></i>
      <h1 class="text-2xl font-medium">{{$services->serheading}}</h1>
      <p class="text-sm sm:text-base md:text-lg">{{$services->serpara}}</p>
      <button
        class="py-3 flex items-center font-medium text-green text-sm md:text-base border-green hover:duration-700 hover:bg-transparent">
        <div class="text">Read More</div> <i class="fa-solid fa-arrow-right-long ml-2"></i>
      </button>
    </div>
     @endforeach
    </div>
  </section>