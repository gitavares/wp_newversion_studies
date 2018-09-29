<?php 
    /*
    Plugin Name: My First Amazing Plugin
    Description: This plugin will change your life
    */

    add_filter('the_content', 'amazingContentEdits');

    function amazingContentEdits($content) {
        $content = $content . '<p>All content belongs to Amazing University</p>';
        $content = str_replace('Lorem', '*****', $content);
        return $content;
    }

    add_shortcode('programCount', 'programaCountFunction');

    function programaCountFunction() {
        return 5;
    }
?>