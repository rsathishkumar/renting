<?php
global $houzez_opt_name;

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Print Property', 'houzez' ),
    'id'     => 'property-print',
    'desc'   => '',
    'icon'   => 'el-icon-print el-icon-small',
    'fields'        => array(
        array(
            'id'        => 'print_page_logo',
            'url'       => true,
            'type'      => 'media',
            'title'     => esc_html__( 'Print Property Logo', 'houzez' ),
            'read-only' => false,
            'default'   => array( 'url' => HOUZEZ_IMAGE .'logo-houzez-color.png' ),
            'subtitle'  => esc_html__( 'Upload your custom site logo for print property.', 'houzez' ),
        ),
        array(
            'id'       => 'print_agent',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Agent', 'houzez' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez' ),
            'off'      => esc_html__( 'No', 'houzez' ),
        ),
        array(
            'id'       => 'print_description',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Description', 'houzez' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez' ),
            'off'      => esc_html__( 'No', 'houzez' ),
        ),
        array(
            'id'       => 'print_details',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Details', 'houzez' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez' ),
            'off'      => esc_html__( 'No', 'houzez' ),
        ),
        array(
            'id'       => 'print_features',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Features', 'houzez' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez' ),
            'off'      => esc_html__( 'No', 'houzez' ),
        ),
        array(
            'id'       => 'print_energy_class',
            'type'     => 'switch',
            'title'    => esc_html__( 'Energy Class', 'houzez' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez' ),
            'off'      => esc_html__( 'No', 'houzez' ),
        ),
        array(
            'id'       => 'print_floorplans',
            'type'     => 'switch',
            'title'    => esc_html__( 'Floor Plans', 'houzez' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez' ),
            'off'      => esc_html__( 'No', 'houzez' ),
        ),
        array(
            'id'       => 'print_gallery',
            'type'     => 'switch',
            'title'    => esc_html__( 'Gallery Images', 'houzez' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez' ),
            'off'      => esc_html__( 'No', 'houzez' ),
        ),
        array(
            'id'       => 'print_gr_code',
            'type'     => 'switch',
            'title'    => esc_html__( 'QR Code', 'houzez' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez' ),
            'off'      => esc_html__( 'No', 'houzez' ),
        ),
    )
));