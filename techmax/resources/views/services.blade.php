@extends('layouts.app')
@section('servicesdott')
active
@endsection
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
      <div class="grid grid-cols-1 md:grid-cols-2 w-full gap-5 mb-auto">
      @foreach ($question as $ques )
      <div onclick="quest({{$ques->id}})">
      <div id="question-{{$ques->id}}" class="cursor:pointer border w-full border-green p-3 mb-auto">
        <div class="flex items-center text-green">
          <h4 class="text-base md:text-lg font-semibold text-green capitalize">{{$ques->question}}</h4>
          <i id="iconquestion-{{$ques->id}}" class="fa-solid fa-plus ml-auto font-bold"></i>
        </div>
        <p id="para-{{$ques->id}}" class=" text-sm md:text-base hidden">{{$ques->answer}}</p>
      </div></div>
      @endforeach
      

    </div>
  </section>
  @include('components.contact')
@endsection
<script>

</script>