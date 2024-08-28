$(document).ready(function(){
    $('#menu-navbar').click(function(){
        $('#res-navbar').slideToggle("slow");
        $('#menu-navbar').toggleClass('fa-xmark fa-bars');
    });
    $('#mode').click(function(){
        $(this).toggleClass('fa-moon fa-sun');
        $('#screen').toggleClass('light dark')
    });
    $('#search').click(function(){
        $(".search-menu").fadeIn("slow");
    });
    $('#seach-menuclose').click(function() {
        $('.search-menu').hide();
      })
 });
const mode=document.getElementById("mode");
const navbar=document.getElementById("navbar");
const menunavbar=document.getElementById("menu-navbar");
const resnavbar=document.getElementById("res-navbar");
const mainscreen=document.getElementById("screen");
const navlogo=document.getElementById("nav-logo");
document.addEventListener("scroll",(e)=>{
    e.preventDefault();
    console.log("Scrolled....");
    if(window.scrollY>10){
     navbar.style="background-color:#00b243";
     navlogo.innerHTML="<img src='/assets/images/Logo_Dark_Blue.png' alt=''>";
    }else{
        navbar.style="md:background-color:transparent";
        navlogo.innerHTML="<img src='/assets/images/Logo_white.png' alt=''>";
    }
});
window.addEventListener("resize",(e)=>{
    e.preventDefault();
    console.log("Screen Resizesss....")
    if(window.innerWidth < 640){
        navlogo.innerHTML="<img src='/assets/images/Logo_Dark_Blue.png' alt=''>";
     }
})