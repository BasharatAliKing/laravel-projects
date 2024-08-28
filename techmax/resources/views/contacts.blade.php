@extends('layouts.app')
@section('contactdott')
active
@endsection
@section('title')
Contact
@endsection

@section('content')
  <!--Contact here-->
  <section id="contact" class="bg-home-bg text-white ">
    <div class="bg-[#0d1925c9] h-[50vh] w-full flex flex-col gap-5 items-center justify-center">
        <h1 class="text-3xl sm:text-4xl md:text-4xl lg:text-6xl leading-tight font-bold">Contact Us</h1>
        <div class="flex gap-2 items-center font-medium">
            <a href="/home" class="flex items-center gap-1 hover:text-green"> <i
                    class="fa-solid fa-house-chimney"></i>
                <p>Home</p>
            </a>
            /
            <span class="text-light">Contact Us</span>
        </div>
    </div>
</section>
  <!--Map section here-->
  <section id="map" class="container py-8 md:py-16 flex flex-col gap-8 md:gap-10">
    <h1 class="text-3xl sm:text-4xl text-center md:text-4xl lg:text-5xl font-semibold capitalize">Find us on
        google map</h1>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6806.437768088703!2d74.24097863689502!3d31.46316449843765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190220c0a6734f%3A0x89098abebdab483f!2sAli%20Town%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1706269959757!5m2!1sen!2s"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!--Contacts form here-->
<section id="contact-form" class="py-8 md:py-16 container flex flex-col gap-10">
<h1 class="text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold">Have Any Questions? Let's Answer Them</h1>
<form action="" class="flex flex-col gap-5">
    <div class="flex flex-col md:flex-row gap-3 md:gap-5 w-full ">
        <div class="w-full">
            <label for="">Name <span class="text-lg text-red-500">*</span></label> <br>
            <input type="text" class="bg-transparent outline-none border border-gray-500 focus:border-green rounded-sm p-2 w-full">
        </div>
        <div class="w-full">
            <label for="">E-Mail <span class="text-lg text-red-500">*</span></label> <br>
            <input type="text" class="bg-transparent outline-none border border-gray-500 focus:border-green rounded-sm p-2 w-full">
        </div>
    </div>
    <div class="w-full">
        <label for="">Subject <span class="text-lg text-red-500">*</span></label> <br>
        <input type="text" class="bg-transparent outline-none border border-gray-500 focus:border-green rounded-sm p-2 w-full">
    </div>
    <div class="w-full">
        <label for="">Your Message <span class="text-lg text-red-500">*</span></label> <br>
        <textarea name="" id="" cols="30" rows="5" class="bg-transparent outline-none border border-gray-500 focus:border-green rounded-sm p-2 w-full"></textarea>   
    </div>
    <button
    class="px-9 my-auto py-3 border-2 mr-auto capitalize bg-green rounded-tr-2xl rounded-bl-2xl flex items-center font-medium text-sm md:text-base border-green hover:duration-700 hover:bg-transparent">
    Send Your Message
  </button>
</form>   
</section>
@endsection