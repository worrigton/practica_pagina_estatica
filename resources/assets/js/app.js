
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



import VueForm from 'vue-form';
import Toasted from 'vue-toasted';
import VueIziToast from 'vue-izitoast';
import "izitoast/dist/css/iziToast.css";


window.Vue = require('vue');

Vue.use(VueForm);
//Vue.use(VueForm, options);

Vue.use(Toasted)
//Vue.use(Toasted, Options)

Vue.use(VueIziToast);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('about'      , require('./components/about.vue'));
Vue.component('services'   , require('./components/services.vue'));
Vue.component('contact'    , require('./components/forms/contact.vue'));
Vue.component('techniques' , require('./components/techniques.vue'));


const app = new Vue({
    el: '#app',
    created: function() {
    	/*$('.carousel').carousel({
		  interval: 2000
		})*/
        new WOW().init();
        $( ".wow" ).addClass( "fadeInUp" )		
    },
    mounted: function(){
    	$('.carousel').carousel({
		  interval: 5000
		})
    	$('.dropdown-toggle').dropdown()

        $(".button-collapse").sideNav();            
            var sideNavScrollbar = document.querySelector('.custom-scrollbar');
            Ps.initialize(sideNavScrollbar);     

            $(window).scroll(function(){                 
                $('.timeline-animated li').each(function(){
                    var scrollTop     = $(window).scrollTop(),
                        elementOffset = $(this).offset().top,
                        distance      = (elementOffset - scrollTop),
                            windowHeight  = $(window).height(),
                            breakPoint    = windowHeight*0.9;

                        if(distance > breakPoint) {
                            $(this).addClass("more-padding");   
                        }  if(distance < breakPoint) {
                            $(this).removeClass("more-padding");    
                        }
                });
            });
         new WOW().init();
         $( ".wow" ).addClass( "fadeInUp" )

    }


});
