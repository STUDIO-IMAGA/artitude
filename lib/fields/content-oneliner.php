<?

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c7423e5d742f',
	'title' => 'Oneliner Element',
	'fields' => array(
		array(
			'key' => 'field_5c7423ecf081f',
			'label' => 'Text',
			'name' => 'text',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '80',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 2,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5c9a16f5cdffa',
			'label' => 'Uitlijning',
			'name' => 'align',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'text-left' => 'Links',
				'text-center' => 'Midden',
				'text-right' => 'Rechts',
			),
			'allow_null' => 0,
			'default_value' => 'text-center',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => false,
	'description' => '',
	0 => false,
	'modified' => 1553602658,
));

endif;
