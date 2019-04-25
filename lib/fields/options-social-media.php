<?
if( function_exists('acf_add_local_field_group') ):
  acf_add_local_field_group(array(
    'key' => 'group_5c73ea3c59768',
    'title' => 'Social Media',
    'fields' => array(
      array(
        'key' => 'field_5c73ea42a4286',
        'label' => 'Social Media',
        'name' => 'social_media',
        'type' => 'repeater',
        'collapsed' => 'field_5c73ea50a4287',
        'layout' => 'table',
        'button_label' => 'Dienst toevoegen',
        'sub_fields' => array(
          array(
            'key' => 'field_5c73ea50a4287',
            'label' => 'Dienst',
            'name' => 'service',
            'type' => 'text',
            'instructions' => 'Voer hier de naam van de dienst in. (Bijvoorbeeld: facebook)',
          ),
          array(
            'key' => 'field_5c73ea50a4287',
            'label' => 'Dienst',
            'name' => 'service',
            'type' => 'text',
            'instructions' => 'Voer hier de naam van de dienst in. (Bijvoorbeeld: facebook)',
          ),
          array(
            'key' => 'field_5c73ea90a4288',
            'label' => 'Icon',
            'name' => 'icon',
            'type' => 'image',
            'instructions' => 'Upload hier het icoon voor de dienst.',
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          array(
            'key' => 'field_5c73ea90a4288',
            'label' => 'Icon',
            'name' => 'icon',
            'type' => 'image',
            'instructions' => 'Upload hier het icoon voor de dienst.',
            'return_format' => 'array',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          array(
            'key' => 'field_5c73eae1a4289',
            'label' => 'URL',
            'name' => 'url',
            'type' => 'text',
            'instructions' => 'Voer hier de URL in naar het profiel.',
          ),
          array(
            'key' => 'field_5c73eae1a4289',
            'label' => 'URL',
            'name' => 'url',
            'type' => 'text',
            'instructions' => 'Voer hier de URL in naar het profiel.',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'theme-options',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    0 => false,
    'modified' => 1552322033,
  ));
endif;
