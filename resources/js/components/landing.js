import  'animate.css';
$(document).ready(function() {

    var isMovil = false;
    /* saber si viene de escritorio o movil */
    function myFunction(x) {
        if (x.matches) { // If media query matches
            isMovil = true;
        } else {
        }
    }

    var x = window.matchMedia("(max-width: 700px)");
    myFunction(x); // Call listener function at run time
    x.addListener(myFunction); // Attach listener function on state changes

    /*  menu */
    var menu_trigger = $("[data-card-menu]");
    var back_trigger = $("[data-card-back]");
    var back_trigger2 = $("[data-card-back2]");

    menu_trigger.click(function () {
        $(".card").toggleClass("show-menu");
    });

    back_trigger.click(function () {
        $(".card1").toggleClass("show-menu");
    });

    back_trigger2.click(function () {
        $(".card2").toggleClass("show-menu");
    });
    /*  menu */


    if (isMovil == false){




        var contAbout = 0;
        var contCriterio = 0;
        var contContact = 0;
        var contTeam = 0;
        var contTransaction = 0;

        var menu_about = $('#menu_about').val();
        var menu_criteria = $('#menu_criteria').val();
        var menu_contact = $('#menu_contact').val();
        var menu_team = $('#menu_team').val();
        var menu_transaction = $('#menu_transaction').val();



        $('#pagepiling').pagepiling({
            menu: '#menu',
            anchors: ['about', 'investment-criteria', 'the-team', 'transactions', 'contact'],
            sectionsColor: ['white', 'white', 'white', 'white', 'white'],
            navigation: {
                'position': 'right',
                'tooltips': [menu_about , menu_criteria, menu_team, menu_transaction, menu_contact]
            },
            //navigation: true,
            afterRender: function(){

            },
            onLeave: function(index, nextIndex, direction){

            },
            afterLoad: function(anchorLink, index){

                if(anchorLink == 'about'){
                    contAbout = contAbout + 1;
                    $('.about').show();
                    $('.criteria').hide();
                    $('.contact').hide();
                    $('.team').hide();
                    $('.transaction').hide();

                    if(contAbout == 1){
                        $('.about__title').addClass('animated fadeInUp');
                        $('.about__description').addClass('animated zoomInRight');
                        $('.about__box__description').addClass('animated fadeInUp');
                        $('.about__img').addClass('animated fadeInUp');
                    }

                }
                if(anchorLink == 'investment-criteria'){
                    contCriterio = contCriterio +1;

                    $('.about').hide();
                    $('.contact').hide();
                    $('.criteria').show();

                    if(contCriterio == 1){

                        $('.criteria__left').addClass('animated fadeInUp');
                        $('.criteria__list').addClass('animated fadeInUp');
                        $('.criteria__img').addClass('animated fadeInUp');
                    }
                }


                if (anchorLink == 'the-team') {
                    contTeam = contTeam + 1;
                    $('.team').show();
                    $('.criteria').hide();
                    $('.contact').hide();
                    $('.about').hide();
                    $('.transaction').hide();

                }

                if (anchorLink == 'transactions') {
                    $('.team').hide();
                    $('.criteria').hide();
                    $('.contact').hide();
                    $('.about').hide();
                    $('.transaction').show();

                    contTransaction = contTransaction +1 ;
                    if (contTransaction == 1) {
                        $('.transaction').addClass('animated fadeInUp');
                    }

                }

                if(anchorLink == 'contact'){
                    contContact = contContact +1;
                    $('.team').hide();
                    $('.criteria').hide();
                    $('.contact').show();
                    $('.about').hide();
                    $('.transaction').hide();


                    if(contContact == 1){
                        $('.contact__left__content').addClass('animated fadeInUp');
                        $('.contact-form').addClass('animated fadeInUp');
                    }
                }
            }
        });

        $('#moveUp').click(function(){
            $.fn.pagepiling.moveSectionUp();
        });

        $('#moveDown').click(function(){
            $.fn.pagepiling.moveSectionDown();
        });
    }else { //menu
        $('#pagepiling').hide();
        $('.logo').hide();
        $('.menu').hide();
        $('.footer').hide();

        var section = window.location.hash.substring(1);
        window.selectMenu = function (section) {


        }

    }

});
