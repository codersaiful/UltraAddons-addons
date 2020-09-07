<?php
$my_shortcode = isset( $settings['text'] ) ? $settings['text'] : '';

echo do_shortcode( $settings['text'] );