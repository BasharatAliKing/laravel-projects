<!--Navbar starts here-->
<nav id="navbar" class="text-white bg-green md:bg-transparent py-3 fixed z-50 w-full">
    <div class="container flex items-center">
      <a href="home" id="nav-logo" class="hidden md:flex w-[35%] lg:w-[15%]"><img src="/assets/images/Logo_white.png"  alt=""></a>
      <a href="home" id="nav-logo" class=" md:hidden w-[35%] lg:w-[15%]"><img src="/assets/images/Logo_Dark_Blue.png"  alt=""></a>
      <ul class="hidden lg:flex gap-7 mx-auto ">
        <li class="flex gap-[2px]  items-center text-base font-medium  cursor-pointer active"><a href="home">Home</a>
        </li>
        <li class="flex gap-[2px] nav items-center text-base font-medium  cursor-pointer"><a href="about">About</a>
        </li>
        <li class="flex gap-[2px] nav items-center text-base font-medium  cursor-pointer"><a href="services">Services</a>
        </li>
        <li class="flex gap-[2px] nav items-center text-base font-medium  cursor-pointer"><a href="portfolio">Portfolio</a></li>
        <li class="flex gap-[2px] nav items-center text-base font-medium  cursor-pointer"><a href="blog">Blog</a>
        </li>
        <li class="flex gap-[2px] nav items-center text-base font-medium  cursor-pointer"><a href="contacts">Contact</a>
        </li>
      </ul>
      <div class="ml-auto flex items-center gap-5 text-xl">
        <i id="search" class="fa-solid fa-magnifying-glass text-xl"></i>
        <div style="display: none;" class="search-menu h-screen w-full z-20 bg-[#123456cf] absolute left-0 top-0 flex gap-5 items-center justify-center">
          <div class="flex flex-col gap-2">
            <i id="seach-menuclose" class="fa-solid fa-close text-2xl ml-auto hover:duration-500 hover:text-[#00b243]"></i>
            <input type="search" class="bg-transparent p-2 md:p-3 text-white border border-gray-400 outline-none focus:border-green rounded-sm">
          </div>
        
        </div>
        <i id="mode" class="fa-solid fa-sun"></i>
        <i id="menu-navbar" class="fa-solid fa-bars text-2xl lg:hidden"></i>
      </div>
    </div>
  </nav>
  <!--Responcive menu navbar-->
  <ul id="res-navbar" style="display: none;"
    class="fixed z-10  bg-green mt-[57px] w-full flex flex-col gap-4 items-center py-5">
    <li class="flex gap-[2px]  items-center text-base font-medium text-white cursor-pointer "><a
        href="home">Home</a></li>
    <li class="flex gap-[2px] nav items-center text-base font-medium text-white cursor-pointer"><a
        href="about">About</a></li>
    <li class="flex gap-[2px] nav items-center text-base font-medium text-white cursor-pointer"><a
        href="services">Services</a></li>
    <li class="flex gap-[2px] nav items-center text-base font-medium text-white cursor-pointer"><a
        href="portfolio">Portfolio</a></li>
    <li class="flex gap-[2px] nav items-center text-base font-medium text-white cursor-pointer"><a
        href="blog">Blog</a></li>
    <li class="flex gap-[2px] nav items-center text-base font-medium text-white cursor-pointer"><a
        href="contacts">Contact</a></li>
  </ul>