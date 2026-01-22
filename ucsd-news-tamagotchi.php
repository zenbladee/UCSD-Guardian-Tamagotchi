<?php

/**
 * Plugin-Name: ucsd news tamagotchi
 * Description: Tamagotchi for UCSD: The Guardian webpage
 * Authors:
 * Version: 1.0.0
 */

// Add the iframe 
function tamagotchi_iframe() {
    ?>
    <div id="tamagotchi">
        <iframe
            src ="insert iframe link"
            width = "500"
            height = "500"
            style = "border: none";
            scrolling = "no";
        ></iframe>
    </div>
    <?php
}

//Wordpress function allowing it to appear on page
add_action('wp-footer', 'tamagotchi_iframe');

