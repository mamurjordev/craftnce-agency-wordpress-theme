<?php

if ( class_exists( 'WP_Customize_Panel' ) ) {
  class PE_WP_Customize_Panel extends WP_Customize_Panel {
    public $panel;
    public $type = 'pe_panel';
    public function json() {
      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
      $array['content'] = $this->get_content();
      $array['active'] = $this->active();
      $array['instanceNumber'] = $this->instance_number;

      return $array;
    }
  }
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  class PE_WP_Customize_Section extends WP_Customize_Section {
    public $section;
    public $type = 'pe_section';
    public function json() {

      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
      $array['content'] = $this->get_content();
      $array['active'] = $this->active();
      $array['instanceNumber'] = $this->instance_number;

      if ( $this->panel ) {
        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
      } else {
        $array['customizeAction'] = 'Customizing';
      }
      return $array;
    }
  }
}

// Enqueue our scripts and styles
function pe_customize_controls_scripts() {
  wp_enqueue_script( 'pe-customize-controls', get_theme_file_uri( '/assets/js/pe-customize-controls.js' ), array(), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'pe_customize_controls_scripts' );

function pe_customize_controls_styles() {
  wp_enqueue_style( 'pe-customize-controls', get_theme_file_uri( '/assets/css/pe-customize-controls.css' ), array(), '1.0' );
}
add_action( 'customize_controls_print_styles', 'pe_customize_controls_styles' );

function pe_customize_register( $wp_customize ) {
  // Has to be at the top
  $wp_customize->register_panel_type( 'PE_WP_Customize_Panel' );
  $wp_customize->register_section_type( 'PE_WP_Customize_Section' );

  // Below this there is only demo code, safe to delete and add your own
  // panels/sections/controls

  // Add three levels on panels
  $lvl1ParentPanel = new PE_WP_Customize_Panel( $wp_customize, 'lvl_1_parent_panel', array(
    'title' => 'Level 1',
    'priority' => 131,
  ));

  $wp_customize->add_panel( $lvl1ParentPanel );

  $lvl2ParentPanel = new PE_WP_Customize_Panel( $wp_customize, 'lvl_2_parent_panel', array(
    'title' => 'Level 2',
    'panel' => 'lvl_1_parent_panel',
  ));

  $wp_customize->add_panel( $lvl2ParentPanel );

  $lvl3ParentPanel = new PE_WP_Customize_Panel( $wp_customize, 'lvl_3_parent_panel', array(
    'title' => 'Level 3',
    'panel' => 'lvl_2_parent_panel',
    'priority' => 1,
  ));

  $wp_customize->add_panel( $lvl3ParentPanel );

  // Add example section and controls to the final (third) panel
  $wp_customize->add_section( 'pe_section', array(
    'title' => 'Section Test',
    'panel' => 'lvl_3_parent_panel',
  ));

  $wp_customize->add_setting( 'pe_test', array(
    'default' => 'default value here',
    'sanitize_callback' => 'wp_kses_post',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control( 'pe_test', array(
    'type' => 'text',
    'label' => 'Some text control',
    'section' => 'pe_section',
  ));

  // Add example section and controls to the middle (second) panel
  $wp_customize->add_section( 'pe_section_2', array(
    'title' => 'Section 2 Test',
    'panel' => 'lvl_2_parent_panel',
    'priority' => 2,
  ));

  $wp_customize->add_setting( 'pe_test_2', array(
    'default' => 'default value here',
    'sanitize_callback' => 'wp_kses_post',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control( 'pe_test_2', array(
    'type' => 'text',
    'label' => 'Some text control 2',
    'section' => 'pe_section_2',
  ));

  // Add example section and controls to another section
  $lvl1ParentSection = new PE_WP_Customize_Section( $wp_customize, 'lvl_1_parent_section', array(
    'title' => 'Level 1 Section',
    'panel' => 'lvl_3_parent_panel',
  ));

  $wp_customize->add_section( $lvl1ParentSection );

  $lv21ParentSection = new PE_WP_Customize_Section( $wp_customize, 'lvl_2_parent_section', array(
    'title' => 'Level 2 Section',
    'section' => 'lvl_1_parent_section',
    'panel' => 'lvl_3_parent_panel',
  ));

  $wp_customize->add_section( $lv21ParentSection );

  $wp_customize->add_setting( 'pe_test_3', array(
    'default' => 'default value here',
    'sanitize_callback' => 'wp_kses_post',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control( 'pe_test_3', array(
    'type' => 'text',
    'label' => 'Some text control 3',
    'section' => 'lvl_2_parent_section',
  ));

}

add_action( 'customize_register', 'pe_customize_register' );