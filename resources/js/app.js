/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*
const app = new Vue({
    el: '#app',
});
*/

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

/* animation*/
function toggle() {
    var left = document.querySelector('.about__box');

    left.classList.toggle('about__box__hidden');
    left.classList.toggle('about__box__show');
}

/* animation*/

function onReady(callback) {
    if(isMovil === true){
        $('.movil').hide();
    }
    var intervalId = window.setInterval(function() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            $('.about__title').addClass('animated fadeInUp');
            $('.about__description').addClass('animated zoomInRight');
            $('.about__box__description').addClass('animated fadeInUp');
            $('.about__img').addClass('animated fadeInUp');

            if(isMovil === true){
                $('.navbar').show();
                $('.movil').show();
            }
            window.clearInterval(intervalId);
            callback.call(this);

        }
    }, 2000);
}

function setVisible(selector, visible) {

    document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
    //fin callback
    setVisible('.intro', false);
    if(isMovil === true){
        $('.movil').show();
    }else{
        $('.movil').hide();
    }
    toggle();
});

$(document).ready(function () {
    /* acordeon*/
    $(".expand").on( "click", function() {
        $(this).next().slideToggle(200);
        var $expand;
        $expand = $(this).find(">:first-child");

        if($expand.text() == "+") {
            $expand.text("-");
        } else {
            $expand.text("+");
        }
    });
/* acordeon*/



});


require('./components/landing');
require('./components/input_materialize');
require('./components/contact');
