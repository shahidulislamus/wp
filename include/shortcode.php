<?php

//basic concept to create shortcode
function my_shortcode(){
    extract(shortcode_atts(array(
        'type'  =>  '',         //hear "type" is a variable and hear you can put the default value which is work before the daynamic value come 
        'icon'  =>  '',         //hear "icon" is a variable and hear you can put the default value which is work before the daynamic value come 
        'text'  =>  '',         //hear "type" is a variable and hear you can put the default value which is work before the daynamic value come 
    ), $atts));
    
    return'<a href="'.$link.'" class="btn btn-'.$type.'" ><i class="fa fa-'.$icon.'"> </i> '.$text.'</a>';  //this is the return value where you must define the variable
    
}
add_shortcode('name_of_shortcode','my_shortcode');

//shortcode which is used to call this function
// [name_of_shortcode type="success" icon="facebook" text="this is a button"]

?>