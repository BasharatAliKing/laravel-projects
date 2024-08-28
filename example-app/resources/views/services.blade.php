@extends('layouts.app')

@section('title')
Services
@endsection
@section('content')
  <!--services here-->
  <section id="services" class="bg-home-bg text-white flex flex-col gap-5">
    <div class="bg-[#0d1925c9] h-[50vh] w-full flex flex-col gap-5 items-center justify-center">
      <h1 class="text-3xl sm:text-4xl md:text-4xl lg:text-6xl leading-tight font-bold">Services</h1>
      <div class="flex gap-2 items-center font-medium">
        <a href="home" class="flex items-center gap-1 hover:text-green"> <i
            class="fa-solid fa-house-chimney"></i>
          <p>Home</p>
        </a>
        /
        <span class="text-light">Services</span>
      </div>
    </div>
  </section>
  @include('components.services')
  @include('components.testimonials')
   <!--Faqs section starts here-->
   <section id="faqs" class="container py-5 md:py-10 flex flex-col gap-5 md:gap-10">
    <div class="flex flex-col gap-2 md:gap-3 mx-auto">
      <h2 class="uppercase mx-auto flex text-base md:text-lg items-center gap-2 text-green font-medium"> <span
          class="h-[7px] w-[7px] rounded-full bg-green"></span> faqs <span
          class="h-[7px] w-[7px] rounded-full bg-green"></span></h2>
      <h1 class="text-2xl sm:text-4xl text-center md:text-4xl lg:text-5xl font-bold capitalize">Frequently Asked
        Questions</h1>
     
    </div>
    <!--Questions starts here-->
    <div class="flex flex-col md:flex-row gap-5">
      <div class="md:w-1/2 flex flex-col gap-5 mb-auto">
        <div id="question-1" class="border w-full border-green p-3 mb-auto">
          <div class="flex items-center text-green">
            <h4 class="text-base md:text-lg font-semibold text-green capitalize">Are your services easy to use ?</h4>
            <i id="icon-plusone" class="fa-solid fa-plus ml-auto font-bold"></i>
          </div>
          <p class="para-1 text-sm md:text-base hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet aperiam quisquam recusandae ipsa quibusdam et
            necessitatibus iure excepturi molestiae veritatis.</p>
        </div>
        <div id="question-2" class="border w-full border-green p-3 mb-auto">
          <div class="flex items-center text-green">
            <h4 class="text-base md:text-lg font-semibold text-green capitalize">How much i will pay ?</h4>
            <i id="icon-plustwo" class="fa-solid fa-plus ml-auto font-bold"></i>
          </div>
          <p class="para-2 text-sm md:text-base hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet aperiam quisquam recusandae ipsa quibusdam et
            necessitatibus iure excepturi molestiae veritatis.</p>
        </div>
        <div id="question-3" class="border w-full border-green p-3 mb-auto">
          <div class="flex items-center text-green">
            <h4 class="text-base md:text-lg font-semibold text-green">Are your services easy to use ?</h4>
            <i id="icon-plusthree" class="fa-solid fa-plus ml-auto font-bold"></i>
          </div>
          <p class="para-3 text-sm md:text-base hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet aperiam quisquam recusandae ipsa quibusdam et
            necessitatibus iure excepturi molestiae veritatis.</p>
        </div>
      </div>
      <div class="md:w-1/2 flex flex-col gap-5 mb-auto">
        <div id="question-4" class="border w-full border-green p-3 mb-auto">
          <div class="flex items-center text-green">
            <h4 class="text-base md:text-lg font-semibold text-green">Are your services easy to use ?</h4>
            <i id="icon-plusfour" class="fa-solid fa-plus ml-auto font-bold"></i>
          </div>
          <p class="para-4 text-sm md:text-base hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet aperiam quisquam recusandae ipsa quibusdam et
            necessitatibus iure excepturi molestiae veritatis.</p>
        </div>
        <div id="question-5" class="border w-full border-green p-3 mb-auto">
          <div class="flex items-center text-green">
            <h4 class="text-base md:text-lg font-semibold text-green">Are your services easy to use ?</h4>
            <i id="icon-plusfive" class="fa-solid fa-plus ml-auto font-bold"></i>
          </div>
          <p class="para-5 text-sm md:text-base hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet aperiam quisquam recusandae ipsa quibusdam et
            necessitatibus iure excepturi molestiae veritatis.</p>
        </div>
        <div id="question-6" class="border w-full border-green p-3 mb-auto">
          <div class="flex items-center text-green">
            <h4 class="text-base md:text-lg font-semibold text-green">Are your services easy to use ?</h4>
            <i id="icon-plussix" class="fa-solid fa-plus ml-auto font-bold"></i>
          </div>
          <p class="para-6 text-sm md:text-base hidden">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet aperiam quisquam recusandae ipsa quibusdam et
            necessitatibus iure excepturi molestiae veritatis.</p>
        </div>
      </div>

    </div>
  </section>
  @include('components.contact')
@endsection