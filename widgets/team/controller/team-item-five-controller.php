<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Elementor\Controls_Manager;
use Elementor\Repeater;
$suffix = '_five';

$this->start_controls_section(
	'section_team_member'.$suffix,
	array(
		'label'     => __('Team Member', 'absolute-addons'),
		'condition' => [ 'team_style_variation' => 'five' ],
	)
);

$this->add_control(
	'team_member_image'.$suffix,
	array(
		'label'     => esc_html__('Team Member Image', 'absolute-addons'),
		'type'      => Controls_Manager::MEDIA,
		'default'   => [
			'url' => absp_get_default_placeholder(),
		],
		'condition' => [ 'team_style_variation' => 'five' ],
	)
);

$this->add_control(
	'team_member_name'.$suffix,
	array(
		'label'       => esc_html__('Name', 'absolute-addons'),
		'type'        => Controls_Manager::TEXT,
		'default'     => __('Harriey Adams', 'absolute-addons'),
		'placeholder' => __('Type your Name', 'absolute-addons'),
		'condition'   => [ 'team_style_variation' => 'five' ],
	)
);

$this->add_control(
	'team_member_designation'.$suffix,
	[
		'label'   => esc_html__('Member designation', 'absolute-addons'),
		'type'    => Controls_Manager::TEXT,
		'default' => 'UI DESIGNER',
	]
);

$this->add_control(
	'team_member_about_label'.$suffix,
	[
		'label'       => __( 'About label', 'absolute-addons' ),
		'type'        => Controls_Manager::TEXT,
		'default'     => __( 'About', 'absolute-addons' ),
		'placeholder' => __( 'Type your title here', 'absolute-addons' ),
	]
);

$this->add_control(
	'team_member_about'.$suffix,
	[
		'label'     => esc_html__('About', 'absolute-addons'),
		'type'      => Controls_Manager::WYSIWYG,
		'default'   => 'At Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.',
		'condition' => [ 'team_style_variation' => 'five' ],
	]
);

$this->end_controls_section();

//Add Social Profile Control
$this->start_controls_section(
	'team_member_social_profile'.$suffix,
	array(
		'label'     => __('Social Profile', 'absolute-addons'),
		'tab'       => Controls_Manager::TAB_CONTENT,
		'condition' => [ 'team_style_variation' => 'five' ],
	));

$this->add_control(
	'team_member_social_profile_title'.$suffix,
	[
		'label'       => __( 'Social Title', 'absolute-addons' ),
		'type'        => Controls_Manager::TEXT,
		'default'     => __( 'Connect me:', 'absolute-addons' ),
		'placeholder' => __( 'Type your title here', 'absolute-addons' ),
	]
);

$repeater = new Repeater();

$repeater->add_control(
	'team_member_social_icon'.$suffix,
	array(
		'label'            => esc_html__('Select Icon', 'absolute-addons'),
		'type'             => Controls_Manager::ICONS,
		'fa4compatibility' => 'absolute-addons',
		'default'          => [
			'value'   => 'fa fa-facebook',
			'library' => 'solid',
		],

	)
);

$repeater->add_control(
	'team_member_social_icon_url'.$suffix,
	array(
		'label'       => esc_html__('Type Url', 'absolute-addons'),
		'type'        => Controls_Manager::TEXT,
		'placeholder' => __('Type your social profile link', 'absolute-addons'),
		'default'     => '#',
	)
);

$repeater->start_controls_tabs(
	'team_social'.$suffix
);

$repeater->start_controls_tab(
	'team_social_normal_tab'.$suffix,
	[
		'label' => __('Normal', 'absolute-addons'),
	]
);

$repeater->add_control(
	'team_member_social_icon_color'.$suffix,
	array(
		'label'     => esc_html__('Select Icon Color', 'absolute-addons'),
		'type'      => Controls_Manager::COLOR,
		'selectors' => [
			'{{WRAPPER}} .absp-team.element-five .absp-team-item .absp-image-area .member-image .social-icons ul  {{CURRENT_ITEM}} a' => 'color:{{VALUE}}',
		],

	)
);

$repeater->add_control(
	'team_member_social_icon_bgcolor'.$suffix,
	array(
		'label'     => esc_html__('Icon  Background Color', 'absolute-addons'),
		'type'      => Controls_Manager::COLOR,
		'selectors' => [
			'{{WRAPPER}} .absp-team.element-five .absp-team-item .absp-image-area .member-image .social-icons ul  {{CURRENT_ITEM}} a' => 'background:{{VALUE}}',
		],
	)
);

$repeater->end_controls_tab();

$repeater->start_controls_tab(
	'team_social_hover_tab'.$suffix,
	[
		'label' => __('Hover', 'absolute-addons'),
	]
);

$repeater->add_control(
	'team_member_social_icon_color_hover'.$suffix,
	array(
		'label'     => esc_html__('Icon Hover Color', 'absolute-addons'),
		'type'      => Controls_Manager::COLOR,
		'selectors' => [
			'{{WRAPPER}} .absp-team.element-five .absp-team-item .absp-image-area .member-image .social-icons ul  {{CURRENT_ITEM}} a:hover' => 'color:{{VALUE}}',
		],

	)
);

$repeater->add_control(
	'team_member_social_icon_bgcolor_hover'.$suffix,
	array(
		'label'     => esc_html__('Icon Hover Background Color', 'absolute-addons'),
		'type'      => Controls_Manager::COLOR,
		'selectors' => [
			'{{WRAPPER}} .absp-team.element-five .absp-team-item .absp-image-area .member-image .social-icons ul  {{CURRENT_ITEM}} a:hover' => 'background:{{VALUE}}',
		],
	)
);


$repeater->end_controls_tab();

$repeater->end_controls_tabs();

$this->add_control(
	'team_member_social_media'.$suffix,
	array(
		'label'       => esc_html__('Social Media', 'absolute-addons'),
		'type'        => Controls_Manager::REPEATER,
		'fields'      => $repeater->get_controls(),
		'title_field' => '<i class="{{{team_member_social_icon_five.value}}}" aria-hidden="true"></i>  {{{team_member_social_icon_five.value}}}',
		'default'     => [
			[
				'team_member_social_icon_url_five'         => __('#', 'absolute-addons'),
				'team_member_social_icon_five'             => [
					'library' => 'solid',
					'value'   => 'fa fa-facebook',
				],
				'team_member_social_icon_color_five'       => '#fff',
				'team_member_social_icon_bgcolor_five'     => '#4267B2',
				'team_member_social_icon_color_hover_five' => '#fff',
				'team_member_social_icon_bgcolor_hover_five' => '#3870E3',
			],
			[
				'team_member_social_icon_url_five'         => __('#', 'absolute-addons'),
				'team_member_social_icon_five'             => [
					'library' => 'solid',
					'value'   => 'fa fa-twitter',
				],
				'team_member_social_icon_color_five'       => '#fff',
				'team_member_social_icon_bgcolor_five'     => '#1EC8FF',
				'team_member_social_icon_color_hover_five' => '#fff',
				'team_member_social_icon_bgcolor_hover_five' => '#1EC8Fe',
			],
			[
				'team_member_social_icon_url_five'         => __('#', 'absolute-addons'),
				'team_member_social_icon_five'             => [
					'value' => 'fa fa-linkedin',
				],
				'team_member_social_icon_color_five'       => '#fff',
				'team_member_social_icon_bgcolor_five'     => '#007DA5',
				'team_member_social_icon_color_hover_five' => '#fff',
				'team_member_social_icon_bgcolor_hover_five' => '#007DA6',
			],
		],
	)
);

$this->end_controls_section();


