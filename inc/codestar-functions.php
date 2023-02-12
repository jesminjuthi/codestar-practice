<?php 
if( class_exists( 'CSF' ) ) {

    $options = 'codestar_options';

    CSF::createOptions( $options, array(
      'menu_title'          => 'Option Panel',
      'menu_slug'           => 'option-panel',
      'framework_title'     => 'Options Panel',
      'footer_text'         => 'Developed by Jesmin Juthi',
      'show_reset_all'      => false,
      'show_reset_section'  => false,
      'show_search'         => false,
      'show_all_options'    => false
    ) );

    CSF::createSection( $options, array( 
      'title' => 'General Options',
      'id'    => 'general_opt'
    ));

    CSF::createSection( $options, array( 
      'title'   => 'Logo',
      'parent'  => 'general_opt',
      'fields'  => [
        [
          'title'   => 'Upload Logo',
          'id'      => 'logo',
          'type'    => 'media',
          'library' => 'image'
        ],
        [
          'title'   => 'Logo Size',
          'id'      => 'logo-size',
          'type'    => 'slider',
          'unit'    => '%',
          'step'    => 5,
          'min'     => 5,
          'max'     => 100,
          'output'  => '.logo img',
          'default' => 5
        ],
      ]
    ));

    CSF::createSection($options, array( 
      'title' => 'Copyright',
      'parent'  => 'general_opt',
      'fields'  => [
        [
          'title' => 'Copyright Info',
          'id'    => 'copyright',
          'type'  => 'wp_editor'
        ]
      ]
    ));

    CSF::createSection( $options, array(
      'title'  => 'Text Field',
      'fields' => array(
        array(
          'id'    => 'text',
          'type'  => 'text', 
          'title' => 'Heading',
        ),
      )
    ) );

    CSF::createSection( $options, array(
      'title'  => 'Textarea Field',
      'fields' => array(
        array(
          'id'    => 'textarea',
          'type'  => 'textarea',
          'title' => 'Paragraph',
        ),
      )
    ) );
    
    CSF::createSection( $options, array( 
      'title'   => 'Color',
      'fields'  => array( 
        array( 
          'title' => 'Background Color',
          'id'    => 'bg-color',
          'type'  => 'color'
        ),
        array( 
          'title' => 'Text Color',
          'id'    => 'color',
          'type'  => 'color'
        ),
      )
    ));

    CSF::createSection( $options, array(
      'title'   => 'Hide or Show',
      'fields'  => array(
          array(
            'id'      => 'btn-hs',
            'type'    => 'checkbox',
            'title'   => 'Hide or Show Button',
            'label'   => 'Do you want to show button?',
            'default' => true
          ),
          array(
            'id'      => 'btn-label',
            'type'    => 'text',
            'title'   => 'Button Label',
          ),
      )
    ));

    CSF::createSection( $options, array( 
      'title'   => 'Share Option',
      'id'      => 'share-opt',
      'fields'  => [
        [
          'title' => 'Hide or Show Share Buttons',
          'id'    => 'hs_share_btn',
          'type'  => 'switcher',
          'text_on' => 'Show',
          'text_off'  => 'Hide',
          'text_width'  => 80,
          'label' => 'Do you want to hide it?',
          'default' => true
        ],
        [
          'title' => 'Icon Color',
          'id'    => 'social_icon_color',
          'type'  => 'color'
        ],
        [
          'title'   => 'Add social share links',
          'id'      => 'share-btn-grp',
          'type'    => 'group',
          'fields'  => [
            [
              'title' => 'Media Name',
              'id'    => 'media_name',
              'type'  => 'text'
            ],
            [
              'title' => 'Select Social Icon',
              'id'    => 'icon',
              'type'  => 'icon'
            ],
            [
              'title'   => 'Add Social Link',
              'id'      => 'social_link',
              'type'    => 'text',
              'default' => '#'
            ],
          ]
        ]
      ]
    ));

    CSF::createSection($options, array( 
      'title' => 'Typography',
      'parent'    => 'general_opt',
      'fields'  => [
        [
          'title' => 'Typography for Paragraph',
          'id'    => 'typo',
          'type'  => 'typography',
          'output'  => '.para'
        ],
      ]
    ));

    CSF::createSection($options, array( 
      'title' => 'Footer Background',
      'parent' => 'general_opt',
      'fields' => [
        [
          'title' => 'Change footer background',
          'id'  => 'footer-bg',
          'type'  => 'background',
          'output'  => 'footer'
        ]
      ]
    ));

    CSF::createSection($options, array(
      'title' => 'Team Section',
      'id'    => 'team',
      'fields'  => [
        [
          'title' => 'Team Section Title',
          'id'    => 'team_sec_title',
          'type'  => 'text'
        ],
        [
          'title' => 'Team Section Subtitle',
          'id'    => 'team_sub',
          'type'  => 'textarea'
        ],
        [
          'title' => 'Team Section Background',
          'id'    => 'team-bg',
          'type'  => 'background',
          'output'  => '.outer-container'
        ],
        [
          'title' => 'Add Team Member',
          'id'    => 'team_member',
          'type'  => 'group',
          'fields'  => [
            [
              'id'  => 'team_name',
              'title' => 'Name',
              'type'  => 'text'
            ],
            [
              'id'  => 'team_desc',
              'title' => 'Designation',
              'type'  => 'text'
            ],
            [
              'id'  => 'team_img',
              'title' => 'Profile Picture',
              'type'  => 'media'
            ],
            [
              'id'  => 'social_icons',
              'title' => 'Social Icons',
              'type'  => 'group',
              'fields'  => [
                [
                  'id'  => 'team_social_text',
                  'title' => 'Media Name',
                  'type'  => 'text'
                ],
                [
                  'id'  => 'team_social_icon',
                  'title' => 'Select Icon',
                  'type'  => 'icon'
                ],
                [
                  'id'  => 'sl',
                  'title' => 'Insert Link',
                  'type'  => 'text',
                  'default' => '#'
                ],
              ]
            ]
          ]
        ]
      ]
    ));

    CSF::createSection($options, array( 
      'title' => 'All Products',
      'id'    => 'products_select',
      'fields'  => [
        [
          'title' => 'All Products',
          'id'    => 'product_items',
          'type'  => 'select',
          'placeholder' => 'Select a product',
          'options' => get_products_array(),
        ]
      ]
    ));

  
    
    























  
  }

  function get_products_array() {
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => -1,
    );
    $products = get_posts( $args );
    $product_array = array();
    foreach ( $products as $product ) {
      $product_array[ $product->ID ] = $product->post_title;
    }
    return $product_array;
  }





























?>