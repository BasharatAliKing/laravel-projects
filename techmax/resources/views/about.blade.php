@extends('layouts.app')
@section('aboutdott')
active
@endsection
@section('title')
About
@endsection

@section('content')
  <!--About here-->
  <section id="abouts" class="bg-home-bg text-white ">
    <div class="bg-[#0d1925c9] h-[50vh] w-full flex flex-col gap-5 items-center justify-center">
        <h1 class="text-3xl sm:text-4xl md:text-4xl lg:text-6xl leading-tight font-bold">About Us</h1>
        <div class="flex gap-2 items-center font-medium">
           <a href="home" class="flex items-center gap-1 hover:text-green"> <i class="fa-solid fa-house-chimney"></i><p>Home</p></a>
            /
            <span class="text-light">About Us</span>
        </div>
    </div>
  </section>
@include('components.about')
 <!--Team section starts from here-->
 <section id="team" class="container py-5  md:py-10">
    <div class="flex flex-col md:items-center md:flex-row gap-5">
        <div class="md:w-3/4 flex flex-col gap-3">
          <h2 class="uppercase flex text-base md:text-lg items-center gap-2 text-green font-medium"> <span
              class="h-[7px] w-[7px] rounded-full bg-green"></span> Team <span
              class="h-[7px] w-[7px] rounded-full bg-green"></span></h2>
          <h1 class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl font-bold capitalize">Our Experts Team Members</h1>
        </div>
        <div class="md:w-1/4 md:ml-auto flex items-start items-center md:justify-end">
          <button
            class="px-9 py-3 border-2 bg-green rounded-tr-2xl rounded-bl-2xl flex items-center font-medium text-sm md:text-base border-green hover:duration-700 hover:bg-transparent">
            <div class="text">See More</div> <i class="fa-solid fa-arrow-right-long ml-2"></i>
          </button>
        </div>
      </div>
      <!--teams members-->
      <div class="grid grid-cols-1  md:grid-cols-3 gap-5 mt-10 md:mt-20 ">
        <div class="card">
            <div class="relative overflow-hidden">
                <img class="w-full img" src="/assets/images/team-1.jpg" alt="">
     <!--Social Links-->
     <ul class="social-link w-full absolute   left-[30%] gap-3">
        <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-facebook-f"></i>
        <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-youtube"></i>
        <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-instagram"></i>
        <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-twitter"></i>
         </ul>
            </div>  <div class="p-5">
            <h2 class="text-center font-medium text-xl md:text-2xl">Murad Aly</h2>
            <p class="text-center font-normal text-xs md:text-sm">Ceo Founder</p>
        </div>
       </div>
       <div class="card">
        <div class="relative overflow-hidden">
            <img class="w-full img" src="/assets/images/team-2.jpg" alt="">
 <!--Social Links-->
 <ul class="social-link w-full absolute   left-[30%] gap-3">
    <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-facebook-f"></i>
    <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-youtube"></i>
    <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-instagram"></i>
    <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-twitter"></i>
     </ul>
        </div>
         <div class="p-5">
            <h2 class="text-center font-medium text-xl md:text-2xl">Murad Aly</h2>
            <p class="text-center font-normal text-xs md:text-sm">Manager</p>
        </div>
       </div>
       <div class="card">
        <div class="relative overflow-hidden">
            <img class="w-full img" src="/assets/images/team-3.jpg" alt="">
 <!--Social Links-->
 <ul class="social-link w-full absolute   left-[30%] gap-3">
    <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-facebook-f"></i>
    <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-youtube"></i>
    <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-instagram"></i>
    <i class="bg-green flex items-center justify-center rounded-md hover:duration-700  hover:bg-white hover:text-green  h-7 w-7  fa-brands fa-twitter"></i>
     </ul>
        </div>
        <div class="p-5">
            <h2 class="text-center font-medium text-xl md:text-2xl">Murad Aly</h2>
            <p class="text-center font-normal text-xs md:text-sm">co Leader</p>
        </div>
       
       </div>
      </div>
  </section>

  @include('components.testimonials')
  @include('components.trusted')
  @include('components.blog')
  @include('components.contact')
  @endsection