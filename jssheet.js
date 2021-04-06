var tot=0;
$(document).ready(function(){
    var id;
    //var nn=0;

    $(".home").click(function(){
        $(location).attr('href',"../index.php"); 
    });

    $("#myOverlay").css("display","block");
    $("#myOverlay").hide();

    // apri menù overlay
    $("#apri").click(function(){
        $("#myOverlay").show("slow");
        $("#myTopbar").hide("slow");
    });
    $(".chiudi").click(function(){
        $("#myOverlay").hide("slow");
        $("#myTopbar").show("slow");
    });

    //cambio colore menù
    $(window).scroll(function(){
        if($(window).scrollTop()>3200) {
            $("#myTopbar").addClass("is-fixed-top");
            $("#myTopbar").css("background-color","white");
            $("#myTopbar p").removeClass("has-text-info");
            $("#myTopbar p").addClass("has-text-success");
        }
        else if ($(window).scrollTop()>2600){
            $(".expertise .columns .column div:nth-child(2)").addClass(" animate__slideInUp  animate__fadeIn");
        }
        else if($(window).scrollTop()>2400) {
            $("#myTopbar").addClass("is-fixed-top");
            $("#myTopbar").css("background-color","white");
            $("#myTopbar p").removeClass("has-text-danger has-text-success");
            $("#myTopbar p").addClass("has-text-info");

            $(".expertise .columns .column div:first-child").addClass(" animate__slideInUp  animate__fadeIn");
        }
        else if ($(window).scrollTop()>1300){
            $("#myTopbar").addClass("is-fixed-top");
            $("#myTopbar").css("background-color","white");
            $("#myTopbar p").removeClass("has-text-primary has-text-info")
            $("#myTopbar p").addClass("has-text-danger");
            /*
            num = 0;
            stringa = "#progress1";
            tot = 90;
            id = setInterval(fillProgress, 10);*/
        }
        else if($(window).scrollTop()>200) {
            $("#myTopbar").addClass("is-fixed-top");
            $("#myTopbar").css("background-color","white");
            $("#myTopbar p").removeClass("has-text-white has-text-danger");
            $("#myTopbar p").addClass("has-text-primary");
        }
        else {
            $("#myTopbar").removeClass("is-fixed-top");
            $("#myTopbar").css("background-color","transparent");
            $("#myTopbar p").removeClass("has-text-primary has-text-danger");
            $("#myTopbar p").addClass("has-text-white");
        }
    });

    //overlay quadrati experiences
    $(".data").mouseenter(function(){
        $(this).css("opacity",1);
    });
    $(".data").mouseleave(function(){
        $(this).css("opacity",0);
    });


    //select all years experiences
    $("#selectAll").click(function() {
        $("input[type=checkbox]").prop("checked", $(this).prop("checked"));
    }); 
    $("input[type=checkbox]").click(function() {
        if (!$(this).prop("checked")) {
            $("#selectAll").prop("checked", false);
        }
    });

    //apri overlay immagine ingrandita
    $(".ingrandibile").click(function() {
        console.log("ciao");
        var classi =  $(this).attr("class").split(/\s+/);;
        var classe = "#" + classi[1];
        $(classe).addClass("is-active");
    });
    //chiudi overlay immagine ingrandita
    $(".modal-close").click(function() {
        $(".modal").removeClass("is-active");
    });

    var num=0;
    function fillProgress() {
        if(num < tot){
            num++;
            $(stringa).val(num);
        }
        else clearInterval(id);
    }
});

