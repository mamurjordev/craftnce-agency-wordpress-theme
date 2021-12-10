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