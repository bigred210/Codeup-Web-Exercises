$(document).ready(function(){
"use strict";




    alert( 'The DOM has finished loading!' );


    var contents = $('h1').html();
    alert(contents);


   
    $('li').css('font-size','40px');
    $('h1').css('background-color','yellow');
    $('p').css('background-color','yellow');
    $('li').css('background-color','yellow');


    $('*').css('border', '1px solid grey');


    var $h1 = $('h1')
    $h1.on('click' ,function() {
        $('h1').css('background-color', 'grey');
    });


    var $p = $('p')
    $p.on('dblclick' ,function() {
        $('p').css('background-color', 'grey');
    });


    
    $('li').hover(
        function() {
            $(this).css('color', 'red');
        },
        function() {
            $(this).css('color', 'white');
        }
    );
    


    

});