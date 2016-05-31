<?php

/* 
 * This class will enqueue the stylesheet and render the meta box 
 * that will be used to display the given post meta.
 */
class Single_Post_Meta_Manager_Admin{
    protected $version;
    
    public function __construct($version){
        $this->version = $version;
    }
    
    public function enqueue_styles(){
        
    }
    
    public function add_meta_box(){
        
    }
}