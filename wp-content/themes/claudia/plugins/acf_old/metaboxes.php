<?php
// Register ACF Fields
if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array (
        'key' => 'group_5683294846afd',
        'title' => 'Defaults',
        'fields' => array (
            array (
                'key' => 'field_5683294d29566',
                'label' => 'Default Featured Image',
                'name' => 'mtm_default_featured_image',
                'type' => 'image',
                'instructions' => 'Optional: Set a default featured image for all posts without one',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_56a16a776c2b8',
                'label' => 'Social Accounts',
                'name' => 'mtm_default_social_accounts',
                'type' => 'repeater',
                'instructions' => 'Optional: Add all your social networks here. Type the name of the social network and the URL of your profile.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => 'field_56a16aaa6c2b9',
                'min' => '',
                'max' => '',
                'layout' => 'block',
                'button_label' => 'Add Social Network',
                'sub_fields' => array (
                    array (
                        'key' => 'field_56a16aaa6c2b9',
                        'label' => 'Social Network Name',
                        'name' => 'mtm_default_social_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => 40,
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => 'Twitter',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                        'readonly' => 0,
                        'disabled' => 0,
                    ),
                    array (
                        'key' => 'field_56a16ff56c2ba',
                        'label' => 'Social Network URL',
                        'name' => 'mtm_default_social_url',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => 60,
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => 'http://twitter.com/marktimemedia',
                    ),
                ),
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-defaults',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));
  
    acf_add_local_field_group(array (
            'key' => 'group_5a0b2bd4595ad',
            'title' => 'Font Family',
            'fields' => array (
                array (
                    'key' => 'field_5a0b2bd775f64',
                    'label' => 'Body Font',
                    'name' => 'body_font',
                    'type' => 'google_font_selector',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'include_web_safe_fonts' => 1,
                    'enqueue_font' => 1,
                    'default_font' => 'Droid Sans',
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-defaults',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
    ));
        
    
    acf_add_local_field_group(array (
            'key' => 'group_5a0b422bc8e9b',
            'title' => 'Typography Options',
            'fields' => array (
                array (
                    'key' => 'field_5a0b425e8d4b5',
                    'label' => 'Font size',
                    'name' => 'font_size',
                    'type' => 'text',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_5a0b426d8d4b6',
                    'label' => 'H1 Font Size',
                    'name' => 'h1_font_size',
                    'type' => 'text',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_5a0b42758d4b7',
                    'label' => 'H2 Font Size',
                    'name' => 'h2_font_size',
                    'type' => 'text',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_5a0b427b8d4b8',
                    'label' => 'H3 Font Size',
                    'name' => 'h3_font_size',
                    'type' => 'text',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_5a0b42808d4b9',
                    'label' => 'H4 Font Size',
                    'name' => 'h4_font_size',
                    'type' => 'text',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_5a0b42858d4ba',
                    'label' => 'H5 Font Size',
                    'name' => 'h5_font_size',
                    'type' => 'text',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-defaults',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
     ));
        
        
   
        
        acf_add_local_field_group(array (
            'key' => 'group_5a0da92adaf16',
            'title' => 'Copyright Section',
            'fields' => array (
                array (
                    'key' => 'field_5a0da985fc709',
                    'label' => 'Copyright Info',
                    'name' => 'copyright_info',
                    'type' => 'wysiwyg',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 1,
                    'delay' => 0,
                ),
                array (
                    'key' => 'field_5a0da9c3fc70a',
                    'label' => 'Background Color',
                    'name' => 'background_color',
                    'type' => 'color_picker',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '#000',
                ),
                array (
                    'key' => 'field_5a0da9c3fc70b',
                    'label' => 'Font Color',
                    'name' => 'font_color',
                    'type' => 'color_picker',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '#fff',
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-footer',
                    ),
                ),
            ),
            'menu_order' => 20,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));
        
        
            acf_add_local_field_group(array (
                'key' => 'group_5a0df29bd7fda',
                'title' => 'Pre Footer',
                'fields' => array (
                    array (
                        'key' => 'field_5a0df2ad17fcd',
                        'label' => 'Title color',
                        'name' => 'title_color',
                        'type' => 'color_picker',
                        'value' => NULL,
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '30',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#ffffff',
                    ),
                    array (
                        'key' => 'field_5a0df2e817fce',
                        'label' => 'Title mark color',
                        'name' => 'tilde_color',
                        'type' => 'color_picker',
                        'value' => NULL,
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '30',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#ffffff',
                    ),
                    array (
                        'key' => 'field_5a0df33f17fcf',
                        'label' => 'Text Color',
                        'name' => 'text_color',
                        'type' => 'color_picker',
                        'value' => NULL,
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '40',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#999',
                    ),
                    array (
                        'key' => 'field_5a0df36717fd0',
                        'label' => 'Background Color',
                        'name' => 'background_color_footer',
                        'type' => 'color_picker',
                        'value' => NULL,
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#1a1a1a',
                    ),
                    array (
                        'key' => 'field_5a0df44a1bcd3',
                        'label' => 'Link Color',
                        'name' => 'link_color',
                        'type' => 'color_picker',
                        'value' => NULL,
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '#999',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'acf-options-footer',
                        ),
                    ),
                ),
                'menu_order' => 10,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => 1,
                'description' => '',
            ));
            
        
    acf_add_local_field_group(array (
        'key' => 'group_55fafefc457dc',
        'title' => 'Header Settings',
        'fields' => array (
            array (
                'key' => 'field_55faff1263314',
                'label' => 'Header Logo',
                'name' => 'mtm_header_logo',
                'type' => 'image',
                'instructions' => 'Upload or select an image to be used as the header logo. If none is selected, the site name will be used instead.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_55faff1263314b',
                'label' => 'Mobile Logo',
                'name' => 'mtm_mobile_logo',
                'type' => 'image',
                'instructions' => 'Upload or select an image to be used as the mobile logo, which will replace the header logo on small screens. If none is selected, the original header logo (or site name) will be used.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_5a1f75135a886',
                'label' => 'Background Menu Color',
                'name' => 'background_menu_color',
                'type' => 'color_picker',
                'value' => NULL,
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array (
                'key' => 'field_56a171cab07fa',
                'label' => 'Header Text',
                'name' => 'mtm_header_text',
                'type' => 'wysiwyg',
                'instructions' => 'Extra text, like a phone number, address, or other information to show in the header. If none is entered, this field will be ignored in the layout.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),
            array (
                'key' => 'field_5a1caa80db170',
                'label' => 'Menu Responsive Options',
                'name' => 'menu_responsive_options',
                'type' => 'radio',
                'value' => NULL,
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array (
                    'full-screen' => 'Full Screen',
                    'right-position' => 'Right Position',
                ),
                'allow_custom' => 0,
                'save_custom' => 0,
                'default_value' => array (
                ),
                'layout' => 'vertical',
                'toggle' => 0,
                'return_format' => 'value',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-header',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));

 
        
        acf_add_local_field_group(array (
            'key' => 'group_5a17310108ea8',
            'title' => 'Header Type',
            'fields' => array (
                array (
                    'key' => 'field_5a173115de2b2',
                    'label' => 'Choose Header Type',
                    'name' => 'choose_header_type',
                    'type' => 'radio',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array (
                        'logo-left-menu-right-socials' => 'Logo Left - Menu Right - Socials',
                        'logo-center-menu-bottom' => 'Logo Center - Menu Bottom',
                        'logo-left-menu-right-top-socials' => 'Logo Left - Menu Right - Socials Top',
                    ),
                    'allow_null' => 0,
                    'other_choice' => 0,
                    'save_other_choice' => 0,
                    'default_value' => '',
                    'layout' => 'vertical',
                    'return_format' => 'value',
                ),
                array (
                    'key' => 'field_5a173152de2b3',
                    'label' => 'Socials',
                    'name' => 'socials',
                    'type' => 'repeater',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_5a173115de2b2',
                                'operator' => '==',
                                'value' => 'logo-left-menu-right-socials',
                            ),
                        ),
                        array (
                            array (
                                'field' => 'field_5a173115de2b2',
                                'operator' => '==',
                                'value' => 'logo-left-menu-right',
                            ),
                        ),
                    ),
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'block',
                    'button_label' => 'Add Social',
                    'sub_fields' => array (
                        array (
                            'key' => 'field_5a173171de2b5',
                            'label' => 'Social Network Name',
                            'name' => 'social_network_name',
                            'type' => 'text',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array (
                            'key' => 'field_5a17319ede2b6',
                            'label' => 'Social Network URL',
                            'name' => 'social_network_url',
                            'type' => 'url',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                        ),
                    ),
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-header',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));
            
            acf_add_local_field_group(array (
                'key' => 'group_5a1f65ca0a85f',
                'title' => 'Header Additional Information',
                'fields' => array (
                    array (
                        'key' => 'field_5a1f65d837345',
                        'label' => 'Email Info',
                        'name' => 'email_info',
                        'type' => 'text',
                        'value' => NULL,
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_5a1f65ff37346',
                        'label' => 'Phone Info',
                        'name' => 'phone_info',
                        'type' => 'text',
                        'value' => NULL,
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'acf-options-header',
                        ),
                    ),
                ),
                'menu_order' => 5,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => 1,
                'description' => '',
            ));
                    
       
    endif;