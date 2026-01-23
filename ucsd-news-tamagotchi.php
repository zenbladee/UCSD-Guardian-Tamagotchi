<?php

/**
 * Plugin Name: ucsd news tamagotchi
 * Description: Tamagotchi for UCSD: The Guardian webpage
 * Authors: Samuel and Sophia
 * Version: 1.0.0
 */

//Prevents direct access
if(!defined('ABSPATH')) {
    exit;
}

// Add the iframe 
function tamagotchi_iframe() {
    ?>
    <div id="tamagotchi">
        <iframe
            src = "iframe link"
            width = "500"
            height = "500"
            style = "border: none;"
            scrolling = "no"
        ></iframe>
    </div>
    <?php
}

//Wordpress function allowing it to appear on page
add_action('wp_footer', 'tamagotchi_iframe');

