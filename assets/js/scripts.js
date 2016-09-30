/*
**************************************************************************
  (c) Raffaele Ficcadenti 
  Maggio 2016
  raffaele.ficcadenti@gmail.com

  File: script.js
  Descr:    
************************************************************************** 
*/

$(function() {

    function toggleChevron(e) {
        $(e.target)
                .prev('.panel-heading')
                .find("i")
                .toggleClass('rotate-icon');
        $('.panel-body.animated').toggleClass('zoomIn zoomOut');
    }
    
    $('#accordion').on('hide.bs.collapse', toggleChevron);
    $('#accordion').on('show.bs.collapse', toggleChevron);

    var urlmenu = document.getElementById( 'selectLang' );
    
    urlmenu.onchange = function() 
    {
      window.open( this.options[ this.selectedIndex ].value , "_self");
    };
});

/* Slider */
$(window).load(
        function() 
        {
            $('#main-slider').flexslider(
            {
             animation: "slide", /*or fade*/
             useCSS: false
            });
        }

);

/* FancyBox  */
$('.fancybox-thumbs').fancybox({
        openEffect  : 'fade',
        closeEffect : 'fade',
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : true,
        arrows    : false,
        nextClick : true,

        helpers : {
          title : {
            type: 'inside'
          },
          thumbs : {
            width  : 50,
            height : 50
          }
            
        }
      });



/* Validazione form */
$(document).ready(function(){
         
    var panels = $('.vote-results');
    var panelsButton = $('.dropdown-results');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
           if(idFor.is(':visible'))
            {
                currentButton.html('Hide Results');
            }
            else
            {
                currentButton.html('View Results');
            }
        })
    });

         // browser window scroll (in pixels) after which the "back to top" link is shown
          var offset = 300,
            //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
            offset_opacity = 1200,
            //duration of the top scrolling animation (in ms)
            scroll_top_duration = 600,
            //grab the "back to top" link
            $back_to_top = $('.cd-top');

          //hide or show the "back to top" link
          $(window).scroll(function(){
            ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if( $(this).scrollTop() > offset_opacity ) 
            { 
                $back_to_top.addClass('cd-fade-out');
            }

            if ($(window).scrollTop() > 50)
            {
                $('.navbar-default').css('background','rgb(255, 255, 255)').stop().animate({"opacity":".8"},100)
            }
            else if ($(window).scrollTop() < 50)
            {
                $('.navbar-default').css('background','rgb(255, 255, 255)').stop().animate({"opacity":"1"},100)
            }

          });

          //smooth scroll to top
          $back_to_top.on('click', function(event){
            event.preventDefault();
            $('body,html').animate({
              scrollTop: 0 ,
              }, scroll_top_duration
            );
          });
}); 

$(window).load(function()
{
      $('.flexslider').flexslider(
      {
        animation: "slide",
        useCSS: true,
        controlNav: true, 
       
        start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
        before: function(){captionMoveOut();},           //Callback: function(slider) - Fires asynchronously with each slider animation
        after: function(){captionMoveIn();},            //Callback: function(slider) - Fires after each slider animation completes
        end: function(){},              //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
        added: function(){},            //{NEW} Callback: function(slider) - Fires after a slide is added
        removed: function(){} 
      });

      $('.flex-caption').hide();
      $('.flex-caption').fadeIn(2000);
    });

function captionMoveIn() 
{
    var randNumX = Math.round(Math.random() * 80);
    var randNumY = Math.round(Math.random() * 80);

    $('.flex-caption')
    .animate({top: randNumX +"%"},0)
    .animate({right: randNumY +"%"},0)
    .fadeIn(2000);
};

function captionMoveOut() {
    $('.flex-caption')
    .animate({top: "-40%"},700)
    .fadeOut("normal")
  ;};

// Ripple-effect animation
(function($) {
    $(".ripple-effect1").click(function(e){
        var rippler = $(this);

        // create .ink element if it doesn't exist
        if(rippler.find(".ink").length == 0) {
            rippler.append("<span class='ink'></span>");
        }

        var ink = rippler.find(".ink");

        // prevent quick double clicks
        ink.removeClass("animate");

        // set .ink diametr
        if(!ink.height() && !ink.width())
        {
            var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
            ink.css({height: d, width: d});
        }

        // get click coordinates
        var x = e.pageX - rippler.offset().left - ink.width()/2;
        var y = e.pageY - rippler.offset().top - ink.height()/2;

        // set .ink position and add class .animate
        ink.css({
          top: y+'px',
          left:x+'px'
        }).addClass("animate");
    })
})(jQuery);

    // add the animation to the popover
    $('a[rel=popover]').popover().click(function(e) {
        e.preventDefault();        
         var open = $(this).attr('data-easein');
        if(open == 'shake') {
                  $(this).next().velocity('callout.' + open);
            } else if(open == 'pulse') {
              $(this).next().velocity('callout.' + open);
            } else if(open == 'tada') {
                $(this).next().velocity('callout.' + open);
            } else if(open == 'flash') {
                  $(this).next().velocity('callout.' + open);
            }  else if(open == 'bounce') {
                 $(this).next().velocity('callout.' + open);
            } else if(open == 'swing') {
                 $(this).next().velocity('callout.' + open);
            }else {
             $(this).next().velocity('transition.' + open); 
            }
      
      
                
    });


   // add the animation to the modal
   /*
$( ".modal" ).each(function(index) {
   $(this).on('show.bs.modal', function (e) {
 var open = $(this).attr('data-easein');
     if(open == 'shake') {
                 $('.modal-dialog').velocity('callout.' + open);
            } else if(open == 'pulse') {
                 $('.modal-dialog').velocity('callout.' + open);
            } else if(open == 'tada') {
                 $('.modal-dialog').velocity('callout.' + open);
            } else if(open == 'flash') {
                 $('.modal-dialog').velocity('callout.' + open);
            }  else if(open == 'bounce') {
                 $('.modal-dialog').velocity('callout.' + open);
            } else if(open == 'swing') {
                 $('.modal-dialog').velocity('callout.' + open);
            }else {
              $('.modal-dialog').velocity('transition.' + open);
            }
}); 
});*/
