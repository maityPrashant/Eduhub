<?php
/**
 * Created by PhpStorm.
 * User: prashant
 * Date: 11/1/18
 * Time: 10:18 PM
 */

function eduhub_register_custom_fields()
{
    /**
     * Register Custom Fields For Video
     */
    eduhub_register_custom_fields_for_video();

    /**
     * Register Custom Fields For Handouts
     */
    eduhub_register_custom_fields_for_handouts();

}

/**
 *  Register Custom Fields For Video
 */
function eduhub_register_custom_fields_for_video()
{
    if (function_exists("register_field_group")) {
        register_field_group(array(
            'id' => 'acf_video-filed-group',
            'title' => 'Video Filed Group',
            'fields' => array(
                array(
                    'key' => 'field_5a57ae11d0843',
                    'label' => 'Url',
                    'name' => 'url',
                    'type' => 'text',
                    'instructions' => 'Enter Video Url ',
                    'required' => 1,
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'none',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'video',
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                ),
            ),
            'options' => array(
                'position' => 'normal',
                'layout' => 'no_box',
                'hide_on_screen' => array(),
            ),
            'menu_order' => 0,
        ));
    }

}

/**
 * Register Custom Fields For Handouts
 */
function eduhub_register_custom_fields_for_handouts()
{
    if (function_exists("register_field_group")) {
        register_field_group(array(
            'id' => 'acf_handout-field-group',
            'title' => 'Handout Field Group',
            'fields' => array(
                array(
                    'key' => 'field_5a57aeca90a89',
                    'label' => 'Url',
                    'name' => 'url',
                    'type' => 'text',
                    'required' => 1,
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'html',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_5a57ae8390a87',
                    'label' => 'Mime Type',
                    'name' => 'mime_type',
                    'type' => 'text',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'html',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_5a57ae9290a88',
                    'label' => 'size',
                    'name' => 'size',
                    'type' => 'number',
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'min' => 0,
                    'max' => '',
                    'step' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'handout',
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                ),
            ),
            'options' => array(
                'position' => 'normal',
                'layout' => 'no_box',
                'hide_on_screen' => array(),
            ),
            'menu_order' => 0,
        ));
    }

}


