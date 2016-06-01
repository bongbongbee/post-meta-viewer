<?php

/* 
 * This primary plugin class is is responsible for 
 * loading the dependencies, 
 * setting the locale, and 
 * coordinating the hooks.
 */
class Single_Post_Meta_Manager{
    protected $loader;
    protected $plugin_slug;
    protected $version;
    
    public function __construct(){
        $this->plugin_slug = 'single-post-meta-manager-slug';
        $this->version = '0.2.0';
        
        $this->load_dependencies();
        $this->define_admin_hooks();
    }
   
    private function load_dependencies(){
        require_once plugin_dir_path(dir_name(__FILE__)).'admin/class-single-post-manager-admin.php';
        require_once plugin_dir_path(__FILE__).'class-single-post-meta-manager-loader.php';
        $this->loader = new Single_Post_Meta_Manager_Loader();
        
    }
    
    private function define_admin_hooks(){
        $admin = new Single_Post_Meta_Manager_Admin($this->get_version());
        $this->loader->add_action('admin_enqueue_scripts', $admin, 'enqueue_styles');
        $this->loader->add_action('add_meta_boxes', $admin, 'add_meta_box');
    }
    
    public function run(){
        
    }
    
    public function get_version(){
        return $this->version;
    }
}