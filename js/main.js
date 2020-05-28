$(document).ready(function(){

    $("body").fadeIn(2200)


    $("#link_1").click(function(){
        classTester($("#link_1"))
    })

    $("#link_2").click(function(){
        classTester($("#link_2"))
    })

    $("#link_3").click(function(){
        classTester($("#link_3"))
    })

    $("#link_4").click(function(){
        classTester($("#link_4"))
    })

    function classTester(link) {
        if (link.hasClass('active'))
            console.log('nothing else to done')
        else 
            $("#link_1").removeClass('active')
            $("#link_2").removeClass('active')
            $("#link_3").removeClass('active')
            $("#link_4").removeClass('active')
            link.addClass('active')
    }

})


