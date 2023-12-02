<?php 

function tee_customizer ($wp_customize) {
    // copyright section
    // the class calls the object add_section from the admin side 
    $wp_customize -> add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright settings',
            'description' => 'Copyright settings description.'
        )
    );

    // add setting for the customiser 
    // two arguments. The name of the settings and the array of arguments 
    // type is theme mofication
    // sanitise_callback is to sanitise what the user does and makesure we take care of them doing the wrong thing i.e entering text instead of number in a field

    $wp_customize -> add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All right reserved',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    // add control
    // pass the name of the setting to which this control is linked to - set_copyright
    // array argument one is a label, second is the description and the third is the section the control is linked to sec_copyright, last one is the type of control i am building 
    // this can be a text, textarea, checkbox etc
    $wp_customize -> add_control(
        'set_copyright',
        array(
          'label' => 'Copyright Information',
          'description' => 'Please type your copyright here',
          'section' => 'sec_copyright',
          'type' => 'text',
        )
    );
    
}
// fire it on a hook called customize_register and the name of the function 
add_action('customize_register', 'tee_customizer');
