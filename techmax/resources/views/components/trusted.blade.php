 <!--Trusted section here-->
 <section id="trusted" class="bg-green py-10">
    <div class="container flex flex-col gap-3">
      <h1 class="text-center text-xl md:text-3xl font-medium text-[#ffffffab]">Trusted by Over 500 Clients around the
        world</h1>
      <div class="slider">
      @foreach ($trusted as $img)
      <div class="p-4"><img class="rounded-md  md:mx-0 md:w-auto" src="{{$img->image}}" alt="my-img"></div>
      @endforeach
      </div>

    </div>
  </section>