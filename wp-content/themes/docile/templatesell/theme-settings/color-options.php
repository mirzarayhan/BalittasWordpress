<?php 
/* Primary Color Section Inside Core Color Option */
$wp_customize->add_setting( 'docile_options[docile_primary_color]',
    array(
        'default'           => $default['docile_primary_color'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(                 
        $wp_customize,
        'docile_options[docile_primary_color]',
        array(
            'label'       => esc_html__( 'Primary Color', 'docile' ),
            'description' => esc_html__( 'Change your whole site color from here. More are available in premium version.', 'docile' ),
            'section'     => 'colors',  
        )
    )
);