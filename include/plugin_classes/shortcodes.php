<?php

class MyShortcodes{
    function __construct(){
        add_shortcode ('test_shortcode', [$this, 'test_shortcode']);
    }

    function test_shortcode(){
        global $MyPlugin;
        echo "test";  
    }  
}
?>