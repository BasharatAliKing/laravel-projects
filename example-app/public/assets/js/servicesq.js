
$(document).ready(function(){
    $('#readmore-ser').hide()
    $('#readmore-btnser').click(function(){
        $('#readmore-ser').fadeIn("slow");
      });
      $('#close-ser').click(function () {
        $('#readmore-ser').hide("slow");
        })
    // Question 1
    $("#question-1").click(function(){
        $(".para-1").slideToggle("slow");
        $("#icon-plusone").toggleClass('fa-plus fa-minus');
        // $('#icon-plustwo').removeClass().addClass('fa-solid fa-plus ml-auto font-bold');
        // $('#para-2').empty();
    });
    // Question 2
    $("#question-2").click(function(){
        $(".para-2").slideToggle("slow");
        $("#icon-plustwo").toggleClass('fa-plus fa-minus');
        // $('#icon-plusone').removeClass().addClass('fa-solid fa-plus ml-auto font-bold');
        // $('#para-1').hide("slow");
    });
    $("#question-3").click(function(){
        $(".para-3").slideToggle("slow");
        $("#icon-plusthree").toggleClass('fa-plus fa-minus');
        // $('#icon-plusone').removeClass().addClass('fa-solid fa-plus ml-auto font-bold');
        // $('#para-1').hide("slow");
    });
    $("#question-4").click(function(){
        $(".para-4").slideToggle("slow");
        $("#icon-plusfour").toggleClass('fa-plus fa-minus');
        // $('#icon-plusone').removeClass().addClass('fa-solid fa-plus ml-auto font-bold');
        // $('#para-1').hide("slow");
    });
    $("#question-5").click(function(){
        $(".para-5").slideToggle("slow");
        $("#icon-plusfive").toggleClass('fa-plus fa-minus');
        // $('#icon-plusone').removeClass().addClass('fa-solid fa-plus ml-auto font-bold');
        // $('#para-1').hide("slow");
    });
    $("#question-6").click(function(){
        $(".para-6").slideToggle("slow");
        $("#icon-plussix").toggleClass('fa-plus fa-minus');
        // $('#icon-plusone').removeClass().addClass('fa-solid fa-plus ml-auto font-bold');
        // $('#para-1').hide("slow");
    });
})