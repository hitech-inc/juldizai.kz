$('.partners').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:4
        }
    },
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});


/*$("#next").click(function() {
    $('#my-item1').css('animation','activeSlide    1s ease');
    $('#my-item2').css('animation','deactiveSlide  1s ease');
    $('#my-item3').css('animation','preactiveSlide 1s ease');
    $('#my-item3').attr('id','my-item4');
    $('#my-item2').attr('id','my-item3');
    $('#my-item1').attr('id','my-item2');
    $('#my-item4').attr('id','my-item1');
})


$('input[type="range"]').change(function(e){
         var val = $(this).val();
         if(val == 1){
            $('#my-item1').css('animation','activeSlide    1s ease');
            $('#my-item2').css('animation','deactiveSlide  1s ease');
            $('#my-item3').css('animation','preactiveSlide 1s ease');
            $('#my-item3').attr('id','my-item4');
            $('#my-item2').attr('id','my-item3');
            $('#my-item1').attr('id','my-item2');
            $('#my-item4').attr('id','my-item1');
         }
         if(val == 2){
            $('#my-item1').css('animation','activeSlide    1s ease');
            $('#my-item2').css('animation','deactiveSlide  1s ease');
            $('#my-item3').css('animation','preactiveSlide 1s ease');
            $('#my-item3').attr('id','my-item4');
            $('#my-item2').attr('id','my-item3');
            $('#my-item1').attr('id','my-item2');
            $('#my-item4').attr('id','my-item1');
         }
         if(val == 3){
            $('#my-item1').css('animation','activeSlide    1s ease');
            $('#my-item2').css('animation','deactiveSlide  1s ease');
            $('#my-item3').css('animation','preactiveSlide 1s ease');
            $('#my-item3').attr('id','my-item4');
            $('#my-item2').attr('id','my-item3');
            $('#my-item1').attr('id','my-item2');
            $('#my-item4').attr('id','my-item1');
         }
    
    
});*/

var scrollHeight = 260,
    numberOfSlides = $('.my-item').length;
var topSlide = "0",
    centerSlide = "20%",
    bottomSlide = "40%",
    hideSlide = "100%";
var topId = 0,
    centerId = 1,
    bottomId = 2,
    hideId = 3;
var prevY = 0;
for(i = 0; i < numberOfSlides; i++){
    $('.my-item:eq('+i+')').attr('id',"sliderItem-" + i);
    console.log($('.my-item:eq('+i+')').attr('id'));

}


/*******DEFAULT SLIDE POSITIONS *****************/

$('.my-item').css('transition','top 0.5s ease, width 0.5s ease');


$('#sliderItem-'+ topId).css({'top': topSlide,
                             'width': "97%",
                            'z-index':'4',
                            '-webkit-filter': 'grayscale(100%)'});
$('#sliderItem-'+ centerId).css({'top': centerSlide,
                             'width': "100%",
                            'z-index':'6',
                            '-webkit-filter': 'unset'});
$('#sliderItem-'+ bottomId).css({'top': bottomSlide,
                             'width': "97%",
                             'z-index':'3',
                            '-webkit-filter': 'grayscale(100%)'});
$('#sliderItem-'+ hideId).css({'top': hideSlide,
                             'width': "90%",
                             'z-index':'2',
                            '-webkit-filter': 'grayscale(100%)'});

/***********DRAG SCROLL ***************/
$("#scroll-bar").draggable({
    containment: "#scroll-bar-wrap",
    axis: "y",
    start: function() {
        console.log('start');
    },
    drag: function() {
        $(".points").show(200);
    },
    stop: function() {
        $(".points").hide(200);
        var position = $(this).position();
        var y = position.top/scrollHeight*100;
        console.log(y);
        if(y >= 0 && y <= 13) {
            var Y = "0%";
            topId = 0,
            centerId = 1,
            bottomId = 2,
            hideId = 3;
        }
        if(y > 13 && y <= 48) {
            var Y = "26%";
            topId = 1,
            centerId = 2,
            bottomId = 3,
            hideId = 0;
        }
        if(y > 48 && y <= 87) {
            var Y = "56%";
            topId = 2,
            centerId = 3,
            bottomId = 0,
            hideId = 1;
        }
        if(y > 87 && y <= 105) {
            var Y = "84%";
            topId = 3,
            centerId = 0,
            bottomId = 1,
            hideId = 2;
        }
        $('#sliderItem-'+ topId).css({'top': topSlide,
                                     'width': "97%",
                                    'z-index':'4',
                                    '-webkit-filter': 'grayscale(100%)'});
        $('#sliderItem-'+ centerId).css({'top': centerSlide,
                                     'width': "100%",
                                    'z-index':'6',
                                    '-webkit-filter': 'unset'});
        $('#sliderItem-'+ bottomId).css({'top': bottomSlide,
                                     'width': "97%",
                                     'z-index':'3',
                                    '-webkit-filter': 'grayscale(100%)'});
        $('#sliderItem-'+ hideId).css({'top': hideSlide,
                                     'width': "90%",
                                     'z-index':'2',
                                    '-webkit-filter': 'grayscale(100%)'});
        $('#scroll-bar').css('top', Y);

    }
});

/*
function BubbleSort(A)       // A - массив, который нужно
{                            // отсортировать по возрастанию.
    var n = A.length;
    for (var i = 0; i < n-1; i++)
     { for (var j = 0; j < n-1-i; j++)
        { if (A[j+1] < A[j])
           { var t = A[j+1]; A[j+1] = A[j]; A[j] = t; }
        }
     }                     
    return A;    // На выходе сортированный по возрастанию массив A.
}
*/