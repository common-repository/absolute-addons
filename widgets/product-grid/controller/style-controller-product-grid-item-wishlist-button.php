<?php
defined( 'ABSPATH' ) || exit;

use AbsoluteAddons\Controls\Group_Control_ABSP_Background;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;

$this->start_controls_section(
	'product_grid_wishlist_btn_section',
	[
		'label'     => esc_html__( 'Wishlist Button', 'absolute-addons' ),
		'tab'       => Controls_Manager::TAB_STYLE,
		'condition' => [
			'enable_wishlist' => 'yes',
		],
	]
);

$this->start_controls_tabs( 'product_grid_wishlist_btn_tabs' );

// Normal State Tab
$this->start_controls_tab(
	'product_grid_wishlist_btn_normal',
	[
		'label' => esc_html__( 'Normal', 'absolute-addons' ),
	]
);

$this->add_group_control(
	Group_Control_Typography::get_type(),
	[
		'label'    => esc_html__( 'Button Typography', 'absolute-addons' ),
		'name'     => 'product_grid_wishlist_btn_typography',
		'selector' => '
		{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a
		',
	]
);

$this->add_control(
	'product_grid_wishlist_btn_color',
	[
		'label'     => esc_html__( 'Button Color', 'absolute-addons' ),
		'type'      => Controls_Manager::COLOR,
		'selectors' => [
			'
			{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a
			' => 'color: {{VALUE}};',
		],
	]
);

$this->add_group_control(
	Group_Control_ABSP_Background::get_type(),
	[
		'name'     => 'product_grid_wishlist_btn_background',
		'label'    => esc_html__( 'Button Background', 'absolute-addons' ),
		'types'    => [ 'classic', 'gradient' ],
		'selector' => '
		{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a
		',
	]
);

$this->add_group_control(
	Group_Control_Border::get_type(),
	[
		'name'     => 'product_grid_wishlist_btn_border',
		'label'    => esc_html__( 'Button Border', 'absolute-addons' ),
		'selector' => '
		{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a
		',
	]
);

$this->add_responsive_control(
	'product_grid_wishlist_btn_border_radius',
	[
		'label'      => esc_html__( 'Button Border Radius', 'absolute-addons' ),
		'type'       => Controls_Manager::DIMENSIONS,
		'size_units' => [ 'px', 'em', '%' ],
		'selectors'  => [
			'
			{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a
			' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		],
	]
);

$this->add_group_control(
	Group_Control_Box_Shadow::get_type(),
	[
		'name'     => 'product_grid_wishlist_btn_box_shadow',
		'label'    => esc_html__( 'Box Shadow', 'absolute-addons' ),
		'selector' => '
		{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a
		',
	]
);

$this->add_responsive_control(
	'product_grid_wishlist_btn_margin',
	[
		'label'      => esc_html__( 'Margin', 'absolute-addons' ),
		'type'       => Controls_Manager::DIMENSIONS,
		'size_units' => [ 'px', 'em', '%' ],
		'selectors'  => [
			'
			{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a
			' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		],
	]
);

$this->end_controls_tab();

// Hover State Tab
$this->start_controls_tab(
	'product_grid_wishlist_btn_hover',
	[
		'label' => esc_html__( 'Hover', 'absolute-addons' ),
	]
);

$this->add_control(
	'product_grid_wishlist_btn_color_hover',
	[
		'label'     => esc_html__( 'Button Color', 'absolute-addons' ),
		'type'      => Controls_Manager::COLOR,
		'selectors' => [
			'
			{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:hover
			' => 'color: {{VALUE}};',
		],
	]
);

$this->add_group_control(
	Group_Control_ABSP_Background::get_type(),
	[
		'name'     => 'product_grid_wishlist_btn_background_hover',
		'label'    => esc_html__( 'Button Background', 'absolute-addons' ),
		'types'    => [ 'classic', 'gradient' ],
		'selector' => '
			{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:hover
		',
	]
);

$this->add_control(
	'product_grid_wishlist_btn_border_color_hover',
	[
		'label'     => esc_html__( 'Button Border Color', 'absolute-addons' ),
		'type'      => Controls_Manager::COLOR,
		'selectors' => [
			'
			{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:hover
			' => 'border-color: {{VALUE}};',
		],
	]
);

$this->add_responsive_control(
	'product_grid_wishlist_btn_border_radius_hover',
	[
		'label'      => esc_html__( 'Button Border Radius', 'absolute-addons' ),
		'type'       => Controls_Manager::DIMENSIONS,
		'size_units' => [ 'px', 'em', '%' ],
		'selectors'  => [
			'
			{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:hover
			' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
		],
	]
);

$this->add_group_control(
	Group_Control_Box_Shadow::get_type(),
	[
		'name'     => 'product_grid_wishlist_btn_box_shadow_hover',
		'label'    => esc_html__( 'Box Shadow', 'absolute-addons' ),
		'selector' => '
		{{WRAPPER}} .absp-wrapper .absp-product-grid-item .product-grid-item-inner .product-grid-item-button-inner .product-grid-item-wishlist-btn .yith-wcwl-add-to-wishlist .yith-wcwl-add-button a:hover
		',
	]
);

$this->end_controls_tab();

$this->end_controls_tabs();

$this->end_controls_section();
