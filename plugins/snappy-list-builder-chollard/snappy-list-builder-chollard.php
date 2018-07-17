<?php
/*
Plugin Name:  Snappy-list-builder-chollard
Description:  Plugin de tutoriel
Version:      0.1
Author:       Cédric HOLLARD
*/

add_action('init', 'slbc_register_shortcodes');

function slbc_register_shortcodes()
{
    add_shortcode('slbc_form', 'slbc_form_shortcode');
}

function slbc_form_shortcode($args, $content="")
{
    $output = '';
    $output .= '<div class="slbc">';
    $output .= '<form id="slbc_form" name="slbc_form" class="slbc-form" method="post">';
    $output .= '<p class="slbc-input-container">';
    $output .= '<label>Your Name</label><br/>';
    $output .= '<input type="text" name="slbc_fname" placeholder="First name"/>';
    $output .= '<input type="text" name="slbc_lname" placeholder="Last name"/>';
    $output .= '</p>';
    $output .= '<p class="slbc-input-container">';
    $output .= '<label>Your Email</label><br/>';
    $output .= '<input type="text" name="slbc_email" placeholder="you@email.com"/>';
    $output .= '</p>';

    if (strlen($content)) {
        $output .= '<div class="slbc-content">'.wpautop($content).'</div>';
    }

    $output .= '<p class="slbc-input-container">';
    $output .= '<input type="submit" name="slbc_submit" value="submit"/>';
    $output .= '</p>';
    $output .= '</form>';
    $output .= '</div>';

    return $output;
}