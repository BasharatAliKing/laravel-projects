@extends('layouts.app')
@section('portfoliodott')
active
@endsection
@section('title')
Portfolio
@endsection

@section('content')
  <!--Portfolio here-->
  <section id="portfolio" class="bg-home-bg text-white ">
    <div class="bg-[#0d1925c9] h-[50vh] w-full flex flex-col gap-5 items-center justify-center">
        <h1 class="text-3xl sm:text-4xl md:text-4xl lg:text-6xl leading-tight font-bold">Portfolio</h1>
        <div class="flex gap-2 items-center font-medium">
           <a href="home" class="flex items-center gap-1 hover:text-green"> <i class="fa-solid fa-house-chimney"></i><p>Home</p></a>
            /
            <span class="text-light">Portfolio</span>
        </div>
    </div>
  </section>
  @include('components.portfolio')
  @include('components.testimonials')
  @include('components.trusted')
  @include('components.contact')
@endsection