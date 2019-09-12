import  'animate.css';
$(document).ready(function() {

    //AOS.init({disable: 'mobile'});
    var contCriterio = 0;
    var contConact = 0;

    $('#pagepiling').pagepiling({
        menu: '#menu',
        anchors: ['about', 'investment-criteria', 'contact', 'page4'],
        sectionsColor: ['white', 'white', 'white', 'white'],
        /*navigation: {
            'position': 'right',
            'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Page 4']
        },*/
        navigation: false,
        afterRender: function(){

        },
        onLeave: function(index, nextIndex, direction){

        },
        afterLoad: function(anchorLink, index){
            if(anchorLink == 'investment-criteria'){
                contCriterio = contCriterio +1;
                $('.contact__left').hide();
                $('.contact__right' +
                    '').hide();
                if(contCriterio == 1){
                    $('.criteria__left').show();
                    $('.criteria__list').show();
                    $('.criteria__img').show();

                    $('.criteria__left').addClass('animated fadeInUp');
                    $('.criteria__list').addClass('animated fadeInUp');
                    $('.criteria__img').addClass('animated fadeInUp');
                }
            }
            if(anchorLink == 'contact'){
                contConact = contConact +1;
                $('.contact__left').show();
                $('.contact__right').show();
                if(contConact == 1){
                    $('.contact__left').addClass('animated fadeInUp');
                    $('.contact__right').addClass('animated fadeInUp');
                }
            }
        }
    });


    /*
    * Internal use of the demo website
    */
    $('#showExamples').click(function(e){
        e.stopPropagation();
        e.preventDefault();
        $('#examplesList').toggle();
    });

    $('html').click(function(){

    });


    $('#moveUp').click(function(){
        $.fn.pagepiling.moveSectionUp();
    });

    $('#moveDown').click(function(){
        $.fn.pagepiling.moveSectionDown();
    });



});
